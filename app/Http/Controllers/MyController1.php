<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController1 extends Controller
{
    public function showText()
    {
        return "Kết quả trả về có sử dụng Controller nhưng không sử dụng View";
    }
}
