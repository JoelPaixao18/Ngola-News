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
    <title>Duralux || Calendar</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.ico') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/vendors/css/tui-calendar.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/vendors/css/tui-theme.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/vendors/css/tui-time-picker.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/vendors/css/tui-date-picker.min.css') }}">
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

    @include('applications.calendar.parcial.header')
    @include('applications.calendar.parcial.menu')
    @include('applications.calendar.parcial.theme')

    <div>
        @yield('content-calendar')
    </div>

    <!--! BEGIN: Vendors JS !-->
    <script src="{{ url('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ url('assets/vendors/js/tui-code-snippet.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tui-time-picker.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tui-date-picker.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/chance.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tui-calendar.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tui-calendars.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tui-schedules.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tui-calendar-init.min.js') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ url('assets/js/common-init.min.js') }}"></script>
    <script src="{{ url('assets/js/apps-calendar-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ url('assets/js/theme-customizer-init.min.js') }}"></script>
</body>

</html>
