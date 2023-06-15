<!doctype html>
<html class="no-js" lang="zxx">
  <!-- Added by Amirul -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by Amirul -->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="{{asset('frontend/mrinmoy/new.png')}}" type="image/x-icon">
    <!--Title-->
    <title>মৃন্ময়</title> <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"> <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"> <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{asset('frontend/css/simple-line-icons.min.css')}}"> <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}"> <!-- Owl Slider -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.cs')}}s">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}"> <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}"> <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}"> <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/rs-plugin/css/main-slider/rs6.css')}}"> <!-- Color Panel -->
    <link href="{{asset('frontend/css/color_panel.css')}}" rel="stylesheet" type="text/css" /> <!-- Color Panel -->
    <link href="{{asset('frontend/css/color_panel.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/color-schemes/red.css')}}" id="changeable-colors"> <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" class="main-style">
    <style>
      #rev_slider_6_1_wrapper .tp-loader.spinner1 {
        background-color: #FFFFFF !important;
      }
    </style>
    <style>
      .rs-layer.Concept-Content a,
      .rs-layer.Concept-Content a:visited {
        color: #fff !important;
        border-bottom: 1px solid #fff !important;
        font-weight: 700 !important
      }

      .rs-layer.Concept-Content a:hover {
        border-bottom: 1px solid transparent !important
      }

      .rs-layer.Concept-Content-Dark a,
      .rs-layer.Concept-Content-Dark a:visited {
        color: #000 !important;
        border-bottom: 1px solid #000 !important;
        font-weight: 700 !important
      }

      .rs-layer.Concept-Content-Dark a:hover {
        border-bottom: 1px solid transparent !important
      }

      @media only screen and (max-width:575px) {
        rs-layer.res-slide-btn {
          padding: 7px 16px !important;
          font-size: 13px !important
        }
      }

      #rev_slider_1_1_wrapper .zeus.tparrows {
        cursor: pointer;
        min-width: 60px;
        min-height: 60px;
        position: absolute;
        display: block;
        z-index: 1000;
        border-radius: 50%;
        overflow: hidden;
        background: rgba(0, 0, 0, 0.38)
      }

      #rev_slider_1_1_wrapper .zeus.tparrows:before {
        font-family: 'revicons';
        font-size: 17px;
        color: #ffffff;
        display: block;
        line-height: 60px;
        text-align: center;
        z-index: 2;
        position: relative
      }

      #rev_slider_1_1_wrapper .zeus.tparrows.tp-leftarrow:before {
        content: '\e824'
      }

      #rev_slider_1_1_wrapper .zeus.tparrows.tp-rightarrow:before {
        content: '\e825'
      }

      #rev_slider_1_1_wrapper .zeus .tp-title-wrap {
        background: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
        top: 0px;
        left: 0px;
        position: absolute;
        opacity: 0;
        transform: scale(0);
        -webkit-transform: scale(0);
        transition: all 0.3s;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        border-radius: 50%
      }

      #rev_slider_1_1_wrapper .zeus .tp-arr-imgholder {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        background-position: center center;
        background-size: cover;
        border-radius: 50%;
        transform: translatex(-100%);
        -webkit-transform: translatex(-100%);
        transition: all 0.3s;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s
      }

      #rev_slider_1_1_wrapper .zeus.tp-rightarrow .tp-arr-imgholder {
        transform: translatex(100%);
        -webkit-transform: translatex(100%)
      }

      #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-arr-imgholder {
        transform: translatex(0);
        -webkit-transform: translatex(0);
        opacity: 1
      }

      #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-title-wrap {
        transform: scale(1);
        -webkit-transform: scale(1);
        opacity: 1
      }

      #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows {
        min-width: 60px !important;
        min-height: 60px !important;
        background: rgba(0, 0, 0, 0.38) !important
      }

      #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows:before {
        line-height: 60px !important;
        font-size: 17px !important
      }

      #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows {
        min-width: 60px !important;
        min-height: 60px !important;
        background: rgba(0, 0, 0, 0.38) !important
      }

      #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows:before {
        line-height: 60px !important;
        color: #ffffff !important;
        font-size: 17px !important
      }

      #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows {
        min-width: 60px !important;
        min-height: 60px !important;
        background: rgba(0, 0, 0, 0.38) !important
      }

      #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows:before {
        line-height: 60px !important;
        font-size: 17px !important
      }
    </style>
  </head>
  <!--Body Start-->

  <body data-res-from="1025">
    <!--Page Loader-->
    <div class="page-loader"></div>
    <!--Zmm Wrapper-->
    <div class="zmm-wrapper"> <a href="#" class="zmm-close close"></a>
      <div class="zmm-inner bg-white typo-dark">
        <div class="text-center mobile-logo-part margin-bottom-30"> <a href="index.php" class="img-before"><img src="{{asset('frontend/mrinmoy/new.png')}}" class="img-fluid changeable-dark" width="170" height="51" alt="Logo"></a> </div>
        <div class="zmm-main-nav"> </div>
        <div class="search-form-wrapper margin-top-30">
          <form class="search-form" role="search">
            <div class="input-group add-on"> <input class="form-control" placeholder="Search for.." name="srch-term" type="text">
              <div class="input-group-btn"> <button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button> </div>
            </div>
          </form>
        </div>
      </div>
    </div> <!-- Overlay Search -->
    <div class="overlay-search text-center hide"> <a href="#" class="close close-light overlay-search-close"></a>
      <div class="search-form-wrapper">
        <form class="navbar-form search-form sliding-search-form" role="search">
          <div class="input-group add-on"> <input class="form-control" placeholder="Search for.." name="srch-term" type="text">
            <div class="input-group-btn"> <button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button> </div>
          </div>
        </form>
      </div>
    </div> <!-- Main wrapper-->
    <div class="page-wrapper">
      <div class="page-wrapper-inner">
        <header>
          <!--Mobile Header-->
          <div class="mobile-header bg-white typo-dark">
            <div class="mobile-header-inner">
              <div class="sticky-outer">
                <div class="sticky-head">
                  <div class="basic-container clearfix">
                    <ul class="nav mobile-header-items pull-left">
                      <li class="nav-item"><a href="#" class="zmm-toggle img-before"><i class="ti-menu"></i></a></li>
                    </ul>
                    <ul class="nav mobile-header-items pull-center">
                      <li> <a href="index.php" class="img-before"><img src="{{asset('frontend/mrinmoy/new.png')}}" class="img-fluid changeable-dark" width="149" height="45" alt="Logo"></a> </li>
                    </ul>
                    <ul class="nav mobile-header-items pull-right">
                      <li class="nav-item"><a href="#" class="img-before overlay-search-switch"><i class="icon-magnifier icons"></i></a></li>
                    </ul>
                  </div> <!-- .basic-container -->
                </div> <!-- .sticky-head -->
              </div> <!-- .sticky-outer -->
            </div> <!-- .mobile-header-inner -->
          </div> <!-- .mobile-header -->
          <!--Header-->
          <div class="header-inner header-1 header-absolute">
            <!--Topbar-->
            <div class="topbar relative">
              <div class="basic-container clearfix">
                <ul class="nav topbar-items pull-left">
                  <li class="nav-item">
                    <ul class="nav header-info">
                      <li>
                        <div class="header-address typo-white"><span class="ti-location-pin"></span> দেবত্তর, আটঘরিয়া, পাবনা</div>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav topbar-items pull-right">
                  <li class="nav-item"> </li>
                  <li><a href="#" class="full-view-switch text-center"><i class="ti-search typo-white"></i></a></li>
                </ul>
              </div>
              <!--Search-->
              <div class="full-view-wrapper hide"> <a href="#" class="close full-view-close"></a>
                <form class="navbar-form search-form" role="search" action="{{ route('blogs.search') }}" method="GET">
                  <div class="input-group">
                      <input class="form-control" placeholder="Search and hit enter.." name="query" type="text">
                  </div>
              </form>
              
              </div>
            </div>
            <!--Topbar-->
            <!--Sticky part-->
            <div class="sticky-outer">
              <div class="sticky-head">
                <!--Navbar-->
                <nav class="navbar nav-shadow">
                  <div class="basic-container clearfix">
                    <div class="">
                      <!--Overlay Menu Switch-->
                      <ul class="nav navbar-items pull-left">
                        <li class="list-item"> 
                            <a href="/" class="logo-general"><img src="{{asset('frontend/mrinmoy/new.png')}}" class="img-fluid changeable-light" style="height: 100px;" alt="Logo" /></a> 
                            
                            <a href="/" class="logo-sticky" ><img  src="{{asset('frontend/mrinmoy/new.png')}}" class="img-fluid changeable-dark" alt="Logo" /></a> </li>
                      </ul> <!-- Menu -->
                      <ul class="nav navbar-items pull-right">
                        <!--List Item-->
                        <li class="list-item">
                          <ul class="nav navbar-main menu-white">
                            
                            
                            <li class="list-item" style="padding-top: 34px">
                          <div class="header-navbar-text-1"><a href="/" class="h-donate-btn">প্রথম পাতা</a></div>
                        </li>
                            

                        <li class="list-item" style="padding-top: 34px">
                              <div class="header-navbar-text-1 dropdown dropdown"><a href="#" class="h-donate-btn">কর্মসূচি</a>
                              <ul class="dropdown-menu">
                                
                                
                                <li> <a href="/education">শিক্ষা সহায়তা</a> </li>
                                <li> <a href="/medal">মৃন্ময় পদক প্রদান</a> </li>
                                <li> <a href="/tree-plantation">বৃক্ষ রোপন কর্মসূচি</a> </li>
                                <li> <a href="/eid">ঈদ সামগ্রী বিতরণ</a> </li>
                                <li> <a href="/human-for-human">মানুষ মানুষের জন্য প্রকল্প</a> </li>
                                
                                
                              </ul>
                            </li>

                            <li class="list-item" style="padding-top: 34px">
                          <div class="header-navbar-text-1"><a href="/comitee" class="h-donate-btn">কমিটি</a></div>
                        </li>
                            

                            
                            

                            <li class="list-item" style="padding-top: 34px">
                          <div class="header-navbar-text-1"><a href="/team" class="h-donate-btn">সদস্য</a></div>
                        </li>
                            
                            <li class="list-item" style="padding-top: 34px">
                          <div class="header-navbar-text-1"><a href="/all-blog" class="h-donate-btn">বার্তা</a></div>
                        </li>


                        <li class="list-item" style="padding-top: 34px">
                          <div class="header-navbar-text-1"><a href="/gallery" class="h-donate-btn">গ্যালারী</a></div>
                        </li>
                            
                            <li class="list-item" style="padding-top: 34px">
                          <div class="header-navbar-text-1"><a href="/contact-us" class="h-donate-btn">যোগাযোগ</a></div>
                        </li>
                          </ul>
                        </li>
                        <!--List Item End-->
                        <!--List Item-->
                         <!-- header -->