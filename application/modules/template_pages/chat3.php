<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Pop up Chat</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
												<path d="M0 0h24v24H0V0z" fill="none" />
												<path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
												<path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item"><a href="#">Chats</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pop up Chat</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="row">

									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/1.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Shamika Griffith</h6>
															<small>shamikagriffith@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Margarette Wycoff</h6>
															<small>margarettewycoff@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/3.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Myrta Powe</h6>
															<small>myrtapower@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/4.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Consuelo Valenzuela</h6>
															<small>consuelovalenzuela@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Carolyne Wirtz</h6>
															<small>carolynewirtz@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/6.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Archie Kesler</h6>
															<small>archiekesler@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Elizabeth Loux</h6>
															<small>elizabethloux@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/10.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Kathaleen Roysden</h6>
															<small>kathaleenroysden@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/11.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Raisa Ladwig</h6>
															<small>raisaladwig@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround mr-2" src="<?php echo base_url('public/assets/images/users/12.jpg'); ?>" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Veronica Kimer</h6>
															<small>veronicakimer@gmail.com</small>
														</div>
													</div>
													<div class="ml-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3" />
																	<path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3" />
																	<path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z" /></svg></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M5 8h10v8H5z" opacity=".3" />
																	<path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z" /></svg></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
																	<path d="M0 0h24v24H0V0z" fill="none" />
																	<path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" /></svg></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
								</div>
							</div>
						</div>

		<!-- Message Modal -->
		<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog modal-dialog-right chatbox" role="document">
				<div class="modal-content chat border-0">
					<div class="card overflow-hidden mb-0 border-0">
						<!-- action-header -->
						<div class="action-header">
							<div class="float-left hidden-xs d-flex ml-2">
								<div class="img_cont mr-3">
									<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="rounded-circle user_img avatar avatar-md" alt="img">
								</div>
								<div class="align-items-center mt-2 text-white">
									<h5 class="mb-0">John Thomson</h5>
									<span class="dot-label bg-success"></span><span class="mr-3 fs-12">online</span>
								</div>
							</div>
							<ul class="ah-actions actions align-items-center">
								<li class="call-icon">
									<a href="" class="d-done d-md-block phone-button">
										<svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3"/><path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z"/></svg>
									</a>
								</li>
								<li class="video-icon">
									<a href="" class="d-done d-md-block phone-button">
										<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 8h10v8H5z" opacity=".3"/><path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z"/></svg>
									</a>
								</li>
								<li class="dropdown">
									<a href="" data-toggle="dropdown" aria-expanded="true">
										<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><i class="fa fa-user-circle"></i> View profile</li>
										<li><i class="fa fa-users"></i> Add to close friends</li>
										<li><i class="fa fa-plus"></i> Add to group</li>
										<li><i class="fa fa-ban"></i> Block</li>
									</ul>
								</li>
								<li>
									<a href=""  class="" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg></span>
									</a>
								</li>
							</ul>
						</div>
						<!-- action-header end -->

						<!-- msg_card_body -->
						<div class="card-body msg_card_body">
							<div class="chat-box-single-line">
								<abbr class="timestamp">February 1st, 2019</abbr>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Hi, how are you Jenna Side?
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									Hi Connor Paige i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									I am good too, thank you for your chat template
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									You welcome Connor Paige
									<span class="msg_time_send">9:05 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Okay Bye, text you later..
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
						</div>
						<!-- msg_card_body end -->
						<!-- card-footer -->
						<div class="card-footer">
							<div class="msb-reply-button d-flex">
								<div class="input-group">
									<input type="text" class="form-control  bg-white" placeholder="Typing....">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary ">
											<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 8.25l7.51 1-7.5-3.22zm.01 9.72l7.5-3.22-7.51 1z" opacity=".3"/><path d="M2.01 3L2 10l15 2-15 2 .01 7L23 12 2.01 3zM4 8.25V6.03l7.51 3.22-7.51-1zm.01 9.72v-2.22l7.51-1-7.51 3.22z"/></svg>
										</button>
									</div>
								</div>
							</div>
						</div><!-- card-footer end -->
					</div>
				</div>
			</div>
		</div>
<?= $this->include('layout/footer'); ?>
	</body>
</html>