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
								<h4 class="page-title">Tooltip and Popover</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tooltip and Popover</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<!--div-->
								<div class="card mb-4" id="popover">
									<div class="card-header">
										<div class="card-title">
											Default Popover
										</div>
									</div>
									<div class="card-body">

										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="popover-static-demo mb-4 border br-3 pb-6">
											<div class="row row-sm">
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-bottom">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-left">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Left</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-right">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Right</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-label mb-2">
											Example
										</div>
										<div class="px-4 bg-light border br-3 pt-4 pb-5">
											<div class="row row-sm text-center">
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="default" data-toggle="popover" title="Popover top" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="default" data-toggle="popover" title="Popover bottom" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-popover-color="default" data-toggle="popover" title="Popover left" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-popover-color="default" data-toggle="popover" title="Popover right" type="button">Click me</button>
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm text-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="default" data-toggle="popover" title="Popover top" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-sm-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="default" data-toggle="popover" title="Popover bottom" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-lg-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-popover-color="default" data-toggle="popover" title="Popover left" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-lg-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-popover-color="default" data-toggle="popover" title="Popover right" type="button">Click me</button>
		</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card mb-4" id="popover1">
									<div class="card-header">
										<div class="card-title">
											Colored Head Popover
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="popover-static-demo mb-4">
											<div class="row row-sm">
												<div class="col-md-6">
													<div class="popover popover-head-primary bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-5 mt-md-0">
													<div class="popover popover-head-secondary bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-label mb-2">
											Example
										</div>
										<div class="px-4 bg-light border br-3 pt-4 pb-5">
											<div class="row row-sm text-center">
												<div class="col-sm-6 col-lg-3  mt-3 text-center">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="head-primary" title="Popover top" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3 text-center">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="head-secondary" title="Popover bottom" type="button">Click me</button>
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div><figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm text-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="head-primary" title="Popover top" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-sm-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="head-secondary" title="Popover bottom" type="button">Click me</button>
		</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element2"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="popover2">
									<div class="card-header">
										<div class="card-title">
											Full Colored Popover
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="popover-static-demo mb-4 pb-6">
											<div class="row row-sm">
												<div class="col-md-6 mt-4">
													<div class="popover popover-primary bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover popover-secondary bs-popover-bottom">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-label mb-2">
											Example
										</div>
										<div class="px-4 bg-light border br-3 pb-5 pt-4">
											<div class="row row-sm text-center">
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="primary" title="Popover top" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="secondary" title="Popover bottom" type="button">Click me</button>
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div><figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm text-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="primary" title="Popover top" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-sm-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="secondary" title="Popover bottom" type="button">Click me</button>
		</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element3"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
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

