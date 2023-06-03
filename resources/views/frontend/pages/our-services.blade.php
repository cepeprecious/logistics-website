@extends('frontend.layouts.app')

@section('content')
  <section class="our-services">
    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/other pages banner.png') }}" alt="" class="banner-img img-fluid w-100">
        <div class="banner-text w-100 text-white">
          <div class="container">
            <h1 class="fw-medium ps-lg-5">OUR SERVICES</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="section-1 mx-auto" style="max-width: 900px;">
      <div class="container">
        <div class="row g-5">
          <div class="col-md-6 justify-content-center">
            <div class="card">
              <img src="{{ asset('assets/frontend/img/Service img 1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">Lorem Ipsum</h2>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>                     
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/frontend/img/Service img 1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">Lorem Ipsum</h2>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/frontend/img/Service img 1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">Lorem Ipsum</h2>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/frontend/img/Service img 1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">Lorem Ipsum</h2>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-5">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>          
        </div>
      </div>
    </section>
  </section>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/services.css') }}">
@endsection

@section('script')
@endsection
