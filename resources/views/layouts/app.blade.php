<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Absensi Siswa</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/ico/apple-icon-120.html') }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/extensions/toastr.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/dashboard-ecommerce.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/charts/chart-apex.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/css/plugins/extensions/ext-component-toastr.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    @stack('style')
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.partials.navbar')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.partials.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <!-- BEGIN: footer-->
    @include('layouts.partials.footer')
    <!-- END: footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('layouts.partials.alert')
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->
    @stack('script')
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

    </script>
</body>
<!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 02:47:02 GMT -->

</html>
