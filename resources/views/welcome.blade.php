<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Roofer</title>

        {{--        Custom Files --}}
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

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body  id="top">
    <header>
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
                <div class="site-logo col-6"><a href="index.html">Roofer</a></div>

                <nav class="mx-auto site-navigation">
                    <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                        <li><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
{{--                        <li><a href="{{ url('/profile') }}">Profile</a></li>--}}


                        <li><a href="{{ url('/contact') }}">Contact</a></li>

                    </ul>
                </nav>

                <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                    <div class="ml-auto">

                        @if (Route::has('login'))
                            <nav class="-mx-3 flex gap-2 flex-1 justify-end">


                                @auth


                                    <div class="p-10">

                                        <div class="dropdown inline-block relative "  >
                                            <a href="{{ url('users/profile') }}" id="navigation" class=" btn border-width-2 text  d-none d-lg-inline-block " style="text-decoration: none;">
                                                  <span class="drop-down"> <span class="mr-1 ">{{Auth::user()->first_name}}</span> <i class=" fa fa-regular fa-angle-down"></i>
                                                    </span>
                                            </a>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                                <li class="nav-link"><a class="hover:no-underline link-secondary nav-link" href="{{ route('profile') }}" style="text-decoration: none;">Profile</a></li>
                                                <li class="nav-link"><a class="hover:no-underline link-secondary nav-link" href="{{ route('savedjobs') }}" style="text-decoration: none;">Saved Jobs</a></li>
                                                <li class="nav-link"><a class="hover:no-underline link-secondary nav-link" href="{{ route('applications') }}" style="text-decoration: none;">Applications</a></li>
                                                <li class="nav-link"><a class="hover:no-underline link-secondary nav-link" href="{{ route('profile') }}" style="text-decoration: none;" >Settings</a></li>
                                                <li class="nav-link"><form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a class="hover:no-underline link-secondary nav-link" style="text-decoration: none;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
{{--                                <div class="ml-auto">--}}
{{--                                    <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>--}}
{{--                                </div>--}}

                                @else

                                    <a href="{{ route('login') }}" class="btn btn-warning text-dark border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>


                                    @if (Route::has('register'))

                                        <a href="{{ route('register') }}" class="btn btn-warning text-dark border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Register</a>

                                    @endif
                                @endauth

                            </nav>
                    </div>
                    @endif

                </div>
                <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
            </div>

        </div>
        </div>
    </header>

        <!-- HOME -->
        <section class="section-hero bg-image">
        <section class="home-section section-hero overlay"  id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="mb-5 text-center">
                            <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate est, consequuntur perferendis.</p>
                        </div>
                        <form  method="post" action="{{ route('search.job') }}" class="search-jobs-form">
                            @csrf
                            <div class="row mb-5">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <input name="job_title" type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <select name="job_region" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                                        <option>Anywhere</option>
                                        <option>Austin</option>
                                        <option>Brooklyn</option>
                                        <option>Dallas</option>
                                        <option>Kansas</option>
                                        <option>Los Angeles</option>
                                        <option>Manhattan</option>
                                        <option>Mountain View</option>
                                        <option>New York</option>
                                        <option>Ontario</option>
                                        <option>Palo Alto</option>
                                        <option>San Francisco</option>
                                        <option>Toronto</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <select name="job_type" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                                        <option>Part Time</option>
                                        <option>Full Time</option>
                                        <option>Seasonal</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">

                                    <button name="submit" type="submit" class="btn btn-primary active:text-black hover:text-black  hover:bg-amber-300 btn-outline-light btn-lg btn-block  btn-search  "><span class="icon-search icon mr-2"></span>Search Job</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 popular-keywords">
                                    <h3>Trending Keywords:</h3>
                                    <ul class="keywords list-unstyled m-0 p-0">
                                        @foreach($duplicates as $duplicate )
                                            <li><a href="#" class="">{{$duplicate->keyword}}</a></li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <a href="#next" class="scroll-button smoothscroll">
                <span class=" icon-keyboard_arrow_down"></span>
            </a>

        </section>
   </section>

        <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image:  url('{{ asset('assets/images/excavator.jpg') }}');">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="section-title mb-2 ">Roofer Site Stats</h2>
                        <p class="lead ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
                    </div>
                </div>
                <div class="row pb-0 block__19738 section-counter">

                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <strong class="number text-dark" data-number="1930">0</strong>
                        </div>
                        <span class="caption text-dark">Candidates</span>
                    </div>

                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <strong class="number text-dark" data-number="54">0</strong>
                        </div>
                        <span class="caption text-dark">Jobs Posted</span>
                    </div>

                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-center mb-2 ">
                            <strong class="number text-dark" data-number="120">0</strong>
                        </div>
                        <span class="caption text-dark">Jobs Filled</span>
                    </div>

                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <strong class="number text-dark" data-number="550">0</strong>
                        </div>
                        <span class="caption text-dark">Companies</span>
                    </div>


                </div>
            </div>
        </section>
        <section class="site-section">
            <div class="container">

                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="section-title mb-2">{{ $totalJobs }} Job Listed</h2>
                    </div>
                </div>

                <ul class="job-listings mb-5">
                    @foreach($jobs as $job)
                        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                            <a href="{{route('single.job', $job->id)}}"></a>
                            <div class="job-listing-logo">
                                <img src="{{ asset('assets/images/'.$job->image.'') }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                            </div>

                            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                    <h2>{{$job->job_title}}</h2>
                                    <strong>{{$job->company}}</strong>
                                </div>
                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                    <span class="icon-room"></span> {{$job->job_region}}
                                </div>
                                <div class="job-listing-meta">
                                    <span class="badge badge-danger">{{$job->job_type}}</span>
                                </div>
                            </div>

                        </li>

                    @endforeach




                </ul>



            </div>
        </section>




        <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image:  url('{{ asset('assets/images/hero_1.jpg') }}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="">Looking For A Job?</h2>
                        <p class="mb-0  lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="site-section py-4">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-12 text-center mt-4 mb-5">
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <h2 class="section-title mb-2">Company We've Helped</h2>
                                <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="{{ asset('assets/images/logo_mailchimp.svg') }}" alt="Image" class="img-fluid logo-1">

                    </div>
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="{{ asset('assets/images/logo_paypal.svg') }}" alt="Image" class="img-fluid logo-2">
                    </div>
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="{{ asset('assets/images/logo_stripe.svg') }}" alt="Image" class="img-fluid logo-3">
                    </div>
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="{{ asset('assets/images/logo_visa.svg') }}" alt="Image" class="img-fluid logo-4">
                    </div>

                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="{{ asset('assets/images/logo_apple.svg') }}" alt="Image" class="img-fluid logo-5">
                    </div>
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="{{ asset('assets/images/logo_tinder.svg') }}" alt="Image" class="img-fluid logo-6">
                    </div>
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="{{ asset('assets/images/logo_sony.svg') }}" alt="Image" class="img-fluid logo-7">
                    </div>
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="{{ asset('assets/images/logo_airbnb.svg') }}" alt="Image" class="img-fluid logo-8">
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-light pt-5 testimony-full">

            <div class="owl-carousel single-carousel">


                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center text-center text-lg-left">
                            <blockquote>
                                <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                                <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
                            </blockquote>
                        </div>
                        <div class="col-lg-6 align-self-end text-center text-lg-right">
                            <img src="{{ asset('assets/images/person_transparent_2.png') }}"  alt="Image" class="img-fluid mb-0">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center text-center text-lg-left">
                            <blockquote>
                                <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                                <p><cite> &mdash; Chris Peters, @Google</cite></p>
                            </blockquote>
                        </div>
                        <div class="col-lg-6 align-self-end text-center text-lg-right">
                            <img src="{{ asset('assets/images/person_transparent.png') }}" alt="Image" class="img-fluid mb-0">
                        </div>
                    </div>
                </div>

            </div>

        </section>



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
                        <div class="footer-social">
                            <a href="#"><span class="icon-facebook text-stone-800 social-icon"></span></a>
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
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |   <a href="https://colorlib.com" target="_blank" >Roofer</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
                    </div>
                </div>
            </div>
        </footer>

    </div>







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
    </body>
</html>
