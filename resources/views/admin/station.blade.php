@extends('layouts.navbaradmin')
@section('content')
    <!-- Main content -->
    <section class="content">
<div class="container">
    <div class="row">
    

        <div class="row">
            <div class="col-sm-8">

                    <form action="{{ url('admin/station/createStation')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group float-label-control">
                        <label for="">Nama stasiun</label>
                        <input type="station" name="station_name" class="form-control" placeholder="station">
                    </div>

                    <div class="form-group float-label-control">
                        <label for="">Location</label>
                        <input type="station" name="location" class="form-control" placeholder="station">
                    </div>
                    <button type="submit" class="btn">Submit</button>
                    </form>


            </div>
        </div>
    </div>
</div>
    

        @endsection 