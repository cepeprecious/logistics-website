<ul class="navbar-nav ms-auto mt-2 mt-lg-0">
  <li class="nav-item">
    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('') }}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ url('about-us') }}">About us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('our-services') ? 'active' : '' }}" href="{{ url('our-services') }}">Our Services</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('faqs') ? 'active' : '' }}" href="{{ url('faqs') }}">FAQs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('blogs') ? 'active' : '' }}" href="{{ url('blogs') }}">Blogs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ url('contact-us') }}">Contact Us</a>
  </li>
</ul>
<hr class="d-block d-lg-none">
<a href="{{ url('track') }}" class="btn btn-1 fs-14px">TRACK YOUR PARCEL</a>
