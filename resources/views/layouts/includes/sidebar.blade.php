<aside class="site-sidebar scrollbar-enabled clearfix">
    <!-- User Details -->
    <div class="side-user">
        <a class="col-sm-12 media clearfix" href="javascript:void(0);">
            <figure class="media-left media-middle user--online thumb-sm mr-r-10 mr-b-0">
                <img src="assets/demo/users/user-image.png" class="media-object rounded-circle" alt="">
            </figure>
            <div class="media-body hide-menu">
                <h4 class="media-heading mr-b-5 text-uppercase">Scott Adams</h4><span class="user-type fs-12">Edit Profile (...)</span>
            </div>
        </a>
        <div class="clearfix"></div>
        <ul class="nav in side-menu">
            <li><a href="page-profile.html"><i class="list-icon material-icons">face</i> My Profile</a>
            </li>
            <li><a href="app-inbox.html"><i class="list-icon material-icons">mail_outline</i> Inbox</a>
            </li>
            <li><a href="page-lock-screen.html"><i class="list-icon material-icons">settings</i> Lock Screen</a>
            </li>
            <li><a href="page-login.html"><i class="list-icon material-icons">settings_power</i> Logout</a>
            </li>
        </ul>
    </div>
    <!-- /.side-user -->
    <!-- Sidebar Menu -->
    <nav class="sidebar-nav">
        <ul class="nav in side-menu">
            <li class="current-page menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">network_check</i> <span class="hide-menu">Dashboard <span class="badge badge-border bg-primary pull-right">5</span></span></a>
            </li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="list-icon material-icons">settings_power</i> <span class="hide-menu">Log Out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        <!-- /.side-menu -->
    </nav>
    <!-- /.sidebar-nav -->
</aside>