<!-- Javascript -->
<script src="<?= base_url(); ?>assets/admin/assets/plugins/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<?php if($page == 'dashboard'){ ?>
<!-- Charts JS -->
<script src="<?= base_url(); ?>assets/admin/assets/plugins/chart.js/chart.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/assets/js/index-charts.js"></script>

<?php } ?>

<script src="<?= base_url(); ?>assets/admin/assets/js/app.js"></script>

<?php if ($page == 'add_product' || $page == 'edit_product'): ?>
    <script src="<?php echo base_url(); ?>assets/lib/text-editor/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/text-editor/js/froala_editor.min.js"></script>
    <script>
        $(function(){
            $('#articaldes').editable({inlineMode: false, autosave:true});
        });
    </script>
<?php endif; ?>




<script>
$('#dataTable').DataTable({
  processing: true,
  serverSide: true,
  select: true,
  deferRender: true,
  responsive: true,
  scroller: true,
  scrollCollapse: true,
  scrollY: 800,
  colReorder: true,
  order: [],
  ajax: {
      url: "<?php echo base_url('admin/getdata/'); ?>",
      type: "POST",
      data: {
          page_name: "<?= $page_name; ?>"
      },
  },
  columnDefs: [{
      className: "cell",
      targets: "_all"
  }, {
      targets: [0],
      orderable: false
  }]
});

$(document).on("click", ".delete-button", function(e) {
    var $this = $(this);
    var data_id = $this.data('id');
    var url = "<?= base_url(); ?>admin/delete_data/delete_catg/" + data_id;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'JSON',
                success: function(data) {
                    if (data['class'] == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: "Deleted!",
                            text: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (data['class'] == 'error') {
                        // Handle error
                        Swal.fire({
                            icon: 'error',
                            title: "Oops!",
                            text: "Something went wrong! Please try again.",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function(e) {
                    // Handle error
                    console.error("Ajax request failed:", e);
                }
            });
        }
    });
});


$(document).on("click", ".delete-banner_button", function(e) {
    var $this = $(this);
    var data_id = $this.data('id');
    var url = "<?= base_url(); ?>admin/delete_data/bannerone/" + data_id;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'JSON',
                success: function(data) {
                    if (data['class'] == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: "Deleted!",
                            text: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (data['class'] == 'error') {
                        // Handle error
                        Swal.fire({
                            icon: 'error',
                            title: "Oops!",
                            text: "Something went wrong! Please try again.",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function(e) {
                    // Handle error
                    console.error("Ajax request failed:", e);
                }
            });
        }
    });
});

$(document).on("click", ".delete-brand-button", function(e) {
    var $this = $(this);
    var data_id = $this.data('id');
    var url = "<?= base_url(); ?>admin/delete_data/delete_brand/" + data_id;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'JSON',
                success: function(data) {
                    if (data['class'] == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: "Deleted!",
                            text: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (data['class'] == 'error') {
                        // Handle error
                        Swal.fire({
                            icon: 'error',
                            title: "Oops!",
                            text: "Something went wrong! Please try again.",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function(e) {
                    // Handle error
                    console.error("Ajax request failed:", e);
                }
            });
        }
    });
});


$(document).on("click", ".delete-user-button", function(e) {
    var $this = $(this);
    var data_id = $this.data('id');
    var url = "<?= base_url(); ?>admin/delete_data/delete_user/" + data_id;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'JSON',
                success: function(data) {
                    if (data['class'] == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: "Deleted!",
                            text: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (data['class'] == 'error') {
                        // Handle error
                        Swal.fire({
                            icon: 'error',
                            title: "Oops!",
                            text: "Something went wrong! Please try again.",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function(e) {
                    // Handle error
                    console.error("Ajax request failed:", e);
                }
            });
        }
    });
});

$(document).on("click", ".delete-subsub-button", function(e) {
    var $this = $(this);
    var data_id = $this.data('id');
    var url = "<?= base_url(); ?>admin/delete_data/delete_subsub/" + data_id;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'JSON',
                success: function(data) {
                    if (data['class'] == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: "Deleted!",
                            text: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (data['class'] == 'error') {
                        // Handle error
                        Swal.fire({
                            icon: 'error',
                            title: "Oops!",
                            text: "Something went wrong! Please try again.",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function(e) {
                    // Handle error
                    console.error("Ajax request failed:", e);
                }
            });
        }
    });
});

$(document).on("click", ".delete-sub-button", function(e) {
    var $this = $(this);
    var data_id = $this.data('id');
    var url = "<?= base_url(); ?>admin/delete_data/delete_subcatg/" + data_id;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'JSON',
                success: function(data) {
                    if (data['class'] == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: "Deleted!",
                            text: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (data['class'] == 'error') {
                        // Handle error
                        Swal.fire({
                            icon: 'error',
                            title: "Oops!",
                            text: "Something went wrong! Please try again.",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function(e) {
                    // Handle error
                    console.error("Ajax request failed:", e);
                }
            });
        }
    });
});


$(document).on("click", ".delete-product-button", function(e) {
    var $this = $(this);
    var data_id = $this.data('id');
    var url = "<?= base_url(); ?>admin/delete_data/delete_product/" + data_id;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'JSON',
                success: function(data) {
                    if (data['class'] == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: "Deleted!",
                            text: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (data['class'] == 'error') {
                        // Handle error
                        Swal.fire({
                            icon: 'error',
                            title: "Oops!",
                            text: "Something went wrong! Please try again.",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function(e) {
                    // Handle error
                    console.error("Ajax request failed:", e);
                }
            });
        }
    });
});

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });

</script>
