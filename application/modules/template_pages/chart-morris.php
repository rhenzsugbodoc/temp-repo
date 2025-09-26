<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Morris Charts css -->
		<link href="<?php echo base_url('public/assets/plugins/morris/morris.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Morris Charts</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Morris Charts</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisBar1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisBar3"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Line Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisLine1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisArea1"></div>
									</div>
								</div>
							</div><!-- col-6 -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-donut-wrapper-demo" id="morrisBar6"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-donut-wrapper-demo" id="morrisBar7"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card mg-b-md-20">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!--Morris Charts js -->
		<script src="<?php echo base_url('public/assets/plugins/morris/raphael-min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/morris/morris.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/morris.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
