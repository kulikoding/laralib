<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('assets/login_page2/	images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/login_page2/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url('assets/login_page2/images/bg-01.jpg');">
					<span class="login100-form-title-1">
						Register
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="First Name is Required">
						<span class="label-input100">First Name</span>
							<input id="name" name="name" type="text" class="input100" value="{{ old('name') }}" placeholder="First Name" required autofocus>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Last Name is Required">
						<span class="label-input100">Last Name</span>
							<input id="lastname" name="lastname" type="text" class="input100" value="{{ old('lastname') }}" placeholder="Last Name" required autofocus>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "E-Mail is required">
						<span class="label-input100">E-Mail</span>
							<input id="email" name="email" type="text" class="input100" value="{{ old('email') }}" placeholder="E-Mail" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
							<input id="password" name="password" type="password" class="input100" placeholder="Password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" id="password-confirm" name="password_confirmation" placeholder="Password Confirmation" required>
						<span class="focus-input100"></span>
					</div>

					<div class="" style="color:#cccccc;">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>

						<div>
							<a href="{{route('login')}}" class="txt1">
								Have an Account ? Login
							</a>
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
