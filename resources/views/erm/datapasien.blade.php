@extends('layouts.app')
@section('title', 'ERM Premiere Belova')

@section('content')
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="/" class="logo">
                    <span>
                        <img src="{{ asset('img/logo-premiere.png')}}" alt="logo-small" class="logo-sm " style="width: auto; height: 50px;">
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
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Manajemen Pasien</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
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
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Daftar Kunjungan</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="auth-login.html"><i class="ti-control-record"></i>Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-register.html"><i class="ti-control-record"></i>Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-recover-pw.html"><i class="ti-control-record"></i>Recover Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-lock-screen.html"><i class="ti-control-record"></i>Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-404.html"><i class="ti-control-record"></i>Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-500.html"><i class="ti-control-record"></i>Error 500</a></li>
                        </ul>
                    </li> 
    
                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Lain-Lain</li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="box" class="align-self-center menu-icon"></i><span>Pengaturan Akun</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>UI Elements <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>                                    
                                    <li><a href="ui-avatar.html">Avatar</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-badges.html">Badges</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousels.html">Carousels</a></li>
                                    <li><a href="ui-check-radio.html"><span>Check & Radio</span></a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>                                   
                                    <li><a href="ui-grids.html">Grids</a></li> 
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-list.html">List</a></li>                                   
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-navbar.html">Navbar</a></li> 
                                    <li><a href="ui-paginations.html">Paginations</a></li>   
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>                                
                                    <li><a href="ui-progress.html">Progress</a></li>
                                    <li><a href="ui-spinners.html">Spinners</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-toasts.html">Toasts</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-videos.html">Videos</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="advanced-animation.html">Animation</a></li>
                                    <li><a href="advanced-clipboard.html">Clip Board</a></li>
                                    <li><a href="advanced-highlight.html">Highlight</a></li>
                                    <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                                    <li><a href="advanced-kanban.html">Kanban</a></li>
                                    <li><a href="advanced-lightbox.html">Lightbox</a></li> 
                                    <li><a href="advanced-nestable.html">Nestable List</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-ratings.html">Ratings</a></li>
                                    <li><a href="advanced-ribbons.html">Ribbons</a></li>
                                    <li><a href="advanced-session.html">Session Timeout</a></li>
                                    <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>                                    
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="forms-advanced.html">Advance Elements</a></li>
                                    <li><a href="forms-elements.html">Basic Elements</a></li>
                                    <li><a href="forms-editors.html">Editors</a></li>
                                    <li><a href="forms-uploads.html">File Upload</a></li>
                                    <li><a href="forms-repeater.html">Repeater</a></li>
                                    <li><a href="forms-validation.html">Validation</a></li>
                                    <li><a href="forms-wizard.html">Wizard</a></li>
                                    <li><a href="forms-x-editable.html">X Editable</a></li>
                                    
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="charts-apex.html">Apex</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-flot.html">Flot</a></li>
                                    <li><a href="charts-morris.html">Morris</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic</a></li>
                                    <li><a href="tables-datatable.html">Datatables</a></li>
                                    <li><a href="tables-editable.html">Editable</a></li>
                                    <li><a href="tables-responsive.html">Responsive</a></li>
                                    
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-feather.html">Feather</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-themify.html">Themify</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>  
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-templates-alert.html">Alert Email</a></li>
                                    <li><a href="email-templates-basic.html">Basic Action Email</a></li>                                    
                                    <li><a href="email-templates-billing.html">Billing Email</a></li>
                                </ul>
                            </li>   
                        </ul>                        
                    </li>
    
           
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
                        <li class="dropdown hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="search" class="topbar-icon"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg p-0">
                                <!-- Top Search Bar -->
                                <div class="app-search-topbar">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>                      

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell" class="align-self-center topbar-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
                            
                                <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                    Notifications <span class="badge badge-primary badge-pill">2</span>
                                </h6> 
                                <div class="notification-menu" data-simplebar>
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">2 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">10 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">40 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">                                                    
                                                <i data-feather="users" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">1 hr ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">2 hrs ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ml-1 nav-user-name hidden-sm">Alfandi Nurcahyono</span>
                                <img src="{{ asset('img/avatar.png')}}" alt="profile-user" class="rounded-circle thumb-xs" />                                 
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                                <div class="dropdown-divider mb-0"></div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout
                                </a>
                            </div>
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
                                        {{-- <h4 class="page-title">Selamat Datang, {{ auth()->user()->name }}! You are logged in as <strong>{{ auth()->user()->getRoleNames()->first() }}</strong>.</h4> --}}
                                        <h4>Manajemen Pasien</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">ERM</a></li>
                                            <li class="breadcrumb-item active">Manajemen Pasien</li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Pasien Klinik Utama Premiere Belova</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>NO RM</th>
                                            <th>NAMA PASIEN</th>
                                            
                                            <th>DOKUMEN</th>
                                            
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>010203</td>
                                            <td>Nama Pasien Satu</td>
                                            <td>
                                                <button class="btn  btn-primary btn-sm mb-3" >Asesmen Medis</button>
                                                 <button class="btn  btn-primary btn-sm mb-3" >Resume</button>
                                                 <button class="btn  btn-warning btn-sm mb-3" >SEP</button>
                                            </td>
                                            <td>
                                                <button class="btn  btn-success btn-sm mb-3" >Edit</button>
                                                <button class="btn  btn-danger btn-sm mb-3" >Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>010204</td>
                                            <td>Nama Pasien Dua</td>
                                            <td>
                                                <button class="btn  btn-primary btn-sm mb-3" >Asesmen Medis</button>
                                                 <button class="btn  btn-primary btn-sm mb-3" >Resume</button>
                                                 <button class="btn  btn-warning btn-sm mb-3" >SEP</button>
                                            </td>
                                            <td>
                                                <button class="btn  btn-success btn-sm mb-3" >Edit</button>
                                                <button class="btn  btn-danger btn-sm mb-3" >Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>010205</td>
                                            <td>Nama Pasien Tiga</td>
                                            <td>
                                                <button class="btn  btn-primary btn-sm mb-3" >Asesmen Medis</button>
                                                 <button class="btn  btn-primary btn-sm mb-3" >Resume</button>
                                                 <button class="btn  btn-warning btn-sm mb-3" >SEP</button>
                                            </td>
                                            <td>
                                                <button class="btn  btn-success btn-sm mb-3" >Edit</button>
                                                <button class="btn  btn-danger btn-sm mb-3" >Delete</button>
                                            </td>
                                        </tr>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                

                   
                   

                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Dastone <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
@endsection
