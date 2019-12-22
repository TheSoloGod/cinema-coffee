@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-body" style="border-color: darkorange">
                <div class="card-header" style="background-color: darkorange; color: white">{{ __('Xác nhận địa chỉ Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link xác nhận đã được gửi đến Email của bạn.') }}
                        </div>
                    @endif

                    {{ __('Trước khi đăng nhập, vui lòng kiểm tra email của bạn để xác nhận thông tin') }}
                    {{ __('Nếu bạn không nhận được email') }}, <a href="{{ route('verification.resend') }}" style="color: darkorange">{{ __('Nhấn vào đây để gửi lại') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
