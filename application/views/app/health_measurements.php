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
                    <a href="javascript:history.back()" class="btn btn-sm fw-bold btn-gradient-primary px-4 py-2 d-flex align-items-center">
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
                <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                    <!-- Pulse Rate & Oxygen -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card">
                            <div class="card-body">
                                <div class="image-container">
                                    <img src="<?=base_url('assets-landing/img/pulse_rate.png')?>" alt="Pulse Rate & Oxygen">
                                </div>
                                <div class="content-container">
                                    <h3 class="custom-font">Pulse Rate & Oxygen</h3>
                                    <div class="card-info mt-3">
                                        <p>Record your heart rate and blood oxygen levels</p>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <button onclick="navigateToMeasurement('pulse-oxygen')" class="btn btn-primary px-6">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        Start Checkup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blood Pressure -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card">
                            <div class="card-body">
                                <div class="image-container">
                                    <img src="<?=base_url('assets-landing/img/blood_press.png')?>" alt="Blood Pressure">
                                </div>
                                <div class="content-container">
                                    <h3 class="custom-font">Blood Pressure</h3>
                                    <div class="card-info mt-3">
                                        <p>Track your systolic and diastolic blood pressure</p>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <button onclick="navigateToMeasurement('blood-pressure')" class="btn btn-primary px-6">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        Start Checkup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Body Temperature -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card">
                            <div class="card-body">
                                <div class="image-container">
                                    <img src="<?=base_url('assets-landing/img/body_temp.png')?>" alt="Body Temperature">
                                </div>
                                <div class="content-container">
                                    <h3 class="custom-font">Body Temperature</h3>
                                    <div class="card-info mt-3">
                                        <p>Record your body temperature readings</p>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <button onclick="navigateToMeasurement('body-temperature')" class="btn btn-primary px-6">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        Start Checkup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blood Glucose -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card">
                            <div class="card-body">
                                <div class="image-container">
                                    <img src="<?=base_url('assets-landing/img/blood_glucose.png')?>" alt="Blood Glucose">
                                </div>
                                <div class="content-container">
                                    <h3 class="custom-font">Blood Glucose</h3>
                                    <div class="card-info mt-3">
                                        <p>Monitor your blood sugar levels</p>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <button onclick="navigateToMeasurement('blood-glucose')" class="btn btn-primary px-6">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        Start Checkup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Body Weight -->
                    <div class="col-md-4 mb-5">
                        <div class="card card-flush h-md-100 health-card">
                            <div class="card-body">
                                <div class="image-container">
                                    <img src="<?=base_url('assets-landing/img/body_weight.png')?>" alt="Body Weight">
                                </div>
                                <div class="content-container">
                                    <h3 class="custom-font">Body Weight</h3>
                                    <div class="card-info mt-3">
                                        <p>Track your weight changes over time</p>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <button onclick="navigateToMeasurement('body-weight')" class="btn btn-primary px-6">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        Start Checkup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Consult Doctor Button -->
                <div class="d-flex justify-content-center gap-3 mt-5 mb-10">
                    <a href="<?=base_url('app/self_checkup_summary')?>" class="btn btn-success btn-lg px-8 py-4 shadow-lg d-flex align-items-center">
                        <i class="ki-duotone ki-check-circle fs-1 me-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <span class="fs-3">View Health Summary</span>
                    </a>
                    <a href="<?=base_url('app/consult_doctor')?>" class="btn btn-primary btn-lg px-8 py-4 shadow-lg d-flex align-items-center">
                        <i class="ki-duotone ki-profile-circle fs-1 me-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
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

<script>
    function navigateToMeasurement(type) {
        // Navigate to the specific measurement page
        switch(type) {
            case 'pulse-oxygen':
                window.location.href = '<?=base_url('app/pulse_oxygen')?>';
                break;
            case 'blood-pressure':
                window.location.href = '<?=base_url('app/blood_pressure')?>';
                break;
            case 'body-temperature':
                window.location.href = '<?=base_url('app/body_temperature')?>';
                break;
            case 'blood-glucose':
                window.location.href = '<?=base_url('app/blood_glucose')?>';
                break;
            case 'body-weight':
                window.location.href = '<?=base_url('app/body_weight')?>';
                break;
            default:
                alert('Page not found');
        }
    }

    // Check completion status on page load
    document.addEventListener('DOMContentLoaded', function() {
        const measurements = ['pulse-oxygen', 'blood-pressure', 'body-temperature', 'blood-glucose', 'body-weight'];
        measurements.forEach(type => {
            if(localStorage.getItem(type + '_completed') === 'true') {
                const card = document.querySelector(`[onclick="navigateToMeasurement('${type}')"]`).closest('.health-card');
                if(card) {
                    // Add completion indicator
                    const indicator = document.createElement('div');
                    indicator.className = 'position-absolute top-0 end-0 mt-3 me-3';
                    indicator.innerHTML = `
                        <span class="badge badge-circle badge-success">
                            <i class="ki-duotone ki-check fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    `;
                    card.style.position = 'relative';
                    card.appendChild(indicator);
                }
            }
        });
    });
</script>

<style>
    .health-card {
        cursor: pointer;
        transition: 0.3s;
        border: 2px solid transparent;
        border-radius: 10px;
        height: 100%;
        display: flex;
    }

    .health-card .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 2rem;
    }

    .health-card .image-container {
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .health-card .image-container img {
        max-width: 150px;
        max-height: 150px;
        width: auto;
        height: auto;
        object-fit: contain;
    }

    .health-card .content-container {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-bottom: 20px;
    }

    .health-card .button-container {
        margin-top: auto;
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

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .badge-circle {
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

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