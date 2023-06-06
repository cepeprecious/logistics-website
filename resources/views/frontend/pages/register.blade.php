@extends('frontend.layouts.app')

@section('content')
  <section class="register">
    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/other pages banner.png') }}" alt="" class="banner-img img-fluid w-100 height-350px">
      </div>
    </section>

    <section class="register-form" style="background-image: url('{{ asset('assets/frontend/img/img 1.jpg') }}')">
      <div class="container" style="width: 600px; float: right; margin-right: 100px">
        <h1 class="mb-4">Register</h1>
        <form action="" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label fs-5">Name</label>
            <input type="text" class="form-control form-control-lg rounded-0" id="name" name="name" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label fs-5">Email Address</label>
            <input type="email" class="form-control form-control-lg rounded-0" id="email" name="email" placeholder="Enter your email address" required>
          </div>          
          <div class="mb-3">
            <label for="username" class="form-label fs-5">Username</label>
            <input type="text" class="form-control form-control-lg rounded-0" id="username" name="username" placeholder="Enter your username" required>
          </div>
          <div class="mb-5">
            <label for="password" class="form-label fs-5">Password</label>
            <input type="password" class="form-control form-control-lg rounded-0" id="password" name="password" required>
          </div>
          <div class="text-center mb-5">
            <button type="submit" class="btn btn-1">Sign in</button>
          </div>
        </form>                                
      </div>
    </section>
  </section>
@endsection

@section('style')
<style>
  .register .register-form {
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
