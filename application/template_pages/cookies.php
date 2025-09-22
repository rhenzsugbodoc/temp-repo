<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!--Cookies css -->
		<link href="<?php echo base_url('public/assets/plugins/cookies/accept-cookies.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/plugins/cookies/cookies.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Cookies</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cookies</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Cookies Position
										</div>
									</div>
									<div class="card-body">
										<div class="btn-list  position-buttons">
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="topleft">Top Left Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="top">Top Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="topright">Top Right Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="bottomleft">Bottom Left Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="bottom">Bottom Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="bottomright">Bottom Right Cookie</a>
											<a href="#" class="btn btn-primary option-button mg-t-5" data-option="default">Default Cookie</a>
										</div>
									</div>
								</div>
								<!-- /div -->

								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Cookies Background
										</div>
									</div>
									<div class="card-body">
										<div id="theme-buttons" class="btn-list theme-buttons">
											<a href="#" class="btn btn-light theme-button mg-t-5" data-theme1="theme-light">Light</a>
											<a href="#" class="btn btn-dark theme-button mg-t-5" data-theme1="theme-dark">Dark</a>
											<a href="#" class="btn btn-primary theme-button mg-t-5" data-theme1="theme-primary">primary</a>
											<a href="#" class="btn btn-info theme-button mg-t-5" data-theme1="theme-info">Info</a>
											<a href="#" class="btn btn-danger theme-button mg-t-5" data-theme1="theme-danger">Danger</a>
											<a href="#" class="btn btn-success theme-button mg-t-5" data-theme1="theme-success">Success</a>
											<a href="#" class="btn btn-warning theme-button mg-t-5" data-theme1="theme-warning">Warning</a>
										</div>
									</div>
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Customize Cookie Text
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="customHeader" id="customHeader" value="" placeholder="Popup Header Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customSubHeader" id="customSubHeader" value="" placeholder="Popup Sub Header Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customAccept" id="customAccept" value="" placeholder="Accept Button Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customLearnMore" id="customLearnMore" value="" placeholder="Learn More Button Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customLearnMoreInfo" id="customLearnMoreInfo" value="" placeholder="Learn More Info Text...">
												</div>
												<div class="">
													<a href="#" class="btn btn-primary px-6 option-button" data-option="customtext">Apply</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- div -->
							</div>
						</div>
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!--Cookies js-->
		<script src="<?php echo base_url('public/assets/plugins/cookies/cookiepopup.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/cookie.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>