<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                  <form action="<?php echo site_url('admin/edit_subcatgories/'.sha1(md5($subcategory['subcatg_id']))); ?>" method="post" enctype="multipart/form-data">
                            <div class = "row">
                            <div class="col-12">
                                <h4>Edit Category</h4>
                                <hr class="my-4">
                            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="subcatg_name" class="form-label">Sub Category Name</label>
                <input type="text" class="form-control" name = "subcatg_name" id="subcatg_name"  value="<?= $subcategory['subcatg_name']; ?>"  required>
            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="catg_name" class="form-label">Category</label>
                <select class = "form-control" name = "catg_name" id = "catg_name" required>
                    <option selected value="<?= $subcategory['catg_name']; ?>"><?= $subcategory['catg_name']; ?></option>
                    <?php foreach ($categories as $category): ?>
                   <option value = "<?= $category['catg_name']; ?>"><?= $category['catg_name']; ?></option>
                   <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3 col-12 col-md-6">
            <label for="subcatg_img" class="form-label">Sub Category Image</label>
            <input class="form-control" type="file" id="image-input" name="subcatg_img" accept="image/png, image/gif, image/jpeg" value="<?= $subcategory['subcatg_img']; ?>">
            <img src="<?php echo base_url('assets/images/subcatg/' . $subcategory['subcatg_img']); ?>" height="150" width="300" />
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
