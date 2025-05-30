<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Template</h1>
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
					<li class="breadcrumb-item text-muted">Template</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Secondary button-->
				<!-- <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Manage Bids</a> -->
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<!-- <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Add New Kit</a> -->
				<!-- <a href="#" class="btn btn-sm fw-bold btn-primary btn-add-new-kit">Add New Kit</a> -->
				<!--end::Primary button-->
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Toolbar container-->
		
	</div>
	<!--end::Toolbar-->
	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!--begin::Content container-->
		<!--begin::Form-->

		<div id="kt_app_content_container" class="app-container container-xxl">
			<!--begin::Row-->
			<div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
				<!--begin::Col-->
				<? if($template){ ?>
				<? foreach($template as $kit){ ?>
				<?
				$cover_img = get_any_table_row(array('temp_key' => $kit['temp_key'], 'is_submit' => '1'), 'cover_image');
				?>
				<div class="col-sm-6 col-xxl-3">
					<!--begin::Card widget 14-->
					<div class="card card-flush h-xl-100">
						<!--begin::Body-->
						<div class="card-body text-center pb-5">
							<!--begin::Overlay-->
							<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?=base_url($cover_img['path'])?>/<?=$cover_img['filename']?>">
								<!--begin::Image-->
								<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('<?=base_url($cover_img['path'])?>/<?=$cover_img['filename']?>')"></div>
								<!--end::Image-->
								<!--begin::Action-->
								<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
									<i class="ki-duotone ki-eye fs-3x text-white">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</div>
								<!--end::Action-->
							</a>
							<!--end::Overlay-->
							<!--begin::Info-->
							<div class="d-flex align-items-end flex-stack mb-1">
								<!--begin::Title-->
								<div class="text-start">
									<span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block"><?=$kit['name']?></span>
									<span class="text-gray-500 mt-1 fw-bold fs-6">Create Date: <?=dmy($kit['create_dt'])?></span>
								</div>
								<!--end::Title-->
								<!--begin::Total-->
								<!-- <span class="text-gray-600 text-end fw-bold fs-6">$17,035</span> -->
								<!--end::Total-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="card-footer d-flex flex-stack pt-0">
							<!--begin::Link-->
							<a class="flex-shrink-0 flex-shrink-0 me-2" href=""></a>
							<!--end::Link-->
							<!--begin::Link-->
							<a class="btn btn-sm btn-info flex-shrink-0" 
								href="<?=base_url('app/download_template/'.$kit['filename'])?>">
								Download
							</a>
							<!--end::Link-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card widget 14-->
				</div>
				<? } ?>
				<? } ?>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>


			
	

