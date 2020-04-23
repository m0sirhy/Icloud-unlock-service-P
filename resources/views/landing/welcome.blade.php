@extends('layouts.landing.app')
@section('content')
<header class="oppi_header oppi_header_transparent oppi_menu_center social_header">
    <div class="container">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-12">
              <nav class="navbar navbar-expand-lg header_nav">
                  <a class="navbar-brand logo" href="home_business_apps.html">
                      <img src="images/logo.png" alt="logo">
                      <img src="images/logo-color.png" alt="logo">
                  </a>
                  <button class="navbar-toggler oppi_hamburger" type="button" data-toggle="collapse" data-target="#oppi_header_menu" aria-expanded="false">
                      <span class="bar_icon">
                          <span class="bar bar_1"></span>
                          <span class="bar bar_2"></span>
                          <span class="bar bar_3"></span>
                      </span>
                  </button>
  
                  <div class="collapse navbar-collapse oppi_header_menu" id="oppi_header_menu">
                      <ul class="navbar-nav m-auto">
                          <li class="nav-item active dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Home </a>
                              <ul class="dropdown-menu">
                                  <li><a href="home_business_apps.html">Business App</a></li>
                                  <li><a href="home_education_apps.html">Home Education App</a></li>
                                  <li><a href="home_finance.html">Home Finance App</a></li>
                                  <li><a href="home_food_app.html">Home Food App</a></li>
                                  <li><a href="home_health_apps.html">Home Health Apps</a></li>
                                  <li><a href="home_lifestyle_apps.html">Home Lifestyle App</a></li>
                                  <li><a href="home_restaurant_app.html">Home Resturant App</a></li>
                                  <li><a href="home_social_media_apps.html">Home Social Media App</a></li>
                                  <li><a href="home_travel_apps.html">Home Travel App</a></li>
                                  <li><a href="home_utility_tools_apps.html">Home Utility App</a></li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="how_it_works_style_01.html">How it works</a>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                              <ul class="dropdown-menu">
                                  <li><a href="case_study_style_01.html">Case Study Style 01</a></li>
                                  <li><a href="case_study_style_02.html">Case Study Style 02</a></li>
                                  <li><a href="case_study_style_03.html">Case Study Style 03</a></li>
                                  <li><a href="case_study_single.html">Case Study Single</a></li>
                                  <li><a href="download.html">Download</a></li>
                                  <li><a href="pricing_pro.html">Pricing</a></li>
                                  <li><a href="sign_in.html">Sign In</a></li>
                                  <li><a href="sign_up.html">Sign Up</a></li>
                                  <li><a href="Integrations.html">Integrations</a></li>
                                  <li><a href="support.html">Support</a></li>
                              </ul>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> News </a>
                              <ul class="dropdown-menu">
                                  <li><a href="blog_sidebar.html">Blog</a></li>
                                  <li><a href="blog_single_sidebar.html">Blog Single</a></li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="contact.html">Contact Us</a>
                          </li>
                      </ul>
                      <a class="oppi_try_for_free oppi_btn_right " href="#">Sign Up Free</a>
                  </div>
              </nav>
          </div>
      </div>
  </div>
  </header>
  <!-- oppi_header --> 
    
    <section class="oppi_banner oppi_banner_two oppi_social_banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="oppi_banner_content">
                        <h1 class="banner_title wow fadeInUp" data-wow-delay="0.2s">Smart, secure, and simply amazing.</h1>
                        <p class="banner_para wow fadeInUp" data-wow-delay="0.3s">Special 50% volume purchase discount on Niche for all eligible education institutions
                        </p>
                        <div class="oppi_btn_group wow fadeInUp" data-wow-delay="0.4s">
                            <a href="#" class="oppi_dbtn btn_border">Start 14 day Trial</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="oppi_banner_img_content">
                        <div class="banner_img">
                            <div class="social_banner_img">
                                <img src="{{asset('landing/images/home_social/banner_img/img_1.png')}}" alt="social_banner_img" class="social_banner_img_1 wow fadeInUp" data-wow-delay="0.2s" data-parallax='{"x": 0, "y": 50}'>
                                <img src="{{asset('landing/images/home_social/banner_img/img_2.png')}}" alt="social_banner_img" class="soci_banner_img img_2 wow fadeInUp" data-wow-delay="0.4s" data-parallax='{"x": 30, "y": 0}'>
                                <img src="{{asset('landing/images/home_social/banner_img/type_1.png')}}" alt="social_banner_img" class="soci_banner_img img_3 wow zoomIn" data-wow-delay="0.6s">
                                <img src="{{asset('landing/images/home_social/banner_img/type_2.png')}}" alt="social_banner_img" class="soci_banner_img img_4 wow zoomIn" data-wow-delay="0.7s" data-parallax='{"x": 0, "y": 100}'>
                                <div class="wev_1 wow zoomIn" data-wow-delay="0.5s">
                                    <div class="wev_inner" data-parallax='{"x": 0, "y": 50}'></div>
                                </div>
                                <div class="wev_3 wow zoomIn" data-wow-delay="0.7s">
                                    <div class="wev_inner" data-parallax='{"x": 0, "y": 80}'></div>
                                </div>
                                <div class="wev_4 wow zoomIn" data-wow-delay="0.8s">
                                    <div class="wev_inner" data-parallax='{"x": 0, "y": -90}'></div>
                                </div>
                            </div>
                            <div class="parallax_icon">
                                <div class="icon icon_1 wow zoomIn" data-wow-delay="0.05s">
                                    <img src="{{asset('landing/images/home_social/banner_img/ellipse_01.png')}}" alt="ellipse" data-parallax='{"x": 0, "y": 180}'>
                                </div>
                                <div class="icon icon_2 wow zoomIn" data-wow-delay="0.1s">
                                    <img src="{{asset('landing/images/home_social/banner_img/ellipse_02.png')}}" alt="ellipse" data-parallax='{"x": -90, "y": 90}'>
                                </div>
                                <div class="icon icon_3 wow zoomIn" data-wow-delay="0.15s">
                                    <img src="{{asset('landing/images/home_social/banner_img/ellipse_03.png')}}" alt="ellipse" data-parallax='{"x": 0, "y": 130}'>
                                </div>
                                <div class="icon icon_4 wow zoomIn" data-wow-delay="0.20s">
                                    <img src="{{asset('landing/images/home_social/banner_img/ellipse_04.png')}}" alt="ellipse" data-parallax='{"x": 60, "y": -180}'>
                                </div>
                                <div class="icon icon_5 wow zoomIn" data-wow-delay=".25s">
                                    <img src="{{asset('landing/images/home_social/banner_img/ellipse_05.png')}}" alt="ellipse" data-parallax='{"x": 300, "y": 450}'>
                                </div>
                                <div class="icon icon_6 wow zoomIn" data-wow-delay="3s">
                                    <img src="{{asset('landing/images/home_social/banner_img/ellipse_06.png')}}" alt="ellipse" data-parallax='{"x": 200, "y": 200}'>
                                </div>
                                <div class="icon icon_7 wow zoomIn" data-wow-delay=".35s">
                                    <img src="{{asset('landing/images/home_social/banner_img/ellipse_07.png')}}" alt="ellipse" data-parallax='{"x": -150, "y": 180}'>
                                </div>
                                <div class="icon icon_8 wow zoomIn" data-wow-delay=".4s">
                                    <img src="{{asset('landing/images/home_social/banner_img/ellipse_08.png')}}" alt="ellipse" data-parallax='{"x": 0, "y": 180}'>
                                </div>
                                <div class="icon icon_9 wow zoomIn" data-wow-delay="0.45s">
                                    <img src="{{asset('landing/images/home_social/banner_img/ellipse_09.png')}}" alt="ellipse" data-parallax='{"x": 0, "y": -150}'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_banner -->

    <section class="oppi_feature_wrap oppi_social_feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <h2 class="text-center sec_title2 wow fadeInUp" data-wow-delay="0.2s">So many ways to <br> connect with all your friends</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="oppi_feature_item">
                        <div class="feature_img text-center wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{asset('landing/images/home_social/feature_img_1.png')}}" alt="feature_img" class="img-fluid">
                        </div>
                        <h4 class="feature_sub_title text-center wow fadeInUp" data-wow-delay="0.3s">Product & Design</h4>
                        <p class="feature_para text-center wow fadeInUp" data-wow-delay="0.4s">Mush down the pub at public school car boot gormless my good.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="oppi_feature_item">
                        <div class="feature_img text-center wow fadeInUp" data-wow-delay="0.3s">
                            <img src="{{asset('landing/images/home_social/feature_img_2.png')}}" alt="feature_img" class="img-fluid">
                        </div>
                        <h4 class="feature_sub_title text-center wow fadeInUp" data-wow-delay="0.4s">Engineering</h4>
                        <p class="feature_para text-center wow fadeInUp" data-wow-delay="0.5s">Mush down the pub at public school car boot gormless my good.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="oppi_feature_item">
                        <div class="feature_img text-center wow fadeInUp" data-wow-delay="0.4s">
                            <img src="{{asset('landing/images/home_social/feature_img_3.png')}}" alt="feature_img" class="img-fluid">
                        </div>
                        <h4 class="feature_sub_title text-center wow fadeInUp" data-wow-delay="0.5s">Development Fist</h4>
                        <p class="feature_para text-center wow fadeInUp" data-wow-delay="0.6s">Mush down the pub at public school car boot gormless my good.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="oppi_btn_group wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#" class="oppi_dbtn btn_border btn_icon">View all Features 
                               <i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_feature_wrap -->

    <section class="oppi_watching_wrap" dir="ltr"> 
        <div class="shape_bg">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920px" height="981px" data-parallax='{"x": 0, "y": 0}'>
                <path fill-rule="evenodd" fill="rgb(252, 250, 251)"
                    d="M0.000,-0.000 L1920.000,-0.000 L1920.000,699.697 C1920.000,699.697 1634.664,1289.311 1027.045,759.691 C813.812,573.831 462.508,819.658 244.090,819.658 C56.289,819.658 0.000,669.705 0.000,669.705 L0.000,-0.000 Z" />
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="oppi_watching_img text-center">
                        <div class="img_inner">
                            <div class="shape wow zoomIn" data-wow-delay="0.4s">
                                <img src="{{asset('landing/images/home_social/shape_squer.png')}}" alt="shape_squer" data-parallax='{"x": -50, "y": 100}'>
                            </div>
                            <div class="social_img_content wow fadeInUp" data-wow-delay="0.2s">
                                <img src="{{asset('landing/images/home_social/watching_img.png')}}" alt="watching_img" class="img-fluid social_screen_bg">
                                <div class="social_slider_screen">
                                    <div class="social_screen_slider service_mobile_img testimonial_content" id="sliders">
                                        <ul class="slides">
                                            <li>
                                                <div class="item social_slider_screen_item text-center">
                                                    <img src="{{asset('landing/images/home_social/youtube_slide.png')}}" alt="watching_img" class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item social_slider_screen_item text-center">
                                                    <img src="{{asset('landing/images/home_social/youtube_slide.png')}}" alt="watching_img" class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item social_slider_screen_item text-center">
                                                    <img src="{{asset('landing/images/home_social/Messenger.png')}}" alt="watching_img" class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item social_slider_screen_item text-center">
                                                    <img src="{{asset('landing/images/home_social/WhatsApp_slide.png')}}" alt="watching_img" class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item social_slider_screen_item text-center">
                                                    <img src="{{asset('landing/images/home_social/Instagram_App_screen.png')}}" alt="watching_img" class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item social_slider_screen_item text-center">
                                                    <img src="{{asset('landing/images/home_social/Twitter_sliode.png')}}" alt="watching_img" class="img-fluid">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="oppi_watching_content">
                        <h3 class="sec_title2 wow fadeInUp" data-wow-delay="0.2s">The World is Watching</h3>
                        <p class="w_para wow fadeInUp" data-wow-delay="0.3s">A TV-like experience with hands-free scrolling and a full-screen view</p>
                        <div class="w_items_wrap">
                            <div class="w_items wow fadeInUp" data-wow-delay="0.2s">
                                <div class="w_img text-center">
                                    <img src="{{asset('landing/images/home_social/yq-tiktok-04072018.png')}}" alt="w_img">
                                </div>
                                <p class="text-center"><a href="#">Tik Tok</a> </p>
                            </div>
                            <div class="w_items wow fadeInUp" data-wow-delay="0.3s">
                                <div class="w_img text-center">
                                    <img src="{{asset('landing/images/home_social/youtube.png')}}" alt="w_img">
                                </div>
                                <p class="text-center"><a href="#">YouTube</a> </p>
                            </div>
                            <div class="w_items wow fadeInUp" data-wow-delay="0.4s">
                                <div class="w_img text-center">
                                    <img src="{{asset('landing/images/home_social/fb_messanger.png')}}" alt="w_img">
                                </div>
                                <p class="text-center"><a href="#">Messenger</a> </p>
                            </div>
                            <div class="w_items wow fadeInUp" data-wow-delay="0.3s">
                                <div class="w_img text-center">
                                    <img src="{{asset('landing/images/home_social/WhatsApp.png')}}" alt="w_img">
                                </div>
                                <p class="text-center"><a href="#">WhatsApp</a> </p>
                            </div>
                            <div class="w_items wow fadeInUp" data-wow-delay="0.4s">
                                <div class="w_img text-center">
                                    <img src="{{asset('landing/images/home_social/Instagram_AppIcon_Aug2017.png')}}" alt="w_img">
                                </div>
                                <p class="text-center"><a href="#">Instagram</a> </p>
                            </div>
                            <div class="w_items wow fadeInUp" data-wow-delay="0.5s">
                                <div class="w_img text-center">
                                    <img src="{{asset('landing/images/home_social/Twitter-bird-logo-medium.png')}}" alt="w_img">
                                </div>
                                <p class="text-center"><a href="#">Twitter</a> </p>
                            </div>
                        </div>
                        <div class="oppi_btn_group wow fadeInUp" data-wow-delay="0.6s">
                            <a href="#" class="oppi_dbtn btn_solid_color">& Many More . . . </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_watching_wrap -->

    <section class="oppi_social_about_wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="oppi_social_about_content">
                        <h3 class="sec_title2  wow fadeInUp" data-wow-delay="0.2s">Designed with groups in Mind</h3>
                        <p class="oppi_soci_para  wow fadeInUp" data-wow-delay="0.3s">Bodge golly gosh bog he nicked it do one some dodgy chav cack, you mug cuppa such a fibber nice one have it well, so I said faff about bevvy loo a. Vagabond tosser down the pub cheeky.!</p>
                        <div class="oppi_btn_group">
                            <a href="#" class="oppi_dbtn btn_border btn_icon  wow fadeInUp" data-wow-delay="0.4s">About Us <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="oppi_grafe_img_content">
                        <div class="img_inner">
                            <img src="{{asset('landing/images/home_social/grafe_img.png')}}" alt="grafe_img" class="img-fluid grafe_img wow fadeInUp" data-wow-delay='0.2s'>
                            <div class="grafe_man_1">
                                <img src="{{asset('landing/images/home_social/grafe_man_1.png')}}" alt="grafe_img" class="img-fluid  wow fadeInLeft" data-wow-delay='0.5s'>
                            </div>
                            <div class="grafe_man_2">
                                <img src="{{asset('landing/images/home_social/grafe_man_2.png')}}" alt="grafe_img" class="img-fluid  wow fadeInUp" data-wow-delay='0.6s'>
                            </div>
                            <div class="grafe_item">
                                <img src="{{asset('landing/images/home_social/grafe_item_1.png')}}" alt="grafe_img" class="grafe_item_img grafe_item_1 wow fadeInLeft" data-wow-delay='0.3s'>
                                <img src="{{asset('landing/images/home_social/grafe_item_2.png')}}" alt="grafe_img" class="grafe_item_img grafe_item_2 wow fadeInRight" data-wow-delay='0.4s'>
                                <img src="{{asset('landing/images/home_social/grafe_item_3.png')}}" alt="grafe_img" class="grafe_item_img grafe_item_3 wow fadeInLeft" data-wow-delay='0.5s'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_social_about_wrap -->

    <section class="oppi_analytics_wrap">
        <div class="oppi_analytics_bg_shape">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920px" height="951px">
                <path fill-rule="evenodd" fill="rgb(252, 250, 251)"
                    d="M1920.000,-0.000 L0.000,-0.000 L0.000,699.973 C0.000,699.973 195.335,1249.805 802.955,719.975 C1016.188,534.042 1387.492,789.970 1605.910,789.970 C1793.711,789.970 1920.000,679.973 1920.000,679.973 L1920.000,-0.000 Z" />
            </svg>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="oppi_analytics_img_content pl_100">
                        <div class="analytics_img_inner">
                            <img src="{{asset('landing/images/home_social/analytics_mockup.png')}}" alt="analytics_mockup" class="img-fluid analytics_mockup wow fadeInUp">
                            <img src="{{asset('landing/images/home_social/member_01.png')}}" alt="analytics_mockup" class="img-fluid analytics_member_1 wow zoomIn" data-wow-delay='0.2s'>
                            <img src="{{asset('landing/images/home_social/member_02.png')}}" alt="analytics_mockup" class="img-fluid analytics_member_2 wow zoomIn" data-wow-delay='0.3s'>
                            <div class="analytics_shape wow zoomIn" data-wow-delay="0.5s">
                                <img src="{{asset('landing/images/home_social/shape_squer.png')}}" alt="analytics_mockup" class="img-fluid" data-parallax='{"x": 0, "y": 100}'>
                            </div>
                            <img src="{{asset('landing/images/home_social/analytics_icon_1.png')}}" alt="analytics_mockup" class="img-fluid analytics_icon_1 wow zoomIn" data-wow-delay=' 0.4s '>
                            <img src="{{asset('landing/images/home_social/analytics_icon_2.png')}}" alt="analytics_mockup" class="img-fluid analytics_icon_2 wow zoomIn" data-wow-delay='0.6s '>
                            <img src="{{asset('landing/images/home_social/analytics_icon_3.png')}}" alt="analytics_mockup" class="img-fluid analytics_icon_3 wow zoomIn" data-wow-delay='0.1s '>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="oppi_analytics_content m_w_475">
                        <h3 class="sec_title2 wow fadeInUp" data-wow-delay="0.2s">Access your performance analytics at any time</h3>
                        <p class="analytics_para wow fadeInUp" data-wow-delay="0.3s">Spend a penny bamboozled the little rotter cuppa grub my good sir I don't want no agro bugger all mate cup of tea he nicked it geeza lemon squeezy well.!</p>
                        <ul class="analytics_devices">
                            <li class="wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-apple" aria-hidden="true"></i> Android</li>
                            <li class="wow fadeInUp" data-wow-delay="0.5s"> <i class="fa fa-android" aria-hidden="true"></i> iPhone</li>
                            <li class="wow fadeInUp" data-wow-delay="0.6s"><i class="fa fa-windows" aria-hidden="true"></i>Windows Phone</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_analytics_wrap -->

    <section class="oppi_download_app_two_wrap">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="oppi_download_two_content m_w_475">
                        <h3 class="sec_title2 wow fadeInUp" data-wow-delay="0.2s">Starting with social app is easier than anything!</h3>
                        <h5 class="language wow fadeInUp" data-wow-delay="0.4s">Available in 15 langauges</h5>
                        <ul class="language_list wow fadeInUp" data-wow-delay="0.5s">
                            <li>English</li>
                            <li>Arabic</li>
                            <li>Bengali</li>
                            <li>Finnish</li>
                            <li>Hindi</li>
                            <li>Russian</li>
                            <li>Polish</li>
                            <li>Somali</li>
                            <li>Nepali</li>
                        </ul>
                        <div class="oppi_download_count">
                            <div class="count_item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="count">
                                    <div class="count_inner">
                                        <span class="count_number">24</span>
                                        <span class="count_name">Million</span>
                                    </div>
                                </div>
                                <p class="count_title text-center">Downloads</p>
                            </div>
                            <div class="count_item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="count">
                                    <div class="count_inner">
                                        <span class="count_number">5</span>
                                        <span class="count_name">Stars</span>
                                    </div>
                                </div>
                                <p class="count_title text-center">Rating</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="oppi_download_two_img_content">
                        <div class="img_inner text-center">
                            <img src="{{asset('landing/images/home_social/download_two_mockup2.png')}}" alt="download_two_mockup2" class="img-fluid download_two_mockup2 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="download_two_shape wow zoomIn" data-wow-delay=".5s">
                                <img src="{{asset('landing/images/home_social/shape_squer.png')}}" alt="download_two_shape" class="img-fluid" data-parallax='{"x": 0, "y": -100}'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_download_app_two_wrap -->

    <section class="oppi_call_to_action_two_wrap" dir="ltr">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 pos_static">
                    <div class="oppi_call_to_action_img_content">
                        <img src="{{asset('landing/images/home_social/call_to_action_mockup_1.png')}}" alt="call_to_action_mockup" class="img-fluid call_img_1 wow fadeInDown" data-wow-delay="0.2s">
                        <img src="{{asset('landing/images/home_social/call_to_action_mockup_2.png')}}" alt="call_to_action_mockup" class="img-fluid call_img_2 wow fadeInLeft" data-wow-delay="0.4s">
                        <img src="{{asset('landing/images/home_social/call_to_action_mockup_3.png')}}" alt="call_to_action_mockup" class="img-fluid call_img_3 wow fadeInUp" data-wow-delay="0.6s">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="oppi_call_to_action_content">
                        <h3 class="sec_title2 wow fadeInUp" data-wow-delay="0.2s">Get the Niche app for your mobile device</h3>
                        <p class="call_para wow fadeInUp" data-wow-delay="0.3s">Download the most wanted apartment hunting app and find your home. It's free!</p>
                        <div class="oppi_btn_group">
                            <a href="#" class="oppi_dbtn btn_solid wow fadeInUp" data-wow-delay="0.2s"><span class="btn_inner"> <span class="icon"><span class="iconify" data-icon="fa-brands:google-play" data-inline="false"></span></span><span class="text">Download <br> <small>For Android</small></span></span></a>
                            <a href="#" class="oppi_dbtn btn_solid wow fadeInUp" data-wow-delay="0.3s"><span class="btn_inner"> <span class="icon"><span class="iconify" data-icon="ant-design:apple-fill" data-inline="false"></span></span><span class="text">Download <br> <small>For iOS</small></span></span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_call_to_action_two_wrap -->
    @endsection
