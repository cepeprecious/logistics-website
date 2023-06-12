@extends('frontend.layouts.app')

@section('content')
  <section class="track-package">
    <section class="banner">
      <div class="position-relative">
        <img src="{{ asset('assets/frontend/img/other pages banner.png') }}" alt="" class="banner-img img-fluid w-100 height-350px">
        {{-- <div class="banner-text w-100 text-white">
          <div class="container">
            <h1 class="fw-medium ps-lg-5">TRACK PACKAGE</h1>
          </div>
        </div> --}}
      </div>
    </section>

    <section class="section-1 mt-5" style="margin-bottom: 200px">
      <div class="container">
        <h1 class="text-center color-2 mb-4 fw-bold">Track Package</h1>
        <form method="POST" action="{{ route('track.package') }}" class="input-group mb-3 mx-auto" style="width: 45rem">
          @csrf
          <input type="text" class="form-control form-control-lg rounded-0" name="tracking_number" placeholder="Enter Tracking Number" aria-label="Enter Tracking Number" aria-describedby="button-addon2">
          <button class="btn btn-1 btn-border-left" id="button-addon2">TRACK</button>
        </form>
        <div class="mt-5 mx-auto" style="width: 60rem">
          <p style="font-weight: bold; font-size: 20px">Tracking Number: 
            @if (Session::has('trackingNumber'))
              {{ Session::get('trackingNumber') }}
            @endif
          </p>
          <div class="border py-4 text-white" style="background-color: var(--color-2)">
            <p class="m-0 font-rubik text-center fs-3 fw-medium">Shipment Status</p>
          </div>
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Activity/Status</th>
                <th scope="col">Date/Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @if (Session::has('shipmentStatus'))
                  <td>{{ Session::get('shipmentStatus') }}</td>
                @endif
                @if (Session::has('dateTime'))
                  <td>{{ date('F d, Y h:i A', strtotime(Session::get('dateTime'))) }}</td>
                @endif
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    {{-- <section class="section-1 mt-5">
      <div class="container">
        <h1 class="text-center color-2 mb-4 fw-bold">Track Package</h1>
        <div class="input-group mb-3 mx-auto">
          <input type="text" class="form-control form-control-lg rounded-0" placeholder="Enter Tracking Number" aria-label="Enter Tracking Number" aria-describedby="button-addon2">
          <button class="btn btn-1 btn-border-left" type="button" id="button-addon2">TRACK</button>
        </div>
        <div class="mt-5 mx-auto">
          <div class="border py-4 text-white" style="background-color: var(--color-2)">
            <p class="m-0 font-rubik text-center fs-3 fw-medium">Shipment Status</p>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th scope="col">Activity/Status</th>
                  <th scope="col">Date/Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Out for Delivery</td>
                  <td>April 04, 2023 9:30 AM</td>
                </tr>
                <tr>
                  <td>Accepted at Cebu City</td>
                  <td>April 04, 2023 12:30 PM</td>
                </tr>
                <tr>
                  <td>Arrived at Davao City</td>
                  <td>April 04, 2023 3:30 PM</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>     --}}
  </section>
@endsection

@section('style')
  <style>
    .section-1 .form-control::placeholder {
      font-size: 18px;
      color: var(--color-2)
    }

    .section-1 .form-control:focus {
      outline: none;
      box-shadow: none;
      border-color: var(--color-2);
    }

    .table td,
    .table th {
      padding: 1.5rem;
      /* Adjust the padding value as needed */
      font-family: 'Rubik', sans-serif;
      color: var(--color-2)
    }

    .table th {
      font-size: 25px;
      font-weight: bold
    }

    .table td {
      font-size: 20px;
    }
  </style>
@endsection

@section('script')
@endsection
