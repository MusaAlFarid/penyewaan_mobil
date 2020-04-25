		

			<script>
				var KTAppOptions = {
					"colors": {
						"state": {
							"brand": "#374afb",
							"light": "#ffffff",
							"dark": "#282a3c",
							"primary": "#5867dd",
							"success": "#34bfa3",
							"info": "#36a3f7",
							"warning": "#ffb822",
							"danger": "#fd3995"
						},
						"base": {
							"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
							"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
						}
					}
				};
			</script>
	
			<!-- end::Global Config -->
	
			<!--begin::Global Theme Bundle(used by all pages) -->
			<script src="{{ asset('frontend/assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
			<script src="{{ asset('frontend/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
	
			<!--end::Global Theme Bundle -->
			<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('backend/js/jquery-datatables.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('backend/js/datatables-bootstrap.min.js')}}" type="text/javascript"></script>
			<!--begin::Page Vendors(used by this page) -->
			<script src="{{ asset('frontend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
			<script src="{{ asset('frontend/assets/plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>
	
			<!--end::Page Vendors -->
	
			<!--begin::Page Scripts(used by this page) -->
			<script src="{{ asset('frontend/assets/js/pages/dashboard.js') }}" type="text/javascript"></script>

			
			
		<!--begin::Page Scripts(used by this page) -->
		<script src="{{url ('frontend/assets/js/pages/custom/todo/todo.js') }}" type="text/javascript"></script>

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{url ('frontend/assets/js/pages/components/charts/amcharts/charts.js') }}" type="text/javascript"></script>
		@yield('js')
