<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon"  href="{{asset('assets/images/favicon.png')}}">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <link href="{{asset('css/float-chart.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper">
    @include('admin.layouts.header');
    @include('admin.layouts.aside');
    @yield('main');
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('js/sparkline.js')}}"></script>
<script src="{{asset('js/waves.js')}}"></script>
<script src="{{asset('js/sidebarmenu.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/excanvas.js')}}"></script>
<script src="{{asset('js/jquery.flot.js')}}"></script>
<script src="{{asset('js/jquery.flot.pie.js')}}"></script>
<script src="{{asset('js/jquery.flot.time.js')}}"></script>
<script src="{{asset('js/jquery.flot.stack.js')}}"></script>
<script src="{{asset('js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('js/chart-page-init.js')}}"></script>
</body>

</html>
