<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admiria - Responsive Flat Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo base_url('')?>assets/images/favicon.ico">

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
                                    <li><a href="/admin/dashboard/show_report_form">Input Produk</a></li>
                                    <li><a href="/admin/dashboard/show_report_data">Data Produk</a></li>
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
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title"><?php echo ucfirst($method)?> Produk</h4>
                                            <p class="text-muted m-b-30 font-14">Form <?php echo $method?> produk.</p>

                                            <form class="" action="<?php echo base_url('product/'); echo $method . '/'; echo $value->id ?? ''?>" method="post">
                                                <div class="form-group">
                                                    <label>Nama Produk</label>
                                                    <input type="text" name="name" value="<?php echo $value->name ?? '' ?>" class="form-control" required placeholder="Masukkan nama produk"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>Kategori Produk</label>
                                                    <div>
                                                        <input type="text" name="category" value="<?php echo $value->category ?? '' ?>" id="pass2" class="form-control" required
                                                               placeholder="Masukkan kategori produk"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Deskripsi Produk</label>
                                                    <div>
                                                        <textarea type="text" name="description" required class="form-control" rows="5" placeholder="Masukkan deskripsi produk">
                                                        <?php echo $value->description ?? '' ?>
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Stok Produk</label>
                                                    <div>
                                                        <input type="text" name="stock" value="<?php echo $value->stock ?? '' ?>" class="form-control" required placeholder="Masukkan stok produk"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Berat Produk</label>
                                                    <div>
                                                        <input type="text" name="weight" value="<?php echo $value->weight ?? '' ?>" class="form-control" required placeholder="Masukkan stok produk"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga Produk</label>
                                                    <div>
                                                        <input type="text" name="price" value="<?php echo $value->price ?? '' ?>" class="form-control" required placeholder="Masukkan harga produk"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Diskon Produk</label>
                                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                        <input id="demo1" type="text"  name="discount" value="<?php echo $value->discount ?? '' ?>" class="form-control" placeholder="Masukkan diskon produk"> 
                                                        <span class="input-group-addon bootstrap-touchspin-postfix input-group-append">
                                                            <span class="input-group-text">%</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group text-right">
                                                    <div>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-r-10">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light ">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div> <!-- end col -->

                            </div> <!-- end row -->

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

        <!-- Parsley js -->
        <script type="text/javascript" src="<?php echo base_url('')?>plugins/parsleyjs/parsley.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

        <!-- App js -->
        <script src="<?php echo base_url('')?>assets/js/app.js"></script>

    </body>
</html>