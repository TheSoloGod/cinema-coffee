@extends('back.layout.master')
@section('content')
    <form method="post" action="{{route('agencies.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên cơ sở</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên cơ sở">
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Nhập Số điện thoại">
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Nhập địa chỉ"></textarea>
        </div>
        <div class="form-group">
            <label for="agency-content">Giới thiệu</label>
            <textarea class="form-control" id="agency-content" name="content" rows="3"
                      placeholder="Giới thiệu cơ sở"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Nhập tên cơ sở">
        </div>
        <button type="submit" class="btn btn-primary">Thêm cơ sở</button>
    </form>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'agency-content' );
    </script>
@endsection
