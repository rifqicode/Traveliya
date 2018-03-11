@extends('layouts.navbaradmin')
@section('content')
    <!-- Main content -->
<div class="container">
    <div class="row">


      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Stasiun</h3>
          </div>
          <div class="box-body">

            <form action="{{ url('admin/station/createStation')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group float-label-control">
                <label for="">Nama stasiun</label>
                <input type="text" name="station_name" class="form-control" placeholder="station">
            </div>

            <div class="form-group float-label-control">
                <label for="">Location</label>
                <input type="text" name="location" class="form-control" placeholder="location">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            </form>


            </div>
        </div>
    </div>
</div>

@endsection
