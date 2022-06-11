@extends('layouts.app')
@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/product-sans:200,400,600" rel="stylesheet">
                

    <title>Home - Bring It!</title>
  </head>
<body>



<div class="container-fluid mx-auto">
    <div class="table-responsive">
    <table>
        <th><h3>Categories</h3></th>
        <tr>
        <?php $rowcounter = 0;?>
        <?php foreach ($categories as $category): ?>
        <td><a href="/products/{{ $category->getCategory() }}"><img src="{{ $category->imagePath }}" class="each_category" alt="categories"></a></td>
        <?php $rowcounter += 1;?>
        <?php if ($rowcounter == 3):?>
            <tr>
        <?php endif;?>
        <?php endforeach; ?>

        <!--
        <td><img src="/images/2.png" class="other_category" alt="categories" href=""></td>
        <td><img src="/images/3.png" class="other_category" alt="categories" href=""></td>
        </tr>
        <tr>
        <td><button type="submit" name="category" value =""><img src="/images/4.png" class="other_category" alt="categories" href=""></button></td>
        <td><img src="/images/5.png" class="other_category" alt="categories" href=""></td>
        <td><img src="/images/6.png" class="other_category" alt="categories" href=""></td>
        </tr>
        !-->
    </form> 
    </table>
</div>
</div>
</body>
<style>
table {
    border: 0px;
    margin-left:auto;
    margin-right:auto;
}

 td {
    padding-top: 30px;
    padding-left: 110px;
} 

.each_category, .other_category {
    width: 230px;
    height: 230px;
    transition: 0.2s;
}

h3 {
    
    font-family: 'Product Sans', sans-serif;
        font-weight: 600;
        color: rgb(0, 0, 0);

}

img[alt="categories"]:hover {
        transform: scale(0.8);
        transition: 0.2s;
}

</style>
@endsection
