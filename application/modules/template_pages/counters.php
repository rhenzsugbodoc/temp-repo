<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Counters</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Counters</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top  " src="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4 class="font-weight-bold"><a href="#">Time Counting From 0</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="bg-primary p-3 br-3 mt-4 text-center">
											<span id="timer-countup" class="h4 text-white mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top " src="<?php echo base_url('public/assets/images/photos/9.jpg'); ?>" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4 class="font-weight-bold"><a href="#">Time Counting From 60 to 20</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="bg-secondary p-3 br-3 mt-4 text-center">
											<span id="timer-countinbetween" class="h4 text-white mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top " src="<?php echo base_url('public/assets/images/photos/10.jpg'); ?>" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4 class="font-weight-bold"><a href="#">Time 1 minute counter</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="bg-warning p-3 br-3 mt-4 text-center">
											<span id="timer-countercallback" class="h4 text-white mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Time Counting days Limit</h3>
									</div>
									<div class="card-body text-center">
										<div class="bg-info p-3 br-3 text-center">
											<span id="timer-outputpattern" class="h3 text-white mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center list-icons">
										<i class="fe fe-user text-primary"></i>
										<h5 class="mt-4">Employess</h5>
										<h2 class="counter">2569</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center list-icons">
										<i class="fe fe-dollar-sign text-success"></i>
										<h5 class="mt-4">Profit</h5>
										<h2 class="counter"> 2,56989.32</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center list-icons">
										<i class="fe fe-alert-circle text-secondary"></i>
										<h5 class="mt-4">Errors</h5>
										<h2 class="counter">0.8998</h2>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Day Counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="under-countdown row">
											<div class="col">
												<div class="countdown">
													<span class="days">35</span>
													<span class="">Days</span>
												</div>
											</div>
											<div class="col">
												<div class="countdown">
													<span class="hours">17</span>
													<span class="">Hours</span>
												</div>
											</div>
											<div class="col">
												<div class="countdown">
													<span class="minutes">50</span>
													<span class="">Minutes</span>
												</div>
											</div>
											<div class="col">
												<div class="countdown">
													<span class="seconds">39</span>
													<span class="">Seconds</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!--Time Counter -->
		<script src="<?php echo base_url('public/assets/plugins/counters/jquery.missofis-countdown.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/counters/counter.js'); ?>"></script>

		<!--Counters -->
		<script src="<?php echo base_url('public/assets/plugins/counters/counterup.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/counters/waypoints.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/countdown/moment.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/countdown/moment-timezone.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/countdown/moment-timezone-with-data.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/countdown/countdowntime.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/counterup.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>

