<ul class="sidebar-nav">

    @if (Auth::check() && Auth::user()->role->id == 1)
     <li>
        <a href="{{ route('admin.dashboard') }}" class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
            <i class="gi gi-stopwatch sidebar-nav-icon"></i>
            <span class="sidebar-nav-mini-hide">
                Dashboard
            </span>
        </a>
    </li>
     {{-- <li>
            <a href="{{ route('admin.arts.index') }}" class="{{ Request::is('admin/arts*') ? 'active' : '' }}"><i
                    class="fa fa-file-image-o sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Arts</span></a>
        </li>
        <li>
            <a href="{{ route('admin.sliders.index') }}" class="{{ Request::is('admin/sliders*') ? 'active' : '' }}"><i
                    class="fa fa-sliders sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Slider</span></a>
        </li>
        <li>
            <a href="{{ route('admin.news.index') }}" class="{{ Request::is('admin/news*') ? 'active' : '' }}"><i
                    class="fa fa-newspaper-o sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">News</span></a>
        </li>
         <li>
            <a href="{{ route('admin.comments.index') }}" class="{{ Request::is('admin/comments*') ? 'active' : '' }}"><i
                    class="fa fa-comment sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Comments</span></a>
        </li>
        <li>
            <a href="{{ route('admin.newcomments.index') }}" class="{{ Request::is('admin/newcomments*') ? 'active' : '' }}"><i
                    class="fa fa-comment sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Customer Comment</span></a>
        </li> --}}
        {{-- <li>
            <a href="{{ route('admin.orders.index') }}" class="{{ Request::is('admin/orders*') ? 'active' : '' }}"><i
                    class="fa fa-shopping-basket sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Customer Order</span></a>
        </li> --}}
         <li>
            <a href="{{ route('admin.contacts.index') }}" class="{{ Request::is('admin/contacts*') ? 'active' : '' }}"><i
                    class="fa fa-id-card sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Contact</span></a>
        </li>
        {{-- <li>
            <a href="{{ route('admin.razorpay_history') }}" class="{{ Request::is('admin/razorpay_history*') ? 'active' : '' }}"><i
                    class="fa fa-money sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Rozerpay history</span></a>
        </li> --}}
        <li>
            <a href="{{ route('admin.users.index') }}" class="{{ Request::is('admin/users*') ? 'active' : '' }}"><i
                    class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Users</span></a>
        </li>


    {{-- <li class="{{ Request::is('admin/footer*','admin/contactpage*','admin/sitesetting*','admin/portfolio*','admin/rozerpay*') ? 'active' : '' }}">
        <a href="#" class="sidebar-nav-menu "><i
                class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                class="fa fa-cogs sidebar-nav-icon"></i><span
                class="sidebar-nav-mini-hide"> Settings</span></a>
        <ul class="">
             <li class="">
                <a href="{{route('admin.sitesetting.setting')}}" class="{{ Request::is('admin/sitesetting*') ? 'active' : '' }}">Home page </a>
            </li>
             <li class="">
                <a href="{{route('admin.portfolio_setting.setting')}}" class="{{ Request::is('admin/portfolio*') ? 'active' : '' }}">Portfolio page </a>
            </li>
             <li class="">
                <a href="{{route('admin.contactpage.setting')}}" class="{{ Request::is('admin/contactpage*') ? 'active' : '' }}">Contact page </a>
            </li>

            <li class="">
                <a href="{{route('admin.footer.footer_show')}}" class="{{ Request::is('admin/footer*') ? 'active' : '' }}">Footer setting</a>
            </li>
            <li class="">
                <a href="{{route('admin.rozerpay.setting')}}" class="{{ Request::is('admin/rozerpay*') ? 'active' : '' }}">Rozerpay setting</a>
            </li>

        </ul>
    </li> --}}

    @else
     <li>
        <a href="{{ route('customer.dashboard') }}" class="{{ Request::is('customer/dashboard*') ? 'active' : '' }}">
            <i class="gi gi-stopwatch sidebar-nav-icon"></i>
            <span class="sidebar-nav-mini-hide">
                Dashboard
            </span>
        </a>
    </li>
    {{-- @php
          $orders=  App\Models\Order::where('user_id', Auth::user()->id)->get()->count();

    @endphp
    @if ($orders)
     <li>
            <a href="{{ route('customer.myorder.index') }}" class="{{ Request::is('customer/myorder*') ? 'active' : '' }}  {{ Request::is('customer/orders/*') ? 'active' : '' }}"><i
                    class="fa fa-list-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Orders</span></a>
        </li>

    @endif --}}



    @endif






</ul>
