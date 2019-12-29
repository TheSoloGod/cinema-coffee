@php
    $stt = 0;
@endphp
@extends('back.layout.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Tên cơ sở</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Trạng thái</th>
            <th scope="col"></th>
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
                                    {{'bg-success text-light p-1'}}
                                @endif
                                @if ($roomOrder->status_id == 3)
                                    {{'bg-danger text-light p-1'}}
                                @endif
                                ">{{$roomOrder->status->name}}</span></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-success float-right" href="{{route('room-orders.show', $roomOrder->id)}}">Chi tiết</a>
                        </div>
                        <div class="col-6">
                            <form method="post" action="{{route('room-orders.destroy', $roomOrder->id)}}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa')">Xóa
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
