<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('multimedia/favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <title>Baligyang Lokal</title>
    </head>
    <body>
        <nav class="blue accent-1">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
        </nav>

        <ul id="slide-out" class="sidenav sidenav-close sidenav-fixed">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{ asset('multimedia/user.jpg') }}">
                    </div>
                    <a href="#user"><img class="circle" src=""></a>
                    <a href="#name"><span class="black-text name"></span></a>
                    <a href="#email"><span class="black-text email"></span></a>
                </div>
            </li>
            <li><a href="/user/dashboard" class="waves-effect"><i class="material-icons left">dashboard</i>Dashboard</a></li>
            <li><a href="/user/order" class="waves-effect"><i class="material-icons left">shopping_basket</i>Orders</a></li>
            <li><a href="/user/accountSettings" class="waves-effect"><i class="material-icons left">account_box</i>Account Settings</a></li>
            <li><div class="divider"></div></li>
            <li><a href="/logout" class="waves-effect"><i class="material-icons left">exit_to_app</i>Logout</a></li>
        </ul>
        <div class="row">
            <div class="col m3 l3"></div>
            <div class="col s12 m9 l9">
                @yield('usercontent')
            </div>
        </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/user.js') }}"></script>
    </body>
</html>