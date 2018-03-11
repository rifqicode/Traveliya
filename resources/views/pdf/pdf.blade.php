 <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <center>E Ticket</center>
                      </h4>
                    </div>
                    <div id="train" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">

                        @foreach($passenger as $pass)

                        <div class="col-sm-12 mt">
                          <div class="input-field">
                            <p align="center"><font size="5"> Ticket Code </font></p>
                          </div>
                            <div class="input-field">
                              <p align="center"><font size="10">{{ $pass->passenger_ticket }}</font></p>
                            </div>
                        </div>

                        <br>

                          <div class="col-sm-12 mt">
                              <div class="input-field">
                                <label for=""><font size="5"> Nama Penumpang :  {{ $pass->name_passenger}} </font></label>

                              </div>
                          </div>

                          <br>

                          <div class="col-sm-12 mt">
                              <div class="input-field">
                                <label for=""><font size="5"> Email Penumpang :  {{ $pass->email_passenger}} </font></label>

                              </div>
                          </div>

                          <br>

                            <div class="col-sm-12 mt">
                                <div class="input-field">
                                  <label for=""><font size="5"> No KTP : {{ $pass->no_ktp }} </font></label>
                                </div>
                            </div>

                      </div>
                    </div>
                    </div>
                    @endforeach

                  </div>
        </div>
    </div>
