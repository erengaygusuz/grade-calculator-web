<!-- Kontrol php dosyasının çağrılması -->

<?php
/*
ob_start();
session_start();

include 'netting/baglan.php';

include 'netting/kullaniciCek.php';

$_SESSION['secim'] = 0;

include 'netting/secimeGit.php';*/

?>

    <!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ana Sayfa</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/img/notes.ico')}}">
</head>
<body>
<nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
    <div class="navbar-brand mx-auto" style="padding-left: 40px;" href="#">
        <img class="img-fluid" width="170" height="50" src="{{asset('assets/img/notHesaplamaBaslik.svg')}}" alt="">
    </div>
    <a class="float-end" href="#">
        <img class="img-fluid me-md-1" width="40" height="40" src="{{asset('assets/img/cikisBtn.svg')}}" alt="">
    </a>
</nav>
<div class="container">
    <div class="row">
        <div class="home-info-text-1 text-center">
            <h3 class="home-info-text-2">
                <?php
                echo "Hoşgeldiniz " . "<b>" . /*$ad . " " . $soyad .*/
                    "</b>";
                ?>
            </h3>
            </br>
            Notlarınızı hesaplamak için hazırlık okulunda aldığınız kurları seçmeniz gerekiyor.
            </br>
            Lütfen size uygun olan kurların bulunduğu görsele tıklayınız.
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a><img class="option" src="{{asset('assets/img/secenek1.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a><img class="option" src="{{asset('assets/img/secenek2.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a><img class="option" src="{{asset('assets/img/secenek3.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a><img class="option" src="{{asset('assets/img/secenek4.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a><img class="option" src="{{asset('assets/img/secenek5.svg')}}"/></a>
        </div>
        <div class="col-lg-1">

        </div>
    </div>
</div>

<script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
