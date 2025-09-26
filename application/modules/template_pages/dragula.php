<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Prism Css -->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

		<!-- Dragula Css -->
		<link href="<?php echo base_url('public/assets/plugins/dragula/dragula.css'); ?>" rel="stylesheet">
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Dragula Cards</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dragula Cards</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="examples ">
							<div class="parent1 row">
								<div class="wrapper col-lg-4">
									<div class="card p-5" id="left-defaults">
										<h4 class="card-title mb-6">Draggable Cards</h4>
										<div class="card-alert alert alert-success mb-0 br-3 mb-4">
											Adding action was successful
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-primary br-bl-7 br-tl-7"></div>
											<div class="card-body d-flex flex-column p-3">
												<h4><a href="#">Play Music</a></h4>
												<div class="text-muted">
													Some quick example text to build
												</div>
												<div class="d-flex align-items-center pt-5 mt-auto text-center">
													<div class="text-muted">
														<a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-backward"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-play"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-forward"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-secondary br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex align-items-center mt-auto">
													<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
													<div>
														<a class="font-weight-semibold" href="<?php echo base_url('pages/profile'); ?>">Anna Ogden</a> <small class="d-block text-muted fa-12">2 days ago</small>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-success br-bl-7 br-tl-7"></div>New Application
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-warning br-bl-7 br-tl-7"></div>Face Bool Live
										</div>
										<div class="card border shadow-none overflow-hidden mb-4 br-3">
											<div class="card-status card-status-left bg-danger br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex mt-0">
													<figure class="rounded-circle align-self-start mb-0">
														<img alt="Generic placeholder image" class="avatar brround avatar-xs mr-3" src="<?php echo base_url('public/assets/images/users/1.jpg'); ?>">
													</figure>
													<div class="media-body mt-1">
														<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden mb-0 br-3 border shadow-none overflow-hidden">
											<div class="card-status card-status-left bg-blue br-bl-7 br-tl-7"></div>
											<a href="#"><img class="card-img-top  " src="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" alt="img"></a>
											<div class="card-body d-flex flex-column p-3">
												Who chooses to enjoy a pleasure that has no annoying consequences
											</div>
										</div>
									</div>
								</div>
								<div class="wrapper col-lg-4">
									<div class="card p-5" id="right-defaults">
										<h4 class="card-title mb-6">Draggable Cards</h4>
										<div class="card-alert alert alert-danger mb-0 br-3 mb-4">
											Adding action was Warning
										</div>

										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-success br-bl-7 br-tl-7"></div>Website Designing
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-warning br-bl-7 br-tl-7"></div>New Orders
										</div>
										<div class="card border shadow-none overflow-hidden mb-4 br-3">
											<div class="card-status card-status-left bg-danger br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex mt-0">
													<figure class="rounded-circle align-self-start mb-0">
														<img alt="Generic placeholder image" class="avatar brround avatar-xs mr-3" src="<?php echo base_url('public/assets/images/users/13.jpg'); ?>">
													</figure>
													<div class="media-body mt-1">
														<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Daniel</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden br-3 border shadow-none overflow-hidden">
											<div class="card-status card-status-left bg-blue br-bl-7 br-tl-7"></div>
											<a href="#"><img class="card-img-top  " src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" alt="img"></a>
											<div class="card-body d-flex flex-column p-3">
												Who chooses to enjoy a pleasure that has no annoying consequences
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-primary br-bl-7 br-tl-7"></div>
											<div class="card-body d-flex flex-column p-3">
												<h4><a href="#">Play Music</a></h4>
												<div class="text-muted">
													Some quick example text to build
												</div>
												<div class="d-flex align-items-center pt-5 mt-auto text-center">
													<div class="text-muted">
														<a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-backward"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-play"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-forward"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-secondary br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex align-items-center mt-auto">
													<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
													<div>
														<a class="font-weight-semibold" href="<?php echo base_url('pages/profile'); ?>">Anna Ogden</a> <small class="d-block text-muted fa-12">2 days ago</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wrapper col-lg-4">
									<div class="card p-5" id="left-events">
										<h4 class="card-title mb-6">Draggable Cards</h4>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-success br-bl-7 br-tl-7"></div>New Application
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-warning br-bl-7 br-tl-7"></div>Face Bool Live
										</div>
										<div class="card border shadow-none overflow-hidden mb-4 br-3">
											<div class="card-status card-status-left bg-danger br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex mt-0">
													<figure class="rounded-circle align-self-start mb-0">
														<img alt="Generic placeholder image" class="avatar brround avatar-xs mr-3" src="<?php echo base_url('public/assets/images/users/1.jpg'); ?>">
													</figure>
													<div class="media-body mt-1">
														<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden br-3 border shadow-none overflow-hidden">
											<div class="card-status card-status-left bg-blue br-bl-7 br-tl-7"></div>
											<a href="#"><img class="card-img-top  " src="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" alt="img"></a>
											<div class="card-body d-flex flex-column p-3">
												Who chooses to enjoy a pleasure that has no annoying consequences
											</div>
										</div>
										<div class="card-alert alert alert-success mb-0 br-3 mb-4">
											Adding action was successful
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-primary br-bl-7 br-tl-7"></div>
											<div class="card-body d-flex flex-column p-3">
												<h4><a href="#">Play Music</a></h4>
												<div class="text-muted">
													Some quick example text to build
												</div>
												<div class="d-flex align-items-center pt-5 mt-auto text-center">
													<div class="text-muted">
														<a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-backward"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-play"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-forward"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-secondary br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex align-items-center mt-auto">
													<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
													<div>
														<a class="font-weight-semibold" href="<?php echo base_url('pages/profile'); ?>">Anna Ogden</a> <small class="d-block text-muted fa-12">2 days ago</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Clipboard js -->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>

		<!-- Dragula Js -->
		<script src="<?php echo base_url('public/assets/plugins/dragula/dragula.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/dragula/example.min.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
