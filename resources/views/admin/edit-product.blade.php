@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Edit Product Details</h1>
            @if ($errors->any())
            <div class ="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            </div>
            @endif
            <form action="/admin/save-edit-product" method="POST">
                <input type="hidden" name="id" value="{{ $product->getId() }}"/>
                @csrf
                <div class="form-group">
                    <label>Image Path</label>
                    <input type="text" class="form-control" name="imagePath" value="{{ $product->getImagePath() }}"/>
                </div>
                <br>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $product->getTitle() }}"/>
                </div>
                <br>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description">{{ $product->getDescription() }}</textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" value="{{ $product->getPrice() }}"/>
                </div>
                <br>
                <div class="form-group">
                <label>Type</label>
                    <select name="category" class="form-control">
                        <option value="bakery" @if ($product->isBakery()) selected @endif>Bakery</option>
                        <option value="staples" @if ($product->isStaples()) selected @endif>Staples</option>
                        <option value="drinks" @if ($product->isDrinks()) selected @endif>Drinks</option>
                        <option value="breakfast" @if ($product->isBreakfast()) selected @endif>Breakfast</option>
                        <option value="beer" @if ($product->isBeer()) selected @endif>Beer</option>
                        <option value="snacks" @if ($product->isSnacks()) selected @endif>Snacks</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary"> Save Changes </button>
                </form>
        </div>
    </div>
</div>
@endsection