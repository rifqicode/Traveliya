@extends('layouts.navbar')

@section('content')

    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tagihan</div>

                <div class="panel-body">
                <table class="table table-bordered">
                    @foreach($showTicket as $t)
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#train" aria-expanded="true" aria-controls="collapseOne">
                            <center> Detail Kereta </center>
                        </a>
                      </h4>
                    </div>
                    <div id="train" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <div class="col-sm-12 mt">
                            <div class="input-field">
                                <label for="date-start">Nama Kereta : {{ $t->train }}</label>
                            </div>
                        </div>

                          <div class="col-sm-12 mt">
                              <div class="input-field">
                                  <label for="date-start">Dari : {{ $t->from }}</label>
                              </div>
                          </div>

                            <div class="col-sm-12 mt">
                                <div class="input-field">
                                    <label for="date-start">Tujuan : {{ $t->destination }}</label>
                                </div>
                            </div>

                            <div class="col-sm-12 mt">
                                <div class="input-field">
                                    <label for="date-start">Tanggal Keberangkatan : {{ $t->departure_date }} {{ $t->hours }}</label>
                                </div>
                            </div>
                      </div>
                    </div>
                    </div>

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#bill" aria-expanded="true" aria-controls="collapseOne">
                            <center> Pemesan </center>
                        </a>
                      </h4>
                    </div>
                    <div id="bill" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                            <div class="col-sm-12 mt">
                                <div class="input-field">
                                    <label for="date-start">Costumer Name : {{ Auth::user()->name }} </label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt">
                                <div class="input-field">
                                    <label for="date-start">Email : {{ Auth::user()->email }}</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt">
                                <div class="input-field">
                                    <label for="date-start">Type Trip : {{ $t->type_trip }}</label>
                                </div>
                            </div>
                      </div>
                    </div>
                    </div>

                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#passenger" aria-expanded="true" aria-controls="collapseOne">
                            <center> Detail Penumpang ({{ $t->adult }} Orang Dewasa dan {{ $t->child }} Anak Anak)</center>
                        </a>
                      </h4>
                    </div>
                    <div id="passenger" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        @foreach($showPas as $passenger)
                        <div class="col-sm-12 mt">
                            <div class="input-field">
                                <label for="date-start">Nama Penumpang : {{ $passenger->name_passenger}} </label>
                            </div>
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="input-field">
                                <label for="date-start">Email Penumpang : {{ $passenger->email_passenger}}</label>
                            </div>
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="input-field">
                                <label for="date-start">No_Ktp : {{ $passenger->no_ktp}} </label>
                            </div>
                        </div>
                        <div class="col-sm-12 mt">
                            <div class="input-field">
                            </div>
                        </div>

                        @endforeach
                      </div>
                    </div>
                    </div>

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#payment_via" aria-expanded="true" aria-controls="collapseOne">
                            <center> Opsi Pembayaran </center>
                        </a>
                      </h4>
                    </div>
                    <div id="payment_via" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                            <div class="col-sm-12 mt">
                              <form action="{{ url('/payment/pay')}}" method="post">

                              {{ csrf_field() }}

                              <input type="hidden" value="{{ $id_trainticket }}" name="id_trainticket">

                              <input type="radio" name="payment_via" value="bca" >

                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          VIA BCA
                                      </h4>
                                  </div>
                                  <div id="collapseOne" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                          <input type="text" class="form-control" name="no_rekening" placeholder="No Rekening BCA">
                                      </div>
                                  </div>
                              </div>

                              <input type="radio" name="payment_via" value="alfamart" >

                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          Alfamart
                                      </h4>
                                  </div>
                                  <div id="collapseTwo" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                          <p>Pembayaran melalui alfamart akan dikenakan biaya Administrasi sebesar Rp.2500 </p>
                                      </div>
                                  </div>
                              </div>

                              <input type="radio" name="payment_via" value="indomart">

                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          Indomart
                                      </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                        <p>Pembayaran melalui Indomart akan dikenakan biaya Administrasi sebesar Rp.5000 </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>

                    <br>
                    <br>


                    <p align="right">
                      <input type="submit" value="Bayar" class="btn btn-primary"/>
                    </p>

                  </form>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>

    <script>


    </script>
@endsection
