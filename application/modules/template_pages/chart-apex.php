<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Apex Chart</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Apex Chart</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row row-deck">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart With Randon data</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart-timeline" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											 <div id="chart" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart2" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart3" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart4" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Pie Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart5" class="h-300 mh-300 mh-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Signle Radar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart6" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Radar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart7" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Radial Bar circle Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart8" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Radial Bar circle Chart Multiple</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart9" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->
<?= $this->include('layout/footer'); ?>
		<!-- INTERNAL JS START -->
		<!--Chart js -->
		<script src="<?php echo base_url('public/assets/js/apexcharts.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/apexchart-custom.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>

