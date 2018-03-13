<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainticket;
use App\DetailPassenger;
use App\Payment;
use App\Train;
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

      $id = Auth::user()->id;

        $pay = new Payment;
        $pay->id_trainticket = $request->id_trainticket;
        $pay->id_users = $id;
        $pay->pay_code = str_random(10);
        $pay->pay_via = $request->payment_via;
        $pay->no_rekening = $request->no_rekening;
        $pay->save();


        $status = 1;
        $code = str_random(10);
        $ticket = Trainticket::updateStatus($request->id_trainticket , $status);


        flash('Silahkan Lakukan Pembayaran di'.' '.$request->payment_via);
        return redirect('/bookinglist');

    }

    public function apiPayment($code)
    {
        $check = Payment::findCode($code);
        // return $check;
        foreach ($check as $c ) {
          $id_payment = $c->id_payment;
          $id_trainticket = $c->id_trainticket;
        }

        $id_users = Auth::user()->id;
        $status = 2;
        $code = str_random(10);
        $pay = Payment::checkPayment($id_trainticket , $id_users , $status);
        $ticket = Trainticket::updatePayment($id_trainticket , $status , $code);

        flash('Pembayaran Sukses');
        return redirect('/bookinglist');

    }


    public function showpay(Request $request , $id_trainticket)
    {

      $id = Auth::user()->id;
      $train = Trainticket::where('id_trainticket' , $id_trainticket)->get();
      foreach ($train as $t) {
        $id_train = $t->id_train;
      }

      $findtrain = Train::where('id_train' , $id_train)->get();
        foreach ($findtrain as $ft) {
          $price = $ft->price;
        }

      $showPas = DetailPassenger::countPas($id_trainticket);

      $price = number_format($price * $showPas,2,",",".");
      // number_format($price * $showPas,2);
      $cek = Payment::infoPayment($id , $id_trainticket);

       return view('showpayment' , compact('cek' , 'price'));
    }

    public function showticket($id_trainticket)
    {
       $showTicket = Trainticket::where('id_trainticket' , $id_trainticket)->get();
       // return $showTicket;
       foreach ($showTicket as $key) {
         $ticket_code = $key->ticket_code;
       }
       $showPassenger = DetailPassenger::where('id_trainticket', $id_trainticket)->get();
       // return $showPassenger;
       return view('showticket', compact('showTicket' , 'showPassenger' , 'ticket_code'));
    }

}
