<?= $this->include('layout/custom-head'); ?>
	</head>

	<body class="h-100vh page-style1 light-mode default-sidebar">
		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-md-5">
									<div class="card card-group mb-0">
										<div class="card p-4 page-content mt-0">
											<div class="card-body page-single-content">
												<div class="w-100">
													<div class="text-center mb-4 ">
														<span class="avatar avatar-xxl  brround" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></span>
													</div>
													<span class="m-4 d-none d-lg-block text-center">
														<span class=""><strong>John Thomson</strong></span>
													</span>
													<div class="form-group">
														<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
													</div>
													<a href="<?php echo base_url('pages/index'); ?>" class="btn btn-primary btn-block"><i class="fe fe-arrow-right"></i> Unlock</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?= $this->include('layout/custom-footer'); ?>	
	</body>
</html>