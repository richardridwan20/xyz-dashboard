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
                    <a class="align-middle link-effect font-w600" href="">{{ Auth::user()->name }}</a>
                </div>
                <!-- END User Info -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">

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
                        <img style="margin: -5px;" class="content-header-logo" src="{{asset('assets\media\photos\sovera-s.png')}}" alt="">
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
                        <a class="link-effect font-w700" href="{{ route('dashboard.index') }}">
                            <img class="main-logo" src="{{asset('assets\media\photos\sovera-logo-white.png')}}" alt="">
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
                        <a class="{{ Route::is('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>

                    {{-- Manage Sub-menu --}}
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Manage</span></li>
                    @can('view upload form')
                    <li>
                        <a class="{{ Route::is('upload.index') ? 'active' : '' }}" href="{{ route('upload.index') }}"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Bulk Upload</span></a>
                    </li>
                    @endcan
                    @role('supadmin')
                    <li>
                        <a class="{{ Route::is('limitation.index') ? 'active' : '' }}" href="{{ route('limitation.index') }}"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Limitation</span></a>
                    </li>
                    <li>
                        <a class="{{ Route::is('claim.index') ? 'active' : '' }}" href="{{ route('claim.index') }}"><i class="si si-people"></i><span class="sidebar-mini-hide">Claim</span></a>
                    </li>
                    @endrole
                    @role('claim')
                    <li>
                        <a class="{{ Route::is('claim.index') ? 'active' : '' }}" href="{{ route('claim.index') }}"><i class="si si-people"></i><span class="sidebar-mini-hide">Claim</span></a>
                    </li>
                    @endrole
                    @role('supadmin|financial')
                    <li>
                        <a class="{{ Route::is('invoice.index') ? 'active' : '' }}" href="{{ route('invoice.index') }}"><i class="si si-docs"></i><span class="sidebar-mini-hide">Invoices</span></a>
                    </li>
                    @endrole
                    @role('supadmin')
                    <li>
                        <a class="{{ Route::is('dashboard.spaj_voucher') ? 'active' : '' }}" href="{{ route('dashboard.spaj_voucher') }}"><i class="fa fa-wpforms"></i><span class="sidebar-mini-hide">SPAJ with voucher</span></a>
                    </li>
                    <li>
                        <a class="{{ Route::is('dashboard.spaj') ? 'active' : '' }}" href="{{ route('dashboard.spaj') }}"><i class="fa fa-wpforms"></i><span class="sidebar-mini-hide">SPAJ</span></a>
                    </li>
                    @endrole
                    @role('supadmin|partner financial|partner operation')
                    <li>
                        <a class="{{ Route::is('payment.index') ? 'active' : '' }}" href="{{ route('payment.index') }}"><i class="fa fa-file-text-o"></i><span class="sidebar-mini-hide">Pending Transactions</span></a>
                    </li>
                    @endrole
                    @role('supadmin')
                    <li>
                        <a class="{{ Route::is('voucher.index') ? 'active' : '' }}" href="{{ route('voucher.index') }}"><i class="fa fa-wpforms"></i><span class="sidebar-mini-hide">Vouchers</span></a>
                    </li>
                    @endrole
                    @role('supadmin|financial|operation')
                    {{-- Partner Sub-Menu --}}
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">PA</span><span class="sidebar-mini-hidden">Partner</span></li>
                    <li>
                    <li>
                        <a class="{{ Route::is('productofpartner.index') ? 'active' : '' }}" href="{{ route('productofpartner.index') }}"><i class="fa fa-address-card-o"></i><span class="sidebar-mini-hide">Partner Product</span></a>
                    </li>
                    <li>
                        <a class="{{ Route::is('partner.index') ? 'active' : '' }}" href="{{ route('partner.index') }}"><i class="fa fa-address-card-o"></i><span class="sidebar-mini-hide">Manage Partner</span></a>
                    </li>
                    @endrole
                    @role('supadmin|financial|operation')
                    {{-- Product Sub-Menu --}}
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">PO</span><span class="sidebar-mini-hidden">Product</span></li>
                    <li>
                        <a class="{{ Route::is('product.index') ? 'active' : '' }}" href="{{ route('product.index') }}"><i class="fa fa-wpforms"></i><span class="sidebar-mini-hide">Manage Product & Plan</span></a>
                    </li>
                    @endrole
                    {{-- Agent Sub-menu --}}
                    @role('supadmin|financial|operation|partner financial|partner operation')
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">AG</span><span class="sidebar-mini-hidden">Agent</span></li>
                    <li>
                        <a class="{{ Route::is('dashboard.manage_agent') ? 'active' : '' }}" href="{{ route('dashboard.manage_agent') }}"><i class="fa fa-drivers-license-o"></i><span class="sidebar-mini-hide">Manage Agent</span></a>
                    </li>
                    @endrole
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
            <div class="d-inline-block" role="group">
                <button type="button" class="btn btn-dual-secondary" id="page-header-user-dropdown">
                    {{ Auth::user()->name }}
                </button>
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">
            <!-- Open Search Section -->
            <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
</header>
<!-- END Header -->
