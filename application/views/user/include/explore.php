<div class="col-lg-12 explore layout_padding2-bottom pull-left">
  <div class="container">
    <h2 class="text-center">Explore</h2>
    <?php
    $listexplore = $this->madmin->listexplore();
    foreach ($listexplore as $index => $listexploreArray) {
      $originalString = $listexploreArray->catg_name;
      $modifiedString = str_replace(' ', '-', $originalString);
    ?>
    <div class="col-lg-4 pull-left">
      <div class="explore-botm">
        <a href="<?php echo site_url('user/product_list/' . $modifiedString); ?>"><img src="<?php echo base_url(); ?>assets/images/catg/<?php echo $listexploreArray->catg_img; ?>" class="text-center" alt="explore-1">
        <div class="explore-text"><?php echo $listexploreArray->catg_name; ?>'s Collection <img src="<?php echo base_url(); ?>assets/images/fashion/arrow-up.png" alt="arrow-up"></div></a>
      </div>
    </div>
      <?php } ?>
    </div>
  </div>
</div><!-- ==================================== explore END ======================= -->
