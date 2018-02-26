<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;



class Trainticket extends Model
{
    public static function list($id)
    {
       $list = DB::table('users')
                  ->join('traintickets', 'traintickets.id_users', '=', 'users.id')
                  ->where('users.id', '=' , $id)->get();

      return $list;
    }

    public static function list_count($id)
    {
       $count = DB::table('users')
                  ->join('traintickets', 'traintickets.id_users', '=', 'users.id')
                  ->where('users.id', '=' , $id)->get()->count();

      return $count;
    }
}
