@extends('navbar')
@section('title' , 'النتيجة')
@section('style')
    @parent
    <style>

        @media print {
            #tw , button{
                display: none;
            }
            title{
                display: none;
            }
            canvas{
                margin: 0 -90px 0 50px;
            }
            .values{
                position: absolute;
                right: 100px;


            }
            .space{
                margin-top:10px;
                margin-bottom:10px;
            }
            .mainPage{
                padding-bottom: 0;
            }



        }
        .mainPage{
            padding: 80px 60px 30px;
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
            border-radius: 5px;
            height: 40px;
            margin-left: 10px!important;
            margin-right: 10px!important;
        }
        button{
            border-radius: 15px;
            padding: 7px;
            width: 100px;
            margin: 30px 44% 15px;
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
        .values{
            margin-right: 50px;
        }

        .modal-header .close{
            margin-left: -40px!important;
        }
        .modal-footer{
            padding-top: 0;
        }
        @media(max-width:1024px) {
            .result{
                width: 90%;
                margin-top: 20px;
            }

        }
        @media(max-width:768px) {
            .result{
                width: 100%;
                margin-top: 20px;
            }
            button{
                margin: 30px 41% 15px;
            }

        }
        @media(max-width: 450px){
            .greeting{
                display: none!important;

            }
            .twitter {
                margin-top: 30px;
                float: none;
            }
            button{
                margin: 30px 35% 15px;
            }
            .result{
                padding: 0;
                background: no-repeat;
            }
            .values{
                margin-right: 0;
                display: block;
            }
            .result-content {
                margin-top: 30px;

            }
            .result-content span{
                margin-left: 0px;

            }
            .squares{
                width: auto;
                height: auto;
                padding: 5px 10px;
            }
            #canvas{
                margin: auto;
                margin-top: 20px!important;
                margin-left: 275px!important;
                margin-bottom: 30px!important;
                width: 300px!important;
                height: 155px!important;
            }
            .letters{
                margin-left: 20px!important;
            }
        }
        @media (max-width: 320px) {

            #canvas {
                margin-left: 250px!important;
            }
            button{
                margin: 30px 25% 15px;
            }

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
            <h1 class="text-center" style="margin-bottom:60px;">النتيجة</h1>
            <div class="results">
                <span class="values">الربع</span><div class="text-center result-content">
                    <span class="letters">A</span>
                    <span class="letters">B</span>
                    <span class="letters">C</span>
                    <span class="letters">D</span>
                </div>
            </div>
            <div class="results">
                <span class="values space">علامات اللقطة</span><div class="text-center result-content">
                    <span class="squares" id="Dtotal" style=" background-color: yellow">{{$Dtotal}}</span>
                    <span class="squares" id="Ctotal" style=" background-color: red;">{{$Ctotal}}</span>
                    <span class="squares" id="Btotal" style=" background-color: green;">{{$Btotal}}</span>
                    <span class="squares" id="Atotal" style=" background-color: blue;">{{$Atotal}}</span>
                </div>
            </div>
            <div class="results">
                <span class="values">رمز اللقطة</span><div class="text-center result-content">
                    <span class="squares" style=" background-color: yellow">{{$Drate}}</span>
                    <span class="squares" style=" background-color: red;">{{$Crate}}</span>
                    <span class="squares" style=" background-color: green;">{{$Brate}}</span>
                    <span class="squares" style=" background-color: blue;">{{$Arate}}</span>
                </div>
            </div>

            <canvas id="canvas">

            </canvas>


            <button type="submit" name="print" value="print" onclick="window.print()">طباعة النتيجة</button>

        </div>


        <div class="greeting">
            <span>نشكر لكم حسن تعاونكم معنا </span><br>
        </div>
        <div class="twitter text-center">
            <span>و أرحب بكم على حسابي على تويتر </span><br>
            <span ></span>
            <span>salim_alqahtani@ </span>
            <span id="tw"><a href="https://twitter.com/salim_alqahtani?lang=de" style="color:black;font-weight:600" target="_blank"> <i class="fa fa-twitter text-center" aria-hidden="true"></i></a></span>

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
          data: [null,Dtotal,Ctotal,null,Btotal,Atotal],
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
