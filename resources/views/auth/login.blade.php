@extends('layouts.app')
@section('title')
    Login
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
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label"
             aria-hidden="true">
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
        <div class="row mt-5">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center">
                <table id="loginForm" style="display: table" class="table">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <tbody>
                        <tr>
                            <td style="border: none; ">
                                <h5 class="text-start">E-mail:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="email" type="email" size="12"
                                       class="form-control input-lg" name="email"
                                       value="" required autocomplete="email" autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none; ">
                                <h5 class="text-start">Password:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="password" type="password" size="12"
                                       class="form-control input-lg"
                                       name="password" required autocomplete="current-password">
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none;">
                                <h5 class="text-start">Register:</h5>
                            </td>
                            <td style="border: none; ">
                                <label class="switch">
                                    <input type="checkbox" id="loginCheck" onclick="myFunction1()">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr id="processBtn" style="height: 100px;">
                            <td colspan="2" style="border: none;">
                                <button class="btn btn-lg text-center" type="submit" name="giris"
                                        style="background-color: #1B75BB; color: white">Login
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </form>
                </table>
                <table id="registerForm" style="display: none" class="table">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <tbody>
                        <tr id="kayitOl1">
                            <td style="border: none; ">
                                <h5 class="text-start">Name:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="name" size="12" type="text"
                                       class="form-control input-lg" name="name"
                                       value="" required autocomplete="name" autofocus>
                            </td>
                        </tr>
                        <tr id="kayitOl2">
                            <td style="border: none; ">
                                <h5 class="text-start">Surname:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="surname" size="12" type="text"
                                       class="form-control input-lg"
                                       name="surname" value="" required autocomplete="surname"
                                       autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none; ">
                                <h5 class="text-start">E-mail:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="email" type="email" size="12"
                                       class="form-control input-lg" name="email"
                                       value="" required autocomplete="email">
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none; ">
                                <h5 class="text-start">Password:</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="password" type="password" size="12"
                                       class="form-control input-lg"
                                       name="password" required autocomplete="new-password">
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none; ">
                                <h5 class="text-start">Password (Again):</h5>
                            </td>
                            <td style="border: none; ">
                                <input id="password-confirm" type="password" size="12" class="form-control input-lg"
                                       name="password_confirmation" required autocomplete="new-password">
                            </td>
                        </tr>
                        <tr>
                            <td style="border: none;">
                                <h5 class="text-start">Register:</h5>
                            </td>
                            <td style="border: none; ">
                                <label class="switch">
                                    <input type="checkbox" id="registerCheck" onclick="myFunction1()">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr id="processBtn" style="height: 100px;">
                            <td colspan="2" style="border: none;">
                                <button class="btn btn-lg text-center" type="submit" name="giris"
                                        style="background-color: #1B75BB; color: white">Register
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </form>
                </table>
            </div>
            <div class="col-lg-3">

            </div>
        </div>
        <div class="modal modal-danger fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hata</h4>
                    </div>
                    <div class="modal-body">
                        <p><span>Lütfen <b>Kullanıcı Adı</b> veya <b>Şifre</b> bilgilerinizi kontrol ediniz.</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tamam</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>

    <script src="{{asset('assets/js/kullanici-adi-kontrolu.js')}}"></script>
    <script>
        function myFunction1() {
            var loginCheck = document.getElementById("loginCheck");
            var registerCheck = document.getElementById("registerCheck");

            var loginForm = document.getElementById("loginForm");
            var registerForm = document.getElementById("registerForm");

            if (loginCheck.checked == true) {
                registerCheck.checked = true;
                loginCheck.checked = false;

                loginForm.style.display = "none";
                registerForm.style.display = "table";
            }

            if (registerCheck.checked == false) {
                loginForm.style.display = "table";
                registerForm.style.display = "none";
            }
        }
    </script>

@endsection
