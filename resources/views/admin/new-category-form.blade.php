@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Add a New Category</h1>
            @if ($errors->any())
            <div class ="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            </div>
            @endif
            <form action="/admin/save-new-category" method="POST">
                @csrf
                <div class="form-group">
                    <label>Image Path</label>
                    <input type="text" class="form-control" name="imagePath" required/>
                </div>
                <br>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" name="category" required/>
                </div>
                <br>
                <button type="submit" class="btn btn-primary"> Save Changes </button>
                </form>
        </div>
    </div>
</div>
@endsection