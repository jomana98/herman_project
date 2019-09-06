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

    .panel-heading{
      font-weight:900;
    }
    button{
        border-radius: 15px;
        padding: 7px;
        width: 100px;
        margin: 20px 42% 15px;
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
      <input type="radio" name="gender" value="female">أنثى
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
    @foreach($ans1 as $ans)

    <div class="radio1"><input type="radio" name="q1" value="{{$ans->clasification}}"><img src="{{asset('images/'.$ans->choice.'.PNG')}}"></div>
    @endforeach
    </div>
    <!--..........................................................................................-->
    <?php
    $q2 = DB::table('questions')->where('type','radio2')->first();
    $ans2 = DB::table('answers')->where('question_id',$q2->id)->get();
    ?>

    <div id="q2" class="q">
      <p class="font-size">6- {{$q2->question}}</p>
      @foreach($ans2 as $ans)
      <div class="radio1" style="margin-left:60px; margin-top:10px;"><input type="radio" name="q2" value="{{$ans->clasification}}"  class="text-center">&nbsp;&nbsp;{{$ans->choice}}</div>
      @endforeach
    </div>

  </div>
  </div>


  <div class="panel panel-default">
  <div class="panel-heading">أفضل الموضوعات وأسوأها</div>
  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q3 = DB::table('questions')->where('type','input1')->first();
    $ans3 = DB::table('answers')->where('question_id',$q3->id)->get();
    ?>
    <?php $x = 7; ?>
    <div id="q3" class="q">
      <p class="font-size">{{$q3->question}}</p>
      @foreach($ans3 as $ans)
      <div class="radio1" style="margin-left:60px; margin-top:10px;">{{$x}} <input type="number" name="q3{{$ans->id}}" value="" max=3 min=1  class="text-center">{{$ans->choice}}</div>
      <?php $x++ ?>
      @endforeach
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

        <div class="radio1" style="margin-left:150px; margin-top:10px; background-color:#FEFEBE; padding:20px;">
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

        <div class="radio1" style="margin-left:150px; margin-top:10px;background-color:#FEFEBE; padding:20px;">
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

        <div class="radio1" style="margin-left:150px; margin-top:10px; background-color:#FEFEBE; padding:15px;">
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
  <div class="panel-heading">مستوى الطاقة</div>

  <div class="panel-body">
    <!--..........................................................................................-->
    <?php
    $q7 = DB::table('questions')->where('type','radio3')->first();
    $ans7 = DB::table('answers')->where('question_id',$q7->id)->get();
    ?>

    <div id="q2" class="q">
      <p class="font-size">73- {{$q7->question}}</p>
      @foreach($ans7 as $ans)
      <div class="radio1" style="margin-left:60px; margin-top:10px;"><input type="radio" name="q7" value="{{$ans->clasification}}" class="text-center">&nbsp;&nbsp;&nbsp;{{$ans->choice}}</div>
      @endforeach
    </div>
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
    <div style="margin-left:60px; margin-top:10px;">{{$i}}-
      @foreach($ans10 as $ans)
      @if($ans->choice_value == $x)
      &nbsp;&nbsp;<input type="radio" name="q10{{$i}}" value="{{$ans->clasification}}"class="text-center">&nbsp;{{$ans->choice}}&nbsp;&nbsp;&nbsp;
      @endif
      @endforeach
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

      <span style="margin-left:30;">  منبسط للخارج</span>
    <input type="radio" name="q11" value="A2" class="radio-css" style="margin-left:30;">
    <input type="radio" name="q11" value="B1" class="radio-css" style="margin-left:30;">
    <input type="radio" name="q11" value="B2" class="radio-css" style="margin-left:30;">
    <input type="radio" name="q11" value="B3" class="radio-css" style="margin-left:30;">
    <input type="radio" name="q11" value="C1" class="radio-css" style="margin-left:30;">
    <input type="radio" name="q11" value="C2" class="radio-css" style="margin-left:30;">
    <input type="radio" name="q11" value="D1" class="radio-css" style="margin-left:30;">
    <input type="radio" name="q11" value="D2" class="radio-css" style="margin-left:30;">
    <span>  متجه للداخل</span>


    </div>
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
                <th class="text-center">وسط</th>
                <th class="text-center">لا أوافق</th>
                <th class="text-center">لا أوافق بشدة</th>
              </tr>
            </thead>
          <tbody>
            @foreach($q12 as $q)
            <tr>
              <td>{{$x}}-{{$q->question}}</td>
              <td><input type="radio" name="q12{{$x}}" value="أوافق بشدة" style="margin-right:30px;"></td>
              <td><input type="radio" name="q12{{$x}}" value="أوافق" style="margin-right:20px;"></td>
              <td><input type="radio" name="q12{{$x}}" value="وسط" style="margin-right:25px;"></td>
              <td><input type="radio" name="q12{{$x}}" value="لا أوافق" style="margin-right:25px;"></td>
              <td><input type="radio" name="q12{{$x}}" value="أوافق بشدة" style="margin-right:30px;"></td>
            </tr>
            <?php $x++; ?>
            @endforeach
          </tbody>
      </table>

    </div>
        </div>
      </div>

  </div>
</div>

<button name="send" type="submit" value="submit">أظهر النتيجة</button>
</form>

</div>
@endsection


@section('links')
@endsection
