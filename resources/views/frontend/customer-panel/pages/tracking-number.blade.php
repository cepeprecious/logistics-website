@extends('frontend.customer-panel.layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="padding-top: 100px">
            <div>
                <div class="container">
                    <h1>
                        Thank you for your order! <br> <br> We are thrilled to let you know that your order has been 
                        received and we have generated a special tracking number for you. This tracking 
                        number will enable you to easily track your package throughout its journey. 
                        Kindly take note of your tracking number for your convenience.
                    </h1>
                    <p class="tracking-number mt-5">{{ session('trackingNumber') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
    
@section('style')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Geologica&display=swap" rel="stylesheet">
<style>
    h1 {
        text-align: justify;
        font-size: 35px;
        font-family: 'Geologica', sans-serif;
    }
    .tracking-number {
        font-size: 50px;
        font-weight: bold;
        color: #1e88e5;
        text-align: center
    }
</style>
@endsection

@section('script')

@endsection
