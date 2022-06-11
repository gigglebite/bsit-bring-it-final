@extends('layouts.app')

@section('content')
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/product-sans:200,400,600" rel="stylesheet">
    <title>Home - Bring It!</title>
</head>
  <body>
    <div class="index">
      <img src="/images/home_bg.png" alt="home">
    </div>
    <div class="bring_it">
      <h1 class="text-center">Order your<br>Daily Groceries</h1>
      <h2 class="text-center">#BringIt</h2>
    </div>
    <div class="categories">
    <table class="categories_table">
      <tr>
        <th><h2>Categories</h2></th>
      </tr>
      <tr>
        <?php foreach ($categories as $category): ?>
        <td><a href="/products/{{ $category->getCategory() }}"><img src="{{ $category->imagePath }}" class="other_category" alt="categories"></a></td>
        <?php endforeach; ?>
      </tr>
    </table>
    </div>
    <div class="products">
    <img src="/images/products_bg.png" alt="products"  class="mx-auto">
    <h1 class="text-center" style="margin-left: 55px;">Add items to your cart</h1>
    </div>
    <div class="products_menu">
    <table class="products_table">
      <tr>
        <th><h2>Products</h2></th>
      </tr>
      <tr>
      <td><a href = "/products"><img src="/images/P1.png" alt="every_products" class="each_product"></a></td>
      <td><a href = "/products"><img src="/images/P2.png" alt="every_products" class="other_product"></a></td>
      <td><a href = "/products"><img src="/images/P3.png" alt="every_products" class="other_product"></a></td>
      </tr>
    </table>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <style>

      /*-------HOME-------*/

      .index {
        margin-top: 5px;
        justify-content: center;
      }

      .index img {
        width: 80%;
        height: 60%;
        margin-left: 10%;
        position: absolute;
      }

      .bring_it h1{
        align-content: center;
        font-family: 'Product Sans', sans-serif;
        font-size: 60px;
        font-weight: 600;
        color: rgb(0, 0, 0);
        margin-left: 60px;
        position: absolute;
        left: 500px;
        top: 265px;
        text-shadow: 1px 1px 1px #000000;
        line-height: 65px;
      }

      .bring_it h2{
        font-family: 'Product Sans', sans-serif;
        font-size: 30px;
        font-weight: 600;
        color: rgb(249, 196, 62);
        margin-left: 50px;
        padding-bottom: 500px;
        position: absolute;
        left: 660px;
        top: 415px;
      }

      .categories {
        position: relative;
        margin-top: 500px;
        margin-bottom: 50px;
      }


      table {
        margin-left: auto;
        margin-right: auto;
      }

    

      .categories h2{
        font-family: 'Product Sans', sans-serif;
        font-size: 30px;
        font-weight: 600;
        color: rgb(0, 0, 0);
        margin-left: 5px;
      }

      .td_size {
        width: 50px;
        height: 50px;
      }

      .each_category {
        width: 150px;
        height: 150px;
        transition: 0.2s;
      }

      .other_category {
        width: 150px;
        height: 150px;
        margin-left: 50px;
        transition: 0.2s;
      
      }

      th {
        padding-bottom: 20px;
      }

      .categories img[alt="categories"]:hover {
        transform: scale(0.8);
        transition: 0.2s;}


      .products img[alt="products"]{
        width: 80%;
        height: 60%;
        left: 10%;
        position: absolute;
      }
      
      .products h1{
        font-family: 'Product Sans', sans-serif;
        font-size: 60px;
        font-weight: 600;
        color: rgb(255, 255, 255);
        margin: 0px;
        position: absolute;
        left: 400px;
        top: 1070px;
        text-shadow: 1px 1px 10px #000000;
      }

      .products_menu h2{
        font-family: 'Product Sans', sans-serif;
        font-size: 30px;
        font-weight: 600;
        color: rgb(0, 0, 0);
        margin-left: 5px;
      }

      .products_table {
        margin-top:530px;
      }

      .each_product {
        width: 350px;
        height: 350px;
        transition: 0.2s;
      }

      .other_product {
        width: 350px;
        height: 350px;
        margin-left: 50px;
        transition: 0.2s;
      }

      .every_products {
        position: relative;
        margin-top: 500px;
        margin-bottom: 50px;
      }

      .products_menu img[alt="every_products"]:hover {
        transform: scale(0.8);
        transition: 0.2s;}


    </style>
  </body>
</html>
@endsection