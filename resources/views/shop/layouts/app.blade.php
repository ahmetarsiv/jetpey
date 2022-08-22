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
    <link href="{{asset('css/shop.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div id="dashboardLayout">
    <div id="dashboardHeader">
        <div class="dashboardHeader--blue">
            <div class="container">
                <div class="dashboardHeader__logo--wrapper">
                    <img width="188" src="https://webkurumsalapi.istanbulkart.istanbul/Media//logo-white.png">
                    <div id="welcomeDrawer">
                        <i class="bi bi-list"></i>
                    </div>
                    <div id="profile" itemid="navigateAccountBtnTest">
                        <div class="MuiBox-root jss956 profileAvatar--blue">
                            <i class="bi bi-person-fill"></i>
                            <div class="MuiBox-root jss957">
                                <div class="MuiBox-root jss958">
                                    <div class="MuiBox-root jss959 user--name">Ahmet Arsiv</div>
                                </div>
                                <div class="MuiBox-root jss961">
                                    <a>Hesabım</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="/">
                            <i class="bi bi-house-door-fill"></i>
                        </a>
                    </li>
                    <li><a href="#">Kartlarım</a></li>
                    <li><a href="#">İşlemler</a></li>
                    <li><a href="#">Bul</a></li>
                    <li><a href="#">Kart Başvurusu</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="content-app">
    @yield('content')
</div>

@yield('js')
<script src="{{asset('js/shop.js')}}"></script>
</body>
</html>
