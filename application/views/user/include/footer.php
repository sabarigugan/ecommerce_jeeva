
  <section class="col-lg-12 footer info_section">
    <div class="container"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_logo">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Men</a>
              </li>
              <li>
                <a href="#">Women</a>
              </li>
              <li>
                <a href="#">Juniors</a>
              </li>
              <li>
                <a href="#">Accessories</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_insta">
            <h5>Contact Us</h5>
            <div class="box-addres">
              <div class="link-mobile icon" style="width: 100%;">
                <span class="fa fa-phone">&nbsp;</span><span>+91-9742202223</span>
              </div>
              <div class="link-mail icon">
                <span class="fa fa-envelope">&nbsp;</span> <span>info@brightways.in</span>
              </div>
              <div class="link-address icon">
                <span class="fa fa-map-marker">&nbsp;</span><span>Brightways 319, Avenue Road City Market, Bangalore 2</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_links">
            <h5>Subscribe to our Newsletter!</h5>
          </div>
          <div class="feedback">
            <form action="/submit-form" method="post" class="">
              <div class="form-left"><input type="email" name="email" placeholder="Email Address" required=""> <img src="<?php echo base_url(); ?>assets/images/fashion/mail-arrow.png" alt="mail-arrow"></div>
            </form>
          </div>
          <div class="follow-us">
            <h5>Follow Us on</h5>
            <ul class="social-media-list list-unstyled">
             <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           <li>
                           <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                           <li>
                           <li><a href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                           <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->

  <!-- footer section botm-->
  <section class="col-lg-12 container-fluid footer_section">
    <div class="container">
      <div class="col-lg-4 footer-left">
        ©brightways – All rights reserved
      </div>
      <div class="col-lg-8 footer-right">
        <ul class="list-unstyled">
          <li>
            <a href="<?php echo site_url('user/terms'); ?>">Terms and Conditions</a>
          </li>
          <li>
            <a href="<?php echo site_url('user/privacy'); ?>">Privacy Policy</a>
          </li>
          <li>
            <a href="<?php echo site_url('user/shipping'); ?>">Shipping Policy</a>
          </li>
          <li>
            <a href="<?php echo site_url('user/return'); ?>">Returns Policy</a>
          </li><!-- <li>Disclaimer</li> -->
        </ul>
      </div>
    </div>
  </section><!-- footer section botm-->
  <?php if ($this->session->flashdata('message')): ?>
	    <script>
	        // Wait for the DOM to be ready
	        document.addEventListener('DOMContentLoaded', function () {
	            // Check if the URI contains 's'
	            if (window.location.href.indexOf('s') !== -1) {
	                // Show the Swal (SweetAlert) popup
	                Swal.fire({
	                    icon: '<?php echo $this->session->flashdata('class') === "success" ? "success" : "error"; ?>',
	                    title: "<?php echo $this->session->flashdata('message'); ?>",
	                    showConfirmButton: false,
	                    timer: 3000 // 5 seconds
	                });
	            }
	        });
	    </script>
	<?php endif; ?>
  <!-- Login Modal -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><!-- <span aria-hidden="true">&times;</span> -->
           <img src="<?php echo base_url(); ?>assets/images/fashion/close.png" alt="close"></button>
        </div>
          <form class="login" action="<?php echo site_url('user/login_post'); ?>" method="post">
        <div class="modal-body">
          <div class="text-center login-popup-head">
            <h3><b>Sign In</b></h3>
            <p>Please enter your details.</p>
          </div>
          <div class="form-outline">
            <label class="form-label" for="loginmail">Email</label>
             <input type="mail" id="loginmail" class="form-control" name="user_email" placeholder="Enter your Email">
          </div>
          <div class="form-outline mt-3">
            <label class="form-label" for="loginpassword">Password</label>
            <input type="password" id="loginpassword" name="user_password" class="form-control" placeholder="Enter your password">
          </div>
          <div class="pull-right forget"><a href="">Forgot Password?</a></div>
        </div>
        <div class="modal-footer">
          <button type="submit" id = "submitButton" class="btn btn-primary"><b>Sign in</b></button>
        </div>
      </form>
        <p class="already-login text-center">Don't have an account?
         <a href="" data-toggle="modal" data-target="#signup"><b> Sign Up</b></a>
      </p>
      </div>
    </div>
  </div>
  <!-- Login Modal -->

  <!-- Sign Modal -->
  <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="<?php echo site_url('user/signup_post'); ?>" method="post" enctype="multipart/form-data">

        <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><!-- <span aria-hidden="true">&times;</span> -->
           <img src="<?php echo base_url(); ?>assets/images/fashion/close.png" alt="close"></button>
        </div>
        <div class="modal-body">
          <div class="text-center login-popup-head">
            <h3><b>Sign Up</b></h3>
            <p>Please enter your details.</p>
          </div>
          <div class="form-outline">
            <label class="form-label" for="name">Name</label>
             <input type="text" id="name" name="user_name" class="form-control" placeholder="Enter your Name" required>
          </div>
          <div class="form-outline mt-3">
            <label class="form-label" for="email">Email</label>
             <input type="mail" id="email" class="form-control" name="user_email" placeholder="Enter your Email" required>
          </div>
          <div class="form-outline mt-3">
            <label class="form-label" for="typeNumber">Mobile Number</label> <input type="number" id="typeNumber" name="user_phone" class="form-control" placeholder="Enter your Mobile number" required>
          </div>
          <div class="form-outline mt-3">
            <label class="form-label" for="typePassword">Password</label> <input type="password" id="typePassword" class="form-control" placeholder="Enter your password" name="user_password" required>
          </div>
          <div class="form-outline mt-3">
            <label class="form-label" for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" class="form-control" oninput="checkPasswordMatch()" placeholder="Confirm your password" required>
            <span id="passwordMatch"></span>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <button type="submit"  id = "submitButton"  class="btn btn-primary"><b>Sign Up</b></button>
        </div>
        <p class="already-login text-center">Already have an account?
         <a href="" data-toggle="modal" data-target="#login"><b> Log In</b></a>
      </p>
    </form>
      </div>
    </div>
  </div>
  <!-- Sign Modal -->

  <!-- OTP Modal -->
  <div class="modal fade" id="otp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><!-- <span aria-hidden="true">&times;</span> -->
           <img src="<?php echo base_url(); ?>assets/images/close.png" alt="close"></button>
        </div>
        <div class="modal-body">
          <div class="text-center login-popup-head otp">
            <h3><b>Verify with OTP</b></h3>
            <p>Send To - 9876543201 <button type="button" class="btn btn-primary">Change</button></p>
          </div>
          <div class="form-outline">
            <label class="form-label" for="typeNumber">OTP</label> <input type="number" id="typeNumber" class="form-control" placeholder="Enter your OTP">
          </div><!-- <div class="form-outline mt-3">
    <label class="form-label" for="typePassword">Password</label>
    <input type="password" id="typePassword" class="form-control" placeholder="Enter your password" />
</div>
<div class="form-outline mt-3">
    <label class="form-label" for="confirmPassword">Confirm Password</label>
    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm your password" />
</div> -->
          <!-- <button type="button" class="btn btn-primary"></button> -->
          <button type="button" class="btn btn-outline-primary">Resend OTP</button>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <button type="button" class="btn btn-primary">Continue</button>
        </div>
      </div>
    </div>
  </div><!-- OTP Modal -->
  <!-- memberslogin Modal -->
  <div class="modal fade" id="memberslogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><!-- <span aria-hidden="true">&times;</span> -->
           <img src="<?php echo base_url(); ?>assets/images/close.png" alt="close"></button>
        </div>
        <div class="modal-body">
          <div class="text-center login-popup-head">
            <h3><b>Members Log In</b></h3>
            <p>Please enter your details.</p>
          </div>
          <div class="form-outline">
            <label class="form-label" for="typeNumber">Login Id</label> <input type="text" id="username" name="username" class="form-control" placeholder="Enter your Login Id" required="">
          </div>
          <div class="form-outline mt-3">
            <label class="form-label" for="typePassword">Password</label> <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required="">
          </div>
          <div class="form-outline mt-3 pull-right member-forgot">
            <a href="#">Forgot password?</a>
          </div>
          <div class="form-outline mt-3 pull-left member-remember">
            <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="memberlogin()" class="btn btn-primary">Log in</button>
        </div>
      </div>
    </div>
  </div><!-- memberslogin Modal -->
