@extends('front.layout.master')

@section('content')
    <div class="container">

        <!-- film slide -->
        <div class="shadow-body mt-4 mb-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://t.hdviet.com/backdrops/origins/8c30e4bd624b019700cc2ff5cb63e784.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://t.hdviet.com/backdrops/origins/05cca1cda24189886f10e1acdb1c7dad.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://t.hdviet.com/backdrops/origins/0b269f78d369987e40d66c40cd9edee0.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- search -->
        <div>
            <div class="input-group mb-3">
                <form method="post" action="{{ route('movie.search') }}" class="w-100">
                    @csrf
                    <div class="row">
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Tìm kiếm theo tên phim"
                                   aria-describedby="basic-addon2" name="key_word">
                        </div>
                        <div class="col-2">
                            <div class="input-group-append">
                                <button class="btn btn-warning" style="width: 200px" type="submit">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Recommendeds -->
        <div class="">
            <div class="row mt-5">
                <div class="col-6">
                        <span class="float-left font-weight-bold">
                            <h3>
                                Phim đề cử
                            </h3>
                        </span>
                </div>
                <div class="col-6">
                        <span class="float-right mb-3">
                            <a class="btn btn-outline-info" href="">Xem thêm</a>
                        </span>
                </div>
            </div>

            <div class="mb-5">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                @for($i = 0; $i < 4; $i++)
                                    <div class="col">
                                        <a href="{{ route('movie.detail', $recommendMovies[$i]->id) }}" style="color: black">
                                            <img
                                                src="{{asset("upload/images/".$recommendMovies[$i]->image)}}"
                                                class="d-block w-100" alt="...">
                                            <p class="mb-0 mt-1"><strong>{{$recommendMovies[$i]->name}}</strong></p>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                @for($i = 4; $i < 8; $i++)
                                    <div class="col">
                                        <a href="{{ route('movie.detail', $recommendMovies[$i]->id) }}" style="color: black">
                                            <img
                                                src="{{asset("upload/images/".$recommendMovies[$i]->image)}}"
                                                class="d-block w-100" alt="...">
                                            <p class="mb-0 mt-1"><strong>{{$recommendMovies[$i]->name}}</strong></p>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Recently uploaded -->
        <div>
            <div class="row mt-5">
                <div class="col-6">
                        <span class="float-left font-weight-bold">
                            <h3>Phim mới</h3>
                        </span>
                </div>
                <div class="col-6">
                        <span class="float-right mb-3">
                            <a class="btn btn-outline-info" href="">Xem thêm</a>
                        </span>
                </div>
            </div>
            <div class="mb-5">
                <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                @for($i = 7; $i > 3; $i--)
                                    <div class="col">
                                        <a href="{{ route('movie.detail', $recommendMovies[$i]->id) }}" style="color: black">
                                            <img
                                                src="{{asset("upload/images/".$recommendMovies[$i]->image)}}"
                                                class="d-block w-100" alt="...">
                                            <p class="mb-0 mt-1"><strong>{{$recommendMovies[$i]->name}}</strong></p>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                @for($i = 3; $i >= 0; $i--)
                                    <div class="col">
                                        <a href="{{ route('movie.detail', $recommendMovies[$i]->id) }}" style="color: black">
                                            <img
                                                src="{{asset("upload/images/".$recommendMovies[$i]->image)}}"
                                                class="d-block w-100" alt="...">
                                            <p class="mb-0 mt-1"><strong>{{$recommendMovies[$i]->name}}</strong></p>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- order now -->
    <div class="container mt-4 mb-4">
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
