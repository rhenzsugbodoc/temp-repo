<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Select2 css -->
		<link href="<?php echo base_url('public/assets/plugins/select2/select2.min.css') ?>" rel="stylesheet" />

		<!-- News-Ticker css-->
		<link href="<?php echo base_url('public/assets/plugins/newsticker/newsticker.css') ?>" rel="stylesheet" />

		<!--Daterangepicker css-->
		<link href="<?php echo base_url('public/assets/plugins/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet" />
		<!-- INTERNAL CSS START END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Crypto Dashboard</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<div class="ml-5 mb-0">
									<a class="btn btn-white date-range-btn" href="#" id="daterange-btn">
										<svg class="header-icon2 mr-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
											<path d="M5 8h14V6H5z" opacity=".3"/><path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z"/>
										</svg> <span>Select Date
										<i class="fa fa-caret-down"></i></span>
									</a>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="">
									<div class="js-conveyor-example">
										<ul class="news-crypto">
											<li>
											  <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/AquariusCoin.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$0.0215</span> <span class="text-muted fs-10">USD</span><span class="text-danger ml-4"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Augur.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$425.25 </span> <span class="text-muted fs-10">USD</span><span class="text-success ml-4"><i class="ion-arrow-up-c mr-1"></i>+12.85% </span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Bitcoin.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$2.786</span>  <span class="text-muted fs-10">USD</span><span class="text-success ml-4"><i class="ion-arrow-up-c mr-1"></i>-02.25%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/BitConnect.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$15.425 </span> <span class="text-muted fs-10">USD</span><span class="text-danger ml-4"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/BitShares.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$5.125 </span> <span class="text-muted fs-10">USD</span><span class="text-success ml-4"><i class="ion-arrow-up-c mr-1"></i>-11.85% </span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Bytecoin.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$135.425 </span> <span class="text-muted fs-10">USD</span><span class="text-danger ml-4"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Dash.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$34.625 </span> <span class="text-muted fs-10">USD</span><span class="text-success ml-4"><i class="ion-arrow-up-c mr-1"></i>-0.32%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Decred.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$67.325 </span> <span class="text-muted fs-10">USD</span><span class="text-danger ml-4"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/EOS.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$7.525 </span> <span class="text-muted fs-10">USD</span><span class="text-success ml-4"><i class="ion-arrow-up-c mr-1"></i>-1.42%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Ethereum.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$4.325 </span> <span class="text-muted fs-10">USD</span><span class="text-danger ml-4"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Golem.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$5.525 </span> <span class="text-muted fs-10">USD</span><span class="text-success ml-4"><i class="ion-arrow-up-c mr-1"></i>-1.32%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Iconomi.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$6.025 </span> <span class="text-muted fs-10">USD</span><span class="text-danger ml-4"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/IOTA.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">0.0215 </span> <span class="text-muted fs-10">USD</span><span class="text-success ml-4"><i class="ion-arrow-up-c mr-1"></i>-0.45%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/LanaCoin.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$0.125 </span> <span class="text-muted fs-10">USD</span><span class="text-danger ml-4"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Litecoin.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$1.125 </span> <span class="text-muted fs-10">USD</span><span class="text-success ml-4"><i class="ion-arrow-up-c mr-1"></i>-0.65%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Monero.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">$0.725 </span> <span class="text-muted fs-10">USD</span><span class="text-danger ml-4"><i class="ion-arrow-down-c mr-1"></i>-0.36%</span></span>
											</li>
											<li>
											   <span><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/NEM.svg'); ?>" class="w-5 h-5 mr-2" alt=""><span class="font-weight-bold">0.0215 </span> <span class="text-muted fs-10">USD</span><span class="text-success ml-4"><i class="ion-arrow-up-c mr-1"></i>-0.78%</span></span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<div class="card crypto-header-section">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col-xl-2 col-lg-4 mt-3">
										<div class="border-right">
											<p class="text-muted">Balance</p>
											<h3 class="mb-0 font-weight-bold">$23,768</h3>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 mt-3">
										<div class="border-right">
											<p class="text-muted">Coins</p>
											<div class="d-flex">
												<img src="<?php echo base_url('public/assets/images/crypto-currencies/bitcoin.svg'); ?>" class="w-5 h-5 mr-2" alt="">
												<img src="<?php echo base_url('public/assets/images/crypto-currencies/qtum.svg'); ?>" class="w-5 h-5 mr-2" alt="">
												<img src="<?php echo base_url('public/assets/images/crypto-currencies/neo.svg'); ?>" class="w-5 h-5 mr-2" alt="">
												<img src="<?php echo base_url('public/assets/images/crypto-currencies/dash.svg'); ?>" class="w-5 h-5 mr-2" alt="">
												<img src="<?php echo base_url('public/assets/images/crypto-currencies/tron.svg'); ?>" class="w-5 h-5 mr-2" alt="">
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-lg-4 mt-3">
										<div>
											<p class="text-muted">Today Profit</p>
											<h3 class="mb-0 font-weight-bold">$23,768 <span class="fs-12 text-muted"><i class="fa fa-caret-up text-success"></i> 4.7%</span></h3>
										</div>
									</div>
									<div class="col-xl-5 col-lg-12 mt-4 pt-2 text-xl-right">
										<a class="btn btn-white mr-3" href="#"><i class="fe fe-repeat"></i> Send Money</a>
										<a class="btn btn-primary" href="#"><i class="fe fe-plus"></i> Buy Currency</a>
									</div>
								</div>
							</div>
						</div>

						<!--Row-->
						<div class="row">
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Bitcoin.svg'); ?> " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-1 text-muted fs-12">BTC / USDT</p>
												<h3 class="mb-0 font-weight-bold">$513</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-1">$0.04</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span>(+2.33%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Ethereum.svg'); ?>" class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-1 text-muted fs-12">XEM / USDT</p>
												<h3 class="mb-0 font-weight-bold">$966</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-1">$0.12</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span>(-1.33%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart1" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Ripple.svg'); ?> " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-1 text-muted fs-12">XRP / USDT</p>
												<h3 class="mb-0 font-weight-bold">$7,349</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-1">$0.14</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span> (+2.39%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart2" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Litecoin.svg'); ?> " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-1 text-muted fs-12">Litecoin / USDT</p>
												<h3 class="mb-0 font-weight-bold">$5,563</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-0">$0.06</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span> (-1.25%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart3" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Trade History</h3>
									</div>
									<div class="px-3 py-4">
										<div class="table-responsive scrollbar h-420" id="scrollbar">
											<table class="table card-table text-nowrap mb-0">
												<thead>
													<tr>
														<th class="border-bottom-0">Coin</th>
														<th class="border-bottom-0">Price</th>
														<th class="border-bottom-0">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Bitcoin.svg'); ?>" class="w-6 h-6 mr-2" alt="">Bitcoin</td>
														<td>$0.11923<i class="fa fa-arrow-up text-green ml-1"></i></td>
														<td>0.0215</td>
													</tr>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Dash.svg'); ?>" class="w-6 h-6 mr-2" alt="">Dash</td>
														<td>$0.07324<i class="fa fa-arrow-down text-danger ml-1"></i></td>
														<td>0.0112</td>
													</tr>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/EOS.svg'); ?>" class="w-6 h-6 mr-2" alt="">EOS</td>
														<td>$0.12645<i class="fa fa-arrow-up text-green ml-1"></i></td>
														<td>0.0214</td>
													</tr>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Ethereum.svg'); ?>" class="w-6 h-6 mr-2" alt="">Ethereum</td>
														<td>$0.01153<i class="fa fa-arrow-down text-danger ml-1"></i></td>
														<td>0.0012</td>
													</tr>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Ripple.svg'); ?>" class="w-6 h-6 mr-2" alt="">Ripple</td>
														<td>$0.08923<i class="fa fa-arrow-down text-danger ml-1"></i></td>
														<td>0.0015</td>
													</tr>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Litecoin.svg'); ?>" class="w-6 h-6 mr-2" alt="">Litecoin</td>
														<td>$0.14915<i class="fa fa-arrow-up text-green ml-1"></i></td>
														<td>0.0312</td>
													</tr>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/IOTA.svg'); ?>" class="w-6 h-6 mr-2" alt="">IOTA</td>
														<td>$0.08923<i class="fa fa-arrow-down text-danger ml-1"></i></td>
														<td>0.0015</td>
													</tr>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Bitcoin.svg'); ?>" class="w-6 h-6 mr-2" alt="">Bitcoin</td>
														<td>$0.11923<i class="fa fa-arrow-up text-green ml-1"></i></td>
														<td>0.0215</td>
													</tr>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Dash.svg'); ?>" class="w-6 h-6 mr-2" alt="">Dash</td>
														<td>$0.07324<i class="fa fa-arrow-down text-danger ml-1"></i></td>
														<td>0.0112</td>
													</tr>
													<tr>
														<td><img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/EOS.svg'); ?>" class="w-6 h-6 mr-2" alt="">EOS</td>
														<td>$0.12645<i class="fa fa-arrow-up text-green ml-1"></i></td>
														<td>0.0214</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Crypto Trading</h3>
									</div>
									<div class="card-body">
										<div class="row mb-2">
											<div class="col-xl-3 col-lg-6 col-md-12 mb-5 text-center">
												<p class="mb-1"> Last price</p>
												<h3 class="mb-0 font-weight-bold">$54875</h3>
												<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.9%</span>last year</span>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12 mb-5 text-center">
												<p class="mb-1"> Daily change</p>
												<h3 class="mb-0 font-weight-bold">$136.5</h3>
												<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>0.15%</span>last year</span>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12 mb-5 text-center">
												<p class="mb-1"> Market cap</p>
												<h3 class="mb-0 font-weight-bold">$14,42,785</h3>
												<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>1.04%</span>last year</span>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12 mb-5 text-center">
												<p class="mb-1">24th volume</p>
												<h3 class="mb-0 font-weight-bold">65874.25</h3>
												<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>2.08%</span>last year</span>
											</div>
										</div>
										<div id="echart1" class="h-300"></div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<div class="row row-deck">
							<div class="col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Transactions</div>
									</div>
									<div class="scrollbar2 h-370" id="scrollbar2">
										<div class="card-body py-3">
											<div class="row">
												<div class="col">
													<div class="d-flex">
														<div class="crypto-icon bg-primary-transparent text-primary icon-dropshadow-primary"><i class="fe fe-repeat"></i></div>
														<div class="mt-2">
															<h5 class="mb-1 text-dark font-weight-semibold">Exchange USD to BTC</h5>
															<p class="mb-0 fs-12 text-muted">ID : 4567893</p>
														</div>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-2 text-right">
														<h5 class="mb-1 text-dark font-weight-semibold">0.546854 BTC</h5>
														<p class="mb-0 fs-12 text-muted">23<sup>rd</sup>Jan 2020</p>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body py-3">
											<div class="row">
												<div class="col">
													<div class="d-flex">
														<div class="crypto-icon bg-primary-transparent text-primary icon-dropshadow-primary"><i class="fe fe-repeat"></i></div>
														<div class="mt-2">
															<h5 class="mb-1 text-dark font-weight-semibold">Exchange USD to Ripple</h5>
															<p class="mb-0 fs-12 text-muted">ID : 6547345</p>
														</div>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-2 text-right">
														<h5 class="mb-1 text-dark font-weight-semibold">0.76543 Ri</h5>
														<p class="mb-0 fs-12 text-muted">12<sup>th</sup>Jan 2020</p>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body py-3">
											<div class="row">
												<div class="col">
													<div class="d-flex">
														<div class="crypto-icon bg-success-transparent text-success icon-dropshadow-success"><i class="fe fe-corner-right-up"></i></div>
														<div class="mt-2">
															<h5 class="mb-1 text-dark font-weight-semibold">Buy Crypto</h5>
															<p class="mb-0 fs-12 text-muted">ID : 8765478</p>
														</div>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-2 text-right">
														<h5 class="mb-1 text-dark font-weight-semibold">0.546854 BTC</h5>
														<p class="mb-0 fs-12 text-muted">13<sup>th</sup>Feb 2020</p>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body py-3">
											<div class="row">
												<div class="col">
													<div class="d-flex">
														<div class="crypto-icon bg-secondary-transparent text-secondary icon-dropshadow-secondary"><i class="fe fe-share"></i></div>
														<div class="mt-2">
															<h5 class="mb-1 text-dark font-weight-semibold">Exchange BTC to USD</h5>
															<p class="mb-0 fs-12 text-muted">ID : 8765434</p>
														</div>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-2 text-right">
														<h5 class="mb-1 text-dark font-weight-semibold">0.564567 USD</h5>
														<p class="mb-0 fs-12 text-muted">15<sup>th</sup>Jan 2020</p>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body py-3">
											<div class="row">
												<div class="col">
													<div class="d-flex">
														<div class="crypto-icon bg-success-transparent text-success icon-dropshadow-success"><i class="fe fe-corner-right-up"></i></div>
														<div class="mt-2">
															<h5 class="mb-1 text-dark font-weight-semibold">Buy Ripple</h5>
															<p class="mb-0 fs-12 text-muted">ID : 2346784</p>
														</div>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-2 text-right">
														<h5 class="mb-1 text-dark font-weight-semibold">0.76543 Ri</h5>
														<p class="mb-0 fs-12 text-muted">23<sup>rd</sup>Feb 2020</p>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body py-3">
											<div class="row">
												<div class="col">
													<div class="d-flex">
														<div class="crypto-icon bg-primary-transparent text-primary icon-dropshadow-primary"><i class="fe fe-repeat"></i></div>
														<div class="mt-2">
															<h5 class="mb-1 text-dark font-weight-semibold">Exchange USD to BTC</h5>
															<p class="mb-0 fs-12 text-muted">ID : 4567893</p>
														</div>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-2 text-right">
														<h5 class="mb-1 text-dark font-weight-semibold">0.546854 BTC</h5>
														<p class="mb-0 fs-12 text-muted">23<sup>rd</sup>Jan 2020</p>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body py-3">
											<div class="row">
												<div class="col">
													<div class="d-flex">
														<div class="crypto-icon bg-primary-transparent text-primary icon-dropshadow-primary"><i class="fe fe-repeat"></i></div>
														<div class="mt-2">
															<h5 class="mb-1 text-dark font-weight-semibold">Exchange USD to Ripple</h5>
															<p class="mb-0 fs-12 text-muted">ID : 6547345</p>
														</div>
													</div>
												</div>
												<div class="col col-auto">
													<div class="mt-2 text-right">
														<h5 class="mb-1 text-dark font-weight-semibold">0.76543 Ri</h5>
														<p class="mb-0 fs-12 text-muted">12<sup>th</sup>Jan 2020</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6">
								<div class="panel panel-primary w-100">
									<div class="tab-menu-heading crypto-tabs">
										<div class="tabs-menu1">
											<!-- Tabs -->
											<ul class="nav panel-tabs">
												<li class=""><a href="#tab5" class="active" data-toggle="tab">Buy BTC</a></li>
												<li><a href="#tab6" data-toggle="tab" class="">Sell BTC</a></li>
											</ul>
										</div>
									</div>
									<div class="card panel-body tabs-menu-body br-tl-0 border-top-0 p-6 w-100 shadow2 crypto-content">
										<div class="tab-content">
											<div class="tab-pane active" id="tab5">
												<div class="mb-0 border">
													<div class="card-body text-center">
														<div class="card-title text-left text-dark">Buy Crypto Coins</div>
														<div class="form-group">
															<label class="form-label float-left">Enter Your Money</label>
															<div class="input-group">
																<input type="text" class="form-control" Value="10,000">
																<div class="input-group-append br-tl-0 br-bl-0">
																	<select class="form-control select2 br-0 nice-select br-tl-0 br-bl-0" data-placeholder="Choose one (with optgroup)">
																		<optgroup label="Currecy">
																			<option value="USD">USD</option>
																			<option value="EUR">EUR</option>
																			<option value="INR">INR</option>
																			<option value="GBP">GBP</option>
																			<option value="JPY">JPY</option>
																			<option value="RUB">RUB</option>
																		</optgroup>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="form-label float-left">Your Crypto Coins Converted to</label>
															<div class="input-group">
																<input type="text" class="form-control" Value="0.254">
																<div class="input-group-append br-tl-0 br-bl-0">
																	<select class="form-control select2 br-0 nice-select br-tl-0 br-bl-0" data-placeholder="Choose one (with optgroup)">
																		<optgroup label="Coins">
																			<option value="BTC">BTC</option>
																			<option value="ETH">ETH</option>
																			<option value="DAH">DAH</option>
																			<option value="RIP">RIP</option>
																			<option value="ITA">ITA</option>
																			<option value="EOS">EOS</option>
																		</optgroup>
																	</select>
																</div>
															</div>
														</div>
														<a class="btn btn-block btn-secondary" href="#">Buy Coins</a>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab6">
												<div class="mb-0 border">
													<div class="card-body text-center">
														<div class="card-title text-left text-dark">Sell Crypto Coins</div>
														<div class="form-group">
															<label class="form-label float-left">Enter Crypto Coin</label>
															<div class="input-group">
																<input type="text" class="form-control" Value="0.254">
																<div class="input-group-append br-tl-0 br-bl-0">
																	<select class="form-control select2 br-0 nice-select br-tl-0 br-bl-0" data-placeholder="Choose one (with optgroup)">
																		<optgroup label="Coins">
																			<option value="BTC">BTC</option>
																			<option value="ETH">ETH</option>
																			<option value="DAH">DAH</option>
																			<option value="RIP">RIP</option>
																			<option value="ITA">ITA</option>
																			<option value="EOS">EOS</option>
																		</optgroup>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="form-label float-left">Your Money Converted to</label>
															<div class="input-group">
																<input type="text" class="form-control" Value="10,000">
																<div class="input-group-append br-tl-0 br-bl-0">
																	<select class="form-control select2 br-0 br-tl-0 br-bl-0 nice-select" data-placeholder="Choose one (with optgroup)">
																		<optgroup label="Currecy">
																			<option value="USD">USD</option>
																			<option value="EUR">EUR</option>
																			<option value="INR">INR</option>
																			<option value="GBP">GBP</option>
																			<option value="JPY">JPY</option>
																			<option value="RUB">RUB</option>
																		</optgroup>
																	</select>
																</div>
															</div>
														</div>
														<a class="btn btn-block btn-primary" href="#">Sell Coins</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--Row-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Crypt Marketing Values</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table mb-0 table-vcenter table-hover text-nowrap border">
												<thead>
													<tr>
														<th class="border-bottom-0">Currency</th>
														<th>Price</th>
														<th>Market Cap</th>
														<th>Volume 1D</th>
														<th>Change % (1D)</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Bitcoin.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">Bitcoin</h5>
																<p class="mb-0">BTC</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 10513.00</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 51,191,183,730</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 10,133,400,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-primary-transparent">
																<div class="progress-bar bg-primary" style="width: 90%"></div>
															</div>
															<span>66%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Ethereum.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">Ethereum</h5>
																<p class="mb-0">ETC</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 425.25</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 4,48,308,110</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 193,430,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-success-transparent">
																<div class="progress-bar bg-success" style="width: 64%"></div>
															</div>
															<span>64%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Ripple.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">Ripple</h5>
																<p class="mb-0">Ri</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 1.2029</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 7,63,80,043</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 42,677,430,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-warning-transparent">
																<div class="progress-bar bg-warning" style="width: 79%"></div>
															</div>
															<span>79%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/BitShares.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">BitShares</h5>
																<p class="mb-0">Bsc</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 1547.67</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 6,14,18,730</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 40,13,40,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-secondary-transparent">
																<div class="progress-bar bg-secondary" style="width: 32%"></div>
															</div>
															<span>32%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/NEM.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">Nem</h5>
																<p class="mb-0">Nem</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 723.48</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 19,07,67,295</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 17,99,90,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-success-transparent">
																<div class="progress-bar bg-success" style="width: 26%"></div>
															</div>
															<span>26%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Litecoin.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">Litecoin</h5>
																<p class="mb-0">LTC</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 149.18</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 8,44,49,000</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 7,10,10,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-info-transparent">
																<div class="progress-bar bg-info" style="width: 98%"></div>
															</div>
															<span>98%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Zcash.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">Zcash</h5>
																<p class="mb-0">Zcs</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 149.18</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 8,44,49,000</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 7,10,10,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-danger-transparent">
																<div class="progress-bar bg-danger" style="width: 36%"></div>
															</div>
															<span>36%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/IOTA.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">Iota</h5>
																<p class="mb-0">Ita</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 149.18</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 8,44,49,000</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 7,10,10,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-success-transparent">
																<div class="progress-bar bg-success" style="width: 46%"></div>
															</div>
															<span>46%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/Dash.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">Dash</h5>
																<p class="mb-0">Dsh</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 149.18</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 8,44,49,000</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 7,10,10,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-primary-transparent">
																<div class="progress-bar bg-primary" style="width: 50%"></div>
															</div>
															<span>50%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img src="<?php echo base_url('public/assets/images/crypto-currencies/round-outline/TajCoin.svg'); ?>" class="w-7 h-7 mr-3 icon-dropshadow" alt="">
															<div class="mt-2">
																<h5 class="font-weight-bold mb-0">TajCoin</h5>
																<p class="mb-0">Tcn</p>
															</div>
														</td>
														<td><h5 class="font-weight-bold mb-0">$ 149.18</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 8,44,49,000</h5></td>
														<td><h5 class="font-weight-bold mb-0">$ 7,10,10,000</h5></td>
														<td>
															<div class="progress progress-sm mb-1 mt-2 bg-primary-transparent">
																<div class="progress-bar bg-primary" style="width: 66%"></div>
															</div>
															<span>66%</span>
														</td>
														<td class="text-right">
															<a class="btn btn-white btn-sm" href="#">Withdraw</a>
															<a class="btn btn-white btn-sm" href="#">Deposit</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS  START -->
		<!--Moment js-->
		<script src="<?php echo base_url('public/assets/plugins/moment/moment.js'); ?>"></script>

		<!-- Daterangepicker js-->
		<script src="<?php echo base_url('public/assets/plugins/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/daterange.js'); ?>"></script>

		<!--Chart js -->
		<script src="<?php echo base_url('public/assets/plugins/chart/chart.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/chart/chart.extension.js'); ?>"></script>

		<!-- ECharts js-->
		<script src="<?php echo base_url('public/assets/plugins/echarts/echarts.js'); ?>"></script>

		<!--Select2 js -->
		<script src="<?php echo base_url('public/assets/plugins/select2/select2.full.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/select2.js'); ?>"></script>

		<!--Newsticker js-->
		<script src="<?php echo base_url('public/assets/plugins/newsticker/newsticker.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/newsticker.js'); ?>"></script>

		<!-- Index js-->
		<script src="<?php echo base_url('public/assets/js/index5.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
