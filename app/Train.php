<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Train extends Model
{
  public $timestamps = false;

  protected $primaryKey = 'id_train';

    public static function trainList($dep_date , $class , $from , $destination)
    {
      $find = DB::table('trains')
              ->where(['departure_date' => $dep_date ,
                                    'class' => $class ,
                                    'from' => $from ,
                                    'destination' => $destination])->get();
      return $find;
    }

    public static function edit($allpas , $id_train)
    {
      $find = DB::table('trains')
              ->where('id_train' , $id_train)
              ->update(['max' => $allpas]);
      return $find;
    }
}
