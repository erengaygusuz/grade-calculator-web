<?php

$optionVal = explode("/", parse_url(url()->current())["path"])[2];

?>


@extends('layouts.app')
@section('title')
    Seçenek - {{$optionVal}}
@endsection

@section('navbar.left.item')
    <a class="float-start" href="{{url('/home')}}">
        <img class="about-grade-calculation-btn" style="margin-left: 10px;"
             src="{{asset('assets/img/anaSayfaBtn.svg')}}" alt="">
    </a>
@endsection

@section('navbar.right.item')

    @include('layouts.inc.navbar-right-context-menu')

@endsection

@section('second-navbar')
    <nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
        <div class="col-12">
            <div class="nav nav-pills justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link grade-tab-item active" id="menu1"
                        data-bs-toggle="tab"
                        data-bs-target="#menu1-tab-pane"
                        type="button" role="tab" aria-controls="menu1"
                        aria-selected="true">Genel
                </button>
                @foreach($optionLevels as $optionLevel)
                    <span></span>
                    <button class="nav-link grade-tab-item" id="menu{{$optionLevel->level->id + 1}}"
                            data-bs-toggle="tab"
                            data-bs-target="#menu{{$optionLevel->level->id + 1}}-tab-pane"
                            type="button" role="tab" aria-controls="menu{{$optionLevel->level->id + 1}}"
                            aria-selected="true">{{$optionLevel->level->name}}
                    </button>
                @endforeach
            </div>
        </div>
    </nav>
@endsection

@section('content')

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
            @foreach($optionLevels as $optionLevel)
            <div class="tab-pane fade" id="menu{{$optionLevel->level->id + 1}}-tab-pane" role="tabpanel" aria-labelledby="menu{{$optionLevel->level->id + 1}}" tabindex="0">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="kur-label">
                                <img class="kur-label-arkaplan" src="{{asset('assets/img/paralelSol.svg')}}"/>
                                <div class="kur-label-ortala">{{$optionLevel->level->name}} kuru</br>ortalaması</div>
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
                    @foreach($levelItems as $levelItem)
                    <div class="label-a mt-3 mb-1">
                        {{$levelItem->name}}
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
                                                <input type='text' id='aNot-{{$levelItem->id}}-{$l}' name='aNot-{{$levelItem->id}}-{$l}' class='form-control yuzde-input-not' onkeyup='maxMinDegerPro()' value='" . 0.00/*$aNotAl[$j][$i]*/ . "'></div>";
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
                                                <input type='text' id='aNot-{{$levelItem->id}}-{$l}' name='aNot-{{$levelItem->id}}-{$l}' class='form-control yuzde-input-not' onkeyup='maxMinDegerPro()' value='" . 0.00/*$aNotAl[$j][$i]*/ . "'></div>";
                                            }
                                            ?>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin: 0px; padding: 0px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script src="{{asset('assets/js/dropdownMenu.js')}}"></script>

@endsection
