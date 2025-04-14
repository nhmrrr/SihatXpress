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
											Welcome, <?= $this->session->userdata('name') ?>
										</h1>

										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<!--<li class="breadcrumb-item text-muted">
												<a href="<?=base_url('app')?>" class="text-muted text-hover-primary">Home</a>
											</li>-->
											<!--end::Item-->
											<!--begin::Item-->
											<!--<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<!--<li class="breadcrumb-item text-muted">Jersey Customize</li>-->
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
										<p class="fs-3">Please select one of the options below to start</p>

									</div>
									<!--end::Page title-->
								
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
					<div id="kt_app_content" class="app-content flex-column-fluid">
						<div id="kt_app_content_container" class="app-container container-xxl">
							<div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
								<!-- Self Check Up -->
								<div class="col-md-6">
									<div id="card-self" class="card card-flush h-md-100 selectable-card" onclick="handleCardClick('card-self', 'self')">
										<div class="card-body d-flex flex-column justify-content-center align-items-center">
											<img src="assets-landing/img/dashboard/telehealth.png" alt="Self Check Up" style="width: 200px; height: auto;">
											<h3 class="custom-font">Self Check Up</h3>
											<div class="card-info mt-3 text-center" style="display: none;">
												<p>Answer a few questions to assess your symptoms and receive a quick health summary.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Consult A Doctor -->
								<div class="col-md-6">
									<div id="card-consult" class="card card-flush h-md-100 selectable-card" onclick="handleCardClick('card-consult', 'consult')">
										<div class="card-body d-flex flex-column justify-content-center align-items-center">
											<img src="assets-landing/img/dashboard/consult.png" alt="Consult A Doctor" style="width: 200px; height: auto;">
											<h3 class="custom-font">Consult A Doctor</h3>
											<div class="card-info mt-3 text-center" style="display: none;">
												<p>Talk to a certified doctor online for personalized medical advice and prescriptions.</p>
											</div>
										</div>
									</div>
								</div>
									<div id="next-button-container" style="display: none; width: 100%; margin-top: 10px; text-align: right;">
										<button class="btn btn-next">Next</button>
									</div>
								</div>
							</div>
						</div> <!-- end of row -->
					

									
								
									<?/*
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-6">
											<!--begin::Card widget 18-->
											<div class="card card-flush h-xl-100">
												<!--begin::Body-->
												<div class="card-body py-9">
													<!--begin::Row-->
													<div class="row gx-9 h-100">
														<!--begin::Col-->
														<div class="col-sm-6 mb-10 mb-sm-0">
															<!--begin::Image-->
															<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-65.jpg')"></div>
															<!--end::Image-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-sm-6">
															<!--begin::Wrapper-->
															<div class="d-flex flex-column h-100">
																<!--begin::Header-->
																<div class="mb-7">
																	<!--begin::Headin-->
																	<div class="d-flex flex-stack mb-6">
																		<!--begin::Title-->
																		<div class="flex-shrink-0 me-5">
																			<span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
																			<span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
																		</div>
																		<!--end::Title-->
																		<span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
																	</div>
																	<!--end::Heading-->
																	<!--begin::Items-->
																	<div class="d-flex align-items-center flex-wrap d-grid gap-2">
																		<!--begin::Item-->
																		<div class="d-flex align-items-center me-5 me-xl-13">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-30px symbol-circle me-3">
																				<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="m-0">
																				<span class="fw-semibold text-gray-500 d-block fs-8">Manager</span>
																				<a href="pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex align-items-center">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-30px symbol-circle me-3">
																				<span class="symbol-label bg-success">
																					<i class="ki-duotone ki-abstract-41 fs-5 text-white">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="m-0">
																				<span class="fw-semibold text-gray-500 d-block fs-8">Budget</span>
																				<span class="fw-bold text-gray-800 fs-7">$64.800</span>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::Item-->
																	</div>
																	<!--end::Items-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div class="mb-6">
																	<!--begin::Text-->
																	<span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
																	<!--end::Text-->
																	<!--begin::Stats-->
																	<div class="d-flex">
																		<!--begin::Stat-->
																		<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
																			<!--begin::Date-->
																			<span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
																			<!--end::Date-->
																			<!--begin::Label-->
																			<div class="fw-semibold text-gray-500">Due Date</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Stat-->
																		<!--begin::Stat-->
																		<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
																			<!--begin::Number-->
																			<span class="fs-6 text-gray-700 fw-bold">$
																			<span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
																			<!--end::Number-->
																			<!--begin::Label-->
																			<div class="fw-semibold text-gray-500">Budget</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Stat-->
																	</div>
																	<!--end::Stats-->
																</div>
																<!--end::Body-->
																<!--begin::Footer-->
																<div class="d-flex flex-stack mt-auto bd-highlight">
																	<!--begin::Users group-->
																	<div class="symbol-group symbol-hover flex-nowrap">
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
																			<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
																		</div>
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																			<img alt="Pic" src="assets/media/avatars/300-3.jpg" />
																		</div>
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
																			<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
																		</div>
																	</div>
																	<!--end::Users group-->
																	<!--begin::Actions-->
																	<a href="apps/projects/project.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View Project 
																	<i class="ki-duotone ki-exit-right-corner fs-4 ms-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i></a>
																	<!--end::Actions-->
																</div>
																<!--end::Footer-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 18-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-6">
											<!--begin::Chart widget 36-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Projects Stats</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
																	<th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
																	<th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
																	<th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
																	<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
																	<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="assets/media/stock/600x600/img-49.jpg" class="" alt="" />
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy App</a>
																				<span class="text-gray-500 fw-semibold d-block fs-7">Jane Cooper</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$32,400</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>9.2%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="assets/media/stock/600x600/img-40.jpg" class="" alt="" />
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
																				<span class="text-gray-500 fw-semibold d-block fs-7">Esther Howard</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$256,910</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-danger fs-base">
																		<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>0.4%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="assets/media/stock/600x600/img-39.jpg" class="" alt="" />
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
																				<span class="text-gray-500 fw-semibold d-block fs-7">Jenny Wilson</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$8,220</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>9.2%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="assets/media/stock/600x600/img-47.jpg" class="" alt="" />
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
																				<span class="text-gray-500 fw-semibold d-block fs-7">Cody Fisher</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$74,000</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>9.2%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="assets/media/stock/600x600/img-48.jpg" class="" alt="" />
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
																				<span class="text-gray-500 fw-semibold d-block fs-7">Savannah Nguyen</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$183,300</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-danger fs-base">
																		<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>0.4%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Chart widget 36-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									*/?>
								
								</div>
								<!--end::Content container-->
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
								<!--begin::Menu-->
								
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<script>
						function handleCardClick(cardId, type) {
							const selectedCard = document.getElementById(cardId);
							const isAlreadySelected = selectedCard.classList.contains('selected');

							// Unselect all cards and hide all descriptions
							document.querySelectorAll('.selectable-card').forEach(card => {
								card.classList.remove('selected');
								card.querySelector('.card-info').style.display = 'none';
							});

							// If it was not selected before, select it and show info
							if (!isAlreadySelected) {
								selectedCard.classList.add('selected');
								selectedCard.querySelector('.card-info').style.display = 'block';

								// Show the Next button
								document.getElementById('next-button-container').style.display = 'block';
							} else {
								// Hide the Next button if user unselects
								document.getElementById('next-button-container').style.display = 'none';
							}
						}

						// Detect clicks outside of cards
						document.addEventListener('click', function(event) {
							const cards = document.querySelectorAll('.selectable-card');
							let clickedInsideCard = false;

							cards.forEach(card => {
								if (card.contains(event.target)) {
									clickedInsideCard = true;
								}
							});

							if (!clickedInsideCard) {
								cards.forEach(card => {
									card.classList.remove('selected');
									const info = card.querySelector('.card-info');
									if (info) info.style.display = 'none';
								});

								// ✅ Hide the Next button when clicking outside
								document.getElementById('next-button-container').style.display = 'none';
							}
						});

						// Add event listener for the Next button
						document.addEventListener('DOMContentLoaded', function() {
							const nextButton = document.querySelector('.btn-next');
							if (nextButton) {
								nextButton.addEventListener('click', function() {
									// Get the selected card
									const selectedCard = document.querySelector('.selectable-card.selected');
									if (selectedCard) {
										const cardId = selectedCard.id;
										if (cardId === 'card-self') {
											// Navigate to the health measurements page
											window.location.href = '<?=base_url('app/health_measurements')?>';
										} else if (cardId === 'card-consult') {
											// Navigate to the consult doctor page
											window.location.href = '<?=base_url('app/consult_doctor')?>';
										}
									}
								});
							}
						});
					</script>
				</div>
<style>
    .selectable-card {
        cursor: pointer;
        transition: 0.3s;
        border: 2px solid transparent;
        border-radius: 10px;
    }

    .selectable-card:hover {
        border-color: #0d6efd;
        box-shadow: 0 0 10px rgba(13, 110, 253, 0.3);
    }

    .selectable-card.selected {
		border: 2px solid #0d6efd; /* Bootstrap primary color */
		box-shadow: 0 0 10px rgba(13, 110, 253, 0.5);
    }
	.custom-font {
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 24px;
	}
	.btn-next {
		background: linear-gradient(to right, #007bff, #00c6ff);
		color: white;
		padding: 12px 28px;
		font-size: 16px;
		border: none;
		border-radius: 10px;
		box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
		cursor: pointer;
		transition: all 0.3s ease;
		font-weight: 600;
		letter-spacing: 0.5px;
	}

	.btn-next:hover {
		background: linear-gradient(to right, #0056b3, #009fc4);
		transform: scale(1.05);
		box-shadow: 0 12px 25px rgba(0, 123, 255, 0.4);
	}

	.btn-next:active {
		transform: scale(0.98);
		box-shadow: 0 6px 15px rgba(0, 123, 255, 0.2);
	}
</style>