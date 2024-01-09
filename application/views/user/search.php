<?php
$this->load->view('user/include/html-top');
$this->load->view('user/include/header');
$uri3 = $this->uri->segment(3);
// $uri3_rpl = str_replace('-', ' ', $uri3);
?>

<div class="col-lg-12 col-xs-12 pull-left">
   <div class="container">

      <ul class="breadcrumb store-breadcrumb">
         <li><a href="/" title="Home">Home</a></li>
         <li><a href="/" title="Women"><?php echo $uri3; ?></a></li>
      </ul>

   </div>
</div>

<div class="col-lg-12 col-xs-12 pull-left product-list-inner">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-xs-12 pull-left ">
            <div class="product-inner-left">
               <div class="sort3-left">
                  <div class="flip3">Collections</div>
                  <div class="collections">
                    <?php
                    $listcatg = $this->madmin->listcatg();
                    foreach ($listcatg as $index => $listcatgArray) {
                      $allcatg = $listcatgArray->catg_name;
                      $catgstr = str_replace(' ', '-', $allcatg);
                    ?>
                      <a href="<?php echo site_url('user/product_list/' . $catgstr); ?>">
                     <div class="selection">
                        <label for="Athleisure"><?php echo $listcatgArray->catg_name; ?></label>
                     </div>
                   </a>
                   <?php } ?>
                  </div>
               </div>
               <!-- =====================================size================================== -->
               <!-- <div class="sort3-left">
                  <div class="flip3">Size</div>
                  <div class="size">
                     <div class="selection1">
                        <input id="pizza" name="hungry" type="radio">
                        <label for="pizza">S</label>
                     </div>
                     <div class="selection1">
                        <input id="burger" name="hungry" type="radio">
                        <label for="burger">M</label>
                     </div>
                     <div class="selection1">
                        <input id="bread" name="hungry" type="radio">
                        <label for="bread">L</label>
                     </div>
                     <div class="selection1">
                        <input id="bread2" name="hungry" type="radio">
                        <label for="bread2">XL</label>
                     </div>
                     <div class="selection1">
                        <input id="bread3" name="hungry" type="radio">
                        <label for="bread3">XXL</label>
                     </div>
                  </div>
               </div> -->
               <!-- ================================price range============================== -->
               <!-- <div class="sort3-left price-range-left">
                  <div class="flip3">Price Range</div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div id="slider-range"></div>
                     </div>
                  </div>
                  <div class="row slider-labels">
                     <div class="col-lg-6 col-xs-6 caption">
                        <span id="slider-range-value1"></span>
                     </div>
                     <div class="col-lg-6 col-xs-6 text-right caption">
                        <span id="slider-range-value2"></span>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <form>
                           <input type="hidden" name="min-value" value="">
                           <input type="hidden" name="max-value" value="">
                        </form>
                     </div>
                  </div>
               </div> -->
               <!-- =============color ============== -->
               <!-- <div class="sort3-left filter-color">
                  <div class="flip3">Color</div>
                  <div class="pull-left">
                     <input type="radio" id="color01" name="radio" />
                     <label for="color01"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color02" name="radio" />
                     <label for="color02"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color03" name="radio" />
                     <label for="color03"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color04" name="radio" />
                     <label for="color04"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color05" name="radio" />
                     <label for="color05"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color06" name="radio" />
                     <label for="color06"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color07" name="radio" />
                     <label for="color07"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color08" name="radio" />
                     <label for="color08"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color09" name="radio" />
                     <label for="color09"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color10" name="radio" />
                     <label for="color10"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
                  <div class="pull-left">
                     <input type="radio" id="color11" name="radio" />
                     <label for="color11"><span><img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png"></span></label>
                  </div>
               </div> -->
               <!-- =============== color END============= -->
               <div class="sort3-left">
                  <div class="flip3">Brands</div>
                  <div class="brands">
                    <?php
                    $listbrand = $this->madmin->listbrand();
                    foreach ($listbrand as $index => $listbrandArray) {
                      $brandname = $listbrandArray->brand_name;
                      $brand = str_replace(' ', '-', $brandname);
                    ?>
                    <a href="<?php echo site_url('user/brand_list/' . $brand); ?>">
                     <div class="selection2">
                        <label for="brands1"><?php echo $listbrandArray->brand_name; ?></label>
                     </div>
                   </a>
                   <?php } ?>

                  </div>
               </div>
               <!-- ========================== Brands END============================ -->
               <!-- <div class="sort3-left">
                  <div class="flip3">Pack / Multipacks</div>
                  <div class="multipacks">
                     <div class="selection3">
                        <input id="pack1" name="hungry" type="radio">
                        <label for="pack1">Pack On 1 </label>
                     </div>
                     <div class="selection3">
                        <input id="pack2" name="hungry" type="radio">
                        <label for="pack2">Pack On 3</label>
                     </div>
                       <div class="selection3">
                        <input id="pack3" name="hungry" type="radio">
                        <label for="pack3">Markwood</label>
                        </div>
                  </div>
               </div> -->
               <!-- ================================ Pack / Multipacks END=================================== -->
            </div>
         </div>
         <div class="col-lg-9 col-xs-12 pull-left product-inner-right">
    <div class="row">
        <?php
        if (empty($search_results)):
            // Display products based on the existing logic

            $listproductbyname = $this->madmin->listproductbyname($uri3_rpl);

            if (empty($listproductbyname)):
        ?>
                <div class="col-lg-12">
                    <p>No products available for this category.</p>
                </div>
        <?php
            else:
                foreach ($listproductbyname as $listproductbynameArray):
                    $pid = $listproductbynameArray->pid;
        ?>
                    <div class="col-lg-4 womendress">
                        <!-- Existing product display logic -->

                        <!-- Use your existing code to display product details -->
                        <!-- ... -->

                        <h3><a href="<?php echo site_url('user/product/'. $pid); ?>"><?php echo $listproductbynameArray->pname; ?></a></h3>
                        <h4>₹ <?php echo $listproductbynameArray->pofferprice; ?></h4>
                        <a href="<?php echo site_url('user/product/'. $pid); ?>">
                            <button type="button" class="btn btn-primary">View Detail</button>
                        </a>
                    </div>
        <?php
                endforeach;
            endif;
        else:

            foreach ($search_results as $search_result):
                $pid = $search_result->pid;
        ?>
                <div class="col-lg-4 womendress">
                      <div class="item">
                          <div id="womendress1" class="carousel slide pull-left" data-ride="carousel" data-interval="false">
                              <div class="carousel-inner">
                                  <a href="<?php echo site_url('user/product/'. $pid); ?>">
                                      <div class="carousel-item active">
                                          <div class="client_container">
                                              <div class="detail-box">
                                                  <img src="<?php echo base_url(); ?>assets/images/product/<?php echo $listproductbynameArray->pimg; ?>">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="carousel-item">
                                          <div class="client_container">
                                              <div class="detail-box">
                                                  <img src="<?php echo base_url(); ?>assets/images/fashion/new-2.png">
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                              </div>


                    <h3><a href="<?php echo site_url('user/product/'. $pid); ?>"><?php echo $search_result->pname; ?></a></h3>
                    <h4>₹ <?php echo $search_result->pofferprice; ?></h4>
                    <a href="<?php echo site_url('user/product/'. $pid); ?>">
                        <button type="button" class="btn btn-primary">View Detail</button>
                    </a>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</div>

      </div>
   </div>
</div>

<?php
$this->load->view('user/include/footer');
$this->load->view('user/include/html-bot');
?>
