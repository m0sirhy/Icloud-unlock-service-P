
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
                            <li><a href="#">   IMEI Service
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
            <table class="table  table-striped  table-hover">
                <thead>
                <tr>
                <th colspan="2"> <h4 class="m-0"> Sweden Networks </h4> </th>
                <th class="text-center   d-none d-md-table-cell" style="width: 130px"> <span class="">Delivery Time</span> </th>
                <th style="width:130px" class="text-right">Price</th>
                </tr>
                </thead>
                <tbody>
                <tr class="   service active">
                <td class="cursor-pointer" data-whatever=" Sweden Telenor 3G/3GS/4/4S/5/5S/5C/6/6+/6S/6s+/SE/7/7+ (Clean IMEI) " data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=dacd97650582d1486c081adc286d8ea7&amp;parentid=1006&amp;standalone=true">
                <i class="fal fa-cogs"></i>
                </td>
                <td class="cursor-pointer" style="white-space: normal" data-whatever=" Sweden Telenor 3G/3GS/4/4S/5/5S/5C/6/6+/6S/6s+/SE/7/7+ (Clean IMEI) " data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=dacd97650582d1486c081adc286d8ea7&amp;parentid=1006&amp;standalone=true">
                <a class="searchme"> Sweden Telenor 3G/3GS/4/4S/5/5S/5C/6/6+/6S/6s+/SE/7/7+ (Clean IMEI) </a>
                <span data-toggle="tooltip" data-placement="top" title="" data-original-title=""> </span>
                </td>
                <td class="text-center border-left"> <span class=""><span>1-5 days</span> </span> </td>
                <td class="text-right border-left">
                <span style="font-weight: 600"> 54.92USD </span>
                </td>
                </tr>
                <tr class="   service active">
                <td class="cursor-pointer" data-whatever="Halebop Sweden - Apple iPhone Premium Service " data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=60ba700c9dd92b672db59eb30bf91896&amp;parentid=1006&amp;standalone=true">
                <i class="fal fa-cogs"></i>
                </td>
                <td class="cursor-pointer" style="white-space: normal" data-whatever="Halebop Sweden - Apple iPhone Premium Service " data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=60ba700c9dd92b672db59eb30bf91896&amp;parentid=1006&amp;standalone=true">
                <a class="searchme">Halebop Sweden - Apple iPhone Premium Service </a>
                <span data-toggle="tooltip" data-placement="top" title="" data-original-title=""> </span>
                </td>
                <td class="text-center border-left"> <span class=""><span>1-4 days</span> </span> </td>
                <td class="text-right border-left">
                <span style="font-weight: 600"> 48.33USD </span>
                </td>
                 </tr>
                <tr class="   service active">
                <td class="cursor-pointer" data-whatever="Sweden 3 Hutchison 3G/3GS/4/4S/5/5S/6/6+/6s/6s+/SE/7/7+8/8+/X (Out Of Contract)" data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=7acd475a79343e57e8e633873db3c04f&amp;parentid=1006&amp;standalone=true">
                <i class="fal fa-cogs"></i>
                </td>
                <td class="cursor-pointer" style="white-space: normal" data-whatever="Sweden 3 Hutchison 3G/3GS/4/4S/5/5S/6/6+/6s/6s+/SE/7/7+8/8+/X (Out Of Contract)" data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=7acd475a79343e57e8e633873db3c04f&amp;parentid=1006&amp;standalone=true">
                <a class="searchme">Sweden 3 Hutchison 3G/3GS/4/4S/5/5S/6/6+/6s/6s+/SE/7/7+8/8+/X (Out Of Contract)</a>
                <span data-toggle="tooltip" data-placement="top" title="" data-original-title=""> </span>
                </td>
                <td class="text-center border-left"> <span class=""><span>1-7 days</span> </span> </td>
                <td class="text-right border-left">
                <span style="font-weight: 600"> 1.89USD </span>
                </td>
                </tr>
                <tr class="   service active">
                <td class="cursor-pointer" data-whatever="Sweden 3 Hutchison All Generic Phones Only Clean imei" data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=497973d699897abf7310eb4bb9b92383&amp;parentid=1006&amp;standalone=true">
                <i class="fal fa-cogs"></i>
                </td>
                <td class="cursor-pointer" style="white-space: normal" data-whatever="Sweden 3 Hutchison All Generic Phones Only Clean imei" data-toggle="modal" data-target="#modal-ajax" href="productsandservices.php?action=getdetail&amp;service=497973d699897abf7310eb4bb9b92383&amp;parentid=1006&amp;standalone=true">
                <a class="searchme">Sweden 3 Hutchison All Generic Phones Only Clean imei</a>
                <span data-toggle="tooltip" data-placement="top" title="" data-original-title=""> </span>
                </td>
                <td class="text-center border-left"> <span class=""><span>1-3 days</span> </span> </td>
                <td class="text-right border-left">
                <span style="font-weight: 600"> 11.34USD </span>
                </td>
                </tr>
                
                
                </tbody>
                </table>
        </div>
    </section>

    @endsection