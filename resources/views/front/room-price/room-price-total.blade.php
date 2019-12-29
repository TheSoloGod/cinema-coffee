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
                    @foreach($roomPrices as $key => $roomPrice)
                        <div class="subtitle-body">
                            {{ $roomPrice->name }}
                        </div>
                        <hr>
                        {!! $roomPrice->content !!}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection
