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
      <!-- page loading spinner -->
     
      <!-- /page loading spinner -->
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
        <!-- chat -->
        <div class="chat-panel">
          <div class="chat-inner">
            <div class="chat-users">
              <div class="chat-group mb0">
                <div class="chat-group-header h4">
                  Chat
                </div>
              </div>
              <div class="chat-group">
                <div class="chat-group-header">
                  Favourites
                </div>
                <a href="javascript:;">
                  <span class="status-online"></span>
                  <span>Catherine Moreno</span>
                </a>
                <a href="javascript:;">
                  <span class="status-online"></span>
                  <span>Denise Peterson</span>
                </a>
                <a href="javascript:;">
                  <span class="status-away"></span>
                  <span>Charles Wilson</span>
                </a>
                <a href="javascript:;">
                  <span class="status-away"></span>
                  <span>Melissa Welch</span>
                </a>
                <a href="javascript:;">
                  <span class="status-no-disturb"></span>
                  <span>Vincent Peterson</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Pamela Wood</span>
                </a>
              </div>
              <div class="chat-group">
                <div class="chat-group-header">
                  Online Friends
                </div>
                <a href="javascript:;">
                  <span class="status-online"></span>
                  <span>Tammy Carpenter</span>
                </a>
                <a href="javascript:;">
                  <span class="status-away"></span>
                  <span>Emma Sullivan</span>
                </a>
                <a href="javascript:;">
                  <span class="status-no-disturb"></span>
                  <span>Andrea Brewer</span>
                </a>
                <a href="javascript:;">
                  <span class="status-online"></span>
                  <span>Sean Carpenter</span>
                </a>
              </div>
              <div class="chat-group">
                <div class="chat-group-header">
                  Offline
                </div>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Denise Peterson</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Jose Rivera</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Diana Robertson</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>William Fields</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Emily Stanley</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Jack Hunt</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Sharon Rice</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Mary Holland</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Diane Hughes</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Steven Smith</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Emily Henderson</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Wayne Kelly</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Jane Garcia</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Jose Jimenez</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Rachel Burton</span>
                </a>
                <a href="javascript:;">
                  <span class="status-offline"></span>
                  <span>Samantha Ruiz</span>
                </a>
              </div>
            </div>
            <div class="chat-conversation">
              <div class="chat-header">
                <a class="chat-back" href="javascript:;">
                  <i class="icon-arrow-left"></i>
                </a>
                <div class="chat-header-title">
                  Charles Wilson
                </div>
              </div>
              <div class="chat-conversation-content">
                <p class="text-center text-muted small text-uppercase bold pb15">
                  Yesterday
                </p>
                <div class="chat-conversation-user them">
                  <div class="chat-conversation-message">
                    <p>Hey.</p>
                  </div>
                </div>
                <div class="chat-conversation-user them">
                  <div class="chat-conversation-message">
                    <p>How are the wife and kids, Taylor?</p>
                  </div>
                </div>
                <div class="chat-conversation-user me">
                  <div class="chat-conversation-message">
                    <p>Pretty good, Samuel.</p>
                  </div>
                </div>
                <p class="text-center text-muted small text-uppercase bold pb15">
                  Today
                </p>
                <div class="chat-conversation-user them">
                  <div class="chat-conversation-message">
                    <p>Curabitur blandit tempus porttitor.</p>
                  </div>
                </div>
                <div class="chat-conversation-user me">
                  <div class="chat-conversation-message">
                    <p>Goodnight!</p>
                  </div>
                </div>
                <div class="chat-conversation-user them">
                  <div class="chat-conversation-message">
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  </div>
                </div>
              </div>
              <div class="chat-conversation-footer">
                <button class="chat-input-tool">
                  <i class="fa fa-camera"></i>
                </button>
                <div class="chat-input" contenteditable=""></div>
                <button class="chat-send">
                  <i class="fa fa-paper-plane"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /chat -->
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
