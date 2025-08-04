@extends('applications.tasks.layout.main')

@section('content-tasks')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container apps-container apps-tasks">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-md" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Tasks</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-header">
                        <a href="javascript:void(0);" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addNewTasks">
                            <i class="feather-plus me-2"></i>
                            <span>Add Tasks</span>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-list"></i>
                                    <span>New</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-watch"></i>
                                    <span>Pending</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-activity"></i>
                                    <span>Inprogress</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-check-circle"></i>
                                    <span>Completed</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="px-4 my-2 fs-10 fw-bold text-uppercase text-muted text-spacing-1 d-flex align-items-center justify-content-between">
                                <span>Priority</span>
                                <a href="javascript:void(0);">
                                    <span class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add New"> <i class="feather-plus"></i> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-dark rounded-circle"></span>
                                    <span>Low</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-success rounded-circle"></span>
                                    <span>Normal</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-primary rounded-circle"></span>
                                    <span>Medium</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-warning rounded-circle"></span>
                                    <span>High</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-danger rounded-circle"></span>
                                    <span>Urgent</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="px-4 my-2 fs-10 fw-bold text-uppercase text-muted text-spacing-1 d-flex align-items-center justify-content-between">
                                <span>Overview</span>
                                <a href="javascript:void(0);">
                                    <span class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add New"> <i class="feather-plus"></i> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-hash"></i>
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-hash"></i>
                                    <span>My Tasks</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-hash"></i>
                                    <span>Tasks Activity</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-hash"></i>
                                    <span>Tasks Attachments</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- [ Content Sidebar  ] end -->
                <!-- [ Main Area  ] start -->
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header sticky-top">
                        <div class="page-header-left d-flex align-items-center gap-2">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger me-2">
                                <i class="feather-align-left fs-20"></i>
                            </a>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="btn btn-light-brand dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,16">
                                    <i class="feather-check-circle me-2"></i>
                                    <span>My Tasks</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="feather-hash"></i>
                                        <span>All Tasks</span>
                                    </a>
                                    <a class="dropdown-item active" href="javascript:void(0)">
                                        <i class="feather-check-circle"></i>
                                        <span>My Tasks</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="feather-airplay"></i>
                                        <span>Overviews</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="feather-clock"></i>
                                        <span>Pending Tasks</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="feather-activity"></i>
                                        <span>InProgress Tasks</span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,22">
                                    <i class="feather-eye"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-eye me-3"></i>
                                            <span>Read</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-eye-off me-3"></i>
                                            <span>Unread</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-star me-3"></i>
                                            <span>Starred</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-shield-off me-3"></i>
                                            <span>Unstarred</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-clock me-3"></i>
                                            <span>Snooze</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-check-circle me-3"></i>
                                            <span>Add Tasks</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-archive me-3"></i>
                                            <span>Archive</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-alert-octagon me-3"></i>
                                            <span>Report Spam</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-trash-2 me-3"></i>
                                            <span>Delete</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Tags">
                                        <i class="feather-tag"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Office" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Office">Office</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Family">
                                            <label class="custom-control-label c-pointer" for="Family">Family</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Friend" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Friend">Friend</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Marketplace">
                                            <label class="custom-control-label c-pointer" for="Marketplace"> Marketplace </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Development">
                                            <label class="custom-control-label c-pointer" for="Development"> Development </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create Tag</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-tag me-3"></i>
                                        <span>Manages Tag</span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Labels">
                                        <i class="feather-folder-plus"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Updates">
                                            <label class="custom-control-label c-pointer" for="Updates">Updates</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Socials">
                                            <label class="custom-control-label c-pointer" for="Socials">Socials</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Primary" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Primary">Primary</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Forums">
                                            <label class="custom-control-label c-pointer" for="Forums">Forums</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Promotions" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Promotions"> Promotions </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create Label</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-folder-plus me-3"></i>
                                        <span>Manages Label</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="hstack gap-2">
                                <div class="hstack">
                                    <a href="javascript:void(0)" class="search-form-open-toggle">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Search">
                                            <i class="feather-search"></i>
                                        </div>
                                    </a>
                                    <form class="search-form" style="display: none">
                                        <div class="search-form-inner">
                                            <a href="javascript:void(0)" class="search-form-close-toggle">
                                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Search Close">
                                                    <i class="feather-arrow-left"></i>
                                                </div>
                                            </a>
                                            <input type="search" class="py-3 px-0 border-0 w-100" id="tasksSearch" placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                                <a href="javascript:void(0)" class="d-none d-sm-flex">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Newest">
                                        <i class="feather-chevron-left"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-sm-flex">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Oldest">
                                        <i class="feather-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="btn btn-light-brand btn-sm rounded-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,23">Newest</a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Title</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Priority</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Category</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Time & Date</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item active" href="javascript:void(0)">Newest</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Oldest</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Ascending</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Descending</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                            <i class="feather-more-vertical"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-plus me-3"></i>
                                            <span>Add to Group</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-user-plus me-3"></i>
                                            <span>Add to Contact</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-eye-off me-3"></i>
                                            <span>Make as Unread</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-sliders me-3"></i>
                                            <span>Filter Messages</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-archive me-3"></i>
                                            <span>Make as Archive</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash me-3"></i>
                                            <span>Report Spam</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-sliders me-3"></i>
                                            <span>Report phishing</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-download me-3"></i>
                                            <span>Download Messages</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off me-3"></i>
                                            <span>Mute Conversion</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash me-3"></i>
                                            <span>Block Conversion</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-trash-2 me-3"></i>
                                            <span>Delete Conversion</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body">
                        <div class="card stretch stretch-full">
                            <a href="javascript:void(0);" class="card-header" data-bs-toggle="collapse" data-bs-target="#tasks_collapse_1">
                                <h5 class="mb-0">Recently Assigned</h5>
                            </a>
                            <div class="card-body collapse show" id="tasks_collapse_1">
                                <ul class="list-unstyled mb-0">
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask1" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask1"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Video conference with Canada Team <span class="ms-2 badge bg-soft-danger text-danger">High</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-primary text-primary d-md-inline-block d-none">Calls</div>
                                                <div class="d-md-inline-block d-none me-3">27 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/1.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask2" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask2"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Client objective meeting <span class="ms-2 badge bg-soft-primary text-primary">Normal</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-success text-success d-md-inline-block d-none">Conferences</div>
                                                <div class="d-md-inline-block d-none me-3">22 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/2.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask3" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask3"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Target market trend analysis on the go <span class="ms-2 badge bg-soft-warning text-warning">Medium</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-teal text-teal d-md-inline-block d-none">Meetings</div>
                                                <div class="d-md-inline-block d-none me-3">23 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/3.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask4" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask4"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Send revised proposal to Mr. Dow Jones <span class="ms-2 badge bg-soft-success text-success">Low</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-primary text-primary d-md-inline-block d-none">Calls</div>
                                                <div class="d-md-inline-block d-none me-3">28 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/4.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-0 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask5" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask5"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Set up first call for demo <span class="ms-2 badge bg-soft-danger text-danger">Urgent</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-warning text-warning d-md-inline-block d-none">Project</div>
                                                <div class="d-md-inline-block d-none me-3">30 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/5.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <a href="javascript:void(0);" class="card-header" data-bs-toggle="collapse" data-bs-target="#tasks_collapse_yesterday">
                                <h5 class="mb-0">Yesterday</h5>
                            </a>
                            <div class="card-body collapse show" id="tasks_collapse_yesterday">
                                <ul class="list-unstyled mb-0">
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask6" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask6"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Client objective meeting <span class="ms-2 badge bg-soft-primary text-primary">Normal</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-success text-success d-md-inline-block d-none">Conferences</div>
                                                <div class="d-md-inline-block d-none me-3">22 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/2.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask7" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask7"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Target market trend analysis on the go <span class="ms-2 badge bg-soft-warning text-warning">Medium</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-teal text-teal d-md-inline-block d-none">Meetings</div>
                                                <div class="d-md-inline-block d-none me-3">23 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/3.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-0 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask8" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask8"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Send revised proposal to Mr. Dow Jones <span class="ms-2 badge bg-soft-success text-success">Low</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-primary text-primary d-md-inline-block d-none">Calls</div>
                                                <div class="d-md-inline-block d-none me-3">28 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/4.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <a href="javascript:void(0);" class="card-header" data-bs-toggle="collapse" data-bs-target="#tasks_collapse_20_nov">
                                <h5 class="mb-0">20 Nov, 2023</h5>
                            </a>
                            <div class="card-body collapse show" id="tasks_collapse_20_nov">
                                <ul class="list-unstyled mb-0">
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask9" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask9"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Target market trend analysis on the go <span class="ms-2 badge bg-soft-warning text-warning">Medium</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-teal text-teal d-md-inline-block d-none">Meetings</div>
                                                <div class="d-md-inline-block d-none me-3">23 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/3.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask10" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask10"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Send revised proposal to Mr. Dow Jones <span class="ms-2 badge bg-soft-success text-success">Low</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-primary text-primary d-md-inline-block d-none">Calls</div>
                                                <div class="d-md-inline-block d-none me-3">28 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/4.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask11" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask11"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Client objective meeting <span class="ms-2 badge bg-soft-primary text-primary">Normal</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-success text-success d-md-inline-block d-none">Conferences</div>
                                                <div class="d-md-inline-block d-none me-3">22 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/2.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-0 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask12" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask12"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Video conference with Canada Team <span class="ms-2 badge bg-soft-danger text-danger">High</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-warning text-warning d-md-inline-block d-none">Meeting</div>
                                                <div class="d-md-inline-block d-none me-3">27 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/1.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [ Footer ] start -->
                    <footer class="footer">
                        <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                            <span>Copyright ©</span>
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                        <div class="d-flex align-items-center gap-4">
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
                        </div>
                    </footer>
                    <!-- [ Footer ] end -->
                </div>
                <!-- [ Content Area ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
@endsection
