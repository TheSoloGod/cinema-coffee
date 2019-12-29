@extends('back.layout.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tên bảng giá</th>
            <th scope="col" class="text-center">
                <a class="btn btn-primary" href="{{ route('room-prices.create') }}">
                    Thêm bảng giá mới
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($roomPrices as $key => $roomPrice)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td><img width="150px" src="{{asset("upload/images/$roomPrice->image")}}"></td>
                <td>{{$roomPrice->name}}</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-warning float-right" href="{{route('room-prices.edit', $roomPrice->id)}}">Sửa</a>
                        </div>
                        <div class="col-6">
                            <form method="post" action="{{route('room-prices.destroy', $roomPrice->id)}}">
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
