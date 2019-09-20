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


<div class="container">
    <table id="example" class="ui celled table" style="width:100%">
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
        </tr><tr>
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
        </tr><tr>
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
        </tr><tr>
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
        </tr><tr>
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
        </tr><tr>
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
        </tr><tr>
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
        </tr><tr>
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
            <td>ali</td>
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
        <tfoot>
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
        </tfoot>
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
            paging:         false
        } );
    } );
</script>
@endsection
