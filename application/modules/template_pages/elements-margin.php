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
								<h4 class="page-title">Margin Values</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Margin Values</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Margin Positions</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 bg-light">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">

												</div>
											</div>
											<div class="w-9 h-9 bg-light ml-4">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">
													.ml-4
												</div>
											</div>
											<div class="w-9 h-9 bg-light ml-7">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">
													.ml-7
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mt-4">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-1"</code></td>
														<td>Add Margin all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ml-1"</code></td>
														<td>Add Margin left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mr-1"</code></td>
														<td>Add Margin right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mt-1"</code></td>
														<td>Add Margin top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mb-1"</code></td>
														<td>Add Margin bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mx-1"</code></td>
														<td>Add Margin horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="my-1"</code></td>
														<td>Add Margin vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Margin values</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-1"</code></td>
														<td>Add margin m-1 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-2"</code></td>
														<td>Add margin m-2 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-3"</code></td>
														<td>Add margin m-3 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-4"</code></td>
														<td>Add margin m-4 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-5"</code></td>
														<td>Add margin m-5 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-6"</code></td>
														<td>Add margin m-6 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-7"</code></td>
														<td>Add margin m-7 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-8"</code></td>
														<td>Add margin m-8 to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Remove Margin</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-0"</code></td>
														<td>Remove margin all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ml-0"</code></td>
														<td>Remove margin left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mr-0"</code></td>
														<td>Remove margin right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mt-0"</code></td>
														<td>Remove margin top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mb-0"</code></td>
														<td>Remove margin bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mx-0"</code></td>
														<td>Remove margin horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="my-0"</code></td>
														<td>Remove margin vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Media Query margins</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-t-0 mg-b-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
														<code class="pd-0 bg-light mb-1">.mt-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.mb-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.mr-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.ml-[size]-[value]</code>
														<td>
															<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: the padding value (refer to code above)</p>
														</td>
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
