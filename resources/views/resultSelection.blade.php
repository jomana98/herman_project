@extends('navbar')
@section('title' , ' بوابة الأختيارات')
@section('style')
    @parent
    <style>
        .herman{
            border: 1px dashed;
            margin: 70px 20px;
            border-radius: 10px;
            padding:0;
            width: 30%;
            height: 300px;
            display: inline-block!important;
        }
        header{
            background: #7db9d0;
            width: 100%;
            height: 70px;
            margin: auto;
            border-radius: 10px 10px 0px 0px;
            margin-bottom: 50px;
        }
        .herman span{
            color:#9c9c9c;
        }
        input[type=submit]{
            border-radius: 15px;
            padding: 7px;
            width: 130px;
            margin: auto;
            background-color: #2c4861;
            color: white;
            border: 1px;
            margin-top: 40px;

        }
        img{
            width:90px;
            height: 90px;
            border-radius:50%;
            margin: 20px 0px;

        }
        h4{
            margin-top: 60px;
        }


    </style>
@endsection

@section('navbar')
    @parent

@endsection


@section('container')

    <div class="container text-center" style="padding-top: 100px">

        <div class="herman">
            <header><img src="{{asset('images/illustration.jpg')}}"></header>
            <h4> مقياس هيرمان الكامل</h4>

            <form method="get" action="{{route('mainQuestionResultShow')}}">
                <input type="hidden" value="{{$name}}" name="name">
                <input type="submit" value=" عرض النتائج">
            </form>

        </div>


        <div class="herman">
            <header><img src="{{asset('images/illustration.jpg')}}"></header>
            <h4> مقياس هيرمان المختصر</h4>
            <form method="get" action="{{route('shortQuestionResultShow')}}">
                <input type="hidden" value="{{$name}}" name="name">
                <input type="submit" value="عرض النتائج">
            </form>

        </div>
    </div>


@endsection

@section('links')
    @parent
@endsection
@section('script')
@endsection
