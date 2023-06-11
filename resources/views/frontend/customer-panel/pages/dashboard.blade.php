@extends('frontend.customer-panel.layouts.app')


@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-4">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $totalOrders }}</h3>
              <p>Total Orders</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="{{ url('order-status') }}" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $deliveredOrdersCount }}</h3>
              <p>Delivered</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ url('order-status') }}" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $notDeliveredOrdersCount }}</h3>
              <p>Not yet Delivered</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ url('order-status') }}" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

@section('style')
@endsection

@section('script')
@endsection
