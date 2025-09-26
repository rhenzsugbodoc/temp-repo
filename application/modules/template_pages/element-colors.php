<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START-->
		<!-- Prism Css -->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Colors</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Colors</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Gray Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 bg-gray-900 h-9"></div>
											<div class="w-9 bg-gray-800 h-9"></div>
											<div class="w-9 bg-gray-700 h-9"></div>
											<div class="w-9 bg-gray-600 h-9"></div>
											<div class="w-9 bg-gray-500 h-9"></div>
											<div class="w-9 bg-gray-400 h-9"></div>
											<div class="w-9 bg-gray-300 h-9"></div>
											<div class="w-9 bg-gray-200 h-9"></div>
											<div class="w-9 bg-gray-100 h-9"></div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-gray-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>900 | 800 | 700 | 600 | 500 | 400 | 300 | 200 | 100</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Solid Background Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 bg-primary h-9"></div>
											<div class="w-9 bg-success h-9"></div>
											<div class="w-9 bg-warning h-9"></div>
											<div class="w-9 bg-danger h-9"></div>
											<div class="w-9 bg-info h-9"></div>
											<div class="w-9 bg-indigo h-9"></div>
											<div class="w-9 bg-purple h-9"></div>
											<div class="w-9 bg-pink h-9"></div>
											<div class="w-9 bg-teal h-9"></div>
											<div class="w-9 bg-orange h-9"></div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>primary | secondary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Transparent White Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-1"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-2"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-3"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-4"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-5"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-6"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-7"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-8"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-9"></div>
											</div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-white-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Transparent Black Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-1"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-2"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-3"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-4"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-5"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-6"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-7"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-8"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="<?php echo base_url('public/assets/images/photos/28.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-9"></div>
											</div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-black-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
							</div>
						</div>
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Clipboard js -->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>