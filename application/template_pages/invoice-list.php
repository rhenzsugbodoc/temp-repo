<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Invoice List</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Invoice</a></li>
									<li class="breadcrumb-item active" aria-current="page">Invoice List</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">

								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mb-4">
												<a href="#" class="btn btn-primary"><i class="fe fe-plus"></i> Add New Invoice</a>
											</div>
											<div class="col col-auto mb-4">
												<div class="form-group w-100">
													<div class="input-icon">
														<span class="input-icon-addon">
															<i class="fe fe-search"></i>
														</span>
														<input type="text" class="form-control" placeholder="Search Invoice">
													</div>
												</div>
											</div>
										</div>
										<div class="e-table">
											<div class="table-responsive table-lg">
												<table class="table card-table table-vcenter text-nowrap border" id="example1">
													<thead>
														<tr>
															<th></th>
															<th>Invoice</th>
															<th>Amount</th>
															<th>Generate Date</th>
															<th>Due Date</th>
															<th>Bill to</th>
															<th>Options</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #23543</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$230</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2 "></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2 "></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2 "></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #43245</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$640</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2 "></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2 "></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2 "></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #54323</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$241</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2 "></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2 "></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #52345</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$543</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2 "></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #65343</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$654</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2 "></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2 "></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #23654</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$523</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2 "></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #53245</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$324</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2 "></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2 "></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #34234</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$543</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2 "></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2 "></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>


								<!-- User Form Modal -->
								<div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Create User</h5>
												<button type="button" class="close" data-dismiss="modal">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="py-1">
													<form class="form" novalidate="">
														<div class="row">
															<div class="col">
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>Full Name</label>
																			<input class="form-control" type="text" name="name" placeholder="John Smith" value="John Smith">
																		</div>
																	</div>
																	<div class="col">
																		<div class="form-group">
																			<label>Username</label>
																			<input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>Email</label>
																			<input class="form-control" type="text" placeholder="user@example.com">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col mb-3">
																		<div class="form-group">
																			<label>About</label>
																			<textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12 col-sm-6 mb-3">
																<div class="mb-2"><b>Change Password</b></div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>Current Password</label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>New Password</label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																	<div class="col">
																		<div class="form-group">
																			<label>Confirm <span class="d-none d-xl-inline">Password</span></label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-5 offset-sm-1 mb-3">
																<div class="mb-2"><b>Keeping in Touch</b></div>
																<div class="row">
																	<div class="col">
																	<label>Email Notifications</label>
																		<div class="custom-controls-stacked px-2">
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
																				<label class="custom-control-label" for="notifications-blog">Blog posts</label>
																			</div>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
																				<label class="custom-control-label" for="notifications-news">Newsletter</label>
																			</div>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
																				<label class="custom-control-label" for="notifications-offers">Personal Offers</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col d-flex justify-content-end">
															<button class="btn btn-primary" type="submit">Save Changes</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
<?= $this->include('layout/footer'); ?>
	</body>
</html>
