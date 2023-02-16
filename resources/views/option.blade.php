<?php

$options = array(
    array("Genel", "Pro", "A"),
    array("Genel", "Pro", "A", "B"),
    array("Genel", "Pro", "A", "B", "C"),
    array("Genel", "A", "B", "C", "D"),
    array("Genel", "Pro", "A", "B", "C", "D"));

$levelItems = array("Quiz", "Writing", "Midterm", "Speaking", "Homework");

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
    <a class="float-start" href="{{url('/home')}}">
        <img class="about-grade-calculation-btn" style="margin-left: 10px;"
             src="{{asset('assets/img/anaSayfaBtn.svg')}}" alt="">
    </a>
    <div class="navbar-brand mx-auto" href="#">
        <img class="img-fluid" width="170" height="50" src="{{asset('assets/img/notHesaplamaBaslik.svg')}}" alt="">
    </div>
    <a class="float-end">
        <div class="dropdown">
            <button class="btn three-dot dropbtn" onclick="myFunction()"></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="{{url('/settings?type='.$_GET["type"])}}">
                    <img src="{{asset('assets/img/ayaraDonBtn.svg')}}" width="20px" height="20px"
                         style="margin-right: 27px;">
                    Ayarlar
                </a>
                <a href="{{url('/about?type='.$_GET["type"])}}">
                    <img src="{{asset('assets/img/hakkindayaDonBtn.svg')}}" width="20px" height="20px"
                         style="margin-right: 27px;">
                    Hakkında
                </a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <img width="20" height="20" src="{{asset('assets/img/cikisBtn.svg')}}" alt=""
                         style="margin-right: 27px;">
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
    <div class="col-12">
        <div class="nav nav-pills justify-content-center" id="nav-tab" role="tablist">
            <?php for ($j = 0;
                       $j < count($options[$_GET["type"]]);
                       $j++)
            {
                ?>
            <button class="nav-link grade-tab-item {{$j == 0 ? "active":"" }}" id="menu{{($j + 1)}}"
                    data-bs-toggle="tab"
                    data-bs-target="#menu{{($j + 1)}}-tab-pane"
                    type="button" role="tab" aria-controls="menu{{($j + 1)}}"
                    aria-selected="true">{{$options[$_GET["type"]][$j]}}
            </button>
                <?php
            }
            ?>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu1-tab-pane" role="tabpanel" aria-labelledby="menu1"
                 tabindex="0">
                <div class="row">
                    <div class="card card-primary" style="padding: 30px 30px 10px 30px; border-radius: 10px;">
                        <div class="card-group">
                            <table class="table table-bordered" id="genel" style="border-color: black;">
                                <tbody>
                                <!-- Ad ve soyad bilgisi -->
                                <tr>
                                    <td>Ad ve Soyad:</td>
                                    <td><?php /*echo $ad . " " . $soyad; */ ?></td>
                                </tr>
                                <!-- Kullanıcı adı bilgisi -->
                                <tr>
                                    <td>Kullanıcı Adı:</td>
                                    <td><?php /*echo $kulAdi */ ?></td>
                                </tr>
                                <!-- Genel ortalama bilgisi -->
                                <tr>
                                    <td>Genel Ortalama:</td>
                                    <td id="genelOrt"><?php /*echo sprintf("%.1f", $ortGenel); */ ?></td>
                                </tr>
                                <!-- Pro kuru ortalamsı bilgisi -->
                                <tr>
                                    <td>Pro Kuru Ortalaması:</td>
                                    <td id="genelProNot"><?php /*echo sprintf("%.1f", $ortPro); */ ?></td>
                                </tr>
                                <!-- A kuru ortalaması bilgisi -->
                                <tr>
                                    <td>A Kuru Ortalaması:</td>
                                    <td id="genelNot"><?php /*echo sprintf("%.1f", $ortA); */ ?></td>
                                </tr>
                                <!-- Durum bilgisi -->
                                <tr>
                                    <td>Durum:</td>
                                    <td id="durum"><?php /*echo $durum */ ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php for ($j = 1;
                       $j < count($options[$_GET["type"]]);
                       $j++)
            {
                ?>
            <div class="tab-pane fade" id="menu{{($j + 1)}}-tab-pane" role="tabpanel" aria-labelledby="menu{{($j + 1)}}" tabindex="0">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="kur-label">
                                <img class="kur-label-arkaplan" src="{{asset('assets/img/paralelSol.svg')}}"/>
                                <div class="kur-label-ortala">{{$options[$_GET["type"]][$j]}} kuru</br>ortalaması</div>
                            </div>
                            <div class="kur-not">
                                <img class="kur-not-arkaplan" src="{{asset('assets/img/paralelOrta.svg')}}"/>
                                <div class="kur-not-ortala" id="sonucA">
                                        <?php echo sprintf("%.1f", 85.346); ?>
                                </div>
                            </div>
                            <button type="submit" name="hesapla-1-2" id="hesaplaA" class="btn hesapla-butonu-arkaplan">
                                Hesapla
                            </button>
                        </div>
                    </div>
                        <?php
                        for ($k=0; $k < 5; $k++)
                        {

                        ?>
                    <div class="label-a mt-3 mb-1">
                            <?php echo $levelItems[$k]; ?>
                    </div>
                    <div class="row mb-4">
                        <div class="card card-primary" style="border-radius: 10px;">
                            <div class="card-body">
                                <div class="row text-center">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                            <?php
                                            for ($l=0; $l < 5; $l++)
                                            {
                                                echo "<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2' style='margin: 0px; padding: 0px;'>
                                                <input type='text' id='aNot-{$k}-{$l}' name='aNot-{$k}-{$l}' class='form-control yuzde-input-not' onkeyup='maxMinDegerPro()' value='" . 0.00/*$aNotAl[$j][$i]*/ . "'></div>";
                                            }
                                            ?>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                </div>
                                <div class="row text-center">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"
                                             style="margin: 0px; padding: 0px;"></div>
                                            <?php
                                            for ($l=5; $l < 10; $l++)
                                            {
                                                echo "<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2' style='margin: 0px; padding: 0px;'>
                                                <input type='text' id='aNot-{$k}-{$l}' name='aNot-{$k}-{$l}' class='form-control yuzde-input-not' onkeyup='maxMinDegerPro()' value='" . 0.00/*$aNotAl[$j][$i]*/ . "'></div>";
                                            }
                                            ?>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php
                        }
                        ?>
                </form>
            </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/dropdownMenu.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
