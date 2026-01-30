<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title', 'Shopizaa')</title>
   <meta name="description" content="@yield('description', '')">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('shopizaa/assets/img/logo/favicon.png') }}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('shopizaa/assets/css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('shopizaa/assets/css/swiper-bundle.css') }}">
   <link rel="stylesheet" href="{{ asset('shopizaa/assets/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('shopizaa/assets/css/font-awesome-pro.css') }}">
   <link rel="stylesheet" href="{{ asset('shopizaa/assets/css/spacing.css') }}">
   <link rel="stylesheet" href="{{ asset('shopizaa/assets/css/main.css') }}">

   @stack('styles')
</head>

<body class="tp-magic-cursor loaded">
   <div class="tp-hero-ai-body-overlay"></div>


   <!-- Loader -->
   {{-- @include('partials.shopizaa.loader') --}}

   <!-- Magic Cursor -->
   @include('partials.shopizaa.cursor')

   <!-- Back to Top -->
   @include('partials.shopizaa.backtotop')

   <!-- Offcanvas -->
   @include('partials.shopizaa.offcanvas')

   <!-- Header -->
   @include('partials.shopizaa.header')

   <div id="smooth-wrapper">
      <div id="smooth-content">
         <main>
            @yield('content')
         </main>

         <!-- Footer -->
         @include('partials.shopizaa.footer')
      </div>
   </div>

   <!-- JS here -->
   <script src="{{ asset('shopizaa/assets/js/vendor/jquery.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/bootstrap-bundle.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/plugin.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/three.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/hover-effect.umd.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/split-type.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/swiper-bundle.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/swiper-gl.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/effect-slicer.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/magnific-popup.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/nice-select.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/purecounter.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/isotope-pkgd.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/imagesloaded-pkgd.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/backtop.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/ajax-form.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/slider-init.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/main.js') }}"></script>
   <script src="{{ asset('shopizaa/assets/js/tp-cursor.js') }}"></script>
   <script type="module" src="{{ asset('shopizaa/assets/js/distortion-img.js') }}"></script>

   @stack('scripts')
</body>

</html>
