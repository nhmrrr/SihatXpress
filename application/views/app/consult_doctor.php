<!--begin::Head-->
<head>
    <title>Consult a Doctor | SihatXpress</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    
    <!--begin::Vendor Stylesheets-->
    <link href="<?= base_url('assets/plugins/custom/datatables/datatables.bundle.css')?>" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    
    <!--begin::Global Stylesheets Bundle-->
    <link href="<?= base_url('assets/plugins/global/plugins.bundle.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/style.bundle.css')?>" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="light-header" data-kt-app-header-fixed="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                    Consult a Doctor
                                </h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="<?=base_url('app')?>" class="text-muted text-hover-primary">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <li class="breadcrumb-item text-muted">Consult a Doctor</li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3">
                                <a href="javascript:history.back()" class="btn btn-sm fw-bold btn-primary">
                                    <i class="ki-duotone ki-arrow-left fs-2"></i>
                                    Back
                                </a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    
                    <!--begin::Hero Section-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                        <!--begin::Card body-->
                        <div class="card-body pt-1 pb-1 mt-n1 me-n1">
                            <!--begin::Image-->
                            <div class="position-absolute top-50 end-0 me-5 translate-middle-y">
                                <img src="assets/media/illustrations/doctors.png" alt="" class="h-200px h-lg-300px" />
                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <div class="fs-2hx fw-bold text-white me-2 mb-3 lh-1 ls-n2">Virtual Doctor Consultation</div>
                                    <div class="fs-lg fw-semibold text-white opacity-75 mb-7 max-w-600px">Connect with qualified healthcare professionals from the comfort of your home. Get expert medical advice, prescriptions, and follow-up care.</div>
                                    <div class="d-flex">
                                        <a href="#doctors-section" class="btn btn-light btn-active-light-primary px-6">Find a Doctor</a>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Hero Section-->
                    
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="card card-flush h-md-100" style="background-color: #E1F0FF;">
                                        <div class="card-body py-9">
                                            <div class="d-flex flex-column align-items-center mb-5">
                                                <span class="svg-icon svg-icon-primary svg-icon-5x mb-5">
                                                    <i class="ki-duotone ki-profile-user fs-5x text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                <div class="fs-1 fw-bold text-dark mb-0">General Physicians</div>
                                                <div class="fs-6 fw-semibold text-gray-600 text-center">Consult with experienced general physicians for common health issues and routine check-ups</div>
                                            </div>
                                            <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_consult_doctor">
                                                Book Consultation
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="card card-flush h-md-100" style="background-color: #EEE5FF;">
                                        <div class="card-body py-9">
                                            <div class="d-flex flex-column align-items-center mb-5">
                                                <span class="svg-icon svg-icon-primary svg-icon-5x mb-5">
                                                    <i class="ki-duotone ki-heart fs-5x text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <div class="fs-1 fw-bold text-dark mb-0">Specialists</div>
                                                <div class="fs-6 fw-semibold text-gray-600 text-center">Connect with specialized doctors for specific health conditions and expert medical advice</div>
                                            </div>
                                            <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_consult_doctor">
                                                Book Consultation
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="card card-flush h-md-100" style="background-color: #F1FAFF;">
                                        <div class="card-body py-9">
                                            <div class="d-flex flex-column align-items-center mb-5">
                                                <span class="svg-icon svg-icon-primary svg-icon-5x mb-5">
                                                    <i class="ki-duotone ki-message-text-2 fs-5x text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                <div class="fs-1 fw-bold text-dark mb-0">Mental Health</div>
                                                <div class="fs-6 fw-semibold text-gray-600 text-center">Speak with mental health professionals in a safe and confidential environment</div>
                                            </div>
                                            <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_consult_doctor">
                                                Book Consultation
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-8">
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Available Doctors</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Choose from our verified healthcare professionals</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <div class="d-flex align-items-center position-relative">
                                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <input type="text" class="form-control form-control-solid w-250px ps-12" placeholder="Search doctors" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="row g-5">
                                                <!-- Doctor Cards here (keeping the existing doctor cards) -->
                                                <!--begin::Col-->
                                                <div class="col-xl-6">
                                                    <!--begin::Card-->
                                                    <div class="card card-flush h-md-100">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <!--begin::Title-->
                                                            <div class="card-title d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-5">
                                                                        <img src="assets/media/avatars/300-1.jpg" alt="Dr. Sarah Johnson" />
                                                                    </div>
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fw-bold text-gray-800 fs-5">Dr. Sarah Johnson</span>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">General Physician</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                            <!--begin::Toolbar-->
                                                            <div class="card-toolbar">
                                                                <span class="badge badge-light-success">Available Now</span>
                                                            </div>
                                                            <!--end::Toolbar-->
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-1">
                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-wrap mb-5">
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">15 years</span>
                                                                    <div class="fw-semibold text-gray-500">Experience</div>
                                                                </div>
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">4.8</span>
                                                                    <div class="fw-semibold text-gray-500">Rating</div>
                                                                </div>
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">$50</span>
                                                                    <div class="fw-semibold text-gray-500">Consultation Fee</div>
                                                                </div>
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Description-->
                                                            <div class="fs-6 fw-semibold text-gray-600 mb-5">Specializes in general health check-ups, preventive care, and managing chronic conditions.</div>
                                                            <!--end::Description-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex">
                                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary flex-shrink-0" data-bs-toggle="modal" data-bs-target="#kt_modal_consult_doctor">Schedule Consultation</a>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-xl-6">
                                                    <!--begin::Card-->
                                                    <div class="card card-flush h-md-100">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <!--begin::Title-->
                                                            <div class="card-title d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-5">
                                                                        <img src="assets/media/avatars/300-2.jpg" alt="Dr. Michael Chen" />
                                                                    </div>
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fw-bold text-gray-800 fs-5">Dr. Michael Chen</span>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Cardiologist</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                            <!--begin::Toolbar-->
                                                            <div class="card-toolbar">
                                                                <span class="badge badge-light-success">Available Now</span>
                                                            </div>
                                                            <!--end::Toolbar-->
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-1">
                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-wrap mb-5">
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">12 years</span>
                                                                    <div class="fw-semibold text-gray-500">Experience</div>
                                                                </div>
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">4.9</span>
                                                                    <div class="fw-semibold text-gray-500">Rating</div>
                                                                </div>
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">$75</span>
                                                                    <div class="fw-semibold text-gray-500">Consultation Fee</div>
                                                                </div>
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Description-->
                                                            <div class="fs-6 fw-semibold text-gray-600 mb-5">Expert in heart health, cardiovascular conditions, and preventive cardiology.</div>
                                                            <!--end::Description-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex">
                                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary flex-shrink-0" data-bs-toggle="modal" data-bs-target="#kt_modal_consult_doctor">Schedule Consultation</a>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-xl-6">
                                                    <!--begin::Card-->
                                                    <div class="card card-flush h-md-100">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <!--begin::Title-->
                                                            <div class="card-title d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-5">
                                                                        <img src="assets/media/avatars/300-3.jpg" alt="Dr. Emily Rodriguez" />
                                                                    </div>
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fw-bold text-gray-800 fs-5">Dr. Emily Rodriguez</span>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Pediatrician</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                            <!--begin::Toolbar-->
                                                            <div class="card-toolbar">
                                                                <span class="badge badge-light-success">Available Now</span>
                                                            </div>
                                                            <!--end::Toolbar-->
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-1">
                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-wrap mb-5">
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">8 years</span>
                                                                    <div class="fw-semibold text-gray-500">Experience</div>
                                                                </div>
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">4.7</span>
                                                                    <div class="fw-semibold text-gray-500">Rating</div>
                                                                </div>
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">$60</span>
                                                                    <div class="fw-semibold text-gray-500">Consultation Fee</div>
                                                                </div>
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Description-->
                                                            <div class="fs-6 fw-semibold text-gray-600 mb-5">Specializes in child health, development, and common pediatric conditions.</div>
                                                            <!--end::Description-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex">
                                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary flex-shrink-0" data-bs-toggle="modal" data-bs-target="#kt_modal_consult_doctor">Schedule Consultation</a>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-xl-6">
                                                    <!--begin::Card-->
                                                    <div class="card card-flush h-md-100">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <!--begin::Title-->
                                                            <div class="card-title d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-5">
                                                                        <img src="assets/media/avatars/300-4.jpg" alt="Dr. James Wilson" />
                                                                    </div>
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fw-bold text-gray-800 fs-5">Dr. James Wilson</span>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Dermatologist</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                            <!--begin::Toolbar-->
                                                            <div class="card-toolbar">
                                                                <span class="badge badge-light-success">Available Now</span>
                                                            </div>
                                                            <!--end::Toolbar-->
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-1">
                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-wrap mb-5">
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">10 years</span>
                                                                    <div class="fw-semibold text-gray-500">Experience</div>
                                                                </div>
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">4.6</span>
                                                                    <div class="fw-semibold text-gray-500">Rating</div>
                                                                </div>
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                                                    <span class="fs-6 text-gray-800 fw-bold">$65</span>
                                                                    <div class="fw-semibold text-gray-500">Consultation Fee</div>
                                                                </div>
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Description-->
                                                            <div class="fs-6 fw-semibold text-gray-600 mb-5">Expert in skin conditions, dermatological treatments, and cosmetic procedures.</div>
                                                            <!--end::Description-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex">
                                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary flex-shrink-0" data-bs-toggle="modal" data-bs-target="#kt_modal_consult_doctor">Schedule Consultation</a>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-xl-100" style="background-color: #F9F9F9;">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Why Choose Us?</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Benefits of our online consultation</span>
                                            </h3>
                                        </div>
                                        <div class="card-body pt-5">
                                            <div class="d-flex flex-column gap-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px symbol-circle me-5" style="background-color: #E8FFF3;">
                                                        <i class="ki-duotone ki-verify fs-2 text-success"></i>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Verified Doctors</span>
                                                        <span class="text-gray-600">All our doctors are verified professionals</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px symbol-circle me-5" style="background-color: #FFF5F8;">
                                                        <i class="ki-duotone ki-security-user fs-2 text-primary"></i>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Private & Secure</span>
                                                        <span class="text-gray-600">Your data is protected and confidential</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px symbol-circle me-5" style="background-color: #F8F5FF;">
                                                        <i class="ki-duotone ki-timer fs-2 text-primary"></i>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">24/7 Support</span>
                                                        <span class="text-gray-600">Access healthcare anytime, anywhere</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer">
                    <!--begin::Footer container-->
                    <div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2025&copy;</span>
                            <a href="" target="_blank" class="text-gray-800 text-hover-primary">SihatXpress</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->
    </div>

    <!--begin::Modal - Consult Doctor-->
    <div class="modal fade" id="kt_modal_consult_doctor" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Schedule Consultation</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_consult_doctor_form" class="form">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" data-kt-element="options" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_consult_doctor_header" data-kt-scroll-wrappers="#kt_modal_consult_doctor_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Consultation Type</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select consultation type" data-hide-search="true" name="consultation_type">
                                    <option></option>
                                    <option value="video">Video Call</option>
                                    <option value="chat">Chat</option>
                                    <option value="voice">Voice Call</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Date & Time</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="Pick a date" name="date" id="kt_datepicker_consultation" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Reason for Consultation</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid" rows="4" name="reason" placeholder="Describe your symptoms or reason for consultation"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fw-semibold fs-6 mb-2">Upload Medical Records (Optional)</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" class="form-control form-control-solid" name="medical_records" />
                                <!--end::Input-->
                                <div class="text-muted fs-7 mt-1">Upload any relevant medical records, test results, or images</div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Schedule Consultation</span>
                                <span class="indicator-progress">Please wait... 
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Consult Doctor-->

    <script>
        // Initialize datepicker for consultation scheduling
        document.addEventListener('DOMContentLoaded', function() {
            // This would be replaced with actual datepicker initialization
            // For now, it's just a placeholder
            console.log('Datepicker would be initialized here');
            
            // Add event listeners for doctor selection
            const doctorCards = document.querySelectorAll('.card-flush');
            doctorCards.forEach(card => {
                const consultButton = card.querySelector('a[data-bs-toggle="modal"]');
                if (consultButton) {
                    consultButton.addEventListener('click', function() {
                        // Get doctor name from the card
                        const doctorName = card.querySelector('.fw-bold.text-gray-800.fs-5').textContent;
                        const doctorSpecialty = card.querySelector('.text-muted.fw-semibold.text-muted.d-block.fs-7').textContent;
                        
                        // Update modal title with doctor name
                        const modalTitle = document.querySelector('#kt_modal_consult_doctor .modal-title h2');
                        if (modalTitle) {
                            modalTitle.textContent = `Schedule Consultation with ${doctorName}`;
                        }
                        
                        // You could also store the doctor ID in a hidden field for form submission
                        // const doctorIdInput = document.createElement('input');
                        // doctorIdInput.type = 'hidden';
                        // doctorIdInput.name = 'doctor_id';
                        // doctorIdInput.value = doctorId; // You would need to add this data attribute to the card
                        // document.getElementById('kt_modal_consult_doctor_form').appendChild(doctorIdInput);
                    });
                }
            });
        });
    </script>

    <style>
        .timeline {
            position: relative;
            padding-left: 0;
        }
        
        .timeline-item {
            position: relative;
            padding-left: 40px;
            padding-bottom: 20px;
        }
        
        .timeline-line {
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: #E4E6EF;
        }
        
        .timeline-icon {
            position: absolute;
            left: 0;
            top: 0;
        }
        
        .timeline-content {
            position: relative;
        }
        
        /* Custom styles for doctor cards */
        .card-flush {
            transition: all 0.3s ease;
        }
        
        .card-flush:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Hero section styles */
        .card.bgi-no-repeat {
            background-size: cover;
            background-position: right center;
        }
        
        /* Custom button styles */
        .btn-light.btn-active-light-primary:hover {
            background-color: #f1f8ff;
            color: #009ef7;
        }
    </style>

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle-->
    <script src="<?= base_url('assets/plugins/global/plugins.bundle.js')?>"></script>
    <script src="<?= base_url('assets/js/scripts.bundle.js')?>"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript-->
    <script src="<?= base_url('assets/plugins/custom/datatables/datatables.bundle.js')?>"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript-->
    <script src="<?= base_url('assets/js/custom/apps/user-management/users/list/table.js')?>"></script>
    <script src="<?= base_url('assets/js/widgets.bundle.js')?>"></script>
    <script src="<?= base_url('assets/js/custom/widgets.js')?>"></script>
    <script src="<?= base_url('assets/js/custom/apps/chat/chat.js')?>"></script>
    <script src="<?= base_url('assets/js/custom/utilities/modals/upgrade-plan.js')?>"></script>
    <script src="<?= base_url('assets/js/custom/utilities/modals/create-app.js')?>"></script>
    <script src="<?= base_url('assets/js/custom/utilities/modals/new-target.js')?>"></script>
    <script src="<?= base_url('assets/js/custom/utilities/modals/users-search.js')?>"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body--> 