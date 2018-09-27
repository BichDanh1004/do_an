@extends('customer.layout') @section('custom-container')

<div class="container">
    <div class="d-flex flex-row">
        <div class="col-4 your-order ">
                <h3>Your Order</h3>
                    <table >
                          
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng cộng</th>
                                    
                                </tr>
                     
         
                                <tr >
                                     <td>Adidasy</td>
                                     <td>2</td>
                                     <td>2,450,000</td>
                                </tr>

                                <tr>
                                    <th>Tổng cộng</th>
                                    <td><strong>2,450,000&nbsp;₫</strong> </td>
                                </tr>
                    </table>
        <hr/>
                    <div>
                        <input type="radio" name="payment_method" value="cod">
                        <label>Chuyển khoản ngân hàng </label>
                    </div>
                            <p>Vui lòng chuyển khoản vài tài khoản sau.<br>
                               Thông tin tài khoản:<br>
                              Võ A – stk: 0491000012345 – Vietcombank chi nhánh Đà Nẵng <br>

                    <div>
                        <input type="radio" name="payment_method">
                        <label>Trả tiền mặt khi nhận hàng 	</label>
                    </div>
            
                    <div >
                    <p>Trả tiền mặt khi giao hàng. Chỉ nhận thanh toán trực tiếp trong khu vực nội thành Hà Nội.</p>
                     </div>
                <hr/>
                    <p>Thông tin cá nhân của bạn sẽ được dùng để điền vào hóa đơn, giúp bạn thanh toán nhanh chóng và dễ dàng.</p>
                    <label>
                        <input type="checkbox" >
                            <span>Tôi đã đọc và đồng ý với Điều khoản và điều kiện của cửa hàng</span>&nbsp;<span class="required">*</span>
                        </label>
                        <input type="hidden" value="1">

                
                <button type="submit"  >Đặt hàng</button>
                
              
       
        </div>
    </div>
</div>


</body>

</html>

@endsection