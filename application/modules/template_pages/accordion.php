<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Prism Css -->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">
		<!-- Accordion Css -->
		<link href="<?php echo base_url('public/assets/plugins/accordion/accordion.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Accordion</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Accordion</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Defalut Accordion</h3>
									</div>
									<div class="card-body">
										<div class="panel-group"  role="tablist" aria-multiselectable="true" id="accordion11">
											<div class="panel panel-default active">
												<div class="panel-heading " role="tab" id="headingOne11">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion11" href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11">

															Collapsible Group Item #1
														</a>
													</h4>
												</div>
												<div id="collapseOne11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne11">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingTwo22">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion11" href="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">

															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo22">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingThree33">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion11" href="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33">

															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree33">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
										</div><!-- panel-group -->
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel-group"  role="tablist" aria-multiselectable="true" id="accordion11">
<div class="panel panel-default active">
	<div class="panel-heading " role="tab" id="headingOne11">
		<h4 class="panel-title">
			<a role="button" data-toggle="collapse" data-parent="#accordion11" href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11">

				Collapsible Group Item #1
			</a>
		</h4>
	</div>
	<div id="collapseOne11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne11">
		<div class="panel-body border-0">
			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		</div>
	</div>
</div>
<div class="panel panel-default mt-2">
	<div class="panel-heading" role="tab" id="headingTwo22">
		<h4 class="panel-title">
			<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion11" href="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">

				Collapsible Group Item #2
			</a>
		</h4>
	</div>
	<div id="collapseTwo22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo22">
		<div class="panel-body border-0">
			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		</div>
	</div>
</div>
<div class="panel panel-default mt-2">
	<div class="panel-heading" role="tab" id="headingThree33">
		<h4 class="panel-title">
			<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion11" href="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33">

				Collapsible Group Item #3
			</a>
		</h4>
	</div>
	<div id="collapseThree33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree33">
		<div class="panel-body border-0">
			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		</div>
	</div>
</div>
</div><!-- panel-group --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Defalut Accordion 2</h3>
									</div>
									<div class="card-body">
										<div class="panel-group"  role="tablist" aria-multiselectable="true" id="accordion1">
											<div class="panel panel-default active">
												<div class="panel-heading " role="tab" id="headingOne1">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">

															Collapsible Group Item #1
															<span class="float-right"><i class="fe fe-chevron-right"></i></span>
														</a>
													</h4>
												</div>
												<div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingTwo2">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">

															Collapsible Group Item #2
															<span class="float-right"><i class="fe fe-chevron-right"></i></span>
														</a>
													</h4>
												</div>
												<div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingThree3">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">

															Collapsible Group Item #3
															<span class="float-right"><i class="fe fe-chevron-right"></i></span>
														</a>
													</h4>
												</div>
												<div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
										</div><!-- panel-group -->
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element12"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel-group"  role="tablist" aria-multiselectable="true" id="accordion1">
	<div class="panel panel-default active">
		<div class="panel-heading " role="tab" id="headingOne1">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">

					Collapsible Group Item #1
					<span class="float-right"><i class="fe fe-chevron-right"></i></span>
				</a>
			</h4>
		</div>
		<div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
			<div class="panel-body border-0">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="panel panel-default mt-2">
		<div class="panel-heading" role="tab" id="headingTwo2">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">

					Collapsible Group Item #2
					<span class="float-right"><i class="fe fe-chevron-right"></i></span>
				</a>
			</h4>
		</div>
		<div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
			<div class="panel-body border-0">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="panel panel-default mt-2">
		<div class="panel-heading" role="tab" id="headingThree3">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">

					Collapsible Group Item #3
					<span class="float-right"><i class="fe fe-chevron-right"></i></span>
				</a>
			</h4>
		</div>
		<div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
			<div class="panel-body border-0">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
</div><!-- panel-group --></script></code></pre>

<div class="clipboard-icon" data-clipboard-target="#element12"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Closed Accordion</h3>
									</div>
									<div class="card-body">
										<!-- Accordion begin -->
										<ul class="demo-accordion accordionjs m-0" data-active-index="false">

											<!-- Section 1 -->
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- Section 2 -->
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- Section 3 -->
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><!-- Accordion begin -->
<ul class="demo-accordion accordionjs m-0" data-active-index="false">

	<!-- Section 1 -->
	<li>
		<div><h3>Section 1</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<!-- Section 2 -->
	<li>
		<div><h3>Section 2</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<!-- Section 3 -->
	<li>
		<div><h3>Section 3</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Accordion Style 3</h3>
									</div>
									<div class="card-body">
										<ul class="demo-accordion accordionjs m-0">
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 4</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="demo-accordion accordionjs m-0">
	<li>
		<div><h3>Section 1</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<li>
		<div><h3>Section 2</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<li>
		<div><h3>Section 3</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<li>
		<div><h3>Section 4</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Accordion style</h3>
									</div>
									<div class="card-body">
										<div class="panel-group panel-group-primary"  role="tablist" aria-multiselectable="true" id="accordion3">
											<div class="panel panel-default active">
												<div class="panel-heading " role="tab" id="headingOne31">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne31" aria-expanded="true" aria-controls="collapseOne31">

															Collapsible Group Item #1
														</a>
													</h4>
												</div>
												<div id="collapseOne31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne31">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingTwo32">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo32" aria-expanded="false" aria-controls="collapseTwo32">

															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo32" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo32">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
										</div><!-- panel-group -->
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel-group panel-group-primary"  role="tablist" aria-multiselectable="true" id="accordion3">
	<div class="panel panel-default active">
		<div class="panel-heading " role="tab" id="headingOne31">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne31" aria-expanded="true" aria-controls="collapseOne31">

					Collapsible Group Item #1
				</a>
			</h4>
		</div>
		<div id="collapseOne31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne31">
			<div class="panel-body border-0">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="panel panel-default mt-2">
		<div class="panel-heading" role="tab" id="headingTwo32">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo32" aria-expanded="false" aria-controls="collapseTwo32">

					Collapsible Group Item #2
				</a>
			</h4>
		</div>
		<div id="collapseTwo32" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo32">
			<div class="panel-body border-0">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
</div><!-- panel-group --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Clipboard js -->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>

		<!-- Accordion js-->
		<script src="<?php echo base_url('public/assets/plugins/accordion/accordion.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/accordion.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
