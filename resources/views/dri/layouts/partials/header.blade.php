<div class="header-section">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <!-- Header Logo (Header Left) Start -->
            <div class="header-logo col-auto d-none d-sm-flex">
                <a href="index.html">
                            <span class="logo-icon">
						<img src="{{ asset('assets/images/logo/gradient_black.png') }}" alt="Logo Icon" />
						<img src="{{ asset('assets/images/logo/gradient_black.png') }}" class="light" alt="Logo Icon" />
					</span>
                    <span class="logo-default">
						<img src="{{ asset('assets/images/logo/gradient_black.png') }}" alt="Logo Default" />
						<img src="{{ asset('assets/images/logo/gradient_black.png') }}" class="light" alt="Logo Default" />
					</span>
                </a>
            </div>
            <!-- Header Logo (Header Left) End -->

            <!-- Header Right Start -->
            <div class="header-right flex-grow-1 col-auto">
                <div class="row justify-content-between align-items-center">
                    <!-- SideNav Toggle & Search Start -->
                    <div class="d-flex col-auto">
                        <!-- SideNav Toggle Start -->
                        <!-- Search End -->
                    </div>
                    <!-- SideNav Toggle & Search End -->

                    <!-- Header Actions (Header Right) Start -->
                    <div class="col-auto">
                        <ul class="header-right-action nav">
                            <!-- Notification Start -->
                            <li class="nav-item dropdown notification">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                                    <span class="icon"><i data-feather="bell"></i></span>
                                    <span class="badge badge-dot badge-success">badge</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0);" class="dropdown-item py-2">
                                        <div class="media">
                                            <div class="media-thumb small primary"><i data-feather="user"></i></div>
                                            <div class="media-body">
                                                <h5 class="media-title">New User Register</h5>
                                                <p class="media-text">5 min ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item py-2">
                                        <div class="media">
                                            <div class="media-thumb small"><img src="{{ asset('assets/images/message/thumb-2.jpg') }}" alt="" /></div>
                                            <div class="media-body">
                                                <h5 class="media-title"><span>James</span> send you a message</h5>
                                                <p class="media-text">15 min ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item py-2">
                                        <div class="media">
                                            <div class="media-thumb small danger"><i data-feather="frown"></i></div>
                                            <div class="media-body">
                                                <h5 class="media-title">Product shipping cancel</h5>
                                                <p class="media-text">2 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item py-2">
                                        <div class="media">
                                            <div class="media-thumb small success"><i data-feather="gift"></i></div>
                                            <div class="media-body">
                                                <h5 class="media-title">New Order received</h5>
                                                <p class="media-text">2 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item py-2">
                                        <div class="media">
                                            <div class="media-thumb small warning"><i data-feather="alert-triangle"></i></div>
                                            <div class="media-body">
                                                <h5 class="media-title">Server Limit Reached!</h5>
                                                <p class="media-text">2 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <!-- Notification End -->

                            <!-- User Start -->
                            <li class="nav-item dropdown user">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                                    <span class="name">{{ \Illuminate\Support\Facades\Auth::user()->full_name }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i data-feather="user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i data-feather="mail"></i> Inbox</a>
                                    <a class="dropdown-item" href="#"><i data-feather="lock"></i> Lock Screen</a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item" href="#"><i data-feather="log-out"></i>Sign Out</button>
                                    </form>
                                </div>
                            </li>
                            <!-- User End -->
                        </ul>
                    </div>
                    <!-- Header Actions (Header Right) End -->
                </div>
            </div>
            <!-- Header Right End -->
        </div>
    </div>
</div>
