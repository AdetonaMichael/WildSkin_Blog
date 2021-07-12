<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WildSkin') }}</title>

    <!-- Scripts -->
    {{-- <script src="https://cdn.tiny.cloud/1/914cbs1n4e1r1683f7ere86yes0kemwesp1tctsdsft2pq6k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
          selector: 'textarea',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table media',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Cyberlord'
        });
        tinymce.init(editor_config);
      </script>

  <!--owlcarousel-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--owlcarousel-->

    <link rel="icon" href="{{ URL::asset('/images/geocipher3.jpg') }}" type="image/x-icon"/>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header>
                <div>
                  
                </div>
                <nav  style="z-index:1;" class="shadow-lg bg-gray-200 border-b py-2 mb-4 border-gray-300 fixed left-0 right-0">
                    {{-- navbar goes here --}}
                    <div class="max-w-6xl mx-auto">
                        <div class="flex justify-between">
                    
                    <div class="flex space-x-4">
                    {{-- logo comes here --}}
                    <div class="mr-3 flex items-center text-black">
                        <a href="/" class="flex ">
                    <svg   width="65" height="65" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 45"><title>place</title><g fill="none" class="nc-icon-wrapper"><path d="M34.78 19.18c0 4.83-3.95 10.89-11.58 17.87l-0.64 0.57-0.64-0.58c-7.63-6.97-11.58-13.03-11.58-17.86 0-7.22 5.3-12.6 12.22-12.6s12.22 5.36 12.22 12.6z" fill="#0b56b1" fill-opacity=".3"></path><path d="M22.56 3.76c7.9 0 15.04 6.05 15.04 15.42 0 6.24-5.02 13.63-15.04 22.18-10.02-8.55-15.04-15.94-15.04-22.18 0-9.36 7.14-15.42 15.04-15.42z m11.28 15.42c0-6.82-4.98-11.66-11.28-11.66s-11.28 4.83-11.28 11.66c0 4.4 3.67 10.23 11.28 17.18 7.61-6.96 11.28-12.78 11.28-17.18z m-11.28 3.38c-2.07 0-3.76-1.69-3.76-3.76s1.69-3.76 3.76-3.76 3.76 1.69 3.76 3.76-1.69 3.76-3.76 3.76z" fill="#0b56b1"></path></g></svg>
                        <span>  <a href="{{ url('/') }}" class="font-extrabold  text-2xl">
                            {{ config('app.name', 'Wildskin') }}
                        </a></span>
                      
                        </a>
                    </div>
                    
                    {{-- primary nav here --}}
                    <div class="md:flex hidden text-gray-400 items-center space-x-3">
                        <a class="px-3 text-gray-400 hover:text-gray-000 " href="/blog">Blog</a>
                        <a class="px-3 text-gray-400 hover:text-gray-000 " href="/about">About</a>
                        
                    </div>
                    </div>
                    {{-- secondary nav --}}
                    <div class="md:flex hidden items-center space-x-1">
                        @guest
                        <a class="py-5 px-3 font-bold text-gray-900" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="py-3 px-3 font-bold  bg-yellow-400 transition duration-300 hover:text-yellow-800 text-yello-900 hover:bg-yellow-300 rounded" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                            <span class="text-gray-900 bold">{{ Auth::user()->name }}</span>
    
                            <a  href="{{ route('logout') }}"
                               class="no-underline  hover:bg-yellow-300 bg-yellow-400 py-2 px-2 rounded bold"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                    {{-- mobile button goes here --}}
                    <div class="md:hidden flex items-center">
                        <button class="mobile-menu-button">
                    <svg  class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><title>menu</title><g fill="none" class="nc-icon-wrapper"><path d="M6 36h36v-4h-36v4z m0-10h36v-4h-36v4z m0-14v4h36v-4h-36z" fill="#0b56b1"></path></g></svg>
                        </button>
                    </div>
                    </div>
                    </div>
                    {{-- mobile menu --}}
                    <div class="mobile-menu border-b-2 border-gray-400 hidden md:hidden pb-5">
                        <a  class="block py-4 px-4 text-sm hover:bg-gray-100" href="/blog">Blog</a>
                        <a  class="block py-4 px-4 text-sm hover:bg-gray-100" href="/about">About</a>
                        @guest
                        <a class="py-5 px-3 font-bold  md:text-gray-900" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="py-3 px-3 font-bold  bg-yellow-400 transition duration-300 hover:text-yellow-800 text-yello-900 hover:bg-yellow-300 rounded" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                            <span class="text-gray-900 bold">{{ Auth::user()->name }}</span>
    
                            <a  href="{{ route('logout') }}"
                               class="no-underline  hover:bg-yellow-300 bg-yellow-400 py-2 px-2 rounded bold"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                    </nav>
              
        </header>
         <div>
            @yield('content')
         </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>
<script id="dsq-count-scr" src="//wildskin.disqus.com/count.js" async></script>
</body>
</html>
