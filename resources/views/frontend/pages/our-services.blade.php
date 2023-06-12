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
                <h2 class="card-title">Transportation and Freight Managements</h2>
                <p class="card-text">
                  Our logistics experts specialize in seamless transportation and freight management solutions. We handle the coordination, planning, and execution of your shipments, ensuring they reach their destinations on time and in optimal condition. With access to a vast network of reliable carriers and a deep understanding of various transportation modes, we offer efficient and cost-effective solutions tailored to your specific needs.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>                     
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/frontend/img/Service img 1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">Product Packaging and Labeling</h2>
                <p class="card-text">
                  Enhance the presentation and marketability of your products with our product packaging and labeling services. We offer customized packaging and labeling solutions that meet branding requirements, ensure product integrity, and comply with industry regulations.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/frontend/img/Service img 1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">Exclusive Shipment Tracking</h2>
                <p class="card-text">
                Gain exclusive access to real-time status updates and enhanced visibility of your shipments through our advanced tracking system. With our tracking service, you'll have peace of mind knowing that you can stay informed about the progress of your shipments at all times. Our secure and confidential tracking platform ensures that only you have access to this valuable information, allowing you to make informed decisions, proactively address any issues, and provide exceptional customer service. Rest assured that your shipments are in safe hands as we keep you updated every step of the way.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/frontend/img/Service img 1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">Dedicated Customer Support</h2>
                <p class="card-text">
                Our team is dedicated to providing exceptional customer support. We are available to assist you throughout the logistics 
                process, from initial inquiries and planning to post-delivery support, ensuring a positive and hassle-free experience.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>
          </div>
        </div>
        <div class="my-5">
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
