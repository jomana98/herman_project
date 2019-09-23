@extends('navbar')
@section('title' , 'النتيجة')
@section('style')
    @parent
    <style>
        .container{
            margin-top: 100px;
        }
        div.dataTables_filter{
            margin-bottom:20px!important;
        }
        input[type=search]{
            padding: 3px;
            border: solid gray;
            border-radius: 7px;
            margin-right: 5px;
        }
        .dataTables_info{
            visibility: hidden;
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

    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    </head>
<div class="container">
    @php
        use App\MainResult;
       $shortResults = MainResult::where('resultType' , 'main')->get();
    @endphp
    <table id="example" class="display table table-striped text-center" style="width:100%">
        <thead>
        <tr>
            <th>إسم المتدرب</th>
            <th>تاريخ الإختبار</th>
            <th>العمر</th>
            <th>مجموع A</th>
            <th>مجموع B</th>
            <th>مجموع C</th>
            <th>مجموع D</th>
            <th>رمز A</th>
            <th>رمز B</th>
            <th>رمز C</th>
            <th>رمز D</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shortResults as $result)
            <tr>
                <td>{{$result->userName}}</td>
                <td>{{$result->examDate}}</td>
                <td>{{$result->age}}</td>
                <td>{{$result->Atotal}}</td>
                <td>{{$result->Btotal}}</td>
                <td>{{$result->Ctotal}}</td>
                <td>{{$result->Dtotal}}</td>
                <td>{{$result->Arate}}</td>
                <td>{{$result->Brate}}</td>
                <td>{{$result->Crate}}</td>
                <td>{{$result->Drate}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

    <form method="post" action="{{route('exportMain')}}" enctype="multipart/form-data">
        @csrf
        <input name="send" type="submit" value="تصدير اكسل" id="submitButton">
    </form>


</div>

@endsection
@section('links')
    @parent
@endsection
@section('script')

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            scrollY:        '400px',
            scrollCollapse: true,
            paging:         false,
            "oLanguage": {
            "sSearch": "البحث : "}
        } );
         } );
</script>
@endsection
