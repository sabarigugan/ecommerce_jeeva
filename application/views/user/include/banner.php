

<div class="col-lg-12 layout_padding2-bottom pull-left">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="last1" class="owl-carousel owl-theme">
          <?php
          $listbannerone = $this->madmin->listbannerone();
          foreach ($listbannerone as $index => $listbanneroneArray) {
          ?>
          <div class="item"><img src="<?php echo base_url(); ?>assets/images/banner/<?php echo $listbanneroneArray->bannerone_img; ?>" alt="sliderfirst-1"></div>
              <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
