@extends('front.layout.master')

@section('content')
    <div class="container-fluid" style="background-color: #EEEEEE">
        <div class="container bg-light p-0">

            <!-- slide -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://avatar-nct.nixcdn.com/slideshow/2019/10/29/3/4/5/7/1572314172258_org.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://avatar-nct.nixcdn.com/slideshow/2019/10/28/5/0/e/b/1572236776564_org.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://avatar-nct.nixcdn.com/slideshow/2019/10/30/b/f/4/3/1572408318194_org.jpg"
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

            <!-- space -->
{{--            <div style="background-color: #3f3f3f; height: 50px"></div>--}}
            <div style="background-color: #EEEEEE; height: 50px"></div>

            <!-- new playlists -->
            <div class="shadow-body pt-5">
                <div class="row">
                    <div class="col-6">
                        <span class="float-left font-weight-bold ml-5">
                            <h3>New Playlist</h3>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-right mb-3 mr-5">
                            <a class="btn btn-outline-info" href="">Show all</a>
                        </span>
                    </div>
                </div>

                <div class="pl-5 pr-5">
                    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/23/7/8/b/5/1571804802390.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Song name</a></p>
                                        <p class="mb-0"><a>Singer</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/29/7/c/1/5/1572339116027.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Song name</a></p>
                                        <p class="mb-0"><a>Singer</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/25/d/7/6/c/1571975282431.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Song name</a></p>
                                        <p class="mb-0"><a>Singer</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/21/4/6/1/e/1571641021875.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Song name</a></p>
                                        <p class="mb-0"><a>Singer</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/25/d/7/6/c/1571974008674.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Song name</a></p>
                                        <p class="mb-0"><a>Singer</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/22/8/2/0/b/1571718224366.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Song name</a></p>
                                        <p class="mb-0"><a>Singer</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/22/8/2/0/b/1571733581187.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Song name</a></p>
                                        <p class="mb-0"><a>Singer</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/17/7/2/d/f/1571282640291.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Song name</a></p>
                                        <p class="mb-0"><a>Singer</a></p>
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

            <!-- space -->
{{--            <div style="background-color: #3f3f3f; height: 50px"></div>--}}
            <div style="background-color: #EEEEEE; height: 50px"></div>

            <!-- popular playlist -->
            <div class="shadow-body">
                <div class="row mt-5">
                    <div class="col-6">
                        <span class="float-left font-weight-bold ml-5">
                            <h3>Popular Playlist</h3>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-right mb-3 mr-5">
                            <a class="btn btn-outline-info" href="">Show all</a>
                        </span>
                    </div>
                </div>
                <div class="ml-5 mr-5 mb-5">
                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/23/7/8/b/5/1571804802390.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Playlist name</a></p>
                                        <p class="mb-0"><a>Author</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/29/7/c/1/5/1572339116027.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Playlist name</a></p>
                                        <p class="mb-0"><a>Author</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/25/d/7/6/c/1571975282431.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Playlist name</a></p>
                                        <p class="mb-0"><a>Author</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/21/4/6/1/e/1571641021875.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Playlist name</a></p>
                                        <p class="mb-0"><a>Author</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/25/d/7/6/c/1571974008674.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Playlist name</a></p>
                                        <p class="mb-0"><a>Author</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/22/8/2/0/b/1571718224366.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Playlist name</a></p>
                                        <p class="mb-0"><a>Author</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/22/8/2/0/b/1571733581187.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Playlist name</a></p>
                                        <p class="mb-0"><a>Author</a></p>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://avatar-nct.nixcdn.com/song/2019/10/17/7/2/d/f/1571282640291.jpg"
                                            class="d-block w-100" alt="...">
                                        <p class="mb-0"><a>Playlist name</a></p>
                                        <p class="mb-0"><a>Author</a></p>
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

            <!-- space -->
{{--            <div style="background-color: #3f3f3f; height: 50px"></div>--}}
            <div style="background-color: #EEEEEE; height: 50px"></div>

            <!-- new song & popular song -->
            <div class="shadow-body" style="background-color: white">
                <div class="row mt-5 mb-4">

                    <!-- new songs -->
                    <div class="col-6 border-right">
                        <div class="font-weight-bold ml-5 mb-3">
                            <h3>New Songs</h3>
                        </div>
                        <div class="ml-4">
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/10/23/7/8/b/5/1571804802390.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>Nghe nói anh sắp kết hôn</div>
                                            <div>Văn Mai Hương, Hà Anh Tuấn</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/10/29/7/c/1/5/1572339116027.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>I Don't Wanna Let You Go</div>
                                            <div>Mr. A</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/10/22/8/2/0/b/1571718224366.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>Hongkong 12</div>
                                            <div>Nguyễn Trọng Tài, MC 12</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>Cô Thắm Không Về</div>
                                            <div>Phát Hồ, Jokes Bii, Thiện</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/08/28/7/4/3/a/1566982655403.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>Đi Đu Đưa Đi</div>
                                            <div>Bích Phương</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-outline-info" href="">Show more</a>
                        </div>
                    </div>

                    <!-- popular songs -->
                    <div class="col-6 border-left">
                        <div class="font-weight-bold ml-5 mb-3">
                            <h3>Popolar Songs</h3>
                        </div>
                        <div class="ml-4">
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/10/23/7/8/b/5/1571804802390.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>Nghe nói anh sắp kết hôn</div>
                                            <div>Văn Mai Hương, Hà Anh Tuấn</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/10/29/7/c/1/5/1572339116027.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>I Don't Wanna Let You Go</div>
                                            <div>Mr. A</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/10/22/8/2/0/b/1571718224366.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>Hongkong 12</div>
                                            <div>Nguyễn Trọng Tài, MC 12</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/09/16/b/0/f/f/1568593417642.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>Cô Thắm Không Về</div>
                                            <div>Phát Hồ, Jokes Bii, Thiện</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-5 mb-3">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="https://avatar-nct.nixcdn.com/song/2019/08/28/7/4/3/a/1566982655403.jpg"
                                             style="width: 50px; height: 50px" href="">
                                    </div>
                                    <div class="col-11">
                                        <div class="ml-3">
                                            <div>Đi Đu Đưa Đi</div>
                                            <div>Bích Phương</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-outline-info" href="">Show more</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- space -->
{{--            <div style="background-color: #3f3f3f; height: 50px"></div>--}}
            <div style="background-color: #EEEEEE; height: 50px"></div>

            <!-- singers -->
            <div class="shadow-body pt-3" style="background-color: white">
                <div class="row mt-5">
                    <div class="col-6">
                        <span class="float-left font-weight-bold ml-5">
                            <h3>Singers</h3>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="float-right mb-3 mr-5">
                            <a class="btn btn-outline-info" href="">Show all</a>
                        </span>
                    </div>
                </div>
                <div id="singersSlide" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <div class="row ml-5 mr-5">
                                <div class="col-3">
                                    <img src="https://avatar-nct.nixcdn.com/singer/avatar/2019/10/23/5/b/0/b/1571802458800.jpg" class="border rounded-circle">
                                    <p class="mt-1">Hoàng Thùy Linh</p>
                                </div>
                                <div class="col-3">
                                    <img src="https://avatar-nct.nixcdn.com/singer/avatar/2019/09/12/c/3/c/7/1568279069160.jpg" class="border rounded-circle">
                                    <p class="mt-1">Bích Phương</p>
                                </div>
                                <div class="col-3">
                                    <img src="https://avatar-nct.nixcdn.com/singer/avatar/2019/09/26/1/d/b/5/1569474237302.jpg" class="border rounded-circle">
                                    <p class="mt-1">Hari Won</p>
                                </div>
                                <div class="col-3">
                                    <img src="https://avatar-nct.nixcdn.com/singer/avatar/2018/02/13/b/9/3/2/1518508910343.jpg" class="border rounded-circle">
                                    <p class="mt-1">Khắc Việt</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="row ml-5 mr-5">
                                <div class="col-3">
                                    <img src="https://avatar-nct.nixcdn.com/singer/avatar/2019/10/23/5/b/0/b/1571802458800.jpg" class="border rounded-circle">
                                    <p class="mt-1">Hoàng Thùy Linh</p>
                                </div>
                                <div class="col-3">
                                    <img src="https://avatar-nct.nixcdn.com/singer/avatar/2019/09/12/c/3/c/7/1568279069160.jpg" class="border rounded-circle">
                                    <p class="mt-1">Bích Phương</p>
                                </div>
                                <div class="col-3">
                                    <img src="https://avatar-nct.nixcdn.com/singer/avatar/2019/09/26/1/d/b/5/1569474237302.jpg" class="border rounded-circle">
                                    <p class="mt-1">Hari Won</p>
                                </div>
                                <div class="col-3">
                                    <img src="https://avatar-nct.nixcdn.com/singer/avatar/2018/02/13/b/9/3/2/1518508910343.jpg" class="border rounded-circle">
                                    <p class="mt-1">Khắc Việt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#singersSlide" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#singersSlide" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- space -->
{{--            <div style="background-color: #3f3f3f; height: 50px"></div>--}}
            <div style="background-color: #EEEEEE; height: 50px"></div>
        </div>
    </div>

    @endsection
