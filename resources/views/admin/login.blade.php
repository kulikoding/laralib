<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap -->
    <link href="{{asset ('assets/home_admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset ('assets/home_admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset ('assets/home_admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset ('assets/home_admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset ('assets/home_admin/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">

      <div class="login_wrapper">
        <div class="animate form login_form">

          <section class="login_content">

            <form method="POST" action="{{ route('admin.login') }}">
              @csrf
              <h1>Admin Login</h1>

              <div>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>

              <div>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                  <span class="invalid-feedback">
                     <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

              <div>
                <button type="submit" class="btn btn-default btn-sm"> {{ __('Login') }} </button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="separator"></div>

            </form>
          </section>
        </div>

          
      </div>
  </body>
</html>
