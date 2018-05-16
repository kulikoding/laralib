<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/login_page2/   images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/css/main.css') }}">
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="padding: 35px 5px 31px 10px;">
                    <span class="login100-form-title-1">
                        Reset Password
                    </span>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="login100-form validate-form" method="POST" action="{{ route('password.request') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group row">
                        <div class="wrap-input100 validate-input m-b-26" data-validate = "Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Email</span>
                                <input class="input100" id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
                        </div>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <div class="wrap-input100 validate-input m-b-26" data-validate = "Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Password</span>
                                <input class="input100" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        </div>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <div class="wrap-input100 validate-input m-b-26" data-validate = "Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Confirm Password</span>
                                <input class="input100" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--===============================================================================================-->
    <script src="{{ asset('/assets/login_page2/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('/assets/login_page2/vendor/animsition/js/animsition.min.js') }}"></script>
<!--=====================/assets/==========================================================================-->
    <script src="{{ asset('/assets/login_page2/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('/assets/login_page2/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('/assets/login_page2/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('/assets/login_page2/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('/assets/login_page2/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('/assets/login_page2/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('/assets/login_page2/js/main.js') }}"></script>

</body>
</html>
