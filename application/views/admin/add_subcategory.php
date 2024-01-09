<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                  <form action="<?php echo site_url('admin/add_subcatgories'); ?>" method="post" enctype="multipart/form-data">
                            <div class = "row">
                            <div class="col-12">
                                <h4>Add Sub Category</h4>
                                <hr class="my-4">
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="subcatg_name" class="form-label">Sub Category Name</label>
                                <input type="text" class="form-control" name = "subcatg_name" id="subcatg_name" placeholder="Enter Sub Category Name" required>
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="catg_name" class="form-label">Category</label>
                                <select class = "form-control" name = "catg_name" id = "catg_name" required>
                                    <option selected disabled>Choose</option>
                                    <?php foreach ($categories as $category): ?>
                                   <option value = "<?= $category['catg_name']; ?>"><?= $category['catg_name']; ?></option>
                                   <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                  <label for="subcatg_img" class="form-label">Sub Category Image</label>
                                  <input type="file" class="form-control" name = "subcatg_img" id="subcatg_img" required>
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
