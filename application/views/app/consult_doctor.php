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
    
    <style>
        @font-face {
            font-family: "keenicons-duotone";
            src: url("<?=base_url('assets/plugins/global/fonts/keenicons/keenicons-duotone.woff')?>") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        .ki-duotone {
            font-family: "keenicons-duotone" !important;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            position: relative;
            display: inline-block;
        }

        .ki-duotone > span {
            position: absolute;
            display: block;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        /* Microphone icon */
        .ki-microphone.ki-duotone .path1:before {
            content: "\f0c5";
        }
        .ki-microphone.ki-duotone .path2:before {
            content: "\f0c6";
        }

        /* Video icon */
        .ki-video.ki-duotone .path1:before {
            content: "\f0e9";
        }
        .ki-video.ki-duotone .path2:before {
            content: "\f0ea";
        }

        /* Message icon */
        .ki-message-text-2.ki-duotone .path1:before {
            content: "\f0b1";
        }
        .ki-message-text-2.ki-duotone .path2:before {
            content: "\f0b2";
        }

        /* Screen share icon */
        .ki-screen-share.ki-duotone .path1:before {
            content: "\f0d3";
        }
        .ki-screen-share.ki-duotone .path2:before {
            content: "\f0d4";
        }

        /* Phone icon */
        .ki-phone.ki-duotone .path1:before {
            content: "\f0c1";
        }
        .ki-phone.ki-duotone .path2:before {
            content: "\f0c2";
        }

        /* Health measurement icons */
        .ki-heart-pulse.ki-duotone .path1:before {
            content: "\f089";
        }
        .ki-heart-pulse.ki-duotone .path2:before {
            content: "\f08a";
        }

        .ki-blood.ki-duotone .path1:before {
            content: "\f023";
        }
        .ki-blood.ki-duotone .path2:before {
            content: "\f024";
        }

        .ki-thermometer.ki-duotone .path1:before {
            content: "\f0db";
        }
        .ki-thermometer.ki-duotone .path2:before {
            content: "\f0dc";
        }

        .ki-droplet.ki-duotone .path1:before {
            content: "\f067";
        }
        .ki-droplet.ki-duotone .path2:before {
            content: "\f068";
        }

        .ki-scale.ki-duotone .path1:before {
            content: "\f0d1";
        }
        .ki-scale.ki-duotone .path2:before {
            content: "\f0d2";
        }

        .ki-notepad.ki-duotone .path1:before {
            content: "\f0b7";
        }
        .ki-notepad.ki-duotone .path2:before {
            content: "\f0b8";
        }

        /* Fix for duotone effect */
        .ki-duotone .path2 {
            opacity: 0.4;
        }
    </style>
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
                                                    <img src="<?=base_url('assets-landing/img/video-doctor.png')?>" class="w-100 h-100 object-fit-cover" alt="Doctor Video" />
                                                </div>
                                                <!--end::Main video-->
                                                
                                                <!--begin::Small video-->
                                                <div class="position-absolute bottom-0 end-0 w-200px h-150px bg-dark rounded m-5">
                                                    <img src="<?=base_url('assets-landing/img/patient.png')?>" class="w-100 h-100 object-fit-cover rounded" alt="Your Video" />
                                                </div>
                                                <!--end::Small video-->
                                                
                                                <!--begin::Meeting info-->
                                                <div class="position-absolute top-0 start-0 p-5">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px me-3">
                                                            <img src="<?=base_url('assets-landing/img/doctor.png')?>" alt="Dr. Sarah Johnson" />
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <span class="text-white fw-bold fs-5">Dr. Kunalan</span>
                                                            <span class="text-white opacity-75">General Physician</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Meeting info-->
                                                
                                                <!--begin::Controls-->
                                                <div class="position-absolute bottom-0 start-0 w-100 p-5">
                                                    <div class="d-flex justify-content-center gap-5">
                                                        <button class="btn btn-icon btn-light btn-active-light-primary rounded-circle w-40px h-40px">
                                                            <span class="svg-icon">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19V15C15 13.3431 13.6569 12 12 12C10.3431 12 9 13.3431 9 15V19C9 20.6569 10.3431 22 12 22Z" fill="currentColor"/>
                                                                    <path d="M12 2C11.4477 2 11 2.44772 11 3V7C11 7.55228 11.4477 8 12 8C12.5523 8 13 7.55228 13 7V3C13 2.44772 12.5523 2 12 2Z" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-icon btn-light btn-active-light-primary rounded-circle w-40px h-40px">
                                                            <span class="svg-icon">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor"/>
                                                                    <path d="M14.5 13.5C14.5 14.3284 13.8284 15 13 15H7C6.17157 15 5.5 14.3284 5.5 13.5V10.5C5.5 9.67157 6.17157 9 7 9H13C13.8284 9 14.5 9.67157 14.5 10.5V13.5Z" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-icon btn-light btn-active-light-primary rounded-circle w-40px h-40px">
                                                            <span class="svg-icon">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor"/>
                                                                    <path d="M6 7H18V13C18 14.1046 17.1046 15 16 15H8C6.89543 15 6 14.1046 6 13V7Z" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-icon btn-light btn-active-light-primary rounded-circle w-40px h-40px">
                                                            <span class="svg-icon">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor"/>
                                                                    <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-danger rounded-circle w-50px h-50px">
                                                            <span class="svg-icon svg-icon-white">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"/>
                                                                    <path d="M12.0006 18C12.0006 18 19.8016 11.9993 19.8016 9.24232C19.8016 7.01352 18.0191 5.24166 15.8018 5.24166C14.2615 5.24166 12.9067 6.07836 12.0006 7.38434C11.0946 6.07903 9.73895 5.24166 8.19869 5.24166C5.98138 5.24166 4.19885 7.01352 4.19885 9.24232C4.19885 11.9993 12.0006 18 12.0006 18Z" fill="currentColor"/>
                                                                </svg>
                                                            </span>
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