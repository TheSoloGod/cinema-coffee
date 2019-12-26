@extends('back.layout.master')
@section('content')
    <form method="post" action="{{route('newses.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề">
        </div>
        <div class="form-group">
            <label for="type">Loại tin</label>
            <div class="form-group">
                <select id="type" class="form-control" name="type">
                        <option>Khuyến mãi</option>
                        <option>Cafe phim</option>
                        <option>Tuyển dụng</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="news-content">Nội dung</label>
            <textarea class="form-control" id="news-content" name="content" rows="3"
                      placeholder="Nội dung tin tức"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Thêm tin</button>
    </form>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'news-content' );
    </script>
@endsection
