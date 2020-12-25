<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Shop Admin</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo base_url('')?>assets/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="<?php echo base_url('')?>plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />

        <!-- Basic Css files -->
        <link href="<?php echo base_url('')?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('')?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('')?>assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="<?php echo base_url('dashboard')?>" class="logo text-center text-white">Admin</a>
                        <!-- <a href="index.html" class="logo"><img src="<?php echo base_url('')?>assets/images/logo-sm.png" height="36" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>

                            <li class="menu-title">Main</li>

                            <li class="">
                                <a href="<?php echo base_url('dashboard') ?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                                <!-- <ul class="list-unstyled">
                                    <li><a href="index.html">Dashboard One</a></li>
                                    <li><a href="dashboard-2.html">Dashboard Two</a></li>
                                </ul> -->
                            </li>

                            <li class="menu-title">Produk</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Produk </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url('')?>dashboard/show_report_form">Input Produk</a></li>
                                    <li><a href="<?php echo base_url('')?>dashboard/show_report_data">Data Produk</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->


            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">
                            <!-- Search input -->
                            <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="<?php echo base_url('')?>assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div> -->
                                        <a class="dropdown-item" href="<?php echo base_url('/auth/logout'); ?>"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Dashboard</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">


                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Recent Stock</h4>

                                            <div class="text-center">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                       data-fgColor="#ffbb44" value="0" data-max="1000" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>

                                                <div class="clearfix"></div>
                                                <a href="<?php echo base_url('/dasboard/show_report_data') ?>" class="btn btn-sm btn-warning m-t-20">View All Data</a>
                                                <ul class="list-inline row m-t-30 clearfix">
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">-</p>
                                                        <p class="mb-0">-</p>
                                                    </li>
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">-</p>
                                                        <p class="mb-0">-</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Purchase Order</h4>

                                            <div class="text-center">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                       data-fgColor="#4ac18e" value="0" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>

                                                <div class="clearfix"></div>
                                                <a href="#" class="btn btn-sm btn-success m-t-20">View All Data</a>
                                                <ul class="list-inline row m-t-30 clearfix">
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">-</p>
                                                        <p class="mb-0">-</p>
                                                    </li>
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">-</p>
                                                        <p class="mb-0">-</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Shipped Orders</h4>

                                            <div class="text-center">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                       data-fgColor="#8d6e63" value="-" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>

                                                <div class="clearfix"></div>
                                                <a href="#" class="btn btn-sm btn-brown m-t-20">View All Data</a>
                                                <ul class="list-inline row m-t-30 clearfix">
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">-</p>
                                                        <p class="mb-0">-</p>
                                                    </li>
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">-</p>
                                                        <p class="mb-0">-</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title m-b-30">Cancelled Orders</h4>

                                            <div class="text-center">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                       data-fgColor="#90a4ae" value="-" data-skin="tron" data-angleOffset="180"
                                                       data-readOnly=true data-thickness=".1"/>

                                                <div class="clearfix"></div>
                                                <a href="#" class="btn btn-sm btn-blue-grey m-t-20">View All Data</a>
                                                <ul class="list-inline row m-t-30 clearfix">
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">-</p>
                                                        <p class="mb-0">-</p>
                                                    </li>
                                                    <li class="col-6">
                                                        <p class="m-b-5 font-18 font-600">-</p>
                                                        <p class="mb-0">-</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                           

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 - 2019 Admiria <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?php echo base_url('')?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url('')?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('')?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url('')?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('')?>assets/js/waves.js"></script>
        <script src="<?php echo base_url('')?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url('')?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- Peity chart JS -->
        <script src="<?php echo base_url('')?>plugins/peity-chart/jquery.peity.min.js"></script>

        <!--C3 Chart-->
        <script src="<?php echo base_url('')?>plugins/d3/d3.min.js"></script>
        <script src="<?php echo base_url('')?>plugins/c3/c3.min.js"></script>

        <!-- KNOB JS -->
        <script src="<?php echo base_url('')?>plugins/jquery-knob/excanvas.js"></script>
        <script src="<?php echo base_url('')?>plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Page specific js -->
        <script src="<?php echo base_url('')?>assets/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url('')?>assets/js/app.js"></script>

    </body>
</html>