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

    <section class="section-1 my-5">
      <div class="container">
        <h1 class="text-center color-2 mb-4">FAQs</h1>
        <div class="row">
          <div class="col-lg-6">
            <div class="accordion" id="accordionOne">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How can I experience hassle-free delivery with your logistics services?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
                  <div class="accordion-body text-justify">
                  We prioritize hassle-free delivery by providing seamless and efficient services. We offer advanced tracking systems, 
                  flexible delivery options, reliable and timely deliveries, proactive communication, and easy returns and exchanges to ensure a smooth and convenient experience for our customers.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How do you ensure reliable and timely deliveries?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                  <div class="accordion-body text-justify">
                  We prioritize reliability and timeliness in our delivery services. Our dedicated team and optimized delivery networks work
                  diligently to ensure that your goods are transported safely and arrive at their destination within the specified timeframe, minimizing any delays or disruptions.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header ">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How do you ensure the security and safety of deliveries?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                  <div class="accordion-body text-justify">
                  The security and safety of your deliveries are of utmost importance to us. We take necessary measures, including proper
                  packaging, handling protocols, and employing security systems, to ensure that your goods are protected throughout the transportation process, providing you with peace of mind.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  What sets your logistics services apart for a hassle-free delivery experience?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                  <div class="accordion-body text-justify">
                  We differentiate ourselves by focusing on seamless and convenient services. Our commitment to advanced tracking, flexible 
                  delivery options, reliable deliveries, proactive communication, and easy returns and exchanges ensures a hassle-free experience for our customers, making us a trusted choice for hassle-free delivery.
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
                  What happens if there is a delay or an issue with my delivery?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#accordionTwo">
                  <div class="accordion-body text-justify">
                  While we make every effort to ensure timely and smooth deliveries, unforeseen circumstances may occasionally arise. In the 
                  event of a delay or issue with your delivery, our customer support team is readily available to assist you. We will promptly investigate the situation and take appropriate actions to resolve any issues and ensure that your delivery is completed satisfactorily.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  What steps do you take to guarantee the quality of my product while it is in transit?
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                  <div class="accordion-body text-justify">
                  Our major goal is to maintain the integrity of your package. We handle and safeguard your products during transit with
                  extreme care. This entails employing the proper packaging materials, putting quality control procedures in place, and 
                  making sure that loading and unloading procedures are secure. We also work with trustworthy carriers who put safety at the
                  forefront when handling and moving products.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Do you provide services for fragile items or special handling?
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                  <div class="accordion-body text-justify">
                  Absolutely, we provide special handling services for delicate or fragile objects. Our skilled logistics specialists are trained 
                  to handle such things with special care, making use of the proper packaging materials and implementing the required safety
                  measures throughout shipping. If you have any fragile items, please let us know when placing your order so we can make sure
                  they get the extra care they need.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Are your delivery services environmentally friendly?
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
                  <div class="accordion-body text-justify">
                  We are committed to minimizing our environmental impact and promoting sustainability in our operations. We strive to 
                  optimize delivery routes, reduce carbon emissions, and implement eco-friendly practices throughout our logistics processes.
                  This includes utilizing fuel-efficient vehicles, promoting recycling and waste reduction, and exploring innovative solutions
                  to make our delivery services more environmentally friendly.
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
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/faq.css') }}">
@endsection

@section('script')
  <script>
    // Function to handle the responsive behavior
    // function handleResponsiveAccordion() {
    //   // Get the accordion items in the first column
    //   const accordionOne = document.querySelectorAll('#accordionExample1 .accordion-item');
    //   // Get the accordion items in the second column
    //   const accordionTwo = document.querySelectorAll('#accordionExample2 .accordion-item');

    //   if (window.innerWidth < 992) {
    //     // If the screen width is less than 992px (medium and small screens)
    //     // Collapse all accordion items in both columns except the first one
    //     for (let i = 1; i < accordionOne.length; i++) {
    //       const accordionCollapse = accordionOne[i].querySelector('.accordion-collapse');
    //       const accordionButton = accordionOne[i].querySelector('.accordion-button');

    //       accordionCollapse.classList.remove('show');
    //       accordionButton.setAttribute('aria-expanded', 'false');
    //     }

    //     // Collapse all accordion items in the second column
    //     for (let i = 0; i < accordionTwo.length; i++) {
    //       const accordionCollapse = accordionTwo[i].querySelector('.accordion-collapse');
    //       const accordionButton = accordionTwo[i].querySelector('.accordion-button');

    //       accordionCollapse.classList.remove('show');
    //       accordionButton.setAttribute('aria-expanded', 'false');
    //     }
    //   } else {
    //     // If the screen width is 992px or more (large screens)
    //     // Show the first accordion item in each column and collapse the rest
    //     for (let i = 1; i < accordionOne.length; i++) {
    //       const accordionCollapse = accordionOne[i].querySelector('.accordion-collapse');
    //       const accordionButton = accordionOne[i].querySelector('.accordion-button');

    //       accordionCollapse.classList.remove('show');
    //       accordionButton.setAttribute('aria-expanded', 'false');
    //     }

    //     // Show all accordion items in the second column
    //     for (let i = 1; i < accordionTwo.length; i++) {
    //       const accordionCollapse = accordionOne[i].querySelector('.accordion-collapse');
    //       const accordionButton = accordionOne[i].querySelector('.accordion-button');

    //       accordionCollapse.classList.remove('show');
    //       accordionButton.setAttribute('aria-expanded', 'false');
    //     }
    //   }
    // }

    // // Initial call to handle the responsive behavior on page load
    // handleResponsiveAccordion();

    // // Event listener for window resize to handle the responsive behavior dynamically
    // window.addEventListener('resize', handleResponsiveAccordion);
  </script>
@endsection
