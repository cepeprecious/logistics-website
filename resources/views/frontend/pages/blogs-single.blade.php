@extends('frontend.layouts.app')

@section('content')
  <section class="blogs">
    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/other pages banner.png') }}" alt="" class="banner-img img-fluid w-100 height-350px">
        {{-- <div class="banner-text w-100 text-white">
          <div class="container">
            <h1 class="fw-medium ps-lg-5">BLOGS</h1>
          </div>
        </div> --}}
      </div>
    </section>

    <section class="blogs-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <article class="blog-details">
              <div class="post-img position-relative">
                <img src="{{ asset('assets/frontend/img/blog single page img 1.png') }}" alt="" class="img-fluid">
                <div class="position-absolute bottom-0 start-0 ps-4">
                  <p class="text-decoration-underline text-white font-rubik" style="font-size: 13px">By Admin / April 05, 2023</p>
                </div>
              </div>
              <h1 class="title color-2 font-rubik mb-2">Building Long-Term Connections with customers</h1>
              <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
              <div class="content">
                <p>
                Strong client relationships and loyalty are strengthened by exceptional shipment experiences. Throughout the shipment process,
                we'll look at methods for delivering excellent customer service, such as proactive communication, individualized tracking 
                updates, and responsive support channels. By providing exceptional customer service, you may stand out from other businesses 
                and develop brand advocates who will use your services often.
                </p>
                <blockquote class="ms-4">
                  <p>
                  Building Meaningful Connections with Customers: Unlocking the Potential of Long-Term Partnerships in the Logistics Industry.
                  </p>
                </blockquote>
                <p>
                For your logistics business to succeed, developing long-term connections with customers is essential. By comprehending their 
                particular needs and communicating with them in a way that is specific to them, you may build trust and loyalty. As a sign of 
                your dedication to their achievement, be proactive in problem-solving by taking ownership of problems and offering immediate 
                solutions. Always meet or exceed expectations in areas like on-time deliveries, precise tracking, and dependable customer 
                service.
                </p>
                <p>
                Consistency is essential. Offer value-added services, such as order fulfillment or inventory management, to set yourself 
                apart from other businesses. These services should go beyond standard shipping. To continually improve your offerings and 
                convey to clients that their satisfaction is a top priority, seek out suggestions from them. To connect personally and 
                express your gratitude, take part in relationship-building activities. It's important to keep in mind that developing lasting 
                relationships requires seeing your clients as more than just a source of revenue—they are important partners on the road to 
                success.
                </p>
              </div><!-- End post content -->
              <div class="mt-5">
                <p class="fs-5">SHARE THIS:</p>
                <div class="d-flex">
                  <a href="#" class="facebook-badge text-decoration-none me-2">
                    <span class="logo">
                      <i class="fa-brands fa-facebook-f"></i>
                    </span>
                    Facebook
                  </a>
                  <a href="#" class="twitter-badge text-decoration-none me-2">
                    <span class="logo">
                      <i class="fa-brands fa-twitter"></i>
                    </span>
                    Twitter
                  </a>
                  <a href="#" class="email-badge text-decoration-none">
                    <span class="logo">
                      <i class="fa-solid fa-envelope"></i>
                    </span>
                    Email
                  </a>
                </div>
              </div>
              <div class="pager d-flex justify-content-between mt-5">
                <a class="btn color-1 fs-5" href="#" aria-label="Previous">
                  <span aria-hidden="true" class="me-2">&laquo;</span>
                  Previous Post
                </a>
                <a class="btn color-1 fs-5" href="#" aria-label="Next">
                  Next Post
                  <span aria-hidden="true" class="ms-2">&raquo;</span>
                </a>
              </div>
            </article><!-- End blog post -->
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
                      <h4><a href="blog-details.html" class="text-decoration-none" style="font-size: 18px">Warehouse Management Best Practices for Efficient Inventory Control</a></h4>
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
