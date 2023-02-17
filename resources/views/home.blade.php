@extends('layouts.app')
@section('title')
    Ana Sayfa
@endsection

@section('navbar.right.item')
    <a class="float-end" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        <img class="img-fluid me-md-1" width="40" height="40" src="{{asset('assets/img/cikisBtn.svg')}}" alt="">
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
                Hoşgeldiniz <b>{{ Auth::user()->name }} {{ Auth::user()->surname }}</b>
            </h3>
            </br>
            Notlarınızı hesaplamak için hazırlık okulunda aldığınız kurları seçmeniz gerekiyor.
            </br>
            Lütfen size uygun olan kurların bulunduğu görsele tıklayınız.
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/1')}}"><img class="option" src="{{asset('assets/img/secenek1.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/2')}}"><img class="option" src="{{asset('assets/img/secenek2.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/3')}}"><img class="option" src="{{asset('assets/img/secenek3.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/4')}}"><img class="option" src="{{asset('assets/img/secenek4.svg')}}"/></a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-center">
            <a href="{{url('/option/5')}}"><img class="option" src="{{asset('assets/img/secenek5.svg')}}"/></a>
        </div>
        <div class="col-lg-1">

        </div>
    </div>
</div>

@endsection
