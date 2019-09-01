<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    public function update(Request $request){
      
      DB::table('users')->where('name', 'admin')
      ->update(['secretNumber' => bcrypt($request->secretNumber)]);
      return response()->json([
              'success' => 'تمت عملية التعديل بنجاح'
          ]);


    }
}
