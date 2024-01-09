<footer class="app-footer">
    <div class="container text-center py-3">
        <small class="copyright">Copyright © 2023 <a class="app-link" href="<?= base_url(); ?>admin"
                target="_blank"></a></small>

    </div>
</footer>
<!--//app-footer-->

<!-- Modal -->
<div class="modal fade" id="changeplanmodal" tabindex="-1" role="dialog" aria-labelledby="changeplanmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
		<button type="button" class="btn app-btn-primary" id = "save-plan-date">Save changes</button>
	 	<button type="button" class="btn app-btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
