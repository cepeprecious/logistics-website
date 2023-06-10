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
                <h2 class="card-title">Advanced Tracking Systems</h2>
                <p class="card-text">
                One of the essential elements of hassle-free delivery is transparency. Customers want to know where their package is at any 
                given time. Businesses are incorporating advanced tracking systems that enable customers to monitor their deliveries in 
                real-time. These systems provide timely updates, estimated delivery times, and even the ability to communicate with the 
                delivery personnel, ensuring that customers are always in the loop.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>                     
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/frontend/img/Service img 1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">Flexible Delivery Options</h2>
                <p class="card-text">
                To cater to the diverse needs of customers, companies are offering flexible delivery options. This includes providing
                choices such as home delivery, office delivery, or pickup from a nearby location. Customers can select the option that 
                suits them best, ensuring convenience and minimizing any potential inconvenience caused by missed deliveries.
                </p>
                <a href="" class="btn btn-1 btn-border-left" style="float: right">LEARN MORE</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/frontend/img/Service img 1.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">Reliable and Timely Deliveries</h2>
                <p class="card-text">
                Timeliness is a key aspect of hassle-free delivery, and we prioritize the reliable and punctual transportation of your goods.
                Our dedicated team and optimized delivery networks work tirelessly to ensure that your package reaches its destination within
                the specified timeframe, minimizing any delays or disruptions along the way.
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
