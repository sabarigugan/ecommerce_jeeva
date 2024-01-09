<div class="col-lg-12 header-top">
  <!-- <div class="row"> -->
  <header class="p-3 text-block">
    <!-- <div class="container"> -->
    <div class="align-items-center justify-content-center justify-content-lg-start">
      <div class="col-lg-2 col-6 logo">
        <a href="<?php echo site_url('user/index'); ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-block text-decoration-none"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo"></a>
      </div>
      <div class="col-lg-5 col-6 top-menu">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="nav nav-links">
          <li class="">
            <a href="<?php echo site_url('user/index'); ?>" class="nav-link text-block <?php echo (empty($this->uri->segment(2)) || $this->uri->segment(2) == 'index') ? 'active' : ''; ?>">Home</a>
          </li>
          <?php
          $listcatghead = $this->madmin->listcatghead();
          foreach ($listcatghead as $index => $listcatgheadArray) {
            $allcatg = $listcatgheadArray->catg_name;
            $catgstr = str_replace(' ', '-', $allcatg);
          ?>
          <li class="">
            <a href="<?php echo site_url('user/product_list/' . $catgstr); ?>" class="desktop-item nav-link text-block <?php echo ($this->uri->segment(2) == 'product_list' && $this->uri->segment(3) == $catgstr) ? 'active' : ''; ?>"><?php echo $listcatgheadArray->catg_name; ?></a>
            <div class="mega-box">
              <div class="content">
                <div class="row">
                  <?php
                  $listproductbycatg = $this->madmin->listproductbycatg($allcatg);
                  foreach ($listproductbycatg as $index => $listproductbycatgArray) {
                    $pid = $listproductbycatgArray->pid;
                  ?>
                  <a href="<?php echo site_url('user/product/'. $pid); ?>">
                  <img src="<?php echo base_url(); ?>assets/images/product/<?php echo $listproductbycatgArray->pimg; ?>" alt=""></a>
                <?php } ?>
                </div>
                <?php
                $listsubbycatg = $this->madmin->listsubbycatg($allcatg);
                foreach ($listsubbycatg as $index => $listsubbycatgArray) {
                ?>
                <div class="row mx-4">

                  <header><?php echo $listsubbycatgArray->subcatg_name; ?></header>

                  <ul class="mega-links">
                    <?php
                    $listsubsubbycatg = $this->madmin->listsubsubbycatg($allcatg);
                    foreach ($listsubsubbycatg as $index => $listsubsubbycatgArray) {
                      $sscatg_name = $listsubsubbycatgArray->sscatg_name;
                      $ssubcatg_name_rpl = str_replace(' ', '-', $sscatg_name);
                    ?>
                    <li><a href="<?php echo site_url('user/produtbysubcatg/'. $ssubcatg_name_rpl); ?>"><?php echo $listsubsubbycatgArray->sscatg_name; ?></a></li>
                  <?php } ?>

                  </ul>
                </div>
 <?php } ?>

              </div>
            </div>
          </li>
         <?php } ?>
        </ul>
      </div>
    </nav>


      </div>
      <div class="col-lg-5 header-top-right">

<form action="<?php echo site_url('user/search'); ?>" method="get" class="top-search col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
    <div class="input-group">
        <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <input type="text" name="query" id="searchInput" class="form-control" placeholder="Search Products">
        <div id="searchResults"></div>
    </div>
</form>

<script>
    $(document).ready(function() {
        $("#searchInput").on("input", function() {
            var query = $(this).val();
            if (query.length >= 2) {
                $.ajax({
                    url: "<?php echo site_url('user/fetch_search_results'); ?>",
                    method: "post",
                    data: { query: query },
                    success: function(data) {
                        $("#searchResults").html(data);
                    }
                });
            } else {
                $("#searchResults").html("");
            }
        });
    });
</script>
        <?php if (!empty($this->session->userdata('user_login')['user_id'])) : ?>
              <div class="text-end order">
                       <div class="login">
          <div id="top-profile" class="navbar navbar-static">

          <ul class="nav" role="navigation">
           <li class="dropdown">
            <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>assets/images/fashion/login.png"><span> <?php echo $this->session->userdata('user_login')['user_name']; ?></span> <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a tabindex="-1" href="<?php echo site_url('user/myorder'); ?>">My orders</a></li>
            <li><a tabindex="-1" href="<?php echo site_url('user/myprofile'); ?>">My Profile</a></li>
            <li><a tabindex="-1" href="<?php echo site_url('user/logout'); ?>">Logout</a></li>
          </ul>
          </li>
          </ul>

          </div>
           </div>
           <div class="cart-count">
              <a href="<?php echo site_url('user/cart'); ?>"><img src="<?php echo base_url(); ?>assets/images/cart.png" alt="cart"> <span id="cart-total"><?php echo $this->madmin->count_listallcart(1);?></span></a>
            </div>

        </div>
      <?php else : ?>
        <div class="text-end">
          <button type="button" class="btn btn-warning"><a href="" data-toggle="modal" data-target="#login">Log in</a>
          </button>
          <button type="button" class="btn btn-outline-dark"><a href="" data-toggle="modal" data-target="#signup">Sign up</a></button>
          <div class="cart-count">
            <a href="#"><img src="<?php echo base_url(); ?>assets/images/cart.png" alt="cart"> <span id="cart-total">0</span></a>
          </div>
        </div>

      <?php endif; ?>
      </div>
    </div><!-- </div> -->
  </header><!-- </div> -->
</div>
