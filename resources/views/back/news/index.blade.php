@extends('back.layout.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($newses as $key => $news)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td><img width="150px" src="{{asset("upload/images/$news->image")}}"></td>
                <td>{{$news->title}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('newses.edit', $news->id)}}">Sửa</a>
                    <form method="post" action="{{route('newses.destroy', $news->id)}}">
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