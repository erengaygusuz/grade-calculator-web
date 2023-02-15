<?php
/*
ob_start();
session_start();

include 'netting/baglan.php';
include 'netting/kullaniciCek.php';
include 'netting/ayarCek.php';
include 'netting/secenek1Hesapla.php';
include 'netting/bilgiCek.php';
*/
?>

    <!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Seçenek 1</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/img/notes.ico')}}">
</head>
<body>
<nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
    <a class="float-start" href="#">
        <img class="about-grade-calculation-btn" style="margin-left: 10px;" src="{{asset('assets/img/anaSayfaBtn.svg')}}" alt="">
    </a>
    <div class="navbar-brand mx-auto" href="#">
        <img class="img-fluid" width="170" height="50" src="{{asset('assets/img/notHesaplamaBaslik.svg')}}" alt="">
    </div>
    <a class="float-end" href="#">
        <div class="dropdown">
            <button class="btn three-dot dropbtn" onclick="myFunction()"></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="ayar.php">
                    <img src="{{asset('assets/img/ayaraDonBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                    Ayarlar
                </a>
                <a href="hakkinda.php">
                    <img src="{{asset('assets/img/hakkindayaDonBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                    Hakkında
                </a>
                <form action="" method="POST">
                    <a href="netting/cikis.php">
                        <img src="{{asset('assets/img/cikisBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                        Çıkış
                    </a>
                </form>
            </div>
        </div>
    </a>
</nav>
<nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
    <div class="col-12">
        <div class="nav nav-pills justify-content-center" id="nav-tab" role="tablist">
            <button class="nav-link grade-tab-item active" id="menu1" data-bs-toggle="tab" data-bs-target="#menu1-tab-pane" type="button" role="tab" aria-controls="menu1" aria-selected="true">Genel</button>
            <button class="nav-link grade-tab-item" id="menu2" data-bs-toggle="tab" data-bs-target="#menu2-tab-pane" type="button" role="tab" aria-controls="menu2" aria-selected="false">Pro</button>
            <button class="nav-link grade-tab-item" id="menu3" data-bs-toggle="tab" data-bs-target="#menu3-tab-pane" type="button" role="tab" aria-controls="menu3" aria-selected="false">A</button>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu1-tab-pane" role="tabpanel" aria-labelledby="menu1" tabindex="0">
                <div class="row">
                    <div class="card card-primary" style="padding: 30px 30px 10px 30px; border-radius: 10px;">
                        <div class="card-group">
                            <table class="table table-bordered" id="genel" style="border-color: black;">
                                <tbody>
                                <!-- Ad ve soyad bilgisi -->
                                <tr>
                                    <td>Ad ve Soyad:</td>
                                    <td><?php /*echo $ad . " " . $soyad; */?></td>
                                </tr>
                                <!-- Kullanıcı adı bilgisi -->
                                <tr>
                                    <td>Kullanıcı Adı:</td>
                                    <td><?php /*echo $kulAdi */?></td>
                                </tr>
                                <!-- Genel ortalama bilgisi -->
                                <tr>
                                    <td>Genel Ortalama:</td>
                                    <td id="genelOrt"><?php /*echo sprintf("%.1f", $ortGenel); */?></td>
                                </tr>
                                <!-- Pro kuru ortalamsı bilgisi -->
                                <tr>
                                    <td>Pro Kuru Ortalaması:</td>
                                    <td id="genelProNot"><?php /*echo sprintf("%.1f", $ortPro); */?></td>
                                </tr>
                                <!-- A kuru ortalaması bilgisi -->
                                <tr>
                                    <td>A Kuru Ortalaması:</td>
                                    <td id="genelNot"><?php /*echo sprintf("%.1f", $ortA); */?></td>
                                </tr>
                                <!-- Durum bilgisi -->
                                <tr>
                                    <td>Durum:</td>
                                    <td id="durum"><?php /*echo $durum */?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="menu2-tab-pane" role="tabpanel" aria-labelledby="menu2" tabindex="0">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-12 text-center">
                                <div class="kur-label">
                                    <img class="kur-label-arkaplan" src="{{asset('assets/img/paralelSol.svg')}}"/>
                                    <div class="kur-label-ortala">Pro kuru</br>ortalaması</div>
                                </div>
                                <div class="kur-not">
                                    <img class="kur-not-arkaplan" src="{{asset('assets/img/paralelOrta.svg')}}"/>
                                    <div class="kur-not-ortala" id="sonucPro">
                                        <?php /*echo sprintf("%.1f", $ortPro); */?>
                                    </div>
                                </div>
                                <button type="submit" name="hesapla-1-1" id="hesaplaPro" class="btn hesapla-butonu-arkaplan">Hesapla</button>
                        </div>
                    </div>
                    <?php
                    /*for ($j=0; $j < 5; $j++)
                    {
                        */?>
                    <div class="label-pro" style="margin-top: 0px;">
                        <?php /*echo $proLbl[$j];*/ ?>
                    </div>
                    <div class="row">
                        <div class="card card-primary" style="border-radius: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <center>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                        <?php
                                        /*for ($i=0; $i < 5; $i++)
                                        {
                                            echo "<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2' style='margin: 0px; padding: 0px;'><input type='text' id='proNot-{$j}-{$i}' name='proNot-{$j}-{$i}' class='form-control yuzde-input-not' onkeyup='maxMinDegerPro()' value='" . $proNotAl[$j][$i] . "'></div>";
                                        }*/
                                        ?>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                    </center>
                                </div>
                                <div class="row" style="margin-top: 15px;">
                                    <center>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                        <?php
                                        /*for ($i=5; $i < 10; $i++)
                                        {
                                            echo "<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2' style='margin: 0px; padding: 0px;'><input type='text' id='proNot-{$j}-{$i}' name='proNot-{$j}-{$i}' class='form-control yuzde-input-not' onkeyup='maxMinDegerPro()' value='" . $proNotAl[$j][$i] . "'></div>";
                                        }*/
                                        ?>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    /*}*/
                    ?>
                </form>
            </div>
            <div class="tab-pane fade" id="menu3-tab-pane" role="tabpanel" aria-labelledby="menu3" tabindex="0">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-12 text-center">
                                <div class="kur-label">
                                    <img class="kur-label-arkaplan" src="{{asset('assets/img/paralelSol.svg')}}"/>
                                    <div class="kur-label-ortala">A kuru</br>ortalaması</div>
                                </div>
                                <div class="kur-not">
                                    <img class="kur-not-arkaplan" src="{{asset('assets/img/paralelOrta.svg')}}"/>
                                    <div class="kur-not-ortala" id="sonucA">
                                        <?php /*echo sprintf("%.1f", $ortA); */?>
                                    </div>
                                </div>
                                <button type="submit" name="hesapla-1-2" id="hesaplaA" class="btn hesapla-butonu-arkaplan">Hesapla</button>
                        </div>
                    </div>
                    <?php
                    /*for ($j=0; $j < 5; $j++)
                    {
                       */ ?>
                    <div class="label-a" style="margin-top: 0px;">
                        <?php /*echo $aLbl[$j]; */?>
                    </div>
                    <div class="row">
                        <div class="card card-primary" style="border-radius: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <center>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                        <?php
                                        /*for ($i=0; $i < 5; $i++)
                                        {
                                            echo "<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2' style='margin: 0px; padding: 0px;'><input type='text' id='aNot-{$j}-{$i}' name='aNot-{$j}-{$i}' class='form-control yuzde-input-not' onkeyup='maxMinDegerPro()' value='" . $aNotAl[$j][$i] . "'></div>";
                                        }*/
                                        ?>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                    </center>
                                </div>
                                <div class="row" style="margin-top: 15px;">
                                    <center>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                        <?php
                                        /*for ($i=5; $i < 10; $i++)
                                        {
                                            echo "<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2' style='margin: 0px; padding: 0px;'><input type='text' id='aNot-{$j}-{$i}' name='aNot-{$j}-{$i}' class='form-control yuzde-input-not' onkeyup='maxMinDegerPro()' value='" . $aNotAl[$j][$i] . "'></div>";
                                        }*/
                                        ?>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    /*}*/
                    ?>
                </form>
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
