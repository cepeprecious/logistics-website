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
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-xl" data-order-id="{{ $order->id }}">
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
              <p style="font-weight: bold">Order #: <span id="order-id"></span></p>
            </div>
            <div class="col-lg-4">
              <p style="font-weight: bold">Tracking Number: <span id="tracking-number"></span></p>
            </div>
            <div class="col-lg-4">
              <p style="font-weight: bold">Fee: <span id="fee"></span></p>
            </div>
            <div class="col-lg-4">
              <p style="font-weight: bold">Date/Time: <span id="order-date-time"></span></p>
            </div>
            <div class="col-lg-4">
              <p style="font-weight: bold">Status: <span style="color: red" id="status"></span></p>
            </div>
          </div>
          <hr>
          <h4>Receiver's Address</h4>
          <div class="row">
            <div class="col-lg-6">
              <p>Name: <span style="font-weight: bold" id="receiver-name"></span></p>
            </div>
            <div class="col-lg-6">
              <p>Phone Number: <span style="font-weight: bold" id="receiver-number"></span></p>
            </div>
            <div class="col-lg-12">
              <p>Address: <span style="font-weight: bold" id="receiver-address"></span></p>
            </div>
            <div class="col-lg-4">
              <p>City: <span style="font-weight: bold" id="receiver-city"></span></p>
            </div>
            <div class="col-lg-4">
              <p>State/Province: <span style="font-weight: bold" id="receiver-state"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Zip Code: <span style="font-weight: bold" id="receiver-zip-code"></span></p>
            </div>
          </div>
          <hr>
          <h4>Sender's Address</h4>
          <div class="row">
            <div class="col-lg-4">
              <p>Name: <span style="font-weight: bold" id="sender-name"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Phone Number: <span style="font-weight: bold" id="sender-number"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Email Address: <span style="font-weight: bold" id="sender-email"></span></p>
            </div>
            <div class="col-lg-12">
              <p>Address: <span style="font-weight: bold" id="sender-address"></span></p>
            </div>
            <div class="col-lg-4">
              <p>City: <span style="font-weight: bold" id="sender-city"></span></p>
            </div>
            <div class="col-lg-4">
              <p>State/Province: <span style="font-weight: bold" id="sender-state"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Zip Code: <span style="font-weight: bold" id="sender-zip-code"></span></p>
            </div>
          </div>
          <hr>
          <h4>Booking Details</h4>
          <div class="row">
            <div class="col-lg-4">
              <p>Delivery Options: <span style="font-weight: bold" id="delivery-options"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Items Name: <span style="font-weight: bold" id="item-name"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Quantity: <span style="font-weight: bold" id="quantity"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Item Category: <span style="font-weight: bold" id="item-category"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Weight: <span style="font-weight: bold" id="weight"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Items/Goods Value: <span style="font-weight: bold" id="item-value"></span></p>
            </div>
            <div class="col-lg-4">
              <p>Bags Specification: <span style="font-weight: bold" id="bags-specification"></span></p>
            </div>
            <div class="col-lg-12">
              <p>Remarks: <span style="font-weight: bold" id="remarks"></span></p>
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
<script>
  $(document).ready(function() {
    $('#modal-xl').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget);
      var orderId = button.data('order-id');
      var order = getOrderDetails(orderId);
      var modal = $(this);
      var dateTime = new Date(order.created_at);
      var formattedDateTime = dateTime.toLocaleString();

      // Populate the modal with order details
      modal.find('#order-id').text(order.id);
      modal.find('#tracking-number').text(order.tracking_number);
      modal.find('#order-date-time').text(formattedDateTime);
      modal.find('#item-category').text(order.item_category);
      modal.find('#status').text(order.status);
      modal.find('#receiver-name').text(order.receiver_name);
      modal.find('#receiver-number').text(order.receiver_number);
      modal.find('#receiver-address').text(order.receiver_address);
      modal.find('#receiver-city').text(order.receiver_city);
      modal.find('#receiver-state').text(order.receiver_state);
      modal.find('#receiver-zip-code').text(order.receiver_zip_code);

      modal.find('#sender-name').text(order.sender_name);
      modal.find('#sender-number').text(order.sender_number);
      modal.find('#sender-email').text(order.sender_email);
      modal.find('#sender-address').text(order.sender_address);
      modal.find('#sender-city').text(order.sender_city);
      modal.find('#sender-state').text(order.sender_state);
      modal.find('#sender-zip-code').text(order.sender_zip_code);

      modal.find('#delivery-options').text(order.delivery_options);
      modal.find('#fee').text(order.fee);
      modal.find('#item-name').text(order.item_name);
      modal.find('#quantity').text(order.quantity);
      modal.find('#weight').text(order.weight);
      modal.find('#item-value').text(order.item_value);
      modal.find('#bags-specification').text(order.bags_specification);
      modal.find('#remarks').text(order.remarks); 
    });

    function getOrderDetails(orderId) {
      var orders = {!! json_encode($orders) !!};
      var order = orders.find(function(order) {
        return order.id === orderId;
      });
      return order;
    }
  });
</script>
@endsection