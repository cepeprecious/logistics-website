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

    <!-- ======= About Section ======= -->
    <section id="about" class="section-2 about my-5">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6">
            <img src="{{ asset('assets/frontend/img/young-man-working-warehouse-with-boxes.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 pt-5 pt-lg-0 ps-2 ps-lg-5">
            <h6 class="color-1">ABOUT US</h6>
            <h1 class="color-2 fw-bold">The Experts in Delivery</h1>
            <p class="color-2 fs-5 text-justify">
            Our team of logistics experts handles your valuable products with great accuracy and attention to detail, assuring their safe 
            transit from the point of origin to the point of destination.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul class="fs-6">
                  <li>Safety and Security</li>
                  <li>Cost-Effective Solutions</li>
                  <li>Courier Services</li>
                  <li>Professional Handling and Packaging</li>
                  <li>Reliable and Timely Delivery</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="fs-6">
                  <li>Hassle-Free Packaging Solutions</li>
                  <li>Real-Time Delivery Tracking</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <section class="section-2 py-5" style="background-image: url('{{ asset('assets/frontend/img/globus_image.png') }}'); background-repeat: no-repeat; background-position: right; background-size: contain;">
      <div class="background-image">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="text-white py-5 ps-4" style="background-color: var(--color-2); height: 450px">
                <h1 class="mb-4">Why Choose Us?</h1>
                <p class="fs-5 text-justify m-0" style="padding-right: 110px">Choose our logistics services for reliable, efficient, and customer-focused solutions. With extensive industry expertise, we provide customized logistics solutions tailored to your specific needs.
                 Our streamlined processes, advanced tracking systems, and dedicated team ensure reliable and timely delivery while prioritizing safety and security.
                  We offer cost-effective solutions, transparent communication, and exceptional customer support throughout the logistics process. 
                  Trust us to handle your transportation and distribution needs with expertise, efficiency, and a commitment to exceeding your expectations.
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
            <h1 class="color-1">936</h1>
            <span class="fs-5 fw-semi-bold text-white font-rubik">Users</span>
          </div>
          <div class="col-sm-6 col-lg-3 text-center">
            <h1 class="color-1">7,128+</h1>
            <span class="fs-5 fw-semi-bold text-white font-rubik">Lorem Ipsum</span>
          </div>
          <div class="col-sm-6 col-lg-3 text-center">
            <h1 class="color-1">99+</h1>
            <span class="fs-5 fw-semi-bold text-white font-rubik">Lorem Ipsum</span>
          </div>
          <div class="col-sm-6 col-lg-3 text-center">
            <h1 class="color-1">777+</h1>
            <span class="fs-5 fw-semi-bold text-white font-rubik">Lorem Ipsum</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section-4" style="margin: 100px 0px">
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

    {{-- <section class="section-5">
      <div class="container">
        <h1 class="text-center color-2 mb-5 fw-bold">Our Partners</h1>
        <div>

        </div>
      </div>
    </section> --}}

    <div class="our-partners container-fluid my-5">
      <div class="container pb-5 mb-5">
        <h1 class="text-center color-2 mb-5 fw-bold">Our Partners</h1>
        <div class="bg-white">
          <div class="d-flex justify-content-center slider">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
            <img src="{{ asset('assets/frontend/img/coffee-logo.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/about.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script>
  $(document).ready(function() {
    var slider = tns({
      container: '.slider',
      items: 1,
      slideBy: 1,
      autoplay: true,
      controlsPosition: 'bottom',
      nav: false,
      controlsText: [
        '<i class="fa-solid fa-chevron-left fa-2xl"></i>',
        '<i class="fa-solid fa-chevron-right fa-2xl"></i>'
      ],
      responsive: {
        565: {
          items: 1
        },
        767: {
          items: 2
        },
        991: {
          items: 4
        }
      },
    });
  });
</script>
@endsection
