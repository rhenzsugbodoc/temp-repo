<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Google icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Bootstrap css -->
  <link href="<?php echo base_url('public/assets/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />

  <!-- Style css -->
  <link href="<?php echo base_url('public/assets/css/style.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('public/assets/css/custom_css.css'); ?>" rel="stylesheet" />

  <!-- Bootstrap Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <!-- Dark css -->
  <link href="<?php echo base_url('public/assets/css/dark.css'); ?>" rel="stylesheet" />

  <!-- Skins css -->
  <link href="<?php echo base_url('public/assets/css/skins.css'); ?>" rel="stylesheet" />

  <!-- Animate css -->
  <link href="<?php echo base_url('public/assets/css/animated.css'); ?>" rel="stylesheet" />

  <!--Sidemenu css -->
      <link id="theme" href="<?php echo base_url('public/assets/css/sidemenu.css'); ?>" rel="stylesheet">

  <!-- P-scroll bar css-->
  <link href="<?php echo base_url('public/assets/plugins/p-scrollbar/p-scrollbar.css'); ?>" rel="stylesheet" />

</head>
<body>
<section class="container-fluid p-0">
  <div class="bg-landing-gradient-header d-flex flex-column bottom-shadow" style="height: 100vh;">
    <!-- Header -->
    <div class="d-flex align-items-center" style="height: 15vh; padding: 0 2rem;">
      
      <div class="flex-grow-0 text-white" style="width: 33.33%;">
        <h2>Homecare</h2>
      </div>
      <div class="flex-grow-1 d-flex justify-content-end">
        <a href="#" class="text-white mx-2 no-hover ">Consultation</a>
        <a href="#" class="text-white mx-2 no-hover">About Us</a>
        <a href="#" class="text-white mx-2 no-hover">Support</a>
        <a href="#" class="text-white mx-2 no-hover">Contact Us</a>
        <a href="#" class="text-white mx-2 no-hover">Get Started</a>
        <a href="<?php echo base_url('Dashboard'); ?>" class="btn btn-info mx-2">Get started</a>

      </div>
    </div>
    <!-- Body -->
    <div class="row flex-grow-1 d-flex align-items-center text-white">
      <div class="col-md-2"></div>
      <div class="col-md-4 d-flex flex-column align-items-start">
        <h1>Trusted Home Care, 
          <br/>Right at Your Doorstep</h1>
        <p>With lots of unique blocks, you can easily build a page without coding.
          <br/> Build your next consultancy website within few minutes.</p>
        <a href="#" class="mx-2 no-hover" style="color: #68D585;">Request a Service →</a>
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-start">
        <img src="<?php echo base_url('public/assets/images/png/homecareVid.png'); ?>" class="img-fluid w-70">
      </div>
    
    </div>
  </div>

  <div class="row align-items-center text-center bottom-shadow" style="height: 65vh;">
    <div class="col-md-4 mb-4">
      <div class="d-flex flex-column align-items-center">
        
        <div class="mb-3">
          <i class="bi bi-calendar-fill text-primary"></i>
        </div>
        
        <h5 class="fw-bold">Easy Scheduling</h5>
        <p class="text-muted">Book and manage home visits in just a few taps</p>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="d-flex flex-column align-items-center">
        <div class="mb-3">
          <i class="bi bi-person-check-fill fs-1 text-primary"></i>
        </div>
        <h5 class="fw-bold">Trusted Caregivers</h5>
        <p class="text-muted">Varied and Verified professionals ready to assist at home.</p>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="d-flex flex-column align-items-center">
        <div class="mb-3">
          <i class="bi bi-bar-chart-line-fill fs-1 text-primary"></i>
        </div>
        <h5 class="fw-bold">Seamless Healthcare Tracking</h5>
        <p class="text-muted">Stay updated on care plans, progress, and reports.</p>
      </div>
    </div>
  </div>


  <div class="row align-items-center text-white bottom-shadow" style="height: 80vh; background-color: #4073F0">
      <div class=" col-sm-12 col-md-6 d-flex justify-content-end p-5">
        <img src="<?php echo base_url('public/assets/images/png/Dashboard.png'); ?>" class="img-fluid w-70">
      </div>
      <div class=" col-sm-12 col-md-6 d-flex flex-column jusfity-content-center">
        <h1>Track all your healthcare 
          <br/>services on one app</h1>
        <p>MIke Tyson</p>
      </div>

  </div>
  <div class="row align-items-center justify-content-center text-white" style="height: 100vh;">
      <div class="col-sm-12 col-md-6 d-flex flex-column align-items-end text-start" style="color: #161C2D">
        <h1>
          Understand your loved ones’ needs. 
          <br/>Provide care with confidence.
        </h1>
        <p>Mike Tyson</p>
      </div>
      <div class="col-sm-12 col-md-6 d-flex justify-content-start p-5">
          <img src="<?php echo base_url('public/assets/images/png/Dashboard.png'); ?>" class="img-fluid w-70">
      </div>
  </div>
  <div class="box-container d-flex flex-column bottom-shadow " style="background-color: #ECF2F7; padding: 2rem;">
      <div class="d-flex flex-row align-items-center justify-content-center" style="height: 10vh; text: #161C2D;">
        <h2>Services Offered</h2>
      </div>
      <div class="boxes-grid flex-grow-1">
          <div class="row g-5 justify-content-center">

              <div class="col-6 col-sm-4 col-md-4">
                  <div class="square-box bg-white text-center shadow">
                    <i class="bi bi-house-heart"></i>
                  </div>
                  <div class="text-center" style="color: #161C2D">Homecare Services</div>
              </div>

              <div class="col-6 col-sm-4 col-md-4">
                  <div class="square-box bg-white text-center shadow">
                      <i class="bi bi-card-checklist"></i>                    
                  </div>
                  <div class="text-center" style="color: #161C2D">Care Planning</div>
              </div>

              <div class="col-6 col-sm-4 col-md-4">
                  <div class="square-box bg-white text-center shadow">
                      <i class="bi bi-prescription2"></i>                      
                  </div>
                  <div class="text-center" style="color: #161C2D">Prescription Records <br/> and Delivery</div>

              </div>

              <div class="col-6 col-sm-4 col-md-4">
                  <div class="square-box bg-white text-center shadow">
                      <i class="bi bi-calendar-check"></i>
                  </div>
                  <div class="text-center" style="color: #161C2D">Care Plan Scheduling and <br/> records</div>
              </div>

              <div class="col-6 col-sm-4 col-md-4">
                  <div class="square-box bg-white text-center shadow">
                      <i class="bi bi-file-medical"></i>
                  </div>
                  <div class="text-center" style="color: #161C2D">Comprehensive Medical <br/> records and diagnosis</div>
              </div>

              
              <div class="col-6 col-sm-4 col-md-4">
                  <div class="square-box bg-white text-center shadow">
                      <i class="bi bi-chat-left-dots"></i>
                  </div>
                  <div class="text-center" style="color: #161C2D">Online Consultations</div>
              </div>
          </div>
      </div>
  </div>
  <div class="row bg-landing-gradient-footer bottom-shadow align-items-center" style="height: 70vh;">
    <div class="col-12 col-md-4 d-flex flex-column align-items-center mb-4 mb-md-0 text-white">
      <h3>HomeCare</h3>
      <p>
        A homecare app that helps families monitor,
        <br/>manage, and support their loved ones’ daily 
        <br/>health needs with ease and confidence.
      </p>
    </div>

    <div class="col-6 col-md-2 d-flex flex-column align-items-center align-items-md-start mb-3 mb-md-0 text-white">
      <h4><strong>Company</strong></h4>
      <p>About Us</p>
      <p>Contact Us</p>
      <p>Socials</p>
    </div>

    <div class="col-6 col-md-2 d-flex flex-column align-items-center align-items-md-start mb-3 mb-md-0 text-white">
      <h4><strong>Product</strong></h4>
      <p>Features</p>
      <p>Pricing</p>
      <p>News</p>
      <p>Help Desk</p>
    </div>

    <div class="col-6 col-md-2 d-flex flex-column align-items-center align-items-md-start mb-3 mb-md-0 text-white">
      <h4><strong>Services</strong></h4>
      <p>Consultations</p>
      <p>Home Visits</p>
      <p>Care Plans</p>
    </div>

    <div class="col-6 col-md-2 d-flex flex-column align-items-center align-items-md-start text-white">
      <h4><strong>Legal</strong></h4>
      <p>Terms</p>
      <p>Privacy Policy</p>
    </div>
  </div>
</section>


</div>
</body>
</html>