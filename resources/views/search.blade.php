@extends('layouts.app')
@section('Title', 'Products | Bring It!')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">
<body>
    @if(Session::has('success'))
    <div class ="row" style="display: flex; justify-content: center;">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif
    
<div class="row row-cols-1 row-cols-md-4 g-6">
<?php foreach ($products as $product): ?>
    <div class="card">
    <div id="container">

  <img src="{{ $product->imagePath }}" class="card-img-top" alt="...">
    <div id="overlay">
        <div id="text">
        <input type="hidden" name="product_id" value="<?php echo $product->getId(); ?>" />
        <h5 id="title_card">{{ $product->title }} </h5>
    <p>{{ $product->description }}<br/>
        <br><span style="color: white; font-weight: bold;">PHP {{ $product->price }}</span>
        <a href = "/add-to-cart/{{ $product->id }}"><button class="btn btn-primary" id ="button_style">
            ADD TO CART
        </button></a>
    </p>
        </div>
    </div>
</div>

<?php endforeach; ?>
  </div>
  </div>
</div>
</body>
<style>
  #products_img {
   opacity: 0.3;
}


.card-img-top {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

#overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #198754;
  border-radius: 50px;
}

#container:hover #overlay {
  opacity: 1;
}


#text {
    margin-top: 30px;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
}

span {
    padding-top: 10px;
    font-size:  20px;
    padding-left: 20px;
}

.card {
    padding-top: 10px;
    background: #198754;
    margin-top: 20px;
    margin-left: 20px;
    padding-bottom: 10px;
    width:  350px;
    border-radius: 60px;
}

#title_card {
    font-size: 35px;
}

#button_style {
    background:  #fbbf62;
    border-color: #e8cc9f;
    margin-top: 20px;
    margin-left: 50%;
    object-position: center;

}

body {
    color: white;
}
</style>
@endsection