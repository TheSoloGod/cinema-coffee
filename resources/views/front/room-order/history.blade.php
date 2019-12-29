@php
    $stt = 0;
@endphp
@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header-title">
                        Lịch sử đặt phòng
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Tên cơ sở</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Trạng thái</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roomOrders as $key => $roomOrder)
                <tr>
                    <th scope="row">{{++$stt}}</th>
                    <td>{{$roomOrder->name}}</td>
                    <td>{{$roomOrder->phone}}</td>
                    <td>{{$roomOrder->agency->name}}</td>
                    <td>{{$roomOrder->time . ' '}}{{date('d-m-Y',strtotime($roomOrder->created_at))}}</td>
                    <td><span class="
                                    @if ($roomOrder->status_id == 1)
                                        {{'bg-success text-light'}}
                                    @endif
                                    @if ($roomOrder->status_id == 3)
                                        {{'bg-danger text-light'}}
                                    @endif
                                    ">{{$roomOrder->status->name}}</span></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection