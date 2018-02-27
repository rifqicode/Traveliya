@extends('layouts.navbar')

@section('content')

    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tagihan</div>

                <div class="panel-body">
                <table class="table table-bordered">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#train" aria-expanded="true" aria-controls="collapseOne">
                            <center> Pembayaran Ticket  </center>
                        </a>
                      </h4>
                    </div>
                    <div id="train" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        @foreach($cek as $c)
                        <div class="col-sm-12 mt">
                          <div class="input-field">
                            <p align="center"> Code Pembayaran </p>
                          </div>
                            <div class="input-field">
                              <p align="center"><font size="10">{{ $c->pay_code }}</font></p>
                            </div>
                        </div>

                        <div class="col-sm-12 mt">
                          <div class="input-field">
                            <p align="center"> Biaya Pembayaran </p>
                          </div>
                            <div class="input-field">
                              <p align="center"><font size="10">Rp . {{ $price }}</font></p>
                            </div>
                        </div>

                        <div class="col-sm-12 mt">
                          <div class="input-field">
                             Payment Via
                          </div>
                            <div class="input-field">
                              <font size="5">{{ $c->pay_via }}</font>
                            </div>
                        </div>

                        <div class="col-sm-12 mt">
                          <div class="input-field">
                          Tanggal Pembayaran
                          </div>
                            <div class="input-field">
                              <font size="5">{{ $c->created_at }}</font>
                            </div>
                        </div>
                            @endforeach
                      </div>
                    </div>
                    </div>

            </div>
        </div>
    </div>

    <script>


    </script>
@endsection
