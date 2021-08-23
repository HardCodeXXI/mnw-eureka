<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Auth;

class LoginController extends Controller
{

  public function googlredirect(){
    return Socialite::driver('google')->redirect();
  }


  public function googlecallback(){
    try {
      $user = Socialite::driver('google')->user();
      $user->token;
      $id = $user->id;
      $usrcheck = User::where('google_id',$id)->get();
      if(count($usrcheck) > 0){
        $log = User::where('google_id',$id)->first();
        Auth::loginUsingId($log->id);
        return redirect('/');
      }else {
        $date = date("Y-m-d H:i:s");
        foreach($user->user as $s){
        }
            $new = User::create([
              'first_name' => $user->name,
              'last_name' => $user->name,
              'email' => $user->email,
              'google_id' => $user->id,
              'email_verified_at' => $date,
              'access_level' => 'Member',
              'title' => 'Beginner',
              'status' => 'Online',
            ]);
          Auth::loginUsingId($new->id);
          return redirect('/');
        }
    } catch (\Exception $e) {
      return redirect('/login')->with('errors','Your Connection has a problem');
    }



}
}
