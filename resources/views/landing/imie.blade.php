
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
                    <button class="navbar-toggler oppi_hamburger" type="button" data-toggle="collapse"
                        data-target="#oppi_header_menu" aria-expanded="false">
                        <span class="bar_icon">
                            <span class="bar bar_1"></span>
                            <span class="bar bar_2"></span>
                            <span class="bar bar_3"></span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse oppi_header_menu" id="oppi_header_menu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active ">
                                <a class="nav-link " href="{{ route('welcome') }}"> Home </a>

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
                    <h1 class="banner_title text-center wow fadeInUp" data-wow-delay="0.2s"> IMEI Service
                    </h1>
                    <ul class="oppi_breadcrumb_link text-center wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="#"> IMEI Service
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- oppi_banner -->
<div class="container">
    <div class="table-responsive services">
        <div class="group active  g_IC">
            <span class="d-none">0</span>
            @foreach($categories as $category)
            <table class="table  table-striped  table-hover">
                <thead>
                <tr>
                <th colspan="2"> <h4 class="m-0"> {{ $category->name }} </h4> </th>
                <th class="text-center   d-none d-md-table-cell" style="width: 130px"> <span class="">Delivery Time</span> </th>
                <th style="width:130px" class="text-right">Price</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($category->items as $item)
                <tr class="   service active">
                <td class="cursor-pointer" data-whatever=" {{$item->name}}" data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=dacd97650582d1486c081adc286d8ea7&amp;parentid=1006&amp;standalone=true">
                <i class="fal fa-cogs"></i>
                </td>
                <td class="cursor-pointer" style="white-space: normal" data-whatever=" {{$item->name}} " data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=dacd97650582d1486c081adc286d8ea7&amp;parentid=1006&amp;standalone=true">
                <a class="searchme">{{$item->name}} </a>
                <span data-toggle="tooltip" data-placement="top" title="" data-original-title=""> </span>
                </td>
                <td class="text-center border-left"> <span class=""><span> {{$item->time}}  days</span> </span> </td>
                <td class="text-right border-left">
                <span style="font-weight: 600">{{$item->price}} $ </span>
                </td>
                </tr>
               
                
                
                @endforeach
                
                </tbody>
                </table>
                
@endforeach

        </div>
    </div>
</div>

@endsection