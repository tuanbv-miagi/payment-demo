<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function confirmPayment(string $id)
    {
        $orderDetail = OrderDetail::find($id);

        return view('order.confirm-payment', compact('orderDetail'));
    }

    public function payment()
    {
        
    }
}
