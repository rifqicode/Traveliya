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
                    </tr>
                    @foreach($list as $l)
                    <tr>

                        <td>{{ $l->name }}</td>
                        <td>{{ $l->type_trip }}</td>
                        <td>{{ $l->ticket_code }}</td>
                        <td>{{ $l->adult }}</td>
                        <td>{{ $l->child }}</td>

                        @if($l->status === 0)
                        <td><a href="{{ url('payment/'.$l->id_trainticket) }}" class="btn btn-danger">Pay</a></td>
                        @elseif($l->status == 1)
                        <td><a href="{{ url('payment/pay/showpay/'.$l->id_trainticket) }}" class="btn btn-info">Info</a></td>
                        @else
                        <td><a href="{{ url('payment/'.$l->id_trainticket) }}" class="btn btn-success"> Show Ticket </a></td>
                        @endif
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection
