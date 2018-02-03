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
              'from' => 'required',
              'destination' => 'required'
          ]);

        $from = $request->input('from');
        $destination = $request->input('destination');
        $find = Train::where(['from' => $from , 'destination' => $destination])->get();

        if (count($find) == 0) {
          flash("Kereta tidak ditemukan");
          return redirect('/train');
        } else {
          return view('findtrain')->with('traindata' , $find);
        }
        // $find = Train::where('from' , $from);
        // return json_encode($find);
    }
}
