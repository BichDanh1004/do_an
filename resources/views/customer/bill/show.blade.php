@extends('customer.layout')
@section('custom-container')


<div class="container">
            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Mã hóa đơn</th>
                        <th>Tổng</th>
                        <th>Mã hình thức thanh toán</th>
                        <th>Tình trạng hóa đơn</th>
                        <th>Mã khách hàng</th>
                        <th>Mã nhân viên</th>
                        <th>Địa chỉ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          
                          <td>
                            <div></div>
                          <td>
                                <span></span>
                          </td>
                          <td>
                            <div></div>
                          </td>
                          <td>
                            <select>
                                <option>Đã nhận </option>
                                <option>Chưa nhận</option>
                                <option>Đã chuyển nhưng chưa nhận được</option>
                               
                                </select>
                          </td>
                          <td>
                                <div></div>
                          </td>
                          <td>
                            <div></div>
                          <td>
                                <div></div>
                        </tr>
                    </tbody>
                  </table>    

  
</div>
<div class="container">
  <div class="d-flex flex-row mt-4 mb-5">
    <div class="col-10">
        <h3 class="pull-left " >Tổng tiền:</h3>
    </div>
    <div class="col-2">
        <button class="pull-right ">Đặt hàng</button>
    </div>
    
    
  </div>
</div>


	
@endsection