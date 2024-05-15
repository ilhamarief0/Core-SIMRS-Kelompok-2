
@extends('dashboard.admindokter.layouts.header')
@section('content')
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Dashboards</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->


                                    <!--begin::Col-->


                                        <div class="card-wrapper">
                                            <center>
                                            <!--begin::Card widget 18-->
                                            <div class="card card-flush h-l-100 custom-card">
                                                <!--begin::Body-->
                                                <div class="card-body py-9">

                                                    <!--begin::Row-->
                                                    <div class="row gx-9 h-50">
                                                        <!--begin::Col-->
                                                        <div class="col-sm-14">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex flex-column h-100">
                                                                <!--begin::Header-->
                                                                <div class="mb-1">
                                                                    <!--begin::Headin-->
                                                                    <div class="d-flex flex-stack">

                                                                    <!--begin::Title-->
                                                                    <span class="fw-bold text-gray-800 text-hover-primary fs-2">No. Antrian Saat Ini</span>
                                                                    <!--end::Title-->
                                                                    </div>
                                                                    <div class="d-flex flex-stack mb-6">
                                                                    <!--begin::Title-->
                                                                    <span class="text-gray-800 text-hover-primary fs-0">15.00 WITA</span>
                                                                    <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    </div>
                                                                    <div class="d-flex flex-stack justify-content-center">
                                                                    <!--begin::Title-->
                                                                    <span class="text-center text-gray-800 extra-large-text">#NA-124</span>
                                                                    <!--end::Title-->
                                                                    </div>
                                                                    <span class="fw-bold text-gray-800 text-hover-primary fs-2">Nama Pasien :</span>
                                                                    <span class="fw-bold text-gray-800 text-hover-primary fs-2">Muh. Ilham Arief Prabowo</span>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class="mb-4">
                                                                    </div>
                                                                    <div class="mt-1">
                                                                            <a href="link_to_detail_page">
                                                                            <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-14 fs-7">Lihat Detail Pasien</span>
                                                                            <a href="{{ route('rekammedik.list') }}">
                                                                                <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-14 fs-7">Data Rekam Medik</span>
                                                                            </a>
                                                                            <a href="link_to_antrian_page">
                                                                                <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-14 fs-7">Lanjutkan Nomor Antrian</span>
                                                                            </a>
                                                                        </a>
                                                                        </div>
                                                                <!--end::Body-->

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
                                            </center>

                                        </div>


                                    <!--end::Col-->

                                <!--end::Row-->





							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
@endsection
