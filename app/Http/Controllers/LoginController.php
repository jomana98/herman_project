<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  function store(Request $request){

      $code = DB::table('users')->select('secretNumber')->where('name','admin')->first();
      $role =DB::table('users')->select('role')->get();

      if((md5($request['password'])==$code->secretNumber)){

          if($request['user-name']!='admin'){
              $user = new User();
              $user->name =$request['user-name'];
              $user->secretNumber = $request['password'];
              $user->save();
          }
          return view('home');

      }else{
         return redirect()->back();
      }


  }
}
