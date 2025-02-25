@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Chỉnh sửa sản phẩm</h2>

    <form action="{{ route('products.update', $product['id']) }}" method="POST" enctype="multipart/form-data" class="p-4 shadow rounded bg-light">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" value="{{ $product['name'] }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea name="description" class="form-control">{{ $product['description'] }}</textarea>
        </div>

        <div class="mb-3 row">
            <div class="col-md-6">
                <label class="form-label">Giá</label>
                <input type="number" name="price" class="form-control" value="{{ $product['price'] }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Số lượng</label>
                <input type="number" name="quantity" class="form-control" value="{{ $product['quantity'] }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Ảnh sản phẩm</label><br>
            @if(isset($product['avatar']))
            <img src="{{ $product['avatar'] }}" class="img-thumbnail mb-2" width="150">
            @endif
            <input type="file" name="avatar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary w-100">Cập nhật</button>
    </form>
</div>
@endsection