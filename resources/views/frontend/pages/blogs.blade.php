@extends('frontend.layouts.app')

@section('content')
  <section class="blogs">
    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/other pages banner.png') }}" alt="" class="banner-img img-fluid w-100">
        <div class="banner-text w-100 text-white">
          <div class="container">
            <h1 class="fw-medium ps-lg-5">BLOGS</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="blogs-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="d-flex flex-column flex-md-row mb-5">
              <img src="{{ asset('assets/frontend/img/blog img 1.png') }}" alt="">
              <div class="ms-md-5 pt-4">
                <h1 class="mb-1 color-2">LOREM IPSUM DOLOR SIT</h1>
                <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
                <p class="font-montserrat text-justify">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                  viverra maecenas accumsan lacus vel facilisis.
                </p>
                <a class="btn px-0 mt-2 color-1 fw-bold font-rubik" href="{{ url('blogs-single') }}"><i class="fa-solid fa-arrow-right me-1"></i> Read More</a>
              </div>
            </div>
            <div class="d-flex flex-column flex-md-row mb-5">
              <div class="me-md-5 pt-4 order-2 order-md-1">
                <h1 class="mb-1 color-2">LOREM IPSUM DOLOR SIT</h1>
                <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
                <p class="font-montserrat text-justify">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                  viverra maecenas accumsan lacus vel facilisis.
                </p>
                <a class="btn px-0 mt-2 color-1 fw-bold font-rubik" href="{{ url('blogs-single') }}"><i class="fa-solid fa-arrow-right me-1"></i> Read More</a>
              </div>
              <img src="{{ asset('assets/frontend/img/blog img 1.png') }}" alt="" class="order-1 order-md-2">
            </div>
            <div class="d-flex flex-column flex-md-row mb-5">
              <img src="{{ asset('assets/frontend/img/blog img 1.png') }}" alt="">
              <div class="ms-md-5 pt-4">
                <h1 class="mb-1 color-2">LOREM IPSUM DOLOR SIT</h1>
                <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
                <p class="font-montserrat text-justify">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                  viverra maecenas accumsan lacus vel facilisis.
                </p>
                <a class="btn px-0 mt-2 color-1 fw-bold font-rubik" href="{{ url('blogs-single') }}"><i class="fa-solid fa-arrow-right me-1"></i> Read More</a>
              </div>
            </div>
            <div class="d-flex flex-column flex-md-row mb-5">
              <div class="me-md-5 pt-4 order-2 order-md-1">
                <h1 class="mb-1 color-2">LOREM IPSUM DOLOR SIT</h1>
                <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
                <p class="font-montserrat text-justify">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                  viverra maecenas accumsan lacus vel facilisis.
                </p>
                <a class="btn px-0 mt-2 color-1 fw-bold font-rubik" href="{{ url('blogs-single') }}"><i class="fa-solid fa-arrow-right me-1"></i> Read More</a>
              </div>
              <img src="{{ asset('assets/frontend/img/blog img 1.png') }}" alt="" class="order-1 order-md-2">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="sidebar-item search-form p-4">
                <form action="" class="mb-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Search" onfocus="removePlaceholder(this)" onblur="restorePlaceholder(this)">
                  <div class="input-group-append">
                    <button class="btn btn-1">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
              </div>
              <div class="sidebar-item categories p-4">
                <h2 class="sidebar-title font-geologica fw-bold color-2">Categories</h2>
                <ul class="mt-4 ps-2">
                  <li><i class="fa-solid fa-caret-right color-1 me-2"></i><a href="#" class="text-decoration-none fw-medium text-black">News</a></li>
                  <li><i class="fa-solid fa-caret-right color-1 me-2"></i><a href="#" class="text-decoration-none fw-medium text-black">Company</a></li>
                  <li><i class="fa-solid fa-caret-right color-1 me-2"></i><a href="#" class="text-decoration-none fw-medium text-black">Delivery</a></li>
                  <li><i class="fa-solid fa-caret-right color-1 me-2"></i><a href="#" class="text-decoration-none fw-medium text-black">Security</a></li>
                  <li><i class="fa-solid fa-caret-right color-1 me-2"></i><a href="#" class="text-decoration-none fw-medium text-black">Press</a></li>
                </ul>
              </div>
              <div class="sidebar-item recent-posts p-4">
                <h2 class="sidebar-title font-geologica fw-bold color-2">Recent Posts</h2>
                <div class="mt-3">
                  <div class="post-item mt-3 d-flex align-items-center text-black">
                    <img src="{{ asset('assets/frontend/img/TEAM 4.jpg') }}" alt="">
                    <div>
                      <h4><a href="blog-details.html" class="text-decoration-none" style="font-size: 18px">Nam Elit Agna, Endrerit Sit Amet</a></h4>
                    </div>
                  </div>
                  <div class="post-item mt-4 d-flex align-items-center text-black">
                    <img src="{{ asset('assets/frontend/img/TEAM 4.jpg') }}" alt="">
                    <div>
                      <h4><a href="blog-details.html" class="text-decoration-none" style="font-size: 18px">Nam Elit Agna, Endrerit Sit Amet</a></h4>
                    </div>
                  </div>
                  <div class="post-item mt-4 d-flex align-items-center text-black">
                    <img src="{{ asset('assets/frontend/img/TEAM 4.jpg') }}" alt="">
                    <div>
                      <h4><a href="blog-details.html" class="text-decoration-none" style="font-size: 18px">Nam Elit Agna, Endrerit Sit Amet</a></h4>
                    </div>
                  </div>
                </div>
              </div><!-- End sidebar recent posts-->
            </div><!-- End Blog Sidebar -->
          </div>
        </div>
      </div>

    </section>

    <section class="section-2">

    </section>
  </section>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/blogs.css') }}">
@endsection

@section('script')
@endsection
