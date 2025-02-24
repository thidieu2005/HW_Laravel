@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Thêm sản phẩm</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Tên sản phẩm" required class="form-control mb-3">
        <textarea name="description" placeholder="Mô tả" class="form-control mb-3"></textarea>
        <input type="number" name="price" placeholder="Giá" required class="form-control mb-3">
        <input type="number" name="quantity" placeholder="Số lượng" required class="form-control mb-3">
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection