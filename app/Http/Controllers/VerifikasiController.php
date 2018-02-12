<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Auth;
use App\Mail\EmailVerification;
class VerifikasiController extends Controller
{
    public function index()
    {
      $user = Auth::user();

      Mail::to($user->email)->send(new EmailVerification($user->email));
      
      // $randcode = str_random(20);
      //
      // $link = route('userverify', ['token' => $randcode]);
      // return $this->subject('Traveliya')
      //     ->with('link', $link)
      //     ->view('verifyemail');

          // Mail::send('verifyemail', ['user' => $user , 'randcode' => $randcode], function ($m) use ($user) {
          //       $m->from('muhammadrifqi.tb@gmail.com', 'Traveliya');
          //
          //       $m->to($user->email, $user->name)->subject('Verifikasi Email');
          //   });

    }
}
