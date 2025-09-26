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
									<li class="breadcrumb-item active" aria-current="page">Profile 03</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="card overflow-hidden">
							<div class="card-body bg-light">
								<div class="box-widget widget-user">
									<div class="widget-user-image d-sm-flex">
										<div>
											<img alt="User Avatar" class="rounded-circle border p-0" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>">
										</div>
										<div class="mt-4 ml-sm-5 ml-0">
											<h4 class="pro-user-username text-dark mb-2 font-weight-bold">John Thomson</h4>
											<div>
												<span class="badge badge-light badge-pill">admin</span>
												<span class="badge badge-light badge-pill">Company director</span>
											</div>
											<div class="d-flex mb-1 mt-4">
												<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"/></svg>
												<div class="h6 mb-0 ml-3 mt-1">collinbridgman@gmail.com</div>
											</div>
											<div class="d-flex">
												<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.2 18.21c1.21.41 2.48.67 3.8.76v-1.5c-.88-.07-1.75-.22-2.6-.45l-1.2 1.19zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.79l1.2-1.21c-.24-.83-.39-1.7-.45-2.58zM14 8h5V5h-5z" opacity=".3"/><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.1-.03-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM5.03 5h1.5c.07.88.22 1.75.46 2.59L5.79 8.8c-.41-1.21-.67-2.48-.76-3.8zM19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45v1.51zM12 3v10l3-3h6V3h-9zm7 5h-5V5h5v3z"/></svg>
												<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
											</div>
											<div class="social social-profile-buttons mt-4">
												<ul class="text-center">
													<li>
														<a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
													</li>
													<li>
														<a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
													</li>
													<li>
														<a class="social-icon" href=""><i class="fa fa-rss"></i></a>
													</li>
													<li>
														<a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
													</li>
													<li>
														<a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
													</li>
													<li>
														<a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
													</li>
												</ul>
											</div>
											<a href="<?php echo base_url('pages/profile'); ?>" class="btn btn-primary btn-sm mt-5">Edit Profile</a>
											<a href="#" class="btn btn-success btn-sm mt-5">Follow</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-lg-4">
										<div class="card border p-0 shadow-none">
											<div class="card-header">
												<div class="card-title">Education</div>
											</div>
											<div class="card-body">
												<div class="main-profile-contact-list">
													<div class="media mr-5 mt-0">
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
										</div>
										<div class="card border p-0 shadow-none">
											<div class="card-header">
												<div class="card-title">Contact</div>
											</div>
											<div class="card-body">
												<div class="main-profile-contact-list">
													<div class="media mr-4 mt-0">
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
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-8">
										<form class="profile-edit mb-5">
											<textarea class="form-control" placeholder="What are you doing right now?" rows="5"></textarea>
											<div class="profile-share border border-light2 border-top-0">
												<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 13.3c.66 0 1.19-.54 1.19-1.2l.01-6.2c0-.66-.54-1.2-1.2-1.2s-1.2.54-1.2 1.2v6.2c0 .66.54 1.2 1.2 1.2z" opacity=".3"/><path d="M12 15c1.66 0 2.99-1.34 2.99-3L15 6c0-1.66-1.34-3-3-3S9 4.34 9 6v6c0 1.66 1.34 3 3 3zm-1.2-9.1c0-.66.54-1.2 1.2-1.2s1.2.54 1.2 1.2l-.01 6.2c0 .66-.53 1.2-1.19 1.2s-1.2-.54-1.2-1.2V5.9zm6.5 6.1c0 3-2.54 5.1-5.3 5.1S6.7 15 6.7 12H5c0 3.41 2.72 6.23 6 6.72V22h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"/></svg></a>
												<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 8h10v8H5z" opacity=".3"/><path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z"/></svg></a>
												<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 19h14V5H5v14zm4-5.86l2.14 2.58 3-3.87L18 17H6l3-3.86z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm16 14H5V5h14v14zm-4.86-7.14l-3 3.86L9 13.14 6 17h12z"/></svg></a>
												<button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-share ml-1"></i> Share</button>
											</div>
										</form>
										<div class="card border p-0 shadow-none">
											<div class="card-header">
												<div class="card-title">Time Line</div>
											</div>
											<div class="card-body pb-0">
												<div class="d-flex">
													<div class="media mt-0">
														<div class="media-user mr-2">
															<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>"></div>
														</div>
														<div class="media-body">
															<h6 class="mb-0 mt-1 font-weight-bold">Peter Hill</h6>
															<small class="text-primary">just now</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="dropdown show">
															<a class="new option-dots" href="JavaScript:void(0);" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit Post</a>
																<a class="dropdown-item" href="#">Delete Post</a>
																<a class="dropdown-item" href="#">Personal Settings</a>
															</div>
														</div>
													</div>
												</div>
												<div class="mt-4">
													<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												</div>
												<div class="media mg-t-15 profile-footer">
													<div class="media-user mr-2">
														<div class="avatar-list avatar-list-stacked">
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/4.jpg'); ?>)"></span>
															<span class="avatar brround">+28</span>
														</div>
													</div>
													<div class="media-body">
														<h6 class="mb-0 mt-2 ml-2">28 people like your photo</h6>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
															<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
															<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pb-0">
												<div class="d-flex">
													<div class="media mt-0">
														<div class="media-user mr-2">
															<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>"></div>
														</div>
														<div class="media-body">
															<h6 class="mb-0 mt-1 font-weight-bold">Peter Hill</h6>
															<small class="text-muted">Sep 26 2019, 10:14am</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="dropdown show">
															<a class="new option-dots" href="JavaScript:void(0);" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit Post</a>
																<a class="dropdown-item" href="#">Delete Post</a>
																<a class="dropdown-item" href="#">Personal Settings</a>
															</div>
														</div>
													</div>
												</div>
												<div class="mt-4">
													<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
													<div class="d-flex">
														<img src="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" alt="img" class="w-40 m-1">
														<img src="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" alt="img" class="w-40 m-1">
													</div>
												</div>
												<div class="media mg-t-15 profile-footer">
													<div class="media-user mr-2">
														<div class="avatar-list avatar-list-stacked">
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/4.jpg'); ?>)"></span>
															<span class="avatar brround">+28</span>
														</div>
													</div>
													<div class="media-body">
														<h6 class="mb-0 mt-2 ml-2">28 people like your photo</h6>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
															<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
															<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pb-0">
												<div class="d-flex">
													<div class="media mt-0">
														<div class="media-user mr-2">
															<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>"></div>
														</div>
														<div class="media-body">
															<h6 class="mb-0 mt-1 font-weight-bold">Peter Hill</h6>
															<small class="text-muted">Sep 24 2019, 09:14am</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="dropdown show">
															<a class="new option-dots" href="JavaScript:void(0);" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit Post</a>
																<a class="dropdown-item" href="#">Delete Post</a>
																<a class="dropdown-item" href="#">Personal Settings</a>
															</div>
														</div>
													</div>
												</div>
												<div class="mt-4">
													<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
													<div class="d-flex">
														<img src="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" alt="img" class="w-30 m-1">
														<img src="<?php echo base_url('public/assets/images/photos/5.jpg'); ?>" alt="img" class="w-30 m-1">
														<img src="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" alt="img" class="w-30 m-1">
													</div>
												</div>
												<div class="media mg-t-15 profile-footer">
													<div class="media-user mr-2">
														<div class="avatar-list avatar-list-stacked">
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
															<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/4.jpg'); ?>)"></span>
															<span class="avatar brround">+28</span>
														</div>
													</div>
													<div class="media-body">
														<h6 class="mb-0 mt-2 ml-2">28 people like your photo</h6>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
															<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
															<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
														</div>
													</div>
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
