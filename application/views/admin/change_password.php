<?php
$user_id = $this->session->userdata('admin_login')['user_id'];
$change_pass_url = site_url('admin/change_pass/' . sha1(md5($user_id)));
?>
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                <form action="<?php echo $change_pass_url; ?>" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="row">
                    <div class="col-12">
                        <h4>Change Password</h4>
                        <hr class="my-4">
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="admin_password" id="admin_password" placeholder="Enter Password" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="change_admin_password" class="form-label">Re-enter Password</label>
                        <input type="password" class="form-control" name="change_admin_password" id="change_admin_password" placeholder="Re-enter Password" oninput="checkPasswordMatch()" required>
                        <span id="passwordMatch"></span>
                    </div>
                </div>
                <button type="submit" class="btn app-btn-primary" id="submitButton">SUBMIT</button>
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
<script>
    function checkPasswordMatch() {
        var password = document.getElementById("admin_password").value;
        var confirmPassword = document.getElementById("change_admin_password").value;
        var passwordMatchSpan = document.getElementById("passwordMatch");

        if (password === confirmPassword) {
            passwordMatchSpan.innerHTML = "Passwords match!";
            passwordMatchSpan.style.color = "green";
        } else {
            passwordMatchSpan.innerHTML = "Passwords do not match!";
            passwordMatchSpan.style.color = "red";
        }
    }

    function validateForm() {
        var password = document.getElementById("admin_password").value;
        var confirmPassword = document.getElementById("change_admin_password").value;

        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return false;
        }

        return true;
    }
</script>
