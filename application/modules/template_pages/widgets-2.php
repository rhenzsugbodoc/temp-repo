<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Chart Widgets</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Widgets</a></li>
									<li class="breadcrumb-item active" aria-current="page"> Chart Widgets</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!--Row-->
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="mb-2 fs-18 text-muted">
													Total Application
												</div>
												<h1 class="font-weight-bold mb-1">45,675</h1>
												<span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> +1.4%</span>
											</div>
											<div class="col col-auto">
												<div class="mx-auto chart-circle chart-circle-md chart-circle-primary mt-sm-0 mb-0" data-value="0.85" data-thickness="12" data-color="#4454c3">
													<div class="mx-auto chart-circle-value text-center fs-20">85%</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="mb-2 fs-18 text-muted">
													Shortlisted
												</div>
												<h1 class="font-weight-bold mb-1">30,175</h1>
												<span class="text-success"><i class="fa fa-arrow-up mr-1"></i> +1.8%</span>
											</div>
											<div class="col col-auto">
												<div class="mx-auto chart-circle chart-circle-md chart-circle-success mt-sm-0 mb-0" data-value="0.60" data-thickness="12" data-color="#2dce89">
													<div class="mx-auto chart-circle-value text-center fs-20">60%</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="mb-2 fs-18 text-muted">
													Rejected
												</div>
												<h1 class="font-weight-bold mb-1">7,745</h1>
												<span class="text-danger"><i class="fa fa-arrow-down mr-1"></i> -2.4%</span>
											</div>
											<div class="col col-auto">
												<div class="mx-auto chart-circle chart-circle-md chart-circle-secondary mt-sm-0 mb-0" data-value="0.45" data-thickness="12" data-color="#f7346b">
													<div class="mx-auto chart-circle-value text-center fs-20">25%</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-4 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<p class="mb-1">Today Revenue</p>
												<h2 class="mb-0 font-weight-bold">$897k</h2>
											</div>
											<div class="col">
												<div id="spark1"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<p class="mb-1">Unique Visitors</p>
												<h2 class="mb-0 font-weight-bold">5,896</h2>
											</div>
											<div class="col">
												<div id="spark2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<p class="mb-1">Expenses</p>
												<h2 class="mb-0 font-weight-bold">$1,678</h2>
											</div>
											<div class="col">
												<div id="spark3"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--Row-->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1 ">
											  <i class="fa fa-line-chart mr-1"></i>
											  Total Sales
											</p>
											<h2 class="mb-0 font-weight-bold">4,786<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 12%</span> last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar11"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1 ">
											  <i class="fa fa-usd mr-1"></i>
											  Total Profits
											</p>
											<h2 class="mb-0 font-weight-bold">$873<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1 "></i> 0.34%</span> last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar12"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1 ">
											  <i class="fa fa-cart-arrow-down mr-1"></i>
											  Total Orders
											</p>
											<h2 class="mb-0 font-weight-bold">6,295<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 0.22%</span> last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar13"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1">
											  <i class="fa fa-signal mr-1"></i>
											  Total Sales Revenue
											</p>
											<h2 class="mb-0 font-weight-bold">$356<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.82%</span> last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar14"></span>
									</div>
								</div>
							</div>
						</div>
						<!--End row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body pb-0">
										<div>
											<p class=" mb-0">BTC / USDT</p>
											<h3 class="mb-1 font-weight-bold">$10513</h3>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body pb-0">
										<div>
											<p class=" mb-0">XEM / USDT</p>
											<h3 class="mb-1 font-weight-bold">$966</h3>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart1" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body pb-0">
										<div>
											<p class=" mb-0">XRP / USDT</p>
											<h3 class="mb-1 font-weight-bold">$7,349</h3>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart2" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body pb-0">
										<div>
											<p class=" mb-0">NEO / USDT</p>
											<h3 class="mb-1 font-weight-bold">$5,563</h3>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart3" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->


						<!-- Row -->
						<div class="row">
							<div class="col-lg-4 col-sm-12">
								<div class="card text-center">
									<div class="widget-line mt-5 ">
										<p class="mb-2">Shares</p>
										<h1 class="font-weight-bold">1452</h1>
									</div>
									<div class="mx-auto chart-circle chart-circle-md chart-circle-primary" data-value="0.67" data-thickness="15" data-color="#4454c3">
										<div class="chart-circle-value fs"><i class="fa fa-random text-primary"></i></div>
									</div>
									<ul class="widget-line-list mt-5 mb-5">
										<li class="border-right">45% <br><span class="text-success"><i class="fa fa-hand-o-up"></i> Positive</span></li>
										<li>6% <br><span class="text-danger"><i class="fa fa-hand-o-down"></i> Negative</span></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-sm-12 p-l-0 p-r-0">
								<div class="card text-center">
									<div class="widget-line mt-5">
										<p class="mb-2">Projects</p>
										<h1 class="font-weight-bold">3265</h1>
									</div>
									<div class="mx-auto chart-circle chart-circle-md chart-circle-secondary" data-value="0.55" data-thickness="15" data-color="#f7346b">
										<div class="chart-circle-value fs"><i class="fa fa-life-ring text-secondary"></i></div>
									</div>
									<ul class="widget-line-list mt-5 mb-5">
										<li class="border-right">55% <br><span class="text-success"><i class="fa fa-hand-o-up"></i> Positive</span></li>
										<li>3% <br><span class="text-danger"><i class="fa fa-hand-o-down"></i> Negative</span></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-sm-12 p-l-0">
								<div class="card text-center">
									<div class="widget-line  mt-5">
										<p class="mb-2">Users</p>
										<h1 class="font-weight-bold">9562</h1>
									</div>
									<div class="mx-auto chart-circle chart-circle-md chart-circle-success" data-value="0.67" data-thickness="15" data-color="#2dce89">
										<div class="chart-circle-value fs"><i class="fa fa-tags text-success"></i></div>
									</div>
									<ul class="widget-line-list mt-5 mb-5">
										<li class="border-right">75% <br><span class="text-success"><i class="fa fa-hand-o-up"></i> Positive</span></li>
										<li>6% <br><span class="text-danger"><i class="fa fa-hand-o-down"></i> Negative</span></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Peitychart js-->
		<script src="<?php echo base_url('public/assets/plugins/peitychart/jquery.peity.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/peitychart/peitychart.init.js'); ?>"></script>

		<!-- Apexchart js-->
		<script src="<?php echo base_url('public/assets/js/apexcharts.js'); ?>"></script>
		<!--Chart js -->
		<script src="<?php echo base_url('public/assets/plugins/chart/chart.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/chart/chart.extension.js'); ?>"></script>

		<!-- Widgets js-->
		<script src="<?php echo base_url('public/assets/js/widgets.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>