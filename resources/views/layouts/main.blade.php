<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <title>@yield('title') - Residency Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/055bf89ae5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @stack('stylesheets')
    @livewireStyles
</head>
<body>
    <div id="mainbar">
        <a href="{{route('search.index')}}" class="nav-link"><img src="{{asset('images/keck-logo.png')}}" alt="USC Keck Logo"></a>
    </div>

    <div class="sidebar">
        <div id="profilepic"></div>
        <header>Main Admin</header>
        <hr>
        <ul>
            <li id="resident-search" class="nav-item">
                <a href="{{route('search.index')}}" class="nav-link"><img src="{{asset('icons/search.svg')}}" class="icons"/> Search</a>
            </li>
            <li id="broadcast" class="nav-item">
                <a href="{{route('broadcast.custom-message')}}" class="nav-link"><img src="{{asset('icons/letter.svg')}}" class="icons"/> Broadcast</a>
            </li>
            <li id="add-resident" class="nav-item">
                <a href="{{route('new.index')}}" class="nav-link"><img src="{{asset('icons/plus-circle.svg')}}" class="icons"/> Add New Resident</a>
            </li>
            <li id="settings" class="nav-item">
                <a href="{{route('settings.admins')}}" class="nav-link"><img src="{{asset('icons/gear.svg')}}" class="icons"/> Settings</a>
            </li>
        </ul>
    </div>

    <div id="content">
        <main>
            @yield("content")
        </main>
    </div>
    @livewireScripts
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stack('scripts')

</html>