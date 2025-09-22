<?= $this->include('layout/custom-head'); ?>
		<!-- INTERNAL CSS START -->
		<!--- JQUERY-COUNTDOWN CSS -->
		<link href="<?php echo base_url('public/assets/plugins/jquery-countdown/jquery.countdown.css'); ?>" rel="stylesheet" type="text/css">
		<!-- INTERNAL CSS END -->
	</head>

	<body class="page-style1 page-style2  light-mode default-sidebar">
		<div class="d-md-flex">
			<div class="w-40 bg-style h-100vh page-style">
				<div class="page-content">
					<div class="page-single-content">
						<img src="<?php echo base_url('public/assets/images/brand/logo1.png') ?>" alt="img" class="header-brand-img mb-5">
						<div class="card-body text-white py-5 px-8">
							<img src="<?php echo base_url('public/assets/images/png/1.png') ?>" alt="img" class="w-100 mx-auto text-center">
						</div>
					</div>
				</div>
			</div>
			<div class="w-80 page-content">
				<div class="page-single-content">
					<div class="card-body p-6">
						<div class="row">
							<div class="col-lg-8 col-sm-12 center-block align-items-center construction  ">
								<div class="construction-body text-center">
									<div class="card-body ">
										<h2 class="display-5 mb-2 font-weight-bold"><strong>Under Construction</strong></h2>
										<h4>Our website is in Under construction</h4>

										<br>
										<div id="launch_date"></div>
									</div>
									<div class="row">
										<div class="col-9 d-block mx-auto">
											<div class="input-group mb-4">
												<span class="input-group-addon bg-white pr-0"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"/></svg></span>
												<input type="text" class="form-control border-left-0 border-right-0" placeholder="Enter Your Email">
												<a href="#" class="input-group-append bg-white p-2 btn"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M4 8.25l7.51 1-7.5-3.22zm.01 9.72l7.5-3.22-7.51 1z" opacity=".3"></path><path d="M2.01 3L2 10l15 2-15 2 .01 7L23 12 2.01 3zM4 8.25V6.03l7.51 3.22-7.51-1zm.01 9.72v-2.22l7.51-1-7.51 3.22z"></path></svg></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?= $this->include('layout/custom-footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- JQUERY-COUNTDOWN JS-->
		<script src="<?php echo base_url('public/assets/plugins/jquery-countdown/jquery.plugin.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jquery-countdown/jquery.countdown.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jquery-countdown/countdown.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>


