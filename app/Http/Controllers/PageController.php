<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function getIndex()
    {
        return view('page.trangchu');
    }
    public function getLoaiSp()
    {
        return view('page.loai_sanpham');
    }
    public function getChitiet()
    {
        return view('page.chitiet_sanpham');
    }

    public function geLienhe()
    {
        return view('page.lienhe');
    }

    public function getAbout()
    {
        return view('page.about');
    }
}
