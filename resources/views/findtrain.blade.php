@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Train</div>

                <div class="panel-body">

                  @foreach($traindata as $dtrain)
                  <div class="card" style="width: 20rem;">
                      <img class="card-img-top" src="..." alt="Card image cap">
                      <div class="card-block">
                        <h4 class="card-title">{{ $dtrain->train }}</h4>
                        <p class="card-text">Dari :{{ $dtrain->from }}</p>
                        <p class="card-text">Tujuan :{{ $dtrain->destination }}</p>
                        <a href="#" class="btn btn-primary"> Order </a>
                      </div>
                      </div>
                      <br>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
