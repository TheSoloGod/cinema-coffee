@extends('back.layout.master')
@section('content')
    <form method="post" action="{{route('movies.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên phim</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên phim">
        </div>
        <div class="form-group">
            <label for="movie-category">Thể loại</label>
            <select id="movie-category" class="form-control" name="movie_category_id">
                @foreach($movieCategories as $movieCategory)
                    <option value="{{$movieCategory->id}}">{{$movieCategory->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="movie-content">Giới thiệu phim</label>
            <textarea class="form-control" id="movie-content" name="content" rows="3"
                      placeholder="Giới thiệu cơ sở"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="time">Thời lượng</label>
            <input type="text" class="form-control" id="time" name="time" placeholder="Thời lượng">
        </div>
        <div class="form-group">
            <label for="year">Năm phát hành</label>
            <input type="number" class="form-control" id="year" name="year" placeholder="Năm phát hành">
        </div>
        <div class="form-group">
            <label for="imdb">IMDb</label>
            <input type="text" class="form-control" id="imdb" name="imdb" placeholder="Điểm IMDb">
        </div>
        <div class="form-group">
            <label for="national">Quốc gia</label>
            <input type="text" class="form-control" id="national" name="national" placeholder="Quốc gia">
        </div>
        <div class="form-group">
            <label for="trailer">Trailer</label>
            <input type="file" class="form-control" id="trailer" name="trailer">
        </div>
        <button type="submit" class="btn btn-primary">Thêm phim</button>
    </form>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('movie-content');
    </script>
@endsection
