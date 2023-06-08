<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">

  <style>
    body {
      background-image: url("{{ url('assets/frontend/img/img 1.jpg') }}");
      background-size: cover;
      background-position: center;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">

    <div class="login-logo bg-white rounded">
      <a href="{{ url('admin/login') }}">ADMIN PANEL</a>
    </div>

    <div class="card">
      <div class="card-body login-card-body rounded">

        <p class="login-box-msg">Sign in to start your session</p>

        @if (Session::has('error'))
          <span class="text-danger d-block mb-3">
            {{ Session::get('error') }}
          </span>
        @endif

        <form action="{{ url('admin/login') }}" method="POST">
          @csrf
          <div class="input-group">
            <input type="username" class="form-control" placeholder="Username" required name="username" value="Admin">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <span class="text-danger d-block mb-3">
            @error('username')
              {{ $message }}
            @enderror
          </span>
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Password" required name="password" value="*">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <span class="text-danger d-block mb-3">
            @error('password')
              {{ $message }}
            @enderror
          </span>
          <div class="row">
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
        </form>

      </div>
    </div>

  </div>
</body>

<!-- jQuery -->
<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>

</html>
