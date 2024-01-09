<!-- FontAwesome JS-->
<script defer src="<?= base_url(); ?>assets/admin/assets/plugins/fontawesome/js/all.min.js"></script>
<!-- App CSS -->
<link id="theme-style" rel="stylesheet" href="<?= base_url(); ?>assets/admin/assets/css/portal.css">

<link rel="stylesheet"
    href="<?= base_url(); ?>assets/admin/assets/plugins/sweetalert2/node_modules/sweetalert2/dist/sweetalert2.min.css">
<link href="<?= base_url(); ?>assets/admin/assets/plugins/DataTables/datatables.min.css" rel="stylesheet">

<script src="<?= base_url(); ?>assets/admin/assets/js/jquery-3.7.1.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/assets/plugins/jquery_validate/dist/jquery.validate.js"></script>
<script src="<?= base_url(); ?>assets/admin/assets/plugins/jquery_validate/dist/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/assets/plugins/jquery_validate/dist/additional-methods.js"></script>
<script src="<?= base_url(); ?>assets/admin/assets/plugins/jquery_validate/dist/additional-methods.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/assets/plugins/sweetalert2/node_modules/sweetalert2/dist/sweetalert2.min.js">
</script>
<link href="<?php echo base_url(); ?>assets/lib/text-editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/lib/text-editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">
<script src="<?= base_url(); ?>assets/admin/assets/plugins/DataTables/datatables.min.js"></script>
<link href="<?= base_url(); ?>assets/admin/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="<?= base_url(); ?>assets/admin/assets/plugins/select2/dist/js/select2.min.js"></script>
<style>
.app-card-body .container {
    padding-top: 15px;
    padding-bottom: 15px;
}
.flexbuttons .btn-sm {
    margin: 5px;
}
.dataTables_paginate {
    --bs-pagination-padding-x: 0.75rem;
    --bs-pagination-padding-y: 0.375rem;
    --bs-pagination-font-size: 1rem;
    --bs-pagination-color: var(--bs-link-color);
    --bs-pagination-bg: var(--bs-body-bg);
    --bs-pagination-border-width: var(--bs-border-width);
    --bs-pagination-border-color: var(--bs-border-color);
    --bs-pagination-border-radius: var(--bs-border-radius);
    --bs-pagination-hover-color: var(--bs-link-hover-color);
    --bs-pagination-hover-bg: var(--bs-tertiary-bg);
    --bs-pagination-hover-border-color: var(--bs-border-color);
    --bs-pagination-focus-color: var(--bs-link-hover-color);
    --bs-pagination-focus-bg: var(--bs-secondary-bg);
    --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    --bs-pagination-active-color: #fff;
    --bs-pagination-active-bg: #0d6efd;
    --bs-pagination-active-border-color: #0d6efd;
    --bs-pagination-disabled-color: var(--bs-secondary-color);
    --bs-pagination-disabled-bg: var(--bs-secondary-bg);
    --bs-pagination-disabled-border-color: var(--bs-border-color);
    display: flex;
    padding-left: 0;
    list-style: none;
}

input[readonly]{
    background: #ddd !important;
}

button {
    background: transparent;
    border: none;
}

.app-btn-info {
    background: #2382ff;
    color: #fff;
    border-color: #2382ff;
}
.app-btn-info:hover{
    background: #5b99ea;
    color: #fff;
    border-color: #5b99ea;
}

.dataTables_paginate .paginate_button {
    font-size: .875rem;
    border-top-left-radius: var(--bs-pagination-border-radius);
    border-bottom-left-radius: var(--bs-pagination-border-radius);
    padding: 0.25rem 0.5rem;
}

.paginate_button.current {
    background: #747f94;
    color: #fff;
    border-color: #747f94;
}

.dataTables_paginate .paginate_button.disabled {
    color: #9fa7b5;
    background-color: var(--bs-pagination-disabled-bg);
}

.form-control::placeholder {
    color: #adb4c0;
}

label.error {
    color: red;
}

img.thumbnail {
    width: 35px;
}

#orders-table-tab .nav-link {
    cursor: pointer;
}

.app-user-dropdown img {
    border-radius: 100%;
}

.hide {
    display: none !important;
}
</style>
