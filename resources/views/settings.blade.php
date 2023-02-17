<?php

$optionVal = explode("/", parse_url(url()->current())["path"])[2];

?>

@extends('layouts.app')
@section('title')
    Ayarlar
@endsection

@section('navbar.left.item')
    <a class="float-start" href="{{url('/option/'.$optionVal)}}">
        <img class="about-grade-calculation-btn" style="margin-left: 10px;" src="{{asset('assets/img/notHesaplamayaDonBtn.svg')}}" alt="">
    </a>
@endsection

@section('navbar.right.item')

    @include('layouts.inc.navbar-right-context-menu')

@endsection

@section('second-navbar')
    <nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
        <div class="col-12 about-title text-center">
            Ayarlar
        </div>
    </nav>
@endsection

@section('content')

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
<script src="{{asset('assets/js/ayar-max-min-deger.js')}}"></script>
<script type="text/javascript">/*
        $(document).ready(function(){

            var qYuzde = parseInt("<?php /*echo $veri_q; */ ?>");
            var wYuzde = parseInt("<?php /*echo $veri_w; */ ?>");
            var m_sYuzde = parseInt("<?php /*echo $veri_m_s;*/ ?>");
            var hYuzde = parseInt("<?php /*echo $veri_h; */ ?>");

        });*/
</script>

@endsection
