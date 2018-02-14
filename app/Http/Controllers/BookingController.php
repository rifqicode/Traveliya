<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailPassenger;
use App\Trainticket;
use Carbon\Carbon;
use Auth;

class BookingController extends Controller
{
  public function __construct()
  {
      $this->middleware('booking');
  }

  public function bookingView(Request $request , $id)
  {

    $adult = $request->input('adult');
    $child = $request->input('child');
    $type_trip = $request->input('type_trip');

    // return $type_trip;

    // $datas = ['name' => $name , 'email' => $email , 'adult' => $adult , 'child' => $child];
    return view('booking' , compact('adult','child' , 'id' , 'type_trip'));
    // return $datas;
  }

  public function BookingForm(Request $request)
  {

        $idtrain = $request->input('id');
        $adult = $request->input('adult');
        $child = $request->input('child');
        $no_telp = $request->input('no_telp');
        $type_trip = $request->input('type_trip');
        $name_contact = $request->input('name_contact');
        $email_contact = $request->input('email_contact');
        $name = $request->input('name');
        $email = $request->input('email');
        $no_ktp = $request->input('no_ktp');
        $borndate = $request->input('born_date');


        $dTrainticket = new Trainticket();
        $dTrainticket->id_users = Auth::user()->id;
        $dTrainticket->id_train = $idtrain;
        $dTrainticket->type_trip = $type_trip; // belum
        $dTrainticket->ticket_code = str_random(10);
        $dTrainticket->no_telp = $no_telp;
        $dTrainticket->adult = $adult;
        $dTrainticket->child = $child;
        $dTrainticket->status = 0;
        $dTrainticket->save();

        for ($i=0; $i < $adult ; $i++) {
            $dPassenger = new DetailPassenger();
            $dPassenger->id_trainticket = $idtrain;
            $dPassenger->name_passenger = $name[$i];
            $dPassenger->email_passenger = $email[$i];
            $dPassenger->no_ktp = $no_ktp[$i];
            $dPassenger->born_date = $borndate[$i];
            $dPassenger->save();
            // return $name[$i];
        }

        flash('Pemesanan Berhasil');
        return redirect('train');
  }
}
