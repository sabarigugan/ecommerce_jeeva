<?php
$this->load->view('user/include/html-top');
$this->load->view('user/include/header');
$uri3 = $this->uri->segment(3);
$user_id = $this->session->userdata('user_login')['user_id'];
?>


<div class="col-lg-12 col-xs-12 step">
   <div class="container">
<div class="row smpl-step justify-content-center">
  <div class="col-lg-3 col-xs-3 col-4 smpl-step-step complete">
      <a class="smpl-step-icon"><img src="<?php echo base_url(); ?>assets/images/step-1.png"></a>

       <div class="text-center smpl-step-num">Cart</div>
  </div>

  <div class="col-lg-3 col-xs-3 col-4 smpl-step-step disabled">
      <a class="smpl-step-icon"><img src="<?php echo base_url(); ?>assets/images/step-2.png"></a>
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

  <h4>Cart Total Items - <?php echo $this->madmin->count_listallcart(1);?></h4>
                  <?php
  $listcartbyid = $this->madmin->listcartbyid();
  foreach ($listcartbyid as $cartArray) {
      $cart_id = $cartArray->cart_id;
      $mrp = $cartArray->cmrp;
      $discountedPrice = $cartArray->cprice;
      $discountPercentage = round((($mrp - $discountedPrice) / $mrp) * 100);
  ?>
      <div class="cart-list w-100">
          <div class="col-lg-3 col-xs-12 cart-img-list pull-left">
              <img src="<?php echo base_url(); ?>assets/images/product/<?php echo $cartArray->pimg; ?>">
          </div>
          <div class="col-lg-9 col-xs-12 cart-left-right pull-left">
              <div class="col-lg-12 cart-list-top">
                  <div class="row">
                      <div class="col-lg-8 cart-top-left">
                          <h5><?php echo $cartArray->cname; ?></h5>
                          <p></p>
                          <p class="cart-price">₹ <?php echo $cartArray->cprice; ?></p>
                          <p class="cart-off">MRP <span style="color:#000;text-decoration: line-through;">RS,<?php echo $cartArray->cmrp; ?></span>
                              <span>(<?php echo $discountPercentage; ?>% OFF)</span>
                          </p>
                      </div>
                      <div class="col-lg-4 cart-list-qty">
                          <h6>Select Quantity</h6>
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <button type="button" class="btn btn-default btn-number1" data-type="plus" data-field="cqty_<?php echo $cart_id; ?>">
                                      <img src="<?php echo base_url(); ?>assets/images/fashion/qty-01.png">
                                  </button>
                              </span>
                              <input type="text" name="cqty_<?php echo $cart_id; ?>" data-cart-id="<?php echo $cart_id; ?>" class="form-control input-number" value="<?php echo $cartArray->cqty; ?>" id="cqty_<?php echo $cart_id; ?>">

                              <!-- <input type="text" name="cqty_<?php echo $cart_id; ?>" class="form-control input-number" value="<?php echo $cartArray->cqty; ?>" id="cqty_<?php echo $cart_id; ?>"> -->
                              <span class="input-group-btn">
                                  <button type="button" class="btn btn-default btn-number1" data-type="minus" data-field="cqty_<?php echo $cart_id; ?>">
                                      <img src="<?php echo base_url(); ?>assets/images/fashion/qty-02.png">
                                  </button>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
              <p class="remove">
                  <?php
                  $status = $cartArray->status;
                  if ($status == 1) { ?>
                      <a href="<?php echo site_url('user/updateinternartstatus/2/' . $cart_id . ''); ?>"><img src="<?php echo base_url(); ?>assets/images/delete.png">Remove</a>
                  <?php } else { ?>
                      <a href="<?php echo site_url('user/updateinternartstatus/1/' . $cart_id . ''); ?>"><img src="<?php echo base_url(); ?>assets/images/delete.png">Remove</a>
                  <?php } ?>
              </p>
          </div>
      </div>
  <?php } ?>
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



                       <!--  <div class="sub-total">
                           <span class="pull-left">Sub Total</span>
                           <span class="pull-right"><span>₹ </span>245.00</span>
                        </div> -->
                        <!-- <div class="delivery-fee"><span class="pull-left">Delivery Charge</span> <span class="pull-right"><s><span>₹ </span>50.00</s></span></div><div class="total-amount"><span class="pull-left">Total Amount </span><span class="pull-right"><span>₹ </span>245.00</span></div><div id="check-out-min-err"></div><button id="button-checkout" type="button" class="btn">Proceed to Checkout</button> -->
                     </div>
                    <!--  <div class="saved">
                        <button type="button" class="btn btn-primary" >You saved ₹7,594 on this purchase</button>
                     </div> -->

                     <div class="to-pay">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".address-popup">Proceed To Pay</button>
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
