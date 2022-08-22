<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="dc.language" content="{{ app()->getLocale() }}">
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jetpet">
    <meta name="author" content="Ahmet Arşiv">
    <meta name="generator" content="Jetpet">
    @yield('meta')

    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('/plugins/toastr/toastr.min.css')}}">
    @include('admin.layouts.stylesheet')
    @yield('css')
</head>
<body>

<div class="d-flex" id="wrapper">

    <div class="border-end d-flex d-sm-flex" id="sidebar-wrapper">
        <div class="sidebar-heading">
            <div class="list-group list-group-flush sidebar-menu">

                <a class="sidebar-logo-link d-md-none d-lg-none d-xl-none d-xxl-none"
                   href="{{route('admin.dashboard')}}">
                    <img class="sidebar-logo" src="{{ url('https://demo.codenteq.com/images/laerx.png') }}" alt="logo">
                </a>

                @include('admin.layouts.partials.sidebar')

            </div>
        </div>
    </div>
    <div class="sidebar-toggle-button">
        <a class="btn btn-light" id="sidebarToggle"><i class="bi bi-list fs-4"></i></a>
    </div>

    <div id="page-content-wrapper">

        @include('admin.layouts.partials.navbar-top')

        <div class="content-app">
            @yield('content')
        </div>

        @include('admin.layouts.partials.navbar')

    </div>
</div>

@yield('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>
<script>
    VMasker(document.getElementsByName('phone')).maskPattern("(999) 999-9999");
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('/plugins/toastr/custom-toastr.js')}}"></script>
<script src="{{asset('js/post.js')}}"></script>
</body>
</html>
