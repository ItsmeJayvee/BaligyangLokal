<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('multimedia/favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <title>Lokal Admin Panel</title>
    </head>
    <body>
        @guest
            <div class="slider fullscreen">
                <ul class="slides">
                    <li>
                        <img src="{{asset('multimedia/admin.jpg')}}">
                        <div class="caption">
                            <div class="row">
                                <div class="col m3 l3"></div>
                                <div class="col s12 m6 l6">
                                    <div class="card">
                                        <div class="card-content container">
                                            <div class="row">
                                                <div class="input-field col s12 m12 l12 center-align">
                                                    <h5 class="black-text">Admin Login</h5>
                                                    <h6 class="red-text hide" style="font-size: small;" id="errorMessage"></h6>
                                                </div>
                                                <form action="/authenticate/lokaladm1n1strat0r" method="POST">
                                                    @csrf
                                                    <div class="input-field col s12 m12 l12">
                                                        <i class="material-icons prefix black-text">email</i>
                                                        <input type="text" name="email" id="email" class="@error('email') is-invalid @enderror">
                                                        <label for="email">Email address</label>
                                                        @error('email')
                                                            <h6 class="center-align red-text" style="font-size: x-small">{{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                    <div class="input-field col s12 m12 l12">
                                                        <i class="material-icons prefix black-text">lock_open</i>
                                                        <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror">
                                                        <label for="password">Password</label>
                                                        @error('password')
                                                            <h6 class="center-align red-text" style="font-size: x-small">{{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                    <div class="input-field col s12 m12 l12 center-align">
                                                        <button class="btn waves-effect waves-light blue accent-1 black-text">Login</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col m3 l3"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        @endguest
        @auth
            <nav class="blue accent-1">
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
            </nav>
            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="{{ asset('multimedia/adminbackground.jpg') }}">
                        </div>
                        <a href="#user"><img class="circle" src="{{ asset('multimedia/adminprofilepic.jpg') }}"></a>
                        <a href="#Administrator"><span class="transparent-text name">Administrator Panel</span></a>
                        <a href="#Administrator"><span class="transparent-text email">Administrator</span></a>
                    </div>
                </li>
                <li><a href="/lokaladm1ndashb04rd">Dashboard<i class="material-icons left">dashboard</i></a></li>
                <li><a href="/lokalr1d3rd4shb04rd">Riders<i class="material-icons left">motorcycle</i></a></li>
                <li><a href="/lokals3ll3rd4shb04rd">Seller<i class="material-icons left">stores</i></a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="/logout">Logout <i class="material-icons left">exit_to_app</i></a></li>
            </ul>
            <div class="row">
                <div class="col m3 l3"></div>
                <div class="col s12 m9 l9">
                    @yield('admincontent')
                </div>
            </div>
        @endauth

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>   
    <script src="{{ asset('js/login.js') }}"></script>
    </body>
</html>