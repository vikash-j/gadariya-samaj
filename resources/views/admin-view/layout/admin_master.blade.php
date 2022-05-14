<!-- Header -->
@include('admin-view.includes.header')
<!-- Header Menu-->
@include('admin-view.includes.header_menu')
<!-- Change Page Title -->
@include('admin-view.includes.sidebar')
<!--  Sidebar Content -->
@section('title', 'Home')
<!-- Content -->
@yield('content')
<!-- Footer Content-->
@include('admin-view.includes.footer_content')
<!-- Footer -->
@include('admin-view.includes.footer')
