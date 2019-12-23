@extends('back.layout.master')
@section('content')
    <form method="post" action="{{route('movie-categories.update', $movieCategory->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Thể loại</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên thể loại" value="{{$movieCategory->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
