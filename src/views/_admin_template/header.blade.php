<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{url(cbAdminPath())}}"
       title='{{cbGetsetting('appname')}}'
       class="logo">{{cbGetsetting('appname')}}</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{!! cbTrans('toggle_navigation') !!}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @include('CbNotifications::notificationsMenu')
                @include('crudbooster::_admin_template._header.userAccountMenu')
            </ul>
        </div>
    </nav>
</header>
