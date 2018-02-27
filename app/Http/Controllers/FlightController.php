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
          'departure_date' => 'required',
          'class' => 'required',
          'from' => 'required',
          'destination' => 'required',
          'adult' => 'required',
          'child' => 'required',
          ]);

          $dep_date = $request->input('departure_date');
          $class = $request->input('class');
          $from = $request->input('from');
          $destination = $request->input('destination');
          $adult = $request->input('adult');
          $child = $request->input('child');

          if ( $adult <= $child ) {
              flash('Anak Anak tidak boleh lebih dari orang dewasa');
              return redirect('/train');
          } else {
            $find = Plane::where(['departure_date' => $dep_date ,
                                  'class' => $class ,
                                  'from' => $from ,
                                  'destination' => $destination])->get();
            // $passenger = ['adult' => $adult];
            if (count($find) == 0) {
              flash("Pesawat tidak ditemukan");
              return redirect('/flight');
            } else {
              return view('planelist',compact('find' , 'adult' ,'child'));
            }
          }

      }
}
