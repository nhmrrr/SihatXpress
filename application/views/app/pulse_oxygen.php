<!--begin::Head-->
<head>
    <title>Pulse Rate & Oxygen | SihatXpress</title>
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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-2 flex-column justify-content-center my-0">
                                    Pulse Rate & Oxygen
                                </h1>
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <li class="breadcrumb-item text-dark">
                                        <a href="<?=base_url('app')?>" class="text-dark text-hover-primary">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <li class="breadcrumb-item text-dark">
                                        <a href="<?=base_url('app/health_measurements')?>" class="text-dark text-hover-primary">Health Measurements</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <li class="breadcrumb-item text-dark">Pulse Rate & Oxygen</li>
                                </ul>
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
                    
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-dark">How to Measure</span>
                                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Follow these steps for accurate measurement</span>
                                            </h3>
                                        </div>
                                        <div class="card-body pt-5">
                                            <div class="position-relative">
                                                <img src="assets-landing/img/health/pulse-tutorial.jpg" class="w-100 rounded" alt="Tutorial">
                                            </div>
                                            <div class="mt-5">
                                                <div class="d-flex flex-column gap-5">
                                                    <div class="d-flex align-items-start">
                                                        <span class="bullet bullet-vertical bg-primary h-40px w-3px"></span>
                                                        <div class="ms-4">
                                                            <h4 class="text-dark fw-bold mb-2">1. Prepare the Device</h4>
                                                            <p class="text-gray-600 fs-6">Ensure your pulse oximeter is clean and batteries are working</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start">
                                                        <span class="bullet bullet-vertical bg-primary h-40px w-3px"></span>
                                                        <div class="ms-4">
                                                            <h4 class="text-dark fw-bold mb-2">2. Position Your Finger</h4>
                                                            <p class="text-gray-600 fs-6">Insert your index finger into the device, nail side up</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start">
                                                        <span class="bullet bullet-vertical bg-primary h-40px w-3px"></span>
                                                        <div class="ms-4">
                                                            <h4 class="text-dark fw-bold mb-2">3. Wait for Reading</h4>
                                                            <p class="text-gray-600 fs-6">Keep your hand still until the reading stabilizes</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                                
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-dark">Your Measurements</span>
                                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Latest readings and history</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_measurement">
                                                    <i class="ki-duotone ki-plus fs-2"></i>
                                                    Add New
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body pt-5">
                                            <!--begin::Latest reading-->
                                            <div class="bg-light-primary rounded p-5 mb-7">
                                                <h4 class="text-dark fw-bold mb-5">Latest Reading</h4>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="text-gray-600 fs-6">Date & Time:</span>
                                                    <span class="text-dark fw-bold fs-6">Today, 10:30 AM</span>
                                                </div>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="text-gray-600 fs-6">Pulse Rate:</span>
                                                    <span class="text-dark fw-bold fs-6">72 bpm</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="text-gray-600 fs-6">Oxygen Level:</span>
                                                    <span class="text-dark fw-bold fs-6">98%</span>
                                                </div>
                                            </div>
                                            <!--end::Latest reading-->
                                            
                                            <!--begin::History-->
                                            <div class="table-responsive">
                                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                    <thead>
                                                        <tr class="fw-bold text-muted bg-light">
                                                            <th class="min-w-150px">Date</th>
                                                            <th class="min-w-100px">Pulse Rate</th>
                                                            <th class="min-w-100px">Oxygen</th>
                                                            <th class="min-w-100px text-end">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Today, 10:30 AM</td>
                                                            <td>72 bpm</td>
                                                            <td>98%</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                    <i class="ki-duotone ki-eye fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yesterday, 9:15 AM</td>
                                                            <td>68 bpm</td>
                                                            <td>97%</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                    <i class="ki-duotone ki-eye fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3 days ago, 11:00 AM</td>
                                                            <td>70 bpm</td>
                                                            <td>98%</td>
                                                            <td class="text-end">
                                                                <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                    <i class="ki-duotone ki-eye fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::History-->
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-12">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-dark">Understanding Your Results</span>
                                                <span class="text-gray-400 mt-1 fw-semibold fs-6">What your measurements mean</span>
                                            </h3>
                                        </div>
                                        <div class="card-body pt-5">
                                            <div class="row g-5">
                                                <div class="col-md-6">
                                                    <h4 class="text-dark fw-bold mb-4">Pulse Rate (Heart Rate)</h4>
                                                    <div class="d-flex flex-column gap-3">
                                                        <div class="bg-light-success rounded p-3">
                                                            <span class="text-success fw-bold">Normal (60-100 bpm)</span>
                                                            <p class="text-gray-600 fs-7 mb-0">Healthy resting heart rate range</p>
                                                        </div>
                                                        <div class="bg-light-warning rounded p-3">
                                                            <span class="text-warning fw-bold">Below Normal (< 60 bpm)</span>
                                                            <p class="text-gray-600 fs-7 mb-0">May indicate bradycardia</p>
                                                        </div>
                                                        <div class="bg-light-danger rounded p-3">
                                                            <span class="text-danger fw-bold">Above Normal (> 100 bpm)</span>
                                                            <p class="text-gray-600 fs-7 mb-0">May indicate tachycardia</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="text-dark fw-bold mb-4">Oxygen Saturation (SpO2)</h4>
                                                    <div class="d-flex flex-column gap-3">
                                                        <div class="bg-light-success rounded p-3">
                                                            <span class="text-success fw-bold">Normal (95-100%)</span>
                                                            <p class="text-gray-600 fs-7 mb-0">Healthy oxygen saturation range</p>
                                                        </div>
                                                        <div class="bg-light-warning rounded p-3">
                                                            <span class="text-warning fw-bold">Below Normal (90-94%)</span>
                                                            <p class="text-gray-600 fs-7 mb-0">May indicate mild hypoxemia</p>
                                                        </div>
                                                        <div class="bg-light-danger rounded p-3">
                                                            <span class="text-danger fw-bold">Critical (< 90%)</span>
                                                            <p class="text-gray-600 fs-7 mb-0">Seek immediate medical attention</p>
                                                        </div>
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

                            <!-- Complete Checkup Button -->
                            <div class="text-center mt-15">
                                <button onclick="completeCheckup()" class="btn btn-lg btn-success px-8 py-4 shadow-lg d-flex align-items-center mx-auto">
                                    <i class="ki-duotone ki-check-circle fs-1 me-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="fs-2">Complete Checkup</span>
                                </button>
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

    <!--begin::Modal - Add Measurement-->
    <div class="modal fade" id="kt_modal_add_measurement" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Add New Measurement</h2>
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
                    <form id="kt_modal_add_measurement_form" class="form">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7">
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Date & Time</label>
                                <input type="text" class="form-control form-control-solid" placeholder="Pick date & time" name="datetime"/>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Pulse Rate (bpm)</label>
                                <input type="number" class="form-control form-control-solid" name="pulse_rate" placeholder="Enter pulse rate"/>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Oxygen Level (%)</label>
                                <input type="number" class="form-control form-control-solid" name="oxygen_level" placeholder="Enter oxygen level"/>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="fw-semibold fs-6 mb-2">Notes (Optional)</label>
                                <textarea class="form-control form-control-solid" rows="3" name="notes" placeholder="Add any notes about your measurement"></textarea>
                            </div>
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save Measurement</span>
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
    <!--end::Modal - Add Measurement-->

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

    <script>
        function completeCheckup() {
            Swal.fire({
                title: 'Great job!',
                text: "Your pulse rate and oxygen checkup has been completed successfully!",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Back to Health Measurements",
                customClass: {
                    confirmButton: "btn btn-primary btn-lg"
                }
            }).then(function (result) {
                if (result.isConfirmed) {
                    localStorage.setItem('pulse-oxygen_completed', 'true');
                    window.location.href = '<?=base_url('app/health_measurements')?>';
                }
            });
        }

        // Initialize date time picker
        $("#kt_modal_add_measurement_form [name=datetime]").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
</body>
<!--end::Body--> 