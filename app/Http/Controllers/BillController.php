<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\StatusBill;
use App\Cart;
use App\CartDetails;
use App\Payment;
use App\BillDetails;
use App\Product;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    public function Show()
    {
        return view('customer.bill.show');
    }
}
