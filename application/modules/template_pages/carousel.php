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
								<h4 class="page-title">Carousel</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Carousel</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel</h3>
									</div>
									<div class="card-body">
										<div id="carousel-default" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/19.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/20.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/21.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/22.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/23.jpg'); ?>" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-default" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/19.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/20.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/21.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/22.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/23.jpg'); ?>" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with indicators</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/24.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/25.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/24.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/25.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-controls" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/5.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/7.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" data-holder-rendered="true">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-controls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/5.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/7.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" data-holder-rendered="true">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with captions</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/9.jpg'); ?>" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/10.jpg'); ?>" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/11.jpg'); ?>" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/12.jpg'); ?>" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/13.jpg'); ?>" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-captions" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/9.jpg'); ?>" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/10.jpg'); ?>" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/11.jpg'); ?>" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/12.jpg'); ?>" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/13.jpg'); ?>" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators1" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators carousel-top-indicators">
												<li data-target="#carousel-indicators1" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators1" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators1" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators1" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators1" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/14.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/15.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/16.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/17.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/18.jpg'); ?>" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators1" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators carousel-top-indicators">
		<li data-target="#carousel-indicators1" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators1" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators1" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators1" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators1" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/14.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/15.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/16.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/17.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/18.jpg'); ?>" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-right controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators2" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators carousel-top-right-indicators">
												<li data-target="#carousel-indicators2" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators2" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators2" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators2" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators2" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/19.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/20.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/21.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/22.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/23.jpg'); ?>" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators2" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators carousel-top-right-indicators">
		<li data-target="#carousel-indicators2" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators2" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators2" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators2" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators2" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/19.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/20.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/21.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/22.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/23.jpg'); ?>" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-left controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators3" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators carousel-top-left-indicators">
												<li data-target="#carousel-indicators3" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators3" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators3" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators3" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators3" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/24.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/25.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators3" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators carousel-top-left-indicators">
		<li data-target="#carousel-indicators3" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators3" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators3" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators3" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators3" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/24.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/25.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-right controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators4" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators carousel-bottom-right-indicators">
												<li data-target="#carousel-indicators4" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators4" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators4" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators4" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators4" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/5.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/7.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element8"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators4" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators carousel-bottom-right-indicators">
		<li data-target="#carousel-indicators4" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators4" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators4" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators4" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators4" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/5.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/7.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element8"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-left controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators5" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators carousel-bottom-left-indicators">
												<li data-target="#carousel-indicators5" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators5" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators5" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators5" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators5" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/9.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/10.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/11.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/12.jpg'); ?>" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/13.jpg'); ?>" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="9"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators5" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators carousel-bottom-left-indicators">
		<li data-target="#carousel-indicators5" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators5" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators5" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators5" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators5" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/9.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/10.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/11.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/12.jpg'); ?>" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/13.jpg'); ?>" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element9"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with Background color captions</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions2" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/red.jpg'); ?>" data-holder-rendered="true">
													<div class="carousel-caption">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/blue.jpg'); ?>" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/green.jpg'); ?>" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions2" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions2" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element10"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-captions2" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/red.jpg'); ?>" data-holder-rendered="true">
			<div class="carousel-caption">
				<h3>Slide label</h3>
				<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/blue.jpg'); ?>" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="<?php echo base_url('public/assets/images/photos/green.jpg'); ?>" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carousel-captions2" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-captions2" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element10"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row-->
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
