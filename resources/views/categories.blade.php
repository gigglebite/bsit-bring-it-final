@extends('layouts.app')
@section('Title', 'Categories | Bring It!')
@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/product-sans:200,400,600" rel="stylesheet">
                

    <title>Home - Bring It!</title>
  </head>
<body>
    <div class="container">
        <?php $rowcounter = 0;?>
            <div class="row d-flex justify-content-center">
                <?php foreach ($categories as $category): ?>
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <a href="/products/{{ $category->getCategory() }}"><img src="{{ $category->imagePath }}" class="each_category" alt="categories"></a>
                    </div>
        <?php $rowcounter += 1;?>
        <?php if ($rowcounter == 3):?>
            </div>
                <div class="row d-flex justify-content-center">
        <?php endif;?>
        <?php endforeach; ?>
    </div>
        </div>
</body>
<style>

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
