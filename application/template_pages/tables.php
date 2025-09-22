<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Default Tables</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Default Tables</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Table</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap mb-0">
											<thead >
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Striped Rows</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-striped card-table table-vcenter text-nowrap mb-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
										</div><!-- bd -->
									</div><!-- bd -->
								</div><!-- bd -->

								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bordered Table</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-bordered card-table table-vcenter text-nowrap mb-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Hoverable Rows Table</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-hover card-table table-vcenter text-nowrap mb-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>$320,800</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>$170,750</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>$86,000</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>$433,060</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>$162,700</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Full color variations</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-primary mb-0">
											<thead  class="bg-primary text-white">
												<tr >
													<th class="text-white">ID</th>
													<th class="text-white">Name</th>
													<th class="text-white">Position</th>
													<th class="text-white">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Full color variations2</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-warning mb-0">
											<thead  class="bg-warning text-white">
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
						<!-- End Row -->
<?= $this->include('layout/footer'); ?>
	</body>
</html>
