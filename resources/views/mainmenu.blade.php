
<!DOCTYPE html>
<html lang="en">

    

<head>
        <meta charset="utf-8" />
        <title>Sistem Infromasi Klinik Belova</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('img/logo-favicon-belova.png')}}"> 

        <!-- App css -->
        <link href="{{ asset('dastone/default/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dastone/default/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dastone/default/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dastone/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dastone/default/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="/" class="logo">
                    <span>
                        <img src="{{ asset('img/logo-belovacorp.png')}}" alt="logo-small" class="logo-sm " style="width: auto; height: 50px;">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
                        </ul>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-email-inbox.html">Inbox</a></li>
                                    <li><a href="apps-email-read.html">Read Email</a></li>
                                </ul>
                            </li>  
                            <li class="nav-item"><a class="nav-link" href="apps-chat.html"><i class="ti-control-record"></i>Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-contact-list.html"><i class="ti-control-record"></i>Contact List</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-calendar.html"><i class="ti-control-record"></i>Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-files.html"><i class="ti-control-record"></i>File Manager</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-invoice.html"><i class="ti-control-record"></i>Invoice</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-tasks.html"><i class="ti-control-record"></i>Tasks</a></li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Projects <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-project-overview.html">Overview</a></li>                                    
                                    <li><a href="apps-project-projects.html">Projects</a></li>
                                    <li><a href="apps-project-board.html">Board</a></li>
                                    <li><a href="apps-project-teams.html">Teams</a></li>
                                    <li><a href="apps-project-files.html">Files</a></li>
                                    <li><a href="apps-new-project.html">New Project</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Ecommerce <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-ecommerce-products.html">Products</a></li>                                    
                                    <li><a href="apps-ecommerce-product-list.html">Product List</a></li>
                                    <li><a href="apps-ecommerce-product-detail.html">Product Detail</a></li>
                                    <li><a href="apps-ecommerce-cart.html">Cart</a></li>
                                    <li><a href="apps-ecommerce-checkout.html">Checkout</a></li>                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="auth-login.html"><i class="ti-control-record"></i>Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-register.html"><i class="ti-control-record"></i>Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-recover-pw.html"><i class="ti-control-record"></i>Recover Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-lock-screen.html"><i class="ti-control-record"></i>Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-404.html"><i class="ti-control-record"></i>Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-500.html"><i class="ti-control-record"></i>Error 500</a></li>
                        </ul>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"><i data-feather="user" class="align-self-center menu-icon"></i><span>Admin Panel</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/users"><i class="ti-control-record"></i>User Management</a></li>
                            <li class="nav-item"><a class="nav-link" href="/admin/roles"><i class="ti-control-record"></i>Role Management</a></li>
                        </ul>
                    </li> 
    
                    <hr class="hr-dashed hr-menu">         
                </ul>
    
            </div>
        </div>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-right mb-0">  
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="mr-1 hidden-sm">{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</span>  
                            </a>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li>                         
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h3>Selamat Datang di Sistem Informasi Belova!</h3>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Belova</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div><!--end col-->
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row justify-content-left">
                                <div class="col-md-6 col-lg-3">
                                    <a href="/erm/login" style="text-decoration: none; color: inherit;">
                                    <div class="card report-card">
                                        <div class="card-header bg-primary">
                                            <h3 class="card-title text-white"><center>ERM</center></h3>
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-auto align-self-center">                                
                                                    <!-- Icon Container -->
                                                    <div class="report-main-icon bg-light-alt d-flex align-items-center justify-content-center p-3" style="width: 80px; height: 80px;">
                                                        <i class="fas fa-heartbeat fa-3x"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    </a>
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <a href="/hrd/login" style="text-decoration: none; color: inherit;">
                                    <div class="card report-card">
                                        <div class="card-header bg-warning">
                                            <h3 class="card-title text-white"><center>HRD</center></h3>
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-auto align-self-center">                                
                                                    <!-- Icon Container -->
                                                    <div class="report-main-icon bg-light-alt d-flex align-items-center justify-content-center p-3" style="width: 80px; height: 80px;">
                                                        <i class="fas fa-user-friends fa-3x"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    </a>
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <a href="/inventory/login" style="text-decoration: none; color: inherit;">
                                    <div class="card report-card">
                                        <div class="card-header bg-success">
                                            <h3 class="card-title text-white"><center>Inventory</center></h3>
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-auto align-self-center">                                
                                                    <!-- Icon Container -->
                                                    <div class="report-main-icon bg-light-alt d-flex align-items-center justify-content-center p-3" style="width: 80px; height: 80px;">
                                                        <i class="fas fa-box fa-3x"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    </a>
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3">
                                    <a href="/marketing/login" style="text-decoration: none; color: inherit;">
                                    <div class="card report-card">
                                        <div class="card-header bg-danger">
                                            <h3 class="card-title text-white"><center>Marketing</center></h3>
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-auto align-self-center">                                
                                                    <!-- Icon Container -->
                                                    <div class="report-main-icon bg-light-alt d-flex align-items-center justify-content-center p-3" style="width: 80px; height: 80px;">
                                                        <i class="fas fa-chart-line fa-3x"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    </a>
                                </div> <!--end col-->
                                                              
                            </div><!--end row-->

                        </div><!--end col-->
                        
                    </div><!--end row-->
                    

                </div><!-- container -->

                <footer class="footer text-center text-sm-right">
                    &copy; 2025 - Belova Corp </span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="{{ asset('dastone/default/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('dastone/default/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('dastone/default/assets/js/metismenu.min.js')}}"></script>
        <script src="{{ asset('dastone/default/assets/js/waves.js')}}"></script>
        <script src="{{ asset('dastone/default/assets/js/feather.min.js')}}"></script>
        <script src="{{ asset('dastone/default/assets/js/simplebar.min.js')}}"></script>
        <script src="{{ asset('dastone/default/assets/js/moment.js')}}"></script>
        <script src="{{ asset('dastone/plugins/daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{ asset('dastone/plugins/apex-charts/apexcharts.min.js')}}"></script>
        <script src="{{ asset('dastone/default/assets/pages/jquery.analytics_dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('dastone/default/assets/js/app.js')}}"></script>
        
    </body>



</html>