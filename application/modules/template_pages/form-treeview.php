<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- treeview -->
		<link href="<?php echo base_url('public/assets/plugins/treeview/treeview.css'); ?>" rel="stylesheet" type="text/css" />

		<!-- Forn-wizard css-->
		<link href="<?php echo base_url('public/assets/plugins/form-wizard/css/form-wizard.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/plugins/formwizard/smart_wizard.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/plugins/formwizard/smart_wizard_theme_dots.css'); ?>" rel="stylesheet">
		<!-- INTERNAL CSS END -->
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Form Treeview</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Treeview</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!--row open-->
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="treeview1">
											<li><a href="#">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="treeview2">
											<li><a href="#">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="treeview3">
											<li><a href="#">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="tree1">
											<li><a href="#">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="tree2">
											<li><a href="#">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="tree3">
											<li><a href="#">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Forn-wizard js-->
		<script src="<?php echo base_url('public/assets/plugins/formwizard/jquery.smartWizard.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/formwizard/fromwizard.js'); ?>"></script>

		<!-- Treeview js -->
		<script src="<?php echo base_url('public/assets/plugins/treeview/treeview.js'); ?>"></script>

		<!--Accordion-Wizard-Form js-->
		<script src="<?php echo base_url('public/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/form-wizard.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>