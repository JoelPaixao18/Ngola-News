<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/proposal-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>@yield('title')</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.ico')}}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css')}}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/tagify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/tagify-data.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/quill.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2-theme.min.css')}}">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/theme.min.css')}}">
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    @include('proposal.proposalView.parcial.header')
    @include('proposal.proposalView.parcial.menu')
    <main class="nxl-container">
    @yield('content-proposalView')
    @include('proposal.proposalView.parcial.footer')
    </main>
    @include('proposal.proposalView.parcial.thema')
    

<!--! BEGIN: Vendors JS !-->
    <script src="{{ url('assets/vendors/js/vendors.min.js')}}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ url('assets/vendors/js/tagify.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/tagify-data.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/quill.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/select2.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/select2-active.min.js')}}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ url('assets/js/common-init.min.js')}}"></script>
    <script src="{{ url('assets/js/proposal-view-init.min.js')}}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ url('assets/js/theme-customizer-init.min.js')}}"></script>
    <!--! END: Theme Customizer !-->
    <script>
        // Create a "close" button and append it to each list item
        var myNodelist = document.querySelectorAll("#checklist> li");
        var i;
        for (i = 0; i < myNodelist.length; i++) {
            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            myNodelist[i].appendChild(span);
        }

        // Click on a close button to hide the current list item
        var close = document.getElementsByClassName("close");
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            };
        }

        // Add a "checked" symbol when clicking on a list item
        var list = document.getElementById("checklist");
        list.addEventListener(
            "click",
            function(ev) {
                if (ev.target.tagName === "LI") {
                    ev.target.classList.toggle("checked");
                }
            },
            false
        );

        // Create a new list item when clicking on the "Add" button
        function newElement() {
            var li = document.createElement("li");
            var inputValue = document.getElementById("checklistInput").value;
            var t = document.createTextNode(inputValue);
            li.appendChild(t);
            if (inputValue === "") {
                alert("You must write something!");
            } else {
                document.getElementById("checklist").appendChild(li);
            }
            document.getElementById("checklistInput").value = "";

            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            li.appendChild(span);

            for (i = 0; i < close.length; i++) {
                close[i].onclick = function() {
                    var div = this.parentElement;
                    div.style.display = "none";
                };
            }
        }
    </script>
</body>


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/proposal-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:33 GMT -->
</html>