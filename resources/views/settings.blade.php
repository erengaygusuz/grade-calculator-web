<?php

$optionVal = explode("/", parse_url(url()->current())["path"])[2];

?>

@extends('layouts.app')
@section('title')
    Settings
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
            Settings
        </div>
    </nav>
@endsection

@section('content')
    @if ($errors->any())
        <script type="text/javascript">
            window.onload = function () {
                OpenBootstrapPopup();
            };
            function OpenBootstrapPopup() {
                $("#exampleModal2").modal('show');
            }
        </script>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModal2Label">Warning</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 col-12 ">
                <div class="text-center mt-5">
                    <form method="POST" action="{{ url('settings/update') }}" style="display: inline">
                        @csrf
                        @method('PUT')
                        @foreach($levelItems as $levelItem)
                            <div class="card border-primary mb-3">
                                <div class="card-body">
                                    <div class="float-start" style="margin-top: 15px;">
                                        <h6>{{$levelItem->name}} Percentage</h6>
                                    </div>
                                    <div class="float-end">
                                        <input type="text" class="form-control percentage-settings-input"
                                               value="{{$levelItem->currentPercentage}}"
                                               name="{{$levelItem->name}}_currentPercentage">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" class="btn settingsUpdateBtn"
                                style="margin-top: 45px;">Update
                        </button>
                        <div class="level-grade">
                            <img class="level-grade-background" src="{{asset('assets/img/parallelCenter.svg')}}"
                                 style="margin-top: 45px;"/>
                        </div>
                    </form>
                    <form method="POST" action="{{ url('settings/default') }}" style="display: inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn settingsDefaultBtn"
                                style="margin-top: 45px;">Default
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/dropdownMenu.js')}}"></script>

@endsection
