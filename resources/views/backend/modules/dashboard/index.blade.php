@extends('backend.layouts.app')


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

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            @if (isset($orders))
                                <h3>{{ $orders }}</h3>
                            @else
                                <h3>150</h3>
                            @endisset
                            <p>Orders</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        @if (isset($users))
                            <h3>{{ $users }}</h3>
                        @else
                            <h3>44</h3>
                        @endisset
                        <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col">
            <!-- PIE CHART -->
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Pie Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="pieChart" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
</div>
</div>
@endsection

@section('style')
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $.ajax({
            url: "{{ url('admin/order/chart-js') }}",
            method: 'GET',
            success: function(response) {
                console.log(response);
                var donutData = {
                    labels: [
                        'Pending',
                        'Order Received',
                        'Order Processing',
                        'To be Shipped',
                        'Order Shipped',
                        'In Transit',
                        'Out for Delivery',
                        'Delivery Attempted',
                        'Delivered',
                    ],
                    datasets: [{
                        data: [
                            response.pending,
                            response.order_received,
                            response.order_processing,
                            response.to_be_shipped,
                            response.order_shipped,
                            response.in_transit,
                            response.out_for_delivery,
                            response.delivery_attempted,
                            response.delivered,
                        ],
                        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                    }]
                }

                var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
                var pieData = donutData;
                var pieOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                }

                new Chart(pieChartCanvas, {
                    type: 'pie',
                    data: pieData,
                    options: pieOptions
                })
            },
            error: function(xhr, status, error) {

            }
        });

    });
</script>
@endsection
