@extends('layouts.navbar')

@section('content')

    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Booking</div>

                <div class="panel-body">
                  <form class="" action="{{ url('/TrainBooking/roundtrip')}}" method="post">
                    {{ csrf_field() }}


                    <input type="hidden" name="adult" value="{{ $adult }}">
                    <input type="hidden" name="child" value="{{ $child }}">
                    <input type="hidden" name="idTrain1" value="{{ $idTrain1 }}">
                    <input type="hidden" name="idTrain2" value="{{ $idTrain2 }}">
                    <input type="hidden" name="type_trip" value="{{ $type_trip }}">

                    <h4>Data Kontak</h4>
                    <input type="text" placeholder="Name" name="name_contact" value="{{ Auth::user()->name }}">
                    <input type="text" placeholder="Email" name="email_contact" value="{{ Auth::user()->email }}">
                    <input type="text" placeholder="No_Telp" name="no_telp">

                    @for($a=1; $a<= $adult; $a++)
                        <h4>Data Penumpang</h4>
                        <input type="text" placeholder="Name" name="name" >
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" placeholder="No KTP" name="no_ktp">
                        <input type="date" placeholder="Tanggal Lahir" name="born_date">
                    @endfor

                    <input  type="submit"  class="btn btn-primary" value="Booking">

                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection
