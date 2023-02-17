<?php

$optionVal = explode("/", parse_url(url()->current())["path"])[2];

?>

    <!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ayarlar</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/img/notes.ico')}}">

</head>
<body>
<nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
    <a class="float-start" href="{{url('/option/'.$optionVal)}}">
        <img class="about-grade-calculation-btn" style="margin-left: 10px;" src="{{asset('assets/img/notHesaplamayaDonBtn.svg')}}" alt="">
    </a>
    <div class="navbar-brand mx-auto" href="#">
        <img class="img-fluid" width="170" height="50" src="{{asset('assets/img/notHesaplamaBaslik.svg')}}" alt="">
    </div>
    <a class="float-end">
        <div class="dropdown">
            <button class="btn three-dot dropbtn" onclick="myFunction()"></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="{{url('/settings/'.$optionVal)}}">
                    <img src="{{asset('assets/img/ayaraDonBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                    Ayarlar
                </a>
                <a href="{{url('/about/'.$optionVal)}}">
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
        Ayarlar
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <form action="" method="POST">
                <!-- Varsayılan butonu -->
                <button type="submit" name="varsayilan" id="varsayilan" class="btn varsayilan-butonu-arkaplan"
                        style="margin-top: 45px;">Varsayılan
                </button>
                <div class="kur-not">
                    <img class="kur-not-arkaplan" src="{{asset('assets/img/paralelOrta.svg')}}"
                         style="margin-top: 45px;"/>
                </div>
                <!-- Kaydet butonu -->
                <button type="submit" name="kaydet" id="kaydet" class="btn kaydet-butonu-arkaplan"
                        style="margin-top: 45px;">Kaydet
                </button>

                <!-- Geri bildirim ve ayar değer girme bölümü -->
                <div class="col-12">
                    <!-- Geri bildirim bölümü -->
                    <?php
                    /*
                                if($mesaj == "yanlisDeger")
                                {
                                    echo "<div class='alert alert-danger alert-dismissable' id='hataMesaji' style='margin-top: 20px; margin-bottom: -20px;'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
                                <strong>Hata!</strong> Lütfen girdiğiniz yüzde değerlerini kontrol ediniz. Değerler toplamı 100 olmalı.
                              </div>";
                                }

                                else if($mesaj == "kayitBasarili")
                                {
                                    echo "<div class='alert alert-success alert-dismissable' id='hataMesaji' style='margin-top: 20px; margin-bottom: -20px;'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
                                <strong>Başarılı!</strong> Ayarlarınız kaydedildi.
                              </div>";
                                }

                                else if($mesaj == "varsayilanDeger")
                                {
                                    echo "<div class='alert alert-success alert-dismissable' id='hataMesaji' style='margin-top: 20px; margin-bottom: -20px;'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
                                <strong>Başarılı!</strong> Ayarlarınız varsayılan değerlere döndürüldü.
                              </div>";
                                }

                                else
                                {

                                }
                    */
                    ?>
                        <!-- Ayar değer girme bölümü -->
                    <div class="quiz-yuzde">
                        <label class="ayar-label">Quiz Yüzdesi</label>
                        <input type="text" class="form-control yuzde-input-ayar"
                               value="" id="qYuzde" onkeyup="maxMinDeger()" name="q" required>
                    </div>
                    <div class="writing-yuzde">
                        <label class="ayar-label">Writing Yüzdesi</label>
                        <input type="text" class="form-control yuzde-input-ayar"
                               value="" id="wYuzde" onkeyup="maxMinDeger()" name="w" required
                               onkeypress="return maxKarakter()" onkeyup="maxMinDeger()">
                    </div>
                    <div class="midterm-speaking-yuzde">
                        <label class="ayar-label">Midterm / Speaking Yüzdesi</label>
                        <input type="text" class="form-control yuzde-input-ayar"
                               value="" id="m_s_Yuzde" onkeyup="maxMinDeger()" name="m_s"
                               required>
                    </div>
                    <div class="homework-yuzde">
                        <label class="ayar-label">Homework Yüzdesi</label>
                        <input type="text" class="form-control yuzde-input-ayar"
                               value="" id="hYuzde" onkeyup="maxMinDeger()" name="h" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/dropdownMenu.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/ayar-max-min-deger.js')}}"></script>
<script type="text/javascript">/*
        $(document).ready(function(){

            var qYuzde = parseInt("<?php /*echo $veri_q; */ ?>");
            var wYuzde = parseInt("<?php /*echo $veri_w; */ ?>");
            var m_sYuzde = parseInt("<?php /*echo $veri_m_s;*/ ?>");
            var hYuzde = parseInt("<?php /*echo $veri_h; */ ?>");

        });*/
</script>
</body>
</html>
