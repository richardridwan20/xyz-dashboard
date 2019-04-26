<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <link rel="stylesheet" id="css-theme" href="assets/css/themes/pulse.min.css">
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-boxed">

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

                        <!-- Search -->
                        <div class="block pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary px-10">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Search -->

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
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
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
                                        <i class="si si-fire text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
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
                                    <a href=""><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Projects</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="si si-users"></i><span class="sidebar-mini-hide">Clients</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="si si-docs"></i><span class="sidebar-mini-hide">Invoices</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="si si-energy"></i><span class="sidebar-mini-hide">Assets</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="si si-shield"></i><span class="sidebar-mini-hide">Tickets</span></a>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span></li>
                                <li>
                                    <a href=""><i class="si si-user"></i><span class="sidebar-mini-hide">Profile</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="si si-lock"></i><span class="sidebar-mini-hide">Security</span></a>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">MR</span><span class="sidebar-mini-hidden">More</span></li>
                                <li>
                                    <a href=""><i class="si si-flag"></i><span class="sidebar-mini-hide">Notifications</span></a>
                                </li>
                                <li>
                                    <a href=""><i class="si si-support"></i><span class="sidebar-mini-hide">Help</span></a>
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

                        <!-- Full Search -->
                        <div class="content-header-item d-none d-sm-inline-block ml-5">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END Full Search -->

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

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <!-- Row #1 -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-fx-shadow text-left" href="javascript:void(0)">
                                <div class="block-content block-content-full text-right clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-heart fa-3x text-gray"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-light">18,490</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Likes</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-fx-shadow text-left" href="javascript:void(0)">
                                <div class="block-content block-content-full text-right clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-users fa-3x text-gray"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-light">4,210</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Followers</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-fx-shadow text-left" href="javascript:void(0)">
                                <div class="block-content block-content-full text-right clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-bag fa-3x text-gray"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-light">350</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-fx-shadow text-left" href="javascript:void(0)">
                                <div class="block-content block-content-full text-right clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-wallet fa-3x text-gray"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-light">$2,970</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    <div class="row">
                        <!-- Row #2 -->
                        <div class="col-md-6">
                            <div class="block block-fx-shadow">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        Sales <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- Lines Chart Container -->
                                    <canvas class="js-chartjs-pop-lines"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block block-fx-shadow">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        Earnings <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- Lines Chart Container -->
                                    <canvas class="js-chartjs-pop-lines2"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #2 -->
                    </div>
                    <div class="block block-fx-shadow">
                        <div class="block-content bg-body-light">
                            <!-- Search -->
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search orders..">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END Search -->
                        </div>
                        <div class="block-content">
                            <!-- Orders Table -->
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">ID</th>
                                        <th>Status</th>
                                        <th class="d-none d-sm-table-cell">Submitted</th>
                                        <th class="d-none d-sm-table-cell">Products</th>
                                        <th class="d-none d-sm-table-cell">Customer</th>
                                        <th class="text-right">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1851</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Processing</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/27
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">1</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Jack Estrada</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$103</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1850</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Processing</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/26
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Jack Estrada</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$244</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1849</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Processing</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/25
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">2</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Carol Ray</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$561</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1848</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Canceled</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/24
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">3</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Sara Fields</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$651</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1847</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/23
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Betty Kelley</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$969</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1846</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/22
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">4</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Carl Wells</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$621</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1845</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Canceled</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/21
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">2</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Jose Mills</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$857</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1844</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/20
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">8</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Jesse Fisher</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$433</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1843</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Canceled</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/19
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">8</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Andrea Gardner</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$968</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1842</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/18
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">1</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Jose Mills</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$336</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1841</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/17
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">8</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Barbara Scott</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$327</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1840</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/16
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">3</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Andrea Gardner</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$326</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1839</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Processing</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/15
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Amanda Powell</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$522</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1838</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Processing</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/14
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">7</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Amanda Powell</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$822</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="javascript:void(0)">ORD.1837</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Canceled</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/13
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">5</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="javascript:void(0)">Lisa Jenkins</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$971</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Orders Table -->

                            <!-- Navigation -->
                            <nav aria-label="Orders navigation">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:void(0)">...</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">8</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">9</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- END Navigation -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 2.2</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery-scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/db_pop.js"></script>
    </body>
</html>
