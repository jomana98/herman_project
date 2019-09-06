<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// reference the Dompdf namespace
use Dompdf\Dompdf;
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


 public function print(Request $request)
{

$setAutoTopMargin = false;
  $mpdf = new \Mpdf\Mpdf();
  $date=date('Y/m/d');
  $mpdf->WriteHTML('

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
      body{
          font-family:sans-serif;
          direction: rtl;
         }
         h1{
           text-align:center;
           margin-bottom:50px;
         }

         table {
          border-collapse: collapse;
          width: 100%;


          }

        td, th {
          border: 1px solid ;
          text-align:center;
          padding: 8px;
        }

        #user{
          margin-top:20px;
        }
        #result{
          background-color:#F8F8F8;
          margin-top:50px;
          height:300px;
        }
        td{
          color:white;
          font-weight:500;
        }

        .greeting{
            margin-top: 50px;
        }
        .twitter{
            margin-right:480px;
            margin-top: -20px;


        }
        .twitter a{
            display: inline-block;
            margin-top: 10px;

        }
        .fa-twitter{
            font-size: 24px;
            color: #3880a2;
        }
        .fa-twitter:hover{
            color:#a1cbef ;
        }

  </style>
</head>
  <body>


    <div id="user">
       <span>الاسم: </span><span>'.$request['nameuser'].' </span><br>
         <span>تاريخ الاختبار: </span>'.$date.'<span>

         </span>
    <div>
    <div id="result">
    <h1 class="text-center">النتيجة</h1>
    <table border="1" style="width:80%;margin:auto;">
      <tr>
        <th>الرُبع</th>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>D</th>
      </tr>

      <tr>
        <th>علامة اللقطة</th>
        <td style="background-color:#b7a12e;">100</td>
        <td style="background-color:red;">100</td>
        <td style="background-color:green;">100</td>
        <td style="background-color:blue;">100</td>
      </tr>

      <tr>
        <th>رمز اللقطة</th>
        <td style="background-color:#b7a12e;">100</td>
        <td style="background-color:red;">100</td>
        <td style="background-color:green;">100</td>
        <td style="background-color:blue;">100</td>
      </tr>
    </table>
    </div>

    <div class="greeting">
        <span>نشكر لكم حسن تعاونكم معنا </span><br>
    </div>
    <div class="twitter text-center">
        <span>و أرحب بكم على حسابي على تويتر </span><br>&nbsp;&nbsp;&nbsp;
        <spsn>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;salim_alqahtani@</span>
       <a href=""> <i class="fa fa-twitter text-center" aria-hidden="true"></i></a>

    </div>
  </body>

</html>
  ');
  $mpdf->Output();

  $dompdf->stream();
}





}
