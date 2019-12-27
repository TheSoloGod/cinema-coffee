@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Kết quả tìm kiếm "{{ $keyWord }}"
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-9 shadow-body p-4">
                @if($movies->count() == 0)
                    <div class="text-center subtitle-body pt-5">
                        <strong>
                            Không tìm thấy kết quả nào!
                        </strong>
                    </div>
                    @else
                @foreach($movies as $key => $movie)
                    <div>
                        <span>
                            <strong>
                                {{ ++$key }}.
                            </strong>
                        </span>
                        <span>
                            <strong>
                                <a href="{{ route('movie.detail', $movie->id) }}" style="color: black">
                                    {{ $movie->name }}
                                </a>
                            </strong>
                        </span>
                    </div>
                    <hr>
                @endforeach
                    @endif
            </div>
            <div class="col-3">
                <!-- search -->
                <div class="input-group mb-3">
                    <form class="w-100" method="post" action="{{ route('movie.search') }}">
                        @csrf
                        <div class="row pr-3 pl-3">
                            <div class="col-8 p-0">
                                <input type="text" class="form-control" placeholder="Nhập tên phim" name="key_word">
                            </div>
                            <div class="col-4 p-0">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-warning" type="submit">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- film catgory -->
                <div class="shadow-body">
                    <div class="text-center pt-3 pb-2">
                        <strong>
                            Danh mục phim
                        </strong>
                    </div>
                    <div class="sticky-menu">
                        <div class="sticky-menu">
                            @foreach($movieCategories as $key => $movieCategory)
                                <a class="" href="#">
                                    <div class="sticky-item">
                                        {{ $movieCategory->name }}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- order now -->
                <div class="shadow-body text-center mt-4">
                    <div class="">
                        <a href="{{ route('room.order') }}">
                            <img class="w-100 p-2"
                                 src="https://cafephim.vn/wp-content/uploads/2019/06/nút-giảm-20-300x87.png"
                                 alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
