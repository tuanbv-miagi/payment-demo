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
    </div>

    <div class="d-flex justify-content-end" style="width: 80%; margin-top: 20px;">
        <a href="#" class="btn btn-secondary me-2">
            <i class="bi bi-arrow-left"></i> Quay lại
        </a>
        <button type="submit" class="btn btn-success">
            <i class="bi bi-check-circle"></i> Tiếp tục
        </button>
    </div>

@endsection

