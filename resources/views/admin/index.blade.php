<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('admin') }}/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin') }}/assets/images/favicon.png" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/style.css">
    <link id="color" rel="stylesheet" href="{{ asset('admin') }}/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/assets/css/responsive.css">
</head>

<body class="rtl dark-only">
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper ">
            <!-- Page Sidebar Start-->

            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid dashboard-default-sec">
                    <div class="row">

                        <div class="col-xl-8 box-col-12 des-xl-100">
                            <div class="row">
                                <div class="col-xl-6 col-50 box-col-6 des-xl-50">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="header-top d-sm-flex align-items-center">
                                                <h5>Growth Overview</h5>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="chart-dashbord"></div>
                                            <div class="code-box-copy">
                                                <button class="code-box-copy__btn btn-clipboard"
                                                    data-clipboard-target="#sell-overview" title="Copy"><i
                                                        class="icofont icofont-copy-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with <i
                                    class="fa fa-heart font-secondary"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('admin') }}/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin') }}/assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('admin') }}/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin') }}/assets/js/bootstrap/popper.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('admin') }}/assets/js/chart/chartist/chartist.js"></script>
    <script src="{{ asset('admin') }}/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="{{ asset('admin') }}/assets/js/chart/knob/knob.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/chart/knob/knob-chart.js"></script>
    <script src="{{ asset('admin') }}/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{ asset('admin') }}/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{ asset('admin') }}/assets/js/prism/prism.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/clipboard/clipboard.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/counter/counter-custom.js"></script>
    <script src="{{ asset('admin') }}/assets/js/custom-card/custom-card.js"></script>
    <script src="{{ asset('admin') }}/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('admin') }}/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{ asset('admin') }}/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="{{ asset('admin') }}/assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="{{ asset('admin') }}/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="{{ asset('admin') }}/assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="{{ asset('admin') }}/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="{{ asset('admin') }}/assets/js/dashboard/default.js"></script>
    <script src="{{ asset('admin') }}/assets/js/notify/index.js"></script>
    <script src="{{ asset('admin') }}/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="{{ asset('admin') }}/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="{{ asset('admin') }}/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('admin') }}/assets/js/script.js"></script>
    <script src="{{ asset('admin') }}/assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>
