<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Prism Css -->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

		<!-- treeview -->
		<link href="<?php echo base_url('public/assets/plugins/treeview/treeview.css'); ?>" rel="stylesheet" type="text/css" />

		<!-- Forn-wizard css-->
		<link href="<?php echo base_url('public/assets/plugins/form-wizard/css/form-wizard.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/plugins/formwizard/smart_wizard.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/plugins/formwizard/smart_wizard_theme_dots.css'); ?>" rel="stylesheet">
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Form Sizes</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Sizes</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Form Element Sizes</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-12">
												<p>Form control small Size add class <code class="highlighter-rouge">.form-control-sm</code> to <code class="highlighter-rouge">.form-control</code></p>
												<div class="form-group">
													<input type="text" class="form-control form-control-sm" name="input">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group">
													<label>Form Control Medium Size <code class="highlighter-rouge">.form-control</code></label>
													<input type="text" class="form-control" name="input">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group">
													<p>Form control small Size add class <code class="highlighter-rouge">.form-control-lg</code> to <code class="highlighter-rouge">.form-control</code></p>
													<input type="text" class="form-control form-control-lg" name="input">
												</div>
											</div>
										</div>
<!---Prism Pre code-->
<figure class="highlight" id="Element"><pre><code class="language-markup"><script type="prismsmix/javascript"><div class="row">
		<div class="col-xl-12">
			<p>Form control small Size add class <code class="highlighter-rouge">.form-control-sm</code> to <code class="highlighter-rouge">.form-control</code></p>
			<div class="form-group">
				<input type="text" class="form-control form-control-sm" name="input">
			</div>
		</div>
		<div class="col-xl-12">
			<div class="form-group">
				<label>Form Control Medium Size <code class="highlighter-rouge">.form-control</code></label>
				<input type="text" class="form-control" name="input">
			</div>
		</div>
		<div class="col-xl-12">
			<div class="form-group">
				<p>Form control small Size add class <code class="highlighter-rouge">.form-control-lg</code> to <code class="highlighter-rouge">.form-control</code></p>
				<input type="text" class="form-control form-control-lg" name="input">
			</div>
		</div>
	</div></script></code></pre>
	<div class="clipboard-icon text-white-50" data-clipboard-target="#Element"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Checkbox Sizes</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-group m-0">
													<div class="form-label mb-4">Checkboxes</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group m-0">
													<div class="form-label mb-4">Checkboxes Medium Sizes</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-checkbox custom-control-md">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
															<span class="custom-control-label custom-control-label-md">Option 1</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-md">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label custom-control-label-md">Option 2</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-md">
															<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
															<span class="custom-control-label custom-control-label-md">Option Disabled</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-md">
															<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
															<span class="custom-control-label custom-control-label-md">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group m-0">
													<div class="form-label mb-4">Checkboxes Large Size</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-checkbox custom-control-lg">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
															<span class="custom-control-label custom-control-label-lg">Option 1</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-lg">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label custom-control-label-lg">Option 2</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-lg">
															<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
															<span class="custom-control-label custom-control-label-lg">Option Disabled</span>
														</label>
														<label class="custom-control custom-checkbox custom-control-lg">
															<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
															<span class="custom-control-label custom-control-label-lg">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
										</div>

<!---Prism Pre code-->
<figure class="highlight" id="Element1"><pre><code class="language-markup"><script type="prismsmix/javascript"><div class="row">
	<div class="col-xl-4">
		<div class="form-group m-0">
			<div class="form-label mb-4">Checkboxes</div>
			<div class="custom-controls-stacked">
				<label class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
					<span class="custom-control-label">Option 1</span>
				</label>
				<label class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
					<span class="custom-control-label">Option 2</span>
				</label>
				<label class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
					<span class="custom-control-label">Option Disabled</span>
				</label>
				<label class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
					<span class="custom-control-label">Option Disabled Checked</span>
				</label>
			</div>
		</div>
	</div>
	<div class="col-xl-4 mt-4 mt-xl-0">
		<div class="form-group m-0">
			<div class="form-label mb-4">Checkboxes Medium Sizes</div>
			<div class="custom-controls-stacked">
				<label class="custom-control custom-checkbox custom-control-md">
					<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
					<span class="custom-control-label custom-control-label-md">Option 1</span>
				</label>
				<label class="custom-control custom-checkbox custom-control-md">
					<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
					<span class="custom-control-label custom-control-label-md">Option 2</span>
				</label>
				<label class="custom-control custom-checkbox custom-control-md">
					<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
					<span class="custom-control-label custom-control-label-md">Option Disabled</span>
				</label>
				<label class="custom-control custom-checkbox custom-control-md">
					<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
					<span class="custom-control-label custom-control-label-md">Option Disabled Checked</span>
				</label>
			</div>
		</div>
	</div>
	<div class="col-xl-4 mt-4 mt-xl-0">
		<div class="form-group m-0">
			<div class="form-label mb-4">Checkboxes Large Size</div>
			<div class="custom-controls-stacked">
				<label class="custom-control custom-checkbox custom-control-lg">
					<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
					<span class="custom-control-label custom-control-label-lg">Option 1</span>
				</label>
				<label class="custom-control custom-checkbox custom-control-lg">
					<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
					<span class="custom-control-label custom-control-label-lg">Option 2</span>
				</label>
				<label class="custom-control custom-checkbox custom-control-lg">
					<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
					<span class="custom-control-label custom-control-label-lg">Option Disabled</span>
				</label>
				<label class="custom-control custom-checkbox custom-control-lg">
					<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
					<span class="custom-control-label custom-control-label-lg">Option Disabled Checked</span>
				</label>
			</div>
		</div>
	</div>
	</div></script></code></pre>
	<div class="clipboard-icon text-white-50" data-clipboard-target="#Element1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Radio Sizes</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-group ">
													<div class="form-label">Radios</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled="">
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios02" value="option4" disabled="" checked="">
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group ">
													<div class="form-label">Medium Radios</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-radio custom-control-md">
															<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked="">
															<span class="custom-control-label custom-control-label-md">Option 1</span>
														</label>
														<label class="custom-control custom-radio custom-control-md">
															<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
															<span class="custom-control-label custom-control-label-md">Option 2</span>
														</label>
														<label class="custom-control custom-radio custom-control-md">
															<input type="radio" class="custom-control-input" name="example-radios1" value="option3" disabled="">
															<span class="custom-control-label custom-control-label-md">Option Disabled</span>
														</label>
														<label class="custom-control custom-radio custom-control-md">
															<input type="radio" class="custom-control-input" name="example-radios12" value="option4" disabled="" checked="">
															<span class="custom-control-label custom-control-label-md">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group ">
													<div class="form-label">Large Radios</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-radio custom-control-lg">
															<input type="radio" class="custom-control-input" name="example-radios2" value="option1" checked="">
															<span class="custom-control-label custom-control-label-lg">Option 1</span>
														</label>
														<label class="custom-control custom-radio custom-control-lg">
															<input type="radio" class="custom-control-input" name="example-radios2" value="option2">
															<span class="custom-control-label custom-control-label-lg">Option 2</span>
														</label>
														<label class="custom-control custom-radio custom-control-lg">
															<input type="radio" class="custom-control-input" name="example-radios2" value="option3" disabled="">
															<span class="custom-control-label custom-control-label-lg">Option Disabled</span>
														</label>
														<label class="custom-control custom-radio custom-control-lg">
															<input type="radio" class="custom-control-input" name="example-radios22" value="option4" disabled="" checked="">
															<span class="custom-control-label custom-control-label-lg">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
										</div>
<!---Prism Pre code-->
<figure class="highlight" id="Element2"><pre><code class="language-markup"><script type="prismsmix/javascript"><div class="row">
		<div class="col-xl-4">
			<div class="form-group ">
				<div class="form-label">Radios</div>
				<div class="custom-controls-stacked">
					<label class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
						<span class="custom-control-label">Option 1</span>
					</label>
					<label class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" name="example-radios" value="option2">
						<span class="custom-control-label">Option 2</span>
					</label>
					<label class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled="">
						<span class="custom-control-label">Option Disabled</span>
					</label>
					<label class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" name="example-radios02" value="option4" disabled="" checked="">
						<span class="custom-control-label">Option Disabled Checked</span>
					</label>
				</div>
			</div>
		</div>
		<div class="col-xl-4 mt-4 mt-xl-0">
			<div class="form-group ">
				<div class="form-label">Medium Radios</div>
				<div class="custom-controls-stacked">
					<label class="custom-control custom-radio custom-control-md">
						<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked="">
						<span class="custom-control-label custom-control-label-md">Option 1</span>
					</label>
					<label class="custom-control custom-radio custom-control-md">
						<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
						<span class="custom-control-label custom-control-label-md">Option 2</span>
					</label>
					<label class="custom-control custom-radio custom-control-md">
						<input type="radio" class="custom-control-input" name="example-radios1" value="option3" disabled="">
						<span class="custom-control-label custom-control-label-md">Option Disabled</span>
					</label>
					<label class="custom-control custom-radio custom-control-md">
						<input type="radio" class="custom-control-input" name="example-radios12" value="option4" disabled="" checked="">
						<span class="custom-control-label custom-control-label-md">Option Disabled Checked</span>
					</label>
				</div>
			</div>
		</div>
		<div class="col-xl-4 mt-4 mt-xl-0">
			<div class="form-group ">
				<div class="form-label">Large Radios</div>
				<div class="custom-controls-stacked">
					<label class="custom-control custom-radio custom-control-lg">
						<input type="radio" class="custom-control-input" name="example-radios2" value="option1" checked="">
						<span class="custom-control-label custom-control-label-lg">Option 1</span>
					</label>
					<label class="custom-control custom-radio custom-control-lg">
						<input type="radio" class="custom-control-input" name="example-radios2" value="option2">
						<span class="custom-control-label custom-control-label-lg">Option 2</span>
					</label>
					<label class="custom-control custom-radio custom-control-lg">
						<input type="radio" class="custom-control-input" name="example-radios2" value="option3" disabled="">
						<span class="custom-control-label custom-control-label-lg">Option Disabled</span>
					</label>
					<label class="custom-control custom-radio custom-control-lg">
						<input type="radio" class="custom-control-input" name="example-radios22" value="option4" disabled="" checked="">
						<span class="custom-control-label custom-control-label-lg">Option Disabled Checked</span>
					</label>
				</div>
			</div>
		</div>
	</div></script></code></pre>
	<div class="clipboard-icon text-white-50" data-clipboard-target="#Element2"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Check Box Sizes Switches</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
													</label>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input">
														<span class="custom-switch-indicator custom-square"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg custom-square"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox2" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-switch-indicator-xl custom-square"></span>
													</label>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-radius"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg custom-radius"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Check Box</span>
														<input type="checkbox" name="custom-switch-checkbox3" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-xl custom-radius"></span>
													</label>
												</div>
											</div>
										</div>
<!---Prism Pre code-->
<figure class="highlight" id="Element3"><pre><code class="language-markup"><script type="prismsmix/javascript"><div class="row">
		<div class="col-xl-4">
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Check Box</span>
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Check Box</span>
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Check Box</span>
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
				</label>
			</div>
		</div>
		<div class="col-xl-4 mt-4 mt-xl-0">
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Check Box</span>
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator custom-square"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Check Box</span>
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-lg custom-square"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Check Box</span>
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-xl custom-square"></span>
				</label>
			</div>
		</div>
		<div class="col-xl-4 mt-4 mt-xl-0">
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Check Box</span>
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator custom-radius"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Check Box</span>
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-lg custom-radius"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Check Box</span>
					<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-xl custom-radius"></span>
				</label>
			</div>
		</div>
	</div></script></code></pre>
	<div class="clipboard-icon text-white-50" data-clipboard-target="#Element3"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">Radio Button Sizes Switches</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
													</label>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio1" class="custom-switch-input">
														<span class="custom-switch-indicator custom-square"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio1" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg custom-square"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio1" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-switch-indicator-xl custom-square"></span>
													</label>
												</div>
											</div>
											<div class="col-xl-4 mt-4 mt-xl-0">
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio2" class="custom-switch-input" checked>
														<span class="custom-switch-indicator custom-radius"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio2" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-lg custom-radius"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="custom-switch">
														<span class="custom-switch-description mr-2">Radio Buttons</span>
														<input type="radio" name="custom-switch-radio2" class="custom-switch-input">
														<span class="custom-switch-indicator custom-switch-indicator-xl custom-radius"></span>
													</label>
												</div>
											</div>
										</div>
<!---Prism Pre code-->
<figure class="highlight" id="Element4"><pre><code class="language-markup"><script type="prismsmix/javascript"><div class="row">
		<div class="col-xl-4">
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Radio Buttons</span>
					<input type="radio" name="custom-switch-radio" class="custom-switch-input">
					<span class="custom-switch-indicator"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Radio Buttons</span>
					<input type="radio" name="custom-switch-radio" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Radio Buttons</span>
					<input type="radio" name="custom-switch-radio" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
				</label>
			</div>
		</div>
		<div class="col-xl-4 mt-4 mt-xl-0">
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Radio Buttons</span>
					<input type="radio" name="custom-switch-radio1" class="custom-switch-input">
					<span class="custom-switch-indicator custom-square"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Radio Buttons</span>
					<input type="radio" name="custom-switch-radio1" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-lg custom-square"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Radio Buttons</span>
					<input type="radio" name="custom-switch-radio1" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-xl custom-square"></span>
				</label>
			</div>
		</div>
		<div class="col-xl-4 mt-4 mt-xl-0">
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Radio Buttons</span>
					<input type="radio" name="custom-switch-radio2" class="custom-switch-input">
					<span class="custom-switch-indicator custom-radius"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Radio Buttons</span>
					<input type="radio" name="custom-switch-radio2" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-lg custom-radius"></span>
				</label>
			</div>
			<div class="form-group">
				<label class="custom-switch">
					<span class="custom-switch-description mr-2">Radio Buttons</span>
					<input type="radio" name="custom-switch-radio2" class="custom-switch-input">
					<span class="custom-switch-indicator custom-switch-indicator-xl custom-radius"></span>
				</label>
			</div>
		</div>
	</div></script></code></pre>
	<div class="clipboard-icon text-white-50" data-clipboard-target="#Element4"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
										<!---Prism Pre code-->
									</div>
								</div>
							</div>
						</div>
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Forn-wizard js-->
		<script src="<?php echo base_url('public/assets/plugins/formwizard/jquery.smartWizard.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/formwizard/fromwizard.js'); ?>"></script>

		<!-- Treeview js -->
		<script src="<?php echo base_url('public/assets/plugins/treeview/treeview.js'); ?>"></script>

		<!-- Clipboard js -->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>

		<!--Accordion-Wizard-Form js-->
		<script src="<?php echo base_url('public/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/form-wizard.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>