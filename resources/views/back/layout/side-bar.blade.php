<link href="{{asset('back/home/sidebar.css')}}" rel="stylesheet">
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="{{route('agencies.index')}}">
                    Cinema-coffee
                </a>
            </li>
            <li>
                <a href="{{route('agencies.index')}}">Cơ sở</a>
            </li>
            <li>
                <a href="{{route('extensions.index')}}">Dịch vụ</a>
            </li>
            <li>
                <a href="{{route('room-prices.index')}}">Giá phòng</a>
            </li>
            <li>
                <a href="{{route('room-orders.index')}}">Đặt phòng</a>
            </li>
            <li>
                <a href="{{route('menus.index')}}">Thực đơn</a>
            </li>
            <li>
                <a href="{{route('movies.index')}}">Phim</a>
            </li>
            <li>
                <a href="{{route('newses.index')}}">Tin tức</a>
            </li>
            <li>
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Đăng xuất</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
{{--    <div id="page-content-wrapper">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h1>Simple Sidebar</h1>--}}
{{--                    <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>--}}
{{--                    <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>--}}
{{--                    <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">Đóng mở</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
{{--<script>--}}
{{--    $("#menu-toggle").click(function(e) {--}}
{{--        e.preventDefault();--}}
{{--        $("#wrapper").toggleClass("toggled");--}}
{{--    });--}}
{{--</script>--}}

<!-- Sidebar -->
{{--<div style="width: 100%; background-color: darkorange">--}}
{{--    <ul >--}}
{{--        <li >--}}
{{--            <a href="#">--}}
{{--                Cinema-coffee--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">Cơ sở</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">Dịch vụ</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">Giá phòng</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">Đặt phòng</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">Thực đơn</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">Phim</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">Tin tức</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">Đăng xuất</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}
