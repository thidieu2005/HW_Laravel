<?php

use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// Route::get('/', function () {
//     return view('sum');
// });

// use App\Http\Controllers\SumController;

// Route::get('/sum', [SumController::class, 'index']);
// Route::post('/sum', [SumController::class, 'calculate']);

// // use Illuminate\Support\Facades\Route;

// Route::get('/no-controller-no-view', function () {
//     return "Kết quả trả về không sử dụng Controller và View";
// });

// use App\Http\Controllers\MyController1;

// Route::get('/controller-no-view', [MyController1::class, 'showText']);


// use App\Http\Controllers\ViewController;

// Route::get('/controller-view', [ViewController::class, 'showView']);


// Route::get('/controller-view-variable', [ViewController::class, 'showVariable']);
// // ------------------------------------------------------------------------------------------------
// //vií duụ veêề route group

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return "Trang Dashboard";
//     });

//     Route::get('/profile', function () {
//         return "Trang cá nhân";
//     });

//     Route::get('/settings', function () {
//         return "Trang cài đặt";
//     });
// });
//-----------------------------------------------------------------
//use App\Http\Controllers\PostController;

// Route::get('/PostController', [PostController::class, 'index']);
// Route::resource('Post', PostController::class); //chay index Post

// use App\Http\Controllers\SignupController;

// Route::get('/signup', [SignupController::class, 'index']);
// Route::post('/signup', [SignupController::class, 'displayInfor']);

// use App\Http\Controllers\GoodController;

// Route::get('/goodgood', [GoodController::class, 'getData']);

//use App\Http\Controllers\ProductController;

//Route::get('/products', [ProductController::class, 'index']);
//Route::post('/products/store', [ProductController::class, 'store']);
//Route::get('/products/show', [ProductController::class, 'show']);
//Route::get('/products/clear', [ProductController::class, 'clear']);


// use App\Http\Controllers\ProductController;

// Route::resource('products', ProductController::class);


// use App\Http\Controllers\PageController;

Route::get('index', [
    'as' => 'trangchu',
    'uses' => 'PageController@getIndex'
]);

Route::get('loai-san-pham', [
    'as' => 'loaisanpham',
    'uses' => 'PageController@getLoaiSp'
]);
Route::get('chi-tiet-san-pham', [
    'as' => 'chitietsanpham',
    'uses' => 'PageController@geChitiet'
]);
Route::get('lien_he', [
    'as' => 'lienhe',
    'uses' => 'PageController@geLienhe'
]);
Route::get('gioi_thieu', [
    'as' => 'about',
    'uses' => 'PageController@getAbout'
]);
