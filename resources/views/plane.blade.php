@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Plane</div>

                <div class="panel-body">
                    <form action="{{ url('/flight/find/')}}" method="post">
                      {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('from') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">From</label>

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
                            <label for="password" class="col-md-4 control-label">Destination</label>

                            <div class="col-md-6">
                                <input id="destination" type="text" class="form-control" name="destination" required>

                                @if ($errors->has('destination'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('destination') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Find
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
