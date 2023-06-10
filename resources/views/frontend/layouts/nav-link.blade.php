<ul class="navbar-nav ms-auto mt-2 mt-lg-0">
  <li class="nav-item">
    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('') }}">
      {{ __('Home') }}
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ url('about-us') }}">
      {{ __('About Us') }}
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('our-services') ? 'active' : '' }}" href="{{ url('our-services') }}">
      {{ __('Our Services') }}
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('faqs') ? 'active' : '' }}" href="{{ url('faqs') }}">
      {{ __('FAQs') }}
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('blogs') ? 'active' : '' }}" href="{{ url('blogs') }}">
      {{ __('Blogs') }}
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ url('contact-us') }}">
      {{ __('Contact Us') }}
    </a>
  </li>
</ul>
<hr>
<a href="{{ route('track') }}" class="btn btn-1 fs-14px">
  {{ __('TRACK YOUR PARCEL') }}
</a>
<a href="{{ route('login') }}" class="btn btn-1 fs-14px">
  {{ __('LOGIN') }}
</a>
