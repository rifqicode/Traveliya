<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plane as Plane;

class FlightController extends Controller
{
      public function index()
      {
          return view('plane');
      }

      public function findPlane(Request $request)
      {
        $validatedData = $request->validate([
              'from' => 'required',
              'destination' => 'required'
          ]);

        $from = $request->input('from');
        $destination = $request->input('destination');
        $find = Plane::where(['from' => $from , 'destination' => $destination])->get();

        if (count($find) == 0) {
          flash("Pesawat tidak ditemukan");
          return redirect('/flight');
        } else {
          return view('planelist')->with('planedata' , $find);
        }
      }
}
