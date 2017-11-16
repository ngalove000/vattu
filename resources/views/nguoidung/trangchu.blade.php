@extends('nguoidung.master')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('image/1.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{url('image/2.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{url('image/3.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="cach15"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{--<div class="tieudemuc">--}}
                {{--<span><b>Hàng Cần Bán Mới</b></span>--}}
                {{--</div>--}}
                <div class="tieudemuc">
                    <h2>Hàng Cần Bán Mới</h2>
                </div>
            </div>
        </div>

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
                                TILT SUPER 300 EC 100ml
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
        </div>

        <div class="row">
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
        </div>

        <div class="cach15"></div>

        <div class="row">
            <div class="xemthem">
                <a href="" class="btn btn-outline-primary"> Xem Thêm Hàng Cần Bán</a>
            </div>
        </div>

        <div class="cach"></div>
    </div>
@endsection