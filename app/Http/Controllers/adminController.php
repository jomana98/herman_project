<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    public function update(Request $request){
      if($request->secretNumber==""){
        return response()->json([
                'error' => 'لا يمكن أن يكون الحقل فارغ'
            ]);

      }
      DB::table('users')->where('name','!=', 'admin')
      ->update(['secretNumber' => md5($request->secretNumber)]);
      return response()->json([
              'success' => 'تمت عملية التعديل بنجاح'
          ]);
    }

    public function updatePassworde(Request $request){
      if($request->secretNumber==""){
        return response()->json([
                'error' => 'لا يمكن أن يكون الحقل فارغ'
            ]);

      }
      DB::table('users')->where('name','=', 'admin')
      ->update(['secretNumber' => md5($request->secretNumber)]);
      return response()->json([
              'success' => 'تمت عملية التعديل بنجاح'
          ]);


    }
}
