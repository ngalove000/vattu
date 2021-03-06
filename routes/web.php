<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'NguoiDungController@trangchu');
Route::get('san-pham', 'NguoiDungController@sanpham');
Route::get('hang-can-ban', 'NguoiDungController@hangcanban');
Route::get('dang-ky', 'NguoiDungController@dangky');
Route::get('dang-nhap', 'NguoiDungController@dangnhap');
Route::get('nguoi-dung', 'NguoiDungController@nguoidung');