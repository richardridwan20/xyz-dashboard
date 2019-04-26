<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        @include('layouts.meta')
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

            @include('layouts.header')

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

            
            @include('layouts.footer')
            
        </div>
        <!-- END Page Container -->

        @include('layouts.script')
    </body>
</html>
