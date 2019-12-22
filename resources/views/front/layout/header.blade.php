<link href="{{asset('front/home/navbar.css')}}" rel="stylesheet">
<div class="container-fluid bg-orange border border-bottom font-weight-bold">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-orange sticky-top">
            <a class="navbar-brand m-0 p-0" href="#" style="width: 190px">
                <img src="http://dunellen-theater.com/wp-content/uploads/2018/12/dunellen-theater-logo.png" class="w-75">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left side of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link nav-link-grow-up dropdown" href="#">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link nav-link-grow-up dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cơ sở
                        </a>
                        <div class="dropdown-menu bg-orange mt-4" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Xã Đàn</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Mỹ Đình</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Hà Đông</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Long Biên</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link nav-link-grow-up dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dịch vụ
                        </a>
                        <div class="dropdown-menu bg-orange mt-4" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cafe phim phòng riêng</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Xem phim gia đình</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Tổ chức sự kiện lãng mạn</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Tổ chức sinh nhật</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Tổ chức Offline</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Tổ chức hội thảo, học nhóm</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link nav-link-grow-up" href="#">
                            Giá phòng
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link nav-link-grow-up" href="#">
                            Đặt phòng
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link nav-link-grow-up" href="#">
                            Thực đơn
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link nav-link-grow-up" href="#">
                            Phim
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link nav-link-grow-up dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tin tức
                        </a>
                        <div class="dropdown-menu bg-orange mt-4" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Khyến mại</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cafe phim</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Tuyển dụng</a>
                        </div>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('register') }}">{{ __('Đăng kí') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Đăng xuất') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</div>
