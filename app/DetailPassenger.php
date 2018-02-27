<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class DetailPassenger extends Model
{
    public $timestamps = false;

    public static function showPas($id_trainticket)
    {
      $showPas = DB::table('detail_passengers')
                         ->where('id_trainticket' , '=' , $id_trainticket)->get();
      return $showPas;
    }
}
