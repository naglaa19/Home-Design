<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="css/admin.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/home.png')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container flexx">
                <div class="im">
                <a class="navbar-brand im" href="{{ url('/') }}">
                    <img style="width: 85px " class="im" src="{{ asset('images/logo/home.png')}}">
                </a>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @if (Auth::user())

    <nav class="navSpace">	
        {{-- <a class="logo" href="#"><img src="home.png" width="70px" height="50px"></a> --}}
        <ul class="menu cf">
          <li><a href="{{route('/main')}}">Home</a></li>
          <li>
            <a href="#">Services</a>
            <ul class="submenu">
                @foreach (App\Http\Controllers\GlobalVariableController::global() as $category)
                    <li><a href="{{route('/main', $category->id)}}">{{$category->name}}</a></li>
                @endforeach
            </ul>         
          </li>
          <li><a href="{{route('/FAQ')}}">Ask me</a></li>
          <li><a href="{{route('contact/form')}}">Contact Us</a></li>
          <li><a href="{{route('designs')}}">Designs</a></li>
          <li><a href="{{route('profile/index',Auth::user()->id)}}">Profile</a></li>
        </ul>
    </nav>
       @endif
        <main class="py-4">
            @yield('content')
        </main>

        {{-- Footer  --}}
        {{-- <footer class="footer">
            <div class="footer-background">
              <div class="footer-logo">
                <img style="width: 150px"  src="{{ asset('images/logo/home.png')}}">
              </div>
              <div class="footer-social-icons">
                <img class="social-icon" src="{{asset('images/icons/icon-facebook.svg')}}">
                <img class="social-icon" src="{{asset('images/icons/icon-youtube.svg')}}">
                <img class="social-icon" src="{{asset('images/icons/icon-twitter.svg')}}">
                <img class="social-icon" src="{{asset('images/icons/icon-pinterest.svg')}}">
                <img class="social-icon" src="{{asset('images/icons/icon-instagram.svg')}}">
              </div>
              <ul class="footer-list left-list">
                <li>About Us</li>
                <li>Contact</li>
                <li>Blog</li>
              </ul>
              
              <ul class="footer-list right-list">
                <li>Careers</li>
                <li>Support</li>
                <li>Privacy Policy</li>
              </ul>  
              {{-- <button class="button-request footer-btn">Request Invite</button> --}}
            
              {{-- <p class="copy-right">© LaCasa. All Rights Reserved </p>
            
            </div>
        </footer>  --}}
        <footer class="footer-distributed">

            <div class="footer-left">
      
                <img style="width: 140px"  src="{{ asset('images/logo/home.png')}}">
      
              <p class="footer-links">
                <a href="#" class="link-1">Home</a>
                
                <a href="#">Blog</a>      
              
                <a href="#">About</a>
                
                <a href="#">Faq</a>
                
                <a href="#">Contact</a>
              </p>
      
              <p class="footer-company-name">La Casa © 2023</p>
            </div>
      
            <div class="footer-center">
      
              <div>
                <i class="fa fa-map-marker"></i>
                <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
              </div>
      
              <div>
                <i class="fa fa-phone"></i>
                <p>+1.555.555.5555</p>
              </div>
      
              <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
              </div>
      
            </div>
      
            <div class="footer-right">
      
              <p class="footer-company-about">
                <span>About Us</span>
                This website help you to make your own designs. Also, we provide interior design and architectural design services for domestic and international clients.
              </p>
      
              <div class="footer-icons">
      
                <a href="#"><img class="social-icon" src="{{asset('images/icons/icon-facebook.svg')}}"></a>
                <a href="#"><img class="social-icon" src="{{asset('images/icons/icon-twitter.svg')}}"></a>
                <a href="#"><img class="social-icon" src="{{asset('images/icons/icon-instagram.svg')}}"></a>
                <a href="#"><img class="social-icon" src="{{asset('images/icons/icon-pinterest.svg')}}"></a>
      
              </div>
      
            </div>
      
          </footer>
    </div>
</body>
</html>
