@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Khuyến mại
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-5">
        <div class="mt-4 text-center">
            <div class="subtitle-body">
                {{ $promo->title }}
            </div>
            <hr>
            <div class="text-left">
                {!! $promo->content !!}
            </div>
        </div>
        <div class="shadow-body">
            <img src="{{asset("upload/images/$promo->image")}}"
                 alt="" class="w-100">
        </div>
    </div>
    @endsection
