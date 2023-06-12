@extends('frontend.customer-panel.layouts.app')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Order</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <form action="{{ url('order-submit') }}" method="POST">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Receiver's Shipping Address</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="receiver-name" name="receiver-name" placeholder="Enter ..." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="receiver-number" name="receiver-number" placeholder="Enter ..." required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address (Street Name, Building, House No., Barangay) <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="receiver-address" name="receiver-address" placeholder="Enter ..." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="receiver-city" name="receiver-city" placeholder="Davao City" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State/Province <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="receiver-state" name="receiver-state" placeholder="Davao Del Sur" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zip Code <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="receiver-zip-code" name="receiver-zip-code" placeholder="1111" required>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Sender Information</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full-name">Full Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="sender-name" name="sender-name" placeholder="Enter name" value="{{ auth()->user()->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone-number">Phone Number <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="sender-number" name="sender-number" placeholder="09123456789" value="{{ auth()->user()->phone_number }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="sender-email" name="sender-email" placeholder="sampleemail@gmail.com" value="{{ auth()->user()->email }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address (Street Name, Building, House No., Barangay) <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="sender-address" name="sender-address" placeholder="Enter address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="sender-city" name="sender-city" placeholder="Davao City" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="state">State/Province <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="sender-state" name="sender-state" placeholder="Davao Del Sur" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zip-code">Zip Code <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="sender-zip-code" name="sender-zip-code" placeholder="1111" required>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Booking Information</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <input type="hidden" name="status" value="Pending">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="delivery-options">Delivery Options <span style="color: red">*</span></label>
                                    <select class="form-control" id="delivery-options" name="delivery-options" required onchange="updateFee()">
                                        <option>Drop off to branches</option>
                                        <option>Door-to-Door Pickup</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-right">
                                    <h1>Fee: <span id="fee" name="fee" class="text-primary">0</span></h1>
                                    <input type="hidden" id="fee-input" name="fee" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="item-name">Item Name</label>
                                    <input type="text" class="form-control" id="item-name" name="item-name" placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="item-category">Item Category <span style="color: red">*</span></label>
                                    <select class="form-control" id="item-category" name="item-category" required>
                                        <option>Parcel</option>
                                        <option>Documents</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="weight">Weight(kg) <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter ..." required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="item-value">Items/Goods Value <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="item-value" name="item-value" placeholder="Enter ..." required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bags-specification">Bags Specification <span style="color: red">*</span></label>
                                    <select class="form-control" id="bags-specification" name="bags-specification" required>
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="remarks">Remarks/Additional Instruction</label>
                                    <textarea class="form-control" id="remarks" name="remarks" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div>
                            <button type="submit" name="order-submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('style')
@endsection

@section('script')
    <script>
        function updateFee() {
            var deliveryOption = document.getElementById("delivery-options").value;
            var fee = 0; // Default fee value

            if (deliveryOption === "Door-to-Door Pickup") {
                fee = 100; // Update fee for door-to-door delivery
            } else if (deliveryOption === "Drop off to branches") {
                fee = 50; // Update fee for pickup
            }

            document.getElementById("fee").textContent = fee;
            document.getElementById("fee-input").value = fee; // Set fee value in the hidden input field
        }
    </script>
@endsection
