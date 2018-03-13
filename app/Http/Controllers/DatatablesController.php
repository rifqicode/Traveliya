<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Train;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    public function trainrute()
    {
        return Datatables::of(Train::query())->make(true);
    }
}
