<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    private $apiUrl = "https://656ca88ee1e03bfd572e9c16.mockapi.io/products";
    // Lấy danh sách sản phẩm									
    public function index()
    {
        $response = Http::get($this->apiUrl);
        if ($response->successful()) {
            $products = $response->json();
        } else {
            $products = [];
        }

        dd($products); // Debug dữ liệu API trả về
        return view('products.index', compact('products'));
    }

    // Hiển thị form tạo sản phẩm									
    public function create()
    {
        return view('products.create');
    }
    // Lưu sản phẩm mới									
    public function store(StoreProductRequest $request)
    {
        // Lấy dữ liệu từ request và thêm mặc định cho 'description'
        $data = $request->validated();
        $data['description'] = $data['description'] ?? 'Không có mô tả';

        // Gửi dữ liệu lên API
        $response = Http::post($this->apiUrl, $data);

        // Kiểm tra phản hồi từ API
        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được tạo!');
        }
        return back()->withErrors(['message' => 'Lỗi khi tạo sản phẩm']);
    }

    // Hiển thị form chỉnh sửa sản phẩm									
    public function edit($id)
    {
        $response = Http::get("$this->apiUrl/$id");
        if ($response->successful()) {
            $product = $response->json();
            return view('products.edit', compact('product'));
        }
        return redirect()->route('products.index')->withErrors(['message' => 'Không tìm thấy sản phẩm']);
    }
    // Cập nhật sản phẩm									
    public function update(StoreProductRequest $request, $id)
    {
        $response = Http::put("$this->apiUrl/$id", $request->validated());
        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật!');
        }
        return back()->withErrors(['message' => 'Lỗi khi cập nhật sản phẩm']);
    }
    // Xóa sản phẩm									
    public function destroy($id)
    {
        $response = Http::delete("$this->apiUrl/$id");
        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa!');
        }
        return back()->withErrors(['message' => 'Lỗi khi xóa sản phẩm']);
    }
}
