@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Thêm sản phẩm mới</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="p-4 shadow rounded bg-light">
        @csrf

        <div class="mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea name="description" class="form-control" placeholder="Nhập mô tả"></textarea>
        </div>

        <div class="mb-3 row">
            <div class="col-md-6">
                <label class="form-label">Giá</label>
                <input type="number" name="price" class="form-control" placeholder="Nhập giá" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Số lượng</label>
                <input type="number" name="quantity" class="form-control" placeholder="Nhập số lượng" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Chọn ảnh sản phẩm</label>
            <input type="file" name="avatar" class="form-control">
        </div>

        <button type="submit" class="btn btn-success w-100">Lưu</button>
    </form>
</div>
@endsection