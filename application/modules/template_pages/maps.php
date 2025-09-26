<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Jvectormap css -->
		<link href="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Vector Maps</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Maps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Vector Maps</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">World Map</h3>
									</div>
									<div class="card-body">
										<div id="world-map-markers" class="worldh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->
						</div>
						<!-- End row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Asia Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap2" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Australia Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap3" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Canada Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap4" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Germany Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap5" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Europe Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap6" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">India Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap7" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">UK Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap8" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">USA Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap9" class="stateh" style="height:300px;"></div>
									</div>
								</div>
							</div><!-- end col -->
						</div>
						<!-- End Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Vector js -->
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/gdp-data.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-au-mill.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-de-mill.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-in-mill.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/jvectormap.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
