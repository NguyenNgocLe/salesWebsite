<header id="topnav">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm ở đây...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge badge-danger rounded-circle noti-icon-badge">10</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-right">
                                    <a href="" class="text-muted">
                                        <small>Xóa tất cả thông báo</small>
                                    </a>
                                </span>Thông báo
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Tippier</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Xin chào!. Em ăn cơm chưa?</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Ba mẹ em ăn cơm chưa?
                                    <small class="text-muted">1 phút trước</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="{{ asset('assets/images/users/user-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Ông nội em ăn cơm chưa?</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Cả nhà em ăn cơm chưa?</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                                @if (Auth::check())
                                {{ Auth::user()->ho_ten }}
                                @endif
                                <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                Chào bạn!
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="{{ route('quan-tri-vien.trang-ca-nhan') }}" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Tài khoản cá nhân</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Cài đặt</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Khóa màn hình</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{ route('quan-tri-vien.dang-xuat') }}" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span> Đăng xuất</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ route('linh-vuc.danh-sach') }}" class="logo text-center">
                    <span class="logo-lg">
                        
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="26">
                        <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="28">
                    </span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                   @if (Auth::check())
                        <li class="has-submenu">
                            <a href="{{ route('linh-vuc.danh-sach') }}">Lĩnh vực</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('cau-hoi.danh-sach') }}">Câu hỏi</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('goi-credit.danh-sach') }}">Gói credit</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('nguoi-choi.danh-sach') }}">Người chơi</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('luot-choi.danh-sach') }}">Lượt chơi</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('chi-tiet-luot-choi.danh-sach') }}">Chi tiết lượt chơi</a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('lich-su-mua-credit.danh-sach') }}">Lịch sử mua credit</a>
                        </li>
                        <li class="has-submenu">
                            <a href="">Cấu hình<div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('cau-hinh-diem-cau-hoi.danh-sach') }}">Cấu hình điểm câu hỏi</a>
                                </li>
                                <li>
                                    <a href="{{ route('cau-hinh-app.danh-sach') }}">Cấu hình app</a>
                                </li>
                                <li>
                                    <a href="{{ route('cau-hinh-tro-giup.danh-sach') }}">Cấu hình trợ giúp</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('quan-tri-vien.danh-sach') }}">Quản trị viên</a>
                        </li>
                        <li class="has-submenu">
                            <a href="www.google.com">Thống kê</a>
                        </li>
                   @endif

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>