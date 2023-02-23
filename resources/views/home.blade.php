@extends('layouts.app')
@section('title')
    Main Page
@endsection

@section('navbar.right.item')
    <a class="float-end" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        <img class="img-fluid me-md-1" width="40" height="40" src="{{asset('assets/img/logoutBtn.svg')}}" alt="">
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="home-info-text-1 text-center">
            <h3 class="home-info-text-2">
                Welcome <b>{{ Auth::user()->name }} {{ Auth::user()->surname }}</b>
            </h3>
            <br>
            For calculation, you should choose the levels of prep school which you studied.
            <br>
            Please click the option button which includes your levels.
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/1')}}"><img class="option" src="{{asset('assets/img/option1.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/2')}}"><img class="option" src="{{asset('assets/img/option2.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/3')}}"><img class="option" src="{{asset('assets/img/option3.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/4')}}"><img class="option" src="{{asset('assets/img/option4.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/5')}}"><img class="option" src="{{asset('assets/img/option5.svg')}}"/></a>
        </div>
        <div class="col-lg-1">

        </div>
    </div>
</div>

@endsection
