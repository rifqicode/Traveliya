<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailPassenger;
use App\Trainticket;
use Carbon\Carbon;
use App\Train as Train;
use Auth;

class BookingController extends Controller
{
  public function __construct()
  {
      $this->middleware('booking');
  }

  public function bookingView(Request $request , $id)
  {

    $idDepTrain = $id;
    $dep_date = $request->input('dep_date');
    $return_date = $request->input('return_date');
    $from = $request->input('from');
    $destination = $request->input('destination');
    $class = $request->input('class');
    $adult = $request->input('adult');
    $child = $request->input('child');
    $type_trip = $request->input('type_trip');

    if ($type_trip == "Round_Trip") {
      $find = Train::trainList($return_date , $class ,  $destination, $from);
      return view('roundtrip' , compact('adult','child' , 'idDepTrain' , 'type_trip' , 'find' , 'dep_date' , 'return_date'));
    } else {
    return view('booking' , compact('adult','child' , 'id' , 'type_trip'));
    }
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

        // return $request;

        if ($type_trip == "Round_Trip") {
          $idTrain1 = $request->input('idTrain1');
          $idTrain2 = $request->input('idTrain2');

          $traindatas = ['0' => $idTrain1 , '1' => $idTrain2];
          for ($i=0; $i < 2; $i++) {
            $dTrainticket = new Trainticket();
            $dTrainticket->id_users = Auth::user()->id;
            $dTrainticket->id_train = $traindatas[$i];
            $dTrainticket->type_trip = $type_trip;
            $dTrainticket->ticket_code = "-";
            $dTrainticket->no_telp = $no_telp;
            $dTrainticket->adult = $adult;
            $dTrainticket->child = $child;
            $dTrainticket->status = 0;
            $dTrainticket->save();
          }
        } else {
          $dTrainticket = new Trainticket();
          $dTrainticket->id_users = Auth::user()->id;
          $dTrainticket->id_train = $idtrain;
          $dTrainticket->type_trip = $type_trip;
          $dTrainticket->ticket_code = "-";
          $dTrainticket->no_telp = $no_telp;
          $dTrainticket->adult = $adult;
          $dTrainticket->child = $child;
          $dTrainticket->status = 0;
          $dTrainticket->save();

          for ($i=0; $i < $adult ; $i++) {
              $dPassenger = new DetailPassenger();
              $dPassenger->id_trainticket = $dTrainticket->id;
              $dPassenger->name_passenger = $name[$i];
              $dPassenger->email_passenger = $email[$i];
              $dPassenger->no_ktp = $no_ktp[$i];
              $dPassenger->born_date = $borndate[$i];
              $dPassenger->save();
          }
        }

        flash('Pemesanan Berhasil');
        return redirect('train');
  }

  public function RoundTrip(Request $request , $idTrain1 , $idTrain2)
  {

    $dep_date = $request->input('dep_date');
    $return_date = $request->input('return_date');
    $adult = $request->input('adult');
    $child = $request->input('child');
    $from = $request->input('from');
    $type_trip = $request->input('type_trip');
    $destination = $request->input('destination');


      return view('roundtripbook', compact('adult','child' , 'idTrain1'
                                      , 'type_trip' , 'idTrain2'));

  }

  public function listBooking(Request $request)
  {

    $id = Auth::user()->id;
    $list = Trainticket::list($id);
    return view('listbooking')->with('list' , $list);

  }
}
