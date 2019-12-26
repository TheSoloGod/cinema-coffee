@extends('front.layout.master')

@section('content')

    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Cinema Coffee {{$agency->name}}
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-9">
                <div class="shadow-body p-4">
                    {!! $agency->content !!}
                </div>
            </div>
            <div class="col-3">
                @include('front.layout.menu-service-sticky')
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <!-- order now -->
        <div class="shadow-body text-center mt-4">
            <div class="pt-5 pb-5">
                <a href="{{ route('room.order') }}">
                    <img class="aligncenter wp-image-1575 size-medium"
                         src="https://cafephim.vn/wp-content/uploads/2019/06/nút-giảm-20-300x87.png"
                         alt="" width="300" height="87">
                </a>
            </div>
        </div>
    </div>


@endsection
