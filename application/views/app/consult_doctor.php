<!--begin::Head-->
<head>
    <title>Video Consultation | SihatXpress</title>
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
                                    Video Consultation
                                </h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript:void(0)" onclick="confirmTerminateSession()" class="text-muted text-hover-primary">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <li class="breadcrumb-item text-muted">Video Consultation</li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3">
                                <a href="javascript:void(0)" onclick="confirmTerminateSession()" class="btn btn-sm fw-bold btn-gradient-primary px-4 py-2 d-flex align-items-center">
                                    <i class="ki-duotone ki-arrow-left fs-2 me-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    Back to Dashboard
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
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-8">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-body p-0">
                                            <!--begin::Video container-->
                                            <div class="position-relative bg-dark rounded min-h-400px">
                                                <!--begin::Main video-->
                                                <div class="position-absolute top-0 start-0 w-100 h-100">
                                                    <img src="assets/media/avatars/300-1.jpg" class="w-100 h-100 object-fit-cover" alt="Doctor Video" />
                                                </div>
                                                <!--end::Main video-->
                                                
                                                <!--begin::Small video-->
                                                <div class="position-absolute bottom-0 end-0 w-200px h-150px bg-dark rounded m-5">
                                                    <img src="assets/media/avatars/300-2.jpg" class="w-100 h-100 object-fit-cover rounded" alt="Your Video" />
                                                </div>
                                                <!--end::Small video-->
                                                
                                                <!--begin::Meeting info-->
                                                <div class="position-absolute top-0 start-0 p-5">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="assets/media/avatars/300-1.jpg" alt="Dr. Sarah Johnson" />
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <span class="text-white fw-bold fs-5">Dr. Sarah Johnson</span>
                                                            <span class="text-white opacity-75">General Physician</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Meeting info-->
                                                
                                                <!--begin::Controls-->
                                                <div class="position-absolute bottom-0 start-0 w-100 p-5">
                                                    <div class="d-flex justify-content-center gap-5">
                                                        <button class="btn btn-icon btn-light btn-active-light-primary rounded-circle w-40px h-40px">
                                                            <i class="ki-duotone ki-microphone fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <button class="btn btn-icon btn-light btn-active-light-primary rounded-circle w-40px h-40px">
                                                            <i class="ki-duotone ki-video fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <button class="btn btn-icon btn-light btn-active-light-primary rounded-circle w-40px h-40px">
                                                            <i class="ki-duotone ki-message-text-2 fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <button class="btn btn-icon btn-light btn-active-light-primary rounded-circle w-40px h-40px">
                                                            <i class="ki-duotone ki-screen-share fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <button class="btn btn-danger rounded-circle w-50px h-50px">
                                                            <i class="ki-duotone ki-phone fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end::Controls-->
                                            </div>
                                            <!--end::Video container-->
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                                
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Health Measurements</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Your self-checkup results</span>
                                            </h3>
                                        </div>
                                        <div class="card-body pt-5">
                                            <!--begin::Health measurements-->
                                            <div class="d-flex flex-column gap-5 mb-5">
                                                <!--begin::Measurement - Pulse & Oxygen-->
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="symbol symbol-30px me-3">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-heart-pulse fs-2 text-primary">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bold text-gray-800">Pulse Rate & Oxygen</span>
                                                            <span class="text-gray-500 fs-7">Measured 10 minutes ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light-primary rounded p-5">
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <span class="text-gray-600">Pulse Rate:</span>
                                                            <span class="fw-bold text-gray-800">72 bpm</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-gray-600">Oxygen Saturation:</span>
                                                            <span class="fw-bold text-gray-800">98%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Measurement - Pulse & Oxygen-->
                                                
                                                <!--begin::Measurement - Blood Pressure-->
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="symbol symbol-30px me-3">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-blood fs-2 text-success">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bold text-gray-800">Blood Pressure</span>
                                                            <span class="text-gray-500 fs-7">Measured 15 minutes ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light-success rounded p-5">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-gray-600">Blood Pressure:</span>
                                                            <span class="fw-bold text-gray-800">120/80 mmHg</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Measurement - Blood Pressure-->
                                                
                                                <!--begin::Measurement - Body Temperature-->
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="symbol symbol-30px me-3">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-thermometer fs-2 text-warning">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bold text-gray-800">Body Temperature</span>
                                                            <span class="text-gray-500 fs-7">Measured 20 minutes ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light-warning rounded p-5">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-gray-600">Temperature:</span>
                                                            <span class="fw-bold text-gray-800">37.2°C</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Measurement - Body Temperature-->
                                                
                                                <!--begin::Measurement - Blood Glucose-->
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="symbol symbol-30px me-3">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-duotone ki-droplet fs-2 text-info">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bold text-gray-800">Blood Glucose</span>
                                                            <span class="text-gray-500 fs-7">Measured 25 minutes ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light-info rounded p-5">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-gray-600">Glucose Level:</span>
                                                            <span class="fw-bold text-gray-800">95 mg/dL</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Measurement - Blood Glucose-->
                                                
                                                <!--begin::Measurement - Body Weight-->
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="symbol symbol-30px me-3">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-scale fs-2 text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bold text-gray-800">Body Weight</span>
                                                            <span class="text-gray-500 fs-7">Measured 30 minutes ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light-danger rounded p-5">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-gray-600">Weight:</span>
                                                            <span class="fw-bold text-gray-800">68.5 kg</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Measurement - Body Weight-->
                                            </div>
                                            <!--end::Health measurements-->
                                            
                                            <!--begin::Notes-->
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="symbol symbol-30px me-3">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-notepad fs-2 text-gray-600">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Notes</span>
                                                    </div>
                                                </div>
                                                <div class="bg-light rounded p-5">
                                                    <p class="text-gray-600 mb-0">All measurements are within normal ranges. No immediate concerns detected.</p>
                                                </div>
                                            </div>
                                            <!--end::Notes-->
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
    
    <!-- Terminate Session Confirmation -->
    <script>
        function confirmTerminateSession() {
            Swal.fire({
                title: 'Terminate Session?',
                text: 'Are you sure you want to leave the consultation page?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, leave page',
                cancelButtonText: 'No, stay here',
                reverseButtons: true,
                padding: '2em',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-light'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '<?=base_url('app')?>';
                }
            });
        }
    </script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

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