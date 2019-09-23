@extends('navbar')
@section('title' , 'نتائج المقياس المختصر')
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
         use App\Result;
        $shortResults = Result::where('resultType' , 'short')->get();

        @endphp
        <table id="example" class="display table table-striped text-center" style="width:100%">
            <thead>
            <tr>
                <th>إسم المتدرب</th>
                <th>تاريخ الإختبار</th>
                <th>العمر</th>
                <th>رمز A</th>
                <th>رمز B</th>
                <th>رمز C</th>
                <th>رمز D</th>
                <th>الفص الأيمن</th>
                <th>الفص الأيسر</th>

            </tr>
            </thead>
            <tbody>

            @foreach($shortResults as $result)
                @php
                $A = $result->Atotal;
                $B = $result->Btotal;
                $C = $result->Ctotal;
                $D = $result->Dtotal;
                $total =   $A+$B+$D+$C;
                @endphp
                <tr>
                    <td>{{$result->userName}}</td>
                    <td>{{$result->examDate}}</td>
                    <td>{{$result->age}}</td>
                    <td>{{$result->Arate}}</td>
                    <td>{{$result->Brate}}</td>
                    <td>{{$result->Crate}}</td>
                    <td>{{$result->Drate}}</td>
                    <td>{{round(($result->CD)/$total*100, 1)}} %</td>
                    <td>{{round(($result->AB)/$total*100, 1)}} %</td>

                </tr>
            @endforeach

            </tbody>
        </table>

        <form method="post" action="{{route('export')}}" enctype="multipart/form-data">
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
