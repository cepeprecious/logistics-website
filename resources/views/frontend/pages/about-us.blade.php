@extends('frontend.layouts.app')

@section('content')
  <section class="about-us">
    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/other pages banner.png') }}" alt="" class="banner-img img-fluid w-100">
        <div class="banner-text w-100 text-white">
          <div class="container">
            <h1 class="fw-medium ps-lg-5">ABOUT US</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="section-1">

    </section>

    <section class="section-2 py-5" style="background-image: url('{{ asset('assets/frontend/img/globus_image.png') }}'); background-repeat: no-repeat; background-position: right; background-size: contain;">
      <div class="background-image">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="text-white py-5 ps-4" style="background-color: var(--color-2); height: 450px">
                <h1 class="mb-4">Why Choose Us?</h1>
                <p class="fs-3 text-justify m-0" style="padding-right: 100px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem accusamus quo 
                  impedit sequi perferendis eaque ullam perspiciatis aliquid quod. Quidem aliquid incidunt, 
                  amet adipisci facilis nesciunt quam sapiente iste consequuntur!
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div style="margin-left: -100px; margin-top: 180px">
                <img src="{{ asset('assets/frontend/img/img 2.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-3 facts my-5 py-5">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-sm-6 col-lg-3 text-center">
            <h1 class="color-1">000</h1>
            <span class="fs-5 fw-semi-bold text-white font-rubik">Lorem Ipsum</span>
          </div>
          <div class="col-sm-6 col-lg-3 text-center">
            <h1 class="color-1">0,000+</h1>
            <span class="fs-5 fw-semi-bold text-white font-rubik">Lorem Ipsum</span>
          </div>
          <div class="col-sm-6 col-lg-3 text-center">
            <h1 class="color-1">00+</h1>
            <span class="fs-5 fw-semi-bold text-white font-rubik">Lorem Ipsum</span>
          </div>
          <div class="col-sm-6 col-lg-3 text-center">
            <h1 class="color-1">000+</h1>
            <span class="fs-5 fw-semi-bold text-white font-rubik">Lorem Ipsum</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section-4 py-5">
      <div class="container">
        <h1 class="text-center color-2 mb-5 fw-bold">Our Team</h1>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6">
            <div class="team-item">
              <div class="team-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/team 1.jpg') }}" alt="">
                <div class="team-social">
                  <a class="btn" href=""><i class="fa-brands fa-facebook-f"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-google-plus-g"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-twitter"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-behance"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4 text-white" style="background-color: var(--color-2)">
                <h5>Jane Andrews</h5>
                <span>Financial Manager</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-item">
              <div class="team-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/TEAM 2.jpg') }}" alt="">
                <div class="team-social">
                  <a class="btn" href=""><i class="fa-brands fa-facebook-f"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-google-plus-g"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-twitter"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-behance"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4 text-white" style="background-color: var(--color-2)">
                <h5>Austin Spencer</h5>
                <span>Manager</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-item">
              <div class="team-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/TEAM 3.jpg') }}" alt="">
                <div class="team-social">
                  <a class="btn" href=""><i class="fa-brands fa-facebook-f"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-google-plus-g"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-twitter"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-behance"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4 text-white" style="background-color: var(--color-2)">
                <h5>Robert Roberts</h5>
                <span>Transportation Manager</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-item">
              <div class="team-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/TEAM 4.jpg') }}" alt="">
                <div class="team-social">
                  <a class="btn" href=""><i class="fa-brands fa-facebook-f"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-google-plus-g"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-twitter"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-behance"></i></a>
                  <a class="btn" href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4 text-white" style="background-color: var(--color-2)">
                <h5>Matthew Rivera</h5>
                <span>Employee</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Team End -->
  </section>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/about.css') }}">
<style>
  .section-3 {
    background-color: var(--color-2)
  }

  /*** Team ***/
  .team-item .team-img::before,
  .team-item .team-img::after {
    position: absolute;
    content: "";
    width: 0;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(1, 10, 53, 0.377);
    transition: .5s;
  }

  .team-item .team-img::after {
    left: auto;
    right: 0;
  }

  .team-item:hover .team-img::before,
  .team-item:hover .team-img::after {
    width: 50%;
  }

  .team-item .team-img .team-social {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .5s;
    z-index: 3;
    opacity: 0;
  }

  .team-item:hover .team-img .team-social {
    transition-delay: .3s;
    opacity: 1;
  }

  .team-item .team-img .team-social i {
    color: white;
    font-size: 20px
  }

  .team-item .team-img .team-social .fa-facebook-f:hover {
    color: #3b5998;
  }

  .team-item .team-img .team-social .fa-google-plus-g:hover {
    color: #dd4b39;
  }

  .team-item .team-img .team-social .fa-twitter:hover {
    color: #1dcaff;
  }

  .team-item .team-img .team-social .fa-behance:hover {
    color: #1769FF;
  }

  .team-item .team-img .team-social .fa-instagram:hover {
    color: #E1306C;
  }
</style>
@endsection

@section('script')
@endsection
