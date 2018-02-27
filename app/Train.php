<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Train extends Model
{
  public $timestamps = false;
    public static function trainList($dep_date , $class , $from , $destination)
    {
      $find = DB::table('trains as A')
              ->join('stations as B', 'a.from', '=', 'b.id_station')
              ->join('stations as C', 'a.destination', '=', 'c.id_station')
              ->where(['departure_date' => $dep_date ,
                                    'class' => $class ,
                                    'from' => $from ,
                                    'destination' => $destination])->get();
      return $find;
    }
}
