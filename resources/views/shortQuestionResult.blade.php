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
            margin-right: 5px;
            border-radius: 7px;
        }
        .dataTables_info{
            visibility: hidden;
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
         use App\Result;
        $shortResults = Result::where('resultType' , 'short')->get();
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
                <th>A+B</th>
                <th>C+D</th>
                <th>A+D</th>
                <th>C+B</th>
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
                    <td>{{$result->AB}}</td>
                    <td>{{$result->CD}}</td>
                    <td>{{$result->AD}}</td>
                    <td>{{$result->CB}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>



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
