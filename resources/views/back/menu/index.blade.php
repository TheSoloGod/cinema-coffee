@extends('back.layout.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tên thực đơn</th>
            <th scope="col" class="text-center">
                <a class="btn btn-primary" href="{{ route('menus.create') }}">
                    Thêm thực đơn mới
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $key => $menu)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td><img width="150px" src="{{asset("upload/images/$menu->image")}}"></td>
                <td>{{$menu->name}}</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-warning float-right" href="{{route('menus.edit', $menu->id)}}">Sửa</a>
                        </div>
                        <div class="col-6">
                            <form method="post" action="{{route('menus.destroy', $menu->id)}}">
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
