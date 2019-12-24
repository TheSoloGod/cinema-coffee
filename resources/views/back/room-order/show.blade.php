@extends('back.layout.master')
@section('content')
    <div class="card bg-light mb-3">
    <div class="card-header">Thông tin đặt phòng</div>
    <div class="card-body">
        <h5 class="card-title">{{'Tên khách hàng: '}}{{$roomOrder->name}}</h5>
        <h5 class="card-title">{{'Số điện thoại : '}}{{$roomOrder->phone}}</h5>
        <h5 class="card-title">{{'Cơ sở         : '}}{{$roomOrder->agency->name}}</h5>
        <h5 class="card-title">{{'Ghi chú:'}}</h5>
        <p class="card-text">{{$roomOrder->note}}</p>
        <a href="{{route('room-orders.index')}}" class="card-link">Quay lại</a>
    </div>
    </div>
@endsection
