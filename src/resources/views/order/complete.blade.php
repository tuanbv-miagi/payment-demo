@extends('layouts.app')

@section('content')
    <div class="shadow-lg" style="max-width: 800px; background: rgb(205, 217, 221); margin: 100px auto; text-align: center; padding: 50px 10px 20px 10px;">
        <lottie-player 
            src="{{ asset('lotties/success.json') }}"
            background="transparent"
            speed="1"
            style="width: 30%; max-width: 300px; margin: 0 auto;"
            autoplay>
        </lottie-player>
        <h3 style="color: #2EC772; padding-top: 20px;">Thanh toán thành công!</h3>
        <span>Đơn hàng của bạn đã thanh toán thành công. Đơn vị vận chuyển sẽ sớm liên hệ với bạn để bàn giao sản phẩm, dịch vụ. Xin cảm ơn.</span>
        <div style="text-align: center; padding-top: 60px; padding-bottom: 20px;">
            <a href="{{ route('order.list') }}" class="btn btn-success">
                <i class="bi bi-check-circle"></i> Xác nhận
            </a>
        </div>
    </div>
@endsection