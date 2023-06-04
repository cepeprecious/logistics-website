@extends('frontend.layouts.app')

@section('content')
  <section class="contact-us">
    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/other pages banner.png') }}" alt="" class="banner-img img-fluid w-100">
        <div class="banner-text w-100 text-white">
          <div class="container">
            <h1 class="fw-medium ps-lg-5">CONTACT US</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="section-1 mt-5">
      <div class="container">
        <div class="d-flex flex-column flex-lg-row justify-content-around align-items-center border py-3 text-white" style="background-color: var(--color-2)">
          <p class="m-0 font-rubik"><i class="fa-solid fa-house me-2 color-1"></i> 244 Ventura Blvd., Los Angeles, USA</p>
          <p class="m-0 font-rubik"><i class="fa-solid fa-phone me-2 color-1"></i></i> (+24) 1344 205 6999</p>
          <p class="m-0 font-rubik"><i class="fa-solid fa-envelope me-2 color-1"></i></i></i> sampleemail@gmail.com</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2695291676205!2d125.6004865741862!3d7.094725216263492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d239e0b8d8d%3A0x6803118d251c27d5!2sR%20Web%20Solutions%20Corp.%20Davao!5e0!3m2!1sen!2sph!4v1685868647102!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>

    <section class="section-2">

    </section>
  </section>
@endsection

@section('style')
@endsection

@section('script')
@endsection
