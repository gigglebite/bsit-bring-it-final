@extends('layouts.app')
@section('Title', 'Stores | Bring It!')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">
  </head>
  <body>
    
    <h1 style="text-indent:100px;font-size: 25px">Stores</h1>
    
    <div class="center">
    <div class="container stores">
      <div style = "margin-top: 95px; position:absolute; left:350px; top:90px;">
      
      <div class="row">
        <div class="col-lg-4">
          <img src="/images/puregold.jpg" class="rounded-circle" width="140" height="140"></img>
  
          <h2 class="fw-normal" style="font-size: 25px;text-indent: 20px;">Puregold</h2>
          <h2 style="font-size: 25px;text-indent: 25px;">Pandan</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/images/johnnys.jpg" class="rounded-circle" width="140" height="140"></img>
  
          <h2 class="fw-normal"  style="font-size: 25px; text-indent: 17px">Johnny's</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/images/nepomart.jpg" class="rounded-circle" width="140" height="140"></img>
  

          <h2 class="fw-normal" style="font-size: 25px;text-indent: 12px;">Nepo Mart</h2>
          <br><br><br>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/images/sm.jpg" class="rounded-circle" width="140" height="140"></img>

          <h2 class="fw-normal" style="text-indent: 46px; font-size: 25px">SM <br>Hypermarket</h2>
          <h2 style="text-indent: 35px; font-size: 25px">Clark</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/images/robinsons.jpg" class="rounded-circle" width="140" height="140"></img>

          <h2 class="fw-normal" style="font-size: 25px;text-indent: 17px">Robinson's <br>&nbsp;&nbsp;&nbsp;&nbsp;Balibago</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/images/super8.jpg" class="rounded-circle" width="140" height="140"></img>

          <h2 class="fw-normal" style="text-indent: 30px; font-size: 25px">Super 8</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

      </div><!-- /.row -->
    </div>
    </div>
  </div>
  </div>
 
  </body>
</html>

<style>

  body {
    font-family: 'Product Sans';
    font-style: normal;
    font-weight: 400;
    src: local('Product Sans'), url('https://fonts.cdnfonts.com/s/13998/ProductSans-Regular.woff') format('woff');
}

</style>
@endsection