@extends('customer.layout')
@section('custom-container')

<div class="container-fluid">
    <h1 class="d-flex justify-content-center mb-4">Hướng Dẫn Phân Biệt Giày Chính Hãng Và Fake</h1>
    <div class="d-flex flex-row ">
    <div class="col-12">
           
            <div class="mt-5">
                    <h5>1.Check thông tin vỏ hộp adidas stan smith</h5>

                
                    <img class="genuine_shoe" src="{{asset('./customer/images/checkvo.jpg')}}" >
                    <p>Để check giày Adidas Stan Smith fake hay real thì đầu tiên các bạn phải kiểm tra thông tin vỏ hộp, xem thử các thông tin trên vỏ hộp có đồng nhất với thông tin bên dưới “lưỡi gà” của đôi giày hay không.</p> 
                    <img class="genuine_shoe" src="{{asset('./customer/images/check2.jpg')}}" >
            </div>  
        <div>
                <h5>2. Check các chi tiết của giày Air Max khác nhau của real và fake</ h5>

                Đây thực sự là rất khó đối với người mua hàng, vì không có sản phẩm chính hãng để so sánh nên Bountysneakers sẽ so sánh đôi giày Nike Air Max 270 chính hãng với các đôi fake trên thị trường.
            <img class="genuine_shoe" src="{{asset('./customer/images/chinhhang.jpg')}}" > 
            <p>

            </p>
        </div>
   
    </div>
           
    </div>
</div>                  


                          
</body>
</html>
  
@endsection