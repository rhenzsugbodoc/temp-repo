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
								<h4 class="page-title">border</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">border</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Set Border</h3>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 border m-2 bg-light2"></div>
											<div class="w-9 h-9 border-left m-2 bg-light2"></div>
											<div class="w-9 h-9 border-right m-2 bg-light2"></div>
											<div class="w-9 h-9 border-bottom m-2 bg-light2"></div>
											<div class="w-9 h-9 border-top m-2 bg-light2"></div>
											<div class="w-9 h-9 border-top-bottom m-2 bg-light2"></div>
											<div class="w-9 h-9 border-left-right m-2 bg-light2"></div>
										</div>
										<div class="table-responsive mt-5">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="border"</code></td>
														<td>Add border in all sides of an element using default color and width.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-left"</code></td>
														<td>Add border to left side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-right"</code></td>
														<td>Add border to right side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-bottom"</code></td>
														<td>Add border to bottom side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-top"</code></td>
														<td>Add border to top side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-top-bottom"</code></td>
														<td>Add border to top and bottom side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-left-right"</code></td>
														<td>Add border to left and right side of element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Border Width</h3>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 border m-2 bg-light2 border-wd-1"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-wd-2"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-wd-3"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-wd-4"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-wd-5"></div>
										</div>
										<div class="table-responsive mt-5">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="border-wd-1"</code></td>
														<td>Set 1px border to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-wd-2"</code></td>
														<td>Set 2px border to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-wd-3"</code></td>
														<td>Set 3px border to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-wd-4"</code></td>
														<td>Set 4px border to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-wd-5"</code></td>
														<td>Set 5px border to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Border Color</h3>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 border m-2 bg-light2 border-primary border-wd-2"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-secondary border-wd-2"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-info border-wd-2"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-success border-wd-2"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-warning border-wd-2"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-danger border-wd-2"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-light border-wd-2"></div>
											<div class="w-9 h-9 border m-2 bg-light2 border-dark border-wd-2`																							                      "></div>
										</div>
										<div class="table-responsive mt-5">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="border-primary"</code></td>
														<td>Set Border Color primary to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-secondary"</code></td>
														<td>Set Border Color secondary to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-info"</code></td>
														<td>Set Border Color info to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-success"</code></td>
														<td>Set Border Color success to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-warning"</code></td>
														<td>Set Border Color warning to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-danger"</code></td>
														<td>Set Border Color danger to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-light"</code></td>
														<td>Set Border Color light to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-dark"</code></td>
														<td>Set Border Color dark to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Remove Border</h3>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 border-0 m-2 bg-light2"></div>
											<div class="w-9 h-9 border border-left-0 m-2 bg-light2"></div>
											<div class="w-9 h-9 border border-right-0 m-2 bg-light2"></div>
											<div class="w-9 h-9 border border-bottom-0 m-2 bg-light2"></div>
											<div class="w-9 h-9 border border-top-0 m-2 bg-light2"></div>
											<div class="w-9 h-9 border border-top-bottom-0 m-2 bg-light2"></div>
											<div class="w-9 h-9 border border-left-right-0 m-2 bg-light2"></div>
										</div>
										<div class="table-responsive mt-5">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="border-0"</code></td>
														<td>Remove border in all sides of an element using default color and width.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-left-0"</code></td>
														<td>Remove border to left side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-right-0"</code></td>
														<td>Remove border to right side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-bottom-0"</code></td>
														<td>Remove border to bottom side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-top-0"</code></td>
														<td>Remove border to top side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-top-bottom-0"</code></td>
														<td>Remove border to top and bottom side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="border-left-right-0"</code></td>
														<td>Remove border to left and right side of element.</td>
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