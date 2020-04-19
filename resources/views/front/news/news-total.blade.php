@extends('front.layout.master')

@section('content')
    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Tin tức
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <!-- news -->
    <div class="container mt-4 mb-5">
        <div class="mt-4">
            <div class="subtitle-body">
                Cinema Coffee news
            </div>
            <hr>
        </div>

        <div class="row">
            @foreach($news as $key => $value)
                <div class="col-4">
                    <div class="shadow-body p-3 mt-3">
                        <a href="{{ route('news.detail', $value->id) }}" style="color: black">
                            <div>
                                <img src="{{asset("upload/images/$value->image")}}" alt=""
                                class="w-100">
                            </div>
                            <div class="ml-4 mr-4 mt-2">
                                <div>
                                    <strong>
                                        {{ $value->title }}
                                    </strong>
                                </div>
    {{--                            <div>--}}
    {{--                                {!! $value->content !!}--}}
    {{--                            </div>--}}
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection
