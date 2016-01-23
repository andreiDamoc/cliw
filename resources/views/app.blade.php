<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Lock Screen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/boostrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/bootstrap-select2/select2.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('pages/css/pages-icons.css" rel="stylesheet')}}" type="text/css">
    <link class="main-stylesheet" href="{{ asset('pages/css/pages.css')}}" rel="stylesheet" type="text/css" />

    <style>
      html, body {
        width: 100% !important;
        height: 100% !important;
      }
    </style>
    <link media="screen" type="text/css" rel="stylesheet" href="{{asset('assets/plugins/jquery-nouislider/jquery.nouislider.css')}}"/>
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header ">

 @include('sidebar')
  <div class="page-container ">
    <div class="header ">
      <div class="container relative">
        <div class="pull-left full-height visible-sm visible-xs">
          <div class="header-inner">
            <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
              <span class="icon-set menu-hambuger"></span>
            </a>
          </div>
        </div>
        <div class="pull-right full-height visible-sm visible-xs">
          <div class="header-inner">
            <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
              <span class="icon-set menu-hambuger-plus"></span>
            </a>
          </div>
        </div>
      </div>
      <div class=" pull-left sm-table hidden-xs hidden-sm">
        <div class="header-inner">
          <div class="brand inline">
          </div>
        </div>
      </div>
    </div>
    <div class="page-content-wrapper ">
      <div class="content ">
        <input style="margin-top: 8px !important;width: 350px" class="full-width form-control"  autocomplete="off" id="geolocation" name="geolocation" placeholder="Search photos" value="">
        <div id = "map" style="height: 90% ;width: 100%;position: absolute">
        </div>
        <div class="container-fluid container-fixed-lg">
        </div>
      </div>
      <div class="container-fluid container-fixed-lg footer m-b-60" style="height: 50px !important;">asdasdf
      </div>
    </div>
  </div>
 <div class="modal fade" id="nothing_select" tabindex="-1" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header m-t-10 m-b-10">
         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       </div>
       <div class="modal-body">
         <h4 class="text-center">Please select a place to search before to hit this button, noob.</h4>
         <div class="modal-footer text-center m-t-10">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
       </div>
     </div>
   </div>
 </div>
    <script src="{{ asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/boostrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-bez/jquery.bez.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-actual/jquery.actual.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/classie/classie.js')}}"></script>
    <script src="{{ asset('assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvGjE0XQRtPsLmbXyxKYfM6ukQTNfUR6w&libraries=places"></script>

  <script type="text/javascript" src="{{asset('assets/plugins/jquery-nouislider/jquery.nouislider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-nouislider/jquery.liblink.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/plugins/jquery-nouislider/jquery.nouislider.min.js')}}"> </script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-nouislider/jquery.liblink.js')}}"></script>
    <script src="{{ asset('pages/js/pages.min.js')}}"></script>
    <script src="{{ asset('assets/js/search-and-map.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
  </body>
</html>