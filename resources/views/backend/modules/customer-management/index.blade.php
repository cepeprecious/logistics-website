@extends('backend.layouts.app')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Customer Management</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="card-title fw-bold">
                                Users
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped" style="width: 100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>NAME</th>
                                        <th>USERNAME</th>
                                        <th>EMAIL ADDRESS</th>
                                        <th>PHONE NUMBER</th>
                                        {{-- <th>ROLE</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($users) && count($users) > 0)
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->username }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    {{ $user->phone_number }}
                                                </td>
                                                {{-- <td>
                                                    {{ $user->role }}
                                                </td> --}}
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
@endsection

@section('style')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap.min.css">
@endsection

@section('script')
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> --}}
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.js"></script>
    <script>
        $(document).ready(function() {
            $('table.table').DataTable({
                stateSave: true,
                // responsive: true,
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.childRowImmediate
                    }
                }
            });
        });
    </script>
@endsection
