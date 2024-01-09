<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        <form action="<?php echo site_url('admin/edit_banners/'.sha1(md5($banner['bannerone_id']))); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h4>Edit Banner</h4>
                                    <hr class="my-4">
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="bannerone_title" class="form-label">Banner Title</label>
                                    <input type="text" class="form-control" name="bannerone_title" id="bannerone_title" value="<?= $banner['bannerone_title']; ?>">
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label for="bannerone_img" class="form-label">Banner Image</label>
                                    <input class="form-control" type="file" id="image-input" name="bannerone_img" accept="image/png, image/gif, image/jpeg">

                                    <!-- Display current banner image if it exists -->
                                    <?php if (!empty($banner['bannerone_img'])): ?>
                                        <img src="<?php echo base_url('assets/images/banner/' . $banner['bannerone_img']); ?>" height="150" width="300" alt="Current Banner Image">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <button type="submit" class="btn app-btn-primary" id="submitButton">SUBMIT</button>
                            <input type="hidden" name="current_banner_img" value="<?= $banner['bannerone_img']; ?>">
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
