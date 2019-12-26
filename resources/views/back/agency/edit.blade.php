@extends('back.layout.master')
@section('content')
    <form method="post" action="{{route('agencies.update', $agency->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Tên cơ sở</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên cơ sở" value="{{$agency->name}}">
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Nhập Số điện thoại" value="{{$agency->phone}}">
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Nhập địa chỉ">{{$agency->address}}</textarea>
        </div>
        <div class="form-group">
            <label for="agency-content">Giới thiệu</label>
            <textarea class="form-control" id="agency-content" name="content" rows="3"
                      placeholder="Giới thiệu cơ sở">{{$agency->content}}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Nhập tên cơ sở">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'agency-content' );
    </script>
@endsection
