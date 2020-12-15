<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{ asset('vendor/datatables/media/css/datatables.bootstrap.css') }}">
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
         <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
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
  <script src="{{asset('js/functions.js')}}"></script>
  <!-- endbuild -->
  <!-- page scripts -->
  <script src="{{asset('vendor/datatables/media/js/jquery.dataTables.js')}}"></script> 
  <script src="{{asset('vendor/datatables/media/js/datatables.bootstrap.js')}}"></script> 
  <script>
    var title = 'Users';
    var columns = [0,1,2,3,4];

    $(document).ready(function() {
     
        $('#example3').DataTable( {
          lengthChange: true,
          lengthMenu:[10,25,50,100],
          dom: "<'row'<'col-sm-12 col-md-2'l><'col-sm-12 col-md-4'><'col-sm-12 col-md-6'f>>t<ip>",
          buttons: [
              {
                  extend: 'excel',
                  title: title,
                  text: '<img src="img/excel-ico.png" alt="" heigth= ""/> Export Excell',
                  titleAttr: 'Excel',
                  exportOptions: {
                      columns: columns
                  }

              }
          ],
        });

         
    });
  </script>

  <!-- end page scripts -->
 
</body>
    
</html>
