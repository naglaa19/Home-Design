<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    {{-- <link rel="stylesheet" type="text/css" href="css/admin.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

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
    
    @if(Auth::user())
    <nav class="main-menu">


  
        <div>
           <a class="logo" href="http://startific.com">
           </a> 
         </div> 
       <div class="settings"></div>
       <div class="scrollbar" id="style-1">
             
       <ul>
         
       <li>                                   
       <a href="/">
       <i class="fa fa-home fa-lg"></i>
       <span class="nav-text">Home</span>
       </a>
       </li>   
          
       <li>                                 
       <a href="http://startific.com">
       <i class="fa fa-user fa-lg"></i>
       <span class="nav-text">Users</span>
       </a>
       </li>   
       
           
       {{-- <li>                                 
       <a href="http://startific.com">
       <i class="fa fa-envelope-o fa-lg"></i>
       <span class="nav-text">Contact</span>
       </a>
       </li>    --}}
         
       
       
        
       {{-- <li>
       <a href="http://startific.com">
       <i class="fa fa-heart-o fa-lg"></i>
                               
       <span class="share"> 
       
       
       <div class="addthis_default_style addthis_32x32_style">
         
       <div style="position:absolute;
       margin-left: 56px;top:3px;"> 
          
         
       
         
        <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/facebook-icon.png" width="30px" height="30px"></a>
       
          <a href="https://twitter.com/share" target="_blank" class="share-popup"><img src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/512/Twitter_alt.png" width="30px" height="30px"></a>
       
          
       
       
       <a href="https://plusone.google.com/_/+1/confirm?hl=en&url=_URL_&title=_TITLE_
       " target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/google-plus-icon.png" width="30px" height="30px"></a>   
         
         
         
       </div>
       <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
       <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ff17589278d8b3a"></script>
                              
                                   
                                     
                                   
                                 
                               </span>
                               <span class="twitter"></span>
                               <span class="google"></span>
                               <span class="fb-like">  
       <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Fstartific&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
                              
                               </span>
                               <span class="nav-text">
                               </span>
                               
                           </a>
       
       </li>
                                    --}}
       
         
         
       {{-- </li>
       <li class="darkerlishadow">
       <a href="http://startific.com">
       <i class="fa fa-clock-o fa-lg"></i>
       <span class="nav-text">News</span>
       </a>
       </li> --}}
         
       {{-- <li class="darkerli">
       <a href="http://startific.com">
       <i class="fa fa-desktop fa-lg"></i>
       <span class="nav-text">Technology</span>
       </a>
       </li> --}}
{{--          
       <li class="darkerli">
       <a href="http://startific.com">
       <i class="fa fa-plane fa-lg"></i>
       <span class="nav-text">Travel</span>
       </a>
       </li>
         
       <li class="darkerli">
       <a href="http://startific.com">
       <i class="fa fa-shopping-cart"></i>
        <span class="nav-text">Shopping</span>
       </a>
       </li> --}}
         
       {{-- <li class="darkerli">
       <a href="http://startific.com">
       <i class="fa fa-microphone fa-lg"></i>
       <span class="nav-text">Film & Music</span>
       </a>
       </li>
        --}}
        <li class="darkerli">
            <a href="{{route('Category/index')}}">
            <i class="fa fa-align-left fa-lg"></i>
            <span class="nav-text">Categoris</span>
            </a>
        </li>
         
       <li class="darkerli">
       <a href="{{route('Image/index')}}">
       <i class="fa fa-picture-o fa-lg"></i>
       <span class="nav-text">Images</span>
       </a>
       </li>
       

         
       <li class="darkerli">
       <a href="http://startific.com">
       <i class="fa fa-heart-o fa-lg"></i>
       <span class="nav-text">Designs</span>
       </a>
       </li>
         
       <li class="darkerli">
       <a href="http://startific.com">
       <i class="fa fa-glass fa-lg"></i>
       <span class="nav-text">Items</span>
       </a>
       </li>
         
         
       </ul>
    </nav>
               @endif   

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
