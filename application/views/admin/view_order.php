<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                  <form action="#" method="post" enctype="multipart/form-data">
                            <div class = "row">
                            <div class="col-12">
                                <h4>View Order</h4>
                                <hr class="my-4">
                            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="catg_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name = "catg_name" id="catg_name" placeholder="Enter Category Name" value="<?= $cart['cname']; ?>"  disabled>
            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="catg_name" class="form-label">Product Price</label>
                <input type="text" class="form-control" name = "catg_name" id="catg_name" placeholder="Enter Category Name" value="<?= $cart['cprice']; ?>"  disabled>
            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="catg_name" class="form-label">Quantity</label>
                <input type="text" class="form-control" name = "catg_name" id="catg_name" placeholder="Enter Category Name" value="<?= $cart['cqty']; ?>"  disabled>
            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="catg_name" class="form-label">Size</label>
                <input type="text" class="form-control" name = "catg_name" id="catg_name" placeholder="Enter Category Name" value="<?= $cart['csize']; ?>"  disabled>
            </div>


            <div class="mb-3 col-12 col-md-6">
                <label for="catg_name" class="form-label">Client Name</label>
                <input type="text" class="form-control" name = "catg_name" id="catg_name" placeholder="Enter Category Name" value="<?= $cart['user_name']; ?>"  disabled>
            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="catg_name" class="form-label">Client Mobile</label>
                <input type="text" class="form-control" name = "catg_name" id="catg_name" placeholder="Enter Category Name" value="<?= $cart['user_phone']; ?>"  disabled>
            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="catg_name" class="form-label">Client Email</label>
                <input type="text" class="form-control" name = "catg_name" id="catg_name" placeholder="Enter Category Name" value="<?= $cart['user_email']; ?>"  disabled>
            </div>


          <div class="mb-3 col-12 col-md-6">
              <label for="catg_name" class="form-label">Product Image</label>
              <br>
            <img src="<?php echo base_url();?>assets/images/product/<?= $cart['pimg']; ?> " class="img-thumbnail" alt="product thumbnail" style="width:250px !important;">
          </div>

                            </div>

                      </form>
                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
            </div>
        </div>
    </div>
    <!--//container-fluid-->
</div>
<!--//app-content-->
