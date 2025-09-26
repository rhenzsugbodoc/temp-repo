<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Chat</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item"><a href="#">Chat</a></li>
									<li class="breadcrumb-item active" aria-current="page">Chat 01</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="bootstrap snippet card overflow-hidden bg-transparent">
									<div class="tile tile-alt mb-0" id="messages-main">
										<div class="ms-menu">
											<div class="tab-menu-heading border-top-0">
												<div class="tabs-menu1 px-3">
													<ul class="nav">
														<li><a href="#tab-7" class="active" data-toggle="tab">Chat</a></li>
														<li><a href="#tab-8" data-toggle="tab" class="">Contacts</a></li>
													</ul>
												</div>
											</div>
											<div class="tab-content">
												<div class="tab-pane active" id="tab-7">
													<ul class="list-group lg-alt chat-conatct-list" id="ChatList">
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Davil Parnell</div>
																<small class="list-group-item-text text-muted">Fierent fastidii recteque ad pro</small>
															</div>
															<span class="chat-time text-muted">2 mins</span>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Ann Watkinson</div>
																<small class="list-group-item-text text-muted">Cum sociis natoque penatibus </small>
															</div>
															<span class="chat-time text-muted">10 mins</span>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Marse Walter</div>
																<small class="list-group-item-text text-muted">Suspendisse sapien ligula</small>
															</div>
															<span class="chat-time text-muted">15 mins</span>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="lv-avatar float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/3.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Jeremy Robbins</div>
																<small class="list-group-item-text text-muted">Phasellus porttitor tellus nec</small>
															</div>
															<span class="chat-time text-muted">30 mins</span>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="lv-avatar float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Reginald Horace</div>
																<small class="list-group-item-text text-muted">Quisque consequat arcu eget</small>
															</div>
															<span class="chat-time text-muted">50 min</span>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/6.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Shark Henry</div>
																<small class="list-group-item-text text-muted">Nam lobortis odio et leo maximu</small>
															</div>
															<span class="chat-time text-muted">1 day</span>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Paul Van Dack</div>
																<small class="list-group-item-text text-muted">Nam posuere purus sed velit auctor sodales</small>
															</div>
															<span class="chat-time text-muted">2 days</span>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="lv-avatar float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">James Anderson</div>
																<small class="list-group-item-text text-muted">Vivamus imperdietsag</small>
															</div>
															<span class="chat-time text-muted">2 days</span>
														</li>
													</ul>
												</div>
												<div class="tab-pane" id="tab-8">
													<ul class="list-group lg-alt chat-conatct-list" id="ChatList2">
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Davil Parnell</div>
																<small class="list-group-item-text text-muted">davilparnell@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="">Call</a>
																	</li>
																	<li>
																		<a href="">Videocall</a>
																	</li>
																	<li>
																		<a href="">New Message</a>
																	</li>
																	<li>
																		<a href="">Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Ann Watkinson</div>
																<small class="list-group-item-text text-muted">annwatkinso@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="">Call</a>
																	</li>
																	<li>
																		<a href="">Videocall</a>
																	</li>
																	<li>
																		<a href="">New Message</a>
																	</li>
																	<li>
																		<a href="">Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Marse Walter</div>
																<small class="list-group-item-text text-muted">marsewalter@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="">Call</a>
																	</li>
																	<li>
																		<a href="">Videocall</a>
																	</li>
																	<li>
																		<a href="">New Message</a>
																	</li>
																	<li>
																		<a href="">Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="lv-avatar float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/3.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Jeremy Robbins</div>
																<small class="list-group-item-text text-muted">jeremyrobbins@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="">Call</a>
																	</li>
																	<li>
																		<a href="">Videocall</a>
																	</li>
																	<li>
																		<a href="">New Message</a>
																	</li>
																	<li>
																		<a href="">Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="lv-avatar float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/9.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Reginald Horace</div>
																<small class="list-group-item-text text-muted">reginaldhorace@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="">Call</a>
																	</li>
																	<li>
																		<a href="">Videocall</a>
																	</li>
																	<li>
																		<a href="">New Message</a>
																	</li>
																	<li>
																		<a href="">Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/6.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Shark Henry</div>
																<small class="list-group-item-text text-muted">sharkhenry@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="">Call</a>
																	</li>
																	<li>
																		<a href="">Videocall</a>
																	</li>
																	<li>
																		<a href="">New Message</a>
																	</li>
																	<li>
																		<a href="">Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Paul Van Dack</div>
																<small class="list-group-item-text text-muted">paulvandack@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="">Call</a>
																	</li>
																	<li>
																		<a href="">Videocall</a>
																	</li>
																	<li>
																		<a href="">New Message</a>
																	</li>
																	<li>
																		<a href="">Settings</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="lv-avatar float-left pr-2">
																<img src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">James Anderson</div>
																<small class="list-group-item-text text-muted">jamesanderson@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="">Call</a>
																	</li>
																	<li>
																		<a href="">Videocall</a>
																	</li>
																	<li>
																		<a href="">New Message</a>
																	</li>
																	<li>
																		<a href="">Settings</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="ms-body">
											<div class="action-header clearfix">
												<div class="" id="ms-menu-trigger">
													<i class="fa fa-bars"></i>
												</div>
												<div class="float-left hidden-xs d-flex ml-6 chat-user">
													<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" alt="" class="avatar avatar-md brround mr-2">
													<div class="align-items-center mt-2">
														<span class="font-weight-bold">Jhon Thomson</span>
													</div>
												</div>
												<ul class="ah-actions actions align-items-center">
													<li>
														<a href="">
															<svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3"/><path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z"/></svg>
														</a>
													</li>
													<li>
														<a data-toggle="tooltip" href="" title="Archive"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 19h14V8H5v11zm5.55-6v-3h2.91v3H16l-4 4-4-4h2.55z" opacity=".3"/><path d="M16 13h-2.55v-3h-2.9v3H8l4 4zm4.54-7.77l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM19 19H5V8h14v11z"/></svg></a>
													</li>
													<li>
														<a data-toggle="tooltip" href="" title="Trash"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></a>
													</li>
													<li>
														<a data-toggle="tooltip" href="" title="View Info"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 13h-2v-6h2v6zm0-8h-2V7h2v2z" opacity=".3"/><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg></a>
													</li>
													<li class="dropdown">
														<a data-toggle="dropdown" class="option-dots" href="#">
															<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li>
																<a href="">Refresh</a>
															</li>
															<li>
																<a href="">Message Settings</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<div class="chat-body-style" id="ChatBody">
												<div class="message-feed media mt-0">
													<div class="float-left pr-2">
														<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat, eget condimentum sapien viverra et.
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 09:00</small>
													</div>
												</div>
												<div class="message-feed right">
													<div class="float-right pl-2">
														<img src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 09:30</small>
													</div>
												</div>
												<div class="message-feed media">
													<div class="float-left pr-2">
														<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Etiam ex arcumentum
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 09:33</small>
													</div>
												</div>
												<div class="message-feed right">
													<div class="float-right pl-2">
														<img src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes,
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 10:10</small>
													</div>
												</div>
												<div class="message-feed media">
													<div class="float-left pr-2">
														<img src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed, luctus vestibulum eros.
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 10:24</small>
													</div>
												</div>
											</div>
											<div class="msb-reply">
												<textarea placeholder="What's on your mind..."></textarea>
												<button><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 8.25l7.51 1-7.5-3.22zm.01 9.72l7.5-3.22-7.51 1z" opacity=".3"/><path d="M2.01 3L2 10l15 2-15 2 .01 7L23 12 2.01 3zM4 8.25V6.03l7.51 3.22-7.51-1zm.01 9.72v-2.22l7.51-1-7.51 3.22z"/></svg></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Chat js-->
		<script src="<?php echo base_url('public/assets/js/chat.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
