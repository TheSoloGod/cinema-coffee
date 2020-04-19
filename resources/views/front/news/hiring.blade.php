@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Tuyển dụng
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-5">
        <div class="shadow-body">
            <img src="{{asset("upload/images/$hiring->image")}}"
                 alt="" class="w-100">
        </div>
        <div class="shadow-body p-3 mt-4">
            <div class="subtitle-body">
                {{ $hiring->title }}
            </div>
            <br>
            <div>
                {!! $hiring->content !!}
            </div>
        </div>
    </div>
@endsection
