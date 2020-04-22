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
		<script src="{{url ('frontend/assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
		<script src="{{url ('frontend/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{url ('frontend/assets/js/pages/custom/todo/todo.js') }}" type="text/javascript"></script>
	</script>

	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="{{url ('frontend/assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
	<script src="{{url ('frontend/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>

	<!--end::Global Theme Bundle -->

	<!--begin::Page Vendors(used by this page) -->
	<script src="//www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
	<script src="//www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
	<script src="//www.amcharts.com/lib/3/radar.js" type="text/javascript"></script>
	<script src="//www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
	<script src="//www.amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js" type="text/javascript"></script>
	<script src="//www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
	<script src="//www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
	<script src="//www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>

	<!--end::Page Vendors -->

	<!--begin::Page Scripts(used by this page) -->
	<script src="{{url ('frontend/assets/js/pages/components/charts/amcharts/charts.js') }}" type="text/javascript"></script>
