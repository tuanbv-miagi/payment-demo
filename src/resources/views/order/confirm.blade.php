@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Xác nhận thanh toán</h5>
                    </div>

                    <div class="card-body">
                        <!-- Thông tin thanh toán -->
                        <div class="mb-4">
                            <h6 class="text-muted">Thông tin đơn hàng</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Mã đơn hàng:</span>
                                    <strong>#DH123456</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Tổng tiền:</span>
                                    <strong class="text-danger">430.000 VNĐ</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Ngân hàng:</span>
                                    <strong>Techcombank</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Số tài khoản:</span>
                                    <strong>918888999919</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Tên tài khoản:</span>
                                    <strong>BUI VAN TUAN</strong>
                                </li>
                            </ul>
                        </div>

                        <!-- Upload ảnh thanh toán -->
                        <form id="myForm" action="{{ route('order.complete') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="screenshot" class="form-label fw-bold">
                                    Tải ảnh xác nhận thanh toán
                                </label>
                                <input class="form-control" type="file" id="screenshot" name="screenshot" accept="image/*" required>
                                <small class="text-muted">
                                    Vui lòng chụp màn hình chuyển khoản thành công và tải lên.
                                </small>

                                <!-- Preview -->
                                <div class="mt-3 text-center d-none" id="preview-container">
                                    <p class="fw-bold">Ảnh xem trước:</p>
                                    <img id="preview-image" src="#" alt="Preview" class="img-fluid rounded shadow-sm" style="max-height: 300px;">
                                </div>
                            </div>

                            <!-- Nút hành động -->
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('order.payment') }}" class="btn btn-secondary me-2">
                                    <i class="bi bi-arrow-left"></i> Quay lại
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Xác nhận
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="loading" style="
        display:none;
        position:fixed;
        top:0; left:0;
        width:100%; height:100%;
        background:rgba(255,255,255,0.8);
        justify-content:center;
        align-items:center;"
    >
        <lottie-player 
            id="loadingAnim"
            src="{{ asset('lotties/loading.json') }}"
            background="transparent"
            speed="1"
            style="width: 20%; max-width: 200px; margin: 0 auto;"
            autoplay>
        </lottie-player>
    </div>

    <script>
    const form = document.getElementById('myForm');
    const loading = document.getElementById('loading');
    const loadingAnim = document.getElementById('loadingAnim');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // chặn submit ngay
        loading.style.display = 'flex'; // hiện overlay

        // reset animation để chạy lại
        loadingAnim.stop();
        loadingAnim.play();

        setTimeout(() => {
            form.submit(); // sau 1s mới submit thật
        }, 1000);
    });
    </script>

    <!-- Script preview ảnh -->
    <script>
        document.getElementById('screenshot').addEventListener('change', function (event) {
            const [file] = event.target.files;
            if (file) {
                const previewContainer = document.getElementById('preview-container');
                const previewImage = document.getElementById('preview-image');

                previewImage.src = URL.createObjectURL(file);
                previewContainer.classList.remove('d-none');
            }
        });
    </script>
@endsection
