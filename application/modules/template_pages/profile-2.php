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
									<li class="breadcrumb-item active" aria-current="page">Profile 02</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->
						<!--/app header-->
						<div class="main-proifle">
							<div class="row">
								<div class="col-lg-7">
									<div class="box-widget widget-user">
										<div class="widget-user-image d-sm-flex">
											<img alt="User Avatar" class="rounded-circle border p-0" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>">
											<div class="ml-sm-4 mt-4">
												<h4 class="pro-user-username mb-3 font-weight-bold">John Thomson <i class="fa fa-check-circle text-success"></i></h4>
												<div class="d-flex mb-1">
													<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5.08 8h2.95c.32-1.25.78-2.45 1.38-3.56-1.84.63-3.37 1.9-4.33 3.56zm2.42 4c0-.68.06-1.34.14-2H4.26c-.16.64-.26 1.31-.26 2s.1 1.36.26 2h3.38c-.08-.66-.14-1.32-.14-2zm-2.42 4c.96 1.66 2.49 2.93 4.33 3.56-.6-1.11-1.06-2.31-1.38-3.56H5.08zM12 4.04c-.83 1.2-1.48 2.53-1.91 3.96h3.82c-.43-1.43-1.08-2.76-1.91-3.96zM18.92 8c-.96-1.65-2.49-2.93-4.33-3.56.6 1.11 1.06 2.31 1.38 3.56h2.95zM12 19.96c.83-1.2 1.48-2.53 1.91-3.96h-3.82c.43 1.43 1.08 2.76 1.91 3.96zm2.59-.4c1.84-.63 3.37-1.91 4.33-3.56h-2.95c-.32 1.25-.78 2.45-1.38 3.56zM19.74 10h-3.38c.08.66.14 1.32.14 2s-.06 1.34-.14 2h3.38c.16-.64.26-1.31.26-2s-.1-1.36-.26-2zM9.66 10c-.09.65-.16 1.32-.16 2s.07 1.34.16 2h4.68c.09-.66.16-1.32.16-2s-.07-1.35-.16-2H9.66z" opacity=".3"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2s.07-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"/></svg>
													<div class="h6 mb-0 ml-3 mt-1">https://demowebsite.com</div>
												</div>
												<div class="d-flex mb-1">
													<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"/></svg>
													<div class="h6 mb-0 ml-3 mt-1">collinbridgman@gmail.com</div>
												</div>
												<div class="d-flex">
													<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.2 18.21c1.21.41 2.48.67 3.8.76v-1.5c-.88-.07-1.75-.22-2.6-.45l-1.2 1.19zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.79l1.2-1.21c-.24-.83-.39-1.7-.45-2.58zM14 8h5V5h-5z" opacity=".3"/><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.1-.03-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM5.03 5h1.5c.07.88.22 1.75.46 2.59L5.79 8.8c-.41-1.21-.67-2.48-.76-3.8zM19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45v1.51zM12 3v10l3-3h6V3h-9zm7 5h-5V5h5v3z"/></svg>
													<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-5 col-md-auto">
									<div class="text-lg-right mt-4 mt-lg-0">
										<a href="#" class="btn btn-white">Message</a>
										<a href="#" class="btn btn-primary">Edit Profile</a>
									</div>
									<div class="mt-5">
										<div class="main-profile-contact-list row">
											<div class="media col-sm-4">
												<div class="media-icon bg-light text-primary mr-3 mt-1">
													<i class="fa fa-sticky-note-o fs-18"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Posts</small>
													<div class="font-weight-bold fs-25">
														245
													</div>
												</div>
											</div>
											<div class="media col-sm-4">
												<div class="media-icon bg-light text-primary mr-3 mt-1">
													<i class="fa fa-user fs-18"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Followers</small>
													<div class="font-weight-bold fs-25">
														689k
													</div>
												</div>
											</div>
											<div class="media col-sm-4">
												<div class="media-icon bg-light text-primary mr-3 mt-1">
													<i class="fa fa-feed fs-18"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Following</small>
													<div class="font-weight-bold fs-25">
														3,765
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="profile-cover">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading p-0">
										<div class="tabs-menu1 px-3">
											<ul class="nav">
												<li><a href="#tab-7" class="active" data-toggle="tab">About</a></li>
												<li><a href="#tab-8" data-toggle="tab" class="">Friends</a></li>
												<li><a href="#tab-9" data-toggle="tab" class="">Timeline</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div><!-- /.profile-cover -->
						</div>
						<!-- Row -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="border-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab-7">
											<div class="card">
												<div class="card-body">
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
										<div class="tab-pane" id="tab-8">
											<div class="card p-5">
												<div class="row">
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Denis Rosenblum</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/6.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Harvey Mattos</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Catrice Doshier</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/1.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Catherina Bamber</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/8.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Margie Fitts</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Dana Lott</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/6.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Benedict Vallone</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/8.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Robbie Ruder</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/3.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Micaela Aultman</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/4.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Jacquelynn Sapienza</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Elida Distefano</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>" >
															</div>
															<div class="wrapper ml-3">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Collin Bridgman</p>
																<small>Project Manager</small>
															</div>
															<div class="float-right ml-auto">
																<a href="#" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View</a>
															</div>
														</div>
													</div>
													<div class="col-md-12">
														<a class="btn btn-block btn-light" href="#"><i class="fe fe-chevron-down"></i> See All</a>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-9">
											<ul class="timelineleft pb-5">
												<li class="timeleft-label"><span class="bg-danger">10 May. 2020</span></li>
												<li>
													<i class="fa fa-envelope bg-primary"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 12:05</span>
														<h3 class="timelineleft-header"><a href="#">Support Team</a> <span>sent you an email</span></h3>
														<div class="timelineleft-body">
															Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
															weebly ning heekya handango imeem plugg dopplr jibjab, movity
															jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
															quora plaxo ideeli hulu weebly balihoo...
														</div>
														<div class="timelineleft-footer">
															<a class="btn btn-primary text-white btn-sm">Read more</a>
															<a class="btn btn-secondary text-white btn-sm ">Delete</a>
														</div>
													</div>
												</li>
												<li>
													<i class="fa fa-user bg-secondary"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 5 mins ago</span>
														<h3 class="timelineleft-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
													</div>
												</li>
												<li>
													<i class="fa fa-comments bg-warning"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 27 mins ago</span>
														<h3 class="timelineleft-header"><a href="#">Jay White</a> commented on your post</h3>
														<div class="timelineleft-body">
															Take me to your leader!
															Switzerland is small and neutral!
															We are more like Germany, ambitious and misunderstood!
														</div>
														<div class="timelineleft-footer">
															<a class="btn btn-info text-white btn-flat btn-sm">View comment</a>
														</div>
													</div>
												</li>
												<li>
													<i class="fa fa-video-camera bg-pink"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 1 hour ago</span>
														<h3 class="timelineleft-header"><a href="#">Mr. John</a> shared a video</h3>
														<div class="timelineleft-body">
															<div class="embed-responsive embed-responsive-16by9 w-75" >
																<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs"
																 allowfullscreen></iframe>
															</div>
															<div class="timelineleft-body mt-3">
																Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.Lorem ipsum dolor sit amet
															</div>
														</div>
														<div class="timelineleft-footer">
															<a href="#" class="btn btn-sm bg-warning text-white">See comments</a>
														</div>
													</div>
												</li>
												<li class="timeleft-label">
													<span class="bg-success"> 3 Jan. 2014</span>
												</li>
												<li>
													<i class="fa fa-camera bg-orange"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 2 days ago</span>
														<h3 class="timelineleft-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
														<div class="timelineleft-body">
															<img src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" alt="..." class="margin mt-2 mb-2">
															<img src="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" alt="..." class="margin mt-2 mb-2 ">
															<img src="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" alt="..." class="margin mt-2 mb-2 ">
															<img src="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" alt="..." class="margin mt-2 mb-2">
														</div>
													</div>
												</li>
												<li>
													<i class="fa fa-video-camera bg-pink"></i>
													<div class="timelineleft-item">
														<span class="time"><i class="fa fa-clock-o text-danger"></i> 5 days ago</span>
														<h3 class="timelineleft-header"><a href="#">Mr. Doe</a> shared a video</h3>
														<div class="timelineleft-body">
															<div class="embed-responsive embed-responsive-16by9 w-75" >
																<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs"
																 allowfullscreen></iframe>
															</div>
														</div>
														<div class="timelineleft-footer">
															<a href="#" class="btn btn-sm bg-warning text-white">See comments</a>
														</div>
													</div>
												</li>
												<li>
													<i class="fa fa-clock-o bg-success pb-3"></i>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
<?= $this->include('layout/footer'); ?>
	</body>
</html>

