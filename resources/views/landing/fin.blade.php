
    @extends('layouts.landing.app')
    @section('content')
        
    <header class="oppi_header oppi_header_transparent oppi_menu_center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg header_nav">
                        <a class="navbar-brand logo" href="home_business_apps.html">
                            <img src="{{asset('landing/images/logo.png')}}" alt="logo">
                            <img src="{{asset('landing/images/logo-color.png')}}" alt="logo">
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
    
    <!-- oppi_finance_banner_area -->
    <section class="oppi_finance_banner_area">
        <div class="row m-0">
            <div class="col-lg-6 p-0 d-flex align-items-center">
                <div class="oppi_finance_banner_content">
                    <h2 class="wow fadeInUp">It’s all coming together</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">Spend a penny bamboozled the little rotter cuppa grub my good sir I don't want no agro.</p>
                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.6s">
                        <a href="#" class="oppi_dbtn finance_btn">Get Started</a>
                        <a class="popup-youtube video_icon" href="https://www.youtube.com/watch?v=sU3FkzUKHXU">
                            <i class="arrow_triangle-right_alt2"></i>
                            <span class="play_text">See how it works!</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0 macbook_img">
                <img class="wow fadeInRight" src="{{asset('landing/images/finance/macbook.png')}}" alt="">
                <div class="round"></div>
            </div>
        </div>
    </section>
    <!-- oppi_finance_banner_area -->
    
    <!-- oppi_finance_features_area -->
    <section class="oppi_finance_features_area">
        <div class="container">
            <div class="section_title_three text-center wow fadeInUp">
                <span>Oppi apps</span>
                <h2 class="f_title">Tailored for Your Unique Business Goals.</h2>
                <p>He legged it plastered cheeky loo what a plonker some dodgy chav a barney wellies, gutted mate quaint the little rotter.</p>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-lg-4 d-flex justify-content-end">
                    <div class="features_mockup wow fadeInRight">
                        <img src="{{asset('landing/images/finance/mockup-iphon.png')}}" alt="">
                        <div class="screen_changer">
                            <div class="screen_bg active"><img src="{{asset('landing/images/finance/screen1.jpg')}}" alt=""></div>
                            <div class="screen_bg"><img src="{{asset('landing/images/finance/screen2.jpg')}}" alt=""></div>
                            <div class="screen_bg"><img src="{{asset('landing/images/finance/screen3.jpg')}}" alt=""></div>
                            <div class="screen_bg"><img src="{{asset('landing/images/finance/screen4.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="oppi_finance_features_item active wow fadeInUp">
                                <img src="{{asset('landing/images/finance/smartphone.png')}}" alt="">
                                <a href="#"><h4>Custom Apps</h4></a>
                                <p>I zonked argy-bargy pear shaped gutted mate say cheesed off pukka tickety boo fantastic.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="oppi_finance_features_item wow fadeInUp" data-wow-delay="0.2s">
                                <img src="{{asset('landing/images/finance/list.png')}}" alt="">
                                <a href="#"><h4>Media & Entertainment</h4></a>
                                <p>I zonked argy-bargy pear shaped gutted mate say cheesed off pukka tickety boo fantastic.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="oppi_finance_features_item wow fadeInUp" data-wow-delay="0.4s">
                                <img src="{{asset('landing/images/finance/chat.png')}}" alt="">
                                <a href="#"><h4>Employee Communication</h4></a>
                                <p>I zonked argy-bargy pear shaped gutted mate say cheesed off pukka tickety boo fantastic.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="oppi_finance_features_item wow fadeInUp" data-wow-delay="0.6s">
                                <img src="{{asset('landing/images/finance/windows.png')}}" alt="">
                                <a href="#"><h4>Business Apps</h4></a>
                                <p>I zonked argy-bargy pear shaped gutted mate say cheesed off pukka tickety boo fantastic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_finance_features_area -->
    
    <!-- oppi_finance_features_promo_area -->
    <section class="oppi_features_promo_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="promo_img wow fadeInLeft"><img data-parallax='{"x": 0, "y": -30}' src="{{asset('landing/images/finance/iphone_04.png')}}" alt=""></div>
                </div>
                <div class="col-lg-7 col-md-7 offset-lg-1 d-flex align-items-center">
                    <div class="oppi_features_promo_content">
                        <h2 class="f_title wow fadeInUp">All your money in<br> one place</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">He legged it plastered cheeky loo what a plonker some dodgy chav a barney wellies, gutted mate quaint the little rotter pardon me bite your arm off the bee's knees tickety-boo owt to do.!</p>
                        <ul class="list-unstyled wow fadeInUp" data-wow-delay="0.4s">
                            <li>Enjoy access to unlimited free credit scores, without harming your credit</li>
                            <li>See all of your bills and money at a glance</li>
                            <li>Create budgets easily with tips tailored to you</li>
                        </ul>
                        <a href="#" class="oppi_dbtn promo_btn wow fadeInUp" data-wow-delay="0.6s">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_finance_features_promo_area -->
    
    <!-- oppi_finance_features_promo_area -->
    <section class="oppi_features_promo_area">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4 col-md-5 d-flex justify-content-end">
                    <div class="promo_img left wow fadeInRight"><img data-parallax='{"x": 0, "y": 30}' src="{{asset('landing/images/finance/iphone_05.png')}}" alt=""></div>
                </div>
                <div class="col-lg-8 col-md-7 d-flex align-items-center">
                    <div class="oppi_features_promo_content">
                        <h2 class="f_title wow fadeInUp">Effortlessly stay on<br>top of bills</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">He legged it plastered cheeky loo what a plonker some dodgy chav a barney wellies, gutted mate quaint the little rotter pardon me bite your arm off the bee's knees tickety-boo owt to do.!</p>
                        <ul class="list-unstyled wow fadeInUp" data-wow-delay="0.4s">
                            <li>Enjoy access to unlimited free credit scores, without harming your credit</li>
                            <li>See all of your bills and money at a glance</li>
                            <li>Create budgets easily with tips tailored to you</li>
                        </ul>
                        <a href="#" class="oppi_dbtn promo_btn wow fadeInUp" data-wow-delay="0.6s">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_finance_features_promo_area -->
    <!-- oppi_finance_app promo_area  -->
    <section class="oppi_finance_app_promo_area" dir="ltr">
        <div class="oppi_app_left">
            <div class="oppi_img">
                <div class="app_promo_mockup one"><img class="wow fadeInDown" src="{{asset('landing/images/finance/iPad2.png')}}" alt=""></div>
                <div class="app_promo_mockup two"><img class="wow fadeInDown" data-wow-delay="0.4s" src="{{asset('landing/images/finance/iPad3.png')}}" alt=""></div>
                <div class="app_promo_mockup three"><img class="wow fadeInUp" data-wow-delay="0.8s" src="{{asset('landing/images/finance/iPad1.png')}}" alt=""></div>
                <div class="app_promo_mockup four"><img class="wow slideInnew3" data-wow-delay="0.6s" src="{{asset('landing/images/finance/iPhone2.png')}}" alt=""></div>
                <div class="app_promo_mockup five"><img class="wow fadeInUp" data-wow-delay="0.8s" src="{{asset('landing/images/finance/iPhone3.png')}}" alt=""></div>
                <div class="app_promo_mockup six"><img class="wow fadeInUp" data-wow-delay="0.95s" src="{{asset('landing/images/finance/iPhone4.png')}}" alt=""></div>
                </div>
            </div>
        <div class="oppi_app_right">
            <div class="app_content">
                <h2 class="f_title wow fadeInUp">Hire professional Oppi app Makers to build your apps.</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Zonked twit chancer porkies grub chap bleeding cracking goal codswallop young delinquent no biggie, lemon squeezy pardon you super wind up gosh arse over tit Harry cheeky.</p>
                <a href="#" class="oppi_dbtn finance_btn wow fadeInUp" data-wow-delay="0.6s">Learn More</a>
            </div>
        </div>
    </section>
    <!-- oppi_finance_app promo_area  -->
    <!-- oppi_clients_feedback -->
    <section class="oppi_clients_feedback">
        <div class="container">
            <div class="section_title_three text-center wow fadeInUp">
                <span>Feedback</span>
                <h2 class="f_title">Hear from our customers</h2>
                <p>He legged it plastered cheeky loo what a plonker some dodgy chav a barney wellies, gutted mate quaint the little rotter.</p>
            </div>
            <div class="feedback_slider">
                <div class="item">
                    <span>,,</span>
                    <p>Lurgy the little rotter chinwag at public school I wind up bugger cras gormless golly.</p>
                    <a href="#"><img src="{{asset('landing/images/finance/c_logo.jpg')}}" alt=""></a>
                </div>
                <div class="item">
                    <span>,,</span>
                    <p>Lurgy the little rotter chinwag at public school I wind up bugger cras gormless golly.</p>
                    <a href="#"><img src="{{asset('landing/images/finance/c_logo1.jpg')}}" alt=""></a>
                </div>
                <div class="item">
                    <span>,,</span>
                    <p>Lurgy the little rotter chinwag at public school I wind up bugger cras gormless golly.</p>
                    <a href="#"><img src="{{asset('landing/images/finance/c_logo2.jpg')}}" alt=""></a>
                </div>
                <div class="item">
                    <span>,,</span>
                    <p>Lurgy the little rotter chinwag at public school I wind up bugger cras gormless golly.</p>
                    <a href="#"><img src="{{asset('landing/images/finance/c_logo3.jpg')}}" alt=""></a>
                </div>
                <div class="item">
                    <span>,,</span>
                    <p>Lurgy the little rotter chinwag at public school I wind up bugger cras gormless golly.</p>
                    <a href="#"><img src="{{asset('landing/images/finance/c_logo1.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_clients_feedback -->
     <!-- oppi_finance_blog_area -->
    <section class="oppi_finance_blog_area">
        <div class="container">
            <div class="section_title_three text-center wow fadeInUp">
                <span>the Blog</span>
                <h2 class="f_title">Our Thoughts</h2>
                <p>He legged it plastered cheeky loo what a plonker some dodgy chav a barney wellies, gutted mate quaint the little rotter.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="finance_blog_item wow fadeInUp">
                        <div class="post_img">
                            <a class="blog_post_img" href="blog_single_sidebar.html"><img src="{{asset('landing/images/finance/blog1.jpg')}}" alt="img"></a>
                        </div>
                        <div class="post_content">
                            <ul class="post_info list-unstyled">
                                <li> <a href="#"><i class="icon_clock_alt"></i><span class="post_time"> January 10, 2019 </span></a></li>
                            </ul>
                            <h3 class="post_title"><a href="blog_single_sidebar.html">How To Deploy a PHP Application with Kubernetes on Ubuntu</a></h3>
                            <div class="post_bottom">
                                <a href="blog_single_sidebar.html" class="read_more">Read More <i class="arrow_right"></i></a>
                                <div class="float-right tag_group">
                                    <div class="tag">
                                    <i class="lnr lnr-bubble"></i><a href="#">02 Comments</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="finance_blog_item wow fadeInUp">
                        <div class="post_img">
                            <a class="blog_post_img" href="blog_single_sidebar.html"><img src="{{asset('landing/images/finance/blog2.jpg')}}" alt="img"></a>
                        </div>
                        <div class="post_content">
                            <ul class="post_info list-unstyled">
                                <li> <a href="#"><i class="icon_clock_alt"></i><span class="post_time"> January 10, 2019 </span></a></li>
                            </ul>
                            <h3 class="post_title"><a href="blog_single_sidebar.html">How To Deploy a PHP Application with Kubernetes on Ubuntu</a></h3>
                            <div class="post_bottom">
                                <a href="blog_single_sidebar.html" class="read_more">Read More <i class="arrow_right"></i></a>
                                <div class="float-right tag_group">
                                    <div class="tag">
                                    <i class="lnr lnr-bubble"></i><a href="#">02 Comments</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="oppi_finance_action_area">
        <div class="container">
            <div class="finance_action_inner text-center mt_350">
                <h2 class="f_title wow fadeInUp">Get a Finance Banking App now</h2>
                <p class="wow fadeInUp" data-wow-delay="0.2s">No contact, no set-up costs, just awesome way to organise your money.</p>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="#" class="oppi_dbtn f_solid_btn wow fadeInLeft">Start for free</a>
                    <span class="wow fadeInRight">or you can <a href="#">View pricing</a></span>
                </div>
            </div>
        </div>
    </section>
@endsection