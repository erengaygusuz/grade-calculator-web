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
<body onload="load()">
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
                <table class="table">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <tbody>
                        <tr id="kayitOl1" style="display: none;">
                            <td style="border: none; ">
                                <h5 class="text-start">Ad:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="ad" class="form-control input-lg" type="text" name="ad" size="12" required>
                            </td>
                        </tr>
                        <tr id="kayitOl2" style="display: none;">
                            <td style="border: none; ">
                                <h5 class="text-start">Soyad:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="soyad" class="form-control input-lg" type="text" name="soyad" size="12" required>
                            </td>
                        </tr>
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
                            <td style="border: none; ">
                                <h5 class="text-start">Kayıt Ol:</h5>
                            </td>
                            <td style="border: none; ">
                                <label class="switch">
                                    <input type="checkbox" id="myCheck1" onclick="myFunction1()">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr id="girisBtn" style="height: 100px;">
                            <td colspan="2" style="border: none;" >
                                <button class="btn btn-primary btn-lg text-center" type="submit" name="giris" >Giriş Yap</button>
                            </td>
                        </tr>
                        <tr id="kayitBtn" style="height: 100px; display: none;">
                            <td colspan="2" style="border: none;" >
                                <button class="btn btn-primary btn-lg text-center" type="submit" name="kayit" >Kayıt Ol</button>
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
    function load(){
        var ad = document.getElementById("ad");
        var soyad = document.getElementById("soyad");

        ad.required = false;
        soyad.required = false;
    }

    function myFunction1() {
        var checkBoxYes = document.getElementById("myCheck1");
        var ad = document.getElementById("ad");
        var soyad = document.getElementById("soyad");
        var kayit1 = document.getElementById("kayitOl1");
        var kayit2 = document.getElementById("kayitOl2");
        var kayitBtn = document.getElementById("kayitBtn");
        var girisBtn = document.getElementById("girisBtn");

        if (checkBoxYes.checked == true)
        {
            ad.required = true;
            soyad.required = true;
            kayit1.style.display = "";
            kayit2.style.display = "";
            kayitBtn.style.display = "";
            girisBtn.style.display = "none";
        }

        else
        {
            ad.required = false;
            soyad.required = false;
            kayit1.style.display = "none";
            kayit2.style.display = "none";
            kayitBtn.style.display = "none";
            girisBtn.style.display = "";
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
