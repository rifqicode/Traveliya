<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainticket;
use App\DetailPassenger;
use App\Payment;
use Auth;

class PaymentController extends Controller
{

    public function index($id_trainticket)
    {

        $id = $id_trainticket;
        $showTicket = Trainticket::showTicket($id);
        $showPas = DetailPassenger::showPas($id);
        return view('payment' ,compact('id_trainticket' , 'showTicket' , 'showPas'));

    }

    public function pay(Request $request)
    {


        $pay = new Payment;
        $pay->id_trainticket = $request->id_trainticket;
        $pay->pay_code = str_random(10);
        $pay->pay_via = $request->payment_via;
        $pay->no_rekening = $request->no_rekening;
        $pay->save();


        $status = 1;
        $ticket = Trainticket::updateStatus($request->id_trainticket , $status);


        flash('Silahkan Lakukan Pembayaran di'.$request->payment_via);
        return redirect('/');

    }

    public function apiPayment($code)
    {
        $check = Payment::findCode($code);
        // return $check;
        foreach ($check as $c ) {
          $id_trainticket = $c->id_trainticket;
        }

        $id_users = Auth::user()->id;
        $status = 2;
        $pay = Payment::checkPayment($id_trainticket , $id_users , $status);
        return redirect('/listbooking');
    }


    public function showpay(Request $request , $id_trainticket)
    {

      $id = Auth::user()->id;
      $cek = Payment::infoPayment($id , $id_trainticket);
      // return $cek;

       return view('showpayment')->with('cek', $cek);
    }

}
