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
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-warning float-right" href="{{route('movie-categories.edit', $movieCategory->id)}}">Sửa</a>
                        </div>
                        <div class="col-6">
                            <form method="post" action="{{route('movie-categories.destroy', $movieCategory->id)}}">
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
