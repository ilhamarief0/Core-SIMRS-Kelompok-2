
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
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Sidebar mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Sidebar mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="index.html" class="d-lg-none">
								<img alt="Logo" src="{{ asset('assets/media/logos/default-small.svg') }}" class="h-30px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								<!--begin::Menu-->
								<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-title">Dashboards</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
											<!--begin:Dashboards menu-->
											<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
												<!--begin:Row-->
												<div class="row">
													<!--begin:Col-->
													<div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-6 mb-3">
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="index.html" class="menu-link active">
																		<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-element-11 text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
																		<span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Default</span>
																			<span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
																		</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-6 mb-3">
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/ecommerce.html" class="menu-link">
																		<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-basket text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
																		<span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">eCommerce</span>
																			<span class="fs-7 fw-semibold text-muted">Sales reports</span>
																		</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-6 mb-3">
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/projects.html" class="menu-link">
																		<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-44 text-info fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
																		<span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Projects</span>
																			<span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
																		</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-6 mb-3">
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/online-courses.html" class="menu-link">
																		<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-color-swatch text-success fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																				<span class="path6"></span>
																				<span class="path7"></span>
																				<span class="path8"></span>
																				<span class="path9"></span>
																				<span class="path10"></span>
																				<span class="path11"></span>
																				<span class="path12"></span>
																				<span class="path13"></span>
																				<span class="path14"></span>
																				<span class="path15"></span>
																				<span class="path16"></span>
																				<span class="path17"></span>
																				<span class="path18"></span>
																				<span class="path19"></span>
																				<span class="path20"></span>
																				<span class="path21"></span>
																			</i>
																		</span>
																		<span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Online Courses</span>
																			<span class="fs-7 fw-semibold text-muted">Student progress</span>
																		</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-6 mb-3">
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/marketing.html" class="menu-link">
																		<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-chart-simple text-gray-900 fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
																		<span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Marketing</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-6 mb-3">
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/bidding.html" class="menu-link">
																		<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-switch text-warning fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
																		<span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Bidding</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-6 mb-3">
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/pos.html" class="menu-link">
																		<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-42 text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
																		<span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">POS System</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-6 mb-3">
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/call-center.html" class="menu-link">
																		<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-call text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																				<span class="path6"></span>
																				<span class="path7"></span>
																				<span class="path8"></span>
																			</i>
																		</span>
																		<span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Call Center</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
														<div class="separator separator-dashed mx-5 my-5"></div>
														<!--begin:Landing-->
														<div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
															<div class="d-flex flex-column me-5">
																<div class="fs-6 fw-bold text-gray-800">Landing Page Template</div>
																<div class="fs-7 fw-semibold text-muted">Onpe page landing template with pricing & others</div>
															</div>
															<a href="landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
														</div>
														<!--end:Landing-->
													</div>
													<!--end:Col-->
													<!--begin:Col-->
													<div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
														<!--begin:Heading-->
														<h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
														<!--end:Heading-->
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="dashboards/logistics.html" class="menu-link py-2">
																<span class="menu-title">Logistics</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="dashboards/website-analytics.html" class="menu-link py-2">
																<span class="menu-title">Website Analytics</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="dashboards/finance-performance.html" class="menu-link py-2">
																<span class="menu-title">Finance Performance</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="dashboards/store-analytics.html" class="menu-link py-2">
																<span class="menu-title">Store Analytics</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="dashboards/social.html" class="menu-link py-2">
																<span class="menu-title">Social</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="dashboards/delivery.html" class="menu-link py-2">
																<span class="menu-title">Delivery</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="dashboards/crypto.html" class="menu-link py-2">
																<span class="menu-title">Crypto</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="dashboards/school.html" class="menu-link py-2">
																<span class="menu-title">School</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="dashboards/podcast.html" class="menu-link py-2">
																<span class="menu-title">Podcast</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Col-->
												</div>
												<!--end:Row-->
											</div>
											<!--end:Dashboards menu-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->

								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								<!--begin::Search-->
								<div class="app-navbar-item align-items-stretch ms-1 ms-md-4">
									<!--begin::Search-->
									<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
										<!--begin::Search toggle-->
										<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
											<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px">
												<i class="ki-duotone ki-magnifier fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
										</div>
										<!--end::Search toggle-->
										<!--begin::Menu-->
										<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
											<!--begin::Wrapper-->
											<div data-kt-search-element="wrapper">
												<!--begin::Form-->
												<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
													<!--begin::Icon-->
													<i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<!--end::Icon-->
													<!--begin::Input-->
													<input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
													<!--end::Input-->
													<!--begin::Spinner-->
													<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
														<span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
													</span>
													<!--end::Spinner-->
													<!--begin::Reset-->
													<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-enone" data-kt-search-element="clear">
														<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<!--end::Reset-->
													<!--begin::Toolbar-->
													<div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
														<!--begin::Preferences toggle-->
														<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
															<i class="ki-duotone ki-setting-2 fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</div>
														<!--end::Preferences toggle-->
														<!--begin::Advanced search toggle-->
														<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
															<i class="ki-duotone ki-down fs-2"></i>
														</div>
														<!--end::Advanced search toggle-->
													</div>
													<!--end::Toolbar-->
												</form>
												<!--end::Form-->
												<!--begin::Separator-->
												<div class="separator border-gray-200 mb-6"></div>
												<!--end::Separator-->
												<!--begin::Recently viewed-->
												<div data-kt-search-element="results" class="d-none">
													<!--begin::Items-->
													<div class="scroll-y mh-200px mh-lg-350px">
														<!--begin::Category title-->
														<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
														<!--end::Category title-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">Karina Clark</span>
																<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">Olivia Bold</span>
																<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">Ana Clark</span>
																<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">Nick Pitola</span>
																<span class="fs-7 fw-semibold text-muted">Art Director</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="{{ asset('assets/media/avatars/300-11.jpg') }}" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">Edward Kulnic</span>
																<span class="fs-7 fw-semibold text-muted">System Administrator</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Category title-->
														<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
														<!--end::Category title-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px" src="{{ asset('assets/media/svg/brand-logos/volicity-9.svg') }}" alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">Company Rbranding</span>
																<span class="fs-7 fw-semibold text-muted">UI Design</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px" src="{{ asset('assets/media/svg/brand-logos/tvit.svg') }}" alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">Company Re-branding</span>
																<span class="fs-7 fw-semibold text-muted">Web Development</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px" src="{{ asset('assets/media/svg/misc/infography.svg') }}" alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">Business Analytics App</span>
																<span class="fs-7 fw-semibold text-muted">Administration</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px" src="{{ asset('assets/media/svg/brand-logos/leaf.svg') }}" alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
																<span class="fs-7 fw-semibold text-muted">Marketing</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px" src="{{ asset('assets/media/svg/brand-logos/tower.svg') }}" alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column justify-content-start fw-semibold">
																<span class="fs-6 fw-semibold">Tower Group Website</span>
																<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Category title-->
														<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
														<!--end::Category title-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-notepad fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
																<span class="fs-7 fw-semibold text-muted">#45670</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-frame fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
																<span class="fs-7 fw-semibold text-muted">#45690</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
																<span class="fs-7 fw-semibold text-muted">#21090</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
																<span class="fs-7 fw-semibold text-muted">#34560</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Recently viewed-->
												<!--begin::Recently viewed-->
												<div class="mb-5" data-kt-search-element="main">
													<!--begin::Heading-->
													<div class="d-flex flex-stack fw-semibold mb-4">
														<!--begin::Label-->
														<span class="text-muted fs-6 me-2">Recently Searched:</span>
														<!--end::Label-->
													</div>
													<!--end::Heading-->
													<!--begin::Items-->
													<div class="scroll-y mh-200px mh-lg-325px">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-laptop fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
																<span class="fs-7 text-muted fw-semibold">#45789</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart-simple fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
																<span class="fs-7 text-muted fw-semibold">#84050</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
																<span class="fs-7 text-muted fw-semibold">#84250</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
																<span class="fs-7 text-muted fw-semibold">#67945</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-sms fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
																<span class="fs-7 text-muted fw-semibold">#84250</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-bank fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
																<span class="fs-7 text-muted fw-semibold">#45690</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
																<span class="fs-7 text-muted fw-semibold">#24005</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Recently viewed-->
												<!--begin::Empty-->
												<div data-kt-search-element="empty" class="text-center d-none">
													<!--begin::Icon-->
													<div class="pt-10 pb-10">
														<i class="ki-duotone ki-search-list fs-4x opacity-50">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</div>
													<!--end::Icon-->
													<!--begin::Message-->
													<div class="pb-15 fw-semibold">
														<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
														<div class="text-muted fs-7">Please try again with a different query</div>
													</div>
													<!--end::Message-->
												</div>
												<!--end::Empty-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Preferences-->
											<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
												<!--begin::Heading-->
												<h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="mb-5">
													<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<!--begin::Radio group-->
													<div class="nav-group nav-group-fluid">
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type" value="users" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type" value="orders" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type" value="projects" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Radio group-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<!--begin::Radio group-->
													<div class="nav-group nav-group-fluid">
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="attachment" value="any" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Radio group-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value="next">Within the next</option>
														<option value="last">Within the last</option>
														<option value="between">Between</option>
														<option value="on">On</option>
													</select>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-6">
														<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-6">
														<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
															<option value="days">Days</option>
															<option value="weeks">Weeks</option>
															<option value="months">Months</option>
															<option value="years">Years</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
													<a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Preferences-->
											<!--begin::Preferences-->
											<form data-kt-search-element="preferences" class="pt-1 d-none">
												<!--begin::Heading-->
												<h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="pb-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
														<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
														<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
														<input class="form-check-input" type="checkbox" value="1" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
														<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
														<input class="form-check-input" type="checkbox" value="1" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end pt-7">
													<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
													<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Preferences-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Search-->
								</div>
								<!--end::Search-->
								<!--begin::Theme mode-->
								<div class="app-navbar-item ms-1 ms-md-4">
									<!--begin::Menu toggle-->
									<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<i class="ki-duotone ki-night-day theme-light-show fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
											<span class="path6"></span>
											<span class="path7"></span>
											<span class="path8"></span>
											<span class="path9"></span>
											<span class="path10"></span>
										</i>
										<i class="ki-duotone ki-moon theme-dark-show fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</a>
									<!--begin::Menu toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Theme mode-->
								<!--begin::User menu-->
								<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
                                    <a class="fw-bold text-gray-800 fs-5 text-hover-primary" style="margin-right: 10px;">Hi, {{ Auth()->user()->name }}</a>
									<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="rounded-3" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="{{ asset('assets/media/avatars/300-3.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">{{ Auth()->user()->name }}
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{ Auth()->user()->role->role_name }}</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth()->user()->email }}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="account/overview.html" class="menu-link px-5">My Profile</a>
										</div>
										<!--end::Menu item-->

										<!--begin::Menu item-->
										<div class="menu-item px-5 my-1">
											<a href="account/settings.html" class="menu-link px-5">Account Settings</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="{{ route('logout') }}" class="menu-link px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
								<!--begin::Header menu toggle-->
								<div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
									<div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
										<i class="ki-duotone ki-element-4 fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Header menu toggle-->
								<!--begin::Aside toggle-->
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="index.html">
								<img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}" class="h-25px app-sidebar-logo-default" />
								<img alt="Logo" src="{{ asset('assets/media/logos/default-small.svg') }}" class="h-20px app-sidebar-logo-minimize" />
							</a>
							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<!--begin::Minimized sidebar setup:
                            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
                                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
                            }
                            -->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<i class="ki-duotone ki-black-left-line fs-3 rotate-180">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
								<!--begin::Scroll wrapper-->
								<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
									<!--begin::Menu-->
									<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link active">
												<span class="menu-icon">
													<i class="ki-duotone ki-element-11 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">Dashboards</span>

											</span>
											<!--end:Menu link-->

										</div>
										<!--end:Menu item-->


									</div>
									<!--end::Menu-->
								</div>
								<!--end::Scroll wrapper-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->
						<!--begin::Footer-->
						<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
							<a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
								<span class="btn-label">Docs & Components</span>
								<i class="ki-duotone ki-document btn-icon fs-2 m-0">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</a>
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
@yield('content')
@extends('dashboard.admindokter.layouts.footer')
