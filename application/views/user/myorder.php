<?php
$this->load->view('user/include/html-top');
$this->load->view('user/include/header');
?>


     <div class="col-lg-12 col-xs-12 pull-left">
      <div class="container">
         <ul class="breadcrumb store-breadcrumb">
            <li><a href="/" title="Home">Home</a></li>
            <li><a href="/" title="My Orders">My Orders</a></li>
            </ul>
      </div>
   </div>


   <section class="col-lg-12 order-details">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-xs-12">
              <div class="order-bg">
                         <div class="order-title-new clearfix">
                             <h6 class="float-left"><b>Order Timing -</b> December 19, 2023 05:18 </h6> <h6 class="float-right"><b>Delivery Timing -</b> 06AM  TO 09AM </h6>
                         </div>
                         <div class="order-body">
                             <ul class="order-dtsll">
                                 <li>
                                     <div class="order-dt-img">
                                         <img src="<?php echo base_url(); ?>assets/images/fashion/men-3.png" alt="">
                                     </div>
                                 </li>
                                 <li>
                                     <div class="order-right">
                                         <h4>Order ID : 11</h4>
                                         <p>Status : Received</p>
                                         <p>Payment Method : CASH ON DELIVERY</p>
                                     </div>
                                 </li>
                             </ul>
                             <div class="total-dt">
                                 <div class="total-checkout-group">
                                     <div class="cart-total-dil pt-3">
                                         <h4>Delivery Charges </h4>
                                         <span>₹0</span>
                                     </div>
                                 </div>
                                 <div class="main-total-cart">
                                     <h2>Total </h2>
                                     <span>₹600</span>
                                 </div>
                             </div>

                             <div class="call-bill">
                                 <div class="order-bill-slip">
                                     <a href="<?php echo site_url('user/invoice'); ?>" class="bill-btn5 hover-btn">View Bill </a>
                                 </div>
                             </div>
                         </div>
                     </div>
            </div>




         </div>
      </div>
   </section>




<?php
$this->load->view('user/include/footer');
$this->load->view('user/include/html-bot');
?>
