@extends('admin.events.eventView.layout.main')
@section('title', 'Ngola News - Event View')
@section('content-eventView')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Events</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">View</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <a href="javascript:void(0);" class="btn btn-icon btn-light-brand">
                            <i class="feather-printer"></i>
                        </a>
                        <a href="leads-create.html" class="btn btn-icon btn-light-brand">
                            <i class="feather-edit"></i>
                        </a>
                        <div class="dropdown">
                            <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                data-bs-auto-close="outside">
                                <i class="feather-more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-user-x me-3"></i>
                                    <span>Make as Lost</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-delete me-3"></i>
                                    <span>Make as Junk</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-trash-2 me-3"></i>
                                    <span>Delete as Lead</span>
                                </a>
                            </div>
                        </div>
                        <a href="{{ route('admin.event.index')}}" class="btn btn-danger ">
                           <i class="feather-chevron-left me-2"></i>
                            <span>Voltar</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <div class="main-content">
            <div class="card card-body general-info">
                <div class="mb-4 d-flex align-items-center justify-content-between">
                    <h5 class="fw-bold mb-0">
                        <span class="d-block mb-2">General Information :</span>
                        <span class="fs-12 fw-normal text-muted d-block">General information for your event</span>
                    </h5>
                    <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Edit Event</a>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">Title</div>
                    <div class="col-lg-10 hstack gap-1">
                        <a href="javascript:void(0);" class="hstack gap-2">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-git-commit"></i>
                            </div>
                            <span>{{$event->title}}</span>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">Subtitle</div>
                    <div class="col-lg-10 hstack gap-1">
                        <a href="javascript:void(0);" class="hstack gap-2">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-facebook"></i>
                            </div>
                            <span>{{$event->subtitle}}</span>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">Author</div>
                    <div class="col-lg-10 hstack gap-1">
                        <a href="javascript:void(0);" class="hstack gap-2">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-airplay"></i>
                            </div>
                            <span>{{$event->authorId}}</span>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">Category</div>
                    <div class="col-lg-10 hstack gap-1">
                        <a href="javascript:void(0);" class="hstack gap-2">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-globe"></i>
                            </div>
                            <span>{{$event->categoryId}}</span>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">Country</div>
                    <div class="col-lg-10 hstack gap-1">
                        <a href="javascript:void(0);" class="hstack gap-2">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-clock"></i>
                            </div>
                            <span>{{$event->country}}</span>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">State</div>
                    <div class="col-lg-10 hstack gap-1">
                        <a href="javascript:void(0);" class="hstack gap-2">
                            <div class="avatar-image avatar-sm">
                                <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                            </div>
                            <span>{{$event->state}}</span>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">City</div>
                    <div class="col-lg-10 hstack gap-1">
                        <a href="javascript:void(0);" class="hstack gap-2">
                            <div class="avatar-image avatar-sm">
                                <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                            </div>
                            <span>{{$event->city}}</span>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">Status</div>
                    <div class="col-lg-10 hstack gap-1"><a href="javascript:void(0);"
                            class="badge bg-soft-teal text-teal">{{$event->status}}</a></div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">Description</div>
                    <div class="col-lg-10 hstack gap-1">{{$event->description}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
