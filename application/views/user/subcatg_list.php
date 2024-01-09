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
         <?php
         $listsubbynamebread = $this->madmin->listsubbynamebread($uri3_rpl);
         foreach ($listsubbynamebread as $listsubbynamebreadArray) {
           $sscatg_name = $listsubbynamebreadArray->sscatg_name;
           $pid = str_replace(' ', '-', $sscatg_name);
         ?>
         <li><a href="/" title="Women"><?php echo $listsubbynamebreadArray->catg_name; ?></a></li>
             <?php } ?>
         <li><?php echo $uri3_rpl; ?></li>
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
              $listsubbyname = $this->madmin->listsubbyname($uri3_rpl);
                if (empty($listsubbyname)):
                  ?>
                      <div class="col-lg-12">
                          <p>No products available for this category.</p>
                      </div>

                  <?php
                  else:
              foreach ($listsubbyname as $listsubbynameArray):
                $subcatg_name = $listsubbynameArray->subcatg_name;
              ?>
               <div class="col-lg-4 womendress">
                  <div class="item">
                     <div id="womendress1" class="carousel slide pull-left" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <a href="<?php echo site_url('user/produtbysubcatg/'. $pid); ?>">
                           <div class="carousel-item active">
                              <div class="client_container">
                                 <div class="detail-box">
                                    <img src="<?php echo base_url(); ?>assets/images/subsubcatg/<?php echo $listsubbynameArray->ssubcatg_img; ?>">
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
                        <h3><a href="<?php echo site_url('user/produtbysubcatg/'. $pid); ?>"><?php echo $listsubbynameArray->sscatg_name; ?></a></h3>
                        <!-- <ol class="carousel-indicators">
                           <li data-target="#womendress1" data-slide-to="0" class="red active">
                              <img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png">
                           </li>
                           <li data-target="#womendress1" data-slide-to="1" class="yellow">
                              <img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png">
                           </li>
                           <li data-target="#womendress1" data-slide-to="2" class="green">
                              <img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png">
                           </li>
                           <li data-target="#womendress1" data-slide-to="3" class="magenta">
                              <img src="<?php echo base_url(); ?>assets/images/fashion/tick-small.png">
                           </li>
                           <button type="button" class="btn btn-default">More</button>
                        </ol> -->
                     </div>

                     <a href="<?php echo site_url('user/produtbysubcatg/'. $pid); ?>">
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
