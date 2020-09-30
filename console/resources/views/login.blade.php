<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Login Page</title>
		<meta name="description"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{ url('/')}}/assets/admin/css/login.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->

		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ url('/')}}/assets/admin/css/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/')}}/assets/admin/css/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/')}}/assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->

		<link rel="shortcut icon" href="{{ url('/')}}/assets/admin/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">

		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url({{ url('/')}}/assets/admin/media/bg/bg-4.jpg);">
					<!--begin: Aside Container-->
					<div class="d-flex flex-row-fluid flex-column justify-content-between">
						<!--begin: Aside header-->
						<a href="#" class="flex-column-auto mt-5 pb-lg-0 pb-10">
							<img src="{{ url('/')}}/assets/admin/media/logos/logo-letter-1.png" class="max-h-70px" alt="" />
						</a>
						<!--end: Aside header-->
						<!--begin: Aside content-->
						<div class="flex-column-fluid d-flex flex-column justify-content-center">
							<h3 class="font-size-h1 mb-5 text-white">Welcome to Metronic!</h3>
							<p class="font-weight-lighter text-white opacity-80">The ultimate Bootstrap, Angular 8, React &amp; VueJS admin theme framework for next generation web apps.</p>
						</div>
						<!--end: Aside content-->
						<!--begin: Aside footer for desktop-->
						<div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
							<div class="opacity-70 font-weight-bold text-white">© 2020 Metronic</div>

						</div>
						<!--end: Aside footer for desktop-->
					</div>
					<!--end: Aside Container-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">

					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
						<!--begin::Signin-->
						<div class="login-form login-signin">
							<div class="text-center mb-10">
								<h3 class="font-size-h1">Sign In</h3>
								<p class="text-muted font-weight-bold">Enter your Email and password</p>
							</div>

							@if (Session::has('status'))
				    <div class="alert alert-{{ Session::get('status') }}">
				        <div>
				            <span>{{ Session::get('msg') }}</span>
				        </div>
				    </div>
				@endif
							<!--begin::Form-->

							<form action="{{ url('checklogin')}}" method="post" class="form" id="kt_login_signin_form" name="kt_login_signin_form" >
								<div class="form-group">
									@csrf

									<input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Email" name="email" id="username" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" id="password" autocomplete="off" />
								</div>
								<!--begin::Action-->
								<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
									<a href="javascript:;" class="text-dark-50 text-hover-primary my-3 mr-2" id="kt_login_forgot">Forgot Password ?</a>
									<button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
								</div>
								<!--end::Action-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->

						<!--begin::Forgot-->
						<div class="login-form login-forgot">
							<div class="text-center mb-10 mb-lg-20">
								<h3 class="font-size-h1">Forgotten Password ?</h3>
								<p class="text-muted font-weight-bold">Enter your email to reset your password</p>
							</div>
							<!--begin::Form-->
							<form action="{{ url('/forgot')}}" method="post" class="form" id="" name="kt_login_forgot_form" >
								@csrf
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Email" name="email" id="email" autocomplete="off" />
								</div>
								<div class="form-group d-flex flex-wrap flex-center">
									<button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Submit</button>
									<button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Back to Login</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Forgot-->
					</div>
					<!--end::Content body-->
					<!--begin::Content footer for mobile-->
					<div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
						<div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2020 Metronic</div>

					</div>
					<!--end::Content footer for mobile-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->

		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->

		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ url('/')}}/assets/admin/js/plugins.bundle.js"></script>
		<script src="{{ url('/')}}/assets/admin/js/prismjs.bundle.js"></script>
		<script src="{{ url('/')}}/assets/admin/js/scripts.bundle.js"></script>
		<script src="{{ url('/')}}/assets/admin/js/jquery/jquery.min.js"></script>
		<script src="{{ url('/')}}/assets/admin/js/jquery/jquery.validate.min.js"></script>

		<!--end::Global Theme Bundle-->

		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ url('/')}}/assets/admin/js/login-general.js"></script>
		<script src="{{ url('/')}}/assets/admin/js/toastr.js"></script>
		<!--end::Page Scripts-->

	</body>
	<!--end::Body-->


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

$('#kt_login_signin_form').validate({ // initialize the plugin
     rules: {
         username:{required:true,email:true },
         password:{required:true }
     },
     messages: {
          username: "Enter valid email id",
          password: "Enter Password"
         }
 });


 $("#kt_login_forgot_form").validate({
       rules: {
           user_name:{required:true,email:true }
       },
       messages: {
            user_name:"Enter valid email id"
           },
    submitHandler: function(form) {
      $.ajax({
                 url: "{{ url('/')}}/admin/forgot_password",
                 type: 'POST',
                 data: $('#kt_login_forgot_form').serialize(),
                 success: function(response) {
                     if (response=="success") {
                       toastr.options = {
						  "closeButton": false,
						  "debug": false,
						  "newestOnTop": false,
						  "progressBar": false,
						  "positionClass": "toast-top-right",
						  "preventDuplicates": false,
						  "onclick": null,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};
						toastr.success("Password reset and send to your mail. Please check your mail");
						window.setTimeout(function(){window.location.replace("{{ url('/')}}/admin/")},3000);

                     }else{
                      toastr.options = {
							  "closeButton": false,
							  "debug": false,
							  "newestOnTop": false,
							  "progressBar": false,
							   "positionClass": "toast-bottom-right",
							  "preventDuplicates": false,
							  "onclick": null,
							  "showDuration": "300",
							  "hideDuration": "1000",
							  "timeOut": "5000",
							  "extendedTimeOut": "1000",
							  "showEasing": "swing",
							  "hideEasing": "linear",
							  "showMethod": "fadeIn",
							  "hideMethod": "fadeOut"
							};

							toastr.error("Your username doesn't match our records. Please check.");
                     }
                 }
             });
           }
   });



 </script>
</html>
