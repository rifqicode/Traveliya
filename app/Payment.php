<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Payment extends Model
{
    protected $primaryKey = 'id_payment';

    public static function infoPayment($id_users , $id_trainticket)
    {

      $cek = DB::table('payments')
                    ->where(['id_users' => $id_users , 'id_trainticket' => $id_trainticket])->get();

      return $cek;
    }

    public static function findCode($code)
    {
      $code = DB::table('payments')
                     ->where('pay_code' , $code)
                     ->get();

      return $code;
    }
    public static function checkPayment($id_trainticket , $id_users , $status)
    {
      $check = DB::table('traintickets')
                      ->where(['id_trainticket' => $id_trainticket , 'id_users' => $id_users])
                      ->update(['status' => $status]);

      return $check;

    }


}
