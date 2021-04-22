<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('multimedia/favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <title>Baligyang Lokal</title>
    </head>
    <body>
      @auth
      <nav>
        <div class="nav-wrapper blue accent-1">
            <a href="/" class="brand-logo"><img src="{{ asset('multimedia/logo.png') }}" height="48"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="" class="black-text waves-effect"><i class="material-icons right">shopping_cart</i>Cart</a></li>
              <li><a href="/user/dashboard" class="black-text waves-effect"><i class="material-icons right">account_circle</i>Profile</a></li>
              <li><a href="{{ url('/logout') }}" class="black-text waves-effect"><i class="material-icons right">exit_to_app</i>Logout</a></li>
            </ul>
        </div>
      </nav>
      <ul class="sidenav sidenav-close" id="mobile-demo">
        <li><a href="" class="black-text waves-effect"><i class="material-icons right">shopping_cart</i>Cart</a></li>
        <li><a href="/user/dashboard" class="black-text waves-effect"><i class="material-icons right">account_circle</i>Profile</a></li>
        <li><a href="{{ url('/logout') }}" class="black-text waves-effect"><i class="material-icons right">exit_to_app</i>Logout</a></li>
      </ul>
      @endauth
      @guest
      <nav>
        <div class="nav-wrapper blue accent-1">
            <a href="/" class="brand-logo"><img src="{{ asset('multimedia/logo.png') }}" height="48"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="{{ url('/login') }}" data-target="login" class="black-text modal-trigger waves-effect" id="login1">Login</a></li>
            </ul>
        </div>
      </nav>
      <ul class="sidenav sidenav-close" id="mobile-demo">
        <li><a href="{{ url('/login') }}" data-target="login" class="black-text modal-trigger waves-effect" id="login2">Login</a></li>
      </ul>
      @endguest
      

      <div class="parallax-container">
        <div class="parallax"><img src="{{ asset('multimedia/shop.jpg') }}"></div>
    </div>
    
    <div class="section blue accent-1">
        <div class="col s12 m12 l12 center-align">
          <video class="responsive-video" autoplay loop>
            <source src="{{ asset('multimedia/baligyanglokal.mp4') }}" type="video/mp4">
          </video>
        </div>
        <div class="row hide-on-small-only">
          @foreach ($categories as $category)
            <a href="/{{ $category->link }}">
              <div class="col m2 l2">
                <div class="card">
                  <div class="card-content">
                    <h6 class="center-align" style="font-size: x-small"><b>{{ $category->category }}</b></h6>
                  </div>
                </div>
              </div>
            </a>
          @endforeach
        </div>
        <div class="carousel hide-on-large-only">
          @foreach ($categories as $category)
            <a href="/{{ $category->link }}" class="carousel-item">
              <div class="col s12">
                <div class="card">
                  <div class="card-content">
                    <h6 class="center-align" style="font-size: x-small"><b>{{ $category->category }}</b></h6>
                  </div>
                </div>
              </div>
            </a>
          @endforeach
        </div>
        <div class="col s12 m12 l12">
          @yield('content')
        </div>
    </div>
  
    <div class="parallax-container">
        <div class="parallax"><img src="{{ asset('multimedia/shop.jpg') }}"></div>
    </div>

    <footer class="page-footer blue accent-1">
        <div class="container">
            <div class="row">
            <div class="col s12 m12 l12">
                <h5 class="white-text"><a href="/"><img src="{{ asset('multimedia/logo.png') }}" alt=""></a></h5>
                <p class="black-text text-lighten-4" style="font-size: small">
                    Your online one stop shop for everything that you need!
                </p>
                <p class="black-text text-lighten-4" style="font-size: small">
                    All cash on delivery payment method exclusive only here in Davao City.
                </p>
            </div>
            <div class="col s12 m12 l12 center-align">
                <p class="black-text"  style="font-size: small">Follow us:</p>
            </div>
            <div class="col s12 m12 l12 center-align">
                <a href="https://www.facebook.com" target="_blank"><img src="{{ asset('multimedia/facebook.png') }}" height="36" width="36"></a>
            </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center-align">
                <p class="black-text"  style="font-size: small">© 2021 Digital Emporium Davao. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>