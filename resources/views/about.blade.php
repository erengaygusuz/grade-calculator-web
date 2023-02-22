<?php

$optionVal = explode("/", parse_url(url()->current())["path"])[2];

?>

@extends('layouts.app')
@section('title')
    About
@endsection

@section('navbar.left.item')
    <a class="float-start" href="{{url('/option/'.$optionVal)}}">
        <img class="about-grade-calculation-btn" style="margin-left: 10px;"
             src="{{asset('assets/img/goBackCalculationBtn.svg')}}" alt="">
    </a>
@endsection

@section('navbar.right.item')

    @include('layouts.inc.navbar-right-context-menu')

@endsection

@section('second-navbar')
    <nav class="navbar" style="background: #1B75BB; border: 1px solid #2F5190;">
        <div class="col-12 about-title text-center">
            About
        </div>
    </nav>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="padding: 10px;">
                <div class="card card-primary" style="margin: 10px; ">
                    <div class="card-body text-center">
                        <h6 class="about-text-1">
                            This website was prepared for Prep School Students of
                            <br>
                            Atilim University to make their grade calculation process easy.
                        </h6>
                        <h6 class="about-text-2">
                            Prepared by
                        </h6>
                        <div class="col-lg-12">
                            <img class="about-developer-eren" src="{{asset('assets/img/aboutEren.svg')}}"/>
                        </div>
                        <div class="col-lg-12 about-text-3">
                            © 2023
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/dropdownMenu.js')}}"></script>
@endsection
