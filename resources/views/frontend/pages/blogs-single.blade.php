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
              <h1 class="title color-2 font-rubik mb-2">Lorem Ipsum dolor sir amet</h1>
              <p class="mb-3 text-decoration-underline color-2 font-rubik">By Admin / April 05, 2023</p>
              <div class="content">
                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                </p>
                <blockquote class="ms-4">
                  <p>
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                  </p>
                </blockquote>
                <p>
                  Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                  Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                  Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                </p>
                <p>
                  Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                  Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                  Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
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
