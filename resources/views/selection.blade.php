@extends('navbar')
@section('title' , ' الأسئلة المختصرة')
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
            <a href="{{route('homePage')}}"></a>
        </div>


        <div class="herman">
            <a href="{{route('homePage')}}"></a>
        </div>
    </div>

@endsection

@section('links')
    @parent
@endsection
@section('script')
@endsection
