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

<!-- Dilin türkçe olduğunu göstermek için gerekli yazım -->
<html lang="tr">
<head>

    <!-- Türkçe karakter ve platform uyumluluğu için meta etiketleri -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Sayfa başlığı -->
    <title>Hakkında</title>

    <!-- Bootstrap ve sayfaya özel css dosyasının çağrılması -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/hakkinda.css')}}" rel="stylesheet">

    <!-- Sayfa başlığı yanına eklenen ikon -->
    <link rel="shortcut icon" href="{{asset('assets/img/notes.ico')}}">

    <!-- Bazı eski tarayıcılar için gerekli kod, kullanma zorunluluğu yok -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Genel div -->
<div class="container-fluid" style="padding: 0px; width: 100%;">
    <?php
    //include 'ustBar1.php';
    ?>
        <!-- Hakkında bar -->
    <div class="row hakkinda-bar">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hakkinda-baslik" style="padding: 8px 0px 0px 0px;">
            <center>
                Hakkında
            </center>
        </div>
    </div>
    <!-- Hakkında bilgi bölümü -->
    <div class="row">
        <div class="col-lg-12" style="padding: 10px;">
        <div class="panel panel-primary" style="margin: 10px; ">
            <!-- Hakkında bölümü bilgi yazıları -->
            <div class="panel-body">
                <center><h6 class="hakkinda-not-1">Bu web sitesi Atılım Üniversitesi Hazırlık Okulu öğrencilerinin</br> notlarını kolaylıkla hesaplamalarını sağlamak amacıyla tasarlanmıştır.</h6>
                    <h6 class="hakkinda-not-2">Hazırlayanlar</h6></center>
                <div class="col-lg-12">
                    <center><img class="hakkinda-eren" src="{{asset('assets/img/hakkindaEren.svg')}}"/></center>
                </div>
                <div class="col-lg-12">
                    <center><img class="hakkinda-veysel" src="{{asset('assets/img/hakkindaVeysel.svg')}}"/></center>
                </div>
                <div class="col-lg-12 hakkinda-not-3">
                    <center>© 2017 - 2019</center>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Jquery ve bootstrap js eklentisi -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/dropdownMenu.js"></script>
</body>
</html>
