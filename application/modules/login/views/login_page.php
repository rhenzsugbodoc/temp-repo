<head>
		<!--Favicon -->
		<link rel="icon" href="<?php echo base_url('public/assets/images/brand/favicon.ico'); ?>" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="<?php echo base_url('public/assets/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />

		<!-- Style css -->
		<link href="<?php echo base_url('public/assets/css/style.css'); ?>" rel="stylesheet" />

		<!-- Dark css -->
		<link href="<?php echo base_url('public/assets/css/dark.css'); ?>" rel="stylesheet" />

		<!-- Skins css -->
		<link href="<?php echo base_url('public/assets/css/skins.css'); ?>" rel="stylesheet" />

		<!-- Animate css -->
		<link href="<?php echo base_url('public/assets/css/animated.css'); ?>" rel="stylesheet" />

		<!-- P-scroll bar css-->
		<link href="<?php echo base_url('public/assets/plugins/p-scrollbar/p-scrollbar.css'); ?>" rel="stylesheet" />

		<!---Icons css-->
		<link href="<?php echo base_url('public/assets/plugins/web-fonts/icons.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/plugins/web-fonts/plugin.css'); ?>" rel="stylesheet" />

		<!---jvectormap css-->
		<link href="<?php echo base_url('public/assets/plugins/jvectormap/jqvmap.css'); ?>" rel="stylesheet" />

		<!-- Data table css -->
		<link href="<?php echo base_url('public/assets/plugins/datatable/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />

		<!--Daterangepicker css-->
		<link href="<?php echo base_url('public/assets/plugins/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet" />
</head>
	<body class="h-100vh page-style1 light-mode default-sidebar">
		<div class="page">
			<div class="page-single">
				<div class="p-5">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-lg-9 col-xl-8">
									<div class="card-group mb-0">
										<div class="card p-4 page-content">
											<div class="card-body page-single-content">
												<div class="w-100">
												<div class="">
													<h1 class="mb-2">Login</h1>
													<p class="text-muted">Sign In to your account</p>
												</div>
												<div class="btn-list d-sm-flex">
													<a href="https://www.google.com/gmail/" class="btn btn-google btn-block">Google</a>
													<a href="https://twitter.com/" class="btn btn-twitter d-block d-sm-inline mr-0 mr-sm-2">Twitter</a>
													<a href="https://www.facebook.com/" class="btn btn-facebook d-block d-sm-inline">Facebook</a>
												</div>
												<hr class="divider my-6">
												<div class="input-group mb-3">
													<span class="input-group-addon"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3"/><circle cx="12" cy="8" opacity=".3" r="2"/><path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"/></svg></span>
													<input type="text" class="form-control" placeholder="Username">
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg></span>
													<input type="password" class="form-control" placeholder="Password">
												</div>
												<div class="row">
													<div class="col-12">
														<button type="button" class="btn btn-lg btn-primary btn-block"><i class="fe fe-arrow-right"></i> Login</button>
													</div>
													<div class="col-12">
														<a href="<?php echo base_url('pages/forgot-password-1'); ?>" class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
													</div>
												</div>
											</div>
											</div>
										</div>
										<div class="card text-white bg-primary py-5 d-md-down-none page-content mt-0">
											<div class="card-body text-center justify-content-center page-single-content">
												<img src="<?php echo base_url('public/assets/images/pattern/login.png'); ?>" alt="img">
											</div>
										</div>
									</div>
									<div class="text-center pt-4">
										<div class="font-weight-normal fs-16">Don't have an account? <a class="btn-link font-weight-normal" href="<?= site_url('register'); ?>">Register Here</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Jquery js-->
		<script src="<?php echo base_url('public/assets/js/vendors/jquery-3.5.1.min.js'); ?>"></script>

		<!-- Bootstrap4 js-->
		<script src="<?php echo base_url('public/assets/plugins/bootstrap/popper.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

		<!--Othercharts js-->
		<script src="<?php echo base_url('public/assets/plugins/othercharts/jquery.sparkline.min.js'); ?>"></script>

		<!-- Circle-progress js-->
		<script src="<?php echo base_url('public/assets/js/vendors/circle-progress.min.js'); ?>"></script>

		<!-- Jquery-rating js-->
		<script src="<?php echo base_url('public/assets/plugins/rating/jquery.rating-stars.js'); ?>"></script>

		<!--Horizontal js-->
		<script src="<?php echo base_url('public/assets/plugins/horizontal-menu/horizontal.js'); ?>"></script>

		<!-- ECharts js -->
		<script src="<?php echo base_url('public/assets/plugins/echarts/echarts.js'); ?>"></script>

		<!-- Peitychart js-->
		<script src="<?php echo base_url('public/assets/plugins/peitychart/jquery.peity.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/peitychart/peitychart.init.js'); ?>"></script>

		<!-- Apexchart js-->
		<script src="<?php echo base_url('public/assets/js/apexcharts.js'); ?>"></script>

		<!--Moment js-->
		<script src="<?php echo base_url('public/assets/plugins/moment/moment.js'); ?>"></script>

		<!-- Daterangepicker js-->
		<script src="<?php echo base_url('public/assets/plugins/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/daterange.js'); ?>"></script>

		<!---jvectormap js-->
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery.vmap.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery.vmap.world.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery.vmap.sampledata.js'); ?>"></script>

		<!-- P-scroll js-->
		<script src="<?php echo base_url('public/assets/plugins/p-scrollbar/p-scrollbar.js'); ?>"></script>

		<!-- Index js-->
		<script src="<?php echo base_url('public/assets/js/index1.js'); ?>"></script>

		<!-- Data tables js-->
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/jquery.dataTables.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/dataTables.bootstrap4.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/dataTables.buttons.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/buttons.bootstrap4.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/jszip.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/pdfmake.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/vfs_fonts.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/datatable/js/buttons.html5.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/buttons.print.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/buttons.colVis.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/dataTables.responsive.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/responsive.bootstrap4.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/datatables.js'); ?>"></script>

		<!--Counters -->
		<script src="<?php echo base_url('public/assets/plugins/counters/counterup.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/counters/waypoints.min.js'); ?>"></script>

		<!--Chart js -->
		<script src="<?php echo base_url('public/assets/plugins/chart/chart.bundle.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/chart/utils.js'); ?>"></script>

		<!-- Custom js-->
		<script src="<?php echo base_url('public/assets/js/custom.js'); ?>"></script>

	</body>
</html>