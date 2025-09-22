<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Shopping Cart</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">E-commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row-->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 bootstrap snippets">
								<!-- Cart -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Shopping Cart</h3>
									</div>
									<div class="card-body ">
										<div class="table-responsive ">
											<table class="table table-bordered text-nowrap border-top">
												<thead class="">
													<tr>
														<th>Product Name</th>
														<th>Quantity</th>
														<th>Unit Price</th>
														<th>Sub Total</th>
														<th class="w-5"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="<?php echo base_url('public/assets/images/products/1.jpg'); ?>" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold ml-4">Office Chair</h6>
															</div>
														</td>
														<td><a href="#">1</a></td>
														<td class="price">$ 122.21</td>
														<td>$ 122.21</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="<?php echo base_url('public/assets/images/products/8.jpg'); ?>" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold ml-4">Sports Shooe</h6>
															</div>
														</td>
														<td><a href="#">2</a></td>
														<td class="price">$ 20.63</td>
														<td>$ 41.26</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="<?php echo base_url('public/assets/images/products/9.jpg'); ?>" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold ml-4">Mobile</h6>
															</div>
														</td>
														<td><a href="#">1</a></td>
														<td class="price">$ 40.63</td>
														<td>$ 40.63</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="<?php echo base_url('public/assets/images/products/4.jpg'); ?>" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold ml-4">Leather Hand Bag</h6>
															</div>
														</td>
														<td><a href="#">1</a></td>
														<td class="price">$ 60.63</td>
														<td>$ 60.63</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="<?php echo base_url('public/assets/images/products/6.jpg'); ?>" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold ml-4">Computerg</h6>
															</div>
														</td>
														<td><a href="#">1</a></td>
														<td class="price">$ 63,830.43</td>
														<td>$45,530.43</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg>
															</a>
														</td>
													</tr>
													<tr>
														<td colspan="3" >Total</td>
														<td class="total h4 mb-0 font-weight-bold" colspan="2">$45,795.16</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="float-left mt-2">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Apply Coupon">
												<span class="input-group-append">
													<button class="btn btn-primary" type="button">Apply</button>
												</span>
											</div>
										</div>
										<div class=" float-right">
											<a href="<?php echo base_url('pages/shop'); ?>" class="btn btn-info mt-2"><i class="fe fe-arrow-left"></i> Continue Shopping</a>
											<a href="<?php echo base_url('pages/cart'); ?>" class="btn btn-primary mt-2">Update Cart</a>
											<a href="#" class="btn btn-secondary mt-2">Checkout <i class="fe fe-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<!-- End Cart -->
							</div>
						</div>
						<!-- End Row-->
<?= $this->include('layout/footer'); ?>
	</body>
</html>

