<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('multimedia/favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/seller.css') }}">
        <title>Baligyang Lokal</title>
    </head>
    <body>
      @guest
        <div class="slider fullscreen">
          <ul class="slides">
            <li>
              <img src="{{ asset('multimedia/seller.jpg') }}">
              <div class="caption">
                <div class="row">
                  <div class="col m3 l3"></div>
                  <div class="col s12 m6 l6">
                    <div class="card">
                      <div class="card-content container">
                        <div class="row">
                          <div class="input-field col s12 m12 l12 center-align">
                              <h5 class="black-text">Seller Login</h5>
                              <h6 class="red-text hide" style="font-size: small;" id="errorMessage"></h6>
                          </div>
                          <form action="/authenticate/lokalseller" method="POST">
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
                <img src="{{ asset('multimedia/sidenav.jpg') }}">
              </div>
              <a href="#user"><img class="circle" src=""></a>
              <a href="#name"><span class="white-text name" id="sellerName"></span></h6>
              <a href="#email"><span class="white-text email" id="sellerEmail"></span></a>
            </div>
          </li>
          <li><a class="waves-effect" href="/lokals3llerd4sh"><i class="material-icons left">dashboard</i>Dashboard</a></li>
          <li><a class="waves-effect" href="/lokalsell3r1tems"><i class="material-icons left">local_offer</i>Items</a></li>
          <li><a class="waves-effect" href="/lokals3ller0rd3rs"><i class="material-icons left">description</i>Orders</a></li>
          <li><a class="waves-effect" href="/lokalsell3rp4ym3nts"><i class="material-icons left">attach_money</i>Payments</a></li>
          <li><div class="divider"></div></li>
          <li><a class="waves-effect" href="/logout"><i class="material-icons left">exit_to_app</i>Logout</a></li>
        </ul>
        <div class="row">
          <div class="col m3 l3"></div>
          <div class="col s12 m9 l9">
            @yield('sellercontent')
          </div>
        </div>
      @endauth


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/seller.js') }}"></script>
    </body>
</html>