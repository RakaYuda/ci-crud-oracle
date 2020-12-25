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

        <!-- DataTables -->
        <link href="<?php echo base_url('')?>plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('')?>plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url('')?>plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Basic Css files -->
        <link href="<?php echo base_url('')?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('')?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">

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
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Produk</h4>
                                            <p class="text-muted m-b-30 font-14">Daftar semua produk yang ada di tabel product.
                                            </p>

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Produk</th>
                                                    <th>Kategori Produk</th>
                                                    <th>Deskripsi Produk</th>
                                                    <th>Stok Produk</th>
                                                    <th>Berat Produk</th>
                                                    <th>Harga Produk</th>
                                                    <th>Diskon Produk</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php 
                                                $no = 1;
                                                foreach($product as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $row->name; ?></td>
                                                        <td><?php echo $row->category; ?></td>
                                                        <td><?php echo $row->description; ?></td>
                                                        <td><?php echo $row->stock; ?></td>
                                                        <td><?php echo $row->weight; ?></td>
                                                        <td><?php echo $row->price; ?></td>
                                                        <td><?php echo $row->discount . ' %'; ?></td>
                                                        <td>
                                                        <a href="<?php echo base_url('product/form/edit/'); echo $row->id ?>" class="btn btn-warning">Edit</a>
                                                        <a href="<?php echo base_url('product/delete/'); echo $row->id ?>" class="btn btn-danger">Hapus</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container-fluid -->

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

        <!-- Required datatable js -->
        <script src="<?php echo base_url('')?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('')?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url('')?>plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url('')?>plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url('')?>plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url('')?>plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url('')?>plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url('')?>plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url('')?>plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url('')?>plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url('')?>plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('')?>plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?php echo base_url('')?>assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url('')?>assets/js/app.js"></script>

    </body>
</html>