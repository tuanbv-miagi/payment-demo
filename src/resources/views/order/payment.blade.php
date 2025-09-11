@extends('layouts.app')

@section('content')
    <h2 class="mb-4 text-center">Mã chuyển khoản</h2>
    <div class="mt-4">
        @include('vietqr::viet-qr', [
            'url' => $url,
            'accountName' => $accountName,
            'amount' => $amount,
            'addInfo' => $addInfo,
            'accountNo' => $accountNo,
            'bankName' => $bankName,
            'oderId' => '44444'
        ])
        <div style="width: 80%; max-width: 820px; margin: 2% auto; text-align: right;">
            <a href="{{ route('order.index') }}" class="btn btn-secondary me-2">
                <i class="bi bi-arrow-left"></i> Quay lại
            </a>
            <a href="{{ route('order.confirm') }}" class="btn btn-success">
                <i class="bi bi-check-circle"></i> Tiếp tục
            </a>
        </div>
    </div>

@endsection

