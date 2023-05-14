<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/home.png')}}">
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
    {{-- <link rel="stylesheet" type="text/css" href="css/admin.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img style="width: 85px" src="{{ asset('images/logo/home.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
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
    
    @if(auth()->guard('admin')->user())
    <nav class="main-menu">
        <div>
           <a class="logo" href="#">
           </a> 
         </div> 
       <div class="settings"></div>
       <div class="scrollbar" id="style-1">
             
       <ul>
         
        {{-- home  --}}
       <li>                                   
            <a href="{{route('home')}}">
            <i class="fa fa-home fa-lg"></i>     
            <span class="nav-text">Home</span>
            </a>
       </li>   
          
       {{-- users  --}}
       <li>                                 
            <a href="{{route('User/index')}}">
            <i class="fa fa-user fa-lg"></i>
            <span class="nav-text">Users</span>
            </a>
       </li>   
       
        {{-- categories --}}
        <li class="darkerli">
            <a href="{{route('Category/index')}}">
            <i class="fa fa-list fa-lg"></i>
            <span class="nav-text">Categoris</span>
            </a>
        </li>
         
        {{-- images  --}}
       <li class="darkerli">
            <a href="{{route('Image/index')}}">
            <i class="fa fa-picture-o fa-lg"></i>
            <span class="nav-text">Images</span>
            </a>
       </li>
       

         {{-- Designs  --}}
       <li class="darkerli">
            <a href="{{route('design/index')}}">
            <i class="fa fa-heart-o fa-lg"></i>
            <span class="nav-text">Designs</span>
            </a>
       </li>
         
       {{-- Items  --}}
       {{-- <li class="darkerli">
            <a href="http://startific.com">
            <i class="fa fa-glass fa-lg"></i>
            <span class="nav-text">Items</span>
            </a>
       </li> --}}

       {{-- QA Section  --}}
        <li class="darkerli">
            <a href="{{route('section/index')}}">
            <i class="fa fa-question-circle fa-lg"></i>
            <span class="nav-text">QA Sections</span>
            </a>
        </li>
         
         {{-- FAQ --}}
        
        <li class="darkerli">
            <a href="{{route('FAQ/index')}}">
            <i class="fa fa-comments fa-lg"></i>
            <span class="nav-text">FAQ</span>
            </a>
        </li>

        {{-- contact us  --}}
        <li class="darkerli">
            <a href="{{route('contact/index')}}">
            <i class="fa fa-address-book fa-lg"></i>
            <span class="nav-text">Contact us</span>
            </a>
        </li>

        {{-- comments  --}}
        {{-- <li class="darkerli">
            <a href="{{route('comment/index')}}">
            <i class="fa fa-commenting fa-lg"></i>
            <span class="nav-text">Comments</span>
            </a>
        </li> --}}

       </ul>
    </nav>
    @endif   

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
