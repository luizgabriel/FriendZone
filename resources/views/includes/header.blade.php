<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <img src="{{ url('img/logo_mini.png') }}" height="30px" alt="">
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <img src="{{ url('img/logo.png') }}" height="30px" alt="">
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="col-md-4 col-sm-6 col-xs-6">
            <form action="#" method="get" class="header-form">
                <div class="input-group pull-left">
                    <input type="text" id="searchInput" class="form-control" placeholder="Buscar" autocomplete="off">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            @include('friendrequests.index')
            <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ Auth::user()->photo_url }}" class="user-image" alt="User Image">
                        <span class="hidden-xs"> {{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ Auth::user()->photo_url }}" class="img-circle" alt="User Image">

                            <p>
                                {{ Auth::user()->name }}
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#"><b>0</b><br/> @lang('messages.header.followers')</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#"><b>0</b><br/> Vendas</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#"><b>0</b><br/> @lang('messages.header.friends')</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="/profile" class="btn btn-default btn-flat">@lang('messages.header.profile')</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('auth/logout') }}"
                                   class="btn btn-default btn-flat">@lang('messages.header.logout')</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
