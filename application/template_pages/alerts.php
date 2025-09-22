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
								<h4 class="page-title">Alerts</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Alerts</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default alerts</h3>
									</div>
									<div class="card-body">
										<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Success alert—At vero eos et accusamus praesentium!</div>
										<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Info alert—At vero eos et accusamus praesentium!</div>
										<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Warning alert—At vero eos et accusamus praesentium!</div>
										<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Danger alert—At vero eos et accusamus praesentium!</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Success alert—At vero eos et accusamus praesentium!</div>
<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Info alert—At vero eos et accusamus praesentium!</div>
<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Warning alert—At vero eos et accusamus praesentium!</div>
<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Danger alert—At vero eos et accusamus praesentium!</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Links in alerts</h3>
									</div>
									<div class="card-body">
										<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message.</a></div>
										<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Heads up!</strong> This<a href="#" class="alert-link"> alert needs your attention,</a> but it's not super important.</div>
										<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Warning! </strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good.</a></div>
										<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up </a>and try submitting again.</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message.</a></div>
<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Heads up!</strong> This<a href="#" class="alert-link"> alert needs your attention,</a> but it's not super important.</div>
<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Warning! </strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good.</a></div>
<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up </a>and try submitting again.</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tabs Alerts</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-with-alerts">
											<li class="col-lg-3">
												<a href="#info" data-toggle="tab">
													<div class="alert alert-info">
														Informations
													</div>
												</a>
											</li>
											<li class="col-lg-3">
												<a href="#success" data-toggle="tab">
													<div class="alert alert-success">
														Successes
													</div>
												</a>
											</li>
											<li class="col-lg-3">
												<a href="#warning" data-toggle="tab">
													<div class="alert alert-warning">
														Warnings
													</div>
												</a>
											</li>
											<li class="col-lg-3">
												<a href="#error" data-toggle="tab">
													<div class="alert alert-danger">
														Errors
													</div>
												</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane fade" id="info">
												<div class="alert alert-info">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula nec arcu at faucibus. Duis justo urna, adipiscing quis turpis non, dictum hendrerit ipsum. Fusce non viverra erat. Curabitur sit amet ante dui. Donec congue molestie mi a varius. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ornare quam eu ultricies bibendum. Cras ante augue, pharetra eget ultricies eu, aliquam eu velit. Phasellus mattis vitae justo pretium tempus. Duis vitae felis et sem tristique suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
												</div>
											</div>
											<div class="tab-pane fade" id="success">
												<div class="alert alert-success">
													<p>Nulla magna sapien, ullamcorper nec dolor id, gravida venenatis velit. Aliquam et malesuada metus. Sed vitae turpis pharetra nunc dignissim ultricies et sit amet lacus. Cras gravida felis mauris, a pellentesque augue interdum ac. In varius facilisis ante, nec viverra libero commodo ac. Maecenas tempus, elit nec aliquet fermentum, tellus odio auctor sapien, eu scelerisque purus turpis quis eros. Morbi id ante diam. Phasellus aliquet purus id odio mollis dignissim. Proin sagittis, risus a ullamcorper dapibus, velit enim adipiscing nulla, vel facilisis ipsum dui quis diam. Aliquam ullamcorper accumsan felis id consequat. Nullam vehicula ut mi eget porta.</p>
												</div>
											</div>
											<div class="tab-pane fade" id="warning">
												<div class="alert alert-warning">
													<p>Curabitur varius euismod nisi ac lacinia. Curabitur nec urna adipiscing, fermentum augue id, commodo nisl. Quisque ut convallis est. Suspendisse tellus nisi, tempus eu nulla quis, laoreet imperdiet ante. Vivamus in lorem purus. Integer luctus elit et metus condimentum porta. Suspendisse viverra sit amet mauris vel elementum. Fusce lorem arcu, accumsan non odio vel, vestibulum pharetra odio. Sed non mollis mi, ac lacinia nunc. Cras eleifend massa velit, tincidunt tempor arcu sodales at. Nam sit amet erat enim. Mauris placerat suscipit odio, vitae gravida purus bibendum sed. Suspendisse a nunc quis libero rutrum mattis at ac metus. In ac risus eleifend, vestibulum mi eget, dapibus nulla. Nunc diam eros, convallis a sagittis non, rhoncus non nunc. Maecenas in eleifend quam.</p>
												</div>
											</div>
											<div class="tab-pane fade" id="error">
												<div class="alert alert-danger">
													<p>Sed quis dapibus nunc. Proin vestibulum libero elit, gravida tincidunt mauris tincidunt blandit. Donec non ultrices neque, nec sollicitudin elit. Curabitur volutpat nulla vel mauris vestibulum, tempor ultrices quam ullamcorper. Fusce ultricies elementum pretium. In vel consectetur leo, nec rutrum velit. Fusce fermentum pulvinar nibh. Ut posuere ante sed luctus egestas. Aenean ut suscipit tortor.</p>
												</div>
											</div>
										</div>

									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="nav nav-pills nav-with-alerts">
	<li class="col-lg-3">
		<a href="#info" data-toggle="tab">
			<div class="alert alert-info">
				Informations
			</div>
		</a>
	</li>
	<li class="col-lg-3">
		<a href="#success" data-toggle="tab">
			<div class="alert alert-success">
				Successes
			</div>
		</a>
	</li>
	<li class="col-lg-3">
		<a href="#warning" data-toggle="tab">
			<div class="alert alert-warning">
				Warnings
			</div>
		</a>
	</li>
	<li class="col-lg-3">
		<a href="#error" data-toggle="tab">
			<div class="alert alert-danger">
				Errors
			</div>
		</a>
	</li>
</ul>
<div class="tab-content">
	<div class="tab-pane fade" id="info">
		<div class="alert alert-info">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula nec arcu at faucibus. Duis justo urna, adipiscing quis turpis non, dictum hendrerit ipsum. Fusce non viverra erat. Curabitur sit amet ante dui. Donec congue molestie mi a varius. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ornare quam eu ultricies bibendum. Cras ante augue, pharetra eget ultricies eu, aliquam eu velit. Phasellus mattis vitae justo pretium tempus. Duis vitae felis et sem tristique suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
		</div>
	</div>
	<div class="tab-pane fade" id="success">
		<div class="alert alert-success">
			<p>Nulla magna sapien, ullamcorper nec dolor id, gravida venenatis velit. Aliquam et malesuada metus. Sed vitae turpis pharetra nunc dignissim ultricies et sit amet lacus. Cras gravida felis mauris, a pellentesque augue interdum ac. In varius facilisis ante, nec viverra libero commodo ac. Maecenas tempus, elit nec aliquet fermentum, tellus odio auctor sapien, eu scelerisque purus turpis quis eros. Morbi id ante diam. Phasellus aliquet purus id odio mollis dignissim. Proin sagittis, risus a ullamcorper dapibus, velit enim adipiscing nulla, vel facilisis ipsum dui quis diam. Aliquam ullamcorper accumsan felis id consequat. Nullam vehicula ut mi eget porta.</p>
		</div>
	</div>
	<div class="tab-pane fade" id="warning">
		<div class="alert alert-warning">
			<p>Curabitur varius euismod nisi ac lacinia. Curabitur nec urna adipiscing, fermentum augue id, commodo nisl. Quisque ut convallis est. Suspendisse tellus nisi, tempus eu nulla quis, laoreet imperdiet ante. Vivamus in lorem purus. Integer luctus elit et metus condimentum porta. Suspendisse viverra sit amet mauris vel elementum. Fusce lorem arcu, accumsan non odio vel, vestibulum pharetra odio. Sed non mollis mi, ac lacinia nunc. Cras eleifend massa velit, tincidunt tempor arcu sodales at. Nam sit amet erat enim. Mauris placerat suscipit odio, vitae gravida purus bibendum sed. Suspendisse a nunc quis libero rutrum mattis at ac metus. In ac risus eleifend, vestibulum mi eget, dapibus nulla. Nunc diam eros, convallis a sagittis non, rhoncus non nunc. Maecenas in eleifend quam.</p>
		</div>
	</div>
	<div class="tab-pane fade" id="error">
		<div class="alert alert-danger">
			<p>Sed quis dapibus nunc. Proin vestibulum libero elit, gravida tincidunt mauris tincidunt blandit. Donec non ultrices neque, nec sollicitudin elit. Curabitur volutpat nulla vel mauris vestibulum, tempor ultrices quam ullamcorper. Fusce ultricies elementum pretium. In vel consectetur leo, nec rutrum velit. Fusce fermentum pulvinar nibh. Ut posuere ante sed luctus egestas. Aenean ut suscipit tortor.</p>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Popovers</h3>
									</div>
									<div class="card-body">
										<button type="button" class="btn btn-success mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
											Show success
										</button>
										<button type="button" class="btn btn-info mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
											Show info
										</button>
										<button type="button" class="btn btn-warning mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
											Show warning
										</button>
										<button type="button" class="btn btn-secondary mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
											Show secondary
										</button>
										<button type="button" class="btn btn-danger mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
											Show danger
										</button>
										<button type="button" class="btn btn-primary mt-1 mb-1" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
											Show primary
										</button>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><button type="button" class="btn btn-success mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
	Show success
</button>
<button type="button" class="btn btn-info mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
	Show info
</button>
<button type="button" class="btn btn-warning mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
	Show warning
</button>
<button type="button" class="btn btn-secondary mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
	Show secondary
</button>
<button type="button" class="btn btn-danger mt-1 mb-1" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
	Show danger
</button>
<button type="button" class="btn btn-primary mt-1 mb-1" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
	Show primary
</button></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts style</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="alert alert-success">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													 <strong>Success Message</strong>
													<hr class="message-inner-separator">
													<p>You successfully read this important alert message.</p>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="alert alert-info">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Info Message</strong>
													<hr class="message-inner-separator">
													<p>This alert needs your attention, but it's not super important.</p>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="alert alert-warning">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Warning Message</strong>
													<hr class="message-inner-separator">
													<p>Best check yo self, you're not looking too good.</p>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="alert alert-danger">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Danger Message</strong>
													<hr class="message-inner-separator">
													<p>Change a few things up and try submitting again.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row">
	<div class="col-sm-6 col-md-6">
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			 <strong>Success Message</strong>
			<hr class="message-inner-separator">
			<p>You successfully read this important alert message.</p>
		</div>
	</div>
	<div class="col-sm-6 col-md-6">
		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong>Info Message</strong>
			<hr class="message-inner-separator">
			<p>This alert needs your attention, but it's not super important.</p>
		</div>
	</div>
	<div class="col-sm-6 col-md-6">
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong>Warning Message</strong>
			<hr class="message-inner-separator">
			<p>Best check yo self, you're not looking too good.</p>
		</div>
	</div>
	<div class="col-sm-6 col-md-6">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong>Danger Message</strong>
			<hr class="message-inner-separator">
			<p>Change a few things up and try submitting again.</p>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alert with icon</h3>
									</div>
									<div class="card-body">
										<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.</div>
										<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-bell-o mr-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.</div>
										<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-exclamation mr-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.</div>
										<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-frown-o mr-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.</div>
									</div>
									<div class="html-code"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.</div>
	<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-bell-o mr-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.</div>
	<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-exclamation mr-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.</div>
	<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-frown-o mr-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14 7H8v14h11v-9h-5z" opacity=".3"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zm4 16H8V7h6v5h5v9z"/></svg></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Clipboard js -->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</htnl>

