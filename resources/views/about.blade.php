<?php
/*
ob_start();
session_start();

if (isset($_POST['not-geri']))
{
    if($_SESSION['secim'] == 1)
    {
        header('Location: secenek1.php');
    }

    else if($_SESSION['secim'] == 2)
    {
        header('Location: secenek2.php');
    }

    else if($_SESSION['secim'] == 3)
    {
        header('Location: secenek3.php');
    }

    else if($_SESSION['secim'] == 4)
    {
        header('Location: secenek4.php');
    }

    else
    {
        header('Location: secenek5.php');
    }
}
*/
?>

    <!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hakkında</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/img/notes.ico')}}">
</head>
<body>
<nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
    <a class="float-start" href="{{url('/option?type='.$_GET["type"])}}">
        <img class="about-grade-calculation-btn" style="margin-left: 10px;" src="{{asset('assets/img/notHesaplamayaDonBtn.svg')}}" alt="">
    </a>
    <div class="navbar-brand mx-auto" href="#">
        <img class="img-fluid" width="170" height="50" src="{{asset('assets/img/notHesaplamaBaslik.svg')}}" alt="">
    </div>
    <a class="float-end">
        <div class="dropdown">
            <button class="btn three-dot dropbtn" onclick="myFunction()"></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="{{url('/settings?type='.$_GET["type"])}}">
                    <img src="{{asset('assets/img/ayaraDonBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                    Ayarlar
                </a>
                <a href="{{url('/about?type='.$_GET["type"])}}">
                    <img src="{{asset('assets/img/hakkindayaDonBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                    Hakkında
                </a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <img width="20" height="20" src="{{asset('assets/img/cikisBtn.svg')}}" alt="" style="margin-right: 27px;">
                    Çıkış
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </div>
    </a>
</nav>
<nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
    <div class="col-12 about-title text-center">
        Hakkında
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="padding: 10px;">
            <div class="card card-primary" style="margin: 10px; ">
                <div class="card-body text-center">
                    <h6 class="about-text-1">
                        Bu web sitesi Atılım Üniversitesi Hazırlık Okulu öğrencilerinin
                        </br>
                        notlarını kolaylıkla hesaplamalarını sağlamak amacıyla tasarlanmıştır.
                    </h6>
                    <h6 class="about-text-2">
                        Hazırlayanlar
                    </h6>
                    <div class="col-lg-12">
                        <img class="about-developer-eren" src="{{asset('assets/img/hakkindaEren.svg')}}"/>
                    </div>
                    <div class="col-lg-12">
                        <img class="about-developer-veysel" src="{{asset('assets/img/hakkindaVeysel.svg')}}"/>
                    </div>
                    <div class="col-lg-12 about-text-3">
                        © 2023
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/dropdownMenu.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
