@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Blog
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-9">
                <div>
                    <div class="shadow-body">
                        <img src="https://cafephim.vn/wp-content/uploads/2019/12/TEST-2-848x480.jpg" alt=""
                        class="w-100">
                    </div>

                    <div class="shadow-body p-3 mt-4">
                        <div class="subtitle-body" style="color: black">
                            {{ $news->title }}
                        </div>
                        <br>
                        <div>
                            {!! $news->content !!}
                        </div>
                    </div>

                    <div class="shadow-body mt-4">
                        <img src="{{ asset("upload/images/$news->image") }}" alt=""
                        class="w-100">
                    </div>

                    <!-- sharing -->
                    @include('front.layout.social-sharing')
                </div>
            </div>
            <div class="col-3">
                @include('front.layout.menu-service-sticky')
            </div>
        </div>
    </div>
    @endsection
