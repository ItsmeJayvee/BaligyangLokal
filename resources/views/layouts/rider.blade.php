<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('multimedia/favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/rider.css') }}">
        <title>Lokal Rider Panel</title>
    </head>
    <body>
      @guest
        <div class="slider fullscreen">
          <ul class="slides">
            <li>
              <img src="{{ asset('multimedia/rider.jpg') }}">
              <div class="caption">
                <div class="row">
                  <div class="col m3 l3"></div>
                  <div class="col s12 m6 l6">
                    <div class="card">
                      <div class="card-content container">
                        <div class="row">
                          <div class="input-field col s12 m12 l12 center-align">
                              <h5 class="black-text">Rider Login</h5>
                              <h6 class="red-text hide" style="font-size: small;" id="errorMessage"></h6>
                          </div>
                          <form action="/authenticate/lokalrider" method="POST">
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
        <ul id="slide-out" class="sidenav sidenav-close sidenav-fixed">
          <li>
            <div class="user-view">
              <div class="background">
                <img src="{{ asset('multimedia/user.jpg') }}">
              </div>
              <a href="#user"><img class="circle" src=""></a>
              <a href="#name"><span class="white-text name" id="riderName"></span></h6>
              <a href="#email"><span class="white-text email" id="riderEmail"></span></a>
            </div>
          </li>
          <li><a class="waves-effect" href="/lokalr1d3rdash"><i class="material-icons left">dashboard</i>Dashboard</a></li>
          <li><a class="waves-effect" href="/lokalriderdel1v3ries"><i class="material-icons left">motorcycle</i>Deliveries</a></li>
          <li><a class="waves-effect" href="/lokalriders3tt1ngs"><i class="material-icons left">settings</i>Account Settings</a></li>
          <li><div class="divider"></div></li>
          <li><a class="waves-effect" href="/logout"><i class="material-icons left">exit_to_app</i>Logout</a></li>
        </ul>
        <div class="row">
          <div class="col m3 l3"></div>
          <div class="col s12 m9 l9">
            @yield('ridercontent')
          </div>
        </div>
      @endauth

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/rider.js') }}"></script>   
    </body>
</html>