<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>etbale</title>

    <!-- BOOTSTRAP CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../../assets/css/skin-modes.css" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="../../assets/css/closed-sidemenu.css" rel="stylesheet">

    <!--C3 CHARTSCSS -->
    <link href="../../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="../../assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

    <!-- MORRIS CHART CSS -->
    <link href="../../assets/plugins/morris/morris.css" rel="stylesheet" />

    <!-- ION-RANGESLIDER CSS -->
    <link href="../../assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../../assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="../../assets/css/icons.css" rel="stylesheet" />

    <!-- SIDEBAR CSS -->
    <link href="../../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../../assets/colors/color1.css" />

    <!-- STYLE CSS -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../../assets/css/skin-modes.css" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->

    <!--C3 CHARTSCSS -->
    <link href="../../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- P-scroll bar css-->

    <!-- FILE UPLODE CSS -->
    <link href="../../assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css" />

    <!-- SELECT2 CSS -->
    <link href="../../assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../../assets/css/icons.css" rel="stylesheet" />

    <!-- SUMMERNOTE CSS -->
    <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.css">

    <!-- ION-RANGESLIDER CSS -->

    <!--- FONT-ICONS CSS -->
    <link href="../../assets/css/icons.css" rel="stylesheet" />

    <!--BOOTSTRAP-DATERANGEPICKER CSS-->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-daterangepicker/daterangepicker.css">

    <!-- TIME PICKER CSS -->
    <link href="../../assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet" />

    <!-- DATE PICKER CSS -->
    <link href="../../assets/plugins/date-picker/spectrum.css" rel="stylesheet" />

    <!-- SELECT2 CSS -->

    <!-- SIDEBAR CSS -->
    <!-- DATA TABLE CSS -->
    <link href="../../assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->

    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body class="app sidebar-mini">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!--APP-SIDEBAR-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar">
                <div class="side-header">
                    <a class="header-brand1" href="index.html">
                        <img src="/assets/images/brand/logo-2.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="/assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                        <img src="/assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                        <img src="/assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                    </a><!-- LOGO -->
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a>
                    <!-- sidebar-toggle-->
                </div>
                <div class="sidebar-navs">
                    <ul class="nav  nav-pills-circle">
                        <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
                            <a class="nav-link text-center m-2">
                                <i class="fe fe-settings"></i>
                            </a>
                        </li>

                        <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                            <a class="nav-link text-center m-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                <i class="fe fe-power"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="side-menu">
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="{{route('dashboard')}}"><i
                                class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span></a>

                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon fa fa-first-order"></i><span
                                class="side-menu__label">Orders</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{route('order.index')}}" class="slide-item"> All Orders</a></li>
                            <li><a href="{{route('order.pending')}}" class="slide-item"> Pending Orders</a></li>
                            <li><a href="{{route('order.processing')}}" class="slide-item"> Processing Orders</a></li>
                            <li><a href="{{route('order.completed')}}" class="slide-item"> Completed Orders</a></li>
                            <li><a href="{{route('order.declined')}}" class="slide-item"> Declined Orders</a></li>

                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon fa fa-product-hunt"></i><span
                                class="side-menu__label">Products</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('product.create')}}"><span
                                        class="side-menu__label">Add Products</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('product.index')}}"><span
                                        class="side-menu__label">All Products</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide"
                                    href="{{route('product_inactive')}}"><span class="side-menu__label">Deactivated
                                        Products</span></a></li>

                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon fa fa-user-circle"></i><span
                                class="side-menu__label">Customers</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('customer.create')}}"><span
                                        class="side-menu__label">Add New</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('customer.index')}}"><span
                                        class="side-menu__label">Customers List</span></a></li>

                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon fa fa-industry"></i><span
                                class="side-menu__label">Vendors</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('vendor.create')}}"><span
                                        class="side-menu__label">Add New</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('vendor.index')}}"><span
                                        class="side-menu__label">Vendors List</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="#"><span
                                        class="side-menu__label">withdraws</span></a></li>

                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon fa fa-list"></i><span class="side-menu__label">Manage
                                Categories</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('main_category.index')}}"><span
                                        class="side-menu__label">Main Category</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('sub_category.index')}}"><span
                                        class="side-menu__label">Sub Category</span></a></li>

                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon fa fa-mobile"></i><span class="side-menu__label">Manage
                                app</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('slid-app.index')}}"><span
                                        class="side-menu__label">Slider</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="#"><span
                                        class="side-menu__label">Products</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('company.create')}}"><span
                                        class="side-menu__label">Company</span></a></li>

                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon fa fa-globe"></i><span class="side-menu__label">Manage
                                web</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('slid-web.index')}}"><span
                                        class="side-menu__label">Slider</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('app.create')}}"><span
                                        class="side-menu__label">DOWNLOAD app</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('testimonial.create')}}"><span
                                        class="side-menu__label">Testimonial</span></a></li>

                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i
                                class="side-menu__icon fa fa-cog"></i><span class="side-menu__label">General
                                Settings</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="side-menu__item" data-toggle="slide" href="setting-payment.html"><span
                                        class="side-menu__label">Payment</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="setting-email.html"><span
                                        class="side-menu__label">Email</span></a></li>
                            <li><a class="side-menu__item" data-toggle="slide" href="{{route('Soical.create')}}"><span
                                        class="side-menu__label">Social</span></a></li>

                        </ul>
                    </li>

                </ul>
            </aside>
            <!--/APP-SIDEBAR-->

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="container-fluid">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                        <!-- sidebar-toggle-->
                        <a class="header-brand" href="index.html">
                            <img src="/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="/assets/images/brand/logo-3.png"
                                class="header-brand-img desktop-logo mobile-light" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown d-sm-flex">
                            <div class="dropdown-menu header-search dropdown-menu-left">
                                <div class="input-group w-100 p-2">
                                    <input type="text" class="form-control " placeholder="Search....">
                                    <div class="input-group-append ">
                                        <button type="button" class="btn btn-primary ">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- SEARCH -->
                        <div class="dropdown d-md-flex">
                            <a class="nav-link icon full-screen-link nav-link-bg">
                                <i class="fe fe-maximize fullscreen-button"></i>
                            </a>
                        </div><!-- FULL-SCREEN -->

                    </div>
                </div>
            </div>
            <!-- /Mobile Header -->

            <!--app-content open-->
            <div class="app-content">
                <div class="side-app">

                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle close-toggle" data-toggle="sidebar"
                            href="#"></a><!-- sidebar-toggle-->
                        <div>
                            <h1 class="page-title">Dashboard</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Admin Panel</li>
                            </ol>
                        </div>
                        <div class="d-flex  ml-auto header-right-icons header-search-icon">
                            <div class="dropdown d-sm-flex">

                                <div class="dropdown-menu header-search dropdown-menu-left">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control " placeholder="Search....">
                                        <div class="input-group-append ">
                                            <button type="button" class="btn btn-primary ">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- SEARCH -->
                            <div class="dropdown d-md-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fe fe-maximize fullscreen-button"></i>
                                </a>
                            </div><!-- FULL-SCREEN -->
                            <div class="dropdown d-md-flex notifications">
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <div class="notifications-menu">
                                        <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-success mr-3">
                                                <i class="fa fa-thumbs-o-up"></i>
                                            </div>
                                            <div class="">
                                                <strong>Someone likes our posts.</strong>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-primary mr-3">
                                                <i class="fa fa-commenting-o"></i>
                                            </div>
                                            <div class="">
                                                <strong>3 New Comments.</strong>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-danger mr-3">
                                                <i class="fa fa-cogs"></i>
                                            </div>
                                            <div class="">
                                                <strong>Server Rebooted</strong>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">View all Notification</a>
                                </div>
                            </div><!-- NOTIFICATIONS -->>
                            <!-- SIDE-MENU -->
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    @yield('content')

                    <!-- FOOTER -->
                    <footer class="footer">
                        <div class="container">
                            <div class="row align-items-center flex-row-reverse">
                                <div class="col-md-12 col-sm-12 text-center">
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- FOOTER END -->
                </div>

                <!-- BACK-TO-TOP -->

                <!-- JQUERY JS -->
                <script src="/assets/js/jquery-3.4.1.min.js"></script>

                <!-- BOOTSTRAP JS -->
                <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="/assets/plugins/bootstrap/js/popper.min.js"></script>

                <!-- SPARKLINE JS-->
                <script src="/assets/js/jquery.sparkline.min.js"></script>

                <!-- CHART-CIRCLE JS-->
                <script src="/assets/js/circle-progress.min.js"></script>

                <!-- RATING STARJS -->
                <script src="/assets/plugins/rating/jquery.rating-stars.js"></script>

                <!-- CHARTJS CHART JS-->
                <script src="/assets/plugins/chart/Chart.bundle.js"></script>
                <script src="/assets/plugins/chart/utils.js"></script>

                <!-- PIETY CHART JS-->
                <script src="/assets/plugins/peitychart/jquery.peity.min.js"></script>
                <script src="/assets/plugins/peitychart/peitychart.init.js"></script>

                <!-- ECHART JS-->
                <script src="/assets/plugins/echarts/echarts.js"></script>

                <!-- SIDE-MENU JS-->
                {{-- <script src="/assets/plugins/sidemenu/sidemenu.js"></script> --}}

                <!-- SIDEBAR JS -->
                <script src="/assets/plugins/sidebar/sidebar.js"></script>

                <!-- Perfect SCROLLBAR JS-->
                <script src="/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
                <script src="/assets/plugins/p-scroll/pscroll.js"></script>
                <script src="/assets/plugins/p-scroll/pscroll-1.js"></script>

                <!-- APEXCHART JS -->
                <script src="/assets/js/apexcharts.js"></script>

                <!-- INDEX JS -->
                <script src="/assets/js/index1.js"></script>

                <!-- CUSTOM JS-->
                <script src="/assets/js/custom.js"></script>
                <script src="../../assets/js/jquery-3.4.1.min.js"></script>

                <!-- BOOTSTRAP JS -->
                <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>

                <!-- SPARKLINE JS-->
                <script src="../../assets/js/jquery.sparkline.min.js"></script>

                <!-- CHART-CIRCLE JS-->
                <script src="../../assets/js/circle-progress.min.js"></script>

                <!-- RATING STARJS -->
                <script src="../../assets/plugins/rating/jquery.rating-stars.js"></script>

                <!-- CHARTJS CHART JS-->
                <script src="../../assets/plugins/chart/Chart.bundle.js"></script>
                <script src="../../assets/plugins/chart/utils.js"></script>

                <!-- PIETY CHART JS-->
                <script src="../../assets/plugins/peitychart/jquery.peity.min.js"></script>
                <script src="../../assets/plugins/peitychart/peitychart.init.js"></script>

                <!-- FILE UPLOADES JS -->
                <script src="../../assets/plugins/fileuploads/js/fileupload.js"></script>
                <script src="../../assets/plugins/fileuploads/js/file-upload.js"></script>

                <!-- ECHART JS-->
                <script src="../../assets/plugins/echarts/echarts.js"></script>

                <!-- SIDE-MENU JS-->

                <!-- SIDEBAR JS -->
                <script src="../../assets/plugins/sidebar/sidebar.js"></script>

                <!-- Perfect SCROLLBAR JS-->
                <script src="../../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
                <script src="../../assets/plugins/p-scroll/pscroll.js"></script>
                <script src="../../assets/plugins/p-scroll/pscroll-1.js"></script>

                <!-- SELECT2 JS -->
                <script src="../../assets/plugins/select2/select2.full.min.js"></script>

                <!-- APEXCHART JS -->
                <script src="../../assets/js/apexcharts.js"></script>

                <!-- INDEX JS -->
                <script src="../../assets/js/index1.js"></script>

                <!-- CUSTOM JS-->
                <script src="../../assets/js/custom.js"></script>

                <!-- DATA TABLE JS-->
                {{-- <script src="../../assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="../../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script> --}}
                {{-- <script src="../../assets/plugins/datatable/datatable.js"></script>
    <script src="../../assets/plugins/datatable/datatable-2.js"></script> --}}

                <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

                <!-- SIDE-MENU JS-->
                <script src="../../assets/plugins/sidemenu/sidemenu.js"></script>

                <!-- INPUT MASK JS-->
                <script src="../../assets/plugins/input-mask/jquery.mask.min.js"></script>

                <!-- BOOTSTRAP-DATERANGEPICKER JS -->
                <script src="../../assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
                <script src="../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

                <!-- TIMEPICKER JS -->
                <script src="../../assets/plugins/time-picker/jquery.timepicker.js"></script>
                <script src="../../assets/plugins/time-picker/toggles.min.js"></script>

                <!-- DATEPICKER JS -->
                <script src="../../assets/plugins/date-picker/spectrum.js"></script>
                <script src="../../assets/plugins/date-picker/jquery-ui.js"></script>
                <script src="../../assets/plugins/input-mask/jquery.maskedinput.js"></script>

                <!-- FILE UPLOADES JS -->

                <!-- SUMMERNOTE JS -->
                <script src="../../assets/plugins/summernote/summernote-bs4.js"></script>

                <!-- DATA TABLE JS-->
                {{-- <script src="../../assets/plugins/datatable/jquery.dataTables.min.js"></script>
                <script src="../../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
                <script src="../../assets/plugins/datatable/datatable.js"></script>
                <script src="../../assets/plugins/datatable/datatable-2.js"></script> --}}
                <script src="../../assets/plugins/datatable/dataTables.responsive.min.js"></script>
                <!-- SELECT2 JS -->

                <!-- FORMELEMENTS JS -->
                <script src="../../assets/js/form-elements.js"></script>

                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="sweetalert2.all.min.js"></script>

                <!-- CUSTOM JS-->

                @if(session('result') == 'success')
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: "{{session('message')}}",
                    })
                </script>
                @endif

                @if($errors->any())
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        footer: '<a href>Why do I have this issue?</a>'
                    })
                </script>
                @endif
</body>

</html>
