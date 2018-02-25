@extends('layouts.navbar')

@section('content')
    <div class="row">
      <br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Train</div>

                <div class="panel-body">

                  @foreach($find as $dtrain)

                  <form class="" action="{{ url('train/booking/'.$dtrain->id_train)}}" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="dep_date" value="{{ $dep_date }}">
                    <input type="hidden" name="class" value="{{ $class }}">
                    <input type="hidden" name="from" value="{{ $from }}">
                    <input type="hidden" name="destination" value="{{ $destination }}">
                    <input type="hidden" name="return_date" value="{{ $return_date }}">
                    <input type="hidden" name="adult" value="{{ $adult }}">
                    <input type="hidden" name="child" value="{{ $child }}">
                    <input type="hidden" name="type_trip" value="{{ $type_trip }}">
                    <input type="hidden" name="destination" value="{{ $dtrain->destination }}">

                    <div class="card" style="width: 20rem;">
                      <div class="card-block">
                        <h4 class="card-title">{{ $dtrain->train }}</h4>
                        <p class="card-text">Dari :{{ $dtrain->from }}</p>
                        <p class="card-text">Tujuan :{{ $dtrain->destination }}</p>
                        <input type="submit" class="btn btn-primary" value="Order">
                      </div>
                    </div>

                  </form>
                      <br>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
