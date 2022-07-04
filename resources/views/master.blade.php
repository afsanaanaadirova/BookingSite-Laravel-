<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from www.einfosoft.com/templates/admin/spice/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jun 2022 06:43:28 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Spice Hotel | Bootstrap 4 Admin Dashboard Template + UI Kit</title>
	<!-- icons -->
	<link href="{{asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet">
	<link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!--bootstrap -->
	<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{asset('assets/plugins/summernote/summernote.css') }}" rel="stylesheet">
	<!-- morris chart -->
	{{-- <link href="{{asset('assets/plugins/morris/morris.css') }}" rel="stylesheet"> --}}
    <link href="{{asset('assets/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/light-gallery/css/lightgallery.css') }}" rel="stylesheet" type="text/css" />
	<!-- gallery -->
	<!-- Material Design Lite CSS -->
	<link href="{{asset('assets/plugins/material/material.min.css') }}" rel="stylesheet">
	<link href="{{asset('assets/css/material_style.css') }}" rel="stylesheet">
	<link href="{{asset('assets/plugins/dropzone/dropzone.css') }}" rel="stylesheet">
	<!-- animation -->
	<link href="{{asset('assets/css/pages/animate_page.css') }}" rel="stylesheet">
	<link href="{{asset('assets/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
	<!-- Template Styles -->
	<link href="{{asset('assets/css/plugins.min.css') }}" rel="stylesheet">
	<link href="{{asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="{{asset('assets/css/responsive.css') }}" rel="stylesheet">
	<link href="{{asset('assets/css/theme-color.css') }}" rel="stylesheet">

	<link href="{{asset('assets/plugins/dropzone/dropzone.css') }}" rel="stylesheet">

	<link href="{{asset('assets/plugins/flatpicker/flatpickr.min.css') }}" rel="stylesheet">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
	<link href="" rel="stylesheet" media="screen">
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<img alt="" src="assets/img/logo-white.png">
						 </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn search-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile"> John </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default animated jello">
								<li>
									<a href="login.html">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll">
						<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
							data-slide-speed="200">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="row">
										<div class="sidebar-userpic">
											<img src="assets/img/dp.jpg" class="img-responsive" alt=""> </div>
									</div>
									<div class="profile-usertitle">
										<div class="sidebar-userpic-name"> John Deo </div>
										<div class="profile-usertitle-job"> Manager </div>
									</div>
								</div>
							</li>
							<li class="nav-item start active">
								<li class="nav-item start">
									<a href="{{ route('IndexPage')}}" class="nav-link ">
										<i class="material-icons">business_center</i>
										<span class="title">Ana Səhifə</span>
									</a>
								</li>
							</li>
							<li class="nav-item">
								<li class="nav-item ">
									<a href="{{ route('CalendarPage')}}" class="nav-link ">
										<i class="material-icons">business_center</i>
										<span class="title">Təqvim</span>
										<span class="selected"></span>
									</a>
								</li>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">business_center</i>
									<span class="title">Rezerv</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{ route('NewBookingPage')}}" class="nav-link ">
											<span class="title">New Booking</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('ViewBookingPage')}}" class="nav-link ">
											<span class="title">View Booking</span>
										</a>
									</li>
									{{-- <li class="nav-item">
										<a href="{{ route('ViewBookingPage')}}" class="nav-link ">
											<span class="title">Edit Booking</span>
										</a>
									</li> --}}
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">vpn_key</i>
									<span class="title">Otaq Əlavə etmək</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{ route('AddRoomPage')}}" class="nav-link ">
											<span class="title">Əlavə et</span>
										</a>
									</li>
									{{-- <li class="nav-item">
										<a href="{{ route('AddRoomPage')}}" class="nav-link ">
											<span class="title">Bütün otaqlar</span>
										</a>
									</li> --}}
								</ul>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
            @yield('content')
			<!-- end page content -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2022 &copy; STP MMC
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script  src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>	
	<script  src="{{ asset('assets/plugins/popper/popper.min.js') }}"></script>
	<script  src="{{ asset('assets/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
	<script  src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<!-- bootstrap -->
	{{-- <script  src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>	 --}}
	<script  src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>	

	<script  src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>	
	<script  src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>	
	<script  src="{{ asset('assets/js/pages/calendar/calendar.min.js') }}"></script>	

	<script  src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>	
	<script  src="{{ asset('assets/js/pages/sparkline/sparkline-data.js') }}"></script>	
	<!-- Common js-->
	<script  src="{{ asset('assets/js/app.js') }}"></script>	
	<script  src="{{ asset('assets/js/layout.js') }}"></script>
	<script  src="{{ asset('assets/js/theme-color.js') }}"></script>
	<!-- material -->
	<script  src="{{ asset('assets/plugins/material/material.min.js') }}"></script>
	<script  src="{{ asset('assets/js/pages/material_select/getmdl-select.js') }}"></script>

	<script  src="{{ asset('assets/plugins/dropzone/dropzone.js') }}"></script>
	<script  src="{{ asset('assets/plugins/dropzone/dropzone-call.js') }}"></script>

	<script  src="{{ asset('assets/plugins/flatpicker/flatpickr.min.js') }}"></script>
	<script  src="{{ asset('assets/js/pages/datetime/datetime-data.js') }}"></script>
	<!-- animation -->
	<script  src="{{ asset('assets/js/pages/ui/animations.js') }}"></script>
	<script  src="{{ asset('assets/plugins/light-gallery/js/lightgallery-all.js') }}"></script>
	<script  src="{{ asset('assets/plugins/light-gallery/js/image-gallery.js') }}"></script>
	<!-- gallery -->

</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/spice/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jun 2022 06:44:42 GMT -->
</html>