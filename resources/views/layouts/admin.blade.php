<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none">

<head>
    <meta charset="utf-8"/>
    <title>CFIRED - Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('administration/assets/images/favicon.ico')}}">
    <!-- Sweet Alert css-->
    <link href="{{asset('administration/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- Layout config Js -->
    <script src="{{asset('administration/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('administration/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awsome Icons Css V4 -->
    <link href="{{asset('administration/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('administration/assets/css/app.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- custom Css-->
    <link href="{{asset('administration/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>

    @stack('head')
</head>

<body>

<!-- Begin page -->

<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div style="background-color: white;" class="d-flex">
                    <!-- LOGO -->
                    <div style="background-color: white;" class="navbar-brand-box horizontal-logo">
                        <a href="#" class="logo logo-dark">
                        <span class="logo-sm">
                            <img style="width: 800px;" src="{{asset('logo.png')}}" alt="" {{--height="100"--}}>
                        </span>
                            <span class="logo-lg">
                            <img  style="width: 200px;"  src="{{asset('logo.png')}}" alt="" {{--height="100"--}}>
                        </span>
                        </a>

                        <a href="#" class="logo logo-light">
                        <span class="logo-sm">
                            <img  style="width: 200px;"  src="{{asset('logo.png')}}" alt="" {{--height="100"--}}>
                        </span>
                            <span class="logo-lg">
                            <img  style="width: 200px;"  src="{{asset('logo.png')}}" alt="" {{--height="100"--}}>
                        </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </button>
                </div>

                <div class="d-flex align-items-center">

                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                            <i class='bx bx-fullscreen fs-22'></i>
                        </button>
                    </div>


                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">

                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Admin</span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">CFIRED</span>
                            </span>
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Welcome Admin!</h6>

                            <div class="dropdown-divider">

                            </div>

                            <a class="dropdown-item" href="#"><span
                                    class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                    class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Settings</span></a>

                            <a class="dropdown-item" href="auth-logout-basic.html"><i
                                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle" data-key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="{{url('/')}}" class="logo logo-dark">
               <span class="logo-sm">
                      <img  style="width: 200px;"  src="{{asset('logo.png')}}" alt="" height="100">
                </span>
                <span class="logo-lg">
                     <img  style="width: 200px;"  src="{{asset('logo.png')}}" alt="" height="100">
                </span>

                <span style="color: white;">EHPCZ</span>
            </a>
            <!-- Light Logo-->
            <a href="{{url('/')}}" class="logo logo-light">
                <span class="logo-sm">
                        <img src="{{asset('logo.png')}}" alt="" width="100" height="100">
                 </span>
                <span class="logo-lg">
                     <img src="{{asset('logo.png')}}" alt="" width="100" height="100">
                 </span>
                {{--<span style="color: white;">EHPCZ</span>--}}
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>
        <!-- LOGO -->

        <!-- SIDEBARD -->
        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <div id="two-column-menu">
                </div>

                <ul class="navbar-nav" id="navbar-nav">
                    <li style="/*color:white;*/ font-size: 12px;" class="menu-title"><span
                            data-key="t-menu">Admin Menu</span></li>

                    <!-- Contact Menu -->
                    <li class="nav-item">
                        <a style="/*color:white;*/ font-size: 12px;" class="nav-link menu-link collapsed"
                           href="#sidebarContact" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarContact">
                            <span data-key="t-dashboards">CONTACT</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarContact">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a style="/*color:white;*/ font-size: 12px;" href="{{route('contact-types.index')}}"
                                       class="nav-link {{ Request::routeIs('contact-types.index*') ? 'active' : '' }}"
                                       data-key="t-analytics">
                                        Contact Type </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Contact Menu -->

                    <!-- Location Menu -->
                    <li class="nav-item">
                        <a style="/*color:white;*/ font-size: 12px;" class="nav-link menu-link collapsed"
                           href="#sidebarLocation" data-bs-toggle="collapse"
                           role="button"
                           aria-expanded="false" aria-controls="sidebarLocation">
                            <span data-key="t-dashboards">ABOUT CFIRED</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLocation">
                            <ul class="nav nav-sm flex-column">

                                <li class="nav-item">
                                    <a style="/*color:white;*/ font-size: 12px;" href="{{route('introduction.index')}}"
                                       class="nav-link" data-key="t-analytics">
                                        Introduction </a>
                                </li>

                                <li class="nav-item">
                                    <a style="/*color:white;*/ font-size: 12px;" href="{{route('vision.index')}}"
                                       class="nav-link" data-key="t-analytics">
                                        Vision </a>
                                </li>

                                <li class="nav-item">
                                    <a style="/*color:white;*/ font-size: 12px;" href="{{route('mission.index')}}"
                                       class="nav-link" data-key="t-analytics">
                                        Mission </a>
                                </li>


                                <li class="nav-item">
                                    <a style="/*color:white;*/ font-size: 12px;" href="{{route('our-journey.index')}}"
                                       class="nav-link" data-key="t-analytics">
                                        Our Journey </a>
                                </li>

                                <li class="nav-item">
                                    <a style="/*color:white;*/ font-size: 12px;" href="{{route('core-values.index')}}"
                                       class="nav-link" data-key="t-analytics">
                                        Our Core Value </a>
                                </li>

                                <li class="nav-item">
                                    <a style="/*color:white;*/ font-size: 12px;" href="{{route('our-approach.index')}}"
                                       class="nav-link" data-key="t-analytics">
                                        Our Approach </a>
                                </li>


                            </ul>
                        </div>
                    </li>
                    <!-- end Location Menu -->

                    <li class="nav-item">
                        <a style="/*color:white;*/ font-size: 12px;" class="nav-link menu-link collapsed"
                           href="#Services" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="Services">
                            <span data-key="t-dashboards">OUR SERVICES</span>
                        </a>
                        <div class="collapse menu-dropdown" id="Services">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a style="/*color:white;*/ font-size: 12px;" href="{{route('our-services-introduction.index')}}"
                                       class="nav-link {{ Request::routeIs('our-services-introduction,index') ? 'active' : '' }}"
                                       data-key="t-analytics">
                                        Services Introduction </a>
                                </li>
                                <li class="nav-item">
                                    <a style="/*color:white;*/ font-size: 12px;" href="{{route('services.index')}}"
                                       class="nav-link {{ Request::routeIs('services.index') ? 'active' : '' }}"
                                       data-key="t-analytics">
                                        Services </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
        <!-- SIDEBARD -->

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @yield('content')
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>{{date('Y')}}</script>
                        © EHPCZ.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Leading Digital
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!-- JAVASCRIPT -->
<script src="{{asset('administration/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('administration/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('administration/assets/js/plugins.js')}}"></script>

<!-- list.js min js -->
<script src="{{asset('administration/assets/libs/list.js/list.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/list.pagination.js/list.pagination.min.js')}}"></script>


<script src="{{asset('administration/assets/js/pages/crm-companies.init.js')}}"></script>
<!-- Jquery min js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- App js -->
<script src="{{asset('administration/assets/js/app.js')}}"></script>

<script>
    $(document).ready(function () {
        // Iterate over each active nav-link
        $('.nav-link.active').each(function () {
            // Traverse up to find the parent 'menu-link'
            var parentMenuLink = $(this).closest('.collapse').prev('.menu-link');

            // Check if parentMenuLink is found
            if (parentMenuLink.length) {
                // Remove 'collapsed' class, set 'aria-expanded' to true, and add 'active' class
                parentMenuLink.removeClass('collapsed').addClass('active').attr('aria-expanded', 'true');

                // Expand the parent collapse menu
                $(this).closest('.collapse').addClass('show');
            }
        });
    });

</script>


@stack('scripts')


</body>

</html>
