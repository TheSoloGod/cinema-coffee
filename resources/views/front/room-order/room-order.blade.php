@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header-title">
                        Đặt phòng xem phim
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <img src="{{asset('front/side-page/order-bg.jpg')}}" alt="" class="w-100"
             style="position: absolute; height: 1000px">
        <div class="container pt-5 pb-5" style="position: relative">
            <div class="row">
                <div class="col-md-6">
                    <div class="shadow-body">
                        <img src="https://static.ladipage.net/5b8dea1c8bdb4374b283eacb/cccccccc-01-1559601568.jpg"
                             alt=""
                             class="w-100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shadow-body p-4" style="background-color: white">
                        <div class="text-center pb-2">
                            <div class="subtitle-body">
                                ĐẶT PHÒNG ONLINE
                            </div>
                            <p>
                                Chúng tôi sẽ gọi lại ngay khi nhận được thông tin!
                            </p>
                        </div>
                        <form method="post" action="{{route('room.order.store')}}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-2">
                                    <label>Họ và tên</label>
                                    <input name="name" type="text" class="form-control"
                                           placeholder="Vui lòng điền đầy đủ họ tên" required>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Số điện thoại</label>
                                    <input name="phone" type="text" class="form-control"
                                           placeholder="Vui lòng nhập đúng số điện thoại của bạn" required>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Cơ sở</label>
                                    <select id="agency_id" name="agency_id" class="custom-select my-1 mr-sm-2">
                                        @foreach($agencies as $agency)
                                            <option value="{{$agency->id}}">{{$agency->name}}</option>\
                                        @endforeach
                                    </select>
                                </div>
                                <div style="display:none">
                                    <input name="time" id="time" type="text" class="form-control">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Chọn giờ</label>
                                    <table class="table text-center">
                                        <tbody>
                                            <tr>
                                                <td style="cursor:pointer" scope="row">06:00</td>
                                                <td style="cursor:pointer">08:00</td>
                                                <td style="cursor:pointer">10:00</td>
                                            </tr>
                                            <tr>
                                                <td style="cursor:pointer" scope="row">12:00</td>
                                                <td style="cursor:pointer">14:00</td>
                                                <td style="cursor:pointer">16:00</td>
                                            </tr>
                                            <tr>
                                                <td style="cursor:pointer" scope="row">18:00</td>
                                                <td style="cursor:pointer">20:00</td>
                                                <td style="cursor:pointer">22:00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Ghi chú</label>
                                    <textarea name="note" class="form-control" rows="3"
                                              placeholder="Để lại lời nhắn cho chúng tôi"></textarea>
                                </div>
                            </div>
                            <div class="text-center pt-5 pb-3">
                                <button class="btn btn-warning btn-lg" type="submit">Đặt phòng ngay!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/room-order.js')}}"></script>
@endsection
