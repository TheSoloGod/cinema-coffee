@extends('back.layout.master')
@section('content')
    <div class="card bg-light mb-3">
    <div class="card-header">Thông tin đặt phòng</div>
    <div class="card-body">
        <h5 class="card-title">{{'Tên khách hàng: '}}{{$roomOrder->name}}</h5>
        <h5 class="card-title">{{'Số điện thoại : '}}{{$roomOrder->phone}}</h5>
        <h5 class="card-title">{{'Cơ sở         : '}}{{$roomOrder->agency->name}}</h5>
        <h5 class="card-title">{{'Thời gian     : '}}{{$roomOrder->time . ' '}}{{date('d-m-Y',strtotime($roomOrder->created_at))}}</h5>
        <h5 class="card-title">{{'Trạng thái    : '}}
            <form class="pt-2" id="status-form" action="{{route('room-orders.update', $roomOrder->id)}}" method="POST">
                @csrf
                @method('patch')
                <select onchange="document.getElementById('status-form').submit()" name="status_id" id="status"> 
                    <option {{$roomOrder->status_id == 1?'selected':''}} value="1">Đang sử lý</option>
                    <option {{$roomOrder->status_id == 2?'selected':''}} value="2">Đã đặt</option>
                    <option {{$roomOrder->status_id == 3?'selected':''}} value="3">Đã hủy</option>
                </select>
            </form>
        </h5>            
        <h5 class="card-title">{{'Ghi chú:'}}</h5>
        <p class="card-text">{{$roomOrder->note}}</p>
        <a href="{{route('room-orders.index')}}" class="card-link">Quay lại</a>
    </div>
    </div>
@endsection
