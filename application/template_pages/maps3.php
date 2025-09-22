<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Mapel Maps</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Maps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Mapel Maps</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Map with links between the plotted cities</h4>
									</div>
									<div class="card-body">
										<div class="mapcontainer4">
											<div class="map pt-0">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Static MapelMaps</h4>
									</div>
									<div class="card-body">
										<div class="mapcontainer">
											<div class="map pt-0">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"> Map with a legend for areas</h4>
									</div>
									<div class="card-body">
										<div class="mapcontainer1">
											<div class="map pt-0">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Mapel Plugin -->
		<script src="<?php echo base_url('public/assets/plugins/mapel/raphael.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/mapel/jquery.mapael.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/mapel/maps/france_departments.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/mapel/maps/world_countries.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/mapel/maps/usa_states.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/mapelmaps.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
