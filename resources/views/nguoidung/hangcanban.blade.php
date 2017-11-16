@extends('nguoidung.master')
@section('content')
    <div class="container">
        <div class="cach15"></div>
        <div class="row">
            <div class="col-md-12 tieudesp">
                <h1><b>Danh Sách Hàng Cần Bán</b></h1>
            </div>
        </div>
        <div class="row">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh Sách Hàng Cần Bán</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-5">
                <input id="timkiem" type="text" class="form-control"
                       placeholder="Tìm kiếm hàng cần bán">
            </div>
            <div class="col-md-1">
                <button id="btntimkiem" class="btn btn-primary">Tìm</button>
            </div>

            <div class="col-md-3">
            </div>

            <div class="col-md-3">
                <select class="form-control" name="" id="sapxep">
                    <option value="1">Sắp Xếp</option>
                    <option value="2">Giá giảm dần</option>
                    <option value="3">Giá tăng dần</option>
                    <option value="4">Mới nhất</option>
                    <option value="5">Bán chạy nhất</option>
                </select>
            </div>
        </div>

        <div class="cach15"></div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 hvr-float">
                <div class="motsp">
                    <div class="anhsp">
                        <a href="{{url('san-pham')}}">
                            <img class="img-fluid" src="{{url('image/sp.png')}}" alt="">
                        </a>
                    </div>
                    <div class="thongtinnhanhsp">
                        <a href="">
                            <div class="tensp col-md-12">
                                TILT SUPER 400 EC 100ml
                            </div>
                            <div class="giasp col-md-12">
                                1000000 VNĐ
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 hvr-float">
                <div class="motsp rounded">
                    <div class="anhsp">
                        <a href="">
                            <img class="img-fluid" src="{{url('image/sp.png')}}" alt="">
                        </a>
                    </div>
                    <div class="thongtinnhanhsp">
                        <a href="">
                            <div class="tensp col-md-12">
                                Tên Sản Phẩm Cần Bán
                            </div>
                            <div class="giasp col-md-12">
                                1000000 VNĐ
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 hvr-float">
                <div class="motsp rounded">
                    <div class="anhsp">
                        <a href="">
                            <img class="img-fluid" src="{{url('image/sp.png')}}" alt="">
                        </a>
                    </div>
                    <div class="thongtinnhanhsp">
                        <a href="">
                            <div class="tensp col-md-12">
                                Tên Sản Phẩm Cần Bán
                            </div>
                            <div class="giasp col-md-12">
                                1000000 VNĐ
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 hvr-float">
                <div class="motsp rounded">
                    <div class="anhsp">
                        <a href="">
                            <img class="img-fluid" src="{{url('image/sp.png')}}" alt="">
                        </a>
                    </div>
                    <div class="thongtinnhanhsp">
                        <a href="">
                            <div class="tensp col-md-12">
                                Tên Sản Phẩm Cần Bán
                            </div>
                            <div class="giasp col-md-12">
                                1000000 VNĐ
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{--<div class="col-md-3">--}}
            {{--<div class="tuychontrai">--}}
            {{--<form action="">--}}
            {{--<input class="form-control" type="text" style="width: 100%">--}}
            {{--</form>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-9">--}}
            {{--<div class="row">--}}
            {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hvr-float">--}}
            {{--<div class="motsp">--}}
            {{--<div class="anhsp">--}}
            {{--<a href="{{url('san-pham')}}">--}}
            {{--<img class="img-fluid" src="{{url('image/sp.png')}}" alt="">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="thongtinnhanhsp">--}}
            {{--<a href="">--}}
            {{--<div class="tensp col-md-12">--}}
            {{--TILT SUPER 400 EC 100ml--}}
            {{--</div>--}}
            {{--<div class="giasp col-md-12">--}}
            {{--1000000 VNĐ--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hvr-float">--}}
            {{--<div class="motsp rounded">--}}
            {{--<div class="anhsp">--}}
            {{--<a href="">--}}
            {{--<img class="img-fluid" src="{{url('image/sp.png')}}" alt="">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="thongtinnhanhsp">--}}
            {{--<a href="">--}}
            {{--<div class="tensp col-md-12">--}}
            {{--Tên Sản Phẩm Cần Bán--}}
            {{--</div>--}}
            {{--<div class="giasp col-md-12">--}}
            {{--1000000 VNĐ--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hvr-float">--}}
            {{--<div class="motsp rounded">--}}
            {{--<div class="anhsp">--}}
            {{--<a href="">--}}
            {{--<img class="img-fluid" src="{{url('image/sp.png')}}" alt="">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="thongtinnhanhsp">--}}
            {{--<a href="">--}}
            {{--<div class="tensp col-md-12">--}}
            {{--Tên Sản Phẩm Cần Bán--}}
            {{--</div>--}}
            {{--<div class="giasp col-md-12">--}}
            {{--1000000 VNĐ--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
    <div class="cach15"></div>
@endsection