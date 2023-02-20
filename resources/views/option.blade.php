<?php

$optionVal = explode("/", parse_url(url()->current())["path"])[2];

?>


@extends('layouts.app')
@section('title')
    Seçenek - {{$optionVal}}
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
                    <button class="nav-link grade-tab-item" id="menu{{$optionLevel->id + 1}}"
                            data-bs-toggle="tab"
                            data-bs-target="#menu{{$optionLevel->id + 1}}-tab-pane"
                            type="button" role="tab" aria-controls="menu{{$optionLevel->id + 1}}"
                            aria-selected="true">{{$optionLevel->name}}
                    </button>
                @endforeach
            </div>
        </div>
    </nav>
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="tab-content mt-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="menu1-tab-pane" role="tabpanel" aria-labelledby="menu1"
                     tabindex="0">
                    <div class="row">
                        <div class="col-lg-12" style="padding: 10px;">
                            <div class="card card-primary" style="padding: 30px 30px 10px 30px; border-radius: 10px;">
                                <div class="card-group">
                                    <table class="table table-bordered" id="genel" style="border-color: black;">
                                        <tbody>
                                        <tr>
                                            <td>Ad ve Soyad:</td>
                                            <td>{{Auth::user()->name ." ". Auth::user()->surname}}</td>
                                        </tr>
                                        <tr>
                                            <td>Kullanıcı Adı:</td>
                                            <td>{{Auth::user()->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Genel Ortalama:</td>
                                            <td id="genelOrt"><?php /*echo sprintf("%.1f", $ortGenel); */ ?></td>
                                        </tr>
                                        @foreach($optionLevels as $optionLevel)
                                            <tr>
                                                <td>{{$optionLevel->name}} Kuru Ortalaması:</td>
                                                <td id="genelProNot"><?php /*echo sprintf("%.1f", $ortPro); */ ?></td>
                                            </tr>
                                        @endforeach
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
                </div>
                @foreach($optionLevels as $optionLevel)
                    <div class="tab-pane fade" id="menu{{$optionLevel->id + 1}}-tab-pane" role="tabpanel"
                         aria-labelledby="menu{{$optionLevel->id + 1}}" tabindex="0">
                        <form method="POST" action="{{ url('option/update/'.$optionVal.'/'.$optionLevel->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="kur-label">
                                        <img class="kur-label-arkaplan" src="{{asset('assets/img/paralelSol.svg')}}"/>
                                        <div class="kur-label-ortala">{{$optionLevel->name}} kuru</br>
                                            ortalaması
                                        </div>
                                    </div>
                                    <div class="kur-not">
                                        <img class="kur-not-arkaplan" src="{{asset('assets/img/paralelOrta.svg')}}"/>
                                        <div class="kur-not-ortala" id="sonucA">
                                                <?php echo sprintf("%.1f", 85.346); ?>
                                        </div>
                                    </div>
                                    <button type="submit" name="hesapla" id="hesaplaA" class="btn hesapla-butonu-arkaplan">
                                        Hesapla
                                    </button>
                                </div>
                            </div>
                            @foreach($optionLevel->levelItems as $levelItem)
                                <div class="label-a mt-3 mb-1">
                                    {{$levelItem->name}}
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12" style="padding: 10px;">
                                        <div class="card card-primary" style="border-radius: 10px;">
                                            <div class="card-body">
                                                <div class="row text-center">
                                                    @foreach($levelItem->grades
                                                        ->where('user_id', Auth::user()->id)
                                                        ->where('level_id', $optionLevel->id)
                                                        ->where('level_item_id', $levelItem->id) as $grade)
                                                        <div class='col-lg-2 col-md-2 col-sm-2 col-2'
                                                             style='margin: 0px; padding: 0px;'>
                                                            <input type='text' name='grade[]'
                                                                   class='form-control yuzde-input-not' value='{{$grade->grade}}'>
                                                        </div>
                                                    @endforeach
                                                </div>
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
