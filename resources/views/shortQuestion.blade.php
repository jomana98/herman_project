@extends('navbar')
@section('title' , ' الاختبار المختصر ')
@section('style')
    @parent
    <style>
        /*.herman {*/
            /*border: 1px dashed;*/
            /*margin: 70px 20px;*/
            /*border-radius: 10px;*/
            /*padding: 50px;*/
            /*width: 25%;*/
            /*height: 300px;*/
            /*display: inline-block!important;*/
        /*}*/
        input[type=submit]{
            border-radius: 15px;
            padding: 7px;
            width: 100px;
            margin: 20px 46% 15px;
            background-color: #2c4861;
            color: white;
            border: 1px;

        }
        .error{
            color: #ff0000!important;
            font-size: 12px;
            padding: 5px;
            /*border-radius: 10px;*/
            /*width: 15%;*/
        }
        input[disabled]{
            pointer-events: none;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
            vertical-align: middle!important;
        }


    </style>
@endsection

@section('navbar')
    @parent

@endsection


@section('container')

    <div class="container" style="padding-top: 100px">
        <form method="post" action="{{route('shortResult')}}" id="form">
            @csrf
        <div class="panel panel-default"  style="width:80%; margin: auto">
            <div class="panel-heading" style="font-weight: bolder">نموذج هيرمان المختصر</div>

            <div class="panel-body">


                <table class="table table-striped ">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">الأسئلة</th>
                        <th class="text-center"></th>
                        <th class="text-center">نعم</th>
                        <th class="text-center" style="padding-left: 60px;">لا</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$question->questions}}</td>
                            <td> <input type="radio" name="short{{$question->id}}" style="opacity: 0" disabled='disabled' class="disable">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="short{{$question->id}}" value="1">
                            </td>
                            <td class="text-center" style="padding-left: 60px;">
                                <input type="radio" name="short{{$question->id}}" value="0" >
                            </td>

                        </tr>
                    @endforeach


                    </tbody>

                </table>


        </div>
    </div>
            <input name="send" type="submit" value="أظهر النتيجة" id="submitButton">
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
          short1: "required",
          short2: "required",
          short3: "required",
          short4: "required",
          short5: "required",
          short6: "required",
          short7: "required",
          short8: "required",
          short9: "required",
          short10: "required",
          short11: "required",
          short12: "required",
          short13: "required",
          short14: "required",
          short15: "required",
          short16: "required",
          short17: "required",
          short18: "required",
          short19: "required",
          short20: "required",
          short21: "required",
          short22: "required",
          short23: "required",
          short24: "required",
          short25: "required",
          short26: "required",
          short27: "required",
          short28: "required",
          short29: "required",
          short30: "required",
          short31: "required",
          short32: "required",
          short33: "required",
          short34: "required",
          short35: "required",
          short36: "required",
          short37: "required",
          short38: "required",
          short39: "required",
          short40: "required",
          short41: "required",
          short42: "required",
          short43: "required",
          short44: "required",
          short45: "required",
          short46: "required",
          short47: "required",
          short48: "required",
          short49: "required",
          short50: "required",
          short51: "required",
          short52: "required",
          short53: "required",
          short54: "required",
          short55: "required",
          short56: "required",


    }



    });


    if(!$("#form").valid()){
      return false;
    }else{
      $('#form').submit();
    }
  }




</script>
@endsection
