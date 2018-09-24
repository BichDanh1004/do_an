@extends('customer.layout')
@section('custom-container')
<div class="container">
  <div class="d-flex flex-md-row">
    <div class="col-md-9">
      <form action="{{route('bills.storecustomer',$id_cart)}}"  method="POST" >
      {{ csrf_field() }}
      <div class="form-group">
        <label for="address">Địa chỉ:</label>
        <input type="text" class="form-control w-75" placeholder="Nhập địa chỉ" name="address">
        @if ($errors->has('address'))
        <p class="text-danger">{{ $errors->first('address') }}</p>
        @endif
      </div>
        <div class="form-group">
          <label for="payment">Phương thức thanh toán:</label>
          <select name="payment" class="custom-select mb-3 w-50">
            @foreach($payments as $payment)
              <option value="{{$payment->id_payment}}">{{$payment->payment_name}}</option>
            @endforeach  
          </select>
        </div>  
       <button type="submit" class="btn btn-primary">Xác nhận đơn hàng</button>
      </form>  
    </div>
    <div class="col-md-3 bg-light">ORDER</div>

  </div>
  
</div>
{{$id_cart}}
@endsection