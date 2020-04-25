<!DOCTYPE html>

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
							@include('layouts.subheader')

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
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <span class="kt-portlet__head-icon kt-hidden">
                                                <i class="la la-gear"></i>
                                            </span>
                                            <h3 class="kt-portlet__head-title">
                                                @yield('title')
                                            </h3>
                                        </div>
                                    </div> 
                                  @yield('content')
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

        @include('layouts.script')
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>