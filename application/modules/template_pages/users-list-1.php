<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Data table css -->
		<link href="<?php echo base_url('public/assets/plugins/datatable/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/plugins/datatable/css/buttons.bootstrap4.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/plugins/datatable/responsive.bootstrap4.min.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">User List</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item"><a href="#">User List</a></li>
									<li class="breadcrumb-item active" aria-current="page">User List 01</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row flex-lg-nowrap">
							<div class="col-12">
								<div class="row flex-lg-nowrap">
									<div class="col-12 mb-3">
										<div class="e-panel card">
											<div class="card-body">
												<div class="e-table">
													<div class="table-responsive table-lg mt-3">
														<table class="table table-bordered border-top text-nowrap" id="example1">
															<thead>
																<tr>
																	<th class="align-top border-bottom-0 wd-5"></th>
																	<th class="border-bottom-0 w-20">User</th>
																	<th class="border-bottom-0 w-15">Date of joining</th>
																	<th class="border-bottom-0 w-30">Performance</th>
																	<th class="border-bottom-0 w-10">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Nam Guy</h6>
																				<small class="">web designer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">30%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 30%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/1.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Tracy Lindahl</h6>
																				<small class="">web developer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">82%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 82%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/3.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Breana Millis</h6>
																				<small class="">Php developer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">68%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 68%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/4.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Antwan Tramel</h6>
																				<small class="">Hr Manager</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>20 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">78%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 78%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/5.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Geraldine Arpin</h6>
																				<small class="">Recriuter</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>13 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">45%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 45%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/6.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Clement Niehaus</h6>
																				<small class="">Ceo</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>	25 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">60%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 60%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/7.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Melinda Mayers</h6>
																				<small class="">Director</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>12 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">55%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 55%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/8.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Willodean Monson</h6>
																				<small class="">web designer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">45%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 45%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Brenton Moncada</h6>
																				<small class="">web developer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>12 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">40%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 40%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/10.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Cyndy Kirschbaum</h6>
																				<small class="">web designer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>10 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">80%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 80%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/11.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Renna Spino</h6>
																				<small class="">Hr Manager</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>	03 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">70%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 70%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																			<span class="custom-control-label"></span>
																		</label>
																	</td>
																	<td class="align-middle">
																		<div class="d-flex">
																			<span class="avatar brround avatar-md d-block" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
																			<div class="ml-3 mt-1">
																				<h6 class="mb-0 font-weight-bold">Freeman Kozlowski</h6>
																				<small class="">web developer</small>
																			</div>
																		</div>
																	</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-nowrap align-middle">
																		<div class="float-right"><h6 class="mb-2 ml-4 font-weight-bold">65%</h6></div>
																		<div class="progress progress-sm mb-0 mt-1">
																			<div class="progress-bar bg-primary" style="width: 65%"></div>
																		</div>
																	</td>
																	<td class="align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-white btn-svg" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-white btn-svg" type="button"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></button>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
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
		<!-- INTERNAL JS START -->
		<!-- Data tables -->
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/jquery.dataTables.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/dataTables.bootstrap4.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/dataTables.buttons.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/buttons.bootstrap4.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/jszip.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/pdfmake.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/vfs_fonts.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/buttons.html5.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/buttons.print.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/js/buttons.colVis.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/dataTables.responsive.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/datatable/responsive.bootstrap4.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/datatables.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
