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
								<h4 class="page-title">MediaObject</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">MediaObject</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<!--div-->
								<div class="card" id="media">
									<div class="card-header">
										<div class="card-title">
											Basic Example
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/4.jpg'); ?>">
												<div class="media-body pt-4 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<div class="media d-block d-sm-flex">
				<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/4.jpg'); ?>">
				<div class="media-body pt-4 pt-sm-0">
					<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
					Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
				</div>
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media1">
									<div class="card-header">
										<div class="card-title">
											Nesting
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>">
												<div class="media-body pt-4 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													<div class="media d-block d-sm-flex mg-t-25">
														<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/8.jpg'); ?>">
														<div class="media-body">
															<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
															Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div><figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<div class="media d-block d-sm-flex">
				<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>">
				<div class="media-body pt-4 pt-sm-0">
					<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
					<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
					<div class="media d-block d-sm-flex mg-t-25">
						<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/8.jpg'); ?>">
						<div class="media-body">
							<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
							Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
						</div>
					</div>
				</div>
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element2"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media2">
									<div class="card-header">
										<div class="card-title">
											Alignment
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<img alt="" class="avatar avatar-xl brround mr-3 align-self-center" src="<?php echo base_url('public/assets/images/users/11.jpg'); ?>">
												<div class="media-body pt-4 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div><figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<div class="media d-block d-sm-flex">
				<img alt="" class="avatar avatar-xl brround mr-3 align-self-center" src="<?php echo base_url('public/assets/images/users/11.jpg'); ?>">
				<div class="media-body pt-4 pt-sm-0">
					<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
					Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
				</div>
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element3"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media3">
									<div class="card-header">
										<div class="card-title">
											Order
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<div class="media-body mb-4 mb-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
												<img alt="" class="avatar avatar-xl brround ml-3" src="<?php echo base_url('public/assets/images/users/12.jpg'); ?>">
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div><figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<div class="media d-block d-sm-flex">
				<div class="media-body mb-4 mb-sm-0">
					<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
					Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
				</div>
				<img alt="" class="avatar avatar-xl brround ml-3" src="<?php echo base_url('public/assets/images/users/12.jpg'); ?>">
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element4"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->

								<!--div-->
								<div class="card" id="media4">
									<div class="card-header">
										<div class="card-title">
											Media List
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<ul class="list-unstyled mb-0">
												<li class="media d-block d-sm-flex border-0">
													<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>">
													<div class="media-body pt-4 pt-sm-0">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mt-5 border-0">
													<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/12.jpg'); ?>">
													<div class="media-body pt-4 pt-sm-0">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mt-5 border-0">
													<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>">
													<div class="media-body pt-4 pt-sm-0">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
											</ul>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div><figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<ul class="list-unstyled mb-0">
				<li class="media d-block d-sm-flex border-0">
					<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>">
					<div class="media-body pt-4 pt-sm-0">
						<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
						Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
					</div>
				</li>
				<li class="media d-block d-sm-flex mt-5 border-0">
					<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/12.jpg'); ?>">
					<div class="media-body pt-4 pt-sm-0">
						<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
						Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
					</div>
				</li>
				<li class="media d-block d-sm-flex mt-5 border-0">
					<img alt="" class="avatar avatar-xl brround mr-3" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>">
					<div class="media-body pt-4 pt-sm-0">
						<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
						Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
					</div>
				</li>
			</ul>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element5"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
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
		<!-- INTERNAL JS END -->
	</body>
</html>