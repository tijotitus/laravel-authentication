 <!-- sidebar menu area start -->
 @php
     $usr = Auth::guard('admin')->user();
 @endphp
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <h2 class="text-white">Dashboard</h2> 
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    @if ($usr->can('dashboard.view'))
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Roles & Permissions
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.roles.create') || Route::is('admin.roles.index') || Route::is('admin.roles.edit') || Route::is('admin.roles.show') ? 'in' : '' }}">
                            @if ($usr->can('role.view'))
                                <li class="{{ Route::is('admin.roles.index')  || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">All Roles</a></li>
                            @endif
                            @if ($usr->can('role.create'))
                                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    
                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Admins
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('admin.admins.index') || Route::is('admin.admins.edit') || Route::is('admin.admins.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('admin.view'))
                                <li class="{{ Route::is('admin.admins.index')  || Route::is('admin.admins.edit') ? 'active' : '' }}"><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                            @endif

                            @if ($usr->can('admin.create'))
                                <li class="{{ Route::is('admin.admins.create')  ? 'active' : '' }}"><a href="{{ route('admin.admins.create') }}">Create Admin</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('blog.create') || $usr->can('blog.view') ||  $usr->can('blog.edit') ||  $usr->can('blog.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Blogs
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.blogs.create') || Route::is('admin.blogs.index') || Route::is('admin.blogs.edit') || Route::is('admin.blogs.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('blog.view'))
                                <li class="{{ Route::is('admin.blogs.index')  || Route::is('admin.blogs.edit') ? 'active' : '' }}"><a href="{{ route('admin.blogs.index') }}">All Posts</a></li>
                            @endif

                            @if ($usr->can('blog.create'))
                                <li class="{{ Route::is('admin.blogs.create')  ? 'active' : '' }}"><a href="{{ route('admin.blogs.create') }}">Create Post</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    @if ( $usr->can('report.view') )
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Post Reportd
                        </span></a>
                        <ul class="collapse {{  Route::is('admin.report-violations.index') ? 'in' : '' }}">
                            
                            @if ($usr->can('blog.view'))
                                <li class="{{ Route::is('admin.report-violations.index')  ? 'active' : '' }}"><a href="{{ route('admin.report-violations.index') }}">All Reports</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('dashboard.view'))
                    <li class="active">
                        <form id="logout-form" action="{{ route('admin.logout.submit') }}" method="POST">
                            @csrf
                            <ul class="active">
                                <li class="">
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </form>
                    </li>
                    @endif
                    
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->