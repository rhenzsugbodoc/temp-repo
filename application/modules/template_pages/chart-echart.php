<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Echarts</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Echarts</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart1" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Combination of Line & Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart2" class="chartsh "></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Vertical Line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart3" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Vertical Combination of Line & Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart4" class="chartsh "></div>
									</div>
								</div>
							</div>
						</div>
						<!--End  Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart5" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart6" class="chartsh "></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart7" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single smooth line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart8" class="chartsh "></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- ECharts js-->
		<script src="<?php echo base_url('public/assets/plugins/echarts/echarts.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/echarts.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>