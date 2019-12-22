@extends('front.layout.master')

@section('content')
    <div class="container-fluid mt-3 mb-3">
        <div class="container p-0">

            <!-- slide -->
            <div id="carouselExampleIndicators" class="carousel slide shadow-body" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cafephim.vn/wp-content/uploads/2019/10/u22_don_thu_xem_phim_99k_cafe_phim_ha_noi.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cafephim.vn/wp-content/uploads/2019/10/u22_don_thu_xem_phim_99k_cafe_phim_ha_noi.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cafephim.vn/wp-content/uploads/2019/10/u22_don_thu_xem_phim_99k_cafe_phim_ha_noi.jpg"
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

            <!-- intro -->
            <div class="shadow-body text-center mt-4">
                <div class="pt-4 pb-2" style="color: black; font-size: xx-large; font-weight: bold">
                    Cafe phim phòng riêng
                </div>
                <div class="pl-5 pr-5">
                    là hệ thống rạp chiếu phim mini hàng đầu Hà Nội được nhiều người yêu thích và lựa chọn hiện nay với
                    chất lượng dịch vụ đỉnh cao không thua kém gì các rạp chiếu phim cỡ lớn.
                </div>
                <div class="pt-2 pb-2" style="color: #dd903c; font-size: xx-large; font-weight: bold">
                    Cafe phim
                </div>
                <div class="pl-5 pr-5">
                    Mang tới trải nghiệm tuyệt vời không chỉ về điện ảnh mà còn cả về không gian kiến trúc,
                    nghệ thuật ẩm thực. Với dịch vụ cao cấp, sáng tạo và độc đáo của Cine café, chúng tôi tin bạn sẽ có
                    những giờ phút tận hưởng “ Hơn cả rạp chiếu phim” tại đây.
                </div>
                <div class="pt-3 pb-5" style="color: red; font-size: xx-large; font-weight: bold">
                    HOTLINE ĐẶT PHÒNG: 036 586 9993
                </div>
            </div>

            <!-- order now -->
            <div class="shadow-body text-center mt-4">
                <div class="pt-5 pb-5">
                    <a href="#">
                        <img class="aligncenter wp-image-1575 size-medium"
                             src="https://cafephim.vn/wp-content/uploads/2019/06/nút-giảm-20-300x87.png"
                             alt="" width="300" height="87">
                    </a>
                </div>
            </div>

            <!-- agency -->
            <div class="mt-4 text-center">
                <div style="color: #dd903c; font-size: xx-large; font-weight: bold">
                    04 cơ sở Cafe Phim với hơn 40 phòng chiếu
                </div>
                <hr>
            </div>

            <div class="">
                <div class="row">
                    <div class="col-6 mt-4">
                        <div class="shadow-body">
                            <img src="https://images02.foap.com/images/0bd9cf71-6894-44d9-89e5-b528b606e191/central-cafe-cinema.jpeg?filename=w1280&dw=960"
                                 alt=""
                                 style="width: 100%; padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="shadow-body">
                            <img src="https://images02.foap.com/images/0bd9cf71-6894-44d9-89e5-b528b606e191/central-cafe-cinema.jpeg?filename=w1280&dw=960"
                                 alt=""
                                 style="width: 100%; padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="shadow-body">
                            <img src="https://images02.foap.com/images/0bd9cf71-6894-44d9-89e5-b528b606e191/central-cafe-cinema.jpeg?filename=w1280&dw=960"
                                 alt=""
                                 style="width: 100%; padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="shadow-body">
                            <img src="https://images02.foap.com/images/0bd9cf71-6894-44d9-89e5-b528b606e191/central-cafe-cinema.jpeg?filename=w1280&dw=960"
                                 alt=""
                                 style="width: 100%; padding: 5%"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- romantic -->
            <div class="mt-4 text-center">
                <div style="color: #dd903c; font-size: xx-large; font-weight: bold">
                    Không gian lãng mạn
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 3%"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- order now -->
            <div class="shadow-body text-center mt-4">
                <div class="pt-5 pb-5">
                    <a href="#">
                        <img class="aligncenter wp-image-1575 size-medium"
                             src="https://cafephim.vn/wp-content/uploads/2019/06/nút-giảm-20-300x87.png"
                             alt="" width="300" height="87">
                    </a>
                </div>
            </div>

            <!-- service -->
            <div class="mt-4 text-center">
                <div style="color: #dd903c; font-size: xx-large; font-weight: bold">
                    Dịch vụ đa dạng
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- foods -->
            <div class="mt-4 text-center">
                <div style="color: #dd903c; font-size: xx-large; font-weight: bold">
                    Ẩm thực độc đáo
                </div>
                <hr>
                <div class="shadow-body">
                    <img src="https://cafephim.vn/wp-content/uploads/2019/03/web-02.jpg" alt=""
                    class="w-100" style="padding: 3%">
                </div>
            </div>

            <!-- special -->
            <div class="mt-4 text-center">
                <div class="row">
                    <div class="col-4 mt-4">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="shadow-body">
                            <img src="https://i.ytimg.com/vi/3mnDyJW9gHc/maxresdefault.jpg"
                                 alt=""
                                 class="w-100" style="padding: 5%"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- advertisement -->
            <div class="mt-4 text-center">
                <div class="shadow-body">
                    <img src="https://cafephim.vn/wp-content/uploads/2019/06/dat_phong_nhanh_tang_01_do_uong_cafe_phim_cine_cafe_ha_noi-02.jpg" alt=""
                         class="w-100" style="padding: 3%">
                </div>
            </div>

        </div>
    </div>

    @endsection
