<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
{{--    <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">--}}

<!-- Booostrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
{{--    <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>--}}
{{--    <script src="{{ asset('js/bootstrap/jquery.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/fontawesome/all.js') }}"></script>--}}

<!-- CSS -->
    <link href="{{asset('front/home/home.css')}}" rel="stylesheet">

    <!-- SCRIPT -->
    <script src="{{ asset('front/home/home.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/ckeditor/ckeditor.js')}}"></script>

    @yield('header')
</head>
<body>
{{--@include('back.layout.header')--}}
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            @include('back.layout.side-bar')
        </div>
        <div class="col-10" style="margin-left: 250px;">
            <div class="container-fluid mt-5 mb-5" style="width: 90%">
                @yield('content')
            </div>
        </div>
    </div>
</div>

@include('back.layout.footer')
@yield('script')
</body>
</html>
