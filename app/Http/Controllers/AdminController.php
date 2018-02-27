<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;
use App\Train;
use Yajra\Datatables\Datatables;


class AdminController extends Controller
{
    public function index()
    {
      return view('admin.admin');
    }
    public function viewstation()
    {

      $showStation = Station::all();
      return view('admin.station')->with('station' , $showStation);
    }

    public function createStation(Request $request)
    {
      $newstation = new Station;
      $newstation->station_name = $request->station_name;
      $newstation->location = $request->location;
      $newstation->save();

      return redirect('admin/station');
    }
   
    public function viewtrain()
    {
      $showStation = Station::all();
      return view('admin.train')->with('station' , $showStation);
    }
    public function createTrain(Request $request)
    {
     $newtrain = new Train;
     $newtrain->train = $request->train;
     $newtrain->class = $request->class;
     $newtrain->departure_date = $request->departure_date;
     $newtrain->from = $request->from;
     $newtrain->destination = $request->destination;
     $newtrain->hours = $request->hours;
     $newtrain->max = $request->max;
     $newtrain->price = $request->price;
     $newtrain->save();
     
      
      return redirect('admin/train');
    }


    public function trainrute()
    {
      $showTrain = Train::all();
      return view('admin.trainrute' , compact('showTrain'));
      
    }
    
    
    
}
