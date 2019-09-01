@extends('mainStructure')

@section('style')
    @parent
    <style>

        .nav-items li{
            list-style: none;
            color: white;
        }
        .nav-items li a{
            text-decoration: none;
            color: white;
        }
        .nav-items li a:hover{
            color: #d6e9f8;
        }
        .sn{
            float: left;
            margin-top: -20px;
        }
        .logo{
            margin-top: 10px;
            font-size: 18px;
        }
        .navbar-inverse{
            background-color: #2c4861;
            border: none;
            margin-bottom: 100px;
        }

    </style>
@endsection
@section('navbar')
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav-items">
                <li class="logo">مقياس هيرمان</li>
                <li class="sn" data-toggle="modal" data-target="#myModal"><a>تغيير الرقم السري</a></li>
            </ul>
        </div>
    </nav>

    <!-- Start Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">تغيير الرقم السري</h4>
          </div>
          <div class="modal-body">
            <span id="done"></span>
          
            <form id="update-form">
              @csrf
              </br>
              <label for="secretCode">أدخل الرقم الجديد: </label>
              <input type="text" name="secretNumber" id="secretNumber" required>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default" onclick="updateCode()">تعديل</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
          </div>
        </div>
      <!-- End Modal -->
@show

<script>
function updateCode(){
  var data = $('#update-form').serializeArray();

  $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "post",
                url: '{{url('/UpdateSecretNumber')}}',
                data: data,
                dataType:"json",
                success: function(response) {
                  document.getElementById("done").innerHTML = response.success;
                    $('#done').css('color','green');
                    }

            });
}

</script>
