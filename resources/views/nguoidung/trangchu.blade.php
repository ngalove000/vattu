<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sàn Vật Tư</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arsenal|Cormorant|Cormorant+Garamond|Dancing+Script|Exo|Josefin+Sans|Nunito|Pacifico|Varela+Round" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hàng Cần Bán</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hàng Cần Mua</a>
                </li>
                {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"--}}
                {{--data-toggle="dropdown"--}}
                {{--aria-haspopup="true" aria-expanded="false">--}}
                {{--Dropdown--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                {{--<a class="dropdown-item" href="#">Action</a>--}}
                {{--<a class="dropdown-item" href="#">Another action</a>--}}
                {{--<div class="dropdown-divider"></div>--}}
                {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                {{--</div>--}}
                {{--</li>--}}
            </ul>
            <a href="" class="btn btn-primary">Đăng Ký</a>
            <a href="" id="btndangnhap">Đăng Nhập</a>
        </div>
    </div>
</nav>
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

    {{--<div class="cach15"></div>--}}

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 hvr-float">
            <div class="motsp">
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
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h6>THÔNG TIN LIÊN HỆ</h6>
                Địa chỉ: 151/65B Trần Hoàng Na, P.Hưng Lợi, Q.Ninh Kiều, TP.Cần Thơ <br>
                Điện thoại: 0292 3868 678 <br>
                Email: info@kff.com.vn
            </div>

            <div class="col-md-3 linkfooter">
                <h6>HỖ TRỢ KHÁCH HÀNG</h6>
                Hotline: 0868 725 456 <br>
                <a href="">Câu hỏi thường gặp</a>
            </div>

            <div class="col-md-3 linkfooter">
                <h6>KẾT NỐI VỚI CHÚNG TÔI</h6>
                <a href="">Facebook</a> <br>
                <a href="">Youtube</a>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>

<script>
    $('.carousel').carousel()
</script>
</html>