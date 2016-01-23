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

  <!-- BEGIN SIDEBPANEL-->
  <nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <div class="sidebar-overlay-slide from-top" id="appMenu">
      <div class="row">
        <div class="col-xs-6 no-padding">
          <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
          </a>
        </div>
        <div class="col-xs-6 no-padding">
          <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 m-t-20 no-padding">
          <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
          </a>
        </div>
        <div class="col-xs-6 m-t-20 no-padding">
          <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
          </a>
        </div>
      </div>
    </div>
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
      <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
      <div class="sidebar-header-controls">
        <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
        </button>
        <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
        </button>
      </div>
    </div>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->

    <div class="sidebar-menu m-t-10">
      <!-- BEGIN SIDEBAR MENU ITEMS-->
      <ul class="menu-items">


        <li>
          <a href="javascript:;">
            <span class="title">Season</span>
            <span class=" arrow"></span>
          </a>
          <span class=" icon-thumbnail">SE</span>
          <ul class="sub-menu">
            <li class="">
              <div class="row">
                  <div class="radio radio-info">
                    <input type="radio" checked="checked" value="yes" name="radio4" id="spring">
                    <label for="spring">Spring</label><br>
                    <input type="radio" value="no" name="radio4" id="summer">
                    <label for="summer">Summer</label><br>
                    <input type="radio" value="no" name="radio4" id="autumn">
                    <label for="autumn">Autumn</label><br>
                    <input type="radio" value="no" name="radio4" id="radio4No">
                    <label for="radio4No">Winter</label>
                  </div>

              </div>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;">
            <span class="title">Radius</span>
            <span class=" arrow"></span>
          </a>
          <span class=" icon-thumbnail">RA</span>
          <ul class="sub-menu">
            <li class="">
              <div class="row">
                <div class="col-md-8">
                  <div id="noUiSlider" class="bg-master"></div>

                </div>
                <div class="col-md-4">

                </div>
              </div>
            </li>
          </ul>
        </li>

      </ul>
      <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
  </nav>

  <!-- END SIDEBAR -->
  <!-- END SIDEBPANEL-->
  <!-- START PAGE-CONTAINER -->
  <div class="page-container ">
    <!-- START HEADER -->
    <div class="header ">
      <!-- START MOBILE CONTROLS -->
      <div class="container relative">
        <!-- LEFT SIDE -->
        <div class="pull-left full-height visible-sm visible-xs">
          <!-- START ACTION BAR -->
          <div class="header-inner">
            <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
              <span class="icon-set menu-hambuger"></span>
            </a>
          </div>
          <!-- END ACTION BAR -->
        </div>
        <!-- RIGHT SIDE -->
        <div class="pull-right full-height visible-sm visible-xs">
          <!-- START ACTION BAR -->
          <div class="header-inner">
            <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
              <span class="icon-set menu-hambuger-plus"></span>
            </a>
          </div>
          <!-- END ACTION BAR -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-3">
          <div class=" form-group form-group-default " style="padding-top: 17px !important;">
            <input style="margin-top: 8px !important;" class="full-width form-control" autocomplete="off" id="geolocation" name="geolocation" placeholder="Search photos" value="">
          </div>
        </div>
      </div>
      <!-- END MOBILE CONTROLS -->
      <div class=" pull-left sm-table hidden-xs hidden-sm">
        <div class="header-inner">
          <div class="brand inline">

          </div>
        </div>
      </div>
    </div>
    <!-- END HEADER -->
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
      <!-- START PAGE CONTENT -->
      <div class="content ">
        <!-- START JUMBOTRON -->

        <!-- END JUMBOTRON -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg">
          <!-- BEGIN PlACE PAGE CONTENT HERE -->
          <!-- END PLACE PAGE CONTENT HERE -->
        </div>
        <!-- END CONTAINER FLUID -->
      </div>
      <!-- END PAGE CONTENT -->
      <!-- START COPYRIGHT -->
      <!-- START CONTAINER FLUID -->
      <!-- START CONTAINER FLUID -->

      <div class="container-fluid container-fixed-lg footer">
        <div class="jumbotron" data-pages="parallax">
          <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
            <div class="inner">
              <div style="height: 50px" class="text-center">
                photo
              </div>
              <!-- START BREADCRUMB -->
              {{--<ul class="breadcrumb">--}}
                {{--<li>--}}
                  {{--<p>Pages</p>--}}
                {{--</li>--}}
                {{--<li><a href="#" class="active">Meteor template</a>--}}
                {{--</li>--}}
              </ul>
              <!-- END BREADCRUMB -->
            </div>
          </div>
        </div>

      </div>
      <!-- END COPYRIGHT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
  </div>
  <!-- END PAGE CONTAINER -->


  <!-- BEGIN VENDOR JS -->
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
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places')}}"></script>

  <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
  <script>
    $(document).ready(function() {

      function initialize() {

        var input = document.getElementById('geolocation');
        var autocomplete = new google.maps.places.Autocomplete(input);
      }

      google.maps.event.addDomListener(window, 'load', initialize);

      $('#geolocation').keypress(function (e) {
        var key = e.which;
        if(key == 13)  // the enter key code
        {
          console.log(document.getElementById('geolocation'))
        }
      });
      // Apply the plugin to the element
      $("#noUiSlider").noUiSlider({
        start: 40,
        connect: "lower",
        range: {
          'min': 0,
          'max': 100
        }
      });
    });
  </script>
  <script type="text/javascript" src="{{asset('assets/plugins/jquery-nouislider/jquery.nouislider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-nouislider/jquery.liblink.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/plugins/jquery-nouislider/jquery.nouislider.min.js')}}"> </script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-nouislider/jquery.liblink.js')}}"></script>
    <script src="{{ asset('pages/js/pages.min.js')}}"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ asset('assets/js/scripts.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>