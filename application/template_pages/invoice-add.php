<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Add Invoice</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Invoice</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Invoice</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Add Invoice</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Invoice Title</label>
														<input class="form-control" placeholder="Invoice title" value="">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Subject</label>
														<textarea class="form-control" rows="4" placeholder="Subject of Invoice"></textarea>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Payment Number</label>
														<input class="form-control" placeholder="Payment Number" value="">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Payment Date</label>
														<input class="form-control" placeholder="Payment Date">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Bill To</label>
														<textarea class="form-control" rows="4" placeholder="Bill To">
														</textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table nowrap text-nowrap border mt-5">
												<thead>
													<tr>
														<th>PRODUCT</th>
														<th class="w-40">DESCRIPTION</th>
														<th>QNTY</th>
														<th>UNIT PRICE</th>
														<th>AMOUNT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
														<td><textarea rows="1" class="form-control"></textarea></td>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td><a class="btn btn-light" href="#"><i class="fe fe-plus"></i> Add Product</a></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tfoot>
											</table>
										</div>
										<div class="form-group row">
											<div class="col-md-12">
												<label class="form-label">Vat Rate</label>
												<input class="form-control" placeholder="Vat Rate" type="text" value="">
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row">
											<div class="col">
												<a class="btn btn-success" href="#"><i class="fe fe-plus"></i> Add New Invoice</a>
												<a class="btn btn-light" href="#">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End row-->
<?= $this->include('layout/footer'); ?>
	</body>
</html>
