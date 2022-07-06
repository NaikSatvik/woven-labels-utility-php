<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Production Calc | AREX WL Utility</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- slick css -->
    <link href="assets/libs/slick-slider/slick/slick.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/slick-slider/slick/slick-theme.css" rel="stylesheet" type="text/css" />

    <!-- jvectormap -->
    <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm-light.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-backburger"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="production-calc.php" class="waves-effect">
                                <i class="mdi mdi-view-dashboard"></i><span
                                    class="badge badge-pill badge-success float-right"></span>
                                <span>Production Calc</span>
                            </a>
                        </li>

                        <li>
                            <a href="pre-design-picks-calc.php" class=" waves-effect">
                                <i class="mdi mdi-calendar-month"></i>
                                <span>Pre-Design Picks Calc</span>
                            </a>
                        </li>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Production Calculator</h4>
                            </div>
                        </div>
                    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Input Elements</h4>
                                    <p class="card-title-desc">Description</p>

                                    <form action="production-calc.php" method="post">
                                        <div class="form-group mb-4">
                                            <label>Label Length</label>
                                            <input type="text" class="form-control" name="LabelLength">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label>Total Tapes</label>
                                            <input type="text" class="form-control" name="TotalTapes">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label>Total Quantity</label>
                                            <input type="text" class="form-control" name="TotalQuantity">
                                        </div>

                                        <div class="form-group mb-4">
                                            <button name="submit" type="submit" class="btn btn-primary waves-effect waves-light">Calculate</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                <?php
                                    if (isset($_POST['submit'])) {
                                        $labelLength = $_POST["LabelLength"];
                                        $totalTapes = $_POST["TotalTapes"];
                                        $totalQuantity = $_POST["TotalQuantity"];

                                        $tq_in_one_meter = $totalTapes * (1000 / $labelLength);
                                        $PreSelect = 1000 / $labelLength;
                                        $QuantitySingleTape = 1000 / $labelLength;
                                        $TotalQuantityMeter = $tq_in_one_meter;
                                        $TotalPreSelect = $totalQuantity / $totalTapes;
                                ?>
                                        <h4 class="header-title">Output</h4>
                                        <p class="card-title-desc">Result calculated on basis of the input you have given.</p>
                                        <div class="alert alert-info" role="alert">
                                            <table>
                                                <tr>
                                                    <td>Label Length:</td>
                                                    <td><strong><?php echo $labelLength ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Tapes:</td>
                                                    <td><strong><?php echo $totalTapes ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Quantity:</td>
                                                    <td><strong><?php echo $totalQuantity ?></strong></td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="alert alert-success" role="alert">
                                            <table>
                                                <tr>
                                                    <td>Pre-Select for 1 meter:</td>
                                                    <td><strong><?php echo $PreSelect ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Quantity in Single Tape:</td>
                                                    <td><strong><?php echo $QuantitySingleTape ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Quantity in 1 meter:</td>
                                                    <td><strong><?php echo $TotalQuantityMeter ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Pre - Select:</td>
                                                    <td><strong><?php echo $TotalPreSelect ?></strong></td>
                                                </tr>
                                            </table>
                                        </div>
                                <?php
                                        
                                    } else {
                                ?>
                                        <button type="button" class="btn btn-outline-danger waves-effect waves-light btn-lg btn-block"><?php echo "Enter inputs to calculate results !!"; ?></button>
                                <?php
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/libs/slick-slider/slick/slick.min.js"></script>

    <!-- Jq vector map -->
    <script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>