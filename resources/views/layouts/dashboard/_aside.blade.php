<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>
                اخر تسجيل دخول
                    {{ \Carbon\Carbon::parse(auth()->user()->last_login)->diffForHumans() }}
                </a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>

       
                <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-th"></i><span>@lang('site.categories')</span></a></li>
            

        
                <li><a href="{{ route('dashboard.items.index') }}"><i class="fa fa-th"></i><span>@lang('site.products')</span></a></li>
                <li><a href="{{ route('dashboard.offers.index') }}"><i class="fa fa-th"></i><span>@lang('site.offers')</span></a></li>


                {{-- <li><a href=" {{ route('dashboard.clients.index') }}"><i class="fa fa-th"></i><span>@lang('site.clients')</span></a></li> --}}
           
             
          

        </ul>

    </section>

</aside>

