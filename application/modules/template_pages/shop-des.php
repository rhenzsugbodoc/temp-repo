<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Products</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">E-commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Products</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 wrapper wrapper-content">
								<div class="ibox card">
									 <div class="card-header">
										<h3 class="card-title">Items in your cart</h3>
									</div>
									<div class="card-body">
										<div class="ibox-content">
											<div class="row">
												<div class="col-md-12 col-lg-12">
													<div class="pb-5">
														<h3>
															<a href="#" class="text-navy">
																New Top
															</a>
														</h3>
														<div class="mb-3">
															<a href="#"><i class="fa fa-star text-warning"></i></a>
															<a href="#"><i class="fa fa-star text-warning"></i></a>
															<a href="#"><i class="fa fa-star text-warning"></i></a>
															<a href="#"><i class="fa fa-star text-warning"></i></a>
															<a href="#"><i class="fa fa-star-o text-warning"></i></a>
															<span class="fs-16 ml-3">3.5 <small>(45 Reviews)</small></span>
														</div>
														<div>
															<h5>Description lists</h5>
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
														</div>
														<h3 class="font-weight-bold">$124 <del class="h5 font-weight-normal">$150</del></h3>
														<div class="form-group m-0">
															<label class="form-label fs-16">Select Color</label>
															<div class="d-flex">
																<label class="colorinput mr-2">
																	<input name="color" type="radio" value="red" class="colorinput-input" checked="">
																	<span class="colorinput-color bg-red"></span>
																</label>
																<label class="colorinput mr-2">
																	<input name="color" type="radio" value="indigo" class="colorinput-input">
																	<span class="colorinput-color bg-indigo"></span>
																</label>
																<label class="colorinput mr-2">
																	<input name="color" type="radio" value="purple" class="colorinput-input">
																	<span class="colorinput-color bg-purple"></span>
																</label>
																<label class="colorinput mr-2">
																	<input name="color" type="radio" value="pink" class="colorinput-input">
																	<span class="colorinput-color bg-pink"></span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<h5 class="mt-4 mb-4">Product Details</h5>
										<table class="table table-striped table-bordered">
											<tbody>
												<tr>
													<th scope="row">Model:</th>
													<td>Model 2.3</td>
												</tr>
												<tr>
													<th scope="row">color:</th>
													<td>red</td>
												</tr>
												<tr>
													<th scope="row">features</th>
													<td>New Model ,High Sales</td>
												</tr>
												<tr>
													<th scope="row">Advanced</th>
													<td>Feel Comfortability </td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="ibox-content card-footer text-right">
										<a href="<?php echo base_url('pages/cart'); ?>" class="btn btn-light">Buy Now</a>
										<a href="<?php echo base_url('pages/cart'); ?>" class="btn btn-primary btn-svgs mt-1 mb-1"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 11l2.76-5H6.16l2.37 5z" opacity=".3"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg> Add to cart</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center">
											<img src="<?php echo base_url('public/assets/images/products/7.jpg'); ?>" alt="img" class="img-fluid w-100">
										</div>
										<div class="card-body px-0 ">
											<div class="cardtitle">
												<div>
													<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
													<a href="#"> (48)</a>
												</div>
												<a class="shop-title">Flower Pot</a>
											</div>
											<div class="cardprice">
												<span class="type--strikethrough">$750</span>
												<span>$974</span>
											</div>
										</div>
									</div>
									<div class="text-center border-top p-4">
										<a href="<?php echo base_url('pages/shop-des'); ?>" class="btn btn-light btn-svgs mt-1 mb-1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c-3.79 0-7.17 2.13-8.82 5.5C4.83 14.87 8.21 17 12 17s7.17-2.13 8.82-5.5C19.17 8.13 15.79 6 12 6zm0 10c-2.48 0-4.5-2.02-4.5-4.5S9.52 7 12 7s4.5 2.02 4.5 4.5S14.48 16 12 16z" opacity=".3"/><path d="M12 4C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 13c-3.79 0-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6s7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17zm0-10c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7zm0 7c-1.38 0-2.5-1.12-2.5-2.5S10.62 9 12 9s2.5 1.12 2.5 2.5S13.38 14 12 14z"/></svg> View More</a>
										<a href="<?php echo base_url('pages/cart'); ?>" class="btn btn-primary btn-svgs mt-1 mb-1"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 11l2.76-5H6.16l2.37 5z" opacity=".3"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg> Add to cart</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center">
											<img src="<?php echo base_url('public/assets/images/products/1.jpg'); ?>" alt="img" class="img-fluid w-100">
										</div>
										<div class="card-body px-0 ">
											<div class="cardtitle">
												<div>
													<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
													<a href="#"> (32)</a>
												</div>
												<a class="shop-title">Offie Chair</a>
											</div>
											<div class="cardprice">
												<span class="type--strikethrough">$1,457</span>
												<span>$986</span>
											</div>
										</div>
									</div>
									<div class="text-center border-top p-4">
										<a href="<?php echo base_url('pages/shop-des'); ?>" class="btn btn-light btn-svgs mt-1 mb-1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c-3.79 0-7.17 2.13-8.82 5.5C4.83 14.87 8.21 17 12 17s7.17-2.13 8.82-5.5C19.17 8.13 15.79 6 12 6zm0 10c-2.48 0-4.5-2.02-4.5-4.5S9.52 7 12 7s4.5 2.02 4.5 4.5S14.48 16 12 16z" opacity=".3"/><path d="M12 4C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 13c-3.79 0-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6s7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17zm0-10c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7zm0 7c-1.38 0-2.5-1.12-2.5-2.5S10.62 9 12 9s2.5 1.12 2.5 2.5S13.38 14 12 14z"/></svg> View More</a>
										<a href="<?php echo base_url('pages/cart'); ?>" class="btn btn-primary btn-svgs mt-1 mb-1"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 11l2.76-5H6.16l2.37 5z" opacity=".3"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg> Add to cart</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="card item-card">
									<div class="card-body pb-0">
										<div class="text-center">
											<img src="<?php echo base_url('public/assets/images/products/9.jpg'); ?>" alt="img" class="img-fluid w-100">
										</div>
										<div class="card-body px-0 ">
											<div class="cardtitle">
												<div>
													<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
													<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
													<a href="#"> (64)</a>
												</div>
												<a class="shop-title">T Shirt</a>
											</div>
											<div class="cardprice">
												<span class="type--strikethrough">$18,967</span>
												<span>$12,724</span>
											</div>
										</div>
									</div>
									<div class="text-center border-top p-4">
										<a href="<?php echo base_url('pages/shop-des'); ?>" class="btn btn-light btn-svgs mt-1 mb-1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c-3.79 0-7.17 2.13-8.82 5.5C4.83 14.87 8.21 17 12 17s7.17-2.13 8.82-5.5C19.17 8.13 15.79 6 12 6zm0 10c-2.48 0-4.5-2.02-4.5-4.5S9.52 7 12 7s4.5 2.02 4.5 4.5S14.48 16 12 16z" opacity=".3"/><path d="M12 4C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 13c-3.79 0-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6s7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17zm0-10c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7zm0 7c-1.38 0-2.5-1.12-2.5-2.5S10.62 9 12 9s2.5 1.12 2.5 2.5S13.38 14 12 14z"/></svg> View More</a>
										<a href="<?php echo base_url('pages/cart'); ?>" class="btn btn-primary btn-svgs mt-1 mb-1"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 11l2.76-5H6.16l2.37 5z" opacity=".3"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg> Add to cart</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
<?= $this->include('layout/footer'); ?>
	</body>
</html>
