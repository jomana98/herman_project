<!DOCTYPE html>
<html lang="arabic">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Modal Links-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



    <link rel="stylesheet" href="{{asset("css/bootstrap-rtl.css")}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">



    @section('style')
        <style>

           .dataTables_length{
               visibility: hidden;
           }
            div.dataTables_filter{
                margin-inside: 50px;
            }
           body , h1 , h2, h3, h4, h5 , input , button{
               font-family: 'Cairo', sans-serif!important;
           }
        </style>
    @show
</head>
<body>


@section('container')

@show

@section('links')
{{--bootstrap--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>--}}
<script src="https://cdn.jsdelivr.net/gh/nagix/nagix.github.io@chartjs/Chart.6289.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/0.3.0/tippy.js"></script>--}}


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>



{{--<script src="{{asset('js/chart.js')}}"></script>--}}
@show
@section('script')

@show
</body>
</html>
