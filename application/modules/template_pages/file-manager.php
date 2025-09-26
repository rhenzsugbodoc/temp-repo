<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">File Manager</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Manager</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body d-flex">
										<div class="chart-circle chart-circle-sm chart-circle-primary ml-0 mr-4" data-value="0.85" data-thickness="5" data-color="#4454c3">
											<div class="mx-auto chart-circle-value text-center fs-14">85%</div>
										</div>
										<div class="mt-3">
											<h5 class="mb-1 font-weight-bold">Storage</h5>
											<p class="mb-0"><span class="text-muted">13.65gb</span> / <span class="text-muted">16gb</span></p>
										</div>
									</div>
									<div class="card-body">
										<div class="list-group list-group-transparent mb-0 file-manger">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 19h14V5H5v14zm4-5.86l2.14 2.58 3-3.87L18 17H6l3-3.86z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm16 14H5V5h14v14zm-4.86-7.14l-3 3.86L9 13.14 6 17h12z"/></svg>Images
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 8h10v8H5z" opacity=".3"/><path d="M17 7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4V7zm-2 9H5V8h10v8z"/></svg>		Videos
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg> Docs
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 19h18V5H3v14zm8-7c.35 0 .69.07 1 .18V6h5v2h-3v7.03c-.02 1.64-1.35 2.97-3 2.97-1.66 0-3-1.34-3-3s1.34-3 3-3z" opacity=".3"/><path d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zm-10-1c1.65 0 2.98-1.33 3-2.97V8h3V6h-5v6.18c-.31-.11-.65-.18-1-.18-1.66 0-3 1.34-3 3s1.34 3 3 3z"/></svg> Music
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 4h10v16H4z" opacity=".3"/><path d="M14 1H4c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 19H4V4h10v16zm6.1-12.3l-1 1c1.8 1.8 1.8 4.6 0 6.5l1 1c2.5-2.3 2.5-6.1 0-8.5zM17 10.8c.5.7.5 1.6 0 2.3l1 1c1.2-1.2 1.2-3 0-4.3l-1 1z"/></svg> APKs
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.17 11H13V5h-2v6H9.83L12 13.17z" opacity=".3"/><path d="M19 9h-4V3H9v6H5l7 7 7-7zm-8 2V5h2v6h1.17L12 13.17 9.83 11H11zm-6 7h14v2H5z"/></svg> Downloads
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v4H5zm10 10h4v4h-4zM5 15h4v4H5zM16.66 4.52l-2.83 2.82 2.83 2.83 2.83-2.83z" opacity=".3"/><path d="M16.66 1.69L11 7.34 16.66 13l5.66-5.66-5.66-5.65zm-2.83 5.65l2.83-2.83 2.83 2.83-2.83 2.83-2.83-2.83zM3 3v8h8V3H3zm6 6H5V5h4v4zM3 21h8v-8H3v8zm2-6h4v4H5v-4zm8-2v8h8v-8h-8zm6 6h-4v-4h4v4z"/></svg> More
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm2-6h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10zm-7-1h2v-3h3v-2h-3v-3h-2v3H8v2h3z"/></svg> Hiddent Files
											</a>
										</div>
									</div>
									<div class="card-body">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary-transparent mr-2"></span>Remote Control
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary-transparent mr-2"></span>Google Drive
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success-transparent mr-2"></span>FTP Files
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info-transparent mr-2"></span>Transfer files
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning-transparent mr-2"></span>Deep Clean
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger-transparent mr-2"></span>Favourities
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary-transparent mr-2"></span>Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-9">
								<div class="row">
									<div class="col mb-4">
										<a href="#" class="btn btn-primary"><i class="fe fe-plus"></i> Upload New Files</a>
										<a href="#" class="btn btn-light"><i class="fe fe-folder"></i> New folder</a>
									</div>
									<div class="col col-auto mb-4">
										<div class="form-group w-100">
											<div class="input-icon">
												<span class="input-icon-addon">
													<i class="fe fe-search"></i>
												</span>
												<input type="text" class="form-control" placeholder="Search Files">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/folder.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Images</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/folder.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Music</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/folder.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/folder.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Vidoes</h6>
												<span class="text-muted">1.5gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/folder.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Documents</h6>
												<span class="text-muted">234mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<i class="fa fa-music text-secondary"></i>
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">topmp4song.mp4</h6>
												<span class="text-muted">4kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">image.jpg</h6>
												<span class="text-muted">65kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/folder.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">File documents</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/folder.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4"> New Folder</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/word.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Word document</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<div class="btn-group ml-3 mb-0">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
															<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
															<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
															<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="<?php echo base_url('public/assets/images/files/file.png'); ?>" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">document.pdf</h6>
												<span class="text-muted">23kb</span>
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

