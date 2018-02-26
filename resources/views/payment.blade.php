@extends('layouts.navbar')

@section('content')

    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Payment</div>

                <div class="panel-body">
                <table class="table table-bordered">
                    <form action="{{ url('/payment/pay')}}" method="post">

                    {{ csrf_field() }}
                    
                    <input type="hidden" value="trainticket" name="id_trainticket">
                    <select name="pay_via" class="form-control" id="payment_via">

                        <option value="select"> Payment Via </option>
                        <option value="BCA"> BCA </option>
                        <option value="Alfamart"> Alfamart </option>
                        <option value="Indomart"> Indomart </option>
                    
                    </select>

                    <br>
                    <input id="otherType" style="display: none; "type="text" name="no_rekening" placeholder="No Rekening" class="form-control"/>

                    <br>

                    <input type="submit" value="Pay" class="btn btn-primary">
                    
                    </form>  
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection
