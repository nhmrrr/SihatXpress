<!--begin::Head-->
<head>
    <title>Body Weight | SihatXpress</title>
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
                                    Body Weight
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
                                    <li class="breadcrumb-item text-muted">Body Weight</li>
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
                    
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">How to Measure</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Tips for accurate weight measurement</span>
                                            </h3>
                                        </div>
                                        <div class="card-body pt-5">
                                            <!--begin::Video tutorial-->
                                            <div class="position-relative bg-dark rounded min-h-300px mb-5">
                                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                                    <div class="symbol symbol-100px">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-play fs-1 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <img src="assets-landing/img/health/weight.jpg" class="w-100 h-100 object-fit-cover rounded" alt="Body Weight Tutorial" />
                                            </div>
                                            <!--end::Video tutorial-->
                                            
                                           
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
                                                <span class="card-label fw-bold text-gray-800">Your Measurements</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Record and track your weight</span>
                                            </h3>
                                        </div>
                                        <div class="card-body pt-5">
                                            <!--begin::Current measurement-->
                                            <div class="d-flex flex-column mb-10">
                                                <h4 class="fw-bold text-gray-800 mb-3">Latest Measurement</h4>
                                                <div class="bg-light-primary rounded p-5">
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <span class="text-gray-600">Date & Time:</span>
                                                        <span class="fw-bold text-gray-800">Today, 7:30 AM</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <span class="text-gray-600">Weight:</span>
                                                        <span class="fw-bold text-gray-800">70.5 kg</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <span class="text-gray-600">BMI:</span>
                                                        <span class="fw-bold text-gray-800">22.4 (Normal)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Current measurement-->
                                            
                                            <!--begin::History-->
                                            <div class="d-flex flex-column">
                                                <h4 class="fw-bold text-gray-800 mb-3">Weight History</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                                        <thead>
                                                            <tr class="fw-bold text-muted bg-light">
                                                                <th class="min-w-150px">Date</th>
                                                                <th class="min-w-100px">Weight</th>
                                                                <th class="min-w-100px">BMI</th>
                                                                <th class="min-w-100px text-end">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Today, 7:30 AM</td>
                                                                <td>70.5 kg</td>
                                                                <td>22.4</td>
                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <i class="ki-duotone ki-eye fs-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Yesterday, 7:45 AM</td>
                                                                <td>70.8 kg</td>
                                                                <td>22.5</td>
                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <i class="ki-duotone ki-eye fs-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3 days ago, 7:30 AM</td>
                                                                <td>71.0 kg</td>
                                                                <td>22.6</td>
                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <i class="ki-duotone ki-eye fs-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end::History-->
                                            
                                            <!--begin::Actions-->
                                            <div class="d-flex mt-10">
                                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_measurement">
                                                    <i class="ki-duotone ki-plus fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    Add New Measurement
                                                </a>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-12">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Step-by-Step Instructions</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Follow these steps for accurate measurement</span>
                                            </h3>
                                        </div>
                                        <div class="card-body pt-5">
                                            <div class="d-flex flex-column gap-5">
                                                <div class="d-flex">
                                                    <div class="symbol symbol-30px me-3">
                                                        <span class="symbol-label bg-light-primary">
                                                            <span class="fw-bold text-primary">1</span>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Place Your Scale</span>
                                                        <span class="text-gray-600">Place your scale on a flat, hard surface. Avoid carpets or uneven floors.</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="symbol symbol-30px me-3">
                                                        <span class="symbol-label bg-light-primary">
                                                            <span class="fw-bold text-primary">2</span>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Prepare Yourself</span>
                                                        <span class="text-gray-600">Remove shoes and heavy clothing. Weigh yourself at the same time each day for consistency.</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="symbol symbol-30px me-3">
                                                        <span class="symbol-label bg-light-primary">
                                                            <span class="fw-bold text-primary">3</span>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Step on Scale</span>
                                                        <span class="text-gray-600">Stand still with your weight evenly distributed on both feet.</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="symbol symbol-30px me-3">
                                                        <span class="symbol-label bg-light-primary">
                                                            <span class="fw-bold text-primary">4</span>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Record Result</span>
                                                        <span class="text-gray-600">Wait for the reading to stabilize and record your weight.</span>
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

                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-12">
                                    <!--begin::Card-->
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Understanding Your Results</span>
                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">What your measurements mean</span>
                                            </h3>
                                        </div>
                                        <div class="card-body pt-5">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column gap-5">
                                                <div class="d-flex">
                                                    <div class="symbol symbol-30px me-3">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-scale fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">BMI Categories</span>
                                                        <span class="text-gray-600">Understanding your Body Mass Index</span>
                                                        <div class="mt-2">
                                                            <span class="badge badge-light-danger me-2">Underweight: Less than 18.5</span>
                                                            <span class="badge badge-light-success me-2">Normal: 18.5 - 24.9</span>
                                                            <span class="badge badge-light-warning me-2">Overweight: 25 - 29.9</span>
                                                            <span class="badge badge-light-danger me-2">Obese: 30 or greater</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="symbol symbol-30px me-3">
                                                        <span class="symbol-label bg-light-info">
                                                            <i class="ki-duotone ki-information fs-2 text-info">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800">Healthy Weight Tips</span>
                                                        <div class="mt-2">
                                                            <div class="d-flex mb-2">
                                                                <span class="fw-bold text-gray-800 me-2">Regular Monitoring:</span>
                                                                <span class="text-gray-600">Weigh yourself at the same time each day for consistent tracking</span>
                                                            </div>
                                                            <div class="d-flex mb-2">
                                                                <span class="fw-bold text-gray-800 me-2">Trend Analysis:</span>
                                                                <span class="text-gray-600">Focus on weekly trends rather than daily fluctuations</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold text-gray-800 me-2">Lifestyle Factors:</span>
                                                                <span class="text-gray-600">Consider diet, exercise, and sleep patterns when analyzing changes</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Info-->
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
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" data-kt-element="options" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_measurement_header" data-kt-scroll-wrappers="#kt_modal_add_measurement_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Date & Time</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="Pick a date" name="date" id="kt_datepicker_measurement" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Weight (kg)</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" step="0.1" class="form-control form-control-solid" name="weight" placeholder="Enter your weight" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fw-semibold fs-6 mb-2">Notes (Optional)</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid" rows="4" name="notes" placeholder="Add any notes about your measurement"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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

    <script>
        function completeCheckup() {
            Swal.fire({
                title: 'Great job!',
                text: "Your body weight checkup has been completed successfully!",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Back to Health Measurements",
                customClass: {
                    confirmButton: "btn btn-primary btn-lg"
                }
            }).then(function (result) {
                if (result.isConfirmed) {
                    localStorage.setItem('body-weight_completed', 'true');
                    window.location.href = '<?=base_url('app/health_measurements')?>';
                }
            });
        }
    </script>
    <!--end::Javascript-->
</body>
<!--end::Body--> 