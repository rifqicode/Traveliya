<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class DetailPassenger extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_passenger';

    public static function showPas($id_trainticket)
    {
      $showPas = DB::table('detail_passengers')
                         ->where('id_trainticket' , '=' , $id_trainticket)->get();
      return $showPas;
    }

    public static function countPas($id_trainticket)
    {
      $showPas = DB::table('detail_passengers')
                         ->where('id_trainticket' , '=' , $id_trainticket)->get()->count();
      return $showPas;
    }
}
