<div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
    <div class="sidebar-user-avatar">
        <a href="{{route('profile.index')}}">
            <img src="{{asset('images/profile/' . Auth::user()->image)}}" alt="avatar">
        </a>
    </div>
    <div class="sidebar-user-name">{{Auth::user()->name}}</div>
    <div class="sidebar-user-links">
        <a href="{{route('profile.index')}}" data-toggle="tooltip" data-placement="bottom" title="Profile"><i  class="gi gi-user"></i></a>
        {{-- <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i
                class="gi gi-envelope"></i></a>
        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
        <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings"
            onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
        <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a> --}}
    </div>
</div>
