<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ShortQuestion;
class QuestionController extends Controller
{
    public function showResult(Request $request)
    {
        // dd($request);
        $Atotal = 0;
        $Btotal = 0;
        $Ctotal = 0;
        $Dtotal = 0;

        //first Question............................................................
        $A1 = 0;
        $B1 = 0;
        $C1 = 0;
        $D1 = 0;

        if ($request['q1'] == 'A') {
            $A1 += 2;
        } elseif ($request['q1'] == 'B') {
            $B1 += 2;
        } elseif ($request['q1'] == 'C') {
            $C1 += 2;
        } elseif ($request['q1'] == 'D') {
            $D1 += 2;
        }
        $Atotal += $A1;
        $Btotal += $B1;
        $Ctotal += $C1;
        $Dtotal += $D1;

        //Secound Question........................................................
        $A2 = 0;
        $B2 = 0;
        $C2 = 0;
        $D2 = 0;

        if ($request['q2'] == 'A') {
            $A2 += 2;
        } elseif ($request['q2'] == 'B') {
            $B2 += 2;
        } elseif ($request['q2'] == 'C') {
            $C2 += 2;
        } elseif ($request['q2'] == 'D') {
            $D2 += 2;
        } elseif ($request['q2'] == 'BC') {
            $B2 += 2;
            $C2 += 2;
        }

        $Atotal += $A2;
        $Btotal += $B2;
        $Ctotal += $C2;
        $Dtotal += $D2;

        //Third Question........................................................
        $A3 = 0;
        $B3 = 0;
        $C3 = 0;
        $D3 = 0;

        $A3 += $request['q36'];
        $B3 += $request['q37'];
        $C3 += $request['q37'];
        $D3 += $request['q38'];

        $Atotal += $A3;
        $Btotal += $B3;
        $Ctotal += $C3;
        $Dtotal += $D3;


        //Four Question........................................................
        $A4 = 0;
        $B4 = 0;
        $C4 = 0;
        $D4 = 0;
        $A4 += $request['q410'];
        $B4 += $request['q411'];
        $D4 += $request['q412'];
        $C4 += $request['q413'];
        $D4 += $request['q414'];
        $C4 += $request['q415'];
        $A4 += $request['q416'];
        $B4 += $request['q417'];
        $B4 += $request['q418'];
        $C4 += $request['q419'];
        $A4 += $request['q420'];
        $D4 += $request['q421'];
        $C4 += $request['q422'];
        $B4 += $request['q423'];
        $D4 += $request['q424'];
        $A4 += $request['q425'];

        $Atotal += $A4;
        $Btotal += $B4;
        $Ctotal += $C4;
        $Dtotal += $D4;

        //Five Question........................................................
        $A5 = 0;
        $B5 = 0;
        $C5 = 0;
        $D5 = 0;
        $A5 += $request['q526'];
        $D5 += $request['q527'];
        $C5 += $request['q528'];
        $B5 += $request['q529'];
        $D5 += $request['q530'];
        $B5 += $request['q531'];
        $B5 += $request['q532'];
        $A5 += $request['q533'];
        $B5 += $request['q534'];
        $C5 += $request['q535'];
        $D5 += $request['q536'];
        $A5 += $request['q537'];
        $A5 += $request['q538'];
        $C5 += $request['q539'];
        $A5 += $request['q540'];
        $B5 += $request['q541'];
        $A5 += $request['q542'];
        $C5 += $request['q543'];
        $B5 += $request['q544'];
        $D5 += $request['q545'];
        $D5 += $request['q546'];
        $A5 += $request['q547'];
        $C5 += $request['q548'];
        $D5 += $request['q549'];
        $A5 += $request['q550'];

        $Atotal += $A5;
        $Btotal += $B5;
        $Ctotal += $C5;
        $Dtotal += $D5;


        //Six Question........................................................
        $A6 = 0;
        $B6 = 0;
        $C6 = 0;
        $D6 = 0;
        $D6 += $request['q651'];
        $B6 += $request['q652'];
        $B6 += $request['q653'];
        $C6 += $request['q653'];
        $B6 += $request['q654'];
        $C6 += $request['q655'];
        $C6 += $request['q656'];
        $C6 += $request['q657'];
        $B6 += $request['q658'];
        $C6 += $request['q659'];
        $A6 += $request['q660'];
        $A6 += $request['q661'];
        $C6 += $request['q662'];
        $D6 += $request['q663'];
        $D6 += $request['q664'];
        $C6 += $request['q665'];
        $B6 += $request['q666'];
        $C6 += $request['q666'];
        $C6 += $request['q667'];
        $C6 += $request['q668'];
        $B6 += $request['q669'];
        $C6 += $request['q669'];
        $B6 += $request['q670'];
        $C6 += $request['q671'];
        $A6 += $request['q672'];

        $Atotal += $A6;
        $Btotal += $B6;
        $Ctotal += $C6;
        $Dtotal += $D6;


        //seven Question............................................................
        $A7 = 0;
        $B7 = 0;
        $C7 = 0;
        $D7 = 0;

        if ($request['q7'] == 'A') {
            $A7 += 2;
        } elseif ($request['q7'] == 'BC') {
            $B7 += 2;
            $C7 += 2;
        } elseif ($request['q7'] == 'D') {
            $D7 += 2;
        }
        $Atotal += $A7;
        $Btotal += $B7;
        $Ctotal += $C7;
        $Dtotal += $D7;
        //eight Question............................................................
        $A8 = 0;
        $B8 = 0;
        $C8 = 0;
        $D8 = 0;

        if ($request['q8'] == 'A') {
            $A8 += 2;
        } elseif ($request['q8'] == 'B') {
            $B8 += 2;

        } elseif ($request['q8'] == 'C') {
            $C8 += 2;

        } elseif ($request['q8'] == 'D') {
            $D8 += 2;
        }
        $Atotal += $A8;
        $Btotal += $B8;
        $Ctotal += $C8;
        $Dtotal += $D8;

        //nine Question............................................................
        $A9 = 0;
        $B9 = 0;
        $C9 = 0;
        $D9 = 0;

        if ($request['q9'] == 'A') {
            $A9 += 2;
        } elseif ($request['q9'] == 'D') {
            $D9 += 2;

        }
        $Atotal += $A9;
        $Dtotal += $D9;


        //ten Question............................................................
        $A10 = 0;
        $B10 = 0;
        $C10 = 0;
        $D10 = 0;

        if ($request['q1076'] == 'B') {
            $B10 += 2;
        } elseif ($request['q1076'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1077'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1077'] == 'D') {
            $D10 += 2;
        }

        if ($request['q1078'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1078'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1079'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1079'] == 'B') {
            $B10 += 2;
        }

        if ($request['q1080'] == 'D') {
            $D10 += 2;
        } elseif ($request['q1080'] == 'B') {
            $B10 += 2;
        }

        if ($request['q1081'] == 'D') {
            $D10 += 2;
        } elseif ($request['q1081'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1082'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1082'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1083'] == 'B') {
            $B10 += 2;
        } elseif ($request['q1083'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1084'] == 'B') {
            $B10 += 2;
        } elseif ($request['q1084'] == 'D') {
            $D10 += 2;
        }

        if ($request['q1085'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1085'] == 'D') {
            $D10 += 2;
        }

        if ($request['q1086'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1086'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1087'] == 'D') {
            $D10 += 2;
        } elseif ($request['q1087'] == 'B') {
            $B10 += 2;
        }

        if ($request['q1088'] == 'D') {
            $D10 += 2;
        } elseif ($request['q1088'] == 'A') {
            $A10 += 2;
        }

        if ($request['q1089'] == 'D') {
            $D10 += 2;
        } elseif ($request['q1089'] == 'A') {
            $A10 += 2;
        }

        if ($request['q1090'] == 'B') {
            $B10 += 2;
        } elseif ($request['q1090'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1091'] == 'B') {
            $B10 += 2;
        } elseif ($request['q1091'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1092'] == 'D') {
            $D10 += 2;
        } elseif ($request['q1092'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1093'] == 'D') {
            $D10 += 2;
        } elseif ($request['q1093'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1094'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1094'] == 'C') {
            $C10 += 2;
        }

        if ($request['q1095'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1095'] == 'B') {
            $B10 += 2;
        }

        if ($request['q1096'] == 'D') {
            $D10 += 2;
        } elseif ($request['q1096'] == 'B') {
            $B10 += 2;
        }

        if ($request['q1097'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1097'] == 'B') {
            $B10 += 2;
        }
        if ($request['q1098'] == 'A') {
            $A10 += 2;
        } elseif ($request['q1098'] == 'B') {
            $B10 += 2;
        }
        if ($request['q1099'] == 'D') {
            $D10 += 2;
        } elseif ($request['q1099'] == 'C') {
            $C10 += 2;
        }
        $Atotal += $A10;
        $Btotal += $B10;
        $Ctotal += $C10;
        $Dtotal += $D10;


        //11 Question............................................................
        $A11 = 0;
        $B11 = 0;
        $C11 = 0;
        $D11 = 0;

        if ($request['q11'] == 'A1') {
            $A11 += 2;
        } elseif ($request['q11'] == 'A2') {
            $A11 += 1;
        } elseif ($request['q11'] == 'B1') {
            $B11 += 2;
        } elseif ($request['q11'] == 'B2') {
            $B11 += 1;
        } elseif ($request['q11'] == 'B3') {
            $B11 += 0;
        } elseif ($request['q11'] == 'C1') {
            $C11 += 2;
        } elseif ($request['q11'] == 'C2') {
            $C11 += 1;
        } elseif ($request['q11'] == 'D1') {
            $D11 += 2;
        } elseif ($request['q11'] == 'D2') {
            $D11 += 1;
        }
        $Atotal += $A11;
        $Btotal += $B11;
        $Ctotal += $C11;
        $Dtotal += $D11;

        //12 Question............................................................
        $A12 = 0;
        $B12 = 0;
        $C12 = 0;
        $D12 = 0;
        if ($request['q12101'] == 'vg') {
            $A12 += 5;
        } elseif ($request['q12101'] == 'g') {
            $A12 += 4;
        } elseif ($request['q12101'] == 'w') {
            $A12 += 3;
        } elseif ($request['q12101'] == 'ng') {
            $A12 += 2;
        } elseif ($request['q12101'] == 'vng') {
            $A12 += 1;
        }

        if ($request['q12102'] == 'vg') {
            $C12 += 5;
        } elseif ($request['q12102'] == 'g') {
            $C12 += 4;
        } elseif ($request['q12102'] == 'w') {
            $C12 += 3;
        } elseif ($request['q12102'] == 'ng') {
            $C12 += 2;
        } elseif ($request['q12102'] == 'vng') {
            $C12 += 1;
        }

        if ($request['q12103'] == 'vg') {
            $C12 += 5;
        } elseif ($request['q12103'] == 'g') {
            $C12 += 4;
        } elseif ($request['q12103'] == 'w') {
            $C12 += 3;
        } elseif ($request['q12103'] == 'ng') {
            $C12 += 2;
        } elseif ($request['q12103'] == 'vng') {
            $C12 += 1;
        }

        if ($request['q12104'] == 'vg') {
            $A12 += 5;
        } elseif ($request['q12104'] == 'g') {
            $A12 += 4;
        } elseif ($request['q12104'] == 'w') {
            $A12 += 3;
        } elseif ($request['q12104'] == 'ng') {
            $A12 += 2;
        } elseif ($request['q12104'] == 'vng') {
            $A12 += 1;
        }

        if ($request['q12105'] == 'vg') {
            $B12 += 5;
        } elseif ($request['q12105'] == 'g') {
            $B12 += 4;
        } elseif ($request['q12105'] == 'w') {
            $B12 += 3;
        } elseif ($request['q12105'] == 'ng') {
            $B12 += 2;
        } elseif ($request['q12105'] == 'vng') {
            $B12 += 1;
        }

        if ($request['q12106'] == 'vg') {
            $D12 += 5;
        } elseif ($request['q12106'] == 'g') {
            $D12 += 4;
        } elseif ($request['q12106'] == 'w') {
            $D12 += 3;
        } elseif ($request['q12106'] == 'ng') {
            $D12 += 2;
        } elseif ($request['q12106'] == 'vng') {
            $D12 += 1;
        }

        if ($request['q12107'] == 'vg') {
            $D12 += 5;
        } elseif ($request['q12107'] == 'g') {
            $D12 += 4;
        } elseif ($request['q12107'] == 'w') {
            $D12 += 3;
        } elseif ($request['q12107'] == 'ng') {
            $D12 += 2;
        } elseif ($request['q12107'] == 'vng') {
            $D12 += 1;
        }

        if ($request['q12108'] == 'vg') {
            $C12 += 5;
        } elseif ($request['q12108'] == 'g') {
            $C12 += 4;
        } elseif ($request['q12108'] == 'w') {
            $C12 += 3;
        } elseif ($request['q12108'] == 'ng') {
            $C12 += 2;
        } elseif ($request['q12108'] == 'vng') {
            $C12 += 1;
        }

        if ($request['q12109'] == 'vg') {
            $B12 += 5;
        } elseif ($request['q12109'] == 'g') {
            $B12 += 4;
        } elseif ($request['q12109'] == 'w') {
            $B12 += 3;
        } elseif ($request['q12109'] == 'ng') {
            $B12 += 2;
        } elseif ($request['q12109'] == 'vng') {
            $B12 += 1;
        }


        if ($request['q12110'] == 'vg') {
            $D12 += 5;
        } elseif ($request['q12110'] == 'g') {
            $D12 += 4;
        } elseif ($request['q12110'] == 'w') {
            $D12 += 3;
        } elseif ($request['q12110'] == 'ng') {
            $D12 += 2;
        } elseif ($request['q12110'] == 'vng') {
            $D12 += 1;
        }

        if ($request['q12111'] == 'vg') {
            $A12 += 5;
        } elseif ($request['q12111'] == 'g') {
            $A12 += 4;
        } elseif ($request['q12111'] == 'w') {
            $A12 += 3;
        } elseif ($request['q12111'] == 'ng') {
            $A12 += 2;
        } elseif ($request['q12111'] == 'vng') {
            $A12 += 1;
        }

        if ($request['q12112'] == 'vg') {
            $C12 += 5;
        } elseif ($request['q12112'] == 'g') {
            $C12 += 4;
        } elseif ($request['q12112'] == 'w') {
            $C12 += 3;
        } elseif ($request['q12112'] == 'ng') {
            $C12 += 2;
        } elseif ($request['q12112'] == 'vng') {
            $C12 += 1;
        }

        if ($request['q12113'] == 'vg') {
            $B12 += 5;
        } elseif ($request['q12113'] == 'g') {
            $B12 += 4;
        } elseif ($request['q12113'] == 'w') {
            $B12 += 3;
        } elseif ($request['q12113'] == 'ng') {
            $B12 += 2;
        } elseif ($request['q12113'] == 'vng') {
            $B12 += 1;
        }

        if ($request['q12114'] == 'vg') {
            $D12 += 5;
        } elseif ($request['q12114'] == 'g') {
            $D12 += 4;
        } elseif ($request['q12114'] == 'w') {
            $D12 += 3;
        } elseif ($request['q12114'] == 'ng') {
            $D12 += 2;
        } elseif ($request['q12114'] == 'vng') {
            $D12 += 1;
        }

        if ($request['q12115'] == 'vg') {
            $A12 += 5;
        } elseif ($request['q12115'] == 'g') {
            $A12 += 4;
        } elseif ($request['q12115'] == 'w') {
            $A12 += 3;
        } elseif ($request['q12115'] == 'ng') {
            $A12 += 2;
        } elseif ($request['q12115'] == 'vng') {
            $A12 += 1;
        }

        if ($request['q12116'] == 'vg') {
            $B12 += 5;
        } elseif ($request['q12116'] == 'g') {
            $B12 += 4;
        } elseif ($request['q12116'] == 'w') {
            $B12 += 3;
        } elseif ($request['q12116'] == 'ng') {
            $B12 += 2;
        } elseif ($request['q12116'] == 'vng') {
            $B12 += 1;
        }

        if ($request['q12117'] == 'vg') {
            $B12 += 5;
        } elseif ($request['q12117'] == 'g') {
            $B12 += 4;
        } elseif ($request['q12117'] == 'w') {
            $B12 += 3;
        } elseif ($request['q12117'] == 'ng') {
            $B12 += 2;
        } elseif ($request['q12117'] == 'vng') {
            $B12 += 1;
        }

        if ($request['q12118'] == 'vg') {
            $D12 += 5;
        } elseif ($request['q12118'] == 'g') {
            $D12 += 4;
        } elseif ($request['q12118'] == 'w') {
            $D12 += 3;
        } elseif ($request['q12118'] == 'ng') {
            $D12 += 2;
        } elseif ($request['q12118'] == 'vng') {
            $D12 += 1;
        }

        if ($request['q12119'] == 'vg') {
            $C12 += 5;
        } elseif ($request['q12119'] == 'g') {
            $C12 += 4;
        } elseif ($request['q12119'] == 'w') {
            $C12 += 3;
        } elseif ($request['q12119'] == 'ng') {
            $C12 += 2;
        } elseif ($request['q12119'] == 'vng') {
            $C12 += 1;
        }

        if ($request['q12120'] == 'vg') {
            $A12 += 5;
        } elseif ($request['q12120'] == 'g') {
            $A12 += 4;
        } elseif ($request['q12120'] == 'w') {
            $A12 += 3;
        } elseif ($request['q12120'] == 'ng') {
            $A12 += 2;
        } elseif ($request['q12120'] == 'vng') {
            $A12 += 1;
        }

        $Atotal += $A12;
        $Btotal += $B12;
        $Ctotal += $C12;
        $Dtotal += $D12;

        //FINAL RESULT -------------------------------------------------------------------
        $Arate = 0;
        if ($Atotal >= 67) {
            $Arate = 1;
        } elseif ($Atotal >= 34) {
            $Arate = 2;
        } elseif ($Atotal < 34) {
            $Arate = 3;
        }

        $Brate = 0;
        if ($Btotal >= 67) {
            $Brate = 1;
        } elseif ($Btotal >= 34) {
            $Brate = 2;
        } elseif ($Btotal < 34) {
            $Brate = 3;
        }

        $Crate = 0;
        if ($Ctotal >= 67) {
            $Crate = 1;
        } elseif ($Ctotal >= 34) {
            $Crate = 2;
        } elseif ($Ctotal < 34) {
            $Crate = 3;
        }

        $Drate = 0;
        if ($Dtotal >= 67) {
            $Drate = 1;
        } elseif ($Dtotal >= 34) {
            $Drate = 2;
        } elseif ($Dtotal < 34) {
            $Drate = 3;
        }

        //--------------------------------------------------------------------------------
        $result = new Result();
        $result->userName=$request['name'];
        $result->examDate=date('Y/m/d');
        $result->Atotal = $Atotal;
        $result->Btotal = $Btotal;
        $result->Ctotal = $Ctotal;
        $result->Dtotal = $Dtotal;
        $result->Arate = $Arate;
        $result->Brate = $Brate;
        $result->Crate = $Crate;
        $result->Drate = $Drate;
        $result->save();
        //................................................................................
        return view('result', ['name' => $request['name'],
            'Atotal' => $Atotal,
            'Btotal' => $Btotal,
            'Ctotal' => $Ctotal,
            'Dtotal' => $Dtotal,
            'Arate' => $Arate,
            'Brate' => $Brate,
            'Crate' => $Crate,
            'Drate' => $Drate,

        ]);

    }

    public function homeView(Request $request)
    {
        return view('home', ['name' => $request['name']]);
    }

    public function shortQuestionView(Request $request)
    {
        $Questions = DB::table('short_questions')->get();
        return view('shortQuestion', ['name' => $request['name'], 'questions' => $Questions]);
    }

    public function resultSelection(Request $request){
    $Questions=DB::table('short_questions')->get();
    return view('resultSelection',['name'=>$request['name'],'questions'=>$Questions]);
    }

    public function mainQuestionResultShow(Request $request){

        return view('mainQuestionResult',['name'=>$request['name']]);
    }
    public function SelectionpPage(Request $request){

        return view('selection',['name'=>$request['name']]);
    }


    public function shortQuestionResult(Request $request)
    {
        $A = 0;
        $B = 0;
        $C = 0;
        $D = 0;
        $collect = collect($request);
        $array = $collect->toArray();
        for ($index = 1; $index < 57; $index++) {
            $classification = ShortQuestion::select('classification')->where('id', $index)->first();

            if ($array['short' . $index] == 1) {
                if ($classification['classification'] == "A") {
                    $A++;
                } elseif ($classification['classification'] == "B") {
                    $B++;
                } elseif ($classification['classification'] == "C") {
                    $C++;
                } elseif ($classification['classification'] == "D") {
                    $D++;
                }
            }

        }

        $APoint = 0;
        if ($A <= 4) {
            $APoint = 3;
        } elseif ($A <= 8) {
            $APoint = 2;
        } elseif ($A <= 14) {
            $APoint = 1;
        }


        $BPoint = 0;
        if ($B <= 4) {
            $BPoint = 3;
        } elseif ($B <= 8) {
            $BPoint = 2;
        } elseif ($B <= 14) {
            $BPoint = 1;
        }


        $CPoint = 0;
        if ($C <= 4) {
            $CPoint = 3;
        } elseif ($C <= 8) {
            $CPoint = 2;
        } elseif ($C <= 14) {
            $CPoint = 1;
        }

        $DPoint = 0;
        if ($D <= 4) {
            $DPoint = 3;
        } elseif ($D <= 8) {
            $DPoint = 2;
        } elseif ($D <= 14) {
            $DPoint = 1;
        }
        return view('shortResult', ['name' => $request['name'], 'A' => $A, 'B' => $B, 'C' => $C, 'D' => $D,
            'APoint' => $APoint, 'BPoint' => $BPoint, 'CPoint' => $CPoint, 'DPoint' => $DPoint,]);


    }
}

