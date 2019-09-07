@extends('navbar')
@section('title' , 'النتيجة')
@section('style')
    @parent
    <style>

    @media print {
     nav{
        display: none;
    }
  }
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
            margin-top: -20px;

        }
        .twitter a{
            display: inline-block;
            margin-top:22px;

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
                    <span class="squares" id="Dtotal" style=" background-color: yellow">{{$Dtotal}}</span>
                    <span class="squares" id="Ctotal" style=" background-color: red;">{{$Ctotal}}</span>
                    <span class="squares" id="Btotal" style=" background-color: green;">{{$Btotal}}</span>
                    <span class="squares" id="Atotal" style=" background-color: blue;">{{$Atotal}}</span>
                </div>
            </div>
            <div class="results">
                رمز اللقطة<div class="text-center result-content">
                    <span class="squares" style=" background-color: yellow">{{$Drate}}</span>
                    <span class="squares" style=" background-color: red;">{{$Crate}}</span>
                    <span class="squares" style=" background-color: green;">{{$Brate}}</span>
                    <span class="squares" style=" background-color: blue;">{{$Arate}}</span>
                </div>
            </div>

            <canvas id="canvas">

            </canvas>

          <form method="post" action="{{url('/printResult')}}">
            @csrf;

            <input type="hidden" value="{{$name}}" name="nameuser">
            <input type="hidden" value="{{$Dtotal}}" name="Dtotal">
            <input type="hidden" value="{{$Ctotal}}" name="Ctotal">
            <input type="hidden" value="{{$Atotal}}" name="Atotal">
            <input type="hidden" value="{{$Btotal}}" name="Btotal">
            <input type="hidden" value="{{$Brate}}" name="Brate">
            <input type="hidden" value="{{$Arate}}" name="Arate">
            <input type="hidden" value="{{$Crate}}" name="Crate">
            <input type="hidden" value="{{$Drate}}" name="Drate">


            <button type="submit" name="print" value="print">طباعة النتيجة</button>
          </form>
        </div>


        <div class="greeting">
            <span>نشكر لكم حسن تعاونكم معنا </span><br>
        </div>
        <div class="twitter text-center">
            <span>و أرحب بكم على حسابي على تويتر </span><br>
            <span ></span>
           <a href="https://twitter.com/salim_alqahtani?lang=de" style="color:black;font-weight:600" target="_blank">salim_alqahtani@ <i class="fa fa-twitter text-center" aria-hidden="true"></i></a>

        </div>
    </div>
@endsection


@section('links')
    @parent
@endsection
@section('script')
<script>
        function draw(){
        var c = document.getElementById("canvas");
        var ctx = c.getContext("2d");
        Chart.pluginService.register({
            beforeDraw: chart => {
                const { ctx, scale, config } = chart
                const { xCenter, yCenter, drawingArea: radius } = scale

         {{--c--}}
        ctx.beginPath();
        ctx.arc(xCenter, yCenter, radius, 0*Math.PI, Math.PI * .5 )
        ctx.lineTo(xCenter, yCenter);
        ctx.fillStyle = "#fc7676"
        ctx.fill()
        ctx.save()

         {{--b--}}
        ctx.beginPath();
        ctx.arc(xCenter, yCenter, radius, Math.PI * .5, Math.PI * 1)
        ctx.lineTo(xCenter, yCenter);
        ctx.fillStyle = "#008000b8"
        ctx.fill()
        ctx.save()
        {{--d--}}
        ctx.save()
        ctx.beginPath();
        ctx.arc(xCenter, yCenter, radius, Math.PI * 1.5, Math.PI * 2)
        ctx.lineTo(xCenter, yCenter);
        ctx.fillStyle = "#fcfd6e"
        ctx.fill()
        ctx.save()

        {{--a--}}
        ctx.beginPath();
        ctx.arc(xCenter, yCenter, radius, Math.PI * 1, Math.PI * 1.5)
        ctx.lineTo(xCenter, yCenter);
        ctx.fillStyle = "#0000ffcc"
        ctx.fill()
        ctx.save()

         ctx.restore()
            }
        });


        var Dtotal = $("#Dtotal").text();
        var Ctotal = $("#Ctotal").text();
        var Btotal = $("#Btotal").text();
        var Atotal = $("#Atotal").text();

        var data = {
        labels: [null,'D','C', null, 'B' ,'A'],
        datasets: [{

          label: "النتيجة",
          borderColor: 'rgba(6, 229, 195, 1)',
          pointBackgroundColor: 'rgba(6, 229, 195, 1)',
          data: [null,Atotal,Dtotal,null,Ctotal,Btotal],
          spanGaps: true,

        }]
        };

        var options = {
        legend:false,
        scale: {
            gridLines: {
              circular: true,

            },
            ticks: {
              display:false,
              beginAtZero: true,
              stepSize: 30,
              min: 0,
              max: 120,
              pointBackgroundColor:'rgba(6, 229, 195, 1)',



            },
        },
        };

        var radarChart = new Chart(document.getElementById("canvas"), {
        type: 'radar',
        data: data,
        options: options
        });


}

draw();
</script>

@endsection
