@extends('nguoidung.master')
@section('content')
    <div class="container">
        <div class="cach50"></div>
        <div class="row">
            <div class="col-md-6 offset-md-3 ">
                <div class="formTaiKhoan">
                    <h3 class="tieudeform"><B>ĐĂNG KÝ</B></h3>
                    <form>
                        <div class="form-group">
                            <label for="">Họ Và Tên</label>
                            <input type="text" name="hoten" class="form-control" placeholder="Nhập vào họ và tên">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Email của bạn là gì ?">
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu</label>
                            <input type="password" name="matkhau" class="form-control" placeholder="Nhập vào mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="">Số Điện Thoại</label>
                            <input type="text" name="sdt" class="form-control" placeholder="Nhập vào số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="">Địa Chỉ</label>
                            <input type="text" name="diachi" class="form-control" placeholder="Nhập vào địa chỉ">
                        </div>
                        <div class="btnDongY">
                            <button class="btn btn-primary">Đăng Ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="cach50"></div>
    </div>
@endsection