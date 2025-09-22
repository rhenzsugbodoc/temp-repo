<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Select2 css -->
		<link href="<?php echo base_url('public/assets/plugins/select2/select2.min.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Search</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Search</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-3">
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<div class="card">
											<div class="card-header">
												<h3 class="card-title"> Categories</h3>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label">Mens</label>
													<select name="beast" id="select-beast" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Foot wear</option>
														<option value="2">Top wear</option>
														<option value="3">Bootom wear</option>
														<option value="4">Men's Groming</option>
														<option value="5">Accessories</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Women</label>
													<select name="beast" id="select-beast1" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Western wear</option>
														<option value="2">Foot wear</option>
														<option value="3">Top wear</option>
														<option value="4">Bootom wear</option>
														<option value="5">Beuty Groming</option>
														<option value="6">Accessories</option>
														<option value="7">jewellery</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Baby & Kids</label>
													<select name="beast" id="select-beast2" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Boys clothing</option>
														<option value="2">girls Clothing</option>
														<option value="3">Toys</option>
														<option value="4">Baby Care</option>
														<option value="5">Kids footwear</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Electronics</label>
													<select name="beast" id="select-beast3" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Mobiles</option>
														<option value="2">Laptops</option>
														<option value="3">Gaming & Accessories</option>
														<option value="4">Health care Appliances</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Sport,Books & More </label>
													<select name="beast" id="select-beast4" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Stationery</option>
														<option value="2">Books</option>
														<option value="3">Gaming</option>
														<option value="4">Music</option>
														<option value="5">Exercise & fitness</option>
													</select>
												</div>
												<a class="btn btn-primary btn-block" href="#">Search</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="input-group">
									<input type="text" class="form-control br-tl-7 br-bl-7" placeholder="">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-7 br-br-7">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div class="card mt-5 store">
									<div class="table-responsive">
										<table class="table card-table table-vcenter">
											<tr>
												<td>Mens Jackets</td>
												<td>
													<div class="rating-stars block" id="rating" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">987 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">50% off</td>
												<td class="text-right">
													<strong>$1,987</strong>
												</td>
											</tr>
											<tr>
												<td> Occational Special Edition</td>
												<td>
													<div class="rating-stars block" id="rating1" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">675 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap ">60% off</td>
												<td class="text-right">
													<strong>$2,679</strong>
												</td>
											</tr>
											<tr>
												<td>Sares
													<div class="badge badge-primary badge-md">New</div>
												</td>
												<td>
													<div class="rating-stars block" id="rating2" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">765 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">25% off</td>
												<td class="text-right">
													<strong>$999</strong>
												</td>
											</tr>
											<tr>
												<td>Western Wear</td>
												<td>
													<div class="rating-stars block" id="rating3" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">678 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">30% off</td>
												<td class="text-right">
													<strong>$699</strong>
												</td>
											</tr>
											<tr>
												<td>Kids Dress
													<div class="badge badge-default badge-md">New</div>
												</td>
												<td>
													<div class="rating-stars block" id="rating4" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">345 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">47% off</td>
												<td class="text-right">
													<strong>$399</strong>
												</td>
											</tr>
											<tr>
												<td>Kids Toys</td>
												<td>
													<div class="rating-stars block" id="rating5" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">876 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">26% off</td>
												<td class="text-right">
													<strong>$299</strong>
												</td>
											</tr>
											<tr>
												<td>Sony KD-49XE7005
													<div class="badge badge-primary badge-md">New</div>
												</td>
												<td>
													<div class="rating-stars block" id="rating6" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">563 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">43% off</td>
												<td class="text-right">
													<strong>$22,269</strong>
												</td>
											</tr>
											<tr>
												<td>Huawei Mate Pro Dual SIM </td>
												<td>
													<div class="rating-stars block" id="rating7" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">671 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">20% off</td>
												<td class="text-right">
													<strong>$9,999</strong>
												</td>
											</tr>
											<tr>
												<td>Novel Books
													<div class="badge badge-default badge-md">New</div>
												</td>
												<td>
													<div class="rating-stars block" id="rating8" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">354 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">14% off</td>
												<td class="text-right">
													<strong>$899</strong>
												</td>
											</tr>
											<tr>
												<td>Welcare Fitness</td>
												<td>
													<div class="rating-stars block" id="rating9" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">937 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">40% off</td>
												<td class="text-right">
													<strong>$3,987</strong>
												</td>
											</tr>
											<tr>
												<td>Red rose Gift</td>
												<td>
													<div class="rating-stars block" id="rating10" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">137 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">80% off</td>
												<td class="text-right">
													<strong>$987</strong>
												</td>
											</tr>
											<tr>
												<td>New Model Saree</td>
												<td>
													<div class="rating-stars block" id="rating11" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">157 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">30% off</td>
												<td class="text-right">
													<strong>$2,452</strong>
												</td>
											</tr>
											<tr>
												<td>Welcare Fitness</td>
												<td>
													<div class="rating-stars block" id="rating12" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">937 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">40% off</td>
												<td class="text-right">
													<strong>$3,987</strong>
												</td>
											</tr>
											<tr>
												<td>W-top</td>
												<td>
													<div class="rating-stars block" id="rating13" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">1452 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">40% off</td>
												<td class="text-right">
													<strong>$123</strong>
												</td>
											</tr>
											<tr>
												<td>Watch</td>
												<td>
													<div class="rating-stars block" id="rating14" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">637 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">10% off</td>
												<td class="text-right">
													<strong>$87</strong>
												</td>
											</tr>
											<tr>
												<td>College Bag</td>
												<td>
													<div class="rating-stars block" id="rating15" >
														<div class="rating-stars-container">
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">536 views</td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap">25% off</td>
												<td class="text-right">
													<strong>$1,251</strong>
												</td>
											</tr>
										</table>
									</div>
									<div class="d-flex p-4 border-top">
										<ul class="pagination mb-0">
											<li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
											<li class="active page-item"><a href="#" class="page-link">1</a></li>
											<li class="page-item"><a href="#" class="page-link">2</a></li>
											<li class="page-item"><a href="#" class="page-link">3</a></li>
											<li class="page-item"><a href="#" class="page-link">4</a></li>
											<li class="page-item"><a href="#" class="page-link">5</a></li>
											<li class="page-item"><a href="#" class="page-link">›</a></li>
											<li class="page-item"><a href="#" class="page-link">»</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!--Select2 js -->
		<script src="<?php echo base_url('public/assets/plugins/select2/select2.full.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/select2.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
