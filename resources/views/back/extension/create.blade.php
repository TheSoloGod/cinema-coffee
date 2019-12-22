@extends('back.layout.master')
@section('content')
    <form method="post" action="{{route('extensions.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên dịch vụ</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Tên dịch vụ">
        </div>
        <div class="form-group">
            <label for="extension-content">Giới thiệu dịch vụ</label>
            <textarea class="form-control" id="extension-content" name="content" rows="3"
                      placeholder="Giới thiệu dịch vụ"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Nhập tên cơ sở">
        </div>
        <button type="submit" class="btn btn-primary">Thêm dịch vụ</button>
    </form>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'extension-content' );
    </script>
@endsection
