@extends('navbar')
@section('title' , ' بوابة الأختيارات')
@section('style')
    @parent
    <style>
        .container{
            padding-top: 60px!important;
        }
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
            color:#FF5656;
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

        .herman-danger{
            width: 60%;
            display: block;
            padding: 50px;
            height: 200px;
            background-color: #2c4861;
            color: white;
        }

        .herman-danger span ,  .herman-danger h4{

            color: white!important;
        }
        .fa-arrow-down{
            color:#2c4861;
            font-size: 60px;
        }
    </style>
@endsection

@section('navbar')
    @parent

@endsection


@section('container')

    <div class="container text-center " style="padding-top: 100px">


        <div class="row">
            <div class="herman">
                <header><img src="{{asset('images/illustration.jpg')}}"></header>
                <h4> مقياس هيرمان الكامل</h4>
                <span>أنت بحاجة إلى : أكثر من 30 دقيقة</span><br>
                <span>لابد من قراءة قائمة المصطلحات قبل البدء في المقياس</span>
                <form method="get" action="{{route('home')}}">
                    <input type="hidden" value="{{$name}}" name="name">
                    <input type="submit" value="المقياس الكامل">
                </form>

            </div>




            <div class="herman">
                <header><img src="{{asset('images/illustration.jpg')}}"></header>
                <h4> مقياس هيرمان المختصر</h4>
                <span>أنت بحاجة إلى : أكثر من 15 دقيقة</span><br>
                <span>قم باختيار نعم إذا توافرت فيك الصفة بنسبة 50% فأكثر</span>
                <form method="get" action="{{route('shortQuestionView')}}">
                    <input type="hidden" value="{{$name}}" name="name">
                    <input type="submit" value="المقياس المختصر">
                </form>

            </div>
            <div class="text-center"><span style="color: red;font-weight: bold">انتبه قبل البدء</span><br><a href="#danger"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></div>

        </div>
        <div class="herman herman-danger" id="danger">

            <div style="margin-top: -30px">
                <h5> تنبيهات  عامة</h5>
                <p>1- أول اختيار يرد إلى ذهنك بعد قراءة العبارة هو الذي يعبر عنك بالغالب </p>
                <p> 2- أجب عما هو موجود فيك الآن و ليس ما تسعى لتحقيقه</p>
                <p> 3- ليس هناك نمط أفضل من نمط فلا تختار شئ ليس فيك </p>
            </div>


        </div>

        </div>


@endsection

@section('links')
    @parent
@endsection
@section('script')
@endsection
