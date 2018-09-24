@extends('customer.layout')
@section('custom-container')

<div class="container-fluid">
    <div class="d-flex flex-row ">
        <div class="col-12 ">

                <div class="col-3 mt-5 genuine_shoes_left">
                        <div class="sidenav">
                            <button class="dropdown-btn">Adidas
                              <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                              <a href="#">Link 1</a>
                              <a href="#">Link 2</a>
                              <a href="#">Link 3</a>
                            </div>
        
                            <button class="dropdown-btn">Nike
                                <i class="fas fa-caret-down"></i>
                            </button>
                              <div class="dropdown-container">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                              </div>
        
                            <button class="dropdown-btn">Giày Chính Hãng
                              <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                              <a href="#">Link 1</a>
                              <a href="#">Link 2</a>
                              <a href="#">Link 3</a>
                            </div>
                          </div>
        
                            

                        

                        <div id="menu">
                            <h5 class="mt-5 mx-4">Cỡ Giày Nam</h5>
                                <ul class="ul_list">
                                    <li><input type="checkbox"> 40</li>
                                    <li><input type="checkbox"> 40.5</li>
                                    <li><input type="checkbox"> 41</li>
                                    <li><input type="checkbox"> 41.5</li>
                                    <li><input type="checkbox"> 42</li>
                                    <li><input type="checkbox"> 42.5</li>
                                </ul>
                        </div>


                        <div id="menu">
                            <h5 class="mt-5 mx-4">Cỡ Giày Nữ</h5>
                                <ul>
                                    <li><input type="checkbox"> 36</li>
                                    <li><input type="checkbox"> 36.7</li>
                                    <li><input type="checkbox"> 37</li>
                                    <li><input type="checkbox"> 37.5</li>
                                    <li><input type="checkbox"> 38</li>
                                    <li><input type="checkbox"> 38.5</li>
                                </ul>
                </div>
            </div>


            <div class="col-9 genuine_shoes_right mt-5">
                <div class="col-12">
                    <h3 class="mb-4">ADIDAS</h3>
                    <div class="d-flex flex-column flex-md-row">

                        <div class="col-3">
                            <div class="card mb-3 ">
                                <div class="card">
                                    <div class="img-thumbnail image-hover">
                                        <img class="card-img-top" src="{{asset('./customer/images/images2.png')}}">
                                    </div>

                                    <div class="card-body">
                                        <div>
                                            <p>Sample Woman Top</p>
                                        </div>
                                        <div>
                                            <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
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
                                        </div>
                                        <div>
                                            <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
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
                                        </div>
                                        <div>
                                            <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
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
                                        </div>
                                        <div>
                                            <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-12">
                    <h3 class="mb-4">ADIDAS</h3>
                    <div class="d-flex flex-column flex-md-row">

                        <div class="col-3">
                            <div class="card mb-3 ">
                                <div class="card">
                                    <div class="img-thumbnail image-hover">
                                        <img class="card-img-top" src="{{asset('./customer/images/images2.png')}}">
                                    </div>

                                    <div class="card-body">
                                        <div>
                                            <p>Sample Woman Top</p>
                                        </div>
                                        <div>
                                            <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
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
                                        </div>
                                        <div>
                                            <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
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
                                        </div>
                                        <div>
                                            <a class="btn btn-primary" href="{{url('adidas_shoe')}}">Xem Chi Tiết</a>
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
                                        </div>
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
        </div>
    </div>
</div>                

<div class="container">
    <div class="d-flex flex-row">
        <div class="col-12 mb-5">
                <h2 class="text-align-center mt-5 mb-3">Giày Adidas Chính Hãng</h2>
                <p class="text_a mt-3">
                    <b>Adidas: thương hiệu thời trang thể thao hàng đầu trên thế giới</b>
                    Trong số các ông lớn trong làng giày thể thao, Adidas được mọi người biết đến với những thiết kế giày thể thao, 
                    phụ kiện, quần áo. Adidas được thành lập tại Đức và nhanh chóng được các vận động viên olympic dùng. 
                    Với thiết kế hợp mắt, mẫu mã thay đổi liên tục theo những công nghệ mới, hiện đại, 
                    Adidas đã vươn lên là số một trong giới sneaker với những mẫu mã: NMD, UltraBoost, PureBoost, AlphaBounce, Stansmith…<br>
                    <b>Giày Sneaker là gì?</b>
                    Sneaker là loại giày đế mềm với phần trên làm bằng da hoặc vải bạt. Giày sneaker trước đây chủ yếu được sử dụng trong lĩnh vực thể thao, hiện nay đã thành một sản phẩm thời trang hàng ngày, đặc biệt trong giới trẻ.
                    Ngày nay, sneaker có rất nhiều giá cả khác nhau tùy thuộc chủ yếu vào thương hiệu và mẫu mã. Nếu chỉ để đi chơi bạn có tìm những thiết kế đơn giản như Adidas Alphabounce, 
                    Nike Air Force phức tạp và chuyên dụng hơn là Nike Air Max, Adidas NMD, UltraBoost.
                    Đây là những mẫu giày sneaker được thiết kế cho việc kết hợp tất cả các hoạt động từ đi chơi, chạy bộ, gym… được kết hợp công nghệ Air Max và Boost tiên tiến nhất của Nike và Adidas.<br>
                    <b>Tại sao chọn Giày Adidas?</b>
                    Là dòng giày chuyên hỗ trợ cho những người tập luyện thể thao, những vận động viên chuyên nghiệp,
                    do vậy mà rất nhiều những công nghệ tối ưu hóa trải nghiệm của người dùng được adidas sáng chế, đem lại cảm giác thoải mái nhất cho người dùng.
                    Công nghệ đế Bounce, Boost đứng đầu bảng xếp hàng với cảm giác vừa nhẹ vừa êm, độ đàn hồi và hấp thụ lực tốt đem lại trải nghiệm nhẹ như đi trên mây giảm tác động lực lên chân,
                    hạn chế chấn thương cho người man. Kết hợp với những công nghệ nhỏ khác như PrimeKnit vừa sở hữu độ đàn hồi tốt, thông thoáng khi, hay BOUNCE là công nghệ đệm giày hỗ trợ đàn hồi tuyệt vời. Xem thêm chi tiết về Adidas Alphabounce, Adidas Ultraboost, Adidas NMD.
                    Mua các sản phẩm giày Adidas chính hãng, giá tốt tại Bounty Sneakers
                    Giày Adidas được Bounty Sneakers nhập chính hãng từ Anh, Mỹ và Nhật. Tất cả các sản phẩm đều được kiểm tra kĩ càng và check cẩn thận trước khi bán đến người tiêu dùng. Bạn có thể tìm mua những đôi giày thực sự thoải mái khi chạy bộ,
                    tập gym hay đơn giản là một đôi giày cá tính kết hợp với những bộ outfit chất.<br>
                        
                </p>
            </div>
        </div>

    </div>                  


                          
</body>
</html>
  
@endsection