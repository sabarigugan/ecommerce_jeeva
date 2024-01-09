<?php
$this->load->view('user/include/html-top');
$this->load->view('user/include/header');
$uri3 = $this->uri->segment(3);
$uri3_rpl = str_replace('-', ' ', $uri3);
$user_id = $this->session->userdata('user_login')['user_id'];
?>

<section class="col-lg-12 my-profile" style="float: left;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4 class="text-center">My Profile</h4>

                <form action="<?php echo site_url('user/edit_user/' . sha1(md5($user_id))); ?>" method="post"
                    enctype="multipart/form-data" id="editForm">
                    <?php
                    $edituserbyid = $this->madmin->edituserbyid($user_id);
                    foreach ($edituserbyid as $edituserbyidArray) {
                        $user_id = $edituserbyidArray->user_id;
                        ?>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="media-left">
                                                <label for="inputName" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="inputName" name="user_name"
                                                    value="<?php echo $edituserbyidArray->user_name; ?>">
                                            </div>
                                            <div class="media-right">
                                                <button type="button" onclick="editForm('inputName')"><img
                                                        src="<?php echo base_url(); ?>assets/images/fashion/edit.png"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="media-left">
                                                <label for="inputEmail" class="form-label">Email address</label>
                                                <input type="email" class="form-control" name="user_email" id="inputEmail"
                                                    value="<?php echo $edituserbyidArray->user_email; ?>">
                                            </div>
                                            <div class="media-right">
                                                <button type="button" onclick="editForm('inputEmail')"><img
                                                        src="<?php echo base_url(); ?>assets/images/fashion/edit.png"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="media-left">
                                                <label for="inputPhone" class="form-label">Phone Number</label>
                                                <input type="tel" name="user_phone" class="form-control" id="inputPhone"
                                                    value="<?php echo $edituserbyidArray->user_phone; ?>">
                                            </div>
                                            <div class="media-right">
                                                <button type="button" onclick="editForm('inputPhone')"><img
                                                        src="<?php echo base_url(); ?>assets/images/fashion/edit.png"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="media-left">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" name="gender" id="gender">
                                                    <?php if ($edituserbyidArray->gender): ?>
                                                    <option selected
                                                        value="<?php echo $edituserbyidArray->gender; ?>"><?php echo $edituserbyidArray->gender; ?></option>
                                                    <?php else: ?>
                                                    <option selected disabled>Choose</option>
                                                    <?php endif; ?>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="media-right">
                                                <button type="button" onclick="editForm('gender')"><img
                                                        src="<?php echo base_url(); ?>assets/images/fashion/edit.png"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 profile-botm">
                                <button type="button" class="col-lg-4 btn btn-primary" onclick="saveChanges()">Save
                                    Changes</button>
                            </div>

                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function editForm(fieldName) {
        // Enable input field for editing
        document.getElementById(fieldName).disabled = false;
    }

    function saveChanges() {
        // Enable all fields before submitting the form
        var inputFields = document.getElementsByTagName("input");
        for (var i = 0; i < inputFields.length; i++) {
            inputFields[i].disabled = false;
        }

        var selectFields = document.getElementsByTagName("select");
        for (var i = 0; i < selectFields.length; i++) {
            selectFields[i].disabled = false;
        }

        // Submit the form
        document.getElementById('editForm').submit();
    }
</script>

<?php
$this->load->view('user/include/footer');
$this->load->view('user/include/html-bot');
?>
