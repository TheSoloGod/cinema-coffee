@extends('front.layout.master')

@section('content')

    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">Cinema Coffee</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row shadow-body mt-4 mb-4 p-3">
            <div class="col-6">
                <div class="subtitle-body">
                    Tiêu chuẩn Cinema Coffe
                </div>
                <br>
                <div>
                    <p style="font-size: 14px">
                        Chúng tôi luôn hiểu rằng với xã hội phát triển và nhịp sống công việc hối hả,
                        thì nhu cầu xem phim để giải trí và xả stress không ngừng phát triển.
                        Cơ hội luôn ở phía trước thách thức chúng tôi không ngừng thay đổi,
                        nâng cấp chất lượng và dịch vụ để luôn giữ vững thương hiệu "<strong>CINEMA COFFEE</strong>"
                        trong suốt nhiều năm qua tại thủ đô Hà Nội.
                        <br>
                        <br>
                        Giá trị cốt lõi mà Cineme Coffee hướng tới không bao giờ thay đổi đó là
                        "Mang lại trải nghiệm phim hơn cả rạp chiếu phim". Điều này không còn là xa vời, bằng những
                        cố gắng nâng cao chất lượng dịch vụ, Cinema Coffee luôn là sự lựa chọn thông minh cho những bạn trẻ
                        thực sự yêu phim và muốn không gian riêng tư, thoải mái, tự chọn phim theo sở thích, không phải
                        xếp hàng chờ mua vé,vui vẻ bên bạn bè mà không lo ảnh hưởng tới đám đông....
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <img src="https://cafephim.vn/wp-content/uploads/2017/02/phong-chieu-phim-cafe-phim-yen-lang.jpg"
                         alt=""
                         class="w-100"
                    >
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <!-- agency -->
        <div class="mt-4 text-center">
            <div class="subtitle-body">
                04 cơ sở Cinema Coffee với hơn 40 phòng chiếu
            </div>
            <hr>
        </div>

        <div class="">
            <div class="row">
                @foreach($agencies as $key => $agency)
                <div class="col-6 mt-4">
                    <div class="shadow-body">
                        <a href="{{ route('agency.detail', $agency->id) }}">
                            <img src="{{asset("upload/images/$agency->image")}}" style="width: 100%; padding: 5%">
                            <div class="text-center pb-3">
                                <strong style="color: black">
                                    Cơ sở {{ $agency->name  }}
                                </strong>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
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
