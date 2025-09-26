<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Chartjs Chart</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Chartjs Chart</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Bar Chart</div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Transparency </div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar2" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Gradient Bar Chart</div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar3" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- / Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartBar4" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Bar Chart Style2</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartBar5" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Vertical Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartStacked1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartStacked2" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Line Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartLine1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartArea1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartPie" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Pie Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartDonut" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->
<?= $this->include('layout/footer'); ?>
		<!-- INTERNAL JS START -->
		<!--Chart js -->
		<script src="<?php echo base_url('public/assets/plugins/chart/chart.bundle.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/chart/utils.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/chart.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
