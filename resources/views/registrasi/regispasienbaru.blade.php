
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.3
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../../" />
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
                <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
                <div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background-image: url(assets/media/misc/auth-bg.png)">
                    <!--begin::Header-->
                    <div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
                        <!--begin::Logo-->
                        <a href="#">
                            <img alt="Logo" src="assets/media/logos/logosimrs.png" class="h-90px" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="d-flex flex-row-fluid justify-content-center p-10">
                        <!--begin::Nav-->
                        <div class="stepper-nav">

                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Registrasi Pasien</h3>
                                        <div class="stepper-desc fw-normal">Setup your account settings</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Business Details</h3>
                                        <div class="stepper-desc fw-normal">Setup your business details</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Billing Details</h3>
                                        <div class="stepper-desc fw-normal">Provide your payment info</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="ki-duotone ki-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Completed</h3>
                                        <div class="stepper-desc fw-normal">Your account is created</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-center flex-wrap px-5 py-10">
                        <!--begin::Links-->
                        <div class="d-flex fw-normal">
                            <a href="https://keenthemes.com" class="text-success px-5" target="_blank">Terms</a>
                            <a href="https://devs.keenthemes.com" class="text-success px-5" target="_blank">Plans</a>
                            <a href="https://1.envato.market/EA4JP" class="text-success px-5" target="_blank">Contact Us</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Footer-->
                </div>
            </div>
            <!--end::Aside-->

				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">

								<!--begin::Step 2-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<center>
											<h2 class="fw-bold text-gray-900">Selamat Datang!</h2>
											</center>
											<!--end::Title-->
											<!--begin::Notice-->
											<center>
											<div class="text-muted fw-semibold fs-6">Masukkan Detail Data Diri Anda
											{{-- <a href="#" class="link-primary fw-bold">Help Page</a>.</div> --}}
											</center>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										{{-- <!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center form-label mb-3">Specify Team Size
											<span class="ms-1" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row mb-2" data-kt-buttons="true">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
														<input type="radio" class="btn-check" name="account_team_size" value="1-1" />
														<span class="fw-bold fs-3">1-1</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
														<input type="radio" class="btn-check" name="account_team_size" checked="checked" value="2-10" />
														<span class="fw-bold fs-3">2-10</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
														<input type="radio" class="btn-check" name="account_team_size" value="10-50" />
														<span class="fw-bold fs-3">10-50</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
														<input type="radio" class="btn-check" name="account_team_size" value="50+" />
														<span class="fw-bold fs-3">50+</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Hint-->
											<div class="form-text">Customers will see this shortened version of your statement descriptor</div>
											<!--end::Hint-->
										</div>
										<!--end::Input group--> --}}
										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="form-label mb-3 required">Nama Lengkap</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="regisbaru_fullname" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10 fv-row r">
											<!--begin::Label-->
											<label class="form-label mb-3 required">NIK</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="number" class="form-control form-control-lg form-control-solid" name="regisbaru_nik" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="form-label mb-3 required">Tanggal Lahir</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="regisbaru_tanggallahir" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="form-label mb-3">No. BPJS</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="regisbaru_bpjs" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										{{-- <!--begin::Input group-->
										<div class="mb-0 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center form-label mb-5">Select Account Plan
											<span class="ms-1" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="mb-0">
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-bank fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5">Company Account</span>
															<span class="fs-6 fw-semibold text-muted">Use images to enhance your post flow</span>
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="account_plan" value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-chart fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5">Developer Account</span>
															<span class="fs-6 fw-semibold text-muted">Use images to your post time</span>
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="account_plan" value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-0 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-chart-pie-4 fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5">Testing Account</span>
															<span class="fs-6 fw-semibold text-muted">Use images to enhance time travel rivers</span>
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="account_plan" value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group--> --}}
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h2 class="fw-bold text-gray-900">Silahkan Memili Poli</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
                                        <!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
														<i class="ki-duotone ki-badge fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-4 mb-2">Personal Account</span>
															<span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
														<i class="ki-duotone ki-briefcase fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-4 mb-2">Corporate Account</span>
															<span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
                                                <!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
														<i class="ki-duotone ki-badge fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-4 mb-2">Personal Account</span>
															<span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
														<i class="ki-duotone ki-briefcase fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-4 mb-2">Corporate Account</span>
															<span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
                                                <!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
														<i class="ki-duotone ki-badge fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-4 mb-2">Personal Account</span>
															<span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
														<i class="ki-duotone ki-briefcase fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-4 mb-2">Corporate Account</span>
															<span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-gray-900">Ambil Nomor Antrian</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="text-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
                                        <center>
                                        <!--begin::Col-->
													<div class="col-xl-6">
														<div class="d-flex h-100 align-items-center">
															<!--begin::Option-->
															<div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
																<!--begin::Heading-->
																<div class="mb-7 text-center">
																	<!--begin::Title-->
																	<h1 class="text-gray-900 mb-5 fw-bolder">Nomor Antrian Anda</h1>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="text-gray-600 fw-semibold mb-5">Nomor Antrian Untuk Poli
																	<br />Nama Poli</div>
																	<!--end::Description-->
																	<!--begin::Price-->
																	<div class="text-center">

																		<span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">#NA-214</span>
																		<span class="fs-7 fw-semibold opacity-50">/

																	</div>
																	<!--end::Price-->
																</div>
																<!--end::Heading-->

															</div>
															<!--end::Option-->
														</div>
													</div>
													<!--end::Col-->


                                                <!--begin::Col-->
													<div class=" col-xl-6">
														<div class="d-flex h-100 align-items-center">
															<!--begin::Option-->
															<div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
																<!--begin::Heading-->
																<div class="mb-7 text-center">
																	<!--begin::Title-->
																	<h1 class="text-gray-900 mb-5 fw-bolder">Nomor Antrian Saat Ini</h1>
																	<!--end::Title-->

																	<!--begin::Price-->
																	<div class="text-center">

																		<span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">#NA-114</span>
																		<span class="fs-7 fw-semibold opacity-50">/

																	</div>
																	<!--end::Price-->
																</div>
																<!--end::Heading-->

															</div>
															<!--end::Option-->
														</div>
													</div>
													<!--end::Col-->
                                                </center>
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-150 h-150">


										<!--begin::Body-->
										<div class="card-body p-lg-100">
											<!--begin::Layout-->
											<div class="d-flex flex-column flex-xl-row">
												<!--begin::Content-->
												<div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
													<!--begin::Invoice 2 content-->
													<div class="mt-n1">
														<!--begin::Top-->
														<div class="d-flex flex-stack pb-10">

															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-success">Export PDF</a>
															<!--end::Action-->
														</div>
														<!--end::Top-->
														<!--begin::Wrapper-->
														<div class="m-0">
															<!--begin::Label-->
															<div class="fw-bold fs-3 text-gray-800 mb-8">Invoice #34782</div>
															<!--end::Label-->
															<!--begin::Row-->
															<div class="row g-5 mb-11">
																<!--end::Col-->
																<div class="col-sm-6">
																	<!--end::Label-->
																	<div class="fw-semibold fs-7 text-gray-600 mb-1">Issue Date:</div>
																	<!--end::Label-->
																	<!--end::Col-->
																	<div class="fw-bold fs-6 text-gray-800">12 Apr 2021</div>
																	<!--end::Col-->
																</div>
																<!--end::Col-->
																<!--end::Col-->
																<div class="col-sm-6">
																	<!--end::Label-->
																	<div class="fw-semibold fs-7 text-gray-600 mb-1">Due Date:</div>
																	<!--end::Label-->
																	<!--end::Info-->
																	<div class="fw-bold fs-6 text-gray-800 d-flex align-items-center flex-wrap">
																		<span class="pe-2">02 May 2021</span>
																		<span class="fs-7 text-danger d-flex align-items-center">
																		<span class="bullet bullet-dot bg-danger me-2"></span>Due in 7 days</span>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
															<!--begin::Row-->
															<div class="row g-5 mb-12">
																<!--end::Col-->
																<div class="col-sm-6">
																	<!--end::Label-->
																	<div class="fw-semibold fs-7 text-gray-600 mb-1">Issue For:</div>
																	<!--end::Label-->
																	<!--end::Text-->
																	<div class="fw-bold fs-6 text-gray-800">KeenThemes Inc.</div>
																	<!--end::Text-->
																	<!--end::Description-->
																	<div class="fw-semibold fs-7 text-gray-600">8692 Wild Rose Drive
																	<br />Livonia, MI 48150</div>
																	<!--end::Description-->
																</div>
																<!--end::Col-->
																<!--end::Col-->
																<div class="col-sm-6">
																	<!--end::Label-->
																	<div class="fw-semibold fs-7 text-gray-600 mb-1">Issued By:</div>
																	<!--end::Label-->
																	<!--end::Text-->
																	<div class="fw-bold fs-6 text-gray-800">CodeLab Inc.</div>
																	<!--end::Text-->
																	<!--end::Description-->
																	<div class="fw-semibold fs-7 text-gray-600">9858 South 53rd Ave.
																	<br />Matthews, NC 28104</div>
																	<!--end::Description-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
															<!--begin::Content-->
															<div class="flex-grow-1">
																<!--begin::Table-->
																<div class="table-responsive border-bottom mb-9">
																	<table class="table mb-3">
																		<thead>
																			<tr class="border-bottom fs-6 fw-bold text-muted">
																				<th class="min-w-175px pb-2">Description</th>
																				<th class="min-w-70px text-end pb-2">Hours</th>
																				<th class="min-w-80px text-end pb-2">Rate</th>
																				<th class="min-w-100px text-end pb-2">Amount</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr class="fw-bold text-gray-700 fs-5 text-end">
																				<td class="d-flex align-items-center pt-6">
																				<i class="fa fa-genderless text-danger fs-2 me-2"></i>Creative Design</td>
																				<td class="pt-6">80</td>
																				<td class="pt-6">$40.00</td>
																				<td class="pt-6 text-gray-900 fw-bolder">$3200.00</td>
																			</tr>
																			<tr class="fw-bold text-gray-700 fs-5 text-end">
																				<td class="d-flex align-items-center">
																				<i class="fa fa-genderless text-success fs-2 me-2"></i>Logo Design</td>
																				<td>120</td>
																				<td>$40.00</td>
																				<td class="fs-5 text-gray-900 fw-bolder">$4800.00</td>
																			</tr>
																			<tr class="fw-bold text-gray-700 fs-5 text-end">
																				<td class="d-flex align-items-center">
																				<i class="fa fa-genderless text-primary fs-2 me-2"></i>Web Development</td>
																				<td>210</td>
																				<td>$60.00</td>
																				<td class="fs-5 text-gray-900 fw-bolder">$12600.00</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<!--end::Table-->
																<!--begin::Container-->
																<div class="d-flex justify-content-end">
																	<!--begin::Section-->
																	<div class="mw-300px">
																		<!--begin::Item-->
																		<div class="d-flex flex-stack mb-3">
																			<!--begin::Accountname-->
																			<div class="fw-semibold pe-10 text-gray-600 fs-7">Subtotal:</div>
																			<!--end::Accountname-->
																			<!--begin::Label-->
																			<div class="text-end fw-bold fs-6 text-gray-800">$ 20,600.00</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex flex-stack mb-3">
																			<!--begin::Accountname-->
																			<div class="fw-semibold pe-10 text-gray-600 fs-7">VAT 0%</div>
																			<!--end::Accountname-->
																			<!--begin::Label-->
																			<div class="text-end fw-bold fs-6 text-gray-800">0.00</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex flex-stack mb-3">
																			<!--begin::Accountnumber-->
																			<div class="fw-semibold pe-10 text-gray-600 fs-7">Subtotal + VAT</div>
																			<!--end::Accountnumber-->
																			<!--begin::Number-->
																			<div class="text-end fw-bold fs-6 text-gray-800">$ 20,600.00</div>
																			<!--end::Number-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex flex-stack">
																			<!--begin::Code-->
																			<div class="fw-semibold pe-10 text-gray-600 fs-7">Total</div>
																			<!--end::Code-->
																			<!--begin::Label-->
																			<div class="text-end fw-bold fs-6 text-gray-800">$ 20,600.00</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Item-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Container-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Invoice 2 content-->
												</div>
												<!--end::Content-->
												<!--begin::Sidebar-->
												<div class="m-0">
													<!--begin::Invoice 2 sidebar-->
													<div class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
														<!--begin::Labels-->
														<div class="mb-8">
															<span class="badge badge-light-success me-2">Approved</span>
															<span class="badge badge-light-warning">Pending Payment</span>
														</div>
														<!--end::Labels-->
														<!--begin::Title-->
														<h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">PAYMENT DETAILS</h6>
														<!--end::Title-->
														<!--begin::Item-->
														<div class="mb-6">
															<div class="fw-semibold text-gray-600 fs-7">Paypal:</div>
															<div class="fw-bold text-gray-800 fs-6">codelabpay@codelab.co</div>
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="mb-6">
															<div class="fw-semibold text-gray-600 fs-7">Account:</div>
															<div class="fw-bold text-gray-800 fs-6">Nl24IBAN34553477847370033
															<br />AMB NLANBZTC</div>
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="mb-15">
															<div class="fw-semibold text-gray-600 fs-7">Payment Term:</div>
															<div class="fw-bold fs-6 text-gray-800 d-flex align-items-center">14 days
															<span class="fs-7 text-danger d-flex align-items-center">
															<span class="bullet bullet-dot bg-danger mx-2"></span>Due in 7 days</span></div>
														</div>
														<!--end::Item-->
														<!--begin::Title-->
														<h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">PROJECT OVERVIEW</h6>
														<!--end::Title-->
														<!--begin::Item-->
														<div class="mb-6">
															<div class="fw-semibold text-gray-600 fs-7">Project Name</div>
															<div class="fw-bold fs-6 text-gray-800">SaaS App Quickstarter
															<a href="#" class="link-primary ps-1">View Project</a></div>
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="mb-6">
															<div class="fw-semibold text-gray-600 fs-7">Completed By:</div>
															<div class="fw-bold text-gray-800 fs-6">Mr. Dewonte Paul</div>
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="m-0">
															<div class="fw-semibold text-gray-600 fs-7">Time Spent:</div>
															<div class="fw-bold fs-6 text-gray-800 d-flex align-items-center">230 Hours
															<span class="fs-7 text-success d-flex align-items-center">
															<span class="bullet bullet-dot bg-success mx-2"></span>35$/h Rate</span></div>
														</div>
														<!--end::Item-->
													</div>
													<!--end::Invoice 2 sidebar-->
												</div>
												<!--end::Sidebar-->
											</div>
											<!--end::Layout-->
										</div>
										<!--end::Body-->

									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<i class="ki-duotone ki-arrow-left fs-4 me-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>Previous</button>
									</div>
									<div>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
											<i class="ki-duotone ki-arrow-right fs-4 ms-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<i class="ki-duotone ki-arrow-right fs-4 ms-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i></button>
									</div>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Multi-steps-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/utilities/modals/create-accountbaru.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
