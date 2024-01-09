<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                  <form action="<?php echo site_url('admin/add_bannerone') ?>" method="post" enctype="multipart/form-data">
                            <div class = "row">
                            <div class="col-12">
                                <h4>Add Banner</h4>
                                <hr class="my-4">
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="bannerone_title" class="form-label">Offer Name</label>
                                <input type="text" class="form-control" name = "bannerone_title" id="bannerone_title" required>
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                        
                                  <label for="bannerone_img" class="form-label">Banner Image</label>
                                  <input class="form-control" type="file" id="image-input" name="bannerone_img[]" accept="image/png, image/gif, image/jpeg" multiple>

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
