@extends('back.layout.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tên phim</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $key => $movie)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td><img width="150px" src="{{asset("upload/images/$movie->image")}}"></td>
                <td>{{$movie->name}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('movies.edit', $movie->id)}}">Sửa</a>
                    <form method="post" action="{{route('movies.destroy', $movie->id)}}">
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
