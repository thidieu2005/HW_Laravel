<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function index()
    {
        return view('sum');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'numA' => 'required|numeric',
            'numB' => 'required|numeric',
        ]);

        $sum = $request->numA + $request->numB;

        // Trả kết quả về view
        return view('sum', compact('sum'));
    }
}
