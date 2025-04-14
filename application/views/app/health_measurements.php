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
                    <h1 class="page-heading d-flex text-gray-900 fw-bold display-3 flex-column justify-content-center my-0">
                        Health Measurements
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="<?=base_url('app')?>" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Health Measurements</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <p class="fs-3">Select a health measurement to record your data</p>
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="javascript:history.back()" class="btn btn-sm btn-primary">
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
                <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                    <!-- Pulse Rate & Oxygen -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card" onclick="navigateToMeasurement('pulse-oxygen')">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="assets-landing/img/health/pulse-oxygen.png" alt="Pulse Rate & Oxygen" style="width: 150px; height: auto; margin-bottom: 20px;">
                                <h3 class="custom-font">Pulse Rate & Oxygen</h3>
                                <div class="card-info mt-3 text-center">
                                    <p>Record your heart rate and blood oxygen levels</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blood Pressure -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card" onclick="navigateToMeasurement('blood-pressure')">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="assets-landing/img/health/blood-pressure.png" alt="Blood Pressure" style="width: 150px; height: auto; margin-bottom: 20px;">
                                <h3 class="custom-font">Blood Pressure</h3>
                                <div class="card-info mt-3 text-center">
                                    <p>Track your systolic and diastolic blood pressure</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Body Temperature -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card" onclick="navigateToMeasurement('body-temperature')">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="assets-landing/img/health/temperature.png" alt="Body Temperature" style="width: 150px; height: auto; margin-bottom: 20px;">
                                <h3 class="custom-font">Body Temperature</h3>
                                <div class="card-info mt-3 text-center">
                                    <p>Record your body temperature readings</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blood Glucose -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card" onclick="navigateToMeasurement('blood-glucose')">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="assets-landing/img/health/glucose.png" alt="Blood Glucose" style="width: 150px; height: auto; margin-bottom: 20px;">
                                <h3 class="custom-font">Blood Glucose</h3>
                                <div class="card-info mt-3 text-center">
                                    <p>Monitor your blood sugar levels</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Body Weight -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card" onclick="navigateToMeasurement('body-weight')">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="assets-landing/img/health/weight.png" alt="Body Weight" style="width: 150px; height: auto; margin-bottom: 20px;">
                                <h3 class="custom-font">Body Weight</h3>
                                <div class="card-info mt-3 text-center">
                                    <p>Track your weight changes over time</p>
                                </div>
                            </div>
                        </div>
                    </div>
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

<script>
    function navigateToMeasurement(type) {
        // For now, just show an alert
        // In a real implementation, this would navigate to the specific measurement page
        alert('Navigating to ' + type + ' measurement page');
        
        // Example of how you might implement actual navigation:
        // window.location.href = '<?=base_url('app/measurement/')?>' + type;
    }
</script>

<style>
    .health-card {
        cursor: pointer;
        transition: 0.3s;
        border: 2px solid transparent;
        border-radius: 10px;
        height: 100%;
    }

    .health-card:hover {
        border-color: #0d6efd;
        box-shadow: 0 0 15px rgba(13, 110, 253, 0.3);
        transform: translateY(-5px);
    }

    .custom-font {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 10px;
    }
    
    .card-info p {
        color: #6c757d;
        font-size: 14px;
    }
</style> 