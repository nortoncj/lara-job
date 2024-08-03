<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Roofer') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{--        Custom Files --}}
    <link rel="shortcut icon" href="{{ asset('assets/ftco-32x32.png') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/custom-bs.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/line-icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/icons/css/all.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body  id="top">
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="site-logo col-6"><a href="{{ url('/') }}">Roofer</a></div>

                <nav class="mx-auto site-navigation">
                    <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                        <li style="padding-left: 544px;"><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>



                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li class="p-10">

                                    <div class="dropdown inline-block relative "  >
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle"href="#" aria-labelled>{{Auth::user()->first_name}}</a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="{{ route('profile') }}" style="text-decoration: none;">Profile</a></li>
                                            <li><a class="dropdown-item" href="{{ route('savedjobs') }}" style="text-decoration: none;">Saved Jobs</a></li>
                                            <li><a class="dropdown-item" href="{{ route('applications') }}" style="text-decoration: none;">Applications</a></li>
                                            <li><a class="dropdown-item" href="{{ route('users.edit_details') }}" style="text-decoration: none;">Settings</a></li>
                                           <li class="dropdown-item" style="text-decoration: none;">
                                               <form method="POST" action="{{ route('logout') }}">
                                                   @csrf
                                                   <a class="hover:no-underline link-secondary nav-link" style="text-decoration: none;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a>
                                               </form>
                                </li>
                                        </ul>
                                    </div>

                                </li>

                            @else
                                <li class=""><a href="{{ url('/login') }}">Login</a></li>
                                <li class=""><a href="{{ url('/register') }}">Register</a></li>
                            @endauth
                        @endif
                    </ul>
                </nav>

                <div class="right-cta-menu text-right d-flex aligin-items-center col-6">

                    <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                </div>

            </div>
        </div>
    </header>


        <main class="my-4">
            @yield('content')
        </main>
        <footer class="site-footer">

            <a href="#top" class="smoothscroll scroll-top">
                <span class="icon-keyboard_arrow_up"></span>
            </a>

            <div class="container">
                <div class="row mb-5">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Search Trending</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Web Developers</a></li>
                            <li><a href="#">Python</a></li>
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Company</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Support</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Contact Us</h3>
                        <div class="footer-social ">

                            <a href="#"><span class="icon-facebook text-stone-800"></span></a>
                            <a href="#"><span class="icon-twitter text-stone-800"></span></a>
                            <a href="#"><span class="icon-instagram text-stone-800"></span></a>
                            <a href="#"><span class="icon-linkedin text-stone-800"></span></a>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12">
                        <p class="copyright"><small>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |   <a href="#" target="_blank" >Roofer</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
                    </div>
                </div>
            </div>
        </footer>
</div>
</body>

<!-- SCRIPTS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/stickyfill.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/quill.min.js') }}"></script>


        <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>

        <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/nav-menu.js') }}"></script>
</html>
