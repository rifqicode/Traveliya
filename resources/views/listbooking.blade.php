@extends('layouts.navbar')

@section('content')

    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Booking</div>

                <div class="panel-body">
                <table class="table table-striped">
                    <tr>
                        <td>Nama Pemesan</td>
                        <td>Type Trip</td>
                        <td>Ticket Code</td>
                        <td>Adult</td>
                        <td>Child</td>
                        <td>Status</td>
                        <td>Option</td>
                    </tr>
                    @foreach($list as $l)                    
                    <tr>

                        <td>{{ $l->name }}</td>
                        <td>{{ $l->type_trip }}</td>
                        <td>{{ $l->ticket_code }}</td>
                        <td>{{ $l->adult }}</td>
                        <td>{{ $l->child }}</td>
                        <td>{{ $l->status }}</td>
                        <td><a href="{{ url('payment/'.$l->id_trainticket) }}" class="btn btn-primary">Pay</a></td>
                    </tr>
                    @endforeach   
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection
