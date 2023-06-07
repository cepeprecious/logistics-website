<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('meta')

  <title>{{ env('APP_NAME') }}</title>

  {{-- Style Here --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
  @yield('style')
</head>

{{-- style="min-height: 5000px;" --}}

<body>
  @include('frontend.layouts.offcanvas')
  @include('frontend.layouts.header')
  @yield('content')
  @include('frontend.layouts.footer')
</body>

{{-- Script Here --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    var header = $('header');
    var headerHeight = header.outerHeight();
    var scrollPosition = $(window).scrollTop();

    $(window).scroll(function() {
      scrollPosition = $(this).scrollTop();
      console.log(scrollPosition);

      if (scrollPosition >= 40) { // Adjust the scroll position as needed
        header.addClass('on-scroll');
      } else {
        header.removeClass('on-scroll');
      }
    });
  });
</script>
@yield('script')

</html>
