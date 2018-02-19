<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Train as Train;
use DB;

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

        return $request;

        $departure = $request->input('departure_date');
        $dep_date = $departure[0];
        $return_date = $departure[1];
        $type_trip = $request->input('type_trip');
        $class = $request->input('class');
        $from = $request->input('from');
        $destination = $request->input('destination');
        $adult = $request->input('adult');
        $child = $request->input('child');


        // return $dep_date.$class.$from.$destination.$adult.$child;
        if (  $child > $adult ) {
            flash('Anak Anak tidak boleh lebih dari orang dewasa');
            return redirect('/train');
        } else {

          $find = DB::table('trains as A')
                  ->join('stations as B', 'a.from', '=', 'b.id_station')
                  ->join('stations as C', 'a.destination', '=', 'c.id_station')
                  ->where(['departure_date' => $dep_date ,
                                        'class' => $class ,
                                        'from' => $from ,
                                        'destination' => $destination])->get();

          // $find = Train::trainList($dep_date[0] , $class , $from , $destination);

          // return $find."<br>".$back;
          if (count($find) == 0) {
            flash("Kereta tidak ditemukan");
            return redirect('/train');
          } else {
            return view('findtrain', compact('find' , 'adult' , 'from' , 'destination'
                                            ,'child' , 'type_trip' , 'class'
                                            , 'dep_date' , 'return_date' , 'dep_date'));
          }
        }

    }


}
