<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                  <form action="<?php echo site_url('admin/edit_videos/'.sha1(md5($video['video_id']))); ?>" method="post">
                            <div class = "row">
                            <div class="col-12">
                                <h4>Edit Video</h4>
                                <hr class="my-4">
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="video_title" class="form-label">Video Title</label>
                                <input type="text" class="form-control" value="<?= $video['video_title']; ?>" name = "video_title" id="video_title" required>
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="video_link" class="form-label">Video Link</label>
                                <input type="text" class="form-control" value="<?= $video['video_link']; ?>" name = "video_link" id="video_link" required>
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
    </div>
    <!--//container-fluid-->
</div>
<!--//app-content-->
