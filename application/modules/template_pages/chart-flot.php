<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Flot Charts</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Flot Charts</li>
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
										<div class="h-300" id="flotBar1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotBar2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Line Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotLine1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Line Chart Points</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotLine2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotArea1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart Points</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotArea2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Pie Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotPie1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotPie2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Flot Charts js-->
		<script src="<?php echo base_url('public/assets/plugins/flot/jquery.flot.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/flot/jquery.flot.fillbetween.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/flot/jquery.flot.pie.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/flot.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>