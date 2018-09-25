@extends('customer.layout') @section('custom-container')

<div class="container-fluid">
    <div class="d-flex flex-row ">
        <div class="col-12 mt-4 mb-5 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner slide">
                    <div class="carousel-item active">
                        <img class="slide" src="{{asset('./customer/images/slide3.jpg')}}" alt="First slide">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block slide" src="{{asset('./customer/images/slide2.jpg')}}" alt="Second slide">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block slide" src="{{asset('./customer/images/slide1.jpeg')}} " alt="Third slide">

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
        </div>
    </div>
</div>

<div class="container ">
    <div class="d-flex flex-row mt-5 mb-5">
        <div class="col-12 row ">
            <div class="col-3">
                <i class="fas fa-truck fa-7x mb-3"></i>
                <h2>Giao hàng toàn quốc</h2>
                <h5>Nhận đưa hàng trong phạm vi toàn quốc
                    <h5>
            </div>
            <div class="col-3">
                <i class="far fa-thumbs-up fa-7x mb-3"></i>
                <h2>Giao hàng toàn quốc</h2>
                <h5>Giày nhập từ nguồn hàng uy tín, chất lượng</h5>
            </div>
            <div class="col-3">
                <i class="fas fa-credit-card fa-7x mb-3"></i>
                <h2>Thanh toán nhanh chóng</h2>
                <h5>Chuyển tiền qua cổng thanh toán Techcombank, Vietcombank</h5>
            </div>
            <div class="col-3">
                <i class="fas fa-phone fa-7x mb-3"></i>
                <h2>Đặt hàng trực tuyến</h2>
                <h5>Đặt hàng ngay tại trang web hoặc gọi: 0966342792</h5>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <h3>SẢN PHẨM BÁN CHẠY</h3>
    <div class="d-flex flex-row">
        <div class="col-3">
            <div class="card mb-3 ">
                <div class="card">
                    <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src='https://product.hstatic.net/1000289015/product/tb2b8zvxq7mykjjszfgxxct9xxa___3161970426.jpg'>
                    </div>

                    <div class="card-body">
                        <div>
                            <p>Sample Woman Top</p>
                            <p>
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div>
                            <div>
                                <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card mb-3 ">
                <div class="card">
                    <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src="{{asset('./customer/images/images2.png')}}">
                    </div>

                    <div class="card-body">
                        <div>
                            <p>Sample Woman Top</p>
                            <p>
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div>
                            <div>
                                <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card mb-3 ">
                <div class="card">
                    <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src="{{asset('./customer/images/images3.png')}}">
                    </div>

                    <div class="card-body">
                        <div>
                            <p>Sample Woman Top</p>
                            <p>
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div>
                            <div>
                                <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card mb-3 ">
                <div class="card">
                    <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src="{{asset('./customer/images/images4.jpg')}} ">
                    </div>

                    <div class="card-body">
                        <div>
                            <p>Sample Woman Top</p>
                            <p>
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div>
                            <div>
                                <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <h3>SẢN PHẨM MỚI NHẤT</h3>
    <div class="d-flex flex-row">
        <div class="col-3">
            <div class="card mb-3 ">
                <div class="card">
                    <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src='https://product.hstatic.net/1000289015/product/tb2b8zvxq7mykjjszfgxxct9xxa___3161970426.jpg'>
                    </div>

                    <div class="card-body">
                        <div>
                            <p>Sample Woman Top</p>
                            <p>
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div>
                            <div>
                                <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card mb-3 ">
                <div class="card">
                    <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src="{{asset('./customer/images/images2.png')}}">
                    </div>

                    <div class="card-body">
                        <div>
                            <p>Sample Woman Top</p>
                            <p>
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div>
                            <div>
                                <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card mb-3 ">
                <div class="card">
                    <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src="{{asset('./customer/images/images3.png')}}">
                    </div>

                    <div class="card-body">
                        <div>
                            <p>Sample Woman Top</p>
                            <p>
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div>
                            <div>
                                <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card mb-3 ">
                <div class="card">
                    <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src="{{asset('./customer/images/images4.jpg')}} ">
                    </div>

                    <div class="card-body">
                        <div>
                            <p>Sample Woman Top</p>
                            <p>
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div>
                            <div>
                                <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
</div>


@endsection