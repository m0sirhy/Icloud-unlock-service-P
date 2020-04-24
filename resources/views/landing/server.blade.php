
   @extends('layouts.landing.app')
   @section('content')
   <header class="oppi_header oppi_header_transparent oppi_header_inner_menu oppi_header_menu_border">
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
                            <ul class="navbar-nav ml-auto">
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
                            <a class="nav-link oppi_try_for_free " href="#">Try for Free</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- oppi_header -->


    <section class="oppi_banner oppi_inner_banner oppi_Case_Study">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="oppi_banner_content">
                        <h1 class="banner_title text-center wow fadeInUp" data-wow-delay="0.2s">Case Study</h1>
                        <ul class="oppi_breadcrumb_link text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Case Study</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- oppi_banner -->


    <section class="oppi_portfolio_area">
        <div class="container">
            <div id="portfolio_filter" class="portfolio_filter">
                <div data-filter="*" class="work_portfolio_item active">All</div>
                <div data-filter=".Marketing" class="work_portfolio_item">Marketing</div>
                <div data-filter=".Application" class="work_portfolio_item">Application</div>
                <div data-filter=".Design" class="work_portfolio_item">Design</div>
                <div data-filter=".Development" class="work_portfolio_item">Development</div>
            </div>
            <div class="row portfolio_gallery mb-50" id="work-portfolio">
                <div class="col-lg-4 col-sm-12 portfolio_item Application Development mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_1.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_1.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Bookng App</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Application web mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_2.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_2.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Defiant Black</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Marketing Design mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_3.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_3.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Retro Design</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Marketing Design mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_4.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_4.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Book Cover</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Development Application mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_5.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_5.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Product Design</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item product Application mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_6.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_6.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Design studio</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Development Marketing web mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_7.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_7.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Retro design</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Design Application mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_8.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_8.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Brand Design</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Marketing Application Development mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_9.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_9.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>World Clock</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Application Design mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_10.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_10.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Coffee Label</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Development Marketing mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_11.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_11.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Coupo Creation</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 portfolio_item Development Application mb_50">
                    <div class="portfolio_img">
                        <a href="{{asset('landing/images/portfolio/grid/grid_img_12.jpg')}}" class="img_popup"><img class="img_rounded" src="{{asset('landing/images/portfolio/grid/grid_img_12.jpg')}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>Design studio</h3>
                            </a>
                            <p>In tellus integer feugiat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection