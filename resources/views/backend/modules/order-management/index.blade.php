@extends('backend.layouts.app')


@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inquiries</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="card-title fw-bold">
                                Inquiries
                            </div>
                            <a href="{{ url('admin/order/export') }}" class="float-right">
                                Export
                            </a>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped" style="width: 100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>TRACKING NUMBER</th>
                                        <th>DATE / TIME</th>
                                        <th>ITEM TYPE</th>
                                        <th>DESTINATION</th>
                                        <th>STATUS</th>
                                        <th class="text-right action-width">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($orders) && count($orders) > 0)
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>
                                                    {{ $order->tracking_number }}
                                                </td>
                                                <td>
                                                    {{ $order->created_at }}
                                                </td>
                                                <td>
                                                    {{ $order->item_category }}
                                                </td>
                                                <td>
                                                    {{ $order->receiver_city }}
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger">
                                                        {{ $order->status }}
                                                    </span>
                                                </td>

                                                {{-- <td class="action-width"> --}}
                                                {{-- Delete Modal Button --}}
                                                {{-- <button type="button" class="btn btn-danger w-100 btn-width" data-toggle="modal" data-target="#modal-{{ $order->id }}">
                                                        Delete
                                                    </button>
                                                </td> --}}
                                                <td class="action-width">
                                                    <button type="button" class="btn btn-primary w-100 btn-width" data-toggle="modal" data-target="#modal-xl" data-order-id="{{ $order->id }}">
                                                        More
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-modal">
        {{-- Modal --}}
        <div class="modal fade" id="modal-xl">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <form action="{{ url('admin/order/update') }}" method="POST" class="m-0">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Order Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="order-id" class="font-weight-bold">Order ID:</label>
                                        <input type="text" readonly class="form-control" name="id" id="order-id">
                                    </div>
                                    {{-- <p style="font-weight: bold">Order #: <span id="order-id"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="tracking-number" class="font-weight-bold">Tracking Number:</label>
                                        <input type="text" readonly class="form-control" id="tracking-number">
                                    </div>
                                    {{-- <p style="font-weight: bold">Tracking Number: <span id="tracking-number"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="tracking-number" class="font-weight-bold">Fee:</label>
                                        <input type="text" readonly class="form-control">
                                    </div>
                                    {{-- <p style="font-weight: bold">Fee: </p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="order-date-time" class="font-weight-bold">Date/Time:</label>
                                        <input type="text" readonly class="form-control" id="order-date-time">
                                    </div>
                                    {{-- <p style="font-weight: bold">Date/Time: <span id="order-date-time"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="status" class="font-weight-bold">Status:</label>
                                        <input type="text" readonly class="form-control" name="status" id="status" style="color: red;">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Set Status
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item set-status" data-target="#status" href="#">Pending</a>
                                            <a class="dropdown-item set-status" data-target="#status" href="#">Order Received</a>
                                            <a class="dropdown-item set-status" data-target="#status" href="#">Order Processing</a>
                                            <a class="dropdown-item set-status" data-target="#status" href="#">To be Shipped</a>
                                            <a class="dropdown-item set-status" data-target="#status" href="#">Order Shipped</a>
                                            <a class="dropdown-item set-status" data-target="#status" href="#">In Transit</a>
                                            <a class="dropdown-item set-status" data-target="#status" href="#">Out for Delivery</a>
                                            <a class="dropdown-item set-status" data-target="#status" href="#">Delivery Attempted</a>
                                            <a class="dropdown-item set-status" data-target="#status" href="#">Delivered</a>
                                        </div>
                                    </div>
                                    {{-- <p style="font-weight: bold">Status: <span style="color: red" id="status"></span></p> --}}
                                </div>
                            </div>
                            <hr>
                            <h4>Receiver's Address</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="receiver-name" class="font-weight-bold">Name:</label>
                                        <input type="text" readonly class="form-control" id="receiver-name">
                                    </div>
                                    {{-- <p>Name: <span style="font-weight: bold" id="receiver-name"></span></p> --}}
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="receiver-number" class="font-weight-bold">Phone Number:</label>
                                        <input type="text" readonly class="form-control" id="receiver-number">
                                    </div>
                                    {{-- <p>Phone Number: <span style="font-weight: bold" id="receiver-number"></span></p> --}}
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="receiver-address" class="font-weight-bold">Address:</label>
                                        <input type="text" readonly class="form-control" id="receiver-address">
                                    </div>
                                    {{-- <p>Address: <span style="font-weight: bold" id="receiver-address"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="receiver-city" class="font-weight-bold">City:</label>
                                        <input type="text" readonly class="form-control" id="receiver-city">
                                    </div>
                                    {{-- <p>City: <span style="font-weight: bold" id="receiver-city"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="receiver-state" class="font-weight-bold">State/Province:</label>
                                        <input type="text" readonly class="form-control" id="receiver-state">
                                    </div>
                                    {{-- <p>State/Province: <span style="font-weight: bold" id="receiver-state"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="receiver-zip-code" class="font-weight-bold">Zip Code:</label>
                                        <input type="text" readonly class="form-control" id="receiver-zip-code">
                                    </div>
                                    {{-- <p>Zip Code: <span style="font-weight: bold" id="receiver-zip-code"></span></p> --}}
                                </div>
                            </div>
                            <hr>
                            <h4>Sender's Address</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="sender-name" class="font-weight-bold">Name:</label>
                                        <input type="text" readonly class="form-control" id="sender-name">
                                    </div>
                                    {{-- <p>Name: <span style="font-weight: bold" id="sender-name"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="sender-number" class="font-weight-bold">Phone Number:</label>
                                        <input type="text" readonly class="form-control" id="sender-number">
                                    </div>
                                    {{-- <p>Phone Number: <span style="font-weight: bold" id="sender-number"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="sender-email" class="font-weight-bold">Email Address:</label>
                                        <input type="text" readonly class="form-control" id="sender-email">
                                    </div>
                                    {{-- <p>Email Address: <span style="font-weight: bold" id="sender-email"></span></p> --}}
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="sender-address" class="font-weight-bold">Address:</label>
                                        <input type="text" readonly class="form-control" id="sender-address">
                                    </div>
                                    {{-- <p>Address: <span style="font-weight: bold" id="sender-address"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="sender-city" class="font-weight-bold">City:</label>
                                        <input type="text" readonly class="form-control" id="sender-city">
                                    </div>
                                    {{-- <p>City: <span style="font-weight: bold" id="sender-city"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="sender-state" class="font-weight-bold">State/Province:</label>
                                        <input type="text" readonly class="form-control" id="sender-state">
                                    </div>
                                    {{-- <p>State/Province: <span style="font-weight: bold" id="sender-state"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="sender-zip-code" class="font-weight-bold">Zip Code:</label>
                                        <input type="text" readonly class="form-control" id="sender-zip-code">
                                    </div>
                                    {{-- <p>Zip Code: <span style="font-weight: bold" id="sender-zip-code"></span></p> --}}
                                </div>
                            </div>
                            <hr>
                            <h4>Booking Details</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="delivery-options" class="font-weight-bold">Delivery Options:</label>
                                        <input type="text" readonly class="form-control" id="delivery-options">
                                    </div>
                                    {{-- <p>Delivery Options: <span style="font-weight: bold" id="delivery-options"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="item-name" class="font-weight-bold">Items Name:</label>
                                        <input type="text" readonly class="form-control" id="item-name">
                                    </div>
                                    {{-- <p>Items Name: <span style="font-weight: bold" id="item-name"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="quantity" class="font-weight-bold">Quantity:</label>
                                        <input type="text" readonly class="form-control" id="quantity">
                                    </div>
                                    {{-- <p>Quantity: <span style="font-weight: bold" id="quantity"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="item-category" class="font-weight-bold">Item Category:</label>
                                        <input type="text" readonly class="form-control" id="item-category">
                                    </div>
                                    {{-- <p>Item Category: <span style="font-weight: bold" id="item-category"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="weight" class="font-weight-bold">Weight:</label>
                                        <input type="text" readonly class="form-control" id="weight">
                                    </div>
                                    {{-- <p>Weight: <span style="font-weight: bold" id="weight"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="item-value" class="font-weight-bold">Items/Goods Value:</label>
                                        <input type="text" readonly class="form-control" id="item-value">
                                    </div>
                                    {{-- <p>Items/Goods Value: <span style="font-weight: bold" id="item-value"></span></p> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="bags-specification" class="font-weight-bold">Bags Specification:</label>
                                        <input type="text" readonly class="form-control" id="bags-specification">
                                    </div>
                                    {{-- <p>Bags Specification: <span style="font-weight: bold" id="bags-specification"></span></p> --}}
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="remarks" class="font-weight-bold">Remarks:</label>
                                        {{-- <input type="text" readonly class="form-control" id="remarks"> --}}
                                        <textarea readonly class="form-control" id="remarks" rows="3"></textarea>
                                    </div>
                                    {{-- <p>Remarks: <span style="font-weight: bold" id="remarks"></span></p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                            <div class="d-flex" style="gap: 1rem;">
                                <button type="button" class="btn btn-secondary">Print</button>
                                <button class="btn btn-success">Update Order</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap.min.css">
@endsection

@section('script')
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.js"></script>
    <script>
        $(document).ready(function() {
            $('table.table').DataTable({
                stateSave: true,
                responsive: true,
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.childRowImmediate
                    }
                },
                columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                }, {
                    responsivePriority: 2,
                    targets: 5
                }]
            });

            $('#modal-xl').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var orderId = button.data('order-id');
                var order = getOrderDetails(orderId);
                var modal = $(this);
                var dateTime = new Date(order.created_at);
                var formattedDateTime = dateTime.toLocaleString();

                // Populate the modal with order details
                modal.find('#order-id').val(order.id);
                modal.find('#tracking-number').val(order.tracking_number);
                modal.find('#order-date-time').val(formattedDateTime);
                modal.find('#item-category').val(order.item_category);
                modal.find('#status').val(order.status);
                modal.find('#receiver-name').val(order.receiver_name);
                modal.find('#receiver-number').val(order.receiver_number);
                modal.find('#receiver-address').val(order.receiver_address);
                modal.find('#receiver-city').val(order.receiver_city);
                modal.find('#receiver-state').val(order.receiver_state);
                modal.find('#receiver-zip-code').val(order.receiver_zip_code);

                modal.find('#sender-name').val(order.sender_name);
                modal.find('#sender-number').val(order.sender_number);
                modal.find('#sender-email').val(order.sender_email);
                modal.find('#sender-address').val(order.sender_address);
                modal.find('#sender-city').val(order.sender_city);
                modal.find('#sender-state').val(order.sender_state);
                modal.find('#sender-zip-code').val(order.sender_zip_code);

                modal.find('#delivery-options').val(order.delivery_options);
                modal.find('#item-name').val(order.item_name);
                modal.find('#quantity').val(order.quantity);
                modal.find('#weight').val(order.weight);
                modal.find('#item-value').val(order.item_value);
                modal.find('#bags-specification').val(order.bags_specification);
                modal.find('#remarks').text(order.remarks);
            });

            function getOrderDetails(orderId) {
                var orders = {!! json_encode($orders) !!};
                var order = orders.find(function(order) {
                    return order.id === orderId;
                });
                return order;
            }

            $('.set-status').click(function() {
                var elementText = $(this).text();
                var targetInputId = $(this).data('target');
                $(targetInputId).val(elementText);
            });
        });
    </script>
@endsection
