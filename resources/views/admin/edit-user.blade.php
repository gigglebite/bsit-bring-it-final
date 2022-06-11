@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Edit User Details</h1>
            @if ($errors->any())
            <div class ="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            </div>
            @endif
            <form action="/admin/save-edit-user" method="POST">
                <input type="hidden" name="id" value="{{ $user->getId() }}"/>
                @csrf
                <div class="form-group">
                    <label>Role</label>
                    <input type="number" class="form-control" name="role_as" value="{{ $user->getRole() }}"/>
                </div>
                <br>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->getName() }}"/>
                </div>
                <br>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $user->getEmail() }}"/>
                </div>
                <br>
                <button type="submit" class="btn btn-primary"> Save Changes </button>
                </form>
        </div>
    </div>
</div>
@endsection