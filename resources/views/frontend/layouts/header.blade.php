<header class="position-fixed top-0 w-100">
  <div class="container">
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
      <a class="navbar-brand" href="{{ url('') }}">LOGO</a>
      {{-- <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button> --}}
      <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
        <i class="fa-solid fa-bars text-white"></i>
      </button>
      <div class="collapse navbar-collapse gap-5" id="collapsibleNavId">
        @include('frontend.layouts.nav-link')
      </div>
    </nav>
  </div>
</header>
