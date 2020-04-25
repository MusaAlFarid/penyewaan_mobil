<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>ReMo</title>
    <meta name="description" content="Tasks files listing">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{url('frontend/assets/css/pages/todo/todo.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{url('frontend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{url('frontend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/img/favicon.png')}}" rel="icon" type="image/png">
    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/datatables-bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">
    <link href="{{asset('backend/vendor/bootstrap-fileinput-master/css/fileinput.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/select2/select2-bootstrap.min.css')}}" rel="stylesheet">
    {{-- font awesome picker --}}
    <link href="{{asset('backend/vendor/fontawesome-iconpicker/fontawesome-iconpicker.min.css')}}" rel="stylesheet">

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/media/logos/favicon.ico')}}" />
    @yield('css')
</head>