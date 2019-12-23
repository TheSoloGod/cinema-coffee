@extends('back.layout.master')
@section('content')
    <form method="post" action="{{route('movie-categories.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Thể loại</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên thể loại">
        </div>
        <button type="submit" class="btn btn-primary">Thêm thể loại</button>
    </form>
@endsection
