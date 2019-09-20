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
    <table id="example" class="display table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>إسم المتدرب</th>
            <th>تاريخ الإحتبار</th>
            <th>ATotal</th>
            <th>BTotal</th>
            <th>CTotal</th>
            <th>DTotal</th>
            <th>ARate</th>
            <th>BRate</th>
            <th>CRate</th>
            <th>DRate</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
            <td>$320,800</td>
        </tr>
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
