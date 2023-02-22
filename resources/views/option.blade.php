<?php

$optionVal = explode("/", parse_url(url()->current())["path"])[2];

?>


@extends('layouts.app')
@section('title')
    Option - {{$optionVal}}
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
                        aria-selected="true">Info
                </button>
                @foreach($levels as $level)
                    <button class="nav-link grade-tab-item" id="menu{{$level->id + 1}}"
                            data-bs-toggle="tab"
                            data-bs-target="#menu{{$level->id + 1}}-tab-pane"
                            type="button" role="tab" aria-controls="menu{{$level->id + 1}}"
                            aria-selected="true">{{$level->name}}
                    </button>
                @endforeach
            </div>
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
                $("#exampleModal1").modal('show');
            }
        </script>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModal1Label">Warning</h1>
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
            <div class="tab-content mt-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="menu1-tab-pane" role="tabpanel" aria-labelledby="menu1"
                     tabindex="0">
                    <div class="row">
                        <div class="col-lg-12" style="padding: 10px;">
                            <div class="card card-primary" style="padding: 30px 30px 10px 30px; border-radius: 10px;">
                                <div class="card-group">
                                    <table class="table table-bordered" style="border-color: black;">
                                        <tbody>
                                        <tr>
                                            <td>Name and Surname:</td>
                                            <td>{{Auth::user()->name ." ". Auth::user()->surname}}</td>
                                        </tr>
                                        <tr>
                                            <td>E-mail:</td>
                                            <td>{{Auth::user()->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>General Average:</td>
                                            <td>{{sprintf("%.1f", array_sum($totalGrades) / count($totalGrades))}}</td>
                                        </tr>
                                        @foreach($levels as $key=>$level)
                                            <tr>
                                                <td>{{$level->name}} Level Average:</td>
                                                <td>{{sprintf("%.1f", $totalGrades[$key])}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td>Situation:</td>
                                            <td id="durum"><?php (array_sum($totalGrades) / count($totalGrades) >= 60)
                                            ? print('<span style="color: green">Successfull</span>') : print('<span style="color: red">Unsuccessfull</span>') ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($levels as $key=>$level)
                    <div class="tab-pane fade" id="menu{{$level->id + 1}}-tab-pane" role="tabpanel"
                         aria-labelledby="menu{{$level->id + 1}}" tabindex="0">
                        <form method="POST" action="{{ url('option/update/'.$optionVal.'/'.$level->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="level-label">
                                        <img class="level-label-background" src="{{asset('assets/img/parallelLeft.svg')}}"/>
                                        <div class="level-label-center">{{$level->name}} level<br>
                                            average
                                        </div>
                                    </div>
                                    <div class="level-grade">
                                        <img class="level-grade-background" src="{{asset('assets/img/parallelCenter.svg')}}"/>
                                        <div class="level-grade-center">
                                                {{sprintf("%.1f", $totalGrades[$key])}}
                                        </div>
                                    </div>
                                    <button type="submit" class="btn grade-calculation-btn-background">
                                        Calculate
                                    </button>
                                </div>
                            </div>
                            @foreach($level->levelItems as $levelItem)
                                <div class="level-label mt-3 mb-1">
                                    {{$levelItem->name}}
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12" style="padding: 10px;">
                                        <div class="card card-primary" style="border-radius: 10px;">
                                            <div class="card-body">
                                                <div class="row text-center">
                                                    @foreach($levelItem->grades
                                                        ->where('user_id', Auth::user()->id)
                                                        ->where('level_id', $level->id)
                                                        ->where('level_item_id', $levelItem->id) as $grade)
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                                            <input type='text' name='grade[]'
                                                                   class='form-control average-grade-input' value='{{$grade->grade}}'>
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
