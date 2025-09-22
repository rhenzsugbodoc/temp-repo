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
								<h4 class="page-title">Tooltip</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tooltip</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<!-- div -->
								<div class="card" id="Tooltip">
									<div class="card-header">
										<div class="card-title">
											Default Tooltip
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="tooltip-static-demo mb-4 border br-3">
											<div class="row ">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip bs-tooltip-top" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip bs-tooltip-bottom" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-left" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-right" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div><!-- tooltip-static-demo -->
										<div class="form-label mb-2">
											Example
										</div>
										<div class="bg-light px-4 pt-4 pb-2 border br-3">
											<div class="row  text-center">
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on Bottom" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
		<!---Prism Pre code-->
		<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row  text-center">
			<div class="col-sm-6 col-lg-3 mb-3">
				<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
			</div>
			<div class="col-sm-6 col-lg-3 mb-3">
				<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on Bottom" type="button">Hover me</button>
			</div>
			<div class="col-sm-6 col-lg-3 mb-3">
				<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
			</div>
			<div class="col-sm-6 col-lg-3 mb-3">
				<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card" id="Tooltip1">
									<div class="card-header">
										<div class="card-title">
											Color Tooltip
										</div>
									</div>
									<div class="card-body">
										<div class="form-label  mb-2">
											Static Example
										</div>
										<div class="tooltip-static-demo mb-4 border br-3">
											<div class="row ">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-bottom" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-left" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-right" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div><!-- tooltip-static-demo -->
										<div class="form-label mb-2">
											Example
										</div>
										<div class="bg-light px-4 pt-4 pb-2 border br-3">
											<div class="row  text-center">
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
		<!---Prism Pre code-->
		<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row  text-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
			<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
			<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
			<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
		</div>
	</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element2"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!-- /div -->
							</div>
						</div>
						<!-- End Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Clipboard js -->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>

		<!-- popover js -->
		<script src="<?php echo base_url('public/assets/js/popover.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
