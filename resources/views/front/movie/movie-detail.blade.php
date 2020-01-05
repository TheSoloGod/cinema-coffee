@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        {{ $movie->name }}
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-9">

                <!-- film info -->
                <div class="row">
                    <div class="col-5">
                        <img src="{{asset("upload/images/".$movie->image)}}" alt=""
                        class="w-100">
                    </div>
                    <div class="col-7 shadow-body p-3">
                        <div>
                            <span>
                                <strong>
                                    Thể loại:
                                </strong>
                            </span>
                            <span style="color:darkorange;">
                                {{ $movieCategory }}
                            </span>
                        </div>
                        <hr>
                        <div>
                            <span>
                                <strong>
                                    Thời lượng:
                                </strong>
                            </span>
                            <span style="color:darkorange;">
                               {{ $movie->time }} phút
                            </span>
                        </div>
                        <hr>
                        <div>
                            <span>
                                <strong>
                                    Quốc gia:
                                </strong>
                            </span>
                            <span style="color:darkorange;">
                                {{ $movie->national }}
                            </span>
                        </div>
                        <hr>
                        <div>
                            <span>
                                <strong>
                                    Năm phát hành:
                                </strong>
                            </span>
                            <span style="color:darkorange;">
                                {{ $movie->year }}
                            </span>
                        </div>
                        <hr>
                        <div>
                            <span>
                                <strong>
                                    IMDb:
                                </strong>
                            </span>
                            <span style="color:darkorange;">
                                {{ $movie->imdb }}
                            </span>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a href="{{ route('room.order') }}">
                                <button class="btn btn-warning btn-lg">
                                    Đặt phòng
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- trailer -->
                <div class="row ml-0 mt-4">
                    <div class="col-12 shadow-body p-3">
                        <div class="subtitle-body">
                            Trailer:
                        </div>
                        <br>
                        <div>
{{--                            <video width="100%" height="auto" controls>--}}
{{--                                <source src="{{ asset('front/side-page/trailer.mp4') }}" type="video/mp4">--}}
{{--                            </video>--}}
                            <iframe width="100%" height="450" src="{{ $movie->trailer }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <br>
                        <div>
                            {!! $movie->content !!}
                        </div>
                    </div>
                </div>

                <!-- sharing -->
                @include('front.layout.social-sharing')

            </div>
            <div class="col-3">

                <!-- search -->
                <div class="input-group mb-3">
                    <form class="w-100" method="post" action="{{ route('movie.search') }}">
                        @csrf
                        <div class="row pr-3 pl-3">
                            <div class="col-8 p-0">
                                <input type="text" class="form-control" placeholder="Nhập tên phim" name="key_word">
                            </div>
                            <div class="col-4 p-0">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-warning" type="submit">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- film catgory -->
                <div class="shadow-body">
                    <div class="text-center pt-3 pb-2">
                        <strong>
                            Danh mục phim
                        </strong>
                    </div>
                    <div class="sticky-menu">
                        @foreach($movieCategories as $key => $movieCategory)
                            <a class="" href="#">
                                <div class="sticky-item">
                                    {{ $movieCategory->name }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- hot order -->
                <div class="sticky-top mt-3">
                    <div class="shadow-body p-3">
                        <div class="text-center mt-3">
                            <strong>
                                ĐẶT PHÒNG NHANH
                            </strong>
                            <p class="mt-3">
                                Nhận ngay 1 đồ uống miễn phí khi đặt phòng online
                            </p>
                        </div>
                        <hr>
                        <form>
                            <div class="form-group">
                                <label style="color: darkorange">Họ và tên *</label>
                                <input type="text" class="form-control"placeholder="Tên đầy đủ">
                            </div>
                            <div class="form-group">
                                <label style="color: darkorange;">Số điện thoại *</label>
                                <input type="text" class="form-control" placeholder="Số điện thoại">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning">Đặt phòng nhanh</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
