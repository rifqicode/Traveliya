<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Train as Train;
use App\Station as Station;
use DB;

class TrainController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
      $alldatas = Station::all();
      // return json_encode($alldatas);
      return view('trains')->with('datas' , $alldatas);
    }

    public function findTrain(Request $request)
    {

        $validatedData = $request->validate([
              'departure_date' => 'required',
              'type_trip' => 'required',
              'class' => 'required',
              'adult' => 'required',
              'child' => 'required',

          ]);


        $departure = $request->input('departure_date');
        $dep_date = $departure[0];
        $type_trip = $request->input('type_trip');
        if ($type_trip == "Round_Trip") {
          $return_date = $departure[1];
        } else {
          $return_date = $departure[0];
        }
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

          $find = Train::trainList($dep_date , $class , $from , $destination);

          if (count($find) == 0) {
            flash("Kereta tidak ditemukan");
            return redirect('/train');
          } else {
            return view('findtrain', compact('find' , 'adult' , 'from' , 'destination'
                                            ,'child' , 'type_trip' , 'class'
                                            , 'dep_date' , 'return_date' , 'dep_date' , 'station'));
          }
        }

    }


    public function deleterute($id){
      $data = Train::where('id_train',$id)->first();
      $data->delete();
      return redirect('admin/trainrute')->with('alert-success','data berhasil dihapus');

    }

}
