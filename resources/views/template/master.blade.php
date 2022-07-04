<!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>API Film (Kelompok 6)</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('template')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('template')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('template')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('template')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('template')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('template')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{asset('template')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{asset('template')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('template')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('template')}}/assets/css/style.css" rel="stylesheet">

    <!-- FIRE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    @include('template/header')
    @include('template/sidebar')

    <main id="main" class="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
          &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('template')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('template')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('template')}}/assets/vendor/chart.js/chart.min.js"></script>
    <script src="{{asset('template')}}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{asset('template')}}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{asset('template')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{asset('template')}}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{asset('template')}}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('template')}}/assets/js/main.js"></script>

</body>

</html>