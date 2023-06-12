@extends('frontend.customer-panel.layouts.app')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Personal Profile</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/admin/img/user-icon.jpg') }}" alt="User profile picture" style="height: 150px; width: 150px;">
                            </div>

                            <h3 class="profile-username text-center">{{ $user->name }}</h3>
                            <p class="text-muted text-center">{{ $user->role }}</p>
                            {{-- <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Lorem Ipsum</b> <a class="float-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Lorem Ipsum</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Lorem Ipsum</b> <a class="float-right">13,287</a>
                                </li>
                            </ul> --}}

                            {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}

                            {{-- <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Followers</b> <a class="float-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="float-right">543</a>
                </li>
              </ul> --}}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Personal Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    {{-- <form class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Username:</label>
                      <div class="col-sm-10 d-flex justify-content-between align-items-center">
                        <p id="name" class="form-control-static m-0">{{ $user->username }}</p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                          <i id="editIcon" class="fa fa-pencil"></i>
                        </button>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Name:</label>
                      <div class="col-sm-10 d-flex justify-content-between align-items-center">
                        <p id="name" class="form-control-static m-0">{{ $user->name }}</p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                          <i id="editIcon" class="fa fa-pencil"></i>
                        </button>
                      </div>
                    </div>  
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Email:</label>
                      <div class="col-sm-10 d-flex justify-content-between align-items-center">
                        <p id="name" class="form-control-static m-0">{{ $user->email }}</p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                          <i id="editIcon" class="fa fa-pencil"></i>
                        </button>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Phone Number:</label>
                      <div class="col-sm-10 d-flex justify-content-between align-items-center">
                        <p id="name" class="form-control-static m-0">{{ $user->phone_number }}</p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                          <i id="editIcon" class="fa fa-pencil"></i>
                        </button>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Date Joined: </label>
                      <div class="col-sm-10 d-flex justify-content-between align-items-center">
                        <p id="name" class="form-control-static m-0">{{ $user->created_at->format('F j, Y') }}</p>
                      </div>
                    </div>
                  </form> --}}
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Username:</label>
                                            <div class="col-sm-10 d-flex justify-content-between align-items-center">
                                                <p id="username" class="form-control-static m-0">{{ $user->username }}</p>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#usernameModal">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Name:</label>
                                            <div class="col-sm-10 d-flex justify-content-between align-items-center">
                                                <p id="name" class="form-control-static m-0">{{ $user->name }}</p>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nameModal"">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email:</label>
                                            <div class="col-sm-10 d-flex justify-content-between align-items-center">
                                                <p id="email" class="form-control-static m-0">{{ $user->email }}</p>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#emailModal">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone Number:</label>
                                            <div class="col-sm-10 d-flex justify-content-between align-items-center">
                                                <p id="phone" class="form-control-static m-0">{{ $user->phone_number }}</p>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#phoneModal">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Date Joined: </label>
                                            <div class="col-sm-10 d-flex justify-content-between align-items-center">
                                                <p id="joinedDate" class="form-control-static m-0">{{ $user->created_at->format('F j, Y') }}</p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Address:</label>
                                            <div class="col-sm-10 d-flex justify-content-between align-items-center">
                                                <p id="phone" class="form-control-static m-0">{{ $user->address }}</p>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addressModal">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">City:</label>
                                            <div class="col-sm-10 d-flex justify-content-between align-items-center">
                                                <p id="phone" class="form-control-static m-0">{{ $user->city }}</p>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cityModal">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">State Provice:</label>
                                            <div class="col-sm-10 d-flex justify-content-between align-items-center">
                                                <p id="phone" class="form-control-static m-0">{{ $user->state_province }}</p>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#stateModal">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Zip Code:</label>
                                            <div class="col-sm-10 d-flex justify-content-between align-items-center">
                                                <p id="phone" class="form-control-static m-0">{{ $user->zip_code }}</p>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#zipCodeModal">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form action="{{ url('change-password') }}" method="POST" class="m-0">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="new-password" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="new-password" name="new_password" placeholder="Enter your new password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password-confirmation" name="new_password_confirmation" placeholder="Confirm your new password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="usernameModal" tabindex="-1" role="dialog" aria-labelledby="usernameModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="usernameModalLabel">Edit Username</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="usernameForm" action="{{ route('updateUsername') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="Username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Username" name="username" placeholder="Enter your username">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="nameModal" tabindex="-1" role="dialog" aria-labelledby="nameModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="nameModalLabel">Edit name</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="nameForm" action="{{ route('updateName') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="emailModalLabel">Edit email</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="emailForm" action="{{ route('updateEmail') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="phoneModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="phoneModalLabel">Edit phone</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="phoneNumberForm" action="{{ route('updatePhoneNumber') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addressModal">Edit address</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="address" action="{{ route('updateAddress') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="cityModal" tabindex="-1" role="dialog" aria-labelledby="cityModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="cityModal">Edit city</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="city" action="{{ route('updateCity') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="stateModal" tabindex="-1" role="dialog" aria-labelledby="stateModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="stateModal">Edit state/province</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="state" action="{{ route('updateStateProvince') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">State/Province</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state/province">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="zipCodeModal" tabindex="-1" role="dialog" aria-labelledby="zipCodeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="zipCodeModal">Edit zip code</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="zip_code" action="{{ route('updateZipCode') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Zip Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Enter your zip code">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                    </div>
                </form>
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
