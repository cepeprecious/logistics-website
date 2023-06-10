@extends('frontend.layouts.app')

@section('content')
  <section class="home mb-5">

    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/banner.png') }}" alt="" class="banner-img img-fluid w-100">
        <div class="position-absolute top-0 w-100 h-100 header-padding pb-5">
          <div class="container">
            <div class="d-flex align-items-center w-100 h-100">
              <div class="text-white" style="max-width: 800px;">
                <h1 class="fw-medium mb-5">EXPERIENCE THE <span class="font-rubik color-1">HASSLE-FREE <br class="d-none d-md-block">DELIVERY</span></h1>
                <p class="mb-5">Experience hassle-free delivery: Effortlessly receive your goods with seamless tracking, flexible options, and streamlined processes.</p>
                <a href="" class="btn btn-1 btn-border-left">LEARN MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-1">
      <div class="py-5 py-md-0">
        <div class="container">
          <div class="d-flex flex-wrap justify-content-center gap-5">
            <div class="item shadow">
              <span class="fs-12px fw-bold font-rubik color-1">OUR SERVICES</span>
              <h4 class="color-2 fw-bold mb-4">Advanced Tracking Systems</h4>
              <p class="fs-12px mb-5 text-justify">One of the essential elements of hassle-free delivery is transparency. Customers want to know where their package is at any given time. Businesses are incorporating advanced tracking systems that enable customers to monitor their deliveries in real-time. These systems provide timely updates, estimated delivery times, and even the ability to communicate with the delivery personnel, ensuring that customers are always in the loop.</p>
              <div class="d-flex align-items-center color-1">
                <i class="fa-solid fa-arrow-right-long fs-6 me-2"></i>
                <a href="" class="fs-12px fw-bold font-rubik">LEARN MORE</a>
              </div>
            </div>
            <div class="item shadow">
              <span class="fs-12px fw-bold font-rubik color-1">OUR SERVICES</span>
              <h4 class="color-2 fw-bold mb-4">Flexible Delivery Options</h4>
              <p class="fs-12px mb-5 text-justify">To cater to the diverse needs of customers, companies are offering flexible delivery options. This includes providing choices such as home delivery, office delivery, or pickup from a nearby location. Customers can select the option that suits them best, ensuring convenience and minimizing any potential inconvenience caused by missed deliveries.</p>
              <div class="d-flex align-items-center color-1">
                <i class="fa-solid fa-arrow-right-long fs-6 me-2"></i>
                <a href="" class="fs-12px fw-bold font-rubik">LEARN MORE</a>
              </div>
            </div>
            <div class="item shadow">
              <span class="fs-12px fw-bold font-rubik color-1">OUR SERVICES</span>
              <h4 class="color-2 fw-bold mb-4">Reliable and Timely Deliveries</h4>
              <p class="fs-12px mb-5 text-justify">Timeliness is a key aspect of hassle-free delivery, and we prioritize the reliable and punctual transportation of your goods. Our dedicated team and optimized delivery networks work tirelessly to ensure that your package reaches its destination within the specified timeframe, minimizing any delays or disruptions along the way.</p>
              <div class="d-flex align-items-center color-1">
                <i class="fa-solid fa-arrow-right-long fs-6 me-2"></i>
                <a href="" class="fs-12px fw-bold font-rubik">LEARN MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-2">
      <div class="background-image">
        <div class="container">
          <div class="position-relative">
            <img src="{{ asset('assets/frontend/img/homepage img 1.png') }}" alt="" class="img-fluid w-100 d-none d-lg-block">
            <div class="text-box color-2">
              <span class="fs-12px fw-bold font-rubik color-1">WE ARE OFFERING THE BEST DELIVERY SERVICES</span>
              <h1 class="fw-bold">The experts in the delivery</h1>
              <h6 class="fw-bold text-justify">The experts in the delivery, our team combines extensive industry knowledge and a passion for excellence to ensure seamless logistics operations and exceptional service for our customers.</h6>
              <p class="text-justify">Our experienced team of delivery experts has a proven track record of successfully managing complex logistics operations, ensuring efficient and reliable service.With our team of industry experts, we bring years of experience, exceptional service, and a commitment to delivering your goods efficiently and reliably.</p>
              <div class="ps-4 ps-md-0">
                <div class="row">
                  <div class="col col-12 col-sm-6">
                    <i class="fa-solid fa-circle"></i>
                    <span>Courier Services</span>
                  </div>
                  <div class="col col-12 col-sm-6">
                    <i class="fa-solid fa-circle"></i>
                    <span>Cost-Effective Solutions</span>
                  </div>
                  <div class="col col-12 col-sm-6">
                    <i class="fa-solid fa-circle"></i>
                    <span>Safety and Security</span>
                  </div>
                  <div class="col col-12 col-sm-6">
                    <i class="fa-solid fa-circle"></i>
                    <span>Reliable and Timely Delivery</span>
                  </div>
                  <div class="col col-12 col-sm-6">
                    <i class="fa-solid fa-circle"></i>
                    <span>Professional Handling and Packaging</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="blue-text-box">
              <h6 class="fs-12px">We Have Over</h6>
              <p class="fw-bold large">10k+</p>
              <p class="fw-bold fs-4">Parcels</p>
              <p>Delivered</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-3">
      <div class="background-image position-relative">
        <div class="d-flex align-items-center p-5">
          <div class="row flex-grow-1 text-white text-center py-5">

            <div class="col-6 col-md-4 col-lg-2">
              <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/frontend/img/export.png') }}" alt="" class="img-fluid mb-3">
                <h5 class="fw-bold">Export Logistics</h5>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/frontend/img/import icon.png') }}" alt="" class="img-fluid mb-3">
                <h5 class="fw-bold">Import Logistics</h5>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/frontend/img/delivery icon.png') }}" alt="" class="img-fluid mb-3">
                <h5 class="fw-bold">Fast Delivery</h5>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/frontend/img/guarantee icon.png') }}" alt="" class="img-fluid mb-3">
                <h5 class="fw-bold">100% Guarantee</h5>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/frontend/img/support icon.png') }}" alt="" class="img-fluid mb-3">
                <h5 class="fw-bold">24/7 Support</h5>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/frontend/img/discount icon.png') }}" alt="" class="img-fluid mb-3">
                <h5 class="fw-bold">Special Discount</h5>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="section-4">
      <div class="py-5">
        <div class="container">
          <h1 class="font-geologica fs-large color-2 text-center mb-5">Our Latest Blogs</h1>
          <div class="d-flex flex-wrap justify-content-center gap-5">

            <div class="item">
              <img src="{{ asset('assets/frontend/img/img 3 (HP).jpg') }}" alt="" class="img-fluid w-100">
              <div class="body">
                <span class="fw-bold color-2">Shipment | May 23, 2023</span>
                <h2 class="text-black">Delighting Customers with Hassle-Free Delivery</h2>
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('assets/frontend/img/img 3 (HP).jpg') }}" alt="" class="img-fluid w-100">
              <div class="body">
                <span class="fw-bold color-2">Shipment | May 23, 2023</span>
                <h2 class="text-black">Efficient Strategies for Hassle-Free Shipments</h2>
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('assets/frontend/img/img 3 (HP).jpg') }}" alt="" class="img-fluid w-100">
              <div class="body">
                <span class="fw-bold color-2">Shipment | May 23, 2023</span>
                <h2 class="text-black">Delivery Excellence: Expert Strategies</h2>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="section-5">
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              <h1 class=" font-roboto-condensed color-2 mb-5 fw-bold">Get In Touch</h1>
              <form id="inquiry" method="POST" action="{{ route('inquiry') }}">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="mb-5">
                      <input type="text" class="form-control border-0 rounded-0 shadow-1 p-4" name="name" id="fullName" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="mb-5">
                      <input type="email" class="form-control border-0 rounded-0 shadow-1 p-4" name="email_address" id="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-5">
                      <textarea class="form-control border-0 rounded-0 shadow-1 p-4" name="message" id="message" rows="3" placeholder="Message"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-1 btn-border-left">SUBMIT</button>
                </div>
              </form>
            </div>
            <div class="col-12 col-lg-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2695291676205!2d125.60048657418622!3d7.094725216263494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d239e0b8d8d%3A0x6803118d251c27d5!2sR%20Web%20Solutions%20Corp.%20Davao!5e0!3m2!1sen!2sph!4v1685882153379!5m2!1sen!2sph" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

  </section>
@endsection

@section('style')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/home.css') }}">
  <style>
    .section-2 .background-image {
      background-image: url("{{ asset('assets/frontend/img/globus_image.png') }}");
    }

    .section-3 .background-image {
      background-image: url("{{ asset('assets/frontend/img/img 2 (HP).jpg') }}");
    }
  </style>
@endsection

<section>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</section>

@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#inquiry').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
          url: url,
          type: 'POST',
          data: data,

          success: function(response) {
            // Handle successful response
            console.log(response.success);
            $.toast().reset('all');
            $.toast({
              heading: 'Success',
              text: response.success,
              showHideTransition: 'slide',
              icon: 'success',
              hideAfter: 5000,
              position: 'top-right',
              loader: false
            });
            $('form input').val('');
            $('form textarea').val('');
          },

          error: function(xhr, status, error) {
            // Handle successful response
            console.log(xhr.responseText);
            var errors = JSON.parse(xhr.responseText);
            $.toast().reset('all');
            $.each(errors, function(key, value) {
              if (key == 'errors') {
                $.each(value, function(key, value2) {
                  $.toast({
                    heading: 'Error',
                    text: value2,
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: 5000,
                    position: 'top-right',
                    loader: false
                  });
                });
              }
            });
          }

        });

      });
    });
  </script>
@endsection
