@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Joker (2019) : Joker
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
                        <img src="https://poster.ninja/wp-content/uploads/2019/08/Joker-Movie-Poster-2019-1.jpg" alt=""
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
                                Kinh dị . Tâm lý . Hài hước .
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
                               121 phút
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
                                Mỹ
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
                                2019
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
                                8.7
                            </span>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a href="">
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
                            <video width="100%" height="auto" controls>
                                <source src="{{ asset('front/side-page/trailer.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <br>
                        <div>
                            <p>
                                Joker từ lâu đã là siêu ác nhân huyền thoại của điện ảnh thế giới.
                                Nhưng có bao giờ bạn tự hỏi, Joker đến từ đâu và điều gì đã biến Joker trở thành biểu tượng
                                tội lỗi của thành phố Gotham? JOKER sẽ là cái nhìn độc đáo về tên ác nhân khét tiếng của
                                Vũ trụ DC – một câu chuyện gốc thấm nhuần, nhưng tách biệt rõ ràng với những truyền thuyết
                                quen thuộc xoay quanh nhân vật mang đầy tính biểu tượng này. Bộ phim đã xuất sắc giành
                                giải thưởng Sư Tử Vàng- Phim Hay Nhất tại LHP Venice lần thứ 76, cùng tràng pháo tay dài 8 phút,
                                và lời khen ngợi dành cho diễn xuất của tài tử Joaquin Phoenix.
                                Một bộ phim không thể bỏ lỡ của tháng 10 năm nay.
                            </p>
                        </div>
                    </div>
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
            <div class="col-3">

                <!-- search -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                    <div class="input-group-append">
                        <button class="btn btn-outline-warning" type="button">Tìm kiếm</button>
                    </div>
                </div>

                <!-- film catgory -->
                <div class="shadow-body">
                    <div class="text-center pt-3 pb-2">
                        <strong>
                            Danh mục phim
                        </strong>
                    </div>
                    <div class="sticky-menu">
                        <a class="" href="#">
                            <div class="sticky-item">
                                Hoạt hình
                            </div>
                        </a>
                        <a class="" href="#">
                            <div class="sticky-item">
                                Tâm lý
                            </div>
                        </a>
                        <a class="" href="#">
                            <div class="sticky-item">
                                Kinh dị
                            </div>
                        </a>
                        <a class="" href="#">
                            <div class="sticky-item">
                                Tình cảm - lãng mạn
                            </div>
                        </a>
                        <a class="" href="#">
                            <div class="sticky-item">
                                Hài hước
                            </div>
                        </a>
                        <a class="" href="#">
                            <div class="sticky-item">
                                18+
                            </div>
                        </a>
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
