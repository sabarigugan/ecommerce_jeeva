<!DOCTYPE html>
<html lang="en">
<head>
    <title>Brightways</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo.png">

    <!-- FontAwesome JS-->
    <script defer src="<?= base_url(); ?>assets/admin/assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= base_url(); ?>assets/admin/assets/css/portal.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/assets/plugins/sweetalert2/node_modules/sweetalert2/dist/sweetalert2.min.css">
    <style>
        label.error {
            color: red;
        }
    </style>
</head>
<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-12 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="<?= base_url(); ?>admin"><img class="logo-icon me-2" src="<?= base_url(); ?>assets/images/logo.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">LOG IN TO BRIGHTWAYS</h2>
			        <div class="auth-form-container text-start">
                <form class="auth-form auth-signup-form" action="<?php echo site_url('admin/login_post'); ?>" method="post">
							<div class="email mb-3">
								<label class="sr-only" for="signin-email">Email</label>
								<input id="signin-email" name="admin_email" type="email" class="form-control signin-email" placeholder="Email address" required="required">
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" name="admin_password" type="password" class="form-control signin-password" placeholder="Password" required="required">
								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
											Remember me
											</label>
										</div>
									</div><!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="#">Forgot password?</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
</form>

						<!-- <div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="<?= base_url('admin/register'); ?>" >here</a>.</div> -->
					</div><!--//auth-form-container-->
			    </div><!--//auth-body-->
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                         <small class="copyright">Copyright © 2023 <a class="app-link" href="<?= base_url(); ?>admin" target="_blank">Brightways</a></small>

				    </div>
			    </footer><!--//app-auth-footer-->
		    </div><!--//flex-column-->
	    </div><!--//auth-main-col-->

    </div><!--//row-->
	<script src = "<?= base_url(); ?>assets/admin/assets/js/jquery-3.7.1.min.js"></script>
    <script src = "<?= base_url(); ?>assets/admin/assets/plugins/jquery_validate/dist/jquery.validate.js"></script>
    <script src = "<?= base_url(); ?>assets/admin/assets/plugins/jquery_validate/dist/jquery.validate.min.js"></script>
    <script src = "<?= base_url(); ?>assets/admin/assets/plugins/jquery_validate/dist/additional-methods.js"></script>
    <script src = "<?= base_url(); ?>assets/admin/assets/plugins/jquery_validate/dist/additional-methods.min.js"></script>
    <script src="<?= base_url(); ?>assets/admin/assets/plugins/sweetalert2/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

</body>
</html>
