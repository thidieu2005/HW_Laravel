<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        @extends('layouts.app')

        @section('title', 'Product List')

        @section('content')
        <h2>Product List</h2>

        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Create Product</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>
                        @if(isset($product['avatar']) && filter_var($product['avatar'], FILTER_VALIDATE_URL))
                        <img src="{{ $product['avatar'] }}" alt="Avatar" width="50" height="50" class="rounded">
                        @else
                        <img src="https://via.placeholder.com/50" alt="No Image" width="50" height="50">
                        @endif
                    </td>

                    <td>{{ $product['name'] }}</td>
                    <td>{{ number_format($product['price'] ?? 0, 2) }} $</td>
                    <td>{{ $product['quantity'] ?? 0 }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection
    </div>
</body>

</html>