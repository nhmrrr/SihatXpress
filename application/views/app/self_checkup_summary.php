<!--begin::Head-->
<head>
    <title>Self Check Up Summary | SihatXpress</title>
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
                                    Self Check Up Summary
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
                                    <li class="breadcrumb-item text-muted">
                                        <a href="<?=base_url('app/health_measurements')?>" class="text-muted text-hover-primary">Health Measurements</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <li class="breadcrumb-item text-muted">Summary</li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3">
                                <a href="javascript:history.back()" class="btn btn-sm fw-bold btn-gradient-primary px-4 py-2 d-flex align-items-center">
                                    <i class="ki-duotone ki-arrow-left fs-2 me-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    Back to Health Measurements
                                </a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Summary Card-->
                            <div class="card card-flush mb-10">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column flex-md-row">
                                        <div class="w-100 w-md-50 bg-light-primary rounded-start p-10 p-md-15">
                                            <div class="d-flex flex-column">
                                                <h2 class="fs-1 fw-bold text-gray-800 mb-3">Health Check Summary</h2>
                                                <p class="text-gray-600 fs-6 mb-5">Your latest health measurements show that all your vital signs are within normal ranges. Keep maintaining your healthy lifestyle!</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label bg-white">
                                                            <i class="ki-duotone ki-health fs-2x text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Overall Health Status</span>
                                                        <span class="text-success fw-bold">Excellent</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 w-md-50 bg-light-success rounded-end p-10 p-md-15">
                                            <div class="d-flex flex-column h-100 justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <h3 class="fs-2 fw-bold text-gray-800 mb-3">Next Steps</h3>
                                                    <ul class="text-gray-600 fs-6 mb-0">
                                                        <li class="mb-2">Continue monitoring your health regularly</li>
                                                        <li class="mb-2">Maintain your current healthy lifestyle</li>
                                                        <li class="mb-2">Schedule a follow-up check in 3 months</li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex justify-content-end mt-5">
                                                    <a href="<?=base_url('app/consult_doctor')?>" class="btn btn-sm btn-success">
                                                        <i class="ki-duotone ki-message-text-2 fs-2 me-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        Consult a Doctor
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Summary Card-->

                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                <!-- Pulse Rate & Oxygen -->
                                <div class="col-xl-6">
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Pulse Rate & Oxygen</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Latest measurements</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <span class="badge badge-light-success">Normal</span>
                                            </div>
                                        </div>
                                        <div class="card-body pt-5">
                                            <div class="d-flex flex-column gap-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-heart-pulse fs-2x text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Pulse Rate</span>
                                                        <span class="text-gray-600">72 BPM (Normal)</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-oxygen fs-2x text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Blood Oxygen</span>
                                                        <span class="text-gray-600">98% (Normal)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Blood Pressure -->
                                <div class="col-xl-6">
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Blood Pressure</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Latest measurement</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <span class="badge badge-light-success">Normal</span>
                                            </div>
                                        </div>
                                        <div class="card-body pt-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-blood-pressure fs-2x text-warning">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold text-gray-800">120/80 mmHg</span>
                                                    <span class="text-gray-600">Normal Blood Pressure</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Body Temperature -->
                                <div class="col-xl-6">
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Body Temperature</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Latest measurement</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <span class="badge badge-light-success">Normal</span>
                                            </div>
                                        </div>
                                        <div class="card-body pt-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light-danger">
                                                        <i class="ki-duotone ki-thermometer fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold text-gray-800">36.5°C</span>
                                                    <span class="text-gray-600">Normal Body Temperature</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Blood Glucose -->
                                <div class="col-xl-6">
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Blood Glucose</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Latest measurement</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <span class="badge badge-light-success">Normal</span>
                                            </div>
                                        </div>
                                        <div class="card-body pt-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-blood-drop fs-2x text-info">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold text-gray-800">5.5 mmol/L</span>
                                                    <span class="text-gray-600">Normal Blood Glucose</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Body Weight -->
                                <div class="col-xl-6">
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Body Weight</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Latest measurement</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <span class="badge badge-light-success">Normal</span>
                                            </div>
                                        </div>
                                        <div class="card-body pt-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-duotone ki-scale fs-2x text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold text-gray-800">70.5 kg</span>
                                                    <span class="text-gray-600">BMI: 22.4 (Normal)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->

                            <!-- Health Tips Card -->
                            <div class="card card-flush mb-10">
                                <div class="card-header pt-7">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Health Tips</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Recommendations based on your measurements</span>
                                    </h3>
                                </div>
                                <div class="card-body pt-5">
                                    <div class="row g-5">
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-heart-pulse fs-2 text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold text-gray-800">Cardiovascular Health</span>
                                                    <span class="text-gray-600">Continue regular exercise to maintain your healthy heart rate.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-blood-pressure fs-2 text-warning">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold text-gray-800">Blood Pressure</span>
                                                    <span class="text-gray-600">Maintain a low-sodium diet to keep your blood pressure in check.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-blood-drop fs-2 text-info">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="fw-bold text-gray-800">Blood Glucose</span>
                                                    <span class="text-gray-600">Continue monitoring your blood sugar levels regularly.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Health Tips Card-->

                            <!-- Consult Doctor Button -->
                            <div class="d-flex justify-content-center mt-5 mb-10">
                                <a href="<?=base_url('app/consult_doctor')?>" class="btn btn-primary btn-lg px-8 py-4 shadow-lg d-flex align-items-center rounded-pill">
                                    <i class="ki-duotone ki-message-text-2 fs-1 me-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="fs-3">Consult a Doctor</span>
                                </a>
                            </div>
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

    <style>
        .btn-gradient-primary {
            background: linear-gradient(135deg, #009ef7 0%, #0054a6 100%);
            border: none;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 158, 247, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-gradient-primary:hover {
            background: linear-gradient(135deg, #0054a6 0%, #009ef7 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 158, 247, 0.4);
            color: white;
        }
        
        .btn-gradient-primary:active {
            transform: translateY(0);
            box-shadow: 0 2px 5px rgba(0, 158, 247, 0.3);
        }
    </style>
</body>
<!--end::Body--> 