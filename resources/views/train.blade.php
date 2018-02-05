@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Train</div>

                <div class="panel-body">
                    <form action="{{ url('/train/find/')}}" method="post">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('type_trip') ? ' has-error' : '' }}">
                          <label for="type_trip" class="col-md-4 control-label">Type trip</label>

                              <div class="col-md-6" required>
                                  <select name="type_trip" class="form-control">
                                    <option value="NULL">Jenis Trip</option>
                                    <option value="Ekonomi">Single Trip</option>
                                    <option value="Ekonomi">Round Trip</option>
                                  </select>
                              @if ($errors->has('type_trip'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('type_trip') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('departure_date') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Tanggal Berangkat </label>

                          <div class="col-md-6">
                              <input id="departure_date" type="date" class="form-control" name="departure_date" required>

                              @if ($errors->has('departure_date'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('departure_date') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Kelas</label>

                          <div class="col-md-6" required>
                              <select name="class" class="form-control">
                                <option value="NULL">Pilih class</option>
                                <option value="Ekonomi">Ekonomi</option>
                                <option value="Ekonomi">Eklusif</option>
                              </select>

                              @if ($errors->has('class'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('class') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                        <div class="form-group{{ $errors->has('from') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Dari</label>

                            <div class="col-md-6">
                                <input id="from" type="text" class="form-control" name="from" required>

                                @if ($errors->has('from'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('from') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Tujuan</label>

                            <div class="col-md-6">
                                <input id="destination" type="text" class="form-control" name="destination" required>

                                @if ($errors->has('destination'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('destination') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('adult') ? ' has-error' : '' }}">
                            <label for="adult" class="col-md-4 control-label">Dewasa</label>
                            <div class="col-md-6" required>
                                <select name="adult" class="form-control">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                </select>
                                @if ($errors->has('adult'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adult') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('child') ? ' has-error' : '' }}">
                            <label for="child" class="col-md-4 control-label">Anak Anak</label>
                            <div class="col-md-6" required>
                                <select name="child" class="form-control">
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                </select>
                                @if ($errors->has('child'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('child') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
