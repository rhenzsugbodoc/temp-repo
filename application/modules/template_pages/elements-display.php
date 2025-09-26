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
								<h4 class="page-title">Display</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Display</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Display</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-5">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-inline</code></td>
														<td>Set an inline display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-inline-block</code></td>
														<td>Set an inline-block display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Set a block display property of an element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Hiding Elements</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-5">
												<thead>
													<tr>
														<th class="wd-40p">Class</th>
														<th class="wd-60p">Screen Size</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-none</code></td>
														<td>Hidden on all</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block</code></td>
														<td>Hidden only on xs</td>
													</tr>
													<tr>
														<td><code>.d-sm-none .d-md-block</code></td>
														<td>Hidden only on sm</td>
													</tr>
													<tr>
														<td><code>.d-md-none .d-lg-block</code></td>
														<td>Hidden only on md</td>
													</tr>
													<tr>
														<td><code>.d-lg-none .d-xl-block</code></td>
														<td>Hidden only on lg</td>
													</tr>
													<tr>
														<td><code>.d-xl-none</code></td>
														<td>Hidden only on xl</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Visible on all</td>
													</tr>
													<tr>
														<td><code>.d-block .d-sm-none</code></td>
														<td>Visible only on xs</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block .d-md-none</code></td>
														<td>Visible only on sm</td>
													</tr>
													<tr>
														<td><code>.d-none .d-md-block .d-lg-none</code></td>
														<td>Visible only on md</td>
													</tr>
													<tr>
														<td><code>.d-none .d-lg-block .d-xl-none</code></td>
														<td>Visible only on lg</td>
													</tr>
													<tr>
														<td><code>.d-none .d-xl-block</code></td>
														<td>Visible only on xl</td>
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

