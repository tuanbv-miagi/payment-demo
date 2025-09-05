@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Thông tin đơn hàng</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Đơn hàng #{{ $orderDetail->order_code }}</h5>
                </div>
                <div class="card-body">
                    <p><strong>Số lượng sản phẩm:</strong> {{ number_format($orderDetail->quantity) }}</p>
                    <p><strong>Ghi chú:</strong> {{ $orderDetail->note }}</p>
                    <p><strong>Tổng hóa đơn:</strong> 
                        <span class="text-danger fw-bold">{{ number_format($orderDetail->price) }} VNĐ</span>
                    </p>
                </div>
                <div class="card-footer text-end">
                    <form action="{{ route('order.payment') }}" method="post" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-credit-card"></i> Thanh toán ngay
                        </button>
                    </form>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
