<?php
/*
ob_start();
session_start();

$modalDanger = false;

// Veritabanı bağlantı kodlarının projeye dahil edilmesi
include 'netting/baglan.php';

include 'netting/girisYap.php';

include 'netting/kayitOl.php';
*/
?>

    <!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Giriş</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/img/notes.ico')}}">
</head>
<body>
<nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
    <div class="navbar-brand mx-auto" style="padding-left: 40px;" href="#">
        <img class="img-fluid" width="170" height="50" src="{{asset('assets/img/notHesaplamaBaslik.svg')}}" alt="">
    </div>
</nav>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center">
                <table id="loginForm" style="display: table" class="table">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <tbody>
                            <tr>
                                <td style="border: none; ">
                                    <h5 class="text-start">Kullanıcı Adı:</h5>
                                </td>
                                <td style="border: none; ">
                                    <input id="email" type="email" size="12" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td style="border: none; ">
                                    <h5 class="text-start">Şifre:</h5>
                                </td>
                                <td style="border: none; ">
                                    <input id="password" type="password" size="12" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td style="border: none;">
                                    <h5 class="text-start">Kayıt Ol:</h5>
                                </td>
                                <td style="border: none; ">
                                    <label class="switch">
                                        <input type="checkbox" id="loginCheck" onclick="myFunction1()">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr id="processBtn" style="height: 100px;">
                                <td colspan="2" style="border: none;" >
                                    <button class="btn btn-lg text-center" type="submit" name="giris" style="background-color: #1B75BB; color: white">Giriş Yap</button>
                                </td>
                            </tr>
                            </tbody>
                        </form>
                </table>
                <table id="registerForm" style="display: none" class="table">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <tbody>
                        <tr id="kayitOl1">
                            <td style="border: none; ">
                                <h5 class="text-start">Ad:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="name" size="12" type="text" class="form-control input-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
                        </tr>
                        <tr id="kayitOl2">
                            <td style="border: none; ">
                                <h5 class="text-start">Soyad:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="surname" size="12" type="text" class="form-control input-lg @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none; ">
                                <h5 class="text-start">Kullanıcı Adı:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="email" type="email" size="12" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none; ">
                                <h5 class="text-start">Şifre:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="password" type="password" size="12" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none; ">
                                <h5 class="text-start">Şifre Tekrar:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="password-confirm" type="password" size="12" class="form-control input-lg" name="password_confirmation" required autocomplete="new-password">
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none;">
                                <h5 class="text-start">Kayıt Ol:</h5>
                            </td>
                            <td style="border: none; ">
                                <label class="switch">
                                    <input type="checkbox" id="registerCheck" onclick="myFunction1()">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr id="processBtn" style="height: 100px;">
                            <td colspan="2" style="border: none;" >
                                <button class="btn btn-lg text-center" type="submit" name="giris" style="background-color: #1B75BB; color: white">Kayıt Ol</button>
                            </td>
                        </tr>
                        </tbody>
                    </form>
                </table>
        </div>
        <div class="col-lg-3">

        </div>
    </div>
    <div class="modal modal-danger fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hata</h4>
                </div>
                <div class="modal-body">
                    <p><span>Lütfen <b>Kullanıcı Adı</b> veya <b>Şifre</b> bilgilerinizi kontrol ediniz.</span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tamam</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

<script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/kullanici-adi-kontrolu.js')}}"></script>
<script>
    function myFunction1() {
        var loginCheck = document.getElementById("loginCheck");
        var registerCheck = document.getElementById("registerCheck");

        var loginForm = document.getElementById("loginForm");
        var registerForm = document.getElementById("registerForm");

        if (loginCheck.checked == true)
        {
            registerCheck.checked = true;
            loginCheck.checked = false;

            loginForm.style.display = "none";
            registerForm.style.display = "table";
        }

        if (registerCheck.checked == false)
        {
            loginForm.style.display = "table";
            registerForm.style.display = "none";
        }
    }
</script>
<?php
/*if($modalDanger == true)
{
    echo"
  <script>
    $(document).ready(function(){
      $('#modal-danger').modal();
      });
  </script>";

}*/
?>
</body>
</html>
