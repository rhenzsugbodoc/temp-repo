<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!---Sweetalert css-->
		<link href="<?php echo base_url('public/assets/plugins/sweet-alert/jquery.sweet-modal.min.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/plugins/sweet-alert/sweetalert.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Sweet Alert</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Sample Sweet Alerts</h3>
									</div>
									<div class="card-body">
										<input type='button' class="btn btn-success mt-2" value='success alert' id='click'>
										<input type='button' class="btn btn-warning mt-2" value='Warning alert' id='click1'>
										<input type='button' class="btn btn-danger mt-2" value='Danger alert' id='click2'>
										<input type='button' class="btn btn-info mt-2" value='Info alert' id='click3'>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Forms Sweet-alert</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Title</label>
											<input type='text' class="form-control" placeholder='Title text' id='title'>
										</div>
										<div class="form-group">
											<label>Message</label>
											<input type='text' class="form-control" placeholder='Your message' id='message'>
										</div>
										<input type='button' class="btn btn-primary mt-2" value='Simple alert' id='but1'>&nbsp;
										<input type='button' class="btn btn-secondary mt-2" value='Alert with title' id='but2'>&nbsp;
										<input type='button' class="btn btn-info mt-2" value='Alert with image' id='but3'>&nbsp;
										<input type='button' class="btn btn-warning mt-2" value='With timer' id='but4'>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Prompt and confirm box Demo</h3>
									</div>
									<div class="card-body">
										<input type='button' class="btn btn-secondary" value='Prompt' id='prompt'>
										<input type='button' class="btn btn-primary" value='Confirm' id='confirm'>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Popover js -->
		<script src="<?php echo base_url('public/assets/js/popover.js'); ?>"></script>

		<!-- Sweet alert js -->
		<script src="<?php echo base_url('public/assets/plugins/sweet-alert/jquery.sweet-modal.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/sweet-alert/sweetalert.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/sweet-alert.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
