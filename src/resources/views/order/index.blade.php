@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">Xác nhận đơn hàng</h2>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('order.payment') }}" method="post" class="d-inline">
                @csrf

                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Đơn hàng #HD20250909-0001</h5>
                    </div>
                    <div class="card-body">
                        {{-- Bảng sản phẩm --}}
                        <h5 class="mb-3">Sản phẩm</h5>
                        <table class="table table-bordered align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-end">Đơn giá</th>
                                    <th class="text-end">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sản phẩm 1</td>
                                    <td class="text-center">2</td>
                                    <td class="text-end">150,000 VNĐ</td>
                                    <td class="text-end">300,000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Sản phẩm 2</td>
                                    <td class="text-center">1</td>
                                    <td class="text-end">120,000 VNĐ</td>
                                    <td class="text-end">120,000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end fw-bold">Phí vận chuyển</td>
                                    <td class="text-end">30,000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end fw-bold">Giảm giá</td>
                                    <td class="text-end text-success">-20,000 VNĐ</td>
                                </tr>
                            </tbody>
                        </table>

                        {{-- Tổng cộng --}}
                        <div class="d-flex justify-content-between border-top pt-3 mt-3">
                            <h5 class="mb-0">Tổng thanh toán</h5>
                            <h5 class="mb-0 text-danger fw-bold">430,000 VNĐ</h5>
                        </div>

                        {{-- Thông tin giao hàng --}}
                        <div class="mt-4">
                            <h5 class="mb-2">Thông tin giao hàng</h5>
                            <p class="mb-1"><strong>Người nhận:</strong> Bui Van Tuan</p>
                            <p class="mb-1"><strong>SĐT:</strong> 0987 654 321</p>
                            <p class="mb-0"><strong>Địa chỉ:</strong> 139 đường Cầu Giấy, quận Quan Hoa, TP. Hà Nội</p>
                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-credit-card"></i> Xác nhận & Thanh toán
                        </button>

                        <a href="#" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Quay lại giỏ hàng
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
