<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Contact List</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Contact List</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="card">
						<div class="row no-gutters">
							<div class="col-lg-4 col-xl-3">
								<div class="border-right">
									<div class="main-content-left main-content-left-contacts">
										<div class="card-header">
											<div class="card-title">All Contacts</div>
											<div class="card-options">
												<a class="" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3"/><circle cx="15" cy="8" opacity=".3" r="2"/><path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 8c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H9zm-3-3v-3h3v-2H6V7H4v3H1v2h3v3z"/></svg></a>
											</div>
										</div>
										<div class="main-contacts-list" id="mainContactList">
											<div class="main-contact-label">
												A
											</div>
											<div class="main-contact-item selected">
												<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/12.jpg'); ?>" class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Arlena Soles</h6><span class="phone">+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/1.jpg'); ?>" class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Athena Manske</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/3.jpg'); ?>" class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Amalia Peng</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/3.jpg'); ?>" class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Anita Garza</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-label">
												B
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/4.jpg'); ?>"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Bret Guadalupe</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Britney Labares</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Basil Ambrose</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-label">
												C
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/6.jpg'); ?>"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Cinda Hope</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/6.jpg'); ?>"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Chassidy Kerr</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Chau Weldy</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-label">
												D
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/8.jpg'); ?>"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Dori Daring</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/8.jpg'); ?>"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Dalton Gracia</h6><span>+1-457-658-856</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-9">
								<div class="">
									<div class="main-content-body main-content-body-contacts">
										<div class="main-contact-info-header">
											<div class="media">
												<div class="main-img-user brround">
													<img alt="" src="<?php echo base_url('public/assets/images/users/12.jpg'); ?>" class="w-100 h-100 brround">
													<a href=""><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 6h-4.05l-1.83-2H9.88L8.05 6H4v12h16V6zm-8 11c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 6h4.05l1.83-2h4.24l1.83 2H20v12H4V6zm8 1c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm0 8c-1.65 0-3-1.35-3-3s1.35-3 3-3 3 1.35 3 3-1.35 3-3 3z"/></svg></a>
												</div>
												<div class="media-body">
													<h4>Arlena Soles</h4>
													<p>Product Designer</p>
													<nav class="nav">
														<a class="nav-link" href=""><svg class="svg-icon mr-1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3"></path><path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z"></path></svg> Call</a>
														<a class="nav-link" href=""><svg class="svg-icon mr-1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"></path><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"></path></svg> Message</a>
														<a class="nav-link" href=""><svg class="svg-icon mr-1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3"></path><circle cx="12" cy="8" opacity=".3" r="2"></circle><path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"></path></svg> Add to Group</a>
														<a class="nav-link" href=""><svg class="svg-icon mr-1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-4.42 3.58-8 8-8 1.85 0 3.55.63 4.9 1.69L5.69 16.9C4.63 15.55 4 13.85 4 12zm8 8c-1.85 0-3.55-.63-4.9-1.69L18.31 7.1C19.37 8.45 20 10.15 20 12c0 4.42-3.58 8-8 8z"/></svg> Block</a>
													</nav>
												</div>
											</div>
											<div class="main-contact-action">
												<a href="" class="btn btn-white btn-svgs"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 18.08V19h.92l9.06-9.06-.92-.92z" opacity=".3"/><path d="M20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83zM3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19z"/></svg> Edit <span> Contact</span></a>
												<a href="" class="btn btn-danger btn-svgs"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg>Delete  <span>Contact</span></a>
											</div>
											<!-- main-contact-action -->
										</div>
										<div class="main-contact-info-body">
											<div class="media-list pt-0">
												<div class="media py-4 mt-0">
													<div class="media-body">
														<div class="d-flex">
															<div class="media-icon bg-light text-primary mr-3 mt-1">
																<i class="fa fa-phone"></i>
															</div>
															<div>
																<label>Work</label> <span class="font-weight-semibold fs-14">+1 (425) 857 5463</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="media-icon bg-light text-primary mr-3 mt-1">
																<i class="fa fa-phone"></i>
															</div>
															<div>
																<label>Personal</label> <span class="font-weight-semibold fs-14">+1 (547) 542 3568</span>
															</div>
														</div>
													</div>
												</div>
												<div class="media py-4 border-top mt-0">
													<div class="media-body">
														<div class="d-flex">
															<div class="media-icon bg-light text-primary mr-3 mt-1">
																<i class="fa fa-envelope"></i>
															</div>
															<div>
																<label>Gmail Account</label> <span class="font-weight-semibold fs-14">arlena.soles@gmail.com</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="media-icon bg-light text-primary mr-3 mt-1">
																<i class="fa fa-envelope"></i>
															</div>
															<div>
																<label>Other Account</label> <span class="font-weight-semibold fs-14">me@spruko.com</span>
															</div>
														</div>
													</div>
												</div>
												<div class="media py-4 border-top mt-0">
													<div class="media-body">
														<div class="d-flex">
															<div class="media-icon bg-light text-primary mr-3 mt-1">
																<i class="fa fa-map-marker"></i>
															</div>
															<div>
																<label>Current Address</label> <span class="font-weight-semibold fs-14">012 Dashboard Apartments, San Francisco, California 13245</span>
															</div>
														</div>
													</div>
												</div>
												<div class="media py-4 border-top mt-0">
													<div class="media-body">
														<div class="d-flex">
															<div class="media-icon bg-light text-primary mr-3 mt-1">
																<i class="fa fa-map-marker"></i>
															</div>
															<div>
																<label>Office Address</label> <span class="font-weight-semibold fs-14"> #302-51/5, Z Apartments, Dacid colony, San Francisco, USA</span>
															</div>
														</div>
													</div>
												</div>
												<div class="media mb-0 py-4 border-top mt-0">
													<div class="media-body">
														<div class="d-flex">
															<div class="media-icon bg-light text-primary mr-3 mt-1">
																<i class="fa fa-clock-o"></i>
															</div>
															<div>
																<label>Call History</label> <a class="font-weight-semibold fs-14" href="#">Duration of last call: 2m 32sec</a>
															</div>
														</div>
													</div>
												</div>
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
		<!-- Contact js -->
		<script src="<?php echo base_url('public/assets/js/contact.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>