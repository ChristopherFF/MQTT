<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            text-align: center;
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Title Goes Here</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>



<div class="container">

    <h3>Showroom/Test site</h3>
    <h3>VRM ID: 0cae7d0df73d</h3>

    <table class="mt-5">
        <tr>
            <th>Site Name</th>
            <th>VRM ID</th>
            <th>Meter ID</th>
            <th>Set State</th>
            <th>Time Set</th>
            <th>Reported State</th>
            <th>Reported Time</th>
            <th>On</th>
            <th>Off</th>
        </tr>
        @foreach($meters as $meter)
            <tr>
                <td>{{ $meter->site_name }}</td>
                <td>{{ $meter->vrm_id }}</td>
                <td>{{ $meter->meter_id }}</td>
                <td>{{ $meter->set_state }}</td>
                <td>{{ $meter->time_set }}</td>
                <td>{{ $meter->verified_state }}</td>
                <td>{{ $meter->time_verified }}</td>
                <td><a href="/setMeterState/{{ $vrm_id }}/{{ $meter->meter_id }}/1" class="btn btn-success btn-lg active" role="button" aria-pressed="true">{{ $meter->meter_id }}: On</a></td>
                <td><a href="/setMeterState/{{ $vrm_id }}/{{ $meter->meter_id }}/0" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">{{ $meter->meter_id }}: Off</a></td>
            </tr>
        @endforeach
    </table>

</div>

</body>
</html>
