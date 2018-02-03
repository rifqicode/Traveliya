@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Train</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" action="{{ url('/train/find/')}}" method="post">
                      {{ csrf_field() }}
                      <input type="text" name="from" placeholder="from">
                      <input type="text" name="destination" placeholder="destination">
                        <input type="submit" name="" value="Find">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
