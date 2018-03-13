@extends('layouts.navbar')

@section('content')

    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">E-Ticketing</div>

                <div class="panel-body">

                  @foreach($showPassenger as $pass)

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#train" aria-expanded="true" aria-controls="collapseOne">
                            <center> E-Ticket  </center>
                        </a>
                      </h4>
                    </div>
                    <div id="train" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">

                        <div class="col-sm-12 mt">
                          <div class="input-field">
                            <p align="center"> Ticket Code </p>
                          </div>
                            <div class="input-field">
                              <p align="center"><font size="10">{{ $ticket_code }}</font></p>
                            </div>
                        </div>

                          <div class="col-sm-12 mt">
                              <div class="input-field">
                                <label for=""> Nama Penumpang : {{ $pass->name_passenger }}</label>

                              </div>
                          </div>

                            <div class="col-sm-12 mt">
                                <div class="input-field">
                                  <label for=""> No KTP : {{ $pass->no_ktp }}</label>
                                </div>
                            </div>

                      </div>
                    </div>
                    </div>

                  </div>
                  @endforeach
        </div>
    </div>

    <script>


    </script>
@endsection
