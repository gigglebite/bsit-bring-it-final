@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Add a New Product</h1>
            @if ($errors->any())
            <div class ="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            </div>
            @endif
            <form action="/admin/save-new-product" method="POST">
                @csrf
                <div class="form-group">
                    <label>Image Path</label>
                    <input type="text" class="form-control" name="imagePath" required/>
                </div>
                <br>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" required/>
                </div>
                <br>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" required/>
                </div>
                <br>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category" class="form-control">
                        <option value="snacks">Snacks</option>
                        <option value="beer">Beer</option>
                        <option value="drinks">Drinks</option>
                        <option value="staples">Staples</option>
                        <option value="bakery">Bakery</option>
                        <option value="breakfast">Breakfast</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary"> Save Changes </button>
                </form>
        </div>
    </div>
</div>
@endsection