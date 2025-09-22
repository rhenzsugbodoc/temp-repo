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
								<h4 class="page-title">Breadcrumbs</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1 active">Home</li>
											<li class="breadcrumb-item1 active">About</li>
										</ol>
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1"><a href="#">Home</a></li>
											<li class="breadcrumb-item1 active">Library</li>
										</ol>
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1"><a href="#">Home</a></li>
											<li class="breadcrumb-item1"><a href="#">Library</a></li>
											<li class="breadcrumb-item1 active">Data</li>
										</ol>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>

									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ol class="breadcrumb1">
	<li class="breadcrumb-item1 active">Home</li>
	<li class="breadcrumb-item1 active">About</li>
</ol>
<ol class="breadcrumb1">
	<li class="breadcrumb-item1"><a href="#">Home</a></li>
	<li class="breadcrumb-item1 active">Library</li>
</ol>
<ol class="breadcrumb1">
	<li class="breadcrumb-item1"><a href="#">Home</a></li>
	<li class="breadcrumb-item1"><a href="#">Library</a></li>
	<li class="breadcrumb-item1 active">Data</li>
</ol></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--div-->
						<div class="card mg-b-20" id="breadcrumb1">
							<div class="card-header">
								<div class="card-title">
									Custom Styling
								</div>
							</div>
							<div class="card-body">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb breadcrumb-style1 mb-0 p-0">
										<li class="breadcrumb-item">
											<a href="#">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="#">Library</a>
										</li>
										<li class="breadcrumb-item active">Data</li>
									</ol>
								</nav>
							</div>
							<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style1 mb-0 p-0">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
						</div>
						<!--/div-->
						<!--div-->
						<div class="card mg-b-20" id="breadcrumb2">
							<div class="card-header">
								<div class="card-title">
									Custom Divider
								</div>
							</div>
							<div class="card-body">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb breadcrumb-style2 mb-0 p-0">
										<li class="breadcrumb-item">
											<a href="#">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="#">Library</a>
										</li>
										<li class="breadcrumb-item active">Data</li>
									</ol>
								</nav>
							</div>
							<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style2 mb-0 p-0">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
						</div>
						<!--/div-->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb1 bg-blue">
											<li class="breadcrumb-item1 active text-white">Home</li>
											<li class="breadcrumb-item1 active text-white">About</li>
										</ol>
										<ol class="breadcrumb1 bg-secondary">
											<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
											<li class="breadcrumb-item1 active text-white">Library</li>
										</ol>
										<ol class="breadcrumb1 bg-success">
											<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
											<li class="breadcrumb-item1 text-white"><a href="#" class="text-white">Library</a></li>
											<li class="breadcrumb-item1 active text-white">Data</li>
										</ol>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ol class="breadcrumb1 bg-blue">
	<li class="breadcrumb-item1 active text-white">Home</li>
	<li class="breadcrumb-item1 active text-white">About</li>
</ol>
<ol class="breadcrumb1 bg-secondary">
	<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
	<li class="breadcrumb-item1 active text-white">Library</li>
</ol>
<ol class="breadcrumb1 bg-success">
	<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
	<li class="breadcrumb-item1"><a href="#" class="text-white">Library</a></li>
	<li class="breadcrumb-item1 active text-white">Data</li>
</ol></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>

</figure>
<!---Prism Pre code-->
								</div>
								<div class="card" id="breadcrumb4">
									<div class="card-header">
										<h3 class="card-title">Icon Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb1 border bg-transparent">
												<li class="breadcrumb-item1 active"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Home</li>
												<li class="breadcrumb-item1 active">About</li>
											</ol>
											<ol class="breadcrumb1">
												<li class="breadcrumb-item1"><a href="#" class=""><i class="fa fa-star-o mr-2" aria-hidden="true"></i>Home</a></li>
												<li class="breadcrumb-item1 active"><i class="fa fa-star-o mr-2" aria-hidden="true"></i>Library</li>
											</ol>
											<ol class="breadcrumb1 bg-primary mb-0">
												<li class="breadcrumb-item1"><a href="#" class="text-white"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Home</a></li>
												<li class="breadcrumb-item1 text-white"><a href="#" class="text-white"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Library</a></li>
												<li class="breadcrumb-item1 active text-white"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Data</li>
											</ol>
										</nav>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><nav aria-label="breadcrumb">
	<ol class="breadcrumb1 border bg-transparent">
		<li class="breadcrumb-item1 active"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Home</li>
		<li class="breadcrumb-item1 active">About</li>
	</ol>
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#" class=""><i class="fa fa-star-o mr-2" aria-hidden="true"></i>Home</a></li>
		<li class="breadcrumb-item1 active"><i class="fa fa-star-o mr-2" aria-hidden="true"></i>Library</li>
	</ol>
	<ol class="breadcrumb1 bg-primary mb-0">
		<li class="breadcrumb-item1"><a href="#" class="text-white"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Home</a></li>
		<li class="breadcrumb-item1 text-white"><a href="#" class="text-white"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Library</a></li>
		<li class="breadcrumb-item1 active text-white"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
								<!--/div-->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Style Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb breadcrumb-arrow mt-3">
											<li><a href="#">Home</a></li>
											<li class="active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb breadcrumb-arrow mt-3">
											<li><a href="#">Home</a></li>
											<li><a href="#">Library</a></li>
											<li class="active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb breadcrumb-arrow mt-3">
											<li><a href="#">Home</a></li>
											<li><a href="#">Library</a></li>
											<li><a href="#">Elements</a></li>
											<li class="active"><span>Data</span></li>
										</ol>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ol class="breadcrumb breadcrumb-arrow mt-3">
	<li><a href="#">Home</a></li>
	<li class="active"><span>Data</span></li>
</ol>
<ol class="breadcrumb breadcrumb-arrow mt-3">
	<li><a href="#">Home</a></li>
	<li><a href="#">Library</a></li>
	<li class="active"><span>Data</span></li>
</ol>
<ol class="breadcrumb breadcrumb-arrow mt-3">
	<li><a href="#">Home</a></li>
	<li><a href="#">Library</a></li>
	<li><a href="#">Elements</a></li>
	<li class="active"><span>Data</span></li>
</ol></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>

								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Svg Breadcrumb</h3>
									</div>
									<div class="card-body breadcrumb-style4">
										<ol class="breadcrumb border p-4 mb-4">
											<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
											<li class="breadcrumb-item active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb border p-4 mb-4 bg-light">
											<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb p-4 bg-primary br-3 overflow-hidden">
											<li class="breadcrumb-item text-white"><a href="#" class="d-flex text-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
											<li class="breadcrumb-item text-white"><a href="#" class="text-white">Library</a></li>
											<li class="breadcrumb-item text-white"><a href="#" class="text-white">Elements</a></li>
											<li class="breadcrumb-item active text-white"><span>Data</span></li>
										</ol>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ol class="breadcrumb border p-4 mb-4">
	<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
	<li class="breadcrumb-item active"><span>Data</span></li>
</ol>
<ol class="breadcrumb border p-4 mb-4 bg-light">
	<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
	<li class="breadcrumb-item"><a href="#">Library</a></li>
	<li class="breadcrumb-item active"><span>Data</span></li>
</ol>
<ol class="breadcrumb p-4 bg-primary br-3 overflow-hidden">
	<li class="breadcrumb-item text-white"><a href="#" class="d-flex text-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
	<li class="breadcrumb-item text-white"><a href="#" class="text-white">Library</a></li>
	<li class="breadcrumb-item text-white"><a href="#" class="text-white">Elements</a></li>
	<li class="breadcrumb-item active text-white"><span>Data</span></li>
</ol></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
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
