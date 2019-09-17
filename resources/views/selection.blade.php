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

    </style>
@endsection

@section('navbar')
    @parent

@endsection


@section('container')

    <div class="container text-center" style="padding-top: 100px">
        <div class="herman">


            <form method="get" action="{{route('home')}}">
                <input type="hidden" value="{{$name}}" name="name">
                <input type="submit" value="submit">
            </form>

        </div>


        <div class="herman">
            <form method="get" action="{{route('shortQuestionView')}}">
                <input type="hidden" value="{{$name}}" name="name">
                <input type="submit" value="submit">
            </form>

        </div>
    </div>

@endsection

@section('links')
    @parent
@endsection
@section('script')
@endsection
