@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Giá phòng
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-3">
                @include('front.layout.menu-service-sticky')
            </div>
            <div class="col-9">
                <div class="shadow-body p-3">
                    <div class="subtitle-body">
                        Bảng giá phòng cafe phim, áp dụng toàn hệ thống với 04 cơ sở.
                    </div>
                    <hr>
                    <img src="https://cafephim.vn/wp-content/uploads/2019/10/bang_gia_cafe_phim_ha_noi-01.jpg" alt=""
                    class="w-100">
                </div>
            </div>
        </div>
    </div>
    @endsection
