<!-- <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Http\ProductRequest;
// use Illuminate\Support\Facades\Session;

// class ProductController extends Controller
// {
//     public function index()
//     {
//         return view('product_form');
//     }

//     public function store(ProductRequest $request)
//     {

//         // Lưu ảnh vào session dưới dạng base64 (kiểm tra kỹ hơn)
//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $imageName = time() . '_' . $image->getClientOriginalName(); // Đặt tên file
//             $image->storeAs('images', $imageName, 'public'); // Lưu vào storage/app/public/images
//         } else {
//             $image = null;
//         }

//         // Lưu sản phẩm vào session
//         $product = [
//             'category' => $request->input('category'),
//             'information' => $request->input('information'),
//             'name' => $request->input('name'),
//             'price' => $request->input('price'),
//             'old_price' => $request->input('old_price'),
//             'image' => $image,

//         ];

//         $products = Session::get('products', []);
//         $products[] = $product;
//         Session::put('products', $products);

//         return redirect('/products')->with('success', 'Lưu sản phẩm thành công!');
//     }


//     public function show()
//     {
//         // Lấy danh sách sản phẩm từ session
//         $products = Session::get('products', []);

//         // Kiểm tra và xử lý ảnh
//         foreach ($products as &$product) {
//             if (!empty($product['image']) && !empty($product['mimeType'])) {
//                 $product['image'] = 'data:' . $product['mimeType'] . ';base64,' . $product['image'];
//             }
//         }

//         return view('product_list', compact('products'));
//     }



//     public function clear()
//     {
//         Session::forget('products');
//         return redirect('/products')->with('success', 'Xóa tất cả sản phẩm thành công!');
//     }
// } -->
