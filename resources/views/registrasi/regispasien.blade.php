
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

				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
                                            <center>
                                                <div class="text-center">
                                                <h2 class="fw-bold d-flex align-items-center justify-content-center text-gray-1000">
                                                    Silahkan Memilih Jenis Registrasi Anda
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </h2>
                                            </div>
                                                <!--begin::Notice-->
                                                <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                                                <a href="#" class="link-primary fw-bold">Help Page</a>.</div>
                                                <!--end::Notice-->

                                            </center>
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Option-->
                                                    <input type="radio" class="btn-check" name="account_type" value="personal" id="personal_radio" />
                                                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="personal_radio" onclick="window.location.href='{{ route('regispasien.baru') }}';">
                                                        <i class="ki-duotone ki-badge fs-3x me-5">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                        <!--begin::Info-->
                                                        <span class="d-block fw-semibold text-start">
                                                            <span class="text-gray-900 fw-bold d-block fs-4 mb-2">Pasien Baru</span>
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
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="personal_radios" onclick="window.location.href='{{ route('regispasien.lama') }}';">
														<i class="ki-duotone ki-briefcase fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-4 mb-2">Pasien Lama</span>
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
								<!--end::Step 1-->
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
		<script src="assets/js/custom/utilities/modals/create-account.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
