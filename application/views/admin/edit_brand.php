<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                  <form action="<?php echo site_url('admin/edit_brands/'.sha1(md5($brand['brand_id']))); ?>" method="post" enctype="multipart/form-data">
                            <div class = "row">
                            <div class="col-12">
                                <h4>Edit Brand</h4>
                                <hr class="my-4">
                            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="brand_name" class="form-label">Brand Name</label>
                <input type="text" class="form-control" name = "brand_name" id="brand_name" placeholder="Enter Brand Name" value="<?= $brand['brand_name']; ?>"  required>
            </div>

            <div class="mb-3 col-12 col-md-6">
            <label for="brand_img" class="form-label">Brand Image</label>
            <input class="form-control" type="file" id="image-input" name="brand_img" accept="image/png, image/gif, image/jpeg" value="<?= $brand['brand_name']; ?>">
            <img src="<?php echo base_url('assets/images/brand/' . $brand['brand_img']); ?>" height="150" width="300" />
        </div>

                            </div>
                            <button type="submit" class="btn app-btn-primary" id = "submitButton">SUBMIT</button>
                      </form>
                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
            </div>
        </div>
        <!--//row-->
        <hr class="my-4">
    </div>
    <!--//container-fluid-->
</div>
<!--//app-content-->
