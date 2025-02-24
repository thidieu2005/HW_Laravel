<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Http\Requests\SignupRequest;

// class SignupController extends Controller
// {
//     public function index()
//     {
//         return view('signup');
//     }

//     public function displayInfor(SignupRequest $request)
//     {
//         $user = [
//             'name' => $request->input('name'),
//             'age' => $request->input('age'),
//             'date' => $request->input('date'),
//             'phone' => $request->input('phone'),
//             'web' => $request->input('web'),
//             'address' => $request->input('address')
//         ];

//         return view('signup')->with('user', $user);
//     }
// }
//---------------------------------SESSION
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\signupRequest;
use Illuminate\Support\Facades\Session;

class signupController extends Controller
{
    public function index()
    {
        // Lấy danh sách người dùng từ session (nếu có)
        $users = Session::get('users', []);
        return view('signup', compact('users'));
    }

    public function displayInfor(signupRequest $request)
    {
        // Lấy dữ liệu từ form
        $newUser = [
            'name' => $request->input("name"),
            'age' => $request->input("age"),
            'date' => $request->input("date"),
            'phone' => $request->input("phone"),
            'web' => $request->input("web"),
            'address' => $request->input("address"),
        ];

        // Lấy danh sách hiện tại trong session, thêm người mới vào
        $users = Session::get('users', []);
        $users[] = $newUser;
        Session::put('users', $users);

        return view('signup', compact('users'));
    }
}
