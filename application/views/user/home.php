<?php
$this->load->view('user/include/html-top');
$this->load->view('user/include/header');
$this->load->view('user/include/banner');
$this->load->view('user/include/explore');
?>

<div class="col-lg-12 layout_padding2-bottom pull-left">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="last2" class="owl-carousel owl-theme">
          <?php
          $listbannerrandom = $this->madmin->listbannerrandom();
          foreach ($listbannerrandom as $index => $listbannerrandomArray) {
          ?>
          <div class="item"><img src="<?php echo base_url(); ?>assets/images/banner/<?php echo $listbannerrandomArray->bannerone_img; ?>" alt="sliderfirst-2"></div>
         <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div><!-- ====================================slidersecond END=========================================== -->

<!--
 <section class="col-lg-12 client_section layout_padding2-bottom"  data-aos="fade-bottom" data-aos-delay="100">
         <div class="container"> -->
  <!--
            <div id="newarrival1" class="col-lg-4 carousel slide pull-left" data-ride="carousel" data-interval="false">
               <ol class="carousel-indicators">
                  <li data-target="#newarrival1" data-slide-to="0" class="red active"></li>
                  <li data-target="#newarrival1" data-slide-to="1" class="yellow"></li>
                  <li data-target="#newarrival1" data-slide-to="2" class="green"></li>
                  <li data-target="#newarrival1" data-slide-to="3" class="magenta"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-1.png">
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
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-1.png">
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-1.png">
                        </div>
                     </div>
                  </div>

               <div class="new-text">
                  <a href="#"> Tank Top
                     <img src="<?php echo base_url(); ?>assets/images/fashion/arrow-up.png">
                  </a>
               </div>

               <div class="off-sale">
                <div class="pull-right off-sale-price"> ₹10,346 </div>
                  <img src="<?php echo base_url(); ?>assets/images/fashion/off.png">
               </div>

               </div>
            </div>

            <div id="newarrival2" class="col-lg-4 carousel slide pull-left" data-ride="carousel" data-interval="false">
               <ol class="carousel-indicators">
                  <li data-target="#newarrival2" data-slide-to="0" class="orange active"></li>
                  <li data-target="#newarrival2" data-slide-to="1" class="blue"></li>
                  <li data-target="#newarrival2" data-slide-to="2" class="green"></li>
                  <li data-target="#newarrival2" data-slide-to="3" class="magenta"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-2.png">
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-1.png">
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-1.png">
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-1.png">
                        </div>
                     </div>
                  </div>

               <div class="new-text">
                  <a href="#"> Long Dress
                     <img src="<?php echo base_url(); ?>assets/images/fashion/arrow-up.png">
                  </a>
               </div>

               <div class="off-sale">
                <div class="pull-right off-sale-price"> ₹6,346 </div>
                  <img src="<?php echo base_url(); ?>assets/images/fashion/off.png">
               </div>

               </div>
            </div>


            <div id="newarrival3" class="col-lg-4 carousel slide pull-left" data-ride="carousel" data-interval="false">
               <ol class="carousel-indicators">
                  <li data-target="#newarrival3" data-slide-to="0" class="magenta active"></li>
                  <li data-target="#newarrival3" data-slide-to="1" class="blue"></li>
                  <li data-target="#newarrival3" data-slide-to="2" class="red"></li>
                  <li data-target="#newarrival3" data-slide-to="3" class="yellow"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-2.png">
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-1.png">
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-1.png">
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                          <img src="<?php echo base_url(); ?>assets/images/fashion/new-1.png">
                        </div>
                     </div>
                  </div>

               <div class="new-text">
                  <a href="#"> Jacket
                     <img src="<?php echo base_url(); ?>assets/images/fashion/arrow-up.png">
                  </a>
               </div>

               <div class="off-sale">
                <div class="pull-right off-sale-price"> ₹8,346 </div>
                  <img src="<?php echo base_url(); ?>assets/images/fashion/off.png">
               </div>

               </div>
            </div> -->
  <!--
         </div>
      </section> -->
  <!-- Explore Our Best Deals -->
  <section class="col-lg-12 best-deals layout_padding2-bottom pull-left">
    <div class="container">
      <h2 class="text-center">New Arrival</h2>
      <div id="new" class="col-lg-12 owl-carousel owl-theme best-deals-carousel">
        <?php
        $listsubcatg = $this->madmin->listsubcatg();
        foreach ($listsubcatg as $index => $listsubcatgArray) {
          $subcatg_name = $listsubcatgArray->subcatg_name;
          $subcatg_name_rpl = str_replace(' ', '-', $subcatg_name);
        ?>
        <div class="item">
          <div id="newarrival1" class="carousel slide pull-left" data-ride="carousel" data-interval="false">
            <!-- <ol class="carousel-indicators" data-target="#newarrival1">
                <li data-target="#newarrival1" data-slide-to="0" class="red active"></li>
                  <li data-target="#newarrival1" data-slide-to="1" class="yellow"></li>
                  <li data-target="#newarrival1" data-slide-to="2" class="green"></li>
                  <li data-target="#newarrival1" data-slide-to="3" class="magenta"></li>
            </ol> -->
            <div class="carousel-inner">
              <a href="<?php echo site_url('user/subcatg_list/'. $subcatg_name_rpl); ?>">
              <div class="carousel-item active">
                <div class="client_container">
                  <div class="detail-box"><img src="<?php echo base_url(); ?>assets/images/subcatg/<?php echo $listsubcatgArray->subcatg_img; ?>" alt="new-1" style="width: 300px; height: 346px; object-fit: cover;"></div>
                </div>
              </div>
            </a>
              <div class="new-text">
                <a href="#"><?php echo $listsubcatgArray->subcatg_name; ?> <img src="<?php echo base_url(); ?>assets/images/fashion/arrow-up.png" alt="arrow-up"></a>
              </div>
              <div class="off-sale">
              <div class="pull-right off-sale-price">
              </div><img src="<?php echo base_url(); ?>assets/images/fashion/off.png" alt="off"></div>
            </div>
          </div>
        </div>
      <?php } ?>

      </div>
    </div>
  </section>
  <!--=================================== New Arrival END============================================ -->
  <div class="col-lg-12 pull-left p-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="last3" class="owl-carousel owl-theme">
            <?php
            $listbannerrandom = $this->madmin->listbannerrandom();
            foreach ($listbannerrandom as $index => $listbannerrandomArray) {
            ?>
            <div class="item"><img src="<?php echo base_url(); ?>assets/images/banner/<?php echo $listbannerrandomArray->bannerone_img; ?>" alt="sliderfirst-4"></div>

                <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- ===========================================last3 END============================================= -->

  <section class="col-lg-12 best-deals layout_padding2-bottom pull-left">
    <div class="container">
      <h2 class="text-center">Trending</h2>
      <div id="trend" class="col-lg-12 owl-carousel owl-theme best-deals-carousel">
        <?php
        $listallproduct = $this->madmin->listallproduct();
        foreach ($listallproduct as $index => $listallproductArray) {
        $pid = $listallproductArray->pid;
        ?>
        <div class="item">
          <div id="newarrival17" class="carousel slide pull-left" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <a href="<?php echo site_url('user/product/'.$pid); ?>">
              <div class="carousel-item active">
                <div class="client_container">
                  <div class="detail-box"><img src="<?php echo base_url(); ?>assets/images/product/<?php echo $listallproductArray->pimg; ?>" alt="new-1"></div>
                </div>
              </div>

            </a>
              <div class="new-text">
                <a href="<?php echo site_url('user/product/'.$pid); ?>"><?php echo $listallproductArray->pname; ?></a>
              </div>
              <div class="off-sale">
              <div class="pull-right off-sale-price">
                ₹ <?php echo $listallproductArray->pofferprice; ?>
              </div><img src="<?php echo base_url(); ?>assets/images/fashion/off.png" alt="off"></div>
            </div>
          </div>
        </div>
<?php } ?>
      </div>
    </div>
  </section>

  <!-- ==========================================Trending END============================= -->
  <section class="col-lg-12 best-deals layout_padding2-bottom pull-left">
    <div class="container">
      <h2 class="text-center">Play Video</h2>
      <div class="play-video justify-content-center">
        <div class="col-lg-offset-2 col-lg-8">
          <!-- <video width="100%" controls=""><source src="mov_bbb.mp4" type="video/mp4"> <source src="mov_bbb.ogg" type="video/ogg"> Your browser does not support HTML5 video.</video> -->
          <!-- <iframe width="100%" height="auto" src="https://youtu.be/O1PiTXZlEz0?si=Op5R8ZR9h5qGxyUI" frameborder="0" allowfullscreen></iframe> -->
          <div style="width: 100%; height: 407px;">
            <?php
            $listvideo = $this->madmin->listvideo();
            foreach ($listvideo as $index => $listvideoArray) {
            $video_id = $listvideoArray->video_id;
            ?>
    <iframe width="100%" height="100%" src="<?php echo $listvideoArray->video_link; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <?php } ?>
  </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =============================================play END=========================== -->
  <!-- ======================================= -->
  <section class="col-lg-12 best-deals layout_padding2-bottom pull-left">
    <div class="container">
      <h2 class="text-center" style="margin-bottom: 15px;">Costumer Reviews</h2>
      <div class="text-center">
        <p>What our costumer says about our product</p>
      </div>
      <div class="col-lg-12">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div id="client" class="owl-carousel owl-theme">
                <div class="item">
                  <div class="img-box"><img src="<?php echo base_url(); ?>assets/images/fashion/client1.png" alt="client1"></div>
                  <p class="testimonial text-center">Fashion paradise! Trendy styles, quality fabrics, and speedy delivery—my go-to for a wardrobe upgrade</p>
                  <p class="overview text-center"><b>- Adina Roy</b></p>
                </div>
                <div class="item">
                  <div class="img-box"><img src="<?php echo base_url(); ?>assets/images/fashion/client2.png" alt="client2"></div>
                  <p class="testimonial text-center">A seamless shopping experience from click to closet. Chic designs, great prices, and they nailed the fit!</p>
                  <p class="overview text-center"><b>- Suraj Naik</b></p>
                </div>
                <div class="item">
                  <div class="img-box"><img src="<?php echo base_url(); ?>assets/images/fashion/client3.png" alt="client3"></div>
                  <p class="testimonial text-center">Closet game strong thanks to this site! Stylish, affordable, and my package arrived earlier than expected</p>
                  <p class="overview text-center"><b>- Rohit Kumar</b></p>
                </div>
                <div class="item">
                  <div class="img-box"><img src="<?php echo base_url(); ?>assets/images/fashion/client1.png" alt="client1"></div>
                  <p class="testimonial text-center">Closet game strong thanks to this site! Stylish, affordable, and my package arrived earlier than expected</p>
                  <p class="overview text-center"><b>- Rohit Kumar</b></p>
                </div>
                <div class="item">
                  <div class="img-box"><img src="<?php echo base_url(); ?>assets/images/fashion/client2.png" alt="client2"></div>
                  <p class="testimonial text-center">Closet game strong thanks to this site! Stylish, affordable, and my package arrived earlier than expected</p>
                  <p class="overview text-center"><b>- Rohit Kumar</b></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--     <div class="col-lg-12 owl-slider3 layout_padding2-bottom">
         <div class="row">
            <div id="owl-slider" class="owl-carousel">
               <div class="item">
                  <div class="col-lg-12 carousel-caption text-start">
                     <div class="col-lg-5 carousel-caption-left pull-left">
                        <div class="caption-left-inner">
                           <div class="container">
                              <h2>Fire Hose Newage</h2>
                              <p>UpTo 80% Off</p>
                              <p><a class="btn btn-lg btn-primary" href="#">Shop Now</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="offset-lg-1 col-lg-6 pull-left">
                        <img src="<?php echo base_url(); ?>assets/images/slider-2.png">
                        <img src="<?php echo base_url(); ?>assets/images/slider-1.png">
                     </div>
                  </div>
                  <img src="<?php echo base_url(); ?>assets/images/slider-bg.jpg" alt="Owl Image">
               </div>
               <div class="item">
                  <div class="col-lg-12 carousel-caption text-start">
                     <div class="col-lg-5 carousel-caption-left pull-left">
                        <div class="caption-left-inner">
                           <div class="container">
                              <h2>Fire Hose Newage</h2>
                              <p>UpTo 80% Off</p>
                              <p><a class="btn btn-lg btn-primary" href="#">Shop Now</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="offset-lg-1 col-lg-6 pull-left">
                        <img src="<?php echo base_url(); ?>assets/images/slider-2.png">
                        <img src="<?php echo base_url(); ?>assets/images/slider-1.png">
                     </div>
                  </div>
                  <img src="<?php echo base_url(); ?>assets/images/slider-bg.jpg" alt="Owl Image">
               </div>
               <div class="item">
                  <div class="col-lg-12 carousel-caption text-start">
                     <div class="col-lg-5 carousel-caption-left pull-left">
                        <div class="caption-left-inner">
                           <div class="container">
                              <h2>Fire Hose Newage</h2>
                              <p>UpTo 80% Off</p>
                              <p><a class="btn btn-lg btn-primary" href="#">Shop Now</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="offset-lg-1 col-lg-6 pull-left">
                        <img src="<?php echo base_url(); ?>assets/images/slider-2.png">
                        <img src="<?php echo base_url(); ?>assets/images/slider-1.png">
                     </div>
                  </div>
                  <img src="<?php echo base_url(); ?>assets/images/slider-bg.jpg" alt="Owl Image">
               </div>
            </div>
         </div>
      </div> -->
  <!-- <div class="col-lg-12 why-shop layout_padding2-bottom">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h4>Why shop with us</h4>
               </div>
               <div class="col-lg-3">
                  <div class="why-shop-us">
                     <img src="<?php echo base_url(); ?>assets/images/shop-1.png">
                     <p>Wide Selection of Brands & Products</p>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="why-shop-us">
                     <img src="<?php echo base_url(); ?>assets/images/shop-2.png">
                     <p>Transparent & Competitive Pricing</p>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="why-shop-us">
                     <img src="<?php echo base_url(); ?>assets/images/shop-3.png">
                     <p>Fast & Ontime Delivery</p>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="why-shop-us">
                     <img src="<?php echo base_url(); ?>assets/images/shop-4.png">
                     <p>100% Authentic Products</p>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
  <!-- <div class="col-lg-12 top-brand layout_padding2">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h4>Top Brands</h4>
               </div>
               <div class="col-lg-12">
                  <div id="owl-brand" class="owl-carousel">
                     <div class="item">

                    <div class="img-box"><img src="/examples/<?php echo base_url(); ?>assets/images/clients/3.jpg" alt=""></div>
                    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                    <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>

                     </div>
                     <div class="item">

                    <div class="img-box"><img src="/examples/<?php echo base_url(); ?>assets/images/clients/3.jpg" alt=""></div>
                    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                    <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>

                     </div>
                     <div class="item">

                    <div class="img-box"><img src="/examples/<?php echo base_url(); ?>assets/images/clients/3.jpg" alt=""></div>
                    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                    <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>

                     </div>

                     <div class="item">

                    <div class="img-box"><img src="/examples/<?php echo base_url(); ?>assets/images/clients/3.jpg" alt=""></div>
                    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                    <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>

                     </div>


                     <div class="item">

                    <div class="img-box"><img src="/examples/<?php echo base_url(); ?>assets/images/clients/3.jpg" alt=""></div>
                    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                    <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>

                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div> -->
  <!--  <section class="col-lg-12 client_section ">
         <div class="container layout_padding2">
            <div class="heading_container text-center">
               <h4>
                  Testimonial's
               </h4>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                  <li data-target="#carouselExampleControls" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="col-lg-4 carousel-item active">
                     <div class="client_container">
                        <div class="detail-box">
                           <p>
                              “ They provided me the best fire extinguisher at bets price“
                           </p>
                           <h6>
                              -Rajiv Mehra
                           </h6>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                           <p>
                              “ They provided me the best fire extinguisher at bets price“
                           </p>
                           <h6>
                              -Rajiv Mehra
                           </h6>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_container">
                        <div class="detail-box">
                           <p>
                              “ They provided me the best fire extinguisher at bets price“
                           </p>
                           <h6>
                              -Rajiv Mehra
                           </h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
<?php
$this->load->view('user/include/footer');
$this->load->view('user/include/html-bot');
?>
