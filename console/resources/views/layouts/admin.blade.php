<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ url('/')}}/assets/admin/css/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/')}}/assets/admin/css/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/')}}/assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/')}}/assets/admin/css/font_awesome.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('/')}}/assets/admin/css/custom.css" rel="stylesheet" type="text/css" />
		<script src="{{ url('/assets')}}/jquery.js"></script>

	</head>
	<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">
		<div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
			<a href="index.html">
				<img alt="Logo" src="{{ url('/')}}/assets/admin/media/logos/logo-letter-9.png" class="max-h-30px" />
			</a>

		</div>
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-row flex-column-fluid page">
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<div id="kt_header" class="header flex-column header-fixed">
						<div class="header-top">
							<div class="container">
								<div class="d-none d-lg-flex align-items-center mr-3">
									<a href="index.html" class="mr-10">
										<img alt="Logo" src="{{ url('/')}}/assets/admin/media/logos/logo-letter-9.png" class="max-h-35px" />
									</a>
									<div class="w-500px" style="font-size:30px;color:#ffffff;">
										Mr. O Panneerselvam
									</div>
								</div>
								<div class="topbar">
									<div class="topbar-item">
										<div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
											<div class="d-flex flex-column text-right pr-3">
												<span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline">Sean</span>
												<span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">UX Designer</span>
											</div>
											<span class="symbol symbol-35">
												<span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">S</span>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header-bottom">
							<div class="container">
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">

										<ul class="menu-nav">
											<li class="menu-item menu-item-here menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="{{ url('admin/dashboard')}}" class="menu-link">
													<span class="menu-text">Dashboard</span>
													<span class="menu-desc">Recent Updates &amp; Reports</span>
												</a>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="datatable.html" class="menu-link">
													<span class="menu-text">Masters</span>
													<span class="menu-desc">Components &amp; Elements</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-classic menu-submenu-left">
													<ul class="menu-subnav">
														<!-- <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">Role Master</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">Languages</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">Document Tpes</span>
															</a>
														</li> -->
														<li class="menu-item">
															<a href="{{ url('/admin/app_intro_video')}}" class="menu-link">
																<span class="menu-text">App Intro Video</span>
															</a>
														</li>
														<li class="menu-item">
															<a href="{{ url('admin/app_live_events')}}" class="menu-link">
																<span class="menu-text">Live Events</span>
															</a>
														</li>
														<li class="menu-item">
															<a href="{{ url('/admin/news_category')}}" class="menu-link">
																<span class="menu-text">News Category</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">User Management</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="javascript:;" class="menu-link menu-toggle">
													<span class="menu-text">News Feed</span>
													<span class="menu-desc">Records &amp; Form Entries</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-classic menu-submenu-left">
													<ul class="menu-subnav">
														<li class="menu-item">
															<a href="{{ url('admin/create_newsfeed')}}" class="menu-link">
																<span class="menu-text">Add News feed</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">News feeds</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																<ul class="menu-subnav">
																	<li class="menu-item menu-item-submenu">
																		<a href="{{ url('/')}}/admin/list_stories" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Stories</span>
																		</a>
																	</li>
																	<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link menu-toggle">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Posts</span>
																		</a>
																	</li>
																	<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link menu-toggle">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Events</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">Comments</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																<ul class="menu-subnav">
																	<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link menu-toggle">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Confirmed</span>
																		</a>
																	</li>
																	<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																		<a href="javascript:;" class="menu-link menu-toggle">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Unconfirmed</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>


													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="javascript:;" class="menu-link menu-toggle">
													<span class="menu-text">About OPS</span>
													<span class="menu-desc">Starter Applications</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-classic menu-submenu-left">
													<ul class="menu-subnav">
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">Personal Info</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">Social Media Info</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">Awards & Achievements</span>
															</a>
														</li>

													</ul>
												</div>
											</li>

											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
												<a href="javascript:;" class="menu-link menu-toggle">
													<span class="menu-text">Party Info</span>
													<span class="menu-desc">Starter Applications</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-classic menu-submenu-left">
													<ul class="menu-subnav">
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">About Party</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">Party’s State List</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
															<a href="javascript:;" class="menu-link menu-toggle">
																<span class="menu-text">Election Info</span>
															</a>
														</li>

													</ul>
												</div>
											</li>
										</ul>

									</div>

								</div>

							</div>

						</div>

					</div>

  @yield('content')

										<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
											<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
												<div class="text-dark order-2 order-md-1">
													<span class="text-muted font-weight-bold mr-2">2020©</span>
													<a href="" target="_blank" class="text-dark-75 text-hover-primary">Happy Sanz Tech</a>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
								<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5" kt-hidden-height="40" style="">
									<h3 class="font-weight-bold m-0"></h3>
									<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
										<i class="ki ki-close icon-xs text-muted"></i>
									</a>
								</div>


								<div class="offcanvas-content pr-5 mr-n5">
									<div class="d-flex align-items-center mt-5">
										<div class="symbol symbol-100 mr-5">
											<div class="symbol-label" style="background-image:url('{{ url('/')}}/assets/admin/media/users/300_21.jpg')"></div>
											<i class="symbol-badge bg-success"></i>
										</div>
										<div class="d-flex flex-column">
											<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
											<div class="text-muted mt-1">Application Developer</div>
											<div class="navi mt-2">
												<a href="{{ url('/')}}//admin/logout/" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
											</div>
										</div>
									</div>
									<div class="separator separator-dashed mt-8 mb-5"></div>
									<div class="navi navi-spacer-x-0 p-0">
										<a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
											<div class="navi-link">
												<div class="symbol symbol-40 bg-light mr-3">
													<div class="symbol-label">

													</div>
												</div>
												<div class="navi-text">
													<div class="font-weight-bold">My Profile</div>
													<div class="text-muted">Account settings and more</div>
												</div>
											</div>
										</a>
										<!--end:Item-->
										<!--begin::Item-->
										<a href="custom/apps/user/profile-3.html" class="navi-item">
											<div class="navi-link">
												<div class="symbol symbol-40 bg-light mr-3">
													<div class="symbol-label">

													</div>
												</div>
												<div class="navi-text">
													<div class="font-weight-bold">Change Password</div>
													<div class="text-muted">Inbox and tasks</div>
												</div>
											</div>
										</a>
										<!--end:Item-->
										<!--begin::Item-->
										<a href="{{ url('/logout') }}" class="navi-item">
											<div class="navi-link">
												<div class="symbol symbol-40 bg-light mr-3">
													<div class="symbol-label">

													</div>
												</div>
												<div class="navi-text">
													<div class="font-weight-bold">Logout</div>

												</div>
											</div>
										</a>
									</div>
								</div>
							</div>







						</body>
						<script src="{{ url('/')}}/assets/admin/js/plugins.bundle.js"></script>
						<script src="{{ url('/')}}/assets/admin/js/prismjs.bundle.js"></script>
						<script src="{{ url('/')}}/assets/admin/js/scripts.bundle.js"></script>
						<script src="{{ url('/')}}/assets/admin/js/widgets.js"></script>
					</html>
