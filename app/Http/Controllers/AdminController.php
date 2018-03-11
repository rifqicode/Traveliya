<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;
use App\Train;
use App\Trainticket;
use Yajra\Datatables\Datatables;


class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('checkRole');
    }


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

    public function editrute($id)
    {

      $showTrain = Train::where('id_train' , $id)->get();
      $showStation = Station::all();
      return view('admin.editrute', compact('showTrain' , 'showStation' , 'id'));

    }

    public function deleterute($id)
    {
      Train::where('id_train' , $id)->delete();
      Trainticket::where('id_train' , $id)->delete();

      return back();
    }

    public function UpdateTrain(Request $request)
    {


      // return $request;
      $data = $this->validate($request,[
        'train'=>'required',
        'class'=>'required',
        'departure_date'=>'required',
        'from'=>'required',
        'destination'=>'required',
        'hours'=>'required',
        'max'=>'required',
        'price'=>'required',
      ]);

      $id = $request->id;
      $t =Train::find($id)->update($data);

      flash("data berhasil diubah");
      return redirect('admin/trainrute');

    }

    public function Trainticket()
    {
      return view('admin.trainticket');
    }

    public function TrainticketDatas()
    {

      $data = Trainticket::trainticketData();
      return Datatables::of($data)->make(true);
    }



}
