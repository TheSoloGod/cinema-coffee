@extends('front.layout.master')

@section('content')

    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Thông tin thành viên
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-6 text-center">
                <img src="https://forum.waka.vn/assets/avatars/default.svg"
                    class="w-75 border rounded-circle">
            </div>
            <div class="col-6">
                <div class="shadow-body">
                    <form method="post" action="{{ route('user.profile.update') }}" class="p-3">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <input type="text" name="id" value="{{ $user->id }}" hidden>
                        <div class="form-group">
                            <label for="name">Họ và tên</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="number" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="dob">Ngày sinh</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{ $user->dob }}">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="background-color: darkorange; border-color: darkorange">
                                Cập nhật thông tin
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
