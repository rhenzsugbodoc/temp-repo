<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Gallery css -->
		<link href="<?php echo base_url('public/assets/plugins/lightgallery/gallery.css'); ?>" rel="stylesheet">
		<!-- INTERNAL CSS END -->
	</head>
<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
						    <div class="page-leftheader">
						        <h4 class="page-title">Gallery</h4>
						    </div>
						    <div class="page-rightheader ml-auto d-lg-flex d-none">
						        <ol class="breadcrumb">
						            <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
						                        <path d="M0 0h24v24H0V0z" fill="none" />
						                        <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
						                        <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon"> Home</span></a></li>
						            <li class="breadcrumb-item"><a href="#">Pages</a></li>
						            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
						        </ol>
						    </div>
						</div>
						<!--End Page header-->

						<div class="demo-gallery card">
						    <div class="card-header">
						        <div class="card-title">Light Gallery</div>
						    </div>
						    <div class="card-body">
						        <ul id="lightgallery" class="list-unstyled row">
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/1.jpg'); ?>" alt="Thumb-1">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/2.jpg'); ?>" alt="Thumb-2">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/3.jpg'); ?>" alt="Thumb-1">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/4.jpg'); ?>" alt="Thumb-2">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/5.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/5.jpg'); ?>" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/5.jpg'); ?>" alt="Thumb-1">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/6.jpg'); ?>" alt="Thumb-2">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/7.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/7.jpg'); ?>" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/7.jpg'); ?>" alt="Thumb-1">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/8.jpg'); ?>" alt="Thumb-2">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/9.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/9.jpg'); ?>" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/9.jpg'); ?>" alt="Thumb-1">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/10.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/10.jpg'); ?>" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/10.jpg'); ?>" alt="Thumb-2">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/11.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/11.jpg'); ?>" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/11.jpg'); ?>" alt="Thumb-1">
						                </a>
						            </li>
						            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="<?php echo base_url('public/assets/images/photos/12.jpg'); ?>" data-src="<?php echo base_url('public/assets/images/photos/12.jpg'); ?>" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
						                <a href="">
						                    <img class="img-responsive" src="<?php echo base_url('public/assets/images/photos/12.jpg'); ?>" alt="Thumb-2">
						                </a>
						            </li>
						        </ul>
						    </div>
						</div>
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Gallery js -->
		<script src="<?php echo base_url('public/assets/plugins/lightgallery/picturefill.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/lightgallery/lightgallery.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/lightgallery/lg-pager.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/lightgallery/lg-autoplay.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/lightgallery/lg-fullscreen.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/lightgallery/lg-zoom.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/lightgallery/lg-hash.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/lightgallery/lg-share.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/gallery.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>