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
    <title>Duralux || Notes</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.ico') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css') }}">
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

    @include('applications.notes.parcial.header')
    @include('applications.notes.parcial.menu')
    @include('applications.notes.parcial.theme')
    @include('applications.notes.parcial.add-notes-modal')

    <div>
        @yield('content-notes')
    </div>

    <!--! BEGIN: Vendors JS !-->
    <script src="{{ url('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ url('assets/js/common-init.min.js') }}"></script>
    <script src="{{ url('assets/js/apps-notes-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ url('assets/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->
    <script>
        function removeNote() {
            $(".remove-note")
                .off("click")
                .on("click", function(event) {
                    event.stopPropagation();
                    $(this).parents(".single-note-item").remove();
                });
        }

        function favouriteNote() {
            $(".favourite-note")
                .off("click")
                .on("click", function(event) {
                    event.stopPropagation();
                    $(this).parents(".single-note-item").toggleClass("note-favourite");
                });
        }

        function addLabelGroups() {
            $(".category-selector .badge-group-item")
                .off("click")
                .on("click", function(event) {
                    event.preventDefault();
                    /* Act on the event */
                    var getclass = this.className;
                    var getSplitclass = getclass.split(" ")[0];
                    if ($(this).hasClass("badge-tasks")) {
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-works")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-social")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-archive")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-priority")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-personal")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-business")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-important")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    }
                });
        }
        var $btns = $(".note-link").click(function() {
            if (this.id == "all-category") {
                var $el = $("." + this.id).fadeIn();
                $("#note-full-container> div").not($el).hide();
            }
            if (this.id == "important") {
                var $el = $("." + this.id).fadeIn();
                $("#note-full-container> div").not($el).hide();
            } else {
                var $el = $("." + this.id).fadeIn();
                $("#note-full-container> div").not($el).hide();
            }
            $btns.removeClass("active");
            $(this).addClass("active");
        });
        $("#add-notes").on("click", function(event) {
            $("#addnotesmodal").modal("show");
            $("#btn-n-save").hide();
            $("#btn-n-add").show();
        });
        // Button add
        $("#btn-n-add").on("click", function(event) {
            event.preventDefault();
            /* Act on the event */
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, "0");
            var mm = String(today.getMonth()); //January is 0!
            var yyyy = today.getFullYear();
            var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            today = dd + " " + monthNames[mm] + " " + yyyy;

            var $_noteTitle = document.getElementById("note-has-title").value;
            var $_noteDescription = document.getElementById("note-has-description").value;

            $html =
                '<div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category"><div class="card card-body mb-4 stretch stretch-full">' +
                '<span class="side-stick"></span>' +
                '<h5 class="note-title text-truncate w-75 mb-1" data-noteHeading="' + $_noteTitle + '">' +
                $_noteTitle + '<i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>' +
                '<p class="fs-11 text-muted note-date">' + today + "</p>" +
                '<div class="note-content flex-grow-1">' +
                '<p class="text-muted note-inner-content text-truncate-3-line" data-noteContent="' +
                $_noteDescription + '">' + $_noteDescription + "</p>" + "</div>" +
                '<div class="d-flex align-items-center gap-1">' +
                '<span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>' +
                '<span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>' +
                '<div class="ms-auto">' + '<div class="dropdown btn-group category-selector">' +
                '<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">' +
                '<div class="category">' + '<div class="category-tasks"></div>' +
                '<div class="category-works"></div>' + '<div class="category-works"></div>' +
                '<div class="category-social"></div>' + '<div class="category-archive"></div>' +
                '<div class="category-priority"></div>' + '<div class="category-personal"></div>' +
                '<div class="category-business"></div>' + '<div class="category-important"></div>' + "</div>" +
                "</a>" + '<div class="dropdown-menu dropdown-menu-right category-menu">' +
                '<a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-danger rounded-circle fs-12 me-3"></i>Tasks </a>' +
                '<a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-primary rounded-circle fs-12 me-3"></i>Works </a>' +
                '<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-info rounded-circle fs-12 me-3"></i>Social </a>' +
                '<a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-dark rounded-circle fs-12 me-3"></i>Archive </a>' +
                '<a class="note-archive badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-danger rounded-circle fs-12 me-3"></i>Priority </a>' +
                '<a class="note-archive badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-primary rounded-circle fs-12 me-3"></i>Personal </a>' +
                '<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-warning rounded-circle me-3"></i>Business </a>' +
                '<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"> <span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>' +
                "</div>" + "</div>" + "</div>" + "</div>" + "</div></div> ";

            $("#note-full-container").prepend($html);
            $("#addnotesmodal").modal("hide");

            removeNote();
            favouriteNote();
            addLabelGroups();
        });
        $("#addnotesmodal").on("hidden.bs.modal", function(event) {
            event.preventDefault();
            document.getElementById("note-has-title").value = "";
            document.getElementById("note-has-description").value = "";
        });
        removeNote();
        favouriteNote();
        addLabelGroups();
        $("#btn-n-add").attr("disabled", "disabled");

        $("#note-has-title").keyup(function() {
            var empty = false;
            $("#note-has-title").each(function() {
                if ($(this).val() == "") {
                    empty = true;
                }
            });

            if (empty) {
                $("#btn-n-add").attr("disabled", "disabled");
            } else {
                $("#btn-n-add").removeAttr("disabled");
            }
        });
    </script>
</body>

</html>
