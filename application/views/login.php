<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sihat Xpress</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?=base_url();?>assets/logo/favicon.png" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets-landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-landing/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?=base_url()?>assets-landing/css/main.css" rel="stylesheet">

  <style>
    body {
      background-color: #f0f0f0;
      font-family: 'Inter', sans-serif;
    }
    
    .header-logo {
      background-color: #1e2832;
      padding: 15px 0;
      text-align: center;
    }
    
    .header-logo img {
      height: 50px;
    }
    
    .account-section {
      padding: 60px 0;
    }
    
    .section-heading {
      margin-bottom: 40px;
    }
    
    .section-heading h6 {
      color: #666;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 10px;
      position: relative;
      display: inline-block;
    }
    
    .section-heading h6:after {
      content: '';
      display: block;
      width: 100px;
      height: 2px;
      background-color: #ff0000;
      margin-top: 10px;
    }
    
    .section-heading h2 {
      color: #1e2832;
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    
    .contact-info-box {
      background: white;
      border-radius: 8px;
      padding: 30px;
      height: 100%;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      text-align: center;
      margin-bottom: 20px;
    }
    
    .contact-info-box .icon-circle {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      border: 1px dashed #ff6b6b;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }
    
    .contact-info-box i {
      font-size: 2rem;
      color: #ff0000;
    }
    
    .contact-info-box h3 {
      font-size: 1.2rem;
      margin-bottom: 10px;
      font-weight: 600;
    }
    
    .form-container {
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .nav-tabs {
      border: none;
    }
    
    .nav-tabs .nav-link {
      border: none;
      padding: 15px 30px;
      font-weight: 600;
      color: #333;
      background-color: #f8f8f8;
      border-radius: 0;
    }
    
    .nav-tabs .nav-link.active {
      background-color: #ff0000;
      color: white;
    }
    
    .tab-content {
      padding: 30px;
    }
    
    .form-control {
      padding: 12px;
      border-radius: 6px;
      border: 1px solid #ddd;
      margin-bottom: 15px;
    }
    
    .form-label {
      font-weight: 500;
      margin-bottom: 8px;
    }
    
    .btn-submit {
      background-color: #ff0000;
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 30px;
      font-weight: 600;
      transition: all 0.3s;
    }
    
    .btn-submit:hover {
      background-color: #d60000;
    }
    
    .get-started-btn {
      display: inline-block;
      background-color: #ff0000;
      color: white;
      padding: 12px 30px;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s;
    }
    
    .get-started-btn:hover {
      background-color: #d60000;
      color: white;
    }
  </style>
</head>

<body>
  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color:rgba(25, 38, 48, 0.9);">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-center">
      <a href="<?=base_url()?>" class="logo d-flex align-items-center">
        <img src="<?=base_url()?>assets/logo/logo-tran.png" alt="" width="179px" style="height: 200px;">
      </a>
    </div>
  </header>

  <!-- Account Section -->
  <section class="account-section">
    <div class="container">
      <div class="section-heading text-center">
        <h6>ACCOUNT ACCESS</h6>
        <h2>LET'S START YOUR CUSTOM JERSEY</h2>
      </div>
      
      <div class="row">
        <!-- Contact Info -->
        <div class="col-lg-6">
          <div class="contact-info-box">
            <div class="icon-circle">
              <i class="bi bi-geo-alt"></i>
            </div>
            <h3>Address</h3>
            <p>5-3, Selangor D. Ehsan, Malaysia, Galleria Cyberjaya,</p>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="contact-info-box">
                <div class="icon-circle">
                  <i class="bi bi-telephone"></i>
                </div>
                <h3>Call Us</h3>
                <p>+601151557286</p>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="contact-info-box">
                <div class="icon-circle">
                  <i class="bi bi-envelope"></i>
                </div>
                <h3>Email Us</h3>
                <p>sihatxpress@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Login/Register Form -->
        <div class="col-lg-6">
          <div class="form-container">
            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs" id="accountTabs" role="tablist">
              <li class="nav-item" role="presentation" style="width: 50%;">
                <button class="nav-link active w-100" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="login-tab-pane" aria-selected="true">Login</button>
              </li>
              <li class="nav-item" role="presentation" style="width: 50%;">
                <button class="nav-link w-100" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-tab-pane" type="button" role="tab" aria-controls="register-tab-pane" aria-selected="false">Register</button>
              </li>
            </ul>
            
            <!-- Tabs Content -->
            <div class="tab-content" id="accountTabsContent">
              <!-- Login Tab -->
              <div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab" tabindex="0">
                <form action="<?=base_url('main/loginProcess')?>" method="post" class="php-email-form">
                  <div class="mb-3">
                    <label class="form-label">Your Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>
                  
                  <div class="text-center">
                    <div class="loading">Loading</div>
                    <? if($this->session->flashdata('error')){ ?>
                    <div class="error-message d-block">
                      <?=$this->session->flashdata('error')?>
                    </div>
                    <? } ?>
                    
                    <button type="submit" class="btn-submit">Login</button>
                  </div>
                </form>
              </div>
              
              <!-- Register Tab -->
              <div class="tab-pane fade" id="register-tab-pane" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                <form action="<?=base_url('main/doCreateAccount')?>" method="post" class="php-email-form">
                  <div class="mb-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Your Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>
                  
                  <div class="text-center">
                    <div class="loading">Loading</div>
                    <? if($this->session->flashdata('success')){ ?>
                    <div class="sent-message d-block">
                      <?=$this->session->flashdata('success')?>
                    </div>
                    <? } ?>
                    
                    <button type="submit" class="btn-submit">Create Account</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets-landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets-landing/vendor/aos/aos.js"></script>
  <script src="<?=base_url()?>assets-landing/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url()?>assets-landing/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=base_url()?>assets-landing/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url()?>assets-landing/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?=base_url()?>assets-landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?=base_url()?>assets-landing/js/main.js"></script>

  <script>
    // Auto-switch to register tab if there's a success message
    document.addEventListener('DOMContentLoaded', function() {
      <? if($this->session->flashdata('success')){ ?>
        const registerTab = document.getElementById('register-tab');
        if (registerTab) {
          registerTab.click();
        }
      <? } ?>
    });
  </script>

</body>

</html>
