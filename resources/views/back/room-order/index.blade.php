@extends('back.layout.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Tên cơ sở</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($roomOrders as $key => $roomOrder)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$roomOrder->name}}</td>
                <td>{{$roomOrder->phone}}</td>
                <td>{{$roomOrder->agency->name}}</td>
                <td>
                    <a class="btn btn-success" href="{{route('room-orders.show', $roomOrder->id)}}">Chi tiết</a>
                    <form method="post" action="{{route('room-orders.destroy', $roomOrder->id)}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa')">Xóa
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
