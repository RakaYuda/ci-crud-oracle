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

        <!-- Basic Css files -->
        <link href="<?php echo base_url('')?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('')?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('')?>assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>


        <!-- Begin page -->
        <div class="accountbg">
            <div class="row align-items-center justify-content-center h-100">
                <div class="card w-25">
                    <div class="card-body">

                        <!-- <h3 class="text-center m-0">
                            <a href="index.html" class="logo logo-admin"><img src="<?php echo base_url('')?>assets/images/logo.png" height="30" alt="logo"></a>
                        </h3> -->

                        <div class="p-3">
                            <h4 class="font-18 m-b-5 text-center">Welcome Back !</h4>
                            <p class="text-muted text-center">Sign in to continue to admin page.</p>

                            <form class="form-horizontal m-t-30" action="<?php echo base_url('auth/do_login'); ?>" method="post">

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                </div>

                                <div class="form-group row m-t-20">
                                    <!-- <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                    </div> -->

                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="text-center">
                            <p class="text-secondary">Don't have an account ? <a href="<?php echo base_url('auth/register') ?>" class="font-500 font-14 text-secondary font-secondary"> Signup Now </a> </p>
                            <!-- <p class="text-white">© 2017 - 2019 Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p> -->
                        </div>
                    </div>
                </div>

               

            </div>
        </div>


        <!-- jQuery  -->
        <script src="<?php echo base_url('')?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url('')?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('')?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url('')?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('')?>assets/js/waves.js"></script>
        <script src="<?php echo base_url('')?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url('')?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url('')?>assets/js/app.js"></script>

    </body>
</html>