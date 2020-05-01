
   @extends('layouts.landing.app')
   @section('content')
   <header class="oppi_header oppi_header_transparent oppi_header_inner_menu oppi_header_menu_border">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg header_nav">
                        <a class="navbar-brand logo" href="home_business_apps.html">
                            <img src="{{asset('landing/images/logo.png')}}" alt="logo">
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
                                <li class="nav-item active ">
                                    <a class="nav-link " href="{{ route('welcome') }}" > Home </a>
                                
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('server') }}">Server Service</a>
                                </li>
                                <li class="nav-item">

                                <a class="nav-link" href="{{ route('imei') }}">IMEI Service</a>
                                </li>
                            </ul>

                            <a class="nav-link oppi_try_for_free " href="{{ route('login') }}">التسجيل / تسجيل الدخول</a>
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
                        <h1 class="banner_title text-center wow fadeInUp" data-wow-delay="0.2s">   IMEI Service
                        </h1>
                        <ul class="oppi_breadcrumb_link text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="#">   SERVER Service
                            </a></li>
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

                @foreach ($categories as $category)
                <div data-filter=".{{ $category->id.'who' }}s" class="work_portfolio_item">{{ $category->name }}</div>

                @endforeach
               
            </div>
            <div class="row portfolio_gallery mb-50" id="work-portfolio">
                @foreach ($items as $item)
                <div class="col-lg-4 col-sm-12 portfolio_item {{ $item->category_id.'who' }}s  mb_50">
                    <div class="portfolio_img">
                    <a href="{{$item->image_path}}" class="img_popup"><img class="img_rounded" src="{{$item->image_path}}" alt=""></a>
                        <div class="portfolio-description">
                            <a href="#" class="portfolio-title">
                                <h3>{{$item->name }}  </h3>
                                <h6> السعر : {{$item->price  }} $</h6>
                            </a>
                            <h6> الوقت المستغرق :{{$item->time }} أيام</h6>

                            <p>{{$item->desc }}</p>
                             


                        </div>
                    </div>
                </div>
                @endforeach
                
               
               
               
               
              
            </div>
        </div>
    </section>

    @endsection