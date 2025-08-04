<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Duralux || Tasks</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.ico') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/quill.min.css') }}">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/theme.min.css') }}">
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
   <script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

    @include('applications.tasks.parcial.header')
    @include('applications.tasks.parcial.menu')
    @include('applications.tasks.parcial.theme')
    @include('applications.tasks.parcial.add-task-modal')
    @include('applications.tasks.parcial.task-details')

    <div>
        @yield('content-tasks')
    </div>


    <!--! BEGIN: Vendors JS !-->
    <script src="{{ url('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ url('assets/vendors/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/select2-active.min') }}"></script>
    <script src="{{ url('assets/vendors/js/datepicker.min') }}"></script>
    <script src="{{ url('assets/vendors/js/quill.min') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ url('assets/js/common-init.min') }}"></script>
    <script src="{{ url('assets/js/apps-tasks-init.min') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ url('assets/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->
    <!--! Checklist JS !-->
    <script src="{{ url('assets/js/tasks') }}"></script>
</body>

</html>
