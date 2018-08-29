<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Abstack - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admintemp/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('admintemp/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admintemp/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admintemp/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('admintemp/assets/js/modernizr.min.js') }}"></script>

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<span class="logo-small"><i class="mdi mdi-radar"></i></span>-->
                            <!--<span class="logo-large"><i class="mdi mdi-radar"></i> Abstack</span>-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('admintemp/assets/images/logo_sm.png') }}" alt="" height="26" class="logo-small">
                            <img src="{{ asset('admintemp/assets/images/logo.png') }}" alt="" height="16" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <li class="dropdown notification-list hide-phone">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-earth"></i> English  <i class="mdi mdi-chevron-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Spanish
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Italian
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        French
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Russian
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                                    </div>

                                    <div class="slimscroll" style="max-height: 190px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <span class="badge badge-light badge-pill noti-icon-badge">6</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h6>
                                    </div>

                                    <div class="slimscroll" style="max-height: 190px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Sam Garret</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Sherry Marshall</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Shawn Millard</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('admintemp/assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Samuel <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-help"></i> <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-lock"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.html"><i class="fi-air-play"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-briefcase"></i>UI Kit</a>
                                <ul class="submenu">
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-notifications.html">Notification</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-box"></i>Components</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                            <li><a href="icons-feather.html">Feather Icons</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-advanced.html">Form Advanced</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-pickers.html">Form Pickers</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                            <li><a href="form-mask.html">Form Masks</a></li>
                                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                            <li><a href="form-x-editable.html">X Editable</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Tables</a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-datatable.html">Data Tables</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                            <li><a href="tables-editable.html">Editable Tables</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="chart-flot.html">Flot Chart</a></li>
                                            <li><a href="chart-morris.html">Morris Chart</a></li>
                                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="maps-google.html">Google Maps</a></li>
                                            <li><a href="maps-vector.html">Vector Maps</a></li>
                                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="calendar.html">Calendar</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-mail"></i>Email</a>
                                <ul class="submenu">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read Email</a></li>
                                    <li><a href="email-compose.html">Compose Email</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-paper-stack"></i>Pages</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="page-starter.html">Starter Page</a></li>
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-logout.html">Logout</a></li>
                                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                            <li><a href="page-404.html">Error 404</a></li>
                                            <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                            <li><a href="page-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fi-marquee-plus"></i>Extra Pages</a>
                                <ul class="submenu">
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-email-template.html">Email Templates</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Welcome !</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="fi-box float-right"></i>
                            <h6 class="text-muted text-uppercase mb-3">Orders</h6>
                            <h4 class="mb-3" data-plugin="counterup">1,587</h4>
                            <span class="badge badge-primary"> +11% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="fi-layers float-right"></i>
                            <h6 class="text-muted text-uppercase mb-3">Revenue</h6>
                            <h4 class="mb-3">$<span data-plugin="counterup">46,782</span></h4>
                            <span class="badge badge-primary"> -29% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="fi-tag float-right"></i>
                            <h6 class="text-muted text-uppercase mb-3">Average Price</h6>
                            <h4 class="mb-3">$<span data-plugin="counterup">15.9</span></h4>
                            <span class="badge badge-primary"> 0% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="fi-briefcase float-right"></i>
                            <h6 class="text-muted text-uppercase mb-3">Product Sold</h6>
                            <h4 class="mb-3" data-plugin="counterup">1,890</h4>
                            <span class="badge badge-primary"> +89% </span> <span class="text-muted ml-2 vertical-middle">Last year</span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-7">
                        <div class="card-box">
                            <h4 class="header-title">Transactions History</h4>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">1.78%</span> <small></small></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h6 class="font-normal text-muted font-14">Average Order Value</h6>
                                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">25.87</span> <small>USD</small></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h6 class="font-normal text-muted font-14">Total Wallet Balance</h6>
                                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">87,4517</span> <small>USD</small></h6>
                                    </div>
                                </div>
                            </div>

                            <canvas id="transactions-chart" height="350" class="mt-4"></canvas>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="card-box">
                            <h4 class="header-title">Sales History</h4>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">3.94%</span> <small></small></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h6 class="font-normal text-muted font-14">Average Sales</h6>
                                        <h6 class="font-18"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> <span class="text-dark">16.25</span> <small>USD</small></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h6 class="font-normal text-muted font-14">Total Sales</h6>
                                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">124,858.67</span> <small>USD</small></h6>
                                    </div>
                                </div>
                            </div>

                            <canvas id="sales-history" height="350" class="mt-4"></canvas>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Messages</h4>

                            <div class="inbox-widget slimscroll" style="max-height: 370px;">
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                        <p class="inbox-item-author">Chadengle</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">13:40 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                        <p class="inbox-item-author">Tomaslau</p>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">13:34 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                        <p class="inbox-item-author">Stillnotdavid</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">13:17 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                        <p class="inbox-item-author">Kurafire</p>
                                        <p class="inbox-item-text">Nice to meet you</p>
                                        <p class="inbox-item-date">12:20 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                        <p class="inbox-item-author">Shahedk</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                        <p class="inbox-item-author">Adhamdannaway</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">9:56 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                        <p class="inbox-item-author">Arashasghari</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                                        <p class="inbox-item-author">Joshaustin</p>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">9:56 AM</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Latest Comments</h4>

                            <div class="comment-list slimscroll" style="max-height: 370px;">
                                <a href="#">
                                    <div class="comment-box-item">
                                        <div class="badge badge-pill badge-success">Ubold - Admin</div>
                                        <p class="commnet-item-date">1 month ago</p>
                                        <h6 class="commnet-item-msg">Do you have any plans to add a vertical menu?</h6>
                                        <p class="commnet-item-user">Ubold User</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="comment-box-item">
                                        <div class="badge badge-pill badge-warning">Adminox - Admin</div>
                                        <p class="commnet-item-date">1 month ago</p>
                                        <h6 class="commnet-item-msg">Hello, what is your plan to upgrade Bootstrap 4 versions? Beta or wait for stable?</h6>
                                        <p class="commnet-item-user">Ubold User</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="comment-box-item">
                                        <div class="badge badge-pill badge-primary">Staro - Landing</div>
                                        <p class="commnet-item-date">1 month ago</p>
                                        <h6 class="commnet-item-msg">Hi coderthemes – do you have PSD for this admin UI? I could really use it.</h6>
                                        <p class="commnet-item-user">Ubold User</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="comment-box-item">
                                        <div class="badge badge-pill badge-dark">Ubold - Admin</div>
                                        <p class="commnet-item-date">1 month ago</p>
                                        <h6 class="commnet-item-msg">Do you have any plans to add a vertical menu?</h6>
                                        <p class="commnet-item-user">Ubold User</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Last Transactions</h4>

                            <ul class="list-unstyled transaction-list slimscroll mb-0" style="max-height: 370px;">
                                <li>
                                    <i class="dripicons-arrow-down text-success"></i>
                                    <span class="tran-text">Advertising</span>
                                    <span class="pull-right text-success tran-price">+$230</span>
                                    <span class="pull-right text-muted">07/09/2017</span>
                                    <span class="clearfix"></span>
                                </li>

                                <li>
                                    <i class="dripicons-arrow-up text-danger"></i>
                                    <span class="tran-text">Support licence</span>
                                    <span class="pull-right text-danger tran-price">-$965</span>
                                    <span class="pull-right text-muted">07/09/2017</span>
                                    <span class="clearfix"></span>
                                </li>

                                <li>
                                    <i class="dripicons-arrow-down text-success"></i>
                                    <span class="tran-text">Extended licence</span>
                                    <span class="pull-right text-success tran-price">+$830</span>
                                    <span class="pull-right text-muted">07/09/2017</span>
                                    <span class="clearfix"></span>
                                </li>

                                <li>
                                    <i class="dripicons-arrow-down text-success"></i>
                                    <span class="tran-text">Advertising</span>
                                    <span class="pull-right text-success tran-price">+$230</span>
                                    <span class="pull-right text-muted">05/09/2017</span>
                                    <span class="clearfix"></span>
                                </li>

                                <li>
                                    <i class="dripicons-arrow-up text-danger"></i>
                                    <span class="tran-text">New plugins added</span>
                                    <span class="pull-right text-danger tran-price">-$452</span>
                                    <span class="pull-right text-muted">05/09/2017</span>
                                    <span class="clearfix"></span>
                                </li>

                                <li>
                                    <i class="dripicons-arrow-down text-success"></i>
                                    <span class="tran-text">Google Inc.</span>
                                    <span class="pull-right text-success tran-price">+$230</span>
                                    <span class="pull-right text-muted">04/09/2017</span>
                                    <span class="clearfix"></span>
                                </li>

                                <li>
                                    <i class="dripicons-arrow-up text-danger"></i>
                                    <span class="tran-text">Facebook Ad</span>
                                    <span class="pull-right text-danger tran-price">-$364</span>
                                    <span class="pull-right text-muted">03/09/2017</span>
                                    <span class="clearfix"></span>
                                </li>

                                <li>
                                    <i class="dripicons-arrow-down text-success"></i>
                                    <span class="tran-text">New sale</span>
                                    <span class="pull-right text-success tran-price">+$230</span>
                                    <span class="pull-right text-muted">03/09/2017</span>
                                    <span class="clearfix"></span>
                                </li>

                                <li>
                                    <i class="dripicons-arrow-down text-success"></i>
                                    <span class="tran-text">Advertising</span>
                                    <span class="pull-right text-success tran-price">+$230</span>
                                    <span class="pull-right text-muted">29/08/2017</span>
                                    <span class="clearfix"></span>
                                </li>

                                <li>
                                    <i class="dripicons-arrow-up text-danger"></i>
                                    <span class="tran-text">Support licence</span>
                                    <span class="pull-right text-danger tran-price">-$854</span>
                                    <span class="pull-right text-muted">27/08/2017</span>
                                    <span class="clearfix"></span>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2017 - 2018 © Abstack. - Coderthemes.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="{{ asset('admintemp/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admintemp/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('admintemp/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admintemp/assets/js/waves.js') }}"></script>
        <script src="{{ asset('admintemp/assets/js/jquery.slimscroll.js') }}"></script>

        <!-- Counter number -->
        <script src="{{ asset('admintemp/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('admintemp/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- Chart JS -->
        <script src="{{ asset('admintemp/plugins/chart.js/chart.bundle.js') }}"></script>

        <!-- init dashboard -->
        <script src="{{ asset('admintemp/assets/pages/jquery.dashboard.init.js') }}"></script>


        <!-- App js -->
        <script src="{{ asset('admintemp/assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('admintemp/assets/js/jquery.app.js') }}"></script>

    </body>
</html>