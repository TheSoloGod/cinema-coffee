@extends('back.layout.master')
@section('content')
    <form method="post" action="{{route('room-prices.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên bảng giá</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Tên bảng giá">
        </div>
        <div class="form-group">
            <label for="room-price-content">Nội dung</label>
            <textarea class="form-control" id="room-price-content" name="content" rows="3"
                      placeholder="Nội dung"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Thêm bảng giá</button>
    </form>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'room-price-content' );
    </script>
@endsection
