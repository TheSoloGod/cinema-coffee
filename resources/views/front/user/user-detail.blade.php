@extends('front.layout.master')

@section('content')

    <div class="container-fluid paper-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="header-title">
                        Thông tin thành viên
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-6">
                <img src="https://forum.waka.vn/assets/avatars/default.svg"
                    class="w-75 border rounded-circle">
            </div>
            <div class="col-6">
                <form method="post" action="#">
                    @csrf
                    <input>
                </form>
            </div>
        </div>
    </div>
    @endsection
