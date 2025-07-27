<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-user="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Admin - Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Theme Config Js -->
    <script src="{{ asset('public/backend/modern/assets/js/head.js') }}"></script>
    <!-- Bootstrap css -->
    <link href="{{ asset('public/backend/modern/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- App css -->
    <link href="{{ asset('public/backend/modern/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons css -->
    <link href="{{ asset('public/backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

     <link rel="icon" href="{{ asset('public/frontend/assets/images/index_page_icons/logoWithoutBG.png') }}" />
    <link rel="apple-touch-icon"
        href="{{ asset('public/frontend/assets/images/index_page_icons/logoWithoutBG.png') }}" />
    <style>
        .user-box {
            padding: 0px !important;
        }

        .user-box {
            padding: 10px !important;
            text-align: center;
        }

    </style>
</head>

<body>
    @if (session('success'))
    <div class="alert alert-success auto-hide" role="alert">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger auto-hide" role="alert">
        {{ session('error') }}
    </div>
    @endif




    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Menu ========== -->
        <div class="app-menu">
            <!-- Brand Logo -->

            <!-- menu-left -->
            <div class="scrollbar">
                <!-- User box -->
                <div class="user-box text-center">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <hr />
                        <div class="dropdown-menu user-pro-dropdown">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>My Account</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a> --}}

                            <a class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>



                        </div>
                    </div>
                </div>

                <!--- Menu -->
                <ul class="menu">


                    <li class="menu-item">
                        <a href="{{ route('image-categories') }}" class="menu-link">
                            <span class="menu-icon"><i data-feather="tag"></i>

                            </span>
                            <span class="menu-text"> Image Categories </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('upload-assets') }}" class="menu-link">
                            <span class="menu-icon"><i data-feather="upload"></i>

                            </span>
                            <span class="menu-text"> Upload Assets </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('assets-list') }}" class="menu-link">
                            <span class="menu-icon"><i data-feather="list"></i>

                            </span>
                            <span class="menu-text">Assets List </span>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="{{ route('users-list') }}" class="menu-link">
                            <span class="menu-icon"><i data-feather="list"></i>
                            </span>
                            <span class="menu-text">Users List </span>
                        </a>
                    </li>

                    <hr>

                    <li class="menu-item">
                        <a href="{{ route('website-status') }}" class="menu-link">
                            <span class="menu-icon"><i data-feather="refresh-ccw"></i>
                            </span>
                            <span class="menu-text"> Website Status </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('manage-settings') }}" class="menu-link">
                            <span class="menu-icon"><i data-feather="settings"></i>
                            </span>
                            <span class="menu-text"> Settings </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('manage-contact-enquiry') }}" class="menu-link">
                            <span class="menu-icon"><i data-feather="message-square"></i>
                            </span>
                            <span class="menu-text"> Contact Enquiry </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('manage-testimonials') }}" class="menu-link">
                            <span class="menu-icon"><i data-feather="message-circle"></i>
                            </span>
                            <span class="menu-text"> Testimonials </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('manage-faq') }}" class="menu-link">
                            <span class="menu-icon"><i data-feather="help-circle"></i>
                            </span>
                            <span class="menu-text"> FAQ </span>
                        </a>
                    </li>




                </ul>
                <!--- End Menu -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left menu End ========== -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-1">
                        <!-- Topbar Brand Logo -->

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <ul class="topbar-menu d-flex align-items-center">
                        <!-- Light/Dark Mode Toggle Button -->
                        <li class="d-none d-sm-inline-block">
                            <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                                <i class="ri-moon-line font-22"></i>
                            </div>
                        </li>
                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                {{-- <img src="ubold/layouts/modern/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle" /> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16">
                                    <path fill="#afb3b7" d="M11 7c0 1.66-1.34 3-3 3S5 8.66 5 7s1.34-3 3-3s3 1.34 3 3" />
                                    <path fill="#afb3b7" fill-rule="evenodd" d="M16 8c0 4.42-3.58 8-8 8s-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8M4 13.75C4.16 13.484 5.71 11 7.99 11c2.27 0 3.83 2.49 3.99 2.75A6.98 6.98 0 0 0 14.99 8c0-3.87-3.13-7-7-7s-7 3.13-7 7c0 2.38 1.19 4.49 3.01 5.75" clip-rule="evenodd" />
                                </svg>
                                <span class="ms-1 d-none d-md-inline-block">
                                    {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                <!-- item-->
                                <a href="{{route('manage-admin-account')}}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
                                <!-- item-->
                                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a> --}}

                                <div class="dropdown-divider"></div>
                                <!-- item-->
                                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a> --}}


                                <a class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fe-log-out me-1"></i>
                                    <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                        <!-- Right Bar offcanvas button (Theme Customization Panel) -->
                        <li>
                            <a class="nav-link waves-effect waves-light" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                <i class="fe-settings font-22"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ========== Topbar End ========== -->








            @yield('content')










            <!-- Footer Start -->
            {{-- <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <script>
                                    document.write(new Date().getFullYear());

                                </script>
                                © byrdprographics
                                <!-- <a href="index.html" target="_blank">byrdprographics.com</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer> --}}
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end right-bar" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center w-100 p-0 offcanvas-header">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-bordered nav-justified w-100" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                        <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="offcanvas-body p-3 h-100" data-simplebar>
            <!-- Tab panes -->
            <div class="tab-content pt-0">
                <div class="tab-pane active" id="settings-tab" role="tabpanel">
                    <div class="mt-n3">
                        <h6 class="fw-medium py-2 px-3 font-13 text-uppercase bg-light mx-n3 mt-n3 mb-3">
                            <span class="d-block py-1">Theme Settings</span>
                        </h6>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar
                        menu, etc.
                    </div>
                    <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h5>
                    <div class="colorscheme-cardradio">
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light" value="light" />
                                <label class="form-check-label" for="layout-color-light">Light</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark" value="dark" />
                                <label class="form-check-label" for="layout-color-dark">Dark</label>
                            </div>
                        </div>
                    </div>
                    <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Content Width</h5>
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-layout-width" id="layout-width-default" value="default" />
                            <label class="form-check-label" for="layout-width-default">Fluid (Default)</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-layout-width" id="layout-width-boxed" value="boxed" />
                            <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                        </div>
                    </div>
                    <div id="layout-mode">
                        <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Layout Mode</h5>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-default" value="default" />
                                <label class="form-check-label" for="layout-mode-default">Default</label>
                            </div>
                            <div id="layout-detached">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-detached" value="detached" />
                                    <label class="form-check-label" for="layout-mode-detached">Detached</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar Color</h5>
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light" />
                            <label class="form-check-label" for="topbar-color-light">Light</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark" />
                            <label class="form-check-label" for="topbar-color-dark">Dark</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-brand" value="brand" />
                            <label class="form-check-label" for="topbar-color-brand">Brand</label>
                        </div>
                    </div>
                    <div>
                        <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Menu Color</h5>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-light" value="light" />
                                <label class="form-check-label" for="leftbar-color-light">Light</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-dark" value="dark" />
                                <label class="form-check-label" for="leftbar-color-dark">Dark</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-brand" value="brand" />
                                <label class="form-check-label" for="leftbar-color-brand">Brand</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-gradient" value="gradient" />
                                <label class="form-check-label" for="leftbar-color-gradient">Gradient</label>
                            </div>
                        </div>
                    </div>
                    <div id="menu-icon-color">
                        <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Menu Icon Color</h5>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-two-column-color" id="twocolumn-menu-color-light" value="light" />
                                <label class="form-check-label" for="twocolumn-menu-color-light">Light</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-two-column-color" id="twocolumn-menu-color-dark" value="dark" />
                                <label class="form-check-label" for="twocolumn-menu-color-dark">Dark</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-two-column-color" id="twocolumn-menu-color-brand" value="brand" />
                                <label class="form-check-label" for="twocolumn-menu-color-brand">Brand</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-two-column-color" id="twocolumn-menu-color-gradient" value="gradient" />
                                <label class="form-check-label" for="twocolumn-menu-color-gradient">Gradient</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Menu Icon Tone</h5>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-menu-icon" id="menu-icon-default" value="default" />
                                <label class="form-check-label" for="menu-icon-default">Default</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-menu-icon" id="menu-icon-twotone" value="twotones" />
                                <label class="form-check-label" for="menu-icon-twotone">Twotone</label>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-size">
                        <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar Size</h5>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-default" value="default" />
                                <label class="form-check-label" for="leftbar-size-default">Default</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-compact" value="compact" />
                                <label class="form-check-label" for="leftbar-size-compact">Compact (Medium
                                    Width)</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small" value="condensed" />
                                <label class="form-check-label" for="leftbar-size-small">Condensed (Icon View)</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-full" value="full" />
                                <label class="form-check-label" for="leftbar-size-full">Full Layout</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-fullscreen" value="fullscreen" />
                                <label class="form-check-label" for="leftbar-size-fullscreen">Fullscreen
                                    Layout</label>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-user">
                        <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">
                            Sidebar User Info
                        </h5>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" name="data-sidebar-user" id="sidebaruser-check" />
                            <label class="form-check-label" for="sidebaruser-check">Enable</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer border-top py-2 px-2 text-center">
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-light w-50" id="reset-layout">
                    Reset
                </button>
            </div>
        </div>
    </div>
    <!-- Vendor js -->
    <script src="{{ asset('public/backend/modern/assets/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('public/backend/modern/assets/js/app.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('public/backend/assets/libs/morris_js06/morris.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/raphael/raphael.min.js') }}"></script>
    <!-- Dashboard init-->
    <script src="{{ asset('public/backend/modern/assets/js/pages/dashboard-4.init.js') }}"></script>


    <!-- Add this script below or in your layout -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                let alerts = document.querySelectorAll('.auto-hide');
                alerts.forEach(function(alert) {
                    alert.style.transition = "opacity 0.5s ease";
                    alert.style.opacity = "0";
                    setTimeout(() => alert.remove(), 500); // Remove from DOM after fade out
                });
            }, 4000); // 4 seconds
        });

    </script>
</body>

</html>
