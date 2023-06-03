@extends('frontend.layouts.app')

@section('content')
  <section class="faqs">
    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/other pages banner.png') }}" alt="" class="banner-img img-fluid w-100">
        <div class="banner-text w-100 text-white">
          <div class="container">
            <h1 class="fw-medium ps-lg-5">FREQUENTLY ASKED <br>QUESTIONS</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="section-1 mt-5">
      <div class="container">
        <h1 class="text-center color-2 mb-4">FAQs</h1>
        <div class="row">
          <div class="col-lg-6">
            <div class="accordion" id="accordionOne">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Lorem Ipsum
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Lorem Ipsum
                  </button>                  
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Lorem Ipsum
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Lorem Ipsum
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                  </div>
                </div>
              </div> 
            </div>            
          </div>
          <div class="col-lg-6">
            <div class="accordion" id="accordionTwo">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Lorem Ipsum
                  </button>                  
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#accordionTwo">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Lorem Ipsum
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Lorem Ipsum
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Lorem Ipsum
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                  </div>
                </div>
              </div> 
            </div>            
          </div>
        </div>
      </div>
    </section>
  </section>
@endsection

@section('style')
@endsection

@section('script')
<script>
  // Function to handle the responsive behavior
  function handleResponsiveAccordion() {
    // Get the accordion items in the first column
    const accordionItems1 = document.querySelectorAll('#accordionExample1 .accordion-item');
    // Get the accordion items in the second column
    const accordionItems2 = document.querySelectorAll('#accordionExample2 .accordion-item');

    if (window.innerWidth < 992) {
      // If the screen width is less than 992px (medium and small screens)
      // Collapse all accordion items in both columns except the first one
      for (let i = 1; i < accordionItems1.length; i++) {
        const accordionCollapse = accordionItems1[i].querySelector('.accordion-collapse');
        const accordionButton = accordionItems1[i].querySelector('.accordion-button');

        accordionCollapse.classList.remove('show');
        accordionButton.setAttribute('aria-expanded', 'false');
      }

      // Collapse all accordion items in the second column
      for (let i = 0; i < accordionItems2.length; i++) {
        const accordionCollapse = accordionItems2[i].querySelector('.accordion-collapse');
        const accordionButton = accordionItems2[i].querySelector('.accordion-button');

        accordionCollapse.classList.remove('show');
        accordionButton.setAttribute('aria-expanded', 'false');
      }
    } else {
      // If the screen width is 992px or more (large screens)
      // Show the first accordion item in each column and collapse the rest
      for (let i = 1; i < accordionItems1.length; i++) {
        const accordionCollapse = accordionItems1[i].querySelector('.accordion-collapse');
        const accordionButton = accordionItems1[i].querySelector('.accordion-button');

        accordionCollapse.classList.remove('show');
        accordionButton.setAttribute('aria-expanded', 'false');
      }

      // Show all accordion items in the second column
      for (let i = 1; i < accordionItems2.length; i++) {
        const accordionCollapse = accordionItems1[i].querySelector('.accordion-collapse');
        const accordionButton = accordionItems1[i].querySelector('.accordion-button');

        accordionCollapse.classList.remove('show');
        accordionButton.setAttribute('aria-expanded', 'false');
      }
    }
  }

  // Initial call to handle the responsive behavior on page load
  handleResponsiveAccordion();

  // Event listener for window resize to handle the responsive behavior dynamically
  window.addEventListener('resize', handleResponsiveAccordion);
</script>
@endsection
