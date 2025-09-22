<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- lightslider css -->
		<link href="<?php echo base_url('public/assets/plugins/lightslider/css/lightslider.min.css'); ?>" rel="stylesheet">
		<!-- INTERNAL CSS END -->
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
									<li class="breadcrumb-item active" aria-current="page">Chat 02</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="card">
							<div class="row no-gutters">
								<div class="col-lg-5 col-xl-4">
									<div class="overflow-hidden mb-5 mb-lg-0">
										<div class="card-body p-0">
											<div class="main-content-left main-content-left-chat">
												<div class="p-3 pb-0 border-bottom">
													<div class="input-group">
														<input class="form-control" placeholder="Search friends..." type="text">
														<span class="input-group-btn">
															<button class="btn btn-primary br-tl-0 br-bl-0" type="button">
																<span class="input-group-btn"><i class="fa fa-search"></i></span>
															</button>
														</span>
													</div>
												</div>
												<div class="main-chat-contacts-wrapper">
													<label class="form-label mb-2 fs-13">Active Contacts (28)</label>
													<div class="main-chat-contacts" id="chatActiveContacts">
														<div>
															<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/12.jpg'); ?>" class="avatar avatar-md brround"></div><small>Kecia</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"></div><small>Copp</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/14.jpg'); ?>" class="avatar avatar-md brround"></div><small>Edwina</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"></div><small>Uriarte</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/8.jpg'); ?>" class="avatar avatar-md brround"></div><small>Ambrose Cawthon</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/3.jpg'); ?>" class="avatar avatar-md brround"></div><small>Cawthon</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/11.jpg'); ?>" class="avatar avatar-md brround"></div><small>Celesta</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/1.jpg'); ?>" class="avatar avatar-md brround"></div><small>Briones</small>
														</div>
														<div>
															<div class="main-chat-contacts-more">
																20+
															</div><small>More</small>
														</div>
													</div><!-- main-active-contacts -->
												</div><!-- main-chat-active-contacts -->
												<div class="main-chat-list" id="ChatList">
													<div class="media new">
														<div class="main-img-user online">
															<img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"><span>2</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Melodi Maul</span> <span>2 hours</span>
															</div>
															<p>culpa qui officia deserunt...</p>
														</div>
													</div>
													<div class="media new">
														<div class="main-img-user">
															<img alt="" src="<?php echo base_url('public/assets/images/users/8.jpg'); ?>" class="avatar avatar-md brround"><span>1</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Lourdes Eiland</span> <span>3 hours</span>
															</div>
															<p>Et harum quidem rerum facilis est</p>
														</div>
													</div>
													<div class="media selected">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/3.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Zofia Mccutcheon</span> <span>10 hours</span>
															</div>
															<p>Nam libero tempore, cum soluta nobis </p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/13.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Erlinda Leeder</span> <span>2 days</span>
															</div>
															<p>omnis voluptas assumenda est</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/14.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Randy Booze</span> <span>2 days</span>
															</div>
															<p>Temporibus autem quibusdam et </p>
														</div>
													</div>
													<div class="media new">
														<div class="main-img-user">
															<img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"> <span>1</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Camelia Kimber</span> <span>3 days</span>
															</div>
															<p>saepe eveniet ut et voluptates </p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Jerome Vowell</span> <span>4 days</span>
															</div>
															<p>reiciendis voluptatibus maiores </p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/5.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Regine Mccrystal</span> <span>5 days</span>
															</div>
															<p>we denounce with righteous indignation</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/6.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Nigel Knarr</span> <span>5 days</span>
															</div>
															<p>certain circumstances and owing to the claims</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/12.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Marva Constante</span> <span>5 days</span>
															</div>
															<p>Mae cenas tempus, tellus eget co ndimen</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/6.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Twila Hammers</span> <span>6 days</span>
															</div>
															<p>certain circumstances and owing to the claims</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/7.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Vertie Raap</span> <span>6 days</span>
															</div>
															<p>certain circumstances and owing to the claims </p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/8.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Cory Gardenhire</span> <span>7 days</span>
															</div>
															<p>certain circumstances and owing to the claims...</p>
														</div>
													</div>
												</div><!-- main-chat-list -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7">
									<div class="border-left">
										<div class="main-content-body main-content-body-chat">
											<div class="main-chat-header p-3">
												<div class="main-img-user"><img alt="" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="avatar avatar-md brround"></div>
												<div class="main-chat-msg-name">
													<h6>Peter Hill</h6><small>Last seen: 1 minute ago</small>
												</div>
												<nav class="nav">
													<a class="nav-link" href=""><i class="icon ion-md-more"></i></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Call"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 17.47c-.88-.07-1.75-.22-2.6-.45l-1.19 1.19c1.2.41 2.48.67 3.8.75v-1.49zM5.03 5c.09 1.32.35 2.59.75 3.8l1.2-1.2c-.23-.84-.38-1.71-.44-2.6H5.03z" opacity=".3"/><path d="M9.07 7.57C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02zm7.33 9.45c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19zM5.79 8.8c-.41-1.21-.67-2.48-.76-3.8h1.5c.07.89.22 1.76.46 2.59L5.79 8.8z"/></svg></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Archive"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 19h14V8H5v11zm5.55-6v-3h2.91v3H16l-4 4-4-4h2.55z" opacity=".3"/><path d="M16 13h-2.55v-3h-2.9v3H8l4 4zm4.54-7.77l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM19 19H5V8h14v11z"/></svg></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Trash"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="View Info"><svg  class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 13h-2v-6h2v6zm0-8h-2V7h2v2z" opacity=".3"/><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg></a>
												</nav>
											</div><!-- main-chat-header -->
											<div class="main-chat-body" id="ChatBody">
												<div class="content-inner">
													<label class="main-chat-time"><span>3 days ago</span></label>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																 Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse mt-1">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																 sed quia non numquam eius modi tempora incidunt ut labore
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse mt-1">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																 sed quia non numquam eius modi tempora incidunt ut labore
															</div>
															<div>
																<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Nor again is there anyone who loves or pursues or desires to obtain pain of itself
															</div>
														</div>
													</div>
													<div class="media mt-1">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																pursues or desires to obtain pain of itself
															</div>
														</div>
													</div>
													<div class="media mt-1">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																who loves or pursues or Nor again is there anyone
															</div>
															<div>
																<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Nullam dictum felis eu pede mollis pretium
															</div>
															<div>
																<span>11:22 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div><label class="main-chat-time"><span>Yesterday</span></label>
													<div class="media">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
															</div>
															<div>
																<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/15.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse mt-1">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/15.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Et harum quidem rerum facilis est et expedita distinctio
															</div>
															<div>
																<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<label class="main-chat-time"><span>Today</span></label>
													<div class="media">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Et harum quidem rerum facilis est et expedita distinctio
															</div>
														</div>
													</div>
													<div class="media mt-1">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/2.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
															</div>
															<div>
																<span>10:12 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Et harum quidem rerum facilis est et expedita distinctio
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="<?php echo base_url('public/assets/images/users/16.jpg'); ?>" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
															</div>
															<div>
																<span>09:40 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="main-chat-footer">
												<nav class="nav">
													<a href="javascript:void(0)" class="nav-link" data-toggle="tooltip" title="" data-original-title="Camera"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.12 4H9.88L8.05 6H4v12h16V6h-4.05l-1.83-2zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" opacity=".3"/><path d="M20 4h-3.17L15 2H9L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V6h4.05l1.83-2h4.24l1.83 2H20v12zM12 7c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm0 8c-1.65 0-3-1.35-3-3s1.35-3 3-3 3 1.35 3 3-1.35 3-3 3z"/></svg></a>
													<a href="javascript:void(0)" class="nav-link" data-toggle="tooltip" title="" data-original-title="Emojia"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg></a>
													<a href="javascript:void(0)" class="nav-link" data-toggle="tooltip" title="" data-original-title="Attach"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12.5 23c3.04 0 5.5-2.46 5.5-5.5V6h-1.5v11.5c0 2.21-1.79 4-4 4s-4-1.79-4-4V5c0-1.38 1.12-2.5 2.5-2.5s2.5 1.12 2.5 2.5v10.5c0 .55-.45 1-1 1s-1-.45-1-1V6H10v9.5c0 1.38 1.12 2.5 2.5 2.5s2.5-1.12 2.5-2.5V5c0-2.21-1.79-4-4-4S7 2.79 7 5v12.5c0 3.04 2.46 5.5 5.5 5.5z"/></svg></a>
												</nav>
												<input class="form-control" placeholder="Type your message here..." type="text"> <a class="main-msg-send" href=""><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 8.25l7.51 1-7.5-3.22zm.01 9.72l7.5-3.22-7.51 1z" opacity=".3"/><path d="M2.01 3L2 10l15 2-15 2 .01 7L23 12 2.01 3zM4 8.25V6.03l7.51 3.22-7.51-1zm.01 9.72v-2.22l7.51-1-7.51 3.22z"/></svg></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- lightslider js -->
		<script src="<?php echo base_url('public/assets/plugins/lightslider/js/lightslider.min.js'); ?>"></script>
		<!-- Chat js-->
		<script src="<?php echo base_url('public/assets/js/chat2.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>