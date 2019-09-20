@extends('mainStructure')

@section('style')
    @parent
    <style>
        .container-fluid {
            padding-left: 50px;
        }
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
        .sn2{
            float: left;
            margin-top: -20px;
            margin-left: 130px;
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
        .modal-header .close{
          float: left;
          margin-left: -40px;
          margin-top: 1px;
        }
        a:hover{
            cursor: pointer;
        }

    </style>
@endsection
@section('navbar')
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <ul class="nav-items">
                <li class="logo"><a href="{{route('SelectionpPage',['name'=>$name])}}">مقياس هيرمان</a></li>




                @if($name=='admin')
                <li class="sn" data-toggle="modal" style="margin-left:320px;" data-target="#myModal"><a>تغيير الرقم السري</a></li>
                <li class="sn2" style="margin-left:200px;" data-toggle="modal" data-target="#myModal2"><a> تغيير كلمة المرور</a></li>
                <li class="sn2" style="margin-left:100px;"><a href="{{route('resultSelection',['name'=>'admin'])}}"> نتائج الإختبارات</a></li>
              @endif
              <li class="sn"><a href="{{route('logOut')}}">تسجيل خروج</a></li>
            </ul>
        </div>
    </nav>
    <!-- Start Modal 1 -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">تغيير الرقم السري</h4>
          </div>
          <div class="modal-body">


            <span id="msg2"></span>

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
      </div>
    </div>
      <!-- End Modal 1 -->





<!-- Start Modal 2 -->
      <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">تغيير كلمة مرور الأدمن</h4>
            </div>
            <div class="modal-body">


              <span id="msg"></span>

              <form id="update-password">
                @csrf
                </br>
                <label for="secretCode">كلمة السر الجديدة: </label>
                <input type="text" name="secretNumber" id="secretNumber" required>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" onclick="updatePassworde()">تعديل</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
            </div>
          </div>
        </div>
      </div>
<!-- End Modal 2 -->


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
                  if(response.success){
                    document.getElementById("msg2").innerHTML = response.success;
                      $('#msg2').css('color','green');
                  }else {
                    document.getElementById("msg2").innerHTML = response.error;
                      $('#msg2').css('color','red');
                  }

                    }

            });
}

function updatePassworde(){
  var data = $('#update-password').serializeArray();

  $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "post",
                url: '{{url('/updatePassworde')}}',
                data: data,
                dataType:"json",
                success: function(response) {
                  if(response.success){
                    document.getElementById("msg").innerHTML = response.success;
                      $('#msg').css('color','green');
                  }else {
                    document.getElementById("msg").innerHTML = response.error;
                      $('#msg').css('color','red');
                  }

                    }

            });
}

</script>
