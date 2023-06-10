@extends('frontend.layouts.app')

@section('content')
  <section class="login">
    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/other pages banner.png') }}" alt="" class="banner-img img-fluid w-100 height-350px">
      </div>
    </section>

    <section class="login-form" style="background-image: url('{{ asset('assets/frontend/img/img 1.jpg') }}')">
      <div class="container" style="width: 600px; float: right; margin-right: 100px">
        <h1 class="mb-4">Login</h1>
        <form action="{{ url('login') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label fs-5">Username</label>
            <input type="text" class="form-control form-control-lg rounded-0" id="username" name="username" placeholder="Enter your username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label fs-5">Password</label>
            <input type="password" class="form-control form-control-lg rounded-0" id="password" name="password" required>
          </div>
          <div class="mb-3 form-check fs-5">
            <input type="checkbox" class="form-check-input rounded-0" id="rememberMe" name="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember Me</label>
          </div>
          <div class="text-center mb-5">
            <button type="submit" class="btn btn-1">Sign in</button>
          </div>
          <p class="text-center fs-5 font-rubik">Don't have an account? <a href="{{ url('register') }}" class="font-rubik">Sign up</a></p>
        </form>
      </div>
    </section>
  </section>
@endsection

@section('style')
  <style>
    .login .login-form {
      color: #fff;
      height: 100vh;
      background-size: cover;
      font-size: 14px;
      padding: 80px 0 60px 0;
      position: relative;
    }
  </style>
@endsection

@section('script')
@endsection
