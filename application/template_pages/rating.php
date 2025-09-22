<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Prism Css -->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">
		<!-- Rating jcss -->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/css/examples.css'); ?>">

		<!-- Themes  css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/bars-1to10.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/bars-movie.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/bars-square.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/bars-pill.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/bars-reversed.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/bars-horizontal.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/fontawesome-stars.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/css-stars.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/bootstrap-stars.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/dist/themes/fontawesome-stars-o.css'); ?>">
		<!-- INTERNAL CSS END -->
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Rating</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Rating</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row row-deck">
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Star Rating</h3>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating">
											<input type="number" readonly="readonly" class="rating-value d-none" name="rating-stars-value" id="rating-stars-value" value="1">
											<div class="rating-stars-container mt-3">
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Heart Rating</h3>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="another-rating">
											<input type="number" readonly="readonly" class="rating-value d-none" name="another-rating-stars-value" id="another-rating-stars-value" value="2">
											<div class="rating-stars-container mt-3">
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Fractional Star rating</h3>
									</div>
									<div class="card-body">
										<div class="star-ratings mt-5 mb-5">
											<div class="stars stars-example-fontawesome-o">
												<select id="example-fontawesome-o" name="rating" data-current-rating="3.6" autocomplete="off">
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Font Awesome Star Rating</h3>
									</div>
									<div class="card-body text-center">
										<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
											<div class="stars stars-example-fontawesome">
												<select id="example-fontawesome" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar 1/10 Rating</h3>
									</div>
									<div class="card-body">
										<div class="box  box-example-1to10">
											<div class="box-body">
												<select id="example-1to10" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7" selected="selected">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Opinion rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-example-movie">
											<div class="box-body">
												<select id="example-movie" name="rating" autocomplete="off">
													<option value="Bad">Bad</option>
													<option value="Mediocre">Mediocre</option>
													<option value="Good" selected="selected">Good</option>
													<option value="Awesome">Awesome</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Square Rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-example-square">
											<div class="box-body">
												<select id="example-square" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Grade Rating</h3>
									</div>
									<div class="card-body">
										<div class="box  box-example-pill">
											<div class="box-body">
												<select id="example-pill" name="rating" autocomplete="off">
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>
													<option value="E">E</option>
													<option value="F">F</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar Rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-large box-example-horizontal">
											<div class="box-body">
												<select id="example-horizontal" name="rating" autocomplete="off">
													<option value="10">10</option>
													<option value="9">9</option>
													<option value="8">8</option>
													<option value="7">7</option>
													<option value="6">6</option>
													<option value="5">5</option>
													<option value="4">4</option>
													<option value="3">3</option>
													<option value="2">2</option>
													<option value="1" selected="selected">1</option>
												</select>
											</div>
										</div>
									</div>
								</div>
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
		<!--Rating js-->
		<script src="<?php echo base_url('public/assets/plugins/rating/jquery.rating-stars.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/rating/jquery.barrating.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/rating/js/examples.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>