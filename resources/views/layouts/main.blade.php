<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Residency Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="/search.css">
    <link rel="stylesheet" href="/broadcast.css">
    <link rel="stylesheet" href="/newresident.css">
    <link rel="stylesheet" href="/settings.css">
</head>
<body>
    <div id="mainbar">
        <img src="{{asset('images/keck-logo.png')}}" alt="USC Keck Logo">
    </div>

    <div class="sidebar">
        <div id="profilepic"></div>
        <header>Main Admin</header>
        <hr>
        <ul>
            <li id="resident-search" class="nav-item">
                <a href="{{route('search.index')}}" class="nav-link">Search</a>
            </li>
            <li id="broadcast" class="nav-item">
                <a href="{{route('broadcast.index')}}" class="nav-link">Broadcast</a>
            </li>
            <li id="add-resident" class="nav-item">
                <a href="{{route('new.index')}}" class="nav-link">Add New Resident</a>
            </li>
            <li id="settings" class="nav-item">
                <a href="{{route('settings.index')}}" class="nav-link">Settings</a>
            </li>
        </ul>
    </div>

    <div id="content">
        <main>
            @yield("content")
        </main>
    </div>
</body>
<script src="/broadcast.js"></script>
</html>