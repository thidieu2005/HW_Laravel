<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showView()
    {
        return view('message');
    }
    public function showVariable()
    {
        $message = "Kết quả trả về từ một biến có sử dụng Controller và View";
        return view('message-variable', compact('message'));
    }
}
