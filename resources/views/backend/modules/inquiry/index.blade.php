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
              <a href="{{ url('admin/inquiry-export') }}" class="float-right">
                Export
              </a>
            </div>

            <div class="card-body">
              <table class="table table-striped" style="width: 100%">
                <thead class="thead-dark">
                  <tr>
                    <th>NAME</th>
                    <th>EMAIL ADDRESS</th>
                    <th>PHONE NUMBER</th>
                    <th>MESSAGE</th>
                    <th class="text-right action-width">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  @if (isset($inquiries) && count($inquiries) > 0)
                    @foreach ($inquiries as $inquiry)
                      <tr>
                        <td style="width: 100px">
                          {{ $inquiry->name }}
                        </td>
                        <td style="width: 100px">
                          {{ $inquiry->email_address }}
                        </td>
                        <td style="width: 100px">
                          {{ $inquiry->phone_number }}
                        </td>
                        <td>
                          {{ $inquiry->message }}
                        </td>
                        <td class="action-width">
                          {{-- <a href="{{ url('admin/inquiry/' . $inquiry->id) }}/edit" class="btn btn-secondary w-100 btn-width">Edit</a> --}}
                          {{-- <a href="" class="btn btn-danger w-100 btn-width" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $inquiry->id }}').submit();">Delete</a>
                          <form id="delete-form-{{ $inquiry->id }}" action="{{ url('admin/inquiry/' . $inquiry->id) }}" method="POST" class="d-none">
                            @csrf @method('delete')
                          </form> --}}
                          {{-- Delete Modal Button --}}
                          <button type="button" class="btn btn-danger w-100 btn-width" data-bs-toggle="modal" data-bs-target="#modal-{{ $inquiry->id }}">
                            Delete
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

  @if (isset($inquiries) && count($inquiries) > 0)
    @foreach ($inquiries as $inquiry)
      <div class="modal fade" id="modal-{{ $inquiry->id }}" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-danger">
              <h4 class="modal-title">Warning!</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body text-start">
              <p>Are you sure you want to delete this <span class="fw-bold">Inquiry</span>?</p>
              <p><span class="fw-bold">Name:</span> {{ $inquiry->name }}</p>
              <p><span class="fw-bold">Email Address:</span> {{ $inquiry->email_address }}</p>
              <p><span class="fw-bold">Phone Number:</span> {{ $inquiry->phone_number }}</p>
              <p><span class="fw-bold">Message:</span> {{ $inquiry->message }}</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
              <a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $inquiry->id }}').submit();">Delete</a>
              <form id="delete-form-{{ $inquiry->id }}" action="{{ url('admin/inquiry/' . $inquiry->id) }}" method="POST" class="d-none">
                @csrf @method('delete')
              </form>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endif
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
        },
        columnDefs: [{
          responsivePriority: 1,
          targets: 0
        }, {
          responsivePriority: 2,
          targets: 4
        }]
      });
    });
  </script>
@endsection
