<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Train extends Model
{

  protected $primaryKey = 'id_train';
  public $timestamps = false;
    public static function trainList($dep_date , $class , $from , $destination)
    {
      $find = DB::table('trains')
              ->where(['departure_date' => $dep_date ,
                                    'class' => $class ,
                                    'from' => $from ,
                                    'destination' => $destination])->get();
      return $find;
    }

    public static function update($id, $data)
    {
      $find = DB::table('trains')
                  ->where('id_train' , $id)
                  ->update($data);
      
      return $find;
    }
}
