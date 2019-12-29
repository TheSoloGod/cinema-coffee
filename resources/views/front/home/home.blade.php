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
                <div class="pt-4 pb-2 subtitle-body" style="color: black">
                    Cafe phim phòng riêng
                </div>
                <div class="pl-5 pr-5">
                    Là hệ thống rạp chiếu phim mini hàng đầu Hà Nội được nhiều người yêu thích và lựa chọn hiện nay với
                    chất lượng dịch vụ đỉnh cao không thua kém gì các rạp chiếu phim cỡ lớn.
                </div>
                <div class="pt-2 pb-2 subtitle-body">
                    Cinema Coffee
                </div>
                <div class="pl-5 pr-5">
                    Mang tới trải nghiệm tuyệt vời không chỉ về điện ảnh mà còn cả về không gian kiến trúc,
                    nghệ thuật ẩm thực. Với dịch vụ cao cấp, sáng tạo và độc đáo của Cinema Coffee, chúng tôi tin bạn sẽ có
                    những giờ phút tận hưởng “ Hơn cả rạp chiếu phim” tại đây.
                </div>
                <div class="pt-3 pb-5 subtitle-body" style="color: red">
                    HOTLINE ĐẶT PHÒNG: 0333.831436
                </div>
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

            <!-- agency -->
            <div class="mt-4 text-center">
                <div class="subtitle-body">
                    04 cơ sở Cinema Coffee với hơn 10 phòng chiếu
                </div>
                <hr>
            </div>

            <div class="">
                <div class="row">
                    @foreach($agencies as $key => $agency)
                    <div class="col-6 mt-4">
                        <a href="{{ route('agency.detail', $agency->id) }}">
                            <div class="shadow-body">
                                <img src="{{asset("upload/images/$agency->image")}}"
                                     alt="" class="home-agency">
                                <div class="text-center pb-3">
                                    <strong style="color: black">
                                        Cơ sở {{ $agency->name  }}
                                    </strong>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- romantic -->
            <div class="mt-4 text-center">
                <div class="subtitle-body">
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
                    <a href="{{ route('room.order') }}">
                        <img class="aligncenter wp-image-1575 size-medium"
                             src="https://cafephim.vn/wp-content/uploads/2019/06/nút-giảm-20-300x87.png"
                             alt="" width="300" height="87">
                    </a>
                </div>
            </div>

            <!-- service -->
            <div class="mt-4 text-center">
                <div class="subtitle-body">
                    Dịch vụ đa dạng
                </div>
                <hr>
                <div class="row">
                    @foreach($extensions as $key => $extension)
                    <div class="col-3 mb-3">
                        <a href="{{ route('extension.detail', $extension->id) }}">
                            <div class="shadow-body">
                                <img src="{{asset("upload/images/$extension->image")}}"
                                     alt=""
                                     class="w-100" style="padding: 5%"
                                >
                                <div class="text-center pb-3">
                                    <strong style="color: black">
                                        {{ $extension->name  }}
                                    </strong>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- foods -->
            <div class="mt-4 text-center">
                <div class="subtitle-body">
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
                        <div class="shadow-body p-4">
                            <span class="float-left">
                                <i class="fa fa-user-plus" style="color: darkorange; font-size: 30px"></i>
                            </span>
                            <span style="font-size: 20px">
                                <strong>
                                    Phòng chiếu riêng tư
                                </strong>
                            </span>
                            <p class="mt-3 text-left">
                                Phòng chiếu hoàn toàn riêng tư cho nhóm xem từ 2 đến 20 người
                            </p>
                        </div>
                    </div>

                    <div class="col-4 mt-4">
                        <div class="shadow-body p-4">
                            <span class="float-left">
                                <i class="fa fa-film" style="color: darkorange; font-size: 30px"></i>
                            </span>
                            <span style="font-size: 20px">
                                <strong>
                                    Kho phim đa dạng
                                </strong>
                            </span>
                            <p class="mt-3 text-left">
                                Kho phim đa dạng thể loại, trên 3000 phim Full HD & 3D được cập nhật liên tục
                            </p>
                        </div>
                    </div>

                    <div class="col-4 mt-4">
                        <div class="shadow-body p-4">
                            <span class="float-left">
                                <i class="fa fa-volume-up" style="color: darkorange; font-size: 30px"></i>
                            </span>
                            <span style="font-size: 20px">
                                <strong>
                                    Âm thanh Home Theater
                                </strong>
                            </span>
                            <p class="mt-3 text-left">
                                Trải nghiệm âm thanh vòm thực sự với dàn âm thanh 5.1 Home Theater
                            </p>
                        </div>
                    </div>

                    <div class="col-4 mt-4">
                        <div class="shadow-body p-4">
                            <span class="float-left">
                                <i class="fa fa-television" style="color: darkorange; font-size: 30px"></i>
                            </span>
                            <span style="font-size: 20px">
                                <strong>
                                    100% sử dụng màn chiếu
                                </strong>
                            </span>
                            <p class="mt-3 text-left">
                                Màn chiếu lớn 150 Inch Full HD tỉ lệ 16:9 mang lại trải nghiệm phim chân thực
                            </p>
                        </div>
                    </div>

                    <div class="col-4 mt-4">
                        <div class="shadow-body p-4">
                            <span class="float-left">
                                <i class="fa fa-cutlery" style="color: darkorange; font-size: 30px"></i>
                            </span>
                            <span style="font-size: 20px">
                                <strong>
                                    Thực đơn phong phú
                                </strong>
                            </span>
                            <p class="mt-3 text-left">
                                Không còn nỗi lo xem phim mà chỉ có CoCa và Bắp rang bơ!
                            </p>
                        </div>
                    </div>

                    <div class="col-4 mt-4">
                        <div class="shadow-body p-4">
                            <span class="float-left">
                                <i class="fa fa-calendar-o" style="color: darkorange; font-size: 30px"></i>
                            </span>
                            <span style="font-size: 20px">
                                <strong>
                                    Thời gian linh hoạt
                                </strong>
                            </span>
                            <p class="mt-3 text-left">
                                Chủ động thời gian đặt xem phim, không cần canh suất chiếu, không cần chờ đợi
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- advertisement -->
            <div class="mt-4 text-center">
                <div class="shadow-body">
                    <a href="{{ route('room.order') }}">
                        <img src="https://cafephim.vn/wp-content/uploads/2019/06/dat_phong_nhanh_tang_01_do_uong_cafe_phim_cine_cafe_ha_noi-02.jpg" alt=""
                             class="w-100" style="padding: 3%">
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection
