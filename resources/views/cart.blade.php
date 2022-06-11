@extends('layouts.app')
@section('Title', 'Cart | Bring It!')
@section('content')
<html>
    <title>Check Out</title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            #cart-item {
                border: 1px solid rgb(206, 206, 206);
                padding: 10px;
                max-width: 1200px;
                font-family: 'Product Sans', sans-serif;
            }

            #quantity {
                width: 80px;
                text-align: center;
                border: none;
                font-weight: bolder;
                font-family: 'Product Sans', sans-serif;
            }

            #btn-qty {
                font-size: 20px;
                max-width: 50px;
                max-height: 40px;
                text-align: center;
                border-radius: 5px;
            }

            #preview {
                object-fit: cover;
                max-height: 120px;
                width: 250px;
                margin: 20px;
            }

            #cart-header {
                border: none;
                max-width: 1200px;
                margin-bottom: 15px;
                font-family: 'Product Sans', sans-serif;
            }

            #cart-footer {
                max-width: 1200px;
                border: none;
                text-align: right;
                font-family: 'Product Sans', sans-serif;
            }

            .card-body button {
                border-radius: 10px;
                width: 300px;
                padding: 10px;
                font-family: 'Product Sans', sans-serif;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid mx-auto" id="cart">
            @if(Session::has('success'))
            <div class="row">
                <div class="col-sm-6 col-md-4 cold-md-offset-4 col-sm-offset-3">
                    <div id="charge-message" class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>    
                </div>
            </div>
            @endif
        @if(Session::has('cart'))
                <div class="card-header bg-transparent mx-auto" id="cart-header"><h4><strong>My Cart</strong></h4></div>
                @foreach($products as $product)
                <div class="card mb-0 mx-auto" id="cart-item">
                    <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ $product['item']['imagePath'] }}" class="img-fluid rounded-start" alt="item-image" id="preview">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $product['item']['title'] }}</strong></h5>
                            <p class="card-text"><h5>PHP {{ $product['price'] }}</h5></p>
                            <div class="btn-group" role="group">
                               <a href = "/reduce/{{ $product['item']['id'] }}"><button type="button" class="btn btn-success" id="btn-qty">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                                    </svg>
                                </button></a>
                                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="{{ $product['qty'] }}" min="1" max="100" disabled>
                                <a href = "/add-more/{{ $product['item']['id'] }}"><button type="button" class="btn btn-success" id="btn-qty">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                    </svg>
                                </button></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
        
                <div class="card text-right mx-auto" id="cart-footer">
                    <div class="card-body d-flex justify-content-between">
                        <h4 class="card-title"><strong>Sub Total ({{ Session::has('cart') ? Session::get('cart')->totalQty : '0'}} items)</strong></h4>
                        <h4 class="card-title"><strong>Total: {{ $totalPrice }}</strong></h4>
                    </div>
                    <div class="card-body">
                        <a href="/check-out"><button class="btn btn-success">
                            <h5><strong>Proceed to Checkout</strong></h5>
                        </button></a>
                    </div>
                </div>
                @else
                <div class="d-flex align-items-center justify-content-center">
                <div style="margin-top: 200px;">
                    <h2 style="color: grey; opacity: 40%;">No Items in Cart!</h2>
                    <div class="col-md-12 text-center">
                    <a href="/products"><button style="margin-top: 10px;" type="button" class="btn btn-success">
            Go Shopping
        </button>
        </a>
        </div>
            </div>
        </div>
    @endif
    </div>
    </body>
</html>
@endsection