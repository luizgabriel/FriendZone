<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Auth::user()->photo_url }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li>
              <a href="{{ route('posts.index') }}">
                  <i class="fa fa-sticky-note"></i> <span>@lang('messages.sidebar.postshall')</span></i>
              </a>
          </li>
            <li>
                <a href="{{ route('friends.index') }}">
                    <i class="fa fa-group"></i> <span>@lang('messages.header.friends')</span></i>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
