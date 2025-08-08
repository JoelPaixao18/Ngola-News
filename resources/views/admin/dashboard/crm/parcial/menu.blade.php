
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="/" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="{{ url('assets/images/logoNgolaLong.png') }}" alt="SOS" class="logo logo-lg">
                    <img src="{{ url('assets/images/logoNgola.png') }}" alt="" class="logo logo-sm">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="/">CRM</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/analytics">Analytics</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                            <span class="nxl-mtext">Categories</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link"
                                    href="{{ route('admin.categories.index') }}">Category</a></li>
                            <li class="nxl-item"><a class="nxl-link"
                                    href="#">Category
                                    View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="#">Category Edit</a>
                            </li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.category.create') }}">Category Create</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-cast"></i></span>
                            <span class="nxl-mtext">Events</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.event.index') }}">Event </a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.event.create') }}">Event Create</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="#">Evente Edit</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="#">Event View</a></li>
                            <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->