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

<!-- Dilin türkçe olduğunu göstermek için gerekli yazım -->
<html lang="tr">
<head>

    <!-- Türkçe karakter ve platform uyumluluğu için meta etiketleri -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Sayfa başlığı -->
    <title>Seçenek 1</title>

    <!-- Bootstrap ve sayfaya özel css dosyasının çağrılması -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/secenek1.css')}}" rel="stylesheet">

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
    //include 'ustBar.php';
    ?>

        <!-- Tab bar -->
    <div class="row tab-bar" style="padding: 0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
            <ul class="nav nav-tabs">
                <!-- Menü elemanları -->
                <li><a class="tab-bilesen" data-toggle="tab" href="#menu1">Genel</a></li>
                <li class="active"><a class="tab-bilesen" data-toggle="tab" href="#menu2">Pro</a></li>
                <li ><a class="tab-bilesen" data-toggle="tab" href="#menu3">A</a></li>
            </ul>
        </div>
    </div>
    <!-- Not girme ve hesaplama bölümü -->
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
            <div class="tab-content" style="border: 0px; margin-top: 15px;">
                <!-- Genel bölümü -->
                <div id="menu1" class="tab-pane fade" style="margin-top: 40px;">
                    <div class="row">
                        <div class="panel panel-primary" style="padding: 30px 30px 10px 30px; border-radius: 10px;">
                            <div class="panel-group">
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
                <!-- Pro kuru not hesaplama bölümü -->
                <div id="menu2" class="tab-pane fade in active">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
                                <center>
                                    <div class="kur-label">
                                        <img class="kur-label-arkaplan" src="img/paralelSol.svg"/>
                                        <div class="kur-label-ortala">Pro kuru</br>ortalaması</div>
                                    </div>
                                    <div class="kur-not">
                                        <img class="kur-not-arkaplan" src="img/paralelOrta.svg"/>
                                        <div class="kur-not-ortala" id="sonucPro">
                                            <?php /*echo sprintf("%.1f", $ortPro); */?>
                                        </div>
                                    </div>
                                    <button type="submit" name="hesapla-1-1" id="hesaplaPro" class="btn hesapla-butonu-arkaplan">Hesapla</button>
                                </center>
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
                            <div class="panel panel-primary" style="border-radius: 10px;">
                                <div class="panel-body">
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
                <!-- A kuru not hesaplama bölümü -->
                <div id="menu3" class="tab-pane fade">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
                                <center>
                                    <div class="kur-label">
                                        <img class="kur-label-arkaplan" src="img/paralelSol.svg"/>
                                        <div class="kur-label-ortala">A kuru</br>ortalaması</div>
                                    </div>
                                    <div class="kur-not">
                                        <img class="kur-not-arkaplan" src="img/paralelOrta.svg"/>
                                        <div class="kur-not-ortala" id="sonucA">
                                            <?php /*echo sprintf("%.1f", $ortA); */?>
                                        </div>
                                    </div>
                                    <button type="submit" name="hesapla-1-2" id="hesaplaA" class="btn hesapla-butonu-arkaplan">Hesapla</button>
                                </center>
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
                            <div class="panel panel-primary" style="border-radius: 10px;">
                                <div class="panel-body">
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
</div>

<!-- Jquery, bootstrap, secenek max-min, yüzde değerlerinin çekilmesi ve not hesaplama js eklentisi -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/dropdownMenu.js"></script>
</body>
</html>
