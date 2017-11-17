<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    public function trangchu()
    {
        return view('nguoidung.trangchu');
    }

    public function sanpham()
    {
        return view('nguoidung.sanpham');
    }

    public function hangcanban()
    {
        return view('nguoidung.hangcanban');
    }

    public function dangky()
    {
        return view('nguoidung.dangky');
    }

    public function dangnhap()
    {
        return view('nguoidung.dangnhap');
    }

    public function nguoidung()
    {
        return view('nguoidung.nguoidung');
    }

}
