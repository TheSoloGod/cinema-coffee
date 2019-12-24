@extends('back.layout.master')
@section('content')
    <form method="post" action="{{route('menus.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên thực đơn</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Tên thực đơn">
        </div>
        <div class="form-group">
            <label for="menu-content">Nội dung</label>
            <textarea class="form-control" id="menu-content" name="content" rows="3"
                      placeholder="Nội dung"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Thêm thực đơn</button>
    </form>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'menu-content' );
    </script>
@endsection
