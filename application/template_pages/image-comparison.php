<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!--Images-Comparsion css -->
		<link href="<?php echo base_url('public/assets/plugins/images-comparsion/twentytwenty.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Image Comparison</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Image Comparison</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Image Comparison</div>
									</div>
									<div class="card-body">
										<div class="twentytwenty-container">
											<img src="<?php echo base_url('public/assets/images/photos/about.jpg'); ?>" alt="img" />
											<img src="<?php echo base_url('public/assets/images/photos/about2.jpg'); ?>" alt="img" />
										</div>
									</div>
								</div>
								<!-- div -->
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Vertical Image Comparison</div>
									</div>
									<div class="card-body">
										<div class="twentytwenty-container" data-orientation="vertical">
											<img src="<?php echo base_url('public/assets/images/photos/login.jpg'); ?>" alt="img" />
											<img src="<?php echo base_url('public/assets/images/photos/login2.jpg'); ?>" alt="img" />
										</div>
									</div>
								</div>
								<!-- div -->
							</div>
						</div>
<?= $this->include('layout/footer'); ?>
		<!-- INTERNAL JS START -->
		<!-- Images-Comparsion js -->
		<script src="<?php echo base_url('public/assets/plugins/images-comparsion/jquery.twentytwenty.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/images-comparsion/jquery.event.move.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/image-comparision.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
