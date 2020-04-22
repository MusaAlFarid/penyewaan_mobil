<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	@include('layouts.head')


	<body class="kt-page--loading-enabled kt-page--loading kt-tasks__aside--left kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">


		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
				@include('layouts.header')

					<!-- end:: Header -->
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
						<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

							<!-- begin:: Content Head -->
							<div class="kt-subheader   kt-grid__item" id="kt_subheader">
								<div class="kt-container ">
								
									<div class="kt-subheader__toolbar">
										<div class="kt-subheader__wrapper">
											
										
										</div>
									</div>
								</div>
							</div>

							<!-- end:: Content Head -->

							<!-- begin:: Content -->
							<div class="kt-container  kt-grid__item kt-grid__item--fluid">

								<!--Begin::Tasks-->
								<div class="kt-grid kt-grid--desktop kt-grid--ver-desktop  kt-todo" id="kt_todo">

									<!--Begin::Aside Mobile Toggle-->
									<button class="kt-todo__aside-close" id="kt_todo_aside_close">
										<i class="la la-close"></i>
									</button>

                                    <!--End:: Aside Mobile Toggle-->
                                    

									<!--Begin:: Tasks Aside-->
								@include('layouts.sidebar')
								<div class="kt-container">
									<div class="kt-portlet">
										<div class="portlet__body kt-portlet__body--fit">
											<div class="container">
												<div class="kt-widget kt-widget--user-profile-3">
													<div class="kt-widget__bottom">
														<div class="kt-widget__item">
															<div class="kt-widget__icon">
																<i class="flaticon2-notepad"></i>
															</div>
															<div class="kt-widget__details">
																<span class="kt-widget__title">Mobil Tersedia</span>
																<span class="kt-widget__value"><span>1 /</span>2</span>
															</div>
														</div>
														<div class="kt-widget__item">
															<div class="kt-widget__icon">
																<i class="flaticon2-user"></i>
															</div>
															<div class="kt-widget__details">
																<span class="kt-widget__title">Customer</span>
																<span class="kt-widget__value"><span></span>200</span>
															</div>
														</div>
														<div class="kt-widget__item">
															<div class="kt-widget__icon">
																<i class="flaticon-notepad"></i>
															</div>
															<div class="kt-widget__details">
																<span class="kt-widget__title">Total Transaksi</span>
																<span class="kt-widget__value"><span></span>20</span>
															</div>
														</div>
														<div class="kt-widget__item">
															<div class="kt-widget__icon">
																<i class="flaticon-statistics"></i>
															</div>
															<div class="kt-widget__details">
																<span class="kt-widget__title">Transaksi Aktif</span>
																<span class="kt-widget__value"><span></span>5</span>
															</div>
														</div>
													</div>
												</div>
												
											</div>
											
										</div>
										<div class="kt-portlet">
											<div class="kt-portlet__head">
												<div class="kt-portlet__head-label">
													<span class="kt-portlet__head-icon kt-hidden">
														<i class="la la-gear"></i>
													</span>
													<h3 class="kt-portlet__head-title">
														Pendapatan Tahun ini
													</h3>
												</div>
											</div>
											<div class="kt-portlet__body">
												<div id="kt_amcharts_1" style="height: 500px;">
													
												</div>
											</div>
										</div>

									</div>
								</div>
								
								
								</div>
								
							</div>
							
						</div>
						
					</div>
						
					
					<!-- begin:: Footer -->
					@include('layouts.footer')

					<!-- end:: Footer -->
				</div>
			</div>
		</div>


		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>