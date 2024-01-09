<?php
$this->load->view('user/include/html-top');
$this->load->view('user/include/header');
$uri3 = $this->uri->segment(3);
$uri3_rpl = str_replace('-', ' ', $uri3);
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
        <?php
        $this->load->view('user/include/navi');
        ?>
         <div class="col-lg-9 col-xs-12 pull-left product-inner-right">
            <div class="row">
              <?php
              $listbrandbyname = $this->madmin->listbrandbyname($uri3_rpl);
                if (empty($listbrandbyname)):
                  ?>
                      <div class="col-lg-12">
                          <p>No products available for this Brand.</p>
                      </div>

                  <?php
                  else:
              foreach ($listbrandbyname as $listbrandbynameArray):
                $pid = $listbrandbynameArray->pid;
              ?>
               <div class="col-lg-4 womendress">
                  <div class="item">
                     <div id="womendress1" class="carousel slide pull-left" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <a href="<?php echo site_url('user/product/'. $pid); ?>">
                           <div class="carousel-item active">
                              <div class="client_container">
                                 <div class="detail-box">
                                   <?php
$databaseImageSource = $listbrandbynameArray->pimg;

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
                           <div class="carousel-item">
                              <div class="client_container">
                                 <div class="detail-box">
                                    <img src="<?php echo base_url(); ?>assets/images/fashion/new-2.png">
                                 </div>
                              </div>
                           </div>
                        </a>
                        </div>
                        <h3><a href="<?php echo site_url('user/product/'. $pid); ?>"><?php echo $listbrandbynameArray->pname; ?></a></h3>

                     </div>
                     <h4>₹ <?php echo $listbrandbynameArray->pofferprice; ?></h4>

                    <a href="<?php echo site_url('user/product/'. $pid); ?>">
                     <button type="button" class="btn btn-primary">View Detail</button>
                   </a>
                  </div>
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
