<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Profile</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Profile</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile 01</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card box-widget widget-user">
									<div class="widget-user-image mx-auto mt-5 text-center"><img alt="User Avatar" class="rounded-circle" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>"></div>
									<div class="card-body text-center">
										<div class="pro-user">
											<h4 class="pro-user-username text-dark mb-1 font-weight-bold">John Thomson</h4>
											<h6 class="pro-user-desc text-muted">Web Designer</h6>
											<a href="<?php echo base_url('pages/profile'); ?>" class="btn btn-primary btn-sm mt-3">Edit Profile</a>
											<a href="#" class="btn btn-success btn-sm mt-3">Follow</a>
										</div>
									</div>
									<div class="card-footer p-0">
										<div class="row">
											<div class="col-sm-6 border-right text-center">
												<div class="description-block p-4">
													<h5 class="description-header mb-1 font-weight-bold">689k</h5>
													<span class="text-muted">Followers</span>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="description-block text-center p-4">
													<h5 class="description-header mb-1 font-weight-bold">3,765</h5>
													<span class="text-muted">Following</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Personal Details</h4>
										<div class="table-responsive">
											<table class="table mb-0">
												<tbody>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Name </span>
														</td>
														<td class="py-2 px-0">Jacob Smith</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Location </span>
														</td>
														<td class="py-2 px-0">USA</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Languages </span>
														</td>
														<td class="py-2 px-0">English, German</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Website </span>
														</td>
														<td class="py-2 px-0">smithabgd.com</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Email </span>
														</td>
														<td class="py-2 px-0">georgemestayer@gmail.com</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Phone </span>
														</td>
														<td class="py-2 px-0">+125 254 3562s</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-12">
								<div class="main-content-body main-content-body-profile card mg-b-20">
									<!-- main-profile-body -->
									<div class="main-profile-body">
										<div class="tab-content">
											<div class="tab-pane show active" id="about">
												<div class="card-body">
													<div class="mb-5">
														<form class="profile-edit">
															<textarea class="form-control" placeholder="What are you doing right now?" rows="5"></textarea>
															<div class="profile-share border border-light2 border-top-0">
																<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 13.3c.66 0 1.19-.54 1.19-1.2l.01-6.2c0-.66-.54-1.2-1.2-1.2s-1.2.54-1.2 1.2v6.2c0 .66.54 1.2 1.2 1.2z" opacity=".3"/><path d="M12 15c1.66 0 2.99-1.34 2.99-3L15 6c0-1.66-1.34-3-3-3S9 4.34 9 6v6c0 1.66 1.34 3 3 3zm-1.2-9.1c0-.66.54-1.2 1.2-1.2s1.2.54 1.2 1.2l-.01 6.2c0 .66-.53 1.2-1.19 1.2s-1.2-.54-1.2-1.2V5.9zm6.5 6.1c0 3-2.54 5.1-5.3 5.1S6.7 15 6.7 12H5c0 3.41 2.72 6.23 6 6.72V22h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"/></svg></a>
																<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 8h10v8H5z" opacity=".3"/><path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z"/></svg></a>
																<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 19h14V5H5v14zm4-5.86l2.14 2.58 3-3.87L18 17H6l3-3.86z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm16 14H5V5h14v14zm-4.86-7.14l-3 3.86L9 13.14 6 17h12z"/></svg></a>
																<button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-share ml-1"></i> Share</button>
															</div>
														</form>
													</div>
													<h5 class="font-weight-bold">Biography</h5>
													<div class="main-profile-bio mb-0">
														<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries nchanged.</p>
														<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
														<p class="mb-0">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a></p>
													</div>
												</div>
												<div class="card-body border-top">
													<h5 class="font-weight-bold">Work & Education</h5>
													<div class="main-profile-contact-list d-lg-flex">
														<div class="media mr-5">
															<div class="media-icon bg-success-transparent text-success mr-4">
																<i class="fa fa-whatsapp"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-bold mb-1">Web Designer at <a href="" class="btn-link">Spruko</a></h6>
																<span>2018 - present</span>
																<p>Past Work: Spruko, Inc.</p>
															</div>
														</div>
														<div class="media mr-5">
															<div class="media-icon bg-danger-transparent text-danger mr-4">
																<i class="fa fa-briefcase"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-bold mb-1">Studied at <a href=""  class="btn-link">University</a></h6>
																<span>2004-2008</span>
																<p>Graduation: Bachelor of Science in Computer Science</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body border-top">
													<h5 class="font-weight-bold">Skills</h5>
													<a class="btn btn-sm btn-white mt-1" href="#">HTML5</a>
													<a class="btn btn-sm btn-white mt-1" href="#">CSS</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Java Script</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Photo Shop</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Php</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Wordpress</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Sass</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Angular</a>
												</div>
												<div class="card-body border-top">
													<h5 class="font-weight-bold">Contact</h5>
													<div class="main-profile-contact-list d-lg-flex">
														<div class="media mr-4">
															<div class="media-icon bg-primary-transparent text-primary mr-3 mt-1">
																<i class="fa fa-phone"></i>
															</div>
															<div class="media-body">
																<small class="text-muted">Mobile</small>
																<div class="font-weight-bold">
																	+245 354 654
																</div>
															</div>
														</div>
														<div class="media mr-4">
															<div class="media-icon bg-warning-transparent text-warning mr-3 mt-1">
																<i class="fa fa-slack"></i>
															</div>
															<div class="media-body">
																<small class="text-muted">Stack</small>
																<div class="font-weight-bold">
																	@spruko.com
																</div>
															</div>
														</div>
														<div class="media">
															<div class="media-icon bg-info-transparent text-info mr-3 mt-1">
																<i class="fa fa-map"></i>
															</div>
															<div class="media-body">
																<small class="text-muted">Current Address</small>
																<div class="font-weight-bold">
																	San Francisco, USA
																</div>
															</div>
														</div>
													</div><!-- main-profile-contact-list -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<?= $this->include('layout/footer'); ?>
	</body>
</html>

