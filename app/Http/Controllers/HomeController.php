<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Trainticket;
use App\Train;
use App\DetailPassenger;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {

       $d = DetailPassenger::where('id_trainticket' , 9)->get();
       return $d;
     }
     public function count()
     {
       $count = Trainticket::list_count(Auth::user()->id);
       return $count;
     }

}
