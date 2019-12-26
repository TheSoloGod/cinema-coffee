@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Dịch vụ
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row">
            @foreach($extensions as $key => $extension)
            <div class="col-4 mt-3">
                <div class="shadow-body">
                    <a href="{{ route('extension.detail', $extension->id) }}">
                        <img src="{{asset("upload/images/$extension->image")}}" class="w-100" style="padding: 5%">
                        <div class="text-center pb-3">
                            <strong style="color: black">
                                {{ $extension->name  }}
                            </strong>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

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
