<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- leaflet Css-->
		<link href="<?php echo base_url('public/assets/plugins/leaflet/leaflet.css'); ?>" rel="stylesheet">
		<!-- INTERNAL CSS END -->
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">leaflet Maps</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Maps</a></li>
									<li class="breadcrumb-item active" aria-current="page">leaflet Maps</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map">
									<div class="card-header">
										<div class="card-title">Basic</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet1" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map2">
									<div class="card-header">
										<div class="card-title">With Popup</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet2" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card" id="map1">
									<div class="card-header">
										<div class="card-title">Map With Circle</div>
									</div>
									<div class="card-body">
										<div class="ht-200 ht-sm-300 ht-md-400" id="leaflet3" style="height:300px"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- leaflet js -->
		<script src="<?php echo base_url('public/assets/plugins/leaflet/leaflet.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/map-leafleft.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>