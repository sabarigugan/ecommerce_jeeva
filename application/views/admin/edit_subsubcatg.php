<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                  <form action="<?php echo site_url('admin/edit_subsubcatgories/'.sha1(md5($subsubcategory['ssid']))); ?>" method="post" enctype="multipart/form-data">
                            <div class = "row">
                            <div class="col-12">
                                <h4>Edit Sub Sub Category</h4>
                                <hr class="my-4">
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="sscatg_name" class="form-label">Sub sub Category Name</label>
                                <input type="text" class="form-control" name = "sscatg_name" id="sscatg_name"  value="<?= $subsubcategory['sscatg_name']; ?>"  required>
                            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="subcatg_name" class="form-label">Sub Category Name</label>
                <select class = "form-control" name = "subcatg_name" id = "subcatg_name" required>
                    <option selected value="<?= $subsubcategory['subcatg_name']; ?>"><?= $subsubcategory['subcatg_name']; ?></option>
                        <?php foreach ($subcatg as $sscatg): ?>
                       <option value = "<?= $sscatg['subcatg_name']; ?>"><?= $sscatg['subcatg_name']; ?></option>
                       <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3 col-12 col-md-6">
                <label for="catg_name" class="form-label">Category</label>
                <select class = "form-control" name = "catg_name" id = "catg_name" required>
                    <option selected value="<?= $subsubcategory['catg_name']; ?>"><?= $subsubcategory['catg_name']; ?></option>
                    <?php foreach ($categories as $category): ?>
                   <option value = "<?= $category['catg_name']; ?>"><?= $category['catg_name']; ?></option>
                   <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3 col-12 col-md-6">
            <label for="subcatg_img" class="form-label">Sub Category Image</label>
            <input class="form-control" type="file" id="image-input" name="ssubcatg_img" accept="image/png, image/gif, image/jpeg" value="<?= $subsubcategory['ssubcatg_img']; ?>">
            <img src="<?php echo base_url('assets/images/subsubcatg/' . $subsubcategory['ssubcatg_img']); ?>" height="150" width="300" />
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
