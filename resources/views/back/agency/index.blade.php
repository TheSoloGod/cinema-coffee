@extends('back.layout.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tên cơ sở</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($agencies as $key => $agency)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td><img width="150px" src="{{asset("upload/images/$agency->image")}}"></td>
                <td>{{$agency->name}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('agencies.edit', $agency->id)}}">Sửa</a>
                    <form method="post" action="{{route('agencies.destroy', $agency->id)}}">
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
