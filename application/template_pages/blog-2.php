<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START-->
		<!-- Prism Css -->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Blog</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Blog</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog 02</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
											<div>
												<a href="<?php echo base_url('pages/profile'); ?>" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg><div class="mt-0">Jan-18-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg><div class="mt-0">12 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p class="">Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
											<div>
												<a href="<?php echo base_url('pages/profile'); ?>" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg><div class="mt-0">Jan-22-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg><div class="mt-0">14 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">Lorem ipsum dolor quis</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
											<div>
												<a href="<?php echo base_url('pages/profile'); ?>" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg><div class="mt-0">Apr-16-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg><div class="mt-0">3 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">pleasure and praising pain</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
											<div>
												<a href="<?php echo base_url('pages/profile'); ?>" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg><div class="mt-0">Feb-16-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg><div class="mt-0">4 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">expound the actual teachings</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
											<div>
												<a href="<?php echo base_url('pages/profile'); ?>" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="<?php echo base_url('public/assets/images/photos/5.jpg'); ?>" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg><div class="mt-0">Jan-14-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg><div class="mt-0">8 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">great explorer of the truth</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
											<div>
												<a href="<?php echo base_url('pages/profile'); ?>" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg><div class="mt-0">Jan-14-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg><div class="mt-0">7 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">pursue pleasure rationally</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
											<div>
												<a href="<?php echo base_url('pages/profile'); ?>" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="<?php echo base_url('public/assets/images/photos/7.jpg'); ?>" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg><div class="mt-0">Jan-14-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg><div class="mt-0">8 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">consequences that are extremely</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
											<div>
												<a href="<?php echo base_url('pages/profile'); ?>" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg><div class="mt-0">Feb-14-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg><div class="mt-0">4 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url(<?php echo base_url('public/assets/images/users/16.jpg'); ?>)"></div>
											<div>
												<a href="<?php echo base_url('pages/profile'); ?>" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="<?php echo base_url('public/assets/images/photos/9.jpg'); ?>" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg><div class="mt-0">Mar-21-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg><div class="mt-0">4 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">occasionally circumstances</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/12.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/9.jpg'); ?>)"></span>
													<span class="avatar brround" style="background-image: url(<?php echo base_url('public/assets/images/users/2.jpg'); ?>)"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"/><path d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"/></svg></a>
													<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="18" cy="5" opacity=".3" r="1"/><circle cx="6" cy="12" opacity=".3" r="1"/><circle cx="18" cy="19.02" opacity=".3" r="1"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Clipboard js -->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
