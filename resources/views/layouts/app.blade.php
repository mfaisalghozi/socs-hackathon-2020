<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Secure Assett --}}
    <link rel="stylesheet" href="{{ secure_asset('css/AdminLTE.min.css') }}">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="public\img\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public\img\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public\img\favicon-16x16.png">
    <link rel="manifest" href="public\img\site.webmanifest">

    <style>
        html, body {
                height: 100%;
                margin: 0;
            }

            #app {
                height: 100%;
            }  
    </style>
</head>
<body>
    <div id="app">
        <div id="header">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container py-2">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        WarungIde.co
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        @if(Auth::user()->roleid == 2)
                                        <a class="dropdown-item" href="/idea/create">
                                            {{ __('Create New Idea') }}
                                        </a>
                                        @endif
                                        <a class="dropdown-item" href="#">
                                            {{ __('Edit Profile') }}
                                        </a>
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

        <main style="min-height: 100%">
            @yield('content')
        </main>
            
        <footer class="page-footer font-small blue pt-4 bg-dark text-white" id="footer">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3 text-center">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <div class="row pt-3 justify-content-center">
                                <div class="col-lg-12">
                                    <h5 class="text-uppercase">Donasi ke warungide.co</h5>
                                </div>
                                <div class="col-lg-6">
                                    <p class="">Donasi ke warungide.co agar kami dapat terus melakukan inovasi dan membantu mewujudkan ide-ide mu! (Developer butuh makan)</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>        
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase">About</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">About Us</a>
                            </li>
                            <li>
                                <a href="#!">Our Partner</a>
                            </li>
                            <li>
                                <a href="#!">Stats</a>
                            </li>
                            <li>
                                <a href="#!">Jobs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase">Support</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Help Center</a>
                            </li>
                            <li>
                                <a href="#!">Our Rules</a>
                            </li>
                            <li>
                                <a href="#!">Creator Handbook</a>
                            </li>
                            <li>
                                <a href="#!">Brand Assets</a>
                            </li>
                        </ul>
                    </div>        
                </div>
            </div>
            <div class="media-social pt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-2">
                        <div class="d-flex justify-content-between">
                            <a href="" target="_blank"
                                class="fa fa-linkedin-square" style="text-decoration: none;color: inherit;font-size:24px;"></a>
                            <a href="" target="_blank" class="fa fa-github"
                                style="text-decoration: none;color: inherit;font-size:24px;"></a>
                            <a href="" target="_blank"
                                class="fa fa-instagram" style="text-decoration: none;color: inherit;font-size:24px;"></a>
                            <a href="mailto:muhammad.ghozi@binus.ac.id" class="fa fa-envelope"
                                style="text-decoration: none;color: inherit;font-size:24px;"></a>
                        </div>
                    </div>
                </div>
            </div>      
            <div class="footer-copyright text-center py-3">
                © 2020 Copyright: <a href="#"> WarungIde.com</a>
            </div> 
        </footer>
    </div>
</body>
</html>
