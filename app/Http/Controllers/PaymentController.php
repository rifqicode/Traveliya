<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function index($id_trainticket)
    {
        return view('payment')->with('trainticket' , $id_trainticket);
    }

    public function pay(Request $request)
    {
            

        
    }
}
