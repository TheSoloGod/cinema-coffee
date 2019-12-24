@extends('back.layout.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tên bảng giá</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($roomPrices as $key => $roomPrice)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td><img width="150px" src="{{asset("upload/images/$roomPrice->image")}}"></td>
                <td>{{$roomPrice->name}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('room-prices.edit', $roomPrice->id)}}">Sửa</a>
                    <form method="post" action="{{route('room-prices.destroy', $roomPrice->id)}}">
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
