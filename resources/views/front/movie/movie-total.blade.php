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
                <input type="text" class="form-control" placeholder="Tìm kiếm theo tên phim"
                       aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-warning" style="width: 200px" type="button">Tìm kiếm</button>
                </div>
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
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/1920/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/6906/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/9505/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/8932/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/8922/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/1319/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/8361/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/8162/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
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
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/4496/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/8359/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/9672/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/9626/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/8360/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/9610/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/2945/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
                                <div class="col">
                                    <img
                                        src="http://image.phimmoi.net/film/9448/poster.medium.jpg"
                                        class="d-block w-100" alt="...">
                                    <p class="mb-0"><a>Video title</a></p>
                                    <p class="mb-0" style="color: grey"><a>Video description</a></p>
                                </div>
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
                <a href="#">
                    <img class="aligncenter wp-image-1575 size-medium"
                         src="https://cafephim.vn/wp-content/uploads/2019/06/nút-giảm-20-300x87.png"
                         alt="" width="300" height="87">
                </a>
            </div>
        </div>
    </div>

    @endsection
