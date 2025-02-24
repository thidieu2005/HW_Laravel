<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 90%;
            margin: auto;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            border-bottom: 2px solid red;
            padding-bottom: 5px;
        }

        .form-container {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            padding: 10px;
        }

        input,
        select,
        button {
            padding: 8px;
            margin: 5px 0;
            display: block;
            width: 100%;
        }

        .btn {
            background-color: red;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Thêm Sản Phẩm</div>

        @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
        @endif

        <div class="form-container">
            <form action="/products/store" method="POST" enctype="multipart/form-data">
                @csrf
                <label>Danh mục sản phẩm</label>
                <select name="category" required>
                    <option value="Điện thoại di động">Điện thoại di động</option>
                    <option value="Máy tính bảng">Máy tính bảng</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Phụ kiện">Phụ kiện</option>
                    <option value="Đồng hồ">Đồng hồ</option>
                </select>

                <label>Thông tin</label>
                <select name="info" required>
                    <option value="Sản phẩm mới nhất">Sản phẩm mới nhất</option>
                    <option value="Sản phẩm nổi bật">Sản phẩm nổi bật</option>
                    <option value="Sản phẩm giảm giá">Sản phẩm giảm giá</option>
                </select>

                <label>Tên sản phẩm</label>
                <input type="text" name="name" required>

                <label>Giá mới</label>
                <input type="number" name="price" required>

                <label>Giá cũ</label>
                <input type="number" name="old_price" required>

                <label>Chọn ảnh sản phẩm</label>
                <input type="file" name="image" accept="image/*" required>

                <button type="submit" class="btn">Lưu sản phẩm</button>
            </form>

            <a href="/products/show">
                <button class="btn" style="background-color: blue;">Hiển Thị Sản Phẩm</button>
            </a>
        </div>
    </div>
</body>

</html>