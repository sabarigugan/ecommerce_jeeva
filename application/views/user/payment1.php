<?php
$this->load->view('user/include/html-top');
$this->load->view('user/include/header');
$uri3 = $this->uri->segment(3);
$uri3_rpl = str_replace('-', ' ', $uri3);
$user_id = $this->session->userdata('user_login')['user_id'];
$user_name = $this->session->userdata('user_login')['user_name'];
$user_email = $this->session->userdata('user_login')['email'];
$user_phone = $this->session->userdata('user_login')['phone'];

?>

<div class="col-lg-12 col-xs-12 step">
   <div class="container">
     <?php $oid = $this->session->userdata('oid'); ?>
     <?php echo $oid; ?>
<div class="row smpl-step justify-content-center">
  <div class="col-lg-3 col-xs-3 col-4 smpl-step-step complete">
      <a class="smpl-step-icon"><img src="<?php echo base_url(); ?>assets/images/step-1.png">    </a>

       <div class="text-center smpl-step-num">Cart</div>
  </div>

  <div class="col-lg-3 col-xs-3 col-4 smpl-step-step disabled">
      <a class="smpl-step-icon"><img src="<?php echo base_url(); ?>assets/images/step-1.png"></a>
      <div class="text-center smpl-step-num">Address</div>
  </div>
  <div class="col-lg-3 col-xs-3 col-4 smpl-step-step disabled last">
      <a class="smpl-step-icon"><img src="<?php echo base_url(); ?>assets/images/step-2.png"></a>
      <div class="text-center smpl-step-num">Payment</div>
  </div>
</div>
</div>

</div>


<section class="col-lg-12 col-xs-12 cart-list-page" style="float: left;">
   <div class="container">
      <!-- <div class="col-lg-12 pull-left"> -->
         <div class="row">
            <div class="col-lg-8 cart-box-left pull-left">
               <!-- <div class="row"> -->
                  <h4>Delivery to</h4>
                    <div class="col-lg-12 delivery-to">
                      <?php
                        $listaddressbyid = $this->madmin->listaddressbyid();
                        foreach ($listaddressbyid as $listaddressbyidArray) { ?>
                       <p><b class="media-left">Address -</b>
                       <span class="media-right"><?php echo $listaddressbyidArray->user_address; ?></span></p>
                       <p><b class="media-left">Landmark -</b> <?php echo $listaddressbyidArray->user_landmark; ?></p>
                       <p><b class="media-left">City / State -</b> <?php echo $listaddressbyidArray->user_city; ?> , <?php echo $listaddressbyidArray->user_state; ?></p>
                       <p class="last"><b class="media-left">Pincode -</b> <?php echo $listaddressbyidArray->user_pincode; ?></p>
                       <?php } ?>
                       <!-- <a href="<?php echo site_url('user/cart'); ?>"> -->
                         <button type="button"  id="myBtn" class="btn btn-primary"  data-toggle="modal" data-target=".address-popup">Change Address</button>
                       <!-- </a> -->
                    </div>



                  <div class="col-lg-12 col-xs-12 pull-left">
                     <div class="row">
                     <h4>Item Details</h4>
                     <div class="col-lg-12 col-xs-12 item-details">
                        <div class="row">
                           <div class="col-lg-12 shipment-top">
                              <div class="row">
                        <div class="col-lg-6 pull-left shipment">
                           <p>Shipment (<?php echo $this->madmin->count_listallcart(1);?> items)</p>

                        </div>
                        <div class="col-lg-6 pull-left">
                          <a href="<?php echo site_url('user/cart'); ?>">
                          <button type="button" class="btn btn-primary"><b>Change Data</b></button>
                        </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 item-details-list">
                        <p>Items list</p>
                        <?php
          $listcartbyid = $this->madmin->listcartbyid();
          foreach ($listcartbyid as $cartArray) {
            $cart_id = $cartArray->cart_id;
            ?>
                        <div class="items-list">
                           <span class="pull-left"><?php echo $cartArray->cname; ?></span>
                           <span class="pull-right">Qty - <?php echo $cartArray->cqty; ?></span>
                        </div>
                      <?php } ?>
                  </div>
                     </div>
                  </div>
                  </div>
                  </div>


                  <div class="col-lg-12 pull-left">
                     <div class="row">
                  <h4>Billing Information</h4>
                  <div class="col-lg-12 delivery-to">
                    <?php
                      $listaddressbyid = $this->madmin->listaddressbyid();
                      foreach ($listaddressbyid as $listaddressbyidArray) { ?>
                    <p class=""><b class="media-left">Name -</b>
                      <?php echo $listaddressbyidArray->fullname; ?></p>

                      <p class=""><b class="media-left">Email -</b>
                        <?php echo $user_email; ?></p>
                        <p class=""><b class="media-left">Mobile -</b>
                          <?php echo $listaddressbyidArray->mno; ?></p>
                        <?php } ?>
                    <?php
                      $listaddressbyid = $this->madmin->listaddressbyid();
                      foreach ($listaddressbyid as $listaddressbyidArray) { ?>

                     <p><b class="media-left">Address -</b>
                     <span class="media-right"> <?php echo $listaddressbyidArray->user_address; ?>, <?php echo $listaddressbyidArray->user_landmark; ?></span>, <?php echo $listaddressbyidArray->user_city; ?> , <?php echo $listaddressbyidArray->user_state; ?>, <?php echo $listaddressbyidArray->user_pincode; ?></p>
                               <?php } ?>
                        <div class="form-check">

</div>

                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".address-popup"><b>Change Address</b></button>
                 </div>
               </div>
            </div>

            </div>

            <div class="col-lg-4 col-xs-12 cart-box-right pull-left">
               <h4>Price Details</h4>
               <div class="cart-right-inner pull-left">
                 <?php
                 $listcartbyid = $this->madmin->listcartbyid();
                 $totalPrice = 0;

                 foreach ($listcartbyid as $cartArray) {
                     $cart_id = $cartArray->cart_id;

                     // Multiply cqty with cprice for each cart item
                     $itemTotal = $cartArray->cqty * $cartArray->cprice;

                     // Accumulate the total value
                     $totalPrice += $itemTotal;
                 }
                 ?>

                  <div class="all-total">
                     <input type="hidden" name="check-out-subtotal" id="check-out-subtotal" value="245">
                     <div class="sub-total">
                        <span class="pull-left">Subtotal</span>
                        <span class="pull-right">₹ <?php echo $totalPrice; ?></span>
                     </div>
                     <div class="sub-total">
                        <span class="pull-left">Shipping Charges</span>
                        <span class="pull-right green">- ₹0</span>
                     </div>
                     <!-- <div class="sub-total">
                        <span class="pull-left">Additional Discount</span>
                        <span class="pull-right">- ₹0</span>
                     </div> -->
                     <div class="sub-total">
                        <span class="pull-left"><b>Total</b></span>
                        <span class="pull-right"><b>₹ <?php echo $totalPrice; ?></b></span>
                     </div>


                     <div class="to-pay">
<form action="<?php echo site_url('user/check'); ?>" method="post" enctype="multipart/form-data">
  <?php
    $listaddressbyid = $this->madmin->listaddressbyid();
    foreach ($listaddressbyid as $listaddressbyidArray) { ?>
  <input type="hidden" class="form-control" value="<?php echo $listaddressbyidArray->user_address; ?>,<?php echo $listaddressbyidArray->user_landmark; ?>,<?php echo $listaddressbyidArray->user_city; ?>,<?php echo $listaddressbyidArray->user_state; ?>,<?php echo $listaddressbyidArray->user_pincode; ?>" name="user_address" id="user_address">
<?php } ?>
<input type="hidden" name="payble_amount" value="<?php echo $totalPrice; ?>">
<?php
$listcartbyid = $this->madmin->listcartbyid();
foreach ($listcartbyid as $cartArray) {
$cart_id = $cartArray->cart_id;
?>
<?php
$listcartbyid = $this->madmin->listcartbyid();
foreach ($listcartbyid as $cartArray) {
$cart_id = $cartArray->cart_id;
?>
<input type="hidden" name="cname" value="<?php echo $cartArray->cname; ?>, <?php echo $cartArray->cqty; ?>">
<?php } ?>
<input type="hidden" name="pid" value="<?php echo $cartArray->pid; ?>">
<input type="hidden" name="cart_id" value="<?php echo $cartArray->cart_id; ?>">
<?php } ?>

<a href="<?php echo site_url('user/payment2'); ?>"><button type="submit" class="btn btn-primary" target="_blank">Proceed To Pay</button></a>
  </form>
                     </div>
               </div>
            </div>


         <!-- </div> -->
      </div>
   </div>
</section>



<div class="modal fade address-popup" id="add-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">


  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
         <h3 class="text-center">Add Delivery Address</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="<?php echo base_url(); ?>assets/images/close.png">
        </button>
      </div>
<form action="<?php echo site_url('user/edit_login/'.sha1(md5($user_id))); ?>" method="post" enctype="multipart/form-data">
  <?php
    $listaddressbyid = $this->madmin->listaddressbyid();
    foreach ($listaddressbyid as $listaddressbyidArray) { ?>
      <div class="col-lg-6 col-md-6 col-xs-12 pull-left">
        <label for="fullname">Full Name</label>
        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your Full name" value="<?php echo !empty($listaddressbyidArray->fullname) ? $listaddressbyidArray->fullname : ''; ?>">
     </div>

     <div class="col-lg-6 col-md-6 col-xs-12 pull-left">
       <label for="mno">Mobile Number</label>
       <input type="text" class="form-control" name="mno" id="mno" placeholder="Enter your Mobile Number" value="<?php echo !empty($listaddressbyidArray->mno) ? $listaddressbyidArray->mno : ''; ?>">
    </div>

       <div class="col-lg-6 col-md-6 col-xs-12 pull-left">
         <label for="user_address">Address</label>
         <input type="text" class="form-control" name="user_address" id="user_address" placeholder="Enter your Address" value="<?php echo !empty($listaddressbyidArray->user_address) ? $listaddressbyidArray->user_address : ''; ?>">
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12 pull-left">
         <label for="user_landmark">Landmark</label>
         <input type="text" class="form-control" name="user_landmark" id="user_landmark" placeholder="Enter your Landmark" value="<?php echo !empty($listaddressbyidArray->user_landmark) ? $listaddressbyidArray->user_landmark : ''; ?>">
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12 pull-left">
         <label for="user_pincode">Pincode</label>
         <input type="number" class="form-control" id="user_pincode" placeholder="Enter your Pincode" name="user_pincode" value="<?php echo !empty($listaddressbyidArray->user_pincode) ? $listaddressbyidArray->user_pincode : ''; ?>">
      </div>
      <div class="col-lg-3 col-md-3 col-xs-12 pull-left">
         <label for="user_city">City</label>
         <input type="text" class="form-control" id="user_city" placeholder="Enter your City" name="user_city" value="<?php echo !empty($listaddressbyidArray->user_city) ? $listaddressbyidArray->user_city : ''; ?>">
      </div>
       <div class="col-lg-3 col-md-3 col-xs-12 pull-left">
         <label for="user_state">State</label>
         <input type="text" class="form-control" id="user_state" placeholder="Enter your State" name="user_state" value="<?php echo !empty($listaddressbyidArray->user_state) ? $listaddressbyidArray->user_state : ''; ?>">
      </div>

      <div class="col-lg-12 text-center pull-left ">
         <div class="row justify-content-center">
            <div class="col-lg-6 address-save">
               <button type="submit" class="btn btn-primary">Continue</button>
            </div>
         </div>
      </div>
    <?php } ?>
</form>
    </div>
  </div>
</div>





<?php
$this->load->view('user/include/footer');
$this->load->view('user/include/html-bot');
?>
