
@extends('navbar')
@section('title' , 'النتيجة')
@section('style')
    @parent
    <style>

        @media print {
            #tw , button{
                display: none;
            }
            body{
                margin: 0;
            }
            title{
                display: none;
            }
            canvas{
                /*margin: -1000px -115px -10px 50px;*/
                /*margin-top: -1000px;*/
                margin-bottom: -500px;
                margin-right: 100px;
                /*width: 80%!important;*/

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
            .left ,.right , .top , .bottom{
                font-size: 18px;
                border:1px solid;
            }
            .left{

                margin-top: -10px;
                /*margin-right: -100px;*/

            }
            .right{
                margin-top: -10px;
                margin-right: -60px;
            }
            .top{
                margin-top: -70px;
                margin-right: -30px;

            }
            .bottom{
                margin-top: 45px;
                margin-right: -30px;
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
            width: 80%;
            margin: auto;
            padding: 10px 40px 20px;
            border-radius: 10px;
            background-color: #e9ecef40;
            margin-top: 20px;
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
            color: black;
            display: inline-block;
            width: 50px;
            border-radius: 5px;
            padding-top: 8px;
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
        .right , .left , .top , .bottom{
            background-color:#2c4861 ;
            padding: 10px 15px;
            border-radius: 5px;
            color: white;
            position: absolute;
        }
        /*.left{*/
            /*left: 30%;*/
            /*top: 660px;*/
        /*}*/
        /*.right{*/
            /*right: 30%;*/
            /*top: 660px;*/
        /*}*/
        /*.top{*/
            /*right: 45%;*/
            /*top: 30px;*/
        /*}*/
        /*.bottom{*/
            /*right: 48.5%;*/
            /*top: 890px;*/

        /*}*/
        .modal-header .close{
            margin-left: -40px!important;
        }
        .modal-footer{
            padding-top: 0;
        }
        @media(max-width:2000px) {
            button{
                margin: 30px 44% 15px;
            }
            .top{
                right: 46%;
                top: 30px;
            }
            .bottom{
                right: 46%;
                top: 470px;

            }
            .left{
                left: 14%;
                top: 260px;
            }
            .right{
                right: 15%;
                top: 260px;
            }

        }
        @media(max-width:1024px) {
            .result{
                width: 90%;
                margin-top: 20px;
            }
            .right , .left , .top , .bottom{

                padding: 5px 10px;

            }
            .top{
                right: 46%;
                top: 35px;
            }
            .bottom{
                right: 46%;
                top: 400px;

            }
            .left{
                left: 14%;
                top: 220px;
            }
            .right{
                right: 15%;
                top: 220px;
            }

        }
        @media(max-width:768px) {
            .result{
                width: 100%;

            }
            .right , .left , .top , .bottom{
                font-size: 12px;
            }
            .top{
                right: 45%;
                top: 50px;
            }
            .bottom{
                right: 45%;
                top: 320px;

            }
            .left{
                left: 14%;
                top: 185px;
            }
            .right{
                right: 15%;
                top: 185px;
            }

        }
        .sum{
            border: solid 2px gray;
            border-radius:8px;
            margin-top: 15px;
            padding:4px;
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
                    <span>A</span>
                    <span>B</span>
                    <span>C</span>
                    <span>D</span>
                </div>
            </div>
            <div class="results">
                <span class="values space">علامات اللقطة</span><div class="text-center result-content">
                    <span class="squares" id="Dtotal" style=" background-color: yellow">{{$D}}</span>
                    <span class="squares" id="Ctotal" style=" background-color: red;">{{$C}}</span>
                    <span class="squares" id="Btotal" style=" background-color: green;">{{$B}}</span>
                    <span class="squares" id="Atotal" style=" background-color: blue;">{{$A}}</span>
                </div>
            </div>
            <div class="results">
                <span class="values space">رمز اللقطة</span><div class="text-center result-content">
                    <span class="squares" id="Drate" style=" background-color: yellow">{{$DPoint}}</span>
                    <span class="squares" id="Crate" style=" background-color: red;">{{$CPoint}}</span>
                    <span class="squares" id="Brate" style=" background-color: green;">{{$BPoint}}</span>
                    <span class="squares" id="Arate" style=" background-color: blue;">{{$APoint}}</span>
                </div>
            </div>
            @php
                $total =   $A+$B+$D+$C;
            @endphp

            <div class="row">
                <div class="col-sm-2 ">
                    <div class="results text-center" style="float: left;margin-top: 30px">
                        <div class="sum">TOTAL(A+B+C+B)={{$total}}</div>
                        <div class="sum" style="width:60%;float: left;">A+B={{$A+$B}}</div>
                        <div class="sum" style="width:60%;clear: both;float: left;">C+D={{$C+$D}}</div>
                        <div class="sum" style="width:60%;clear: both;float: left;">A+B={{$A+$B}}</div>
                        <div class="sum" style="width:60%;clear: both;float: left;">C+B={{$C+$B}}</div>

                    </div>
                </div>
                <div class="col-sm-10">
                    <span class="left">{{round(($A+$B)/$total*100, 1)}} %</span>
                    <span class="right">{{round(($D+$C)/$total*100, 1)}} %</span>
                    <span class="top">{{round(($D+$A)/$total*100, 1)}} %</span>
                    <span class="bottom">{{round(($B+$C)/$total*100, 1)}} %</span>
                    <canvas id="canvas" style="margin-top: 80px;margin-bottom: 80px;width: 80%!important;">
                        Your browser does not support the canvas element.

                    </canvas>

                </div>

            </div>








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

        var Dtotal = $("#Dtotal").text();
        var Ctotal = $("#Ctotal").text();
        var Btotal = $("#Btotal").text();
        var Atotal = $("#Atotal").text();
        function draw2(){
            var c2 = document.getElementById("canvas2");

            c2.height = 300;
            var ctx2 = c2.getContext('2d');
            var rectWidth = 35;
            var rectHeight = 35;
            var cornerRadius = 10;

             // Right
            var rectXRight = 650;
            var rectYRight = 235;
            ctx2.lineJoin = "round";
            ctx2.lineWidth = cornerRadius;
            ctx2.fillStyle = "#2c4861";
            ctx2.strokeStyle = "#2c4861";
            ctx2.strokeRect(rectXRight, rectYRight, rectWidth, rectHeight);
            ctx2.fillRect(rectXRight, rectYRight, rectWidth, rectHeight);

            ctx2.fillStyle = "white";
            ctx2.font = 'italic 18px sans-serif';
            ctx2.fillText(parseInt(Dtotal)+parseInt(Ctotal), 200, 100);

            //bottom
            {{--var rectXBottom = 80;--}}
            {{--var rectYBottom = 300;--}}
            {{--ctx2.lineJoin = "round";--}}
            {{--ctx2.lineWidth = cornerRadius;--}}
            {{--ctx2.fillStyle = "#2c4861";--}}
            {{--ctx2.strokeStyle = "#2c4861";--}}
            {{--ctx2.strokeRect(rectXBottom, rectYBottom, rectWidth, rectHeight);--}}
            {{--ctx2.fillRect(rectXBottom, rectYBottom, rectWidth, rectHeight);--}}

            {{--ctx2.fillStyle = "white";--}}
            {{--ctx2.font = 'italic 18px sans-serif';--}}
            {{--ctx2.fillText(parseInt(Btotal)+parseInt(Ctotal), 200, 100);--}}

            //Left
            var rectXLeft = 150;
            var rectYLeft = 235;
            ctx2.lineJoin = "round";
            ctx2.lineWidth = cornerRadius;
            ctx2.fillStyle = "#2c4861";
            ctx2.strokeStyle = "#2c4861";
            ctx2.strokeRect(rectXLeft, rectYLeft, rectWidth, rectHeight);
            ctx2.fillRect(rectXLeft, rectYLeft, rectWidth, rectHeight);

            ctx2.fillStyle = "white";
            ctx2.font = 'italic 18px sans-serif';
            ctx2.fillText(parseInt(Dtotal)+parseInt(Ctotal), 177, 260);
        }

{{--draw2();--}}
        function draw(){
        var c = document.getElementById("canvas");
         var ctx = c.getContext('2d');




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
              stepSize: 4,
              min: 0,
              max: 15,
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
