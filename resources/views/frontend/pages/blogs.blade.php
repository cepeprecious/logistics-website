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
                <h1 class="mb-1 color-2">PACKAGING AND LABELING</h1>
                <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
                <p class="font-montserrat text-justify">
                Proper packaging and labeling are essential to protect your goods during transit and ensure smooth handling. We'll delve into
                the importance of sturdy packaging materials, correct box sizes, and effective cushioning techniques. Additionally, we'll 
                provide guidance on accurate labeling, including barcodes, tracking numbers, and other required documentation.
                </p>
                <a class="btn px-0 mt-2 color-1 fw-bold font-rubik" href="{{ url('blogs-single') }}"><i class="fa-solid fa-arrow-right me-1"></i> Read More</a>
              </div>
            </div>
            <div class="d-flex flex-column flex-md-row mb-5">
              <div class="me-md-5 pt-4 order-2 order-md-1">
                <h1 class="mb-1 color-2">SUSTAINABLE SHIPPING METHODS</h1>
                <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
                <p class="font-montserrat text-justify">
                In the current environmentally sensitive world, implementing sustainable shipment procedures is not only ethical but also 
                presents a chance to highlight your dedication to environmentally friendly operations. We'll look at environmentally friendly
                packaging solutions, carbon offset schemes, and strategies to reduce waste and emissions. Including sustainability in your 
                shipping process not only supports global objectives but also appeals to customers that care about the environment.
                </p>
                <a class="btn px-0 mt-2 color-1 fw-bold font-rubik" href="{{ url('blogs-single') }}"><i class="fa-solid fa-arrow-right me-1"></i> Read More</a>
              </div>
              <img src="{{ asset('assets/frontend/img/blog img 1.png') }}" alt="" class="order-1 order-md-2">
            </div>
            <div class="d-flex flex-column flex-md-row mb-5">
              <img src="{{ asset('assets/frontend/img/blog img 1.png') }}" alt="">
              <div class="ms-md-5 pt-4">
                <h1 class="mb-1 color-2">BUILDING LONG-TERM CONNECTIONS WITH CUSTOMERS</h1>
                <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
                <p class="font-montserrat text-justify">
                Strong client relationships and loyalty are strengthened by exceptional shipment experiences. Throughout the shipment process,
                we'll look at methods for delivering excellent customer service, such as proactive communication, individualized tracking 
                updates, and responsive support channels. By providing exceptional customer service, you may stand out from other businesses 
                and develop brand advocates who will use your services often.
                </p>
                <a class="btn px-0 mt-2 color-1 fw-bold font-rubik" href="{{ url('blogs-single') }}"><i class="fa-solid fa-arrow-right me-1"></i> Read More</a>
              </div>
            </div>
            <div class="d-flex flex-column flex-md-row mb-5">
              <div class="me-md-5 pt-4 order-2 order-md-1">
                <h1 class="mb-1 color-2">RISK MANAGEMENT AND INSURANCE</h1>
                <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
                <p class="font-montserrat text-justify">
                There are risks involved while transporting products, such as theft, damage, or loss. We'll talk about how important risk 
                reduction techniques and insurance are for safeguarding your shipments. You can have peace of mind and financial security
                in case of unanticipated occurrences by being aware of the different forms of insurance that are available, evaluating risk 
                factors, and working with reliable insurers.
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
                      <h4><a href="blog-details.html" class="text-decoration-none text-justify" style="font-size: 18px">Warehouse Management Best Practices for Efficient Inventory Control</a></h4>
                    </div>
                  </div>
                  <div class="post-item mt-4 d-flex align-items-center text-black">
                    <img src="{{ asset('assets/frontend/img/TEAM 4.jpg') }}" alt="">
                    <div>
                      <h4><a href="blog-details.html" class="text-decoration-none" style="font-size: 18px">Optimizing Packaging for Safe and Hassle-Free Deliveries</a></h4>
                    </div>
                  </div>
                  <div class="post-item mt-4 d-flex align-items-center text-black">
                    <img src="{{ asset('assets/frontend/img/TEAM 4.jpg') }}" alt="">
                    <div>
                      <h4><a href="blog-details.html" class="text-decoration-none" style="font-size: 18px">The Art of Hassle-Free Delivery: How to Ensure a Seamless Customer Experience</a></h4>
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
