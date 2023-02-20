<?php

$optionVal = explode("/", parse_url(url()->current())["path"])[2];

?>

@extends('layouts.app')
@section('title')
    Ayarlar
@endsection

@section('navbar.left.item')
    <a class="float-start" href="{{url('/option/'.$optionVal)}}">
        <img class="about-grade-calculation-btn" style="margin-left: 10px;"
             src="{{asset('assets/img/notHesaplamayaDonBtn.svg')}}" alt="">
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
            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 col-12 ">
                <div class="text-center mt-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ url('settings/update') }}" style="display: inline">
                        @csrf
                        @method('PUT')
                        @foreach($levelItems as $levelItem)
                            <div class="card border-primary mb-3">
                                <div class="card-body">
                                    <div class="float-start" style="margin-top: 15px;">
                                        <h6>{{$levelItem->name}} Yüzdesi</h6>
                                    </div>
                                    <div class="float-end">
                                        <input type="text" class="form-control yuzde-input-ayar"
                                               value="{{$levelItem->currentPercentage}}"
                                               name="{{$levelItem->name}}_currentPercentage">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" name="kaydet" id="kaydet" class="btn settingsUpdateBtn"
                                style="margin-top: 45px;">Kaydet
                        </button>
                        <div class="kur-not">
                            <img class="kur-not-arkaplan" src="{{asset('assets/img/paralelOrta.svg')}}"
                                 style="margin-top: 45px;"/>
                        </div>
                    </form>
                    <form method="POST" action="{{ url('settings/default') }}" style="display: inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" name="varsayilan" id="varsayilan" class="btn settingsDefaultBtn"
                                style="margin-top: 45px;">Varsayılan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/dropdownMenu.js')}}"></script>

@endsection
