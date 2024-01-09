<?php
$this->load->view('user/include/html-top');
$this->load->view('user/include/header');
$uri3 = $this->uri->segment(3);
$uri3_rpl = str_replace('-', ' ', $uri3);
$user_id = $this->session->userdata('user_login')['user_id'];
?>

<div class="col-lg-12 col-xs-12 step">
   <div class="container">
<div class="row smpl-step justify-content-center">
  <div class="col-lg-3 col-xs-3 smpl-step-step complete">
      <a class="smpl-step-icon"><img src="<?php echo base_url(); ?>assets/images/step-1.png">    </a>

       <div class="text-center smpl-step-num">Cart</div>
  </div>

  <div class="col-lg-3 col-xs-3 smpl-step-step complete">
      <a class="smpl-step-icon"><img src="<?php echo base_url(); ?>assets/images/step-1.png"></a>
      <div class="text-center smpl-step-num">Address</div>
  </div>
  <div class="col-lg-3 col-xs-3 smpl-step-step disabled last">
      <a class="smpl-step-icon"><img src="<?php echo base_url(); ?>assets/images/step-1.png"></a>
      <div class="text-center smpl-step-num">Payment</div>
  </div>
</div>
</div>

</div>

<div class="col-lg-12 col-xs-12">
     <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-8 col-xs-12 payment-cart">
           <div class="payment-cart-head">
              <div class="col-lg-8 payment-cart-head-left">
                 <img src="<?php echo base_url(); ?>assets/images/fashion/pay-logo.png">
                 <p><b>Brightways</b></p>
                 <p>order_ceqe3242434cd24</p>
              </div>
              <div class="col-lg-4 payment-cart-head-right">
                 <p><b>₹1,346</b></p>
              </div>
           </div>
           <div class="col-lg-12 payment-cart-body">
              <div class="payment-cart-top pull-left">
                 <p class="col-lg-12 payment-cart-title">Details</p>
                 <div class="col-lg-6 details pull-left">
                    <p>
                       <img src="<?php echo base_url(); ?>assets/images/phone.png">
                        <span>+91-9844192551 </span>
                       <button type="button" class="btn btn-outline-primary">Edit</button>
                    </p>
                 </div>
                 <div class="col-lg-6 details pull-left">
                    <p>
                       <img src="<?php echo base_url(); ?>assets/images/mail-1.png">
                        <span>prashanth.nayak@gmail.com</span>
                       <button type="button" class="btn btn-outline-primary">Edit</button>
                    </p>
                 </div>
              </div>


              </div>
               <div class="row justify-content-center">
                 <div class="col-lg-8 pay-btn-botm">
                    <a href="payment_confirmed.html"> <button type="button" class="btn btn-primary">Pay</button></a>
                 </div>
               </div>
           </div>


        </div>
     </div>
  </div>
</div>







<?php
$this->load->view('user/include/footer');
$this->load->view('user/include/html-bot');
?>
