@extends('navbar')
@section('title' , 'الأسئلة')
@section('style')
    @parent
    <style>
    .panel-body{
      padding: 40px;
    }
    .container{
      padding-top: 100px;
    }
    .radio1{
      display: inline-block;
      margin-left:80px;
    }

    .font-size{
      font-size:18px;
    }
    .q{
      margin-bottom: 20px;
    }
    input{
      border: none;
      border-bottom: 1px dashed;
    }
    .radio-css{
    -webkit-appearance: checkbox;
    width: 25px;
    height:25px;
          }
    .note{
      color: red;
      font-weight: 600;
    }

    .error{
      color: #ff0000!important;
      font-size: 14px;
      padding: 5px;
      /*border-radius: 10px;*/
      /*width: 15%;*/
    }
      input[disabled]{
        pointer-events: none;
      }

    .panel-heading{
      font-weight:900;
    }
    button{
        border-radius: 15px;
        padding: 7px;
        width: 100px;
        margin: 20px 46% 15px;
        background-color: #2c4861;
        color: white;
        border: 1px;

    }
    </style>
@endsection


@section('navbar')
    @parent
@endsection


@section('container')
<div class="container">
<form id="form" method="post" action="{{url('/result')}}">
  @csrf
  <input type="hidden" value="{{$name}}" name="name">

  <div class="panel panel-default">
  <div class="panel-heading">معلومات شخصية</div>
  <div class="panel-body">
    <div id="info" style="background-color:#FEFEBE;padding:5px;border:solid 1px gray;">
    1-الإسم :<input type="text" name="userName"style="width:40%; background-color:#FEFEBE;border-bottom:none;" class="text-center">
      <span style="margin-right:100px;background-color:#FEFEBE">
      2-الجنس :
      &nbsp;&nbsp;
      <input type="radio" name="gender" value="male" >&nbsp;&nbsp;&nbsp;ذكر
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="gender" value="female">&nbsp;&nbsp;&nbsp;أنثى
    </span>
    </div>
    <br>
    <div id="subject" style="background-color:#FEFEBE;border:solid 1px gray; padding:5px;">
    3-المادة الدراسية المفضلة(علوم\اداب\الموضوع):<input type="text" name="subject" style="width:70%;background-color:#FEFEBE;border-bottom:none;" class="text-center">
    </div>
    <br>
    <div id="subject" style="background-color:#FEFEBE;border:solid 1px gray; padding:5px;">
    3-صف عملك أو وظيفتك :<input type="text" name="subject" style="width:70%;background-color:#FEFEBE;border-bottom:none;" class="text-center">
    </div>

  </div>

  </div>

  <div class="panel panel-default">
  <div class="panel-heading">إستعمال اليد</div>
  <div class="panel-body">
    <?php
    $q1 = DB::table('questions')->where('type','radio1')->first();
    $ans1 = DB::table('answers')->where('question_id',$q1->id)->get();
    ?>
    <div id="q1" class="q">
    <p class="font-size">5- {{$q1->question}}</p>
      <input type="radio" name="q1" style="opacity: 0" disabled='disabled' class="disable"><br>
    @foreach($ans1 as $ans)

    <div class="radio1"><input type="radio" name="q1" value="{{$ans->clasification}}" ><img src="{{asset('images/'.$ans->choice.'.PNG')}}"></div>
    @endforeach

    </div>
    <!--..........................................................................................-->
    <?php
    $q2 = DB::table('questions')->where('type','radio2')->first();
    $ans2 = DB::table('answers')->where('question_id',$q2->id)->get();
    ?>

    <div id="q2" class="q">
      <p class="font-size">6- {{$q2->question}}</p>
      <input type="radio" name="q2" style="opacity: 0" disabled='disabled' class="disable"><br>
    @foreach($ans2 as $ans)
      <div class="radio1" style="margin-left:60px; margin-top:10px;"><input type="radio" name="q2" value="{{$ans->clasification}}"  class="text-center">&nbsp;&nbsp;{{$ans->choice}}</div>
      @endforeach
    </div>

  </div>
  </div>


<div class="panel panel-default">

  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q3 = DB::table('questions')->where('type','input1')->first();
    $ans3 = DB::table('answers')->where('question_id',$q3->id)->get();
    ?>
    <?php $x = 7; ?>
    <div id="q3" class="q">
      <p class="font-size">{{$q3->question}}</p>
      <input type="radio" name="q3" style="opacity: 0" disabled='disabled' class="disable"><br>
    @foreach($ans3 as $ans)
      <div class="radio1" style="margin-left:60px; margin-top:10px;">{{$x}} <input type="number" name="q3{{$ans->id}}" value="" max=3 min=1  class="text-center">{{$ans->choice}}</div>
      <?php $x++ ?>
      @endforeach
      <div class="errorTxt"></div>
    </div>
    <p class="note">تأكد أنك استعملت كل رقم من الأرقام 1، 2، 3 لمرة واحدة فقط… صحح إن اقتضى الأمر</p>
  </div>
  </div>

<div class="panel panel-default">
  <div class="panel-heading">طبيعة العمل</div>
  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q4 = DB::table('questions')->where('type','input2')->first();
    $ans4 = DB::table('answers')->where('question_id',$q4->id)->get()->chunk(6);

    ?>

    <div id="q4" class="q">
      <?php $x = 10;?>
      <p class="font-size">{{$q4->question}}<span class="note" style="font-size:12px;">لا تستعمل الرقم الدال على المقياس أكثر من أربع مرات</span></p>
      @foreach($ans4 as $ans)

        <div class="radio1" style="margin-left:100px; margin-top:10px; background-color:#FEFEBE; padding:20px;">
            @foreach($ans as $subans)
            <div style="margin-bottom:10px">{{$x}}<input type="number" name="q4{{$x}}" value="" max=5 min=1 class="text-center" style="background-color:#FEFEBE">{{$subans->choice}}</div>
            <?php $x++ ?>
            @endforeach
        </div>
      @endforeach
    </div>
    <p class="note">تأكد أن هناك أربع مرات 5، وأربع مرات 4، وأربع مرات 3، وهكذا… صحح إن اقتضى الأمر.</p>

  </div>
  </div>

<div class="panel panel-default">

  <div class="panel-heading">الصفات الأساسية</div>
  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q5 = DB::table('questions')->where('type','input3')->first();
    $ans5 = DB::table('answers')->where('question_id',$q5->id)->get()->chunk(9);

    ?>

    <div id="q5" class="q">
      <?php $x = 26;?>
      <p class="font-size">{{$q5->question}}</p>
      @foreach($ans5 as $ans)

        <div class="radio1" style="margin-left:100px; margin-top:10px;background-color:#FEFEBE; padding:20px;">
            @foreach($ans as $subans)
            <div style="margin-bottom:10px">{{$x}}<input type="number" name="q5{{$x}}" value="" max=3 min=2 class="text-center" style="background-color:#FEFEBE;">{{$subans->choice}}</div>
            <?php $x++ ?>
            @endforeach
        </div>
      @endforeach
    </div>
    <p class="note">يرجى التأكد من أن هناك سبع مرات رقم 2 ومرة واحدة رقم 3؟ … صحح إن اقتضى الأمر.</p>

  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">الهوايات</div>
  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q6 = DB::table('questions')->where('type','input4')->first();
    $ans6 = DB::table('answers')->where('question_id',$q6->id)->get()->chunk(8);

    ?>

    <div id="q5" class="q">
      <?php $x = 51;?>
      <p class="font-size">{{$q6->question}}</p>
      @foreach($ans6 as $ans)


        {{--<div class="radio1" style="margin-left:110px; margin-top:10px;">--}}

        <div class="radio1" style="margin-left:80px; margin-top:10px; background-color:#FEFEBE; padding:15px;">

            @foreach($ans as $subans)
            <div style="margin-bottom:10px">{{$x}}<input type="number" name="q6{{$x}}" value="" max=3 min=1 class="text-center" style="background-color:#FEFEBE;">{{$subans->choice}}</div>
            <?php $x++ ?>
            @endforeach
        </div>
      @endforeach
    </div>
    <p class="note">يرجى التأكد من أن هناك مرة واحدة رقم 3 وست هوايات فقط؟ … صحح إن اقتضى الأمر.</p>

  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">التقيؤ بسبب الحركة</div>

  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q8 = DB::table('questions')->where('type','radio4')->first();
    $ans8 = DB::table('answers')->where('question_id',$q8->id)->get();
    ?>

    <div id="q2" class="q">
      <p class="font-size">74- {{$q8->question}}</p>

      <input type="radio" name="q8" style="opacity: 0" disabled='disabled' class="disable"><br>
      @foreach($ans8 as $ans)
      <div class="radio1" style="margin-left:60px; margin-top:10px;"><input type="radio" name="q8" value="{{$ans->clasification}}"  class="text-center">&nbsp;&nbsp;&nbsp;{{$ans->choice}}</div>
    @endforeach

    </div>
    <!--..........................................................................................-->
    <?php
    $q9 = DB::table('questions')->where('type','radio7')->first();
    $ans9 = DB::table('answers')->where('question_id',$q9->id)->get();
    ?>

    <div id="q2" class="q">
      <p class="font-size">75 {{$q9->question}}</p>

      <input type="radio" name="q9" style="opacity: 0" disabled='disabled' class="disable"><br>


      @foreach($ans9 as $ans)
      <div class="radio1" style="margin-left:60px; margin-top:10px;"><input type="radio" name="q9" value="{{$ans->clasification}}"  class="text-center">&nbsp;&nbsp;&nbsp;{{$ans->choice}}</div>
      @endforeach
    </div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">الصفات الزوجية</div>
  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q10 = DB::table('questions')->where('type','select1')->first();
    $ans10 = DB::table('answers')->where('question_id',$q10->id)->get();
    $x=0;
    ?>

    <div id="q10" class="q">
      <p class="font-size"> {{$q10->question}}</p>

    @for($i=76; $i<=99; $i++)
    <div style="margin-left:60px; margin-top:10px;">
      <input type="radio" name="q10{{$i}}" style="opacity: 0" disabled='disabled' class="disable"><br>
      {{$i}}-
    @foreach($ans10 as $ans)
      @if($ans->choice_value == $x)
      &nbsp;&nbsp;<input type="radio" name="q10{{$i}}" value="{{$ans->clasification}}"class="text-center">&nbsp;{{$ans->choice}}&nbsp;&nbsp;&nbsp;
      @endif
      @endforeach
      <div class="errorTxt"></div>
    </div>
      <?php $x++?>
    @endfor
    </div>

    <p class="note">هل اخترت عنصرا واحدا فقط من كل زوج؟ … صحح إن اقتضى الأمر</p>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">التوجه إلى الداخل أو إلى الخارج</div>

  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q11 = DB::table('questions')->where('type','radio5')->first();
    $ans11 = DB::table('answers')->where('question_id',$q11->id)->get();
    $x=0;
    ?>

    <div id="q11" class="q">
      <p class="font-size">100 {{$q11->question}}</p>
      <input type="radio" name="q11" style="opacity: 0" disabled='disabled' class="disable"><br>

      <span style="margin-left:30PX;">  منبسط للخارج</span>
    <input type="radio" name="q11" value="A1" class="radio-css" style="margin-left:30PX;">
    <input type="radio" name="q11" value="A2" class="radio-css" style="margin-left:30PX;">
    <input type="radio" name="q11" value="B1" class="radio-css" style="margin-left:30PX;">
    <input type="radio" name="q11" value="B2" class="radio-css" style="margin-left:30PX;">
    <input type="radio" name="q11" value="B3" class="radio-css" style="margin-left:30PX;">
    <input type="radio" name="q11" value="C1" class="radio-css" style="margin-left:30PX;">
    <input type="radio" name="q11" value="C2" class="radio-css" style="margin-left:30PX;">
    <input type="radio" name="q11" value="D1" class="radio-css" style="margin-left:30PX;">
    <input type="radio" name="q11" value="D2" class="radio-css" style="margin-left:30PX;">
    <span>  متجه للداخل</span>


    </div>
    <div class="errorTxt"></div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">عشرون سؤالا</div>

  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q12 = DB::table('questions')->where('type','radio6')->get();
    $x=101;
    ?>

    <div id="q12" class="q">
      <p class="font-size">أجب عن الأسئلة التالية بوضع علامة في المربع المناسب لك:</p>
      <table class="table table-striped">
            <thead>
              <tr>
                <th ></th>
                <th class="text-center">أوافق بشدة</th>
                <th class="text-center">موافق</th>
                <th class="text-center">محايد</th>
                <th class="text-center">لا أوافق</th>
                <th class="text-center">لا أوافق بشدة</th>
              </tr>
            </thead>
          <tbody>
            @foreach($q12 as $q)
            <tr>
              <td>{{$x}}-{{$q->question}}</td>
              <td><input type="radio" name="q12{{$x}}" value="vg" style="margin-right:30px;"></td>
              <td><input type="radio" name="q12{{$x}}" value="g" style="margin-right:20px;"></td>
              <td><input type="radio" name="q12{{$x}}" value="w" style="margin-right:25px;"></td>
              <td><input type="radio" name="q12{{$x}}" value="ng" style="margin-right:25px;"></td>
              <td><input type="radio" name="q12{{$x}}" value="vng" style="margin-right:30px;"></td>
            </tr>
            <?php $x++; ?>
            @endforeach
          </tbody>
      </table>

    </div>
        </div>
</div>






<button name="send" type="submit" value="submit" id="submitButton">أظهر النتيجة</button>
</form>

</div>
@endsection


@section('links')
  @parent
@endsection
@section('script')
<script>

    $('#submitButton').click(function(x){

        x.preventDefault();
        validateForm();
    });
      function validateForm(){
      var validator = $("#form").validate({
        rules:{
              q1: "required",
              q2: "required",
              q7: "required",
              q8: "required",
              q9: "required",
              q11: "required",
              q1076: "required",
              q1077: "required",
              q1078: "required",
              q1079: "required",
              q1080: "required",
              q1081: "required",
              q1082: "required",
              q1083: "required",
              q1084: "required",
              q1085: "required",
              q1086: "required",
              q1087: "required",
              q1088: "required",
              q1089: "required",
              q1090: "required",
              q1091: "required",
              q1092: "required",
              q1093: "required",
              q1094: "required",
              q1095: "required",
              q1096: "required",
              q1097: "required",
              q1098: "required",
              q1099: "required",
              q12101: "required",
              q12102: "required",
              q12103: "required",
              q12104: "required",
              q12105: "required",
              q12106: "required",
              q12107: "required",
              q12108: "required",
              q12109: "required",
              q12110: "required",
              q12111: "required",
              q12112: "required",
              q12113: "required",
              q12114: "required",
              q12115: "required",
              q12116: "required",
              q12117: "required",
              q12118: "required",
              q12119: "required",
              q12120: "required",

        },
        {{--errorElement : 'div',--}}
        {{--errorLabelContainer: '.errorTxt'--}}




});


if(!$("#form").valid()){
  return false;
}else{
  $('#form').submit();
}
}

</script>
@endsection

