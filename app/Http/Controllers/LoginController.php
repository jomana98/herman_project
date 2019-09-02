<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  function store(Request $request){

      $user = DB::table('users')->select('secretNumber')->where('name','!=','admin')->first();
      $admin = DB::table('users')->select('secretNumber')->where('name','=','admin')->first();
      //عشان أتامد انو اليوزر موجود بالداتا بيز ولا لا
      $u = DB::table('users')->where('name',$request['user-name'])->first();


      if(md5($request['password'])==$user->secretNumber&&$request['user-name']!='admin'){
        if(!$u){
          $user = new User();
          $user->name =$request['user-name'];
          $user->secretNumber =md5($request['password']);
          $user->save();
          return view('home');
        }else{
          return redirect()->back();
        }

          }
      elseif (md5($request['password'])==$admin->secretNumber&&$request['user-name']=='admin') {
        return view('home');
      }
      else {
        return redirect()->back();
      }
}
}
