<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Overlay Scroll Container -->
    <div id="side-overlay-scroll">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
            <div class="content-header-section align-parent">
                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Side Overlay -->

                <!-- User Info -->
                <div class="content-header-item">
                    <a class="img-link mr-5" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar14.jpg" alt="">
                    </a>
                    <a class="align-middle link-effect font-w600" href="javascript:void(0)">Admin</a>
                </div>
                <!-- END User Info -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Mini Stats -->
            <div class="block pull-t pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-danger-light">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">Sales</div>
                            <div class="font-size-h4 text-pulse-darker">350</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">Tickets</div>
                            <div class="font-size-h4 text-pulse-darker">25</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">Projects</div>
                            <div class="font-size-h4 text-pulse-darker">17</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Mini Stats -->

            <!-- Notifications -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">Notifications</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="list list-activity">
                        <li>
                            <i class="si si-wallet text-success"></i>
                            <div class="font-w600">+$29 New sale</div>
                            <div>
                                <a href="javascript:void(0)">Admin Template</a>
                            </div>
                            <div class="font-size-xs text-muted">5 min ago</div>
                        </li>
                        <li>
                            <i class="si si-close text-danger"></i>
                            <div class="font-w600">Project removed</div>
                            <div>
                                <a href="javascript:void(0)">Best Icon Set</a>
                            </div>
                            <div class="font-size-xs text-muted">26 min ago</div>
                        </li>
                        <li>
                            <i class="si si-pencil text-info"></i>
                            <div class="font-w600">You edited the file</div>
                            <div>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-file-text-o"></i> Docs.doc
                                </a>
                            </div>
                            <div class="font-size-xs text-muted">3 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-plus text-success"></i>
                            <div class="font-w600">New user</div>
                            <div>
                                <a href="javascript:void(0)">StudioWeb - View Profile</a>
                            </div>
                            <div class="font-size-xs text-muted">5 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-wrench text-warning"></i>
                            <div class="font-w600">Core v3.9 is available</div>
                            <div>
                                <a href="javascript:void(0)">Update now</a>
                            </div>
                            <div class="font-size-xs text-muted">8 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-user-follow text-pulse"></i>
                            <div class="font-w600">+1 Friend Request</div>
                            <div>
                                <a href="javascript:void(0)">Accept</a>
                            </div>
                            <div class="font-size-xs text-muted">1 day ago</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Notifications -->
        </div>
        <!-- END Side Content -->
    </div>
    <!-- END Side Overlay Scroll Container -->
</aside>
<!-- END Side Overlay -->

<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <img class="content-header-logo" src="assets\media\photos\super-you-s.png" alt="">
                    </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.html">
                            <img class="content-header-logo" src="assets\media\photos\super-you-logo-white.png" alt="">
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a class="active" href="db_pop.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Manage</span></li>
                    <li>
                        <a href=""><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Upload</span></a>
                    </li>
                    <li>
                        <a href=""><i class="si si-users"></i><span class="sidebar-mini-hide">Customers</span></a>
                    </li>
                    <li>
                        <a href=""><i class="si si-docs"></i><span class="sidebar-mini-hide">Invoices</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span></li>
                    <li>
                        <a href=""><i class="si si-user"></i><span class="sidebar-mini-hide">Profile</span></a>
                    </li>
                    <li>
                        <a href=""><i class="si si-lock"></i><span class="sidebar-mini-hide">Security</span></a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->

<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block" role="group">
                <button type="button" class="btn btn-dual-secondary dropdown-toggle" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                </button>
                <div class="dropdown-menu min-width-200" aria-labelledby="page-header-user-dropdown">
                    <a class="dropdown-item" href="javascript:void(0)">
                        <i class="si si-user mr-5"></i> Profile
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                        <span class="badge badge-primary">3</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                        <i class="si si-note mr-5"></i> Invoices
                    </a>
                    <div class="dropdown-divider"></div>

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                        <i class="si si-wrench mr-5"></i> Settings
                    </a>
                    <!-- END Side Overlay -->

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)">
                        <i class="si si-logout mr-5"></i> Sign Out
                    </a>
                </div>
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">
            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-dual-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                <span class="badge badge-pill badge-danger mr-5">6</span> <i class="fa fa-cog"></i>
            </button>
            <!-- END Toggle Side Overlay -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header">
        <div class="content-header content-header-fullrow">
            <form>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <!-- Close Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-times"></i>
                        </button>
                        <!-- END Close Search Section -->
                    </div>
                    <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary px-15">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
