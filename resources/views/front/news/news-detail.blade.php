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
                            Combo Trang Trí Giáng Sinh Ưu Đãi
                        </div>
                        <br>
                        <div>
                            <p>
                                ” ANH ƠI, GIÁNG SINH NÀY LÀ SINH NHẬT EM”
                                <br>
                                <br>
                                Anh à, em đã chán với những món quà tặng rồi, em muốn một điều gì đó thật đặc biệt
                                <br>
                                <br>
                                Không khó nghĩ đâu các chàng trai vì CINECAFE sẽ mang đến điều đặc biệt ngay đây
                                <br>
                                <br>
                                — ĐIỀU KIỆN ÁP DỤNG–
                                <br>
                                🎄Tặng 100% Set Bàn Tình Yêu đối với khách iu có sinh nhật vào ngày 24-25/12
                                <br>
                                Tặng 30% Set Bàn Tình Yêu đối với khách iu có sinh nhật trong tháng 12
                                <br>
                                Đặt phòng tại fanpage hoặc website, zalo trước 24 giờ
                                <br>
                                ‼️ Lưu ý là sinh nhật bạn hay người ấy đều được nha
                                <br>
                                <br>
                                💥Một đêm Sinh Nhật “mix” Giáng Sinh như này thì thật đáng nhớ phải không nào!!!
                                <br>
                                <br>
                                Click ngay link 👇 phía dưới để nhanh tay đặt phòng tại căn phòng lấp lánh của CINE và cùng ngân nga câu hát Happy Birthday & Merry Christmas nhé ^^
                                <br>
                                <br>
                                https://cafephim.vn/dat-phong-cine-cafe/
                                <br>
                                <br>
                                __________✨✨✨_________
                                <br>
                                <br>
                                #CineCafe
                                <br>
                                #TổChứcSựKiện
                                <br>
                                #HàNội
                                <br>
                                #TỏTình
                                <br>
                                #Giáng_Sinh
                                <br>
                                #Noel
                                <br>
                                <br>
                                🔔CINE Xã Đàn: 166 đường ven hồ Xã Đàn, Đống Đa
                                <br>
                                CINE Yên Lãng: 136 Yên Lãng, Đống Đa
                                <br>
                                CINE Chùa Láng: 61/82 Chùa Láng, Đống Đa
                                <br>
                                CINE An Hòa: 30 phố An Hòa, Hà Đông
                                <br>
                                <br>
                                💻Inbox page ngay để nhận thêm cực nhiều ưu đãi khác
                                <br>
                                hoặc truy cập website để tìm hiểu thêm về cafe phim của chúng tôi: https://cafephim.vn/
                                <br>
                                <br>
                                ☎️Nhấc máy ngay để được tư vấn: 02473 033 088
                            </p>
                        </div>
                    </div>

                    <div class="shadow-body mt-4">
                        <img src="https://cafephim.vn/wp-content/uploads/2019/12/gs.jpg" alt=""
                        class="w-100">
                    </div>

                    <!-- sharing -->
                    <div class="social-sharing-buttons mt-5">
                        <span class="btn btn-light" data-toggle="tooltip" data-original-title="Share"><i class="fa fa-share-alt"></i></span>
                        <span class="btn btn-success">
                        <a style="color: white" href="http://twitter.com/intent/tweet/?text=Joker (2019) : Joker&amp;url=https://phim.cafephim.vn/film/joker-2019-joker/" title="Joker (2019) : Joker" onclick="window.open(this.href, 'newwindow', 'width=700,height=450'); return false;">Twitter</a>
                    </span>
                        <span class="btn btn-primary">
                        <a style="color: white" href="http://www.facebook.com/sharer/sharer.php?u=https://phim.cafephim.vn/film/joker-2019-joker/" title="Joker (2019) : Joker" onclick="window.open(this.href, 'newwindow', 'width=700,height=450'); return false;">Facebook</a>
                    </span>
                        <span class="btn btn-danger">
                        <a style="color: white;" href="http://plus.google.com/share?url=https://phim.cafephim.vn/film/joker-2019-joker/" title="Joker (2019) : Joker" onclick="window.open(this.href, 'newwindow', 'width=700,height=450'); return false;">Google+</a>
                    </span>
                        <span class="btn btn-info">
                        <a style="color: white" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://phim.cafephim.vn/film/joker-2019-joker/&amp;title=Joker (2019) : Joker" title="Joker (2019) : Joker" onclick="window.open(this.href, 'newwindow', 'width=700,height=450'); return false;">LinkedIn</a>
                    </span>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                @include('front.layout.menu-service-sticky')
            </div>
        </div>
    </div>
    @endsection
