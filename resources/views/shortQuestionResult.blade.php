@extends('navbar')
@section('title' , 'النتيجة')
@section('style')
    @parent
    <style>
        .container{
            margin-top: 100px;
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
                <th>تاريخ الإحتبار</th>
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



    </div>

@endsection
@section('links')
    @parent
@endsection
@section('script')

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endsection
