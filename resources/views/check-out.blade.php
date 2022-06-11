@extends('layouts.app')
@section('Title', 'Check Out')
@section('content')
<html>
    <title>
        Confirm Order
    </title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet"/>
        <style>
            body {
                font-family: 'Product Sans', sans-serif;
            }
            #summary {
                text-indent: 20px;
            }
        </style>
    </head>
    <body>
    @if(Session::has('cart'))
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                    <div class="card-header py-3">
                    <form action="/save-payment" method="POST">
                    @csrf
                        <h5 class="mb-0"><strong>Shipping Details</strong></h5>
                    </div>
                    <div class="card-body">
                        <form>

                        <div class="row mb-4">
                            <div class="col">
                            <div class="form-outline">
                                <input type="text" name ="name" id="name" class="form-control" required/>
                                <label class="form-label" for="name">Name of Receiver</label>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">

                            <div class="col">
                            <div class="form-outline">
                                <input type="text" name ="address" id="address" class="form-control" required/>
                                <label class="form-label" for="address">Address</label>
                            </div>
                            </div>
                            </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="email" id="email" class="form-control" required/>
                            <label class="form-label" for="contact_number">Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="contact_number" id="contact_number" class="form-control" required/>
                            <label class="form-label" for="contact_number">Contact Number</label>
                        </div>
                    </div>
                    </div>
                </div>
                @if(Session::has('cart'))
                <!-- Payment Details Section -->
            <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0"><strong>Payment Details</strong></h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <!-- Name input -->
                            <div class="row mb-4">
                                <div class="col">
                                <div class="form-outline">
                                <input type="hidden" name="amount" value="{{ $total }}"/>
                                    <input type="text" name="card_name" class="form-control" required/>
                                    <label class="form-label" for="card_name">Name of Card Holder</label>
                                </div>
                                </div>
                            </div>

                            <!-- Card number input -->
                            <div class="row mb-4">
                            <div class="col">
                            <div class="form-outline">
                                <input type="text" name="card_number" class="form-control" required/>
                                <label class="form-label" for="card_number">Card Number</label>
                            </div>
                            </div>
                            </div>

                            <!-- Expiration and CVV input -->
                            <div class="row mb-4">
                                <div class="col">
                                <div class="form-outline">
                                    <input type="text" name="card_expiry_month" class="form-control" required/>
                                    <label class="form-label" for="card_expiry_month">Exp. Month</label>
                                </div>
                                </div>
                                <div class="col">
                                <div class="form-outline">
                                    <input type="text" name="card_expiry_year"  class="form-control" required/>
                                    <label class="form-label" for="card_expiry_year">Exp. Year</label>
                                </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" name="cvc" class="form-control" required/>
                                        <label class="form-label" for="cvc">CVC</label>
                                    </div>
                                    </div>
                            </div>
                </div>
            </div>
        </div>
                
                <!-- Order Summary -->
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0"><strong>Order Summary</strong></h5>
                    </div>
                    <div class="card-body">
                    {{ Session::has('cart') ? Session::get('cart')->totalQty : '0'}} items
                        <ul class="list-group list-group-flush">
                        @foreach($products as $product)
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0" id="summary">
                        {{ $product['item']['title'] }}
                            <span>{{ $product['price'] }}</span>
                        </li>
                        @endforeach
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Shipping
                            <span>100.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div>
                            <strong>Total amount</strong>
                            <strong>
                                <p class="mb-0">(including VAT)</p>
                            </strong>
                            </div>
                            <span><strong>${{ $total }}</strong></span>
                        </li>
                        </ul>
                        @if ($errors->any())
            <div class ="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            @endif
                        
                        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
            @if (Session::has('error'))
            <div class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}" role="">
                {{ Session::get('error') }}
            </div>
            @endif

                        <button type="submit" class="btn btn-success btn-lg btn-block">
                        <h6><strong>Confirm purchase</strong></h6>
                        </button>
                    </div>
                    </div>
                </div>
                @endif
                </form>
                @endif
    </body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
</html>
@endsection