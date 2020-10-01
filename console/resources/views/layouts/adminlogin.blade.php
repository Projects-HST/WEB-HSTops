<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ url('/')}}/assets/admin/css/login.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/')}}/assets/admin/css/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/')}}/assets/admin/css/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/')}}/assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<script src="{{ url('/')}}/assets/admin/js/jquery/jquery.min.js"></script>
		<link rel="shortcut icon" href="{{ url('/')}}/assets/admin/media/logos/favicon.ico" />
	</head>
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">

		<div class="d-flex flex-column flex-root">
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url({{ url('/')}}/assets/admin/media/bg/bg-4.jpg);">
					<div class="d-flex flex-row-fluid flex-column justify-content-between">
						<a href="#" class="flex-column-auto mt-5 pb-lg-0 pb-10">
							<img src="{{ url('/')}}/assets/admin/media/logos/logo-letter-1.png" class="max-h-70px" alt="" />
						</a>
						<div class="flex-column-fluid d-flex flex-column justify-content-center">
							<h3 class="font-size-h1 mb-5 text-white">Welcome to Metronic!</h3>
							<p class="font-weight-lighter text-white opacity-80">The ultimate Bootstrap, Angular 8, React &amp; VueJS admin theme framework for next generation web apps.</p>
						</div>
						<div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
							<div class="opacity-70 font-weight-bold text-white">© 2020 Metronic</div>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
					<div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
						@yield('content')
					</div>
					<div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
						<div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2020 Metronic</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{ url('/')}}/assets/admin/js/plugins.bundle.js"></script>
		<script src="{{ url('/')}}/assets/admin/js/prismjs.bundle.js"></script>
		<script src="{{ url('/')}}/assets/admin/js/scripts.bundle.js"></script>
		<script src="{{ url('/')}}/assets/admin/js/jquery/jquery.validate.min.js"></script>
		<!-- <script src="{{ url('/')}}/assets/admin/js/login-general.js"></script> -->
		<script src="{{ url('/')}}/assets/admin/js/toastr.js"></script>
	</body>
	<script type="text/javascript">
$(".toggle-password").click(function() {
  $(this).toggleClass("fa-eye-slash fa-eye");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
 </script>
</html>
