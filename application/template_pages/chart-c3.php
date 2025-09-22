<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- C3 Charts css-->
		<link href="<?php echo base_url('public/assets/plugins/charts-c3/c3-chart.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">C3 Charts</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">C3 Charts</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row-->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-bar-stacked" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multiple Bar chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-bar" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-bar-rotated" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Sales Growth in every Month</h3>
									</div>
									<div class="card-body">
										<div id="chart-employment" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 1</h3>
									</div>
									<div class="card-body">
										<div id="chart-sracked" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line chart 2</h3>
									</div>
									<div class="card-body">
										<div id="chart-spline-rotated" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 3</h3>
									</div>
									<div class="card-body">
										<div id="chart-temperature" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 4</h3>
									</div>
									<div class="card-body">
										<div id="chart-area-spline-sracked" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 5 </h3>
									</div>
									<div class="card-body">
										<div id="chart-spline" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 6</h3>
									</div>
									<div class="card-body">
										<div id="chart-area" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 7</h3>
									</div>
									<div class="card-body">
										<div id="chart-area-spline" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart with step</h3>
									</div>
									<div class="card-body">
										<div id="chart-area-step" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 8</h3>
									</div>
									<div class="card-body">
										<div id="chart-step" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pie Chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-pie" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pie Chart with Multiple colors</h3>
									</div>
									<div class="card-body">
										<div id="chart-pie2" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut Chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-donut" class="chartsh donutShadow"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut Chart2</h3>
									</div>
									<div class="card-body">
										<div id="chart-donut2" class="chartsh donutShadow"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- c3.js Charts js-->
		<script src="<?php echo base_url('public/assets/plugins/charts-c3/d3.v5.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/charts-c3/c3-chart.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/charts.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>