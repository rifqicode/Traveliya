<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Train as Train;

class TrainController extends Controller
{

    public function __construct()
    {
        $this->middleware('verify');
    }

    public function index()
    {
      return view('train');
    }

    public function findTrain(Request $request)
    {
        $from = $request->input('from');
        $destination = $request->input('destination');
        $find = Train::all();

        return json_encode($find);

    }
}
