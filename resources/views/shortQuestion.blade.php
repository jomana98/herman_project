@extends('navbar')
@section('title' , ' بوابة الأختيارات')
@section('style')
    @parent
    <style>
        .herman {
            border: 1px dashed;
            margin: 70px 20px;
            border-radius: 10px;
            padding: 50px;
            width: 25%;
            height: 300px;
            display: inline-block!important;
        }
        input[type=submit]{
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

    <div class="container" style="padding-top: 100px">
        <form method="post" action="{{route('shortResult')}}">
            @csrf
        <div class="panel panel-default"  style="width:80%; margin: auto">
            <div class="panel-heading" style="font-weight: bolder">نموذج هيرمان المختصر</div>

            <div class="panel-body">


                <table class="table table-striped ">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">الأسئلة</th>
                        <th class="text-center">نعم</th>
                        <th class="text-center">لا</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$question->questions}}</td>


                            <td class="text-center">
                                <input type="radio" name="short{{$question->id}}" value="1" >
                            </td>
                            <td class="text-center">
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
@endsection
