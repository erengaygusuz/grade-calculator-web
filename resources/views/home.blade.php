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

<!-- Dilin türkçe olduğunu göstermek için gerekli yazım -->
<html lang="tr">
<head>

    <!-- Türkçe karakter ve platform uyumluluğu için meta etiketleri -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Sayfa başlığı -->
    <title>Ana Sayfa</title>

    <!-- Bootstrap ve sayfaya özel css dosyasının çağrılması -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/ana-sayfa.css')}}" rel="stylesheet">

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
    <!-- Ust bar -->
    <div class="row ust-bar" style="padding: 0px;">
        <!-- Üst bar başlık -->
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                <img class="not-hesaplama-baslik" src="{{asset('assets/img/notHesaplamaBaslik.svg')}}"/>
        </div>
        <!-- Üst bar çıkış butonu -->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-3" style="padding: 0px;">
            <a href="netting/cikis.php"><button name="cikis" class="btn cikis-butonu" style="padding: 0px;"></button></a>
        </div>
    </div>
    <!-- Giriş bölümü -->
    <div class="row">
        <!-- Bilgi kısmı -->
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 bilgi-yazisi-1">
                <h3 class="bilgi-yazisi-2">
                    <?php
                    echo "Hoşgeldiniz " . "<b>" . /*$ad . " " . $soyad .*/ "</b>" ;
                    ?>
                </h3></br>
                Notlarınızı hesaplamak için hazırlık okulunda aldığınız kurları seçmeniz gerekiyor.</br> Lütfen size uygun olan kurların bulunduğu görsele tıklayınız.
        </div>
    </div>
    <!-- Seçenekler -->
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12" style="margin-bottom: 50px; margin-top: 50px;">
                <form action="" method="POST">
                    <button class="secBtn" type="submit" name="secenek1" ><img class="secenek" src="{{asset('assets/img/secenek1.svg')}}"/></button>
                    <button class="secBtn" type="submit" name="secenek2" ><img class="secenek" src="{{asset('assets/img/secenek2.svg')}}"/></button>
                    <button class="secBtn" type="submit" name="secenek3" ><img class="secenek" src="{{asset('assets/img/secenek3.svg')}}"/></button>
                    <button class="secBtn" type="submit" name="secenek4" ><img class="secenek" src="{{asset('assets/img/secenek4.svg')}}"/></button>
                    <button class="secBtn" type="submit" name="secenek5" ><img class="secenek" src="{{asset('assets/img/secenek5.svg')}}"/></button>
                </form>
        </div>
    </div>
</div>

<!-- Jquery ve bootstrap js eklentisi -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
