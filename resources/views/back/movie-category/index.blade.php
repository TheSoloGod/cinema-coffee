@extends('back.layout.master')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Thể loại</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($movieCategories as $key => $movieCategory)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$movieCategory->name}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('movie-categories.edit', $movieCategory->id)}}">Sửa</a>
                    <form method="post" action="{{route('movie-categories.destroy', $movieCategory->id)}}">
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
