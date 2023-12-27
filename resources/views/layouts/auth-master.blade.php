<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/admin/images/logos/favicon.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/admin/css/styles.min.css')}}"/>
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">

        @yield('content')

    </div>
</div>
<script src="{{asset('assets/admin/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
