@extends('frontend.customer-panel.layouts.app')


@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Order History</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Order History</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Tracking Number</th>
                    <th>Date/Time</th>
                    <th>Item Type</th>
                    <th>Destination</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                    <tr>
                      <td>#{{ $order->id }}</td>
                      <td>{{ $order->tracking_number }}</td>
                      <td>{{ $order->created_at }}</td>
                      <td>{{ $order->item_category }}</td>
                      <td>{{ $order->receiver_city }}</td>
                      <td><span class="badge bg-danger">{{ $order->status }}</span></td>
                      <td>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-xl">
                          <i class="fa-solid fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>              
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal --}}
  <div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-4">
              <p style="font-weight: bold">Order #: {{ $order->id }}</p>
            </div>
            <div class="col-lg-4">
              <p style="font-weight: bold">Tracking Number: {{ $order->tracking_number }}</p>
            </div>
            <div class="col-lg-4">
              <p style="font-weight: bold">Fee: </p>
            </div>
          </div>
          <h4>Receiver's Address</h4>
          <div class="row">
            <div class="col-lg-6">
              <p>Name: </p>
            </div>
            <div class="col-lg-6">
              <p>Phone Number: </p>
            </div>
            <div class="col-lg-12">
              <p>Address: </p>
            </div>
            <div class="col-lg-4">
              <p>City: </p>
            </div>
            <div class="col-lg-4">
              <p>State/Province: </p>
            </div>
            <div class="col-lg-4">
              <p>Zip Code: </p>
            </div>
          </div>
          <hr>
          <h4>Sender's Address</h4>
          <div class="row">
            <div class="col-lg-4">
              <p>Name: </p>
            </div>
            <div class="col-lg-4">
              <p>Phone Number: </p>
            </div>
            <div class="col-lg-4">
              <p>Email Address: </p>
            </div>
            <div class="col-lg-12">
              <p>Address: </p>
            </div>
            <div class="col-lg-4">
              <p>City: </p>
            </div>
            <div class="col-lg-4">
              <p>State/Province: </p>
            </div>
            <div class="col-lg-4">
              <p>Zip Code: </p>
            </div>
          </div>
          <hr>
          <h4>Booking Details</h4>
          <div class="row">
            <div class="col-lg-4">
              <p>Delivery Options: </p>
            </div>
            <div class="col-lg-4">
              <p>Items Name: </p>
            </div>
            <div class="col-lg-4">
              <p>Quantity: </p>
            </div>
            <div class="col-lg-4">
              <p>Weight: </p>
            </div>
            <div class="col-lg-4">
              <p>Items/Goods Value: </p>
            </div>
            <div class="col-lg-4">
              <p>Bags Specification: </p>
            </div>
            <div class="col-lg-12">
              <p>Remarks: </p>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default">Print</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection

@section('style')
@endsection

@section('script')
@endsection
