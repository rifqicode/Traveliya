@extends('layouts.navbaradmin')
@section('content')
    <!-- Main content -->
<div class="container">
    <div class="row">


    <div class="col-md-6">
      <div class="box box-success">
        <div class="box-header with-primary">
          <h3 class="box-title">Rute Kereta</h3>
        </div>
        <div class="box-body">
                <form role="form" action="{{ url('admin/train/createTrain')}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group float-label-control">
                    <label for="">train</label>
                    <input type="text" class="form-control" placeholder="Train" name="train">
                </div>
                    <div class="form-group float-label-control">
                        <label for="">class</label>

                        <select name="class" class="form-control">
                        <option value="ekonomi">Ekonomi</option>
                        <option value="Bisnis">Bisnis</option>
                        <option value="firstclass">First Class</option>

                        </select>
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">departure date</label>
                        <input type="date" class="form-control" placeholder="departure date" name="departure_date">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">form  </label>

                        <select name="from" class="form-control">

                        @foreach($station as $s)
                        <option value="{{ $s->station_name }}">{{ $s->station_name }}</option>
                        @endforeach

                        </select>

                    </div>

                    <div class="form-group float-label-control">
                        <label for="">destination</label>
                        <select name="destination" class="form-control">

                        @foreach($station as $s)
                        <option value="{{ $s->station_name }}">{{ $s->station_name }}</option>
                        @endforeach

                        </select>
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">hours</label>
                        <input type="time" class="form-control" placeholder="hours" name="hours">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">max</label>
                        <input type="number" class="form-control" placeholder="max" name="max">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">price</label>
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Rp. </span>
                      <input type="text" name="price" class="form-control" aria-label=" IDR ">
                      <span class="input-group-addon">.00</span>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
