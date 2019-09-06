@extends('navbar')
@section('title' , 'النتيجة')
@section('style')
    @parent
    <style>
        .mainPage{
            padding: 80px 60px;
        }
        .mainPage span{
            margin-left: 5px;
            font-weight: bold;
        }
        .result{
            width: 70%;
            margin: auto;
            padding: 10px 40px 40px;
            border-radius: 10px;
            background-color: #e9ecef40;
        }
        .result h1{
            margin-bottom: 25px;
        }
        .results{
            font-size: 16px;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .result-content{
            width: 100%;
            margin-top: -30px;
            font-size: 16px;

        }
        .result-content span{
            margin-left: 30px;
            margin-right: 30px;
        }
        .squares{
            color: white;
            display: inline-block;
            width: 50px;
            padding-top: 8px;
            height: 40px;
            margin-left: 10px!important;
            margin-right: 10px!important;
        }
        button{
            border-radius: 15px;
            padding: 7px;
            width: 100px;
            margin: 30px 42% 15px;
            background-color: #2c4861;
            color: white;
            border: 1px;

        }
        .greeting{
            margin-top: 30px;
        }
        .twitter{
            float: left;
            margin-top: -40px;

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
@endsection


@section('navbar')
    @parent
@endsection


@section('container')
    <div class="container-fluid mainPage">
        <span>الاسم: </span><span> {{$name}}</span><br>
        <span>تاريخ الاختبار: </span><span>{{date('Y/m/d')}} </span>

        <div class="result">
            <h1 class="text-center">النتيجة</h1>
            <div class="results">
                الربع<div class="text-center result-content">
                    <span>A</span>
                    <span>B</span>
                    <span>C</span>
                    <span>D</span>
                </div>
            </div>
            <div class="results">
                علامات اللقطة<div class="text-center result-content">
                    <span class="squares" style=" background-color: blue">{{$Dtotal}}</span>
                    <span class="squares" style=" background-color: green;">{{$Ctotal}}</span>
                    <span class="squares" style=" background-color: red;">{{$Btotal}}</span>
                    <span class="squares" style=" background-color: yellow;">{{$Atotal}}</span>
                </div>
            </div>
            <div class="results">
                رمز اللقطة<div class="text-center result-content">
                    <span class="squares" style=" background-color: blue">{{$Drate}}</span>
                    <span class="squares" style=" background-color: green;">{{$Crate}}</span>
                    <span class="squares" style=" background-color: red;">{{$Brate}}</span>
                    <span class="squares" style=" background-color: yellow;">{{$Arate}}</span>
                </div>
            </div>

            <button>طباعة النتيجة</button>
        </div>


        <div class="greeting">
            <span>نشكر لكم حسن تعاونكم معنا </span><br>
        </div>
        <div class="twitter text-center">
            <span>و أرحب بكم على حسابي على تويتر </span><br>
           <a href=""> <i class="fa fa-twitter text-center" aria-hidden="true"></i></a>

        </div>
    </div>
@endsection


@section('links')
@endsection

