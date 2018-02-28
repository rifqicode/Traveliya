<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Trainticket;
use App\Train;


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
        $con = Train::find(1);
        return $con;
     }
     public function count()
     {
       $count = Trainticket::list_count(Auth::user()->id);
       return $count;
     }

}
