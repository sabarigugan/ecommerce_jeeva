<?php
$this->load->view('user/include/html-top');
$this->load->view('user/include/header');
$uri3 = $this->uri->segment(3);
$uri3_rpl = str_replace('-', ' ', $uri3);
?>

<?php
$listproductbyid = $this->madmin->listproductbyid($uri3_rpl);
foreach ($listproductbyid as $listproductbyidArray) {
  $pid = $listproductbyidArray->pid;
  $mrp = $listproductbyidArray->pprice;
  $psubsubcatg = $listproductbyidArray->psubsubcatg;
  $discountedPrice = $listproductbyidArray->pofferprice;
  $discountPercentage = round((($mrp - $discountedPrice) / $mrp) * 100);

?>
     <div class="col-lg-12 col-xs-12 pull-left">
      <div class="container">
         <ul class="breadcrumb store-breadcrumb">
            <li><a href="/" title="Home">Home</a></li>
            <li><a href="/" title="Women"><?php echo $listproductbyidArray->pcatg; ?></a></li>
            <li><a href="/" title="Tank Tops"><?php echo $listproductbyidArray->psubcatg; ?></a></li>
            <li><a href="/" title="Women's Elastane Relaxed Fit Tank Top"><?php echo $listproductbyidArray->pname; ?></a></li>
         </ul>
      </div>
   </div>


   <section class="col-lg-12 product-details">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-xs-12">
               <div class="product-details-left">
                  <p class="circle-top"><img src="<?php echo base_url(); ?>assets/images/fashion/off.png"></p>
                  <?php
$databaseImageSource = $listproductbyidArray->pimg;

$imageArray = explode(',', $databaseImageSource);

// Display only the first image
if (!empty($imageArray)) {
$firstImage = trim($imageArray[0]);
$imageSource = base_url('assets/images/product/' . $firstImage);
echo '<img class="thumb-zoom" src="' . $imageSource . '" />';
} else {
// If there are no images in the array, you can show a placeholder or handle it accordingly
echo 'No image available';
}
?>
          
               </div>
            </div>
            <div class="col-lg-7 col-xs-12" id="productOptions">
               <div class="product-details-right">
                  <div class="col-lg-12 col-xs-12 price-inner-top-botm">
                     <div class="row">
                        <div class="col-lg-12 col-xs-12">
                        <div class="product-brand">
                     <p>Brand - <span><b><?php echo $listproductbyidArray->pbrand; ?></b></span></p>
                  </div>
               </div>
               <div class="col-lg-8 col-xs-12 pull-left product-title">

                  <h2><?php echo $listproductbyidArray->pname; ?></h2>
               </div>
               <div class="col-lg-4 col-xs-12 pull-left product-subtitle">
                  <div class="price-inner-top">
                     <p>₹ <?php echo $listproductbyidArray->pofferprice; ?></p>
                  </div>
                  <div class="price-inner-bottom">
                      <p class="price">MRP <span style="color:#000;text-decoration: line-through;">RS,<?php echo $listproductbyidArray->pprice; ?></span>
                     <span>(<?php echo $discountPercentage; ?>% OFF)</span>
                        </p>
                  </div>
               </div>


            </div>
         </div>
<form action="<?php echo site_url('user/add_cart'); ?>" method="post" enctype="multipart/form-data">
         <div class="col-lg-12 col-xs-12 pull-left mt-2">
                                  <div class="product-size pull-left">
                                    <div class="size-select">
                        <b>Select Size</b>
                        <a href="#">Size Chart</a>
                     </div>
                           <div class="size-chart">
                            <input id="size-chart1" name="csize" value="S" type="radio" required>
                            <label for="size-chart1">S</label>
                          </div>
                          <div class="size-chart">
                            <input id="size-chart2" name="csize" value="M" type="radio" required>
                            <label for="size-chart2">M</label>
                          </div>
                          <div class="size-chart">
                            <input id="size-chart3" name="csize" value="L" type="radio" required>
                            <label for="size-chart3">L</label>
                          </div>
                          <div class="size-chart">
                            <input id="size-chart4" name="csize" value="XL" type="radio" required>
                            <label for="size-chart4">XL</label>
                          </div>
                     </div>
            </div>

               <div class="col-lg-12 qty-number pull-left">
                  <div class="row">

                    <div class="col-lg-4 col-12">
    <div class="qty-number-head">
        <b>Select Quantity</b>
    </div>
    <div class="input-group">
        <span class="input-group-btn">
            <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="cqty">
                <img src="<?php echo base_url(); ?>assets/images/fashion/qty-2.png">
            </button>
        </span>
        <input type="text" name="cqty" class="form-control input-number" value="1" id="cqty">
        <span class="input-group-btn">
            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="cqty">
                <img src="<?php echo base_url(); ?>assets/images/fashion/qty-1.png">
            </button>
        </span>
    </div>
</div>
         </div>
               </div>

  <input type="hidden" name="cname" class="form-control input-number" value="<?php echo $listproductbyidArray->pname; ?>" id="cname">
    <input type="hidden" name="pid" class="form-control input-number" value="<?php echo $listproductbyidArray->pid; ?>" id="pid">
  <input type="hidden" name="cprice" class="form-control input-number" value="<?php echo $listproductbyidArray->pofferprice; ?>" id="cprice">
  <input type="hidden" name="cmrp" class="form-control input-number" value="<?php echo $listproductbyidArray->pprice; ?>" id="cmrp">


               <div class="col-lg-12 three-btn pull-left">
                  <div class="row">
                    <?php if (!empty($this->session->userdata('user_login')['user_id'])) : ?>
                   <div class="col-lg-4">
                      <button type="submit" class="btn btn-primary button-add-cart3">
                        <!-- <a href="cart.html"> -->
                           <img src="<?php echo base_url(); ?>assets/images/fashion/light_cart.png">Add to cart</button>
                        <!-- </a> -->
                   </div>

                 </form>
<?php else : ?>
  <div class="col-lg-4">
     <button type="button" class="btn btn-primary button-add-cart2" data-toggle="modal" data-target="#login">
     <img src="<?php echo base_url(); ?>assets/images/fashion/play.png">Buy Now</button>
  </div>
  <div class="col-lg-4">
     <button type="button" class="btn btn-primary button-add-cart3" data-toggle="modal" data-target="#login">
          <img src="<?php echo base_url(); ?>assets/images/fashion/light_cart.png">Add to cart</button>
  </div>

  <?php endif; ?>

                   <div class="col-lg-12">
                   <p><img src="<?php echo base_url(); ?>assets/images/green.png">Safe and Secure payments.100% Authentic products</p>
                </div>
                  </div>
               </div>

            </div>



            <div class="col-lg-12 col-xs-12 specifications pull-left">
<ul class="nav nav-tabs">
 <li class=""><a data-toggle="tab" href="#specifi1" class="active">Product Features</a></li>
 <!-- <li><a data-toggle="tab" href="#specifi2">Washing Instructions</a></li> -->
</ul>

<div class="tab-content">
<div id="specifi1" class="tab-pane fade in active">
   <ul class="">
      <li><?php echo $listproductbyidArray->pspecify; ?></li>
   </ul>
</div>
 <div id="specifi2" class="tab-pane fade">
   <ul class="">
      <li>Tencel™ Lyocell Elastane Stretch Fabric</li>
      <li>Fabric Composition : Environment Friendly Lyocell Fiber and Elastane</li>
      <li>Natural StayFresh Anti-Microbial Properties to Keep You Fresh Throughout the Day</li>
      <li>Yolk Back Styling</li>
      <li>Relaxed Fit</li>
      <li>Label Free for All Day Comfort</li>
   </ul>
 </div>


</div>

               <div class="specifications-botm pull-left">
                  <ul class="list-unstyled">
                     <li><img src="<?php echo base_url(); ?>assets/images/fashion/cod-4.png">Secure payments</li>
                     <li><img src="<?php echo base_url(); ?>assets/images/fashion/cod-3.png">7 days return</li>
                     <li><img src="<?php echo base_url(); ?>assets/images/fashion/cod-2.png">Genuine products</li>
                     <li><img src="<?php echo base_url(); ?>assets/images/fashion/cod-1.png">Pay on delivery</li>
                  </ul>

               </div>
            </div>
          </div>
          <!-- <hr style="border-top: dotted 1px;" /> -->

         </div>
      </div>
   </section>

   <section class="col-lg-12 layout_padding2-bottom pull-left">
<div class="container">
  <div class="recommend-product-top ">
  <h2 class="" style="margin-bottom: 15px;">Recommended for You</h2>

      <div class="row">
        <!-- <div class="col-lg-12"> -->
          <div id="recommend" class="owl-carousel owl-theme">
            <?php
            $listproductbysubsub = $this->madmin->listproductbysubsub($psubsubcatg);
            foreach ($listproductbysubsub as $listproductbysubsubArray) {

          ?>
<div class="item">
<div class="recommend-product">
  <div id="recommend1" class="carousel slide pull-left" data-ride="carousel" data-interval="false">
     <div class="carousel-inner">
        <div class="carousel-item active">
           <div class="client_container">
              <div class="detail-box">
                <?php
        $databaseImageSource = $listproductbysubsubArray->pimg;

        $imageArray = explode(',', $databaseImageSource);

        // Display only the first image
        if (!empty($imageArray)) {
            $firstImage = trim($imageArray[0]);
            $imageSource = base_url('assets/images/product/' . $firstImage);
            echo '<img src="' . $imageSource . '" />';
        } else {
            // If there are no images in the array, you can show a placeholder or handle it accordingly
            echo 'No image available';
        }
        ?>
              </div>
           </div>
        </div>
     </div>
     <h3><a href="#"> <?php echo $listproductbysubsubArray->pname; ?>  </a></h3>
     <!-- <ol class="carousel-indicators">
        <li data-target="#recommend1" data-slide-to="0" class="red active">
           <img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png">
        </li>
        <li data-target="#recommend1" data-slide-to="1" class="yellow">
           <img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png">
        </li>
        <li data-target="#recommend1" data-slide-to="2" class="green">
           <img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png">
        </li>
        <li data-target="#recommend1" data-slide-to="3" class="magenta">
           <img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png">
        </li>
        <button type="button" class="btn btn-default">More</button>
     </ol> -->
  </div>
  <h4>₹ <?php echo $listproductbysubsubArray->pofferprice; ?></h4>
  <button type="button" class="btn btn-primary">View Product</button>
</div>
</div>
<?php } ?>


          </div>
        <!-- </div> -->
      </div>
    <!-- </div> -->
  </div>
</div>
</section>

<?php } ?>



<?php
$this->load->view('user/include/footer');
$this->load->view('user/include/html-bot');
?>
