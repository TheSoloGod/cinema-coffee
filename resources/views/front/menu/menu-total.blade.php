@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Thực đơn
                    </h1>
                </div>
            </div>
        </div>
    </div>

    {{--            <span class="subtitle-body" style="color: black">COMBO </span>--}}
    {{--            <span class="subtitle-body">--}}
    {{--                XEM PHIM & ĂN UỐNG--}}
    {{--            </span>--}}
    <!-- combo -->
    @foreach($menus as $key => $menu)
    <div class="container mt-4 mb-4">
        <div class="mt-5">
            <span class="subtitle-body">
                {{ $menu->name }}
            </span>
        </div>
        <hr>
        <div class="shadow-body text-center mt-4">
            {!! $menu->content !!}
        </div>
    </div>

    <!-- order now -->
    <div class="container mt-4 mb-4">
        <div class="shadow-body text-center mt-4">
            <div class="pt-5 pb-5">
                <a href="{{route('room.order')}}">
                    <img class="aligncenter wp-image-1575 size-medium"
                         src="https://cafephim.vn/wp-content/uploads/2019/06/nút-giảm-20-300x87.png"
                         alt="" width="300" height="87">
                </a>
            </div>
        </div>
    </div>
    @endforeach

@endsection
