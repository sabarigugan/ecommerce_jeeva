<?php if (!empty($this->session->userdata('admin_login'))){ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Brightways | Admin</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo.png">
        <?php include('include/html-top.php'); ?>
    </head>
    <body class="app">
        <?php include('include/header.php'); ?>
        <div class="app-wrapper">
          <!-- Assuming you are using CodeIgniter's session library -->
          <?php if ($this->session->flashdata('message')): ?>
              <script>
                  // Wait for the DOM to be ready
                  document.addEventListener('DOMContentLoaded', function () {
                      // Check if the URI contains 's'
                      if (window.location.href.indexOf('s') !== -1) {
                          // Show the Swal (SweetAlert) popup
                          Swal.fire({
                              icon: '<?php echo $this->session->flashdata('class') === "success" ? "success" : "error"; ?>',
                              title: "<?php echo $this->session->flashdata('message'); ?>",
                              showConfirmButton: false,
                              timer: 3000 // 5 seconds
                          });
                      }
                  });
              </script>
          <?php endif; ?>


            <?php include($page.'.php'); ?>
            <?php include('include/footer.php'); ?>
        </div>
        <?php include('include/html-bot.php'); ?>
    </body>
</html>
<?php }else{
    redirect('admin/login');
} ?>
