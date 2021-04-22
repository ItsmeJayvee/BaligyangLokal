<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('multimedia/favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <title>Digital Emporium Davao</title>
    </head>
    <body>

        <div class="slider fullscreen">
            <ul class="slides">
                <li>
                    <img src="{{asset('multimedia/shop.jpg')}}"> <!-- random image -->
                    <div class="caption">
                        <div class="row">
                            <div class="col m3 l3"></div>
                            <div class="col s12 m6 l6">
                                <div class="card">
                                    <div class="card-content container">
                                        <div class="row">
                                            <div class="input-field col s12 m12 l12 center-align">
                                                <h5 class="black-text">Login</h5>
                                                <h6 class="red-text hide" style="font-size: small;" id="errorMessage"></h6>
                                            </div>
                                            <form action="/authenticate/lokaluser" method="POST">
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
                                            <div class="col s6 m6 l6 left-align">
                                                <p class="black-text" style="font-size: x-small">
                                                    Don't have an account?
                                                </p>
                                                <a href="/createAccount" style="font-size: x-small" class="green-text">Register here</a>
                                            </div>
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

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    </body>
</html>