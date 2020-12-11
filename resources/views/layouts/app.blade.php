<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/webfont.css') }}">
        <link rel="stylesheet" href="{{ asset('css/climacons-font.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/card.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sli.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/reactor.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.skins.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="page-loading">
      <div class="pageload"></div>
      <div class="app layout-fixed-header">
        <!-- sidebar panel -->
        @include('layouts.sidebar')
        <!-- /sidebar panel -->
        <!-- content panel -->
        <div class="main-panel">
          <!-- top header -->
         @include('layouts.header')
          <!-- /top header -->
          <!-- main area -->
     
          @yield('content')
          
          <!-- /main area -->
        </div>
        <!-- /content panel -->
        <!-- bottom footer -->
        <footer class="content-footer">
          <nav class="footer-right">
            <ul class="nav">
              <li>
                <a href="javascript:;">Feedback</a>
              </li>
              <li>
                <a href="javascript:;" class="scroll-up">
                  <i class="fa fa-angle-up"></i>
                </a>
              </li>
            </ul>
          </nav>
          <nav class="footer-left hidden-xs">
            <ul class="nav">
              <li>
                <a href="javascript:;"><span>About</span> Reactor</a>
              </li>
              <li>
                <a href="javascript:;">Privacy</a>
              </li>
              <li>
                <a href="javascript:;">Terms</a>
              </li>
              <li>
                <a href="javascript:;">Help</a>
              </li>
            </ul>
          </nav>
        </footer>
        <!-- /bottom footer -->
        
      </div>
  @livewireScripts
  <!-- build:js({.tmp,app}) scripts/app.min.js -->
  <script src="{{asset('js/helpers/modernizr.js')}}"></script>
  <script src="{{asset('vendor/jquery/dist/jquery.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
  <script src="{{asset('vendor/fastclick/lib/fastclick.js')}}"></script>
  <script src="{{asset('vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script> 
  <script src="{{asset('js/helpers/smartresize.js')}}"></script>
  <script src="{{asset('js/constants.js')}}"></script> 
  <script src="{{asset('js/main.js')}}"></script> 
 
  <!-- endbuild -->
  <!-- page scripts -->
  <script src="{{asset('vendor/flot/jquery.flot.js')}}"></script> 
  <script src="{{asset('vendor/flot/jquery.flot.resize.js')}}"></script> 
  <script src="{{asset('vendor/flot/jquery.flot.categories.js')}}"></script> 
  <script src="{{asset('vendor/flot/jquery.flot.stack.js')}}"></script> 
  <script src="{{asset('vendor/flot/jquery.flot.time.js')}}"></script> 
  <script src="{{asset('vendor/flot/jquery.flot.pie.js')}}"></script> 


  <script src="{{asset('vendor/flot-spline/js/jquery.flot.spline.js')}}"></script>
  <script src="{{asset('vendor/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>  
  
  <!-- end page scripts -->
  <!-- initialize page scripts -->
  <script src="{{asset('js/helpers/sameheight.js')}}"></script> 
  <script src="{{asset('js/ui/dashboard.js')}}"></script> 

  <!-- end initialize page scripts -->
</body>
    
</html>
