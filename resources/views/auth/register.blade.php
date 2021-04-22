<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('multimedia/favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
        <title>Digital Emporium Davao</title>
    </head>
    <body>

        <div class="slider fullscreen">
            <ul class="slides">
                <li>
                    <img src="{{asset('multimedia/shop.jpg')}}">
                    <div class="caption">
                        <div class="row">
                            <div class="col m3 l3"></div>
                            <div class="col s12 m6 l6">
                                <div class="card" id="regCard">
                                    <div class="card-content container">
                                        <div class="row">
                                            <div class="input-field col s12 m12 l12 center-align">
                                                <h5 class="black-text">Register</h5>
                                                <h6 class="red-text hide" style="font-size: small;" id="errorMessage"></h6>
                                            </div>
                                            <form action="/register" method="POST">
                                                @csrf
                                                <input type="hidden" name="role" id="role">
                                                <div class="input-field col s12 m12 l12">
                                                    <i class="material-icons prefix black-text">account_box</i>
                                                    <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror">
                                                    <label for="name">Full name</label>
                                                    @error('name')
                                                        <h6 class="center-align red-text" style="font-size: x-small">{{ $message }}</h6>
                                                    @enderror
                                                </div>
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
                                                <div class="input-field col s12 m12 l12">
                                                    <i class="material-icons prefix black-text">lock_outline</i>
                                                    <input type="password" name="password_confirmation" id="password_confirmation" class="@error('password_confirmation') is-invalid @enderror">
                                                    <label for="password_confirmation">Confirm password</label>
                                                    @error('password_confirmation')
                                                        <h6 class="center-align red-text" style="font-size: x-small">{{ $message }}</h6>
                                                    @enderror
                                                </div>
                                                <div class="input-field col s12 m12 l12 center-align">
                                                    <button class="btn waves-effect waves-light blue accent-1 black-text">Register</button>
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

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    </body>
</html>