@extends('layouts.navbaradmin')
@section('content')
    <!-- Main content -->
    <section class="content">
<div class="container">
    <div class="row">


        <div class="row">
            <div class="col-sm-8">

                <form role="form" action="{{ url('admin/train/update')}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id" value="{{ $id }}">
                @foreach($showTrain as $s)
                    <div class="form-group float-label-control">
                    <label for="">train</label>
                    <input class="form-control" placeholder="Train" name="train" value={{$s->train}}>
                </div>
                    <div class="form-group float-label-control">
                        <label for="">class</label>

                        <select name="class" class="form-control">
                        <option value="{{$s->class}}">{{$s->class}}</option>
                        <option value="ekonomi" >Ekonomi</option>
                        <option value="Bisnis">Bisnis</option>
                        <option value="firstclass">First Class</option>

                        </select>
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">departure date</label>
                        <input type="date" class="form-control" placeholder="departure date" name="departure_date" value={{$s->class}}>
                    </div>
                    <div class="form-group float-label-control">
                    @endforeach
                        <label for="">form  </label>

                        <select name="from" class="form-control">
                    @foreach($showStation as $s)
                        <option value="{{ $s->station_name }}">{{ $s->station_name }}</option>
                    @endforeach


                        </select>

                    </div>

                    <div class="form-group float-label-control">
                        <label for="">destination</label>
                        <select name="destination" class="form-control"  value={{$s->class}}>

                        @foreach($showStation as $s)
                        <option value="{{ $s->station_name }}">{{ $s->station_name }}</option>
                        @endforeach

                        </select>
                    </div>

                    @foreach($showTrain as $s)
                    <div class="form-group float-label-control">
                        <label for="">hours</label>
                        <input type="time" class="form-control" placeholder="hours" name="hours" value={{$s->hours}}>
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">max</label>
                        <input class="form-control" placeholder="max" name="max" value="{{$s->max}}">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">price</label>
                        <input class="form-control" placeholder="price" name="price" value="{{$s->price}}">
                    </div>
                    @endforeach
                    <button type="submit" class="btn">Edit</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
