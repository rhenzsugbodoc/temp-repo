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
								<h4 class="page-title">Width</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Width</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Width Values
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="d-flex align-items-center justify-content-center w-8 h-9 bg-light">
												.w-8
											</div>
											<div class="d-flex align-items-center justify-content-center w-150 h-9 bg-light ml-4">
												.w-150
											</div>
											<div class="d-flex align-items-center justify-content-center w-50 h-9 bg-light ml-4">
												.w-50
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mt-4">
												<tbody>
													<tr>
														<td class="w-20"><b>Classes</b></td>
														<td><code>.w-[value]</code></td>
													</tr>
													<tr>
														<td class="w-20"><b>Values</b></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 </td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mt-4">
												<tbody>
													<tr>
														<td  class="w-20"><b>Classes</b></td>
														<td><code>.w-[value]</code></td>
													</tr>
													<tr>
														<td class="w-20"><b>Values</b></td>
														<td>100h | 150 | 200 | 250 | 300 | ... | 500 &nbsp; (step of 50) Bigger Height</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mt-4">
												<tbody>
													<tr>
														<td  class="w-20"><b>Classes</b></td>
														<td><code>.w-[value]</code></td>
													</tr>
													<tr>
														<td class="w-20"><b>Values</b></td>
														<td>10 | 15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5) % Percentage Height</td>
													</tr>
												</tbody>
											</table>
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
		<!-- INTERNAL JS END -->
	</body>
</html>