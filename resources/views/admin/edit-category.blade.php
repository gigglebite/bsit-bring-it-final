@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Edit Category Details</h1>
            @if ($errors->any())
            <div class ="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            </div>
            @endif
            <form action="/admin/save-edit-category" method="POST">
                <input type="hidden" name="id" value="{{ $category->getId() }}"/>
                @csrf
                <div class="form-group">
                    <label>Image Path</label>
                    <input type="text" class="form-control" name="imagePath" value="{{ $category->getImagePath() }}"/>
                </div>
                <br>
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="category" value="{{ $category->getCategory() }}"/>
                </div>
                <br>
                <button type="submit" class="btn btn-primary"> Save Changes </button>
                </form>
        </div>
    </div>
</div>
@endsection