<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Train as Train;

class TrainController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
      $alldatas = Train::all();
      // return json_encode($alldatas);
      return view('train')->with('datas' , $alldatas);
    }

    public function findTrain(Request $request)
    {
        $validatedData = $request->validate([
              'departure_date' => 'required',
              'type_trip' => 'required',
              'class' => 'required',
              'from' => 'required',
              'destination' => 'required',
              'adult' => 'required',
              'child' => 'required',

          ]);

        $dep_date = $request->input('departure_date');
        $type_trip = $request->input('type_trip');
        $class = $request->input('class');
        $from = $request->input('from');
        $destination = $request->input('destination');
        $adult = $request->input('adult');
        $child = $request->input('child');

        // return $dep_date.$class.$from.$destination.$adult.$child;
        if ( $adult <= $child ) {
            flash('Anak Anak tidak boleh lebih dari orang dewasa');
            return redirect('/train');
        } else {
          $find = Train::where(['departure_date' => $dep_date ,
                                'class' => $class ,
                                'from' => $from ,
                                'destination' => $destination])->get();
          // $passenger = ['adult' => $adult];
          if (count($find) == 0) {
            flash("Kereta tidak ditemukan");
            return redirect('/train');
          } else {
            return view('findtrain',compact('find' , 'adult' ,'child' , 'type_trip'));
          }
        }

        // $find = Train::where('from' , $from);
        // return json_encode($find);
    }


}
