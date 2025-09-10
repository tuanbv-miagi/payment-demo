<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\View\View;
use miagi\VietQr\VietQr;

class OrderController extends Controller
{
    public function confirmPayment(string $id)
    {
        $orderDetail = OrderDetail::find($id);

        return view('order.confirm-payment', compact('orderDetail'));
    }

    /**
     * Infor order page
     *
     * @return View
     */
    public function index(): View
    {
        return view('order.index');
    }

    /**
     * confirm order page
     *
     * @return View
     */
    public function confirm(): View
    {
        return view('order.confirm');
    }

    /**
     * confirm order page
     *
     * @return View
     */
    public function complete(): View
    {
        return view('order.complete');
    }

    /**
     * Summary of payment
     *
     * @return View
     */
    public function payment(): View
    {
        $vietQr = new VietQr();
        $accountName = 'BUI VAN TUAN';
        $bankId = 'Techcombank';
        $accountNo = '918888999919';
        $amount = 430000;
        $addInfo = 'BUI_VAN_TUAN_44444';

        $url = $vietQr->getUrlPayment($bankId, $accountNo, 'compact', $amount, $addInfo, $accountName);
        $bankName = $vietQr->getBankName($bankId);

        return view('order.payment', compact(
                'url',
                'accountName',
                'accountNo',
                'amount',
                'addInfo',
                'bankName',
            )
        );
    }
}
