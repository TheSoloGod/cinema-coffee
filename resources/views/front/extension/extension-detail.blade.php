@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        {{ $extension->name }}
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <div class="shadow-body p-3">
                            <div class="subtitle-body" style="color: black">
                                {{ $extension->name }}
                            </div>
                            <br>
                            {!! $extension->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12 shadow-body p-3">
                        <img src="https://cafephim.vn/wp-content/uploads/2019/07/IMG_20190621_172822_mix01.jpg" alt=""
                        class="w-100">
                    </div>
                    <div class="col-12 shadow-body mt-4 p-3">
                        <div class="text-center mb-3">
                            <strong>
                                BẢNG GIÁ PHÒNG
                            </strong>
                        </div>
                        <img src="https://cafephim.vn/wp-content/uploads/2016/08/bang-gia-cafe-phim-Cine-Cafe-2017-3.jpg"
                             alt="" class="w-100">
                    </div>
                    <div class="col-12 shadow-body mt-4 p-5">
                        <div class="text-center mb-3">
                            <a href="{{ route('room.order') }}">
                                <img class="aligncenter wp-image-1575 size-medium"
                                     src="https://cafephim.vn/wp-content/uploads/2019/06/nút-giảm-20-300x87.png"
                                     alt="" width="300" height="87">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
