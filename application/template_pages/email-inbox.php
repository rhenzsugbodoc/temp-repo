<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Email Inbox</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Email</a></li>
									<li class="breadcrumb-item active" aria-current="page">Email Inbox</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-md-12 col-lg-4 col-xl-3">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="<?php echo base_url('pages/email-compose'); ?>" class="btn btn-primary btn-lg btn-block">Compose</a>
										</div>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
											<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"/></svg> Inbox <span class="ml-auto badge badge-success">14</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 16V6H4v10.01L20 16zm-7-1.53v-2.19c-2.78 0-4.61.85-6 2.72.56-2.67 2.11-5.33 6-5.87V7l4 3.73-4 3.74z" opacity=".3"/><path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.11-.9-2-2-2H4c-1.11 0-2 .89-2 2v10c0 1.1.89 2 2 2H0v2h24v-2h-4zM4 16V6h16v10.01L4 16zm9-6.87c-3.89.54-5.44 3.2-6 5.87 1.39-1.87 3.22-2.72 6-2.72v2.19l4-3.74L13 7v2.13z"/></svg>Sent Mail
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18.49 9.89l.26-2.79-2.74-.62-1.43-2.41L12 5.18 9.42 4.07 7.99 6.48l-2.74.62.26 2.78L3.66 12l1.85 2.11-.26 2.8 2.74.62 1.43 2.41L12 18.82l2.58 1.11 1.43-2.41 2.74-.62-.26-2.79L20.34 12l-1.85-2.11zM13 17h-2v-2h2v2zm0-4h-2V7h2v6z" opacity=".3"/><path d="M20.9 5.54l-3.61-.82-1.89-3.18L12 3 8.6 1.54 6.71 4.72l-3.61.81.34 3.68L1 12l2.44 2.78-.34 3.69 3.61.82 1.89 3.18L12 21l3.4 1.46 1.89-3.18 3.61-.82-.34-3.68L23 12l-2.44-2.78.34-3.68zM18.75 16.9l-2.74.62-1.43 2.41L12 18.82l-2.58 1.11-1.43-2.41-2.74-.62.26-2.8L3.66 12l1.85-2.12-.26-2.78 2.74-.61 1.43-2.41L12 5.18l2.58-1.11 1.43 2.41 2.74.62-.26 2.79L20.34 12l-1.85 2.11.26 2.79zM11 15h2v2h-2zm0-8h2v6h-2z"/></svg> Important <span class="ml-auto badge badge-danger">3</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17.11 10.83l-2.47-.21-1.2-.1-.47-1.11L12 7.13l-.97 2.28-.47 1.11-1.2.1-2.47.21 1.88 1.63.91.79-.27 1.17-.57 2.42 2.13-1.28 1.03-.63 1.03.63 2.13 1.28-.57-2.42-.27-1.17.91-.79z" opacity=".3"/><path d="M22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24zm-7.41 5.18l.56 2.41-2.12-1.28-1.03-.62-1.03.62-2.12 1.28.56-2.41.27-1.18-.91-.79-1.88-1.63 2.47-.21 1.2-.1.47-1.11.97-2.27.97 2.29.47 1.11 1.2.1 2.47.21-1.88 1.63-.91.79.27 1.16z"/></svg> Starred
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 15.36l-8-5.02V18h16l-.01-7.63z" opacity=".3"/><path d="M21.99 8c0-.72-.37-1.35-.94-1.7L12 1 2.95 6.3C2.38 6.65 2 7.28 2 8v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2l-.01-10zM12 3.32L19.99 8v.01L12 13 4 8l8-4.68zM4 18v-7.66l8 5.02 7.99-4.99L20 18H4z"/></svg> Drafts
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 7H5v10h11l3.55-5z" opacity=".3"/><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"/></svg> Tags
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 9h8v10H8z" opacity=".3"/><path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/></svg> Trash
										</a>
									</div>
									<div class="card-body border-top">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary-transparent mr-2"></span> Friends
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary-transparent mr-2"></span> Family
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success-transparent mr-2"></span> Social
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info-transparent mr-2"></span> Office
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning-transparent mr-2"></span> Work
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger-transparent mr-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8 col-xl-9">
								<div class="card">
									<div class="card-body p-6">
										<div class="inbox-body">
											<div class="mail-option">
												<div class="chk-all">
													<div class="btn-group">
														<a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
															All
															<i class="fa fa-angle-down "></i>
														</a>
														<ul class="dropdown-menu">
															<li><a href="#"> None</a></li>
															<li><a href="#"> Read</a></li>
															<li><a href="#"> Unread</a></li>
														</ul>
													</div>
												</div>
												<div class="btn-group">
													<a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
														<i class=" fa fa-refresh"></i>
													</a>
												</div>
												<div class="btn-group hidden-phone">
													<a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
														More
														<i class="fa fa-angle-down "></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
														<li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
													</ul>
												</div>
												<ul class="unstyled inbox-pagination">
													<li><span>1-50 of 234</span></li>

													<li>
														<a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
													</li>
												</ul>
											</div>
											<div class="table-responsive">
												<table class="table table-inbox table-hover text-nowrap mb-0">
													<tbody>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Tim Reid, S P N</td>
															<td class="view-message">Boost Your Website Traffic</td>
															<td class="view-message text-right font-weight-semibold">April 01</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Freelancer.com </td>
															<td class="view-message">Stop wasting your visitors </td>
															<td class="view-message text-right font-weight-semibold">May 23</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message  dont-show">PHPClass</td>
															<td class="view-message ">Added a new class: Login Class Fast Site</td>
															<td class="view-message  text-right">9:27 AM</td>
														</tr>

														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Facebook</td>
															<td class="view-message view-message">Somebody requested a new password </td>
															<td class="view-message text-right font-weight-semibold">June 13</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Skype</td>
															<td class="view-message view-message">Password successfully changed</td>
															<td class="view-message text-right font-weight-semibold">March 24</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Google+</td>
															<td class="view-message">alireza, do you know</td>
															<td class="view-message text-right font-weight-semibold">March 09</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">WOW Slider </td>
															<td class="view-message">New WOW Slider v7.8 - 67% off</td>
															<td class="view-message text-right font-weight-semibold">March 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">LinkedIn Pulse</td>
															<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
															<td class="view-message text-right font-weight-semibold">Feb 19</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Google Webmaster </td>
															<td class="view-message">Improve the search presence of WebSite</td>
															<td class="view-message text-right font-weight-semibold">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">JW Player</td>
															<td class="view-message">Last Chance: Upgrade to Pro for </td>
															<td class="view-message text-right font-weight-semibold">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Drupal Community</td>
															<td class="view-message view-message">Welcome to the Drupal Community</td>
															<td class="view-message text-right font-weight-semibold">March 04</td>
														</tr>

														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="dont-show font-weight-semibold">Zoosk </td>
															<td class="view-message">7 new singles we think you'll like</td>
															<td class="view-message text-right font-weight-semibold">May 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message dont-show font-weight-semibold">LinkedIn </td>
															<td class="view-message">Alireza: Nokia Networks, System Group and </td>
															<td class="view-message text-right font-weight-semibold">February 25</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="dont-show font-weight-semibold">Facebook</td>
															<td class="view-message view-message">Your account was recently logged into</td>
															<td class="view-message text-right font-weight-semibold">March 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Twitter</td>
															<td class="view-message">Your Twitter password has been changed</td>
															<td class="view-message text-right font-weight-semibold">April 07</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">InternetSeer</td>
															<td class="view-message">Performance Report</td>
															<td class="view-message text-right font-weight-semibold">July 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message dont-show font-weight-semibold">Bertina </td>
															<td class="view-message">IMPORTANT: Don't lose your domains!</td>
															<td class="view-message text-right font-weight-semibold">June 16</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message dont-show font-weight-semibold">Laura Gaffin, S P N </td>
															<td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
															<td class="view-message text-right font-weight-semibold">August 10</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Facebook</td>
															<td class="view-message view-message">Alireza Zare Login faild</td>
															<td class="view-message text-right font-weight-semibold">feb 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">AddMe.com</td>
															<td class="view-message">Submit Your Website to the AddMe Business Directory</td>
															<td class="view-message text-right font-weight-semibold">August 10</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Terri Rexer, S P N</td>
															<td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
															<td class="view-message text-right font-weight-semibold">April 14</td>
														</tr>

													</tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
								<ul class="pagination ">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</div>
						</div>
<?= $this->include('layout/footer'); ?>
	</body>
</html>
