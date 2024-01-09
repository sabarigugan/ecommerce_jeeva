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
	<a href="<?php echo base_url(); ?>" class="navbar-brand">PayUMoney Gateway</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


</nav>
<!-- End Bootstrap 4 Navbar -->



<div class="container mt-5">
	<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        	<div class="card">
        		<h4 class="card-header">Transaction <label for="Success" class="badge badge-success">Success</label></h4>
        		<div class="card-body">
        			<?php
		                echo "<p>Thank You. Your order status is ". $status .".</br>";
		                echo "Your Transaction ID for this transaction is ".$txnid."</br>";
		                echo "We have received a payment of Rs. " . $amount . ". Your order  will dispatch soon.</p>";
		            ?>
        		</div>
        	</div>

         </div>
        <div class="col-md-2"></div>
    </div>
	<!-- Footer -->


</div>

</body>
</html>
