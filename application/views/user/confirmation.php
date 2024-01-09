<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a href="#" class="navbar-brand">PayUMoney Gateway</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">

		<ul class="navbar-nav ml-auto">


		</ul>

	</div>

</nav>
<!-- End Bootstrap 4 Navbar -->



<div class="container mt-5 mb-5">
	<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        	<div class="card">
        		<h5 class="card-header bg-success text-white">Checkout Confirmation</h5>
        		<div class="card-body">
        			<form action="<?php echo $action; ?>/_payment" method="post" target="_blank" id="payuForm" name="payuForm">
		                <input type="hidden" name="key" value="<?php echo $mkey; ?>" />
		                <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
		                <input type="hidden" name="txnid" value="<?php echo $tid; ?>" />
		                <div class="form-group">
		                    <label class="control-label">Total Payable Amount</label>
		                    <input class="form-control" name="amount" value="<?php echo $amount; ?>"  readonly/>
		                </div>
		                <div class="form-group">
		                    <label class="control-label">Your Name</label>
		                    <input class="form-control" name="firstname" id="firstname" value="<?php echo $user_name; ?>" readonly/>
		                </div>
		                <div class="form-group">
		                    <label class="control-label">Email</label>
		                    <input class="form-control" name="email" id="email" value="<?php echo $user_email; ?>" readonly/>
		                </div>
		                <div class="form-group">
		                    <label class="control-label">Phone</label>
		                    <input class="form-control" name="user_phone" value="<?php echo $user_phone; ?>" readonly />
		                </div>

                                          <?php
                  $listorderbyid = $this->madmin->listorderbyid();
                  foreach ($listorderbyid as $cartArray) {
                      $oid = $cartArray->oid;
                      $product_info = array($cartArray->cname, $cartArray->cqty); ?>
											<div class="form-group">
												 <label class="control-label"> Booking Info</label>
		                    <input class="form-control mb-1" name="productinfo" value="<?php echo implode(', ', $product_info); ?>" readonly>
											</div>
											
												<div class="form-group">
											 		 <label class="control-label"> Booking Info</label>
												<label class="control-label">Order ID</label>
												<input class="form-control" name="oid" value="<?php echo $oid; ?>" readonly />
												</div>
                      <?php } ?>


		                <div class="form-group">
		                    <label class="control-label">Address</label>
		                    <input class="form-control" name="user_address" value="<?php echo $user_address; ?>" readonly/>
		                </div>
		                <div class="form-group">
		                    <input name="surl" value="<?php echo $sucess; ?>" size="64" type="hidden" />
		                    <input name="furl" value="<?php echo $failure; ?>" size="64" type="hidden" />
		                    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		                    <input name="curl" value="<?php echo $cancel; ?> " type="hidden" />
		                </div>
		                <div class="form-group float-right">
		                	<input type="submit" value="Pay Now" class="btn btn-primary" />
		                </div>
		            </form>

        		</div>
        	</div>

        </div>
        <div class="col-md-2"></div>
    </div>

</div>

</body>
</html>
