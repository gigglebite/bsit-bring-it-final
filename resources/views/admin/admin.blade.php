@extends('layouts.app')
@section('Title', 'Admin Dashboard | Bring It!')
@section('content')
<head>

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
            @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif


            <!-- Users Table !-->
            <h2> Users </h2>
            <table class="table" id="users-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->getId() }}</td>
                        <td>{{ $user->getRole() }}</td>
                        <td>{{ $user->getName() }}</td>
                        <td>{{ $user->getEmail() }}</td>
                        <td>
                            <a href="/admin/edit-user/{{ $user->getId() }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <a onclick="return confirmDelete()" href="/admin/delete-user/{{ $user->getId() }}" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>

            <!-- Categories Table !-->
            <h2> Categories </h2>
            <br>
            <div>
                <a class="btn btn-sm btn-primary" href="/admin/add-category-form">
                    Add New Category
                </a>
            </div>

            <table class="table" id="categories-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image Path</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->getId() }}</td>
                        <td>{{ $category->getImagePath() }}</td>
                        <td>{{ $category->getCategory() }}</td>
                        <td>
                            <a href="/admin/edit-category/{{ $category->getId() }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <a onclick="return confirmDelete()" href="/admin/delete-category/{{ $category->getId() }}" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
</table>
<br>
            <br>

            <h2> Products </h2>
            <!-- Products Table !-->
            <br>
            <div>
                <a class="btn btn-sm btn-primary" href="/admin/add-product-form">
                    Add New Product
                </a>
            </div>

            <table class="table" id="products-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image Path</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->getId() }}</td>
                        <td>{{ $product->getimagePath() }}</td>
                        <td>{{ $product->getTitle() }}</td>
                        <td>{{ $product->getDescription() }}</td>
                        <td>{{ $product->getPrice() }}</td>
                        <td>{{ $product->getCategory() }}</td>
                        <td>
                            <a href="/admin/edit-product/{{ $product->getId() }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            </td>
                            <td>
                            <a onclick="return confirmDelete()" href="/admin/delete-product/{{ $product->getId() }}" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Orders Table

            <table class="table" id="orders-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Cart</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->getId() }}</td>
                        <td>{{ $order->getName() }}</td>
                        <td>{{ $order->getEmail() }}</td>
                        <td>{{ $order->getAddress() }}</td>
                        <td>{{ $order->getContactNumber() }}</td>
                        <td>{{ $order->getCart() }}</td>
                        <td>
                            <a href="/edit-order/{{ $order->getId() }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <a onclick="return confirmDelete()" href="/delete-order/{{ $order->getId() }}" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> !-->
        </div>
    </div>
</div>
</body>
<style>
    body {
        background: white;
    }
</style>
<script>
$(document).ready( function () {
    $('#users-table').DataTable();
    $('#categories-table').DataTable();
    $('#products-table').DataTable();
} );
function confirmDelete() {
    var answer = confirm('Are you sure you want to delete this record? this is not reversible');
    if (answer == true) {
        return true;
    }
    return false;
}

</script>
@endsection