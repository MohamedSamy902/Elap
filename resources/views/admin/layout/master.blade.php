@include('admin/layout/header')

<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="theme-loader">
        <div class="loader-p"></div>
    </div>
</div>
<!-- Loader ends-->
<div class="page-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('admin/layout/navbar')
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        @include('admin/layout/sidbar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            @include('admin.alert.notfications')
            <!-- Container-fluid starts-->
            @yield('content')
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('admin/layout/footer')
    </div>
</div>
<!-- latest jquery-->
@include('admin/layout/footerjs')
