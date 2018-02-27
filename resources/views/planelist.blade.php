@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Train</div>

                <div class="panel-body">

                  @foreach($find as $dplane)
                  <div class="card" style="width: 20rem;">
                      <img class="card-img-top" src="..." alt="Card image cap">
                      <div class="input-field">
                        <h4 class="card-title">{{ $dplane->airplane }}</h4>
                        <p class="card-text">Dari :{{ $dplane->from }}</p>
                        <p class="card-text">Tujuan :{{ $dplane->destination }}</p>
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
