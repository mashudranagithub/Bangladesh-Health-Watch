<!-- Head -->
@include('admin.partials.head')
<!-- /.Head -->

<!-- Header -->
@include('admin.partials.main_header')
<!-- /.Header -->

<!-- Left side column. contains the logo and sidebar -->
@include('admin.partials.left_sidebar')
<!-- /.Left side column. contains the logo and sidebar -->

<!-- Content Wrapper start here -->
<div class="content-wrapper">
@yield('content')
</div>
<!-- /.Content Wrapper end here -->

<!-- footer -->
@include('admin.partials.footer')
<!-- /.footer -->

<!-- footer -->
@include('admin.partials.control_sidebar')
<!-- /.footer -->

<!-- Scripts -->
@include('admin.partials.scripts')
<!-- /.Scripts -->

