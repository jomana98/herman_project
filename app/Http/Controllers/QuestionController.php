<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
  public function showResult(Request $request){
    // dd($request);
    $Atotal = 0;
    $Btotal = 0;
    $Ctotal = 0;
    $Dtotal = 0;

    //first Question............................................................
      $A1 = 0;$B1 = 0;$C1 = 0;$D1 = 0;

      if($request['q1'] == 'A'){
        $A1+=2;
      }elseif ($request['q1'] == 'B') {
        $B1+=2;
      }elseif ($request['q1'] == 'C') {
        $C1+=2;
      }elseif ($request['q1'] == 'D') {
        $D1+=2;
      }
      $Atotal+=$A1;
      $Btotal+=$B1;
      $Ctotal+=$C1;
      $Dtotal+=$D1;

      //Secound Question........................................................
        $A2 = 0;$B2 = 0;$C2 = 0;$D2 = 0;

        if($request['q2'] == 'A'){
          $A2+=2;
        }elseif ($request['q2'] == 'B') {
          $B2+=2;
        }elseif ($request['q2'] == 'C') {
          $C2+=2;
        }elseif ($request['q2'] == 'D') {
          $D2+=2;
        }elseif ($request['q2'] == 'BC') {
          $B2+=1;
          $C2+=1;
        }

        $Atotal+=$A2;
        $Btotal+=$B2;
        $Ctotal+=$C2;
        $Dtotal+=$D2;

        //Third Question........................................................
          $A3 = 0;$B3 = 0;$C3 = 0;$D3 = 0;

          $A3+=$request['q36'];
          $B3+=$request['q37'];
          $C3+=$request['q37'];
          $D3+=$request['q38'];

          $Atotal+=$A3;
          $Btotal+=$B3;
          $Ctotal+=$C3;
          $Dtotal+=$D3;


          //Four Question........................................................
              $A4 = 0;$B4 = 0;$C4 = 0;$D4 = 0;
              $A4+=$request['q410'];
              $B4+=$request['q411'];
              $D4+=$request['q412'];
              $C4+=$request['q413'];
              $D4+=$request['q414'];
              $C4+=$request['q415'];
              $A4+=$request['q416'];
              $B4+=$request['q417'];
              $B4+=$request['q418'];
              $B4+=$request['q419'];
              $A4+=$request['q420'];
              $D4+=$request['q421'];
              $C4+=$request['q422'];
              $B4+=$request['q423'];
              $D4+=$request['q424'];
              $A4+=$request['q425'];

              $Atotal+=$A4;
              $Btotal+=$B4;
              $Ctotal+=$C4;
              $Dtotal+=$D4;

            //Five Question........................................................
                  $A5 = 0;$B5 = 0;$C5 = 0;$D5 = 0;
                  $A5+=$request['q526'];
                  $D5+=$request['q527'];
                  $C5+=$request['q528'];
                  $B5+=$request['q529'];
                  $D5+=$request['q530'];
                  $B5+=$request['q531'];
                  $B5+=$request['q532'];
                  $A5+=$request['q533'];
                  $B5+=$request['q534'];
                  $C5+=$request['q535'];
                  $D5+=$request['q536'];
                  $A5+=$request['q537'];
                  $A5+=$request['q538'];
                  $C5+=$request['q539'];
                  $A5+=$request['q540'];
                  $B5+=$request['q541'];
                  $A5+=$request['q542'];
                  $C5+=$request['q543'];
                  $B5+=$request['q544'];
                  $D5+=$request['q545'];
                  $D5+=$request['q546'];
                  $A5+=$request['q547'];
                  $C5+=$request['q548'];
                  $D5+=$request['q549'];
                  $A5+=$request['q550'];

                  $Atotal+=$A5;
                  $Btotal+=$B5;
                  $Ctotal+=$C5;
                  $Dtotal+=$D5;


            //Six Question........................................................
                  $A6 = 0;$B6 = 0;$C6 = 0;$D6 = 0;
                  $D6+=$request['q651'];
                  $B6+=$request['q652'];
                  $B6+=$request['q653'];
                  $C6+=$request['q653'];
                  $B6+=$request['q654'];
                  $C6+=$request['q655'];
                  $C6+=$request['q656'];
                  $C6+=$request['q657'];
                  $B6+=$request['q658'];
                  $C6+=$request['q659'];
                  $A6+=$request['q660'];
                  $A6+=$request['q661'];
                  $C6+=$request['q662'];
                  $D6+=$request['q663'];
                  $D6+=$request['q664'];
                  $C6+=$request['q665'];
                  $B6+=$request['q666'];
                  $C6+=$request['q666'];
                  $C6+=$request['q667'];
                  $C6+=$request['q668'];
                  $B6+=$request['q669'];
                  $C6+=$request['q669'];
                  $B6+=$request['q670'];
                  $C6+=$request['q671'];
                  $A6+=$request['q672'];

                  $Atotal+=$A6;
                  $Btotal+=$B6;
                  $Ctotal+=$C6;
                  $Dtotal+=$D6;
              //seven Question............................................................
                $A7 = 0;$B7 = 0;$C7 = 0;$D7 = 0;

                if($request['q7'] == 'A'){
                    $A7+=2;
                }elseif ($request['q7'] == 'BC') {
                    $B7+=2;
                    $C7+=2;
                }elseif ($request['q7'] == 'D') {
                    $D7+=2;
                }
                    $Atotal+=$A7;
                    $Btotal+=$B7;
                    $Ctotal+=$C7;
                    $Dtotal+=$D7;

                //seven Question............................................................
                      $A8 = 0;$B8 = 0;$C8 = 0;$D8 = 0;

                      if($request['q8'] == 'A'){
                          $A8+=2;
                      }elseif ($request['q8'] == 'B') {
                          $B8+=2;

                      }elseif ($request['q8'] == 'C') {
                          $C8+=2;

                      }elseif ($request['q8'] == 'D') {
                          $D8+=2;
                      }
                          $Atotal+=$A8;
                          $Btotal+=$B8;
                          $Ctotal+=$C8;
                          $Dtotal+=$D8;


                  //eight Question............................................................
                      $A9 = 0;$B9 = 0;$C9 = 0;$D9 = 0;

                      if($request['q9'] == 'A'){
                          $A9+=2;
                      }elseif ($request['q9'] == 'D') {
                          $D9+=2;

                    }
                            $Atotal+=$A9;
                            $Dtotal+=$D9;

return view('result' , ['name'=>$request['name']]);
    }






}