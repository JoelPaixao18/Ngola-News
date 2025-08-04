 <!--! ================================================================ !-->
    <!--! [Start] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="tasksDetailsOffcanvas">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i class="feather-arrow-left"></i></div>
                <span class="vr text-muted mx-4"></span>
                <a href="javascript:void(0);">
                    <h2 class="fs-14 fw-bold text-truncate-1-line">Video conference with Canada Team</h2>
                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">09:00am - 11:00am, Rangpur, Bangladesh.</span>
                </a>
            </div>
            <div class="d-none d-md-flex gap-1 align-items-center justify-content-center">
                <a href="javascript:void(0);" class="d-none d-lg-flex align-items-center fs-9 fw-bold text-uppercase text-dark py-2 px-3 border border-gray-2 rounded">
                    <i class="feather-link-2 me-2"></i>
                    <span class="text-nowrap">Copy Link</span>
                </a>
                <a href="javascript:void(0)" class="d-flex">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add Contractors"><i class="feather-plus"></i></div>
                </a>
                <a href="javascript:void(0)" class="d-flex successAlertMessage">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Remainder Notify"><i class="feather-bell"></i></div>
                </a>
                <a href="javascript:void(0)" class="d-flex successAlertMessage">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add to Favorite"><i class="feather-star"></i></div>
                </a>
                <a href="javascript:void(0)" class="d-flex successAlertMessage">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add to Calendar"><i class="feather-calendar"></i></div>
                </a>
                <div class="dropdown d-none d-sm-block">
                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,25">
                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                            <i class="feather-more-vertical"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-eye-off me-3"></i>
                                <span>Make Unread</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-sliders me-3"></i>
                                <span>Filter Messages</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-archive me-3"></i>
                                <span>Make as Archive</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-link-2 me-3"></i>
                                <span>Attach files</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-calendar me-3"></i>
                                <span>Set Due Date</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-eye me-3"></i>
                                <span>Follow Task</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-bookmark me-3"></i>
                                <span>Apply Labels</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-alert-triangle me-3"></i>
                                <span>Report Spam</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-alert-octagon me-3"></i>
                                <span>Report phishing</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-bell-off me-3"></i>
                                <span>Mute Conversion</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-slash me-3"></i>
                                <span>Block Conversion</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-trash-2 me-3"></i>
                                <span>Delete Conversion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Status:</label>
                        <select class="form-control" data-select2-selector="status">
                            <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                            <option value="secondary" data-bg="bg-secondary">Pending</option>
                            <option value="success" data-bg="bg-success">Completed</option>
                            <option value="danger" data-bg="bg-danger">Rejected</option>
                            <option value="warning" data-bg="bg-warning">Upcoming</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Priority:</label>
                        <select class="form-select form-control" data-select2-selector="priority">
                            <option value="primary" data-bg="bg-primary">Low</option>
                            <option value="teal" data-bg="bg-teal">Normal</option>
                            <option value="success" data-bg="bg-success">Medium</option>
                            <option value="warning" data-bg="bg-warning" selected>High</option>
                            <option value="danger" data-bg="bg-danger">Urgent</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Labels:</label>
                        <select class="form-select form-control" data-select2-selector="label">
                            <option value="primary" data-bg="bg-primary">Team</option>
                            <option value="teal" data-bg="bg-teal">Primary</option>
                            <option value="success" data-bg="bg-success">Updates</option>
                            <option value="warning" data-bg="bg-warning">Personal</option>
                            <option value="danger" data-bg="bg-danger" selected>Promotions</option>
                            <option value="indigo" data-bg="bg-indigo">Customs</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Types:</label>
                        <select class="form-select form-control" data-select2-selector="type">
                            <option value="primary" data-bg="bg-primary" selected>New</option>
                            <option value="teal" data-bg="bg-teal">Pending</option>
                            <option value="success" data-bg="bg-success">Progress</option>
                            <option value="warning" data-bg="bg-warning">Completed</option>
                            <option value="danger" data-bg="bg-danger">Everythings</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Tags:</label>
                        <select class="form-select form-control" data-select2-selector="tag" multiple>
                            <option value="primary" data-bg="bg-primary">Team</option>
                            <option value="teal" data-bg="bg-teal">Primary</option>
                            <option value="success" data-bg="bg-success">Updates</option>
                            <option value="warning" data-bg="bg-warning" selected>Personal</option>
                            <option value="danger" data-bg="bg-danger">Promotions</option>
                            <option value="indigo" data-bg="bg-indigo">Customs</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Assignee:</label>
                        <select class="form-select form-control" data-select2-selector="user" multiple>
                            <option value="alex@outlook.com" data-user="1" selected>alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                            <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="9">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div id="taskDateRange">
                        <label class="form-label">Date Range:</label>
                        <div class="input-group date input-daterange">
                            <input type="text" name="range-start" class="form-control" placeholder="Start date..." autocomplete="off">
                            <span class="input-group-text">to</span>
                            <input type="text" name="range-end" class="form-control" placeholder="End date..." autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-5">
            <!--! BEGIN: Checklist !-->
            <div class="checklist">
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        <h2 class="fs-16 fw-bold mb-1">Checklist</h2>
                        <span class="fs-12 text-muted">Issues found checklist</span>
                    </div>
                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                        <i class="feather-info"></i>
                    </a>
                </div>
                <ul class="list-unstyled" id="checklist">
                    <li class="checked">Tested, debugged, and shipped 10s of 1000s of lines of code to various development teams.</li>
                    <li>Introduced Kanban Board style ticketing system to promote highly.</li>
                    <li>Utilized HTML, CSS, and JavaScript to create 100+ responsive landing pages for both company and client.</li>
                    <li class="checked">Rewrote HTML to meet industry and company standards for SEO and Accessibility.</li>
                    <li>Led bi-weekly stand-up to ensure team worked effectively.</li>
                    <li>Worked with Quality Assurance to get new pages/products tested.</li>
                </ul>
                <div class="input-group mt-3">
                    <input id="checklistInput" type="text" class="form-control" placeholder="Title...">
                    <a href="javascript:void(0)" class="input-group-text addCheckList" onclick="newElement()">
                        <i class="feather-plus me-2"></i>
                        <span>Add Checklist</span>
                    </a>
                </div>
            </div>
            <!--! END: Checklist !-->
            <hr class="my-5">
            <!--! BEGIN: Notes !-->
            <div class="notes">
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        <h2 class="fs-16 fw-bold mb-1">Notes</h2>
                        <span class="fs-12 text-muted">Task note list</span>
                    </div>
                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                        <i class="feather-info"></i>
                    </a>
                </div>
                <div class="editor">
                    <div class="ht-200" id="notesEditor"></div>
                </div>
            </div>
            <!--! END: Notes !-->
            <hr class="my-5">
            <!--! BEGIN: Comments !-->
            <div class="comments">
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        <h2 class="fs-16 fw-700 mb-1">Comments</h2>
                        <small class="text-muted">Responses for this tasks</small>
                    </div>
                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                        <i class="feather-info"></i>
                    </a>
                </div>
                <!--! BEGIN: comment !-->
                <div class="d-flex mb-4">
                    <div class="avatar-image me-3">
                        <a href="javascript:void(0);">
                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="">
                        <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                            <span>Alexandra Della</span>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                            <span class="fs-10 text-uppercase text-muted d-none d-sm-block">57 Min Ago</span>
                        </a>
                        <div class="d-flex align-items-center">
                            <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                            <div class="dropdown ms-2">
                                <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                    <i class="feather-more-vertical fs-10"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off fs-10 me-3"></i>
                                            <span class="fs-11">Mute</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-eye-off fs-10 me-3"></i>
                                            <span class="fs-11">Hide</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash fs-10 me-3"></i>
                                            <span class="fs-11">Block</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-flag fs-10 me-3"></i>
                                            <span class="fs-11">Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                            <a href="javascript:void(0);" class="text-muted">Like (6)</a>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                            <a href="javascript:void(0);" class="text-muted">Reply</a>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                            <a href="javascript:void(0);" class="text-muted">5 Replies</a>
                        </div>
                    </div>
                </div>
                <!--! BEGIN: reply !-->
                <div class="ms-4">
                    <div class="ms-4">
                        <!--! BEGIN: single-reply !-->
                        <div class="d-flex mb-4">
                            <div class="avatar-image me-3">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="">
                                <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                    <span>Marianne Audrey</span>
                                    <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                    <span class="fs-10 text-uppercase text-muted d-none d-sm-block">50 Min Ago</span>
                                </a>
                                <div class="d-flex align-items-center">
                                    <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">Wishing calling is warrant settled was lucky.</p>
                                    <div class="dropdown ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical fs-10"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-bell-off fs-10 me-3"></i>
                                                    <span class="fs-11">Mute</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-eye-off fs-10 me-3"></i>
                                                    <span class="fs-11">Hide</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-slash fs-10 me-3"></i>
                                                    <span class="fs-11">Block</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-flag fs-10 me-3"></i>
                                                    <span class="fs-11">Report</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                                    <a href="javascript:void(0);" class="text-muted">Like</a>
                                    <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                    <a href="javascript:void(0);" class="text-muted">Reply</a>
                                </div>
                            </div>
                        </div>
                        <!--! BEGIN: single-reply !-->
                        <div class="d-flex mb-4">
                            <div class="avatar-image me-3">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="">
                                <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                    <span>Curtis Green</span>
                                    <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                    <span class="fs-10 text-uppercase text-muted d-none d-sm-block">45 Min Ago</span>
                                </a>
                                <div class="d-flex align-items-center">
                                    <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                                    <div class="dropdown ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical fs-10"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-bell-off fs-10 me-3"></i>
                                                    <span class="fs-11">Mute</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-eye-off fs-10 me-3"></i>
                                                    <span class="fs-11">Hide</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-slash fs-10 me-3"></i>
                                                    <span class="fs-11">Block</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-flag fs-10 me-3"></i>
                                                    <span class="fs-11">Report</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                                    <a href="javascript:void(0);" class="text-muted">Like (2)</a>
                                    <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                    <a href="javascript:void(0);" class="text-muted">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="ms-4 mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-center text-muted">
                                <i class="feather-more-horizontal fs-12"></i>
                                <span class="fs-10 text-uppercase ms-2 text-truncate-1-line">Load More Replies</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--! BEGIN: comment !-->
                <div class="d-flex mb-4">
                    <div class="avatar-image me-3">
                        <a href="javascript:void(0);">
                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="">
                        <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                            <span>Holland Scott</span>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                            <span class="fs-10 text-uppercase text-muted d-none d-sm-block">42 Min Ago</span>
                        </a>
                        <div class="d-flex align-items-center">
                            <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive.</p>
                            <div class="dropdown ms-2">
                                <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                    <i class="feather-more-vertical fs-10"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off fs-10 me-3"></i>
                                            <span class="fs-11">Mute</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-eye-off fs-10 me-3"></i>
                                            <span class="fs-11">Hide</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash fs-10 me-3"></i>
                                            <span class="fs-11">Block</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-flag fs-10 me-3"></i>
                                            <span class="fs-11">Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                            <a href="javascript:void(0);" class="text-muted">Like (8)</a>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                            <a href="javascript:void(0);" class="text-muted">Reply</a>
                        </div>
                    </div>
                </div>
                <!--! BEGIN: comment !-->
                <div class="d-flex mb-4">
                    <div class="avatar-image me-3">
                        <a href="javascript:void(0);">
                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="">
                        <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                            <span>Olive Delarosa</span>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                            <span class="fs-10 text-uppercase text-muted d-none d-sm-block">34 Min Ago</span>
                        </a>
                        <div class="d-flex align-items-center">
                            <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">Dependent on so extremely delivered by. Yet no jokes worse her why.</p>
                            <div class="dropdown ms-2">
                                <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                    <i class="feather-more-vertical fs-10"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off fs-10 me-3"></i>
                                            <span class="fs-11">Mute</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-eye-off fs-10 me-3"></i>
                                            <span class="fs-11">Hide</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash fs-10 me-3"></i>
                                            <span class="fs-11">Block</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-flag fs-10 me-3"></i>
                                            <span class="fs-11">Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                            <a href="javascript:void(0);" class="text-muted">Like (8)</a>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                            <a href="javascript:void(0);" class="text-muted">Reply</a>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <label class="mb-1">Add Comment</label>
                    <textarea rows="5" class="form-control" placeholder="Your comment...."></textarea>
                    <a href="javascript:void(0);" class="btn btn-primary d-inline-block mt-4">Add Comment</a>
                </div>
            </div>
            <!--! END: Comments !-->
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->
