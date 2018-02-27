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

    public static function showTicket($id_trainticket)
    {
       $show = DB::table('traintickets')
                ->join('trains' , 'trains.id_train' , '=' , 'traintickets.id_train')
                ->where('traintickets.id_trainticket' , '=' , $id_trainticket)->get();

      return $show;
    }


    public static function updateStatus($id_trainticket , $status , $code)
    {
       $show = DB::table('traintickets')
                ->where('traintickets.id_trainticket' , '=' , $id_trainticket)
                ->update(['status' => $status , 'ticket_code' => $code]);

      return $show;
    }

    public static function listPassenger($id_trainticket)
    {
       $show = DB::table('traintickets')
                ->join('detail_passengers' , 'traintickets.id_trainticket' , '=' , 'detail_passengers.id_trainticket')
                ->where('traintickets.id_trainticket' , '=' , $id_trainticket)
                ->get();

      return $show;
    }
}
