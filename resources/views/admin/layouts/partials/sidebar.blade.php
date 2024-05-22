<div class="sidenav-section" data-simplebar>
    <!-- SideNav Inner Start -->
    <div class="sidenav-inner">
        <nav class="sidenav-menu" id="sidenav-menu">
            <ul>
                <li class="has-sub-menu">
                    <a href="{{ route('admin.users.index') }}"><i data-feather="home" class="nav-icon"></i>Registrations</a>
                </li>
                <li class="has-sub-menu">
                    <a href="#"><i data-feather="home" class="nav-icon"></i>Appeals<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('admin.operationals.index') }}">Operationals</a></li>
                        <li><a href="{{ route('admin.dsngs.index') }}">DSNG</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- SideNav Inner End -->
</div>
