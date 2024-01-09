<header class="app-header fixed-top">
    <div class="app-header-inner">
        <div class="container-fluid py-2">
            <div class="app-header-content">
                <div class="row justify-content-between align-items-center">

                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                role="img">
                                <title>Menu</title>
                                <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                            </svg>
                        </a>
                    </div>
                    <!--//col-->
                    <div class="app-utilities col-auto">

                        <div class="app-utility-item app-user-dropdown dropdown">
                            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false"><img src="<?= base_url(); ?>assets/images/user-icon.png"
                                    alt="user profile"></a>
                            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                <li><a class="dropdown-item" href="<?php echo site_url('admin/change_password'); ?>">Change Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>admin/logout">Log Out</a></li>
                            </ul>
                        </div>
                        <!--//app-user-dropdown-->
                    </div>
                    <!--//app-utilities-->
                </div>
                <!--//row-->
            </div>
            <!--//app-header-content-->
        </div>
        <!--//container-fluid-->
    </div>
    <!--//app-header-inner-->
    <div id="app-sidepanel" class="app-sidepanel">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
            <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
            <div class="app-branding">
                <a class="app-logo" href="<?= base_url(); ?>admin"><img class="logo-icon me-2"
                        src="<?= base_url(); ?>assets/images/logo.png" alt="logo"><span
                        class="logo-text"></span></a>

            </div>
            <!--//app-branding-->
            <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page_name == 'dashboard'){ echo "active"; } ?>"
                            href="<?= base_url(); ?>admin">
                            <span class="nav-icon">
                                <i class="fa-solid fa-gauge-high"></i>
                            </span>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if($page_name == 'user'){ echo "active"; } ?>"
                            href="<?= base_url(); ?>admin/user">
                            <span class="nav-icon">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span class="nav-link-text">User</span>
                        </a>
                    </li>

                    <li class="nav-item has-submenu">
                    <a class="nav-link submenu-toggle <?php if($page_name == 'add_category'){ echo "active"; } ?>"
                        href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1"
                        aria-expanded="<?= ($page_name == 'add_category')?"true":"false"; ?>"
                        aria-controls="submenu-1">
                        <span class="nav-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="nav-link-text">Category</span>
                        <span class="submenu-arrow">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </span>
                        <!--//submenu-arrow-->
                    </a>
                    <!--//nav-link-->
                    <div id="submenu-1"
                        class="collapse submenu submenu-1 <?= ($page_name == 'view_category')?"show":""; ?>"
                        data-bs-parent="#menu-accordion">
                        <ul class="submenu-list list-unstyled">
                            <li class="submenu-item"><a
                                    class="submenu-link <?php if($page == 'view_category'){ echo "active"; } ?>"
                                    href="<?= base_url(); ?>admin/view_category">View Category</a>
                                  </li>
                            <li class="submenu-item"><a
                                    class="submenu-link <?php if($page_name == 'add_category' && $page == 'table_view'){ echo "active"; } ?>"
                                    href="<?= base_url(); ?>admin/add_category">Add Category</a>
                                  </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item has-submenu">
                <a class="nav-link submenu-toggle <?php if($page_name == 'add_subcategory'){ echo "active"; } ?>"
                    href="#" data-bs-toggle="collapse" data-bs-target="#submenu-5"
                    aria-expanded="<?= ($page_name == 'add_subcategory')?"true":"false"; ?>"
                    aria-controls="submenu-5">
                    <span class="nav-icon">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <span class="nav-link-text">Sub Category</span>
                    <span class="submenu-arrow">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </span>
                    <!--//submenu-arrow-->
                </a>
                <!--//nav-link-->
                <div id="submenu-5"
                    class="collapse submenu submenu-5 <?= ($page_name == 'view_subcategory')?"show":""; ?>"
                    data-bs-parent="#menu-accordion">
                    <ul class="submenu-list list-unstyled">
                        <li class="submenu-item"><a
                                class="submenu-link <?php if($page == 'view_subcategory'){ echo "active"; } ?>"
                                href="<?= base_url(); ?>admin/view_subcategory">View Sub Category</a>
                              </li>
                        <li class="submenu-item"><a
                                class="submenu-link <?php if($page_name == 'add_subcategory' && $page == 'table_view'){ echo "active"; } ?>"
                                href="<?= base_url(); ?>admin/add_subcategory">Add Sub Category</a>
                              </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item has-submenu">
            <a class="nav-link submenu-toggle <?php if($page_name == 'add_subsubcategory'){ echo "active"; } ?>"
                href="#" data-bs-toggle="collapse" data-bs-target="#submenu-6"
                aria-expanded="<?= ($page_name == 'add_subsubcategory')?"true":"false"; ?>"
                aria-controls="submenu-6">
                <span class="nav-icon">
                    <i class="fa-solid fa-user"></i>
                </span>
                <span class="nav-link-text">Sub Sub Category</span>
                <span class="submenu-arrow">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                    </svg>
                </span>
                <!--//submenu-arrow-->
            </a>
            <!--//nav-link-->
            <div id="submenu-6"
                class="collapse submenu submenu-6 <?= ($page_name == 'view_subsubcategory')?"show":""; ?>"
                data-bs-parent="#menu-accordion">
                <ul class="submenu-list list-unstyled">
                    <li class="submenu-item"><a
                            class="submenu-link <?php if($page == 'view_subsubcategory'){ echo "active"; } ?>"
                            href="<?= base_url(); ?>admin/view_subsubcategory">View Sub Sub Category</a>
                          </li>
                    <li class="submenu-item"><a
                            class="submenu-link <?php if($page_name == 'add_subsubcategory' && $page == 'table_view'){ echo "active"; } ?>"
                            href="<?= base_url(); ?>admin/add_subsubcategory">Add Sub Sub Category</a>
                          </li>
                </ul>
            </div>
          </li>


                <li class="nav-item has-submenu">
                <a class="nav-link submenu-toggle <?php if($page_name == 'add_brand'){ echo "active"; } ?>"
                    href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2"
                    aria-expanded="<?= ($page_name == 'add_brand')?"true":"false"; ?>"
                    aria-controls="submenu-2">
                    <span class="nav-icon">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <span class="nav-link-text">Brands</span>
                    <span class="submenu-arrow">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </span>
                    <!--//submenu-arrow-->
                </a>
                <!--//nav-link-->
                <div id="submenu-2"
                    class="collapse submenu submenu-2 <?= ($page_name == 'view_brand')?"show":""; ?>"
                    data-bs-parent="#menu-accordion">
                    <ul class="submenu-list list-unstyled">
                        <li class="submenu-item"><a
                                class="submenu-link <?php if($page == 'view_brand'){ echo "active"; } ?>"
                                href="<?= base_url(); ?>admin/view_brand">View Brands</a>
                              </li>
                        <li class="submenu-item"><a
                                class="submenu-link <?php if($page_name == 'add_brand' && $page == 'table_view'){ echo "active"; } ?>"
                                href="<?= base_url(); ?>admin/add_brand">Add Brands</a>
                              </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item has-submenu">
            <a class="nav-link submenu-toggle <?php if($page_name == 'add_product'){ echo "active"; } ?>"
                href="#" data-bs-toggle="collapse" data-bs-target="#submenu-3"
                aria-expanded="<?= ($page_name == 'add_product')?"true":"false"; ?>"
                aria-controls="submenu-3">
                <span class="nav-icon">
                    <i class="fa-solid fa-user"></i>
                </span>
                <span class="nav-link-text">Products</span>
                <span class="submenu-arrow">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                    </svg>
                </span>
                <!--//submenu-arrow-->
            </a>
            <!--//nav-link-->
            <div id="submenu-3"
                class="collapse submenu submenu-1 <?= ($page_name == 'add_product')?"show":""; ?>"
                data-bs-parent="#menu-accordion">
                <ul class="submenu-list list-unstyled">
                    <li class="submenu-item"><a
                            class="submenu-link <?php if($page == 'banner_one'){ echo "active"; } ?>"
                            href="<?= base_url(); ?>admin/add_product">Add Product</a>
                          </li>
                    <li class="submenu-item"><a
                            class="submenu-link <?php if($page == 'view_product'){ echo "active"; } ?>"
                            href="<?= base_url(); ?>admin/view_product">View Products</a>
                          </li>
                </ul>
            </div>
            </li>

            <li class="nav-item has-submenu">
                    <a class="nav-link submenu-toggle <?php if($page_name == 'add_banner'){ echo "active"; } ?>"
                        href="#" data-bs-toggle="collapse" data-bs-target="#submenu-4"
                        aria-expanded="<?= ($page_name == 'add_banner')?"true":"false"; ?>"
                        aria-controls="submenu-4">
                        <span class="nav-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="nav-link-text">Banner</span>
                        <span class="submenu-arrow">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </span>
                        <!--//submenu-arrow-->
                    </a>
                    <!--//nav-link-->
                    <div id="submenu-4"
                        class="collapse submenu submenu-4 <?= ($page_name == 'add_banner')?"show":""; ?>"
                        data-bs-parent="#menu-accordion">
                        <ul class="submenu-list list-unstyled">
                            <li class="submenu-item"><a
                                    class="submenu-link <?php if($page == 'add_banner'){ echo "active"; } ?>"
                                    href="<?= base_url(); ?>admin/add_banner">Add Banner</a>
                                  </li>
                            <li class="submenu-item"><a
                                    class="submenu-link <?php if($page_name == 'view_banner' && $page == 'table_view'){ echo "active"; } ?>"
                                    href="<?= base_url(); ?>admin/view_banner">View Banner</a>
                                  </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item has-submenu">
                        <a class="nav-link submenu-toggle <?php if($page_name == 'add_video'){ echo "active"; } ?>"
                            href="#" data-bs-toggle="collapse" data-bs-target="#submenu-vid"
                            aria-expanded="<?= ($page_name == 'add_video')?"true":"false"; ?>"
                            aria-controls="submenu-vid">
                            <span class="nav-icon">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span class="nav-link-text">Video</span>
                            <span class="submenu-arrow">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                            <!--//submenu-arrow-->
                        </a>
                        <!--//nav-link-->
                        <div id="submenu-vid"
                            class="collapse submenu submenu-vid <?= ($page_name == 'add_video')?"show":""; ?>"
                            data-bs-parent="#menu-accordion">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item"><a
                                        class="submenu-link <?php if($page == 'add_video'){ echo "active"; } ?>"
                                        href="<?= base_url(); ?>admin/add_video">Add Video</a>
                                      </li>
                                <li class="submenu-item"><a
                                        class="submenu-link <?php if($page_name == 'view_video' && $page == 'table_view'){ echo "active"; } ?>"
                                        href="<?= base_url(); ?>admin/view_video">View Video</a>
                                      </li>
                            </ul>
                        </div>
                    </li>

            <li class="nav-item">
                <a class="nav-link <?php if($page_name == 'orders'){ echo "active"; } ?>"
                    href="<?= base_url(); ?>admin/orders">
                    <span class="nav-icon">
                        <i class="fa-regular fa-credit-card"></i>
                    </span>
                    <span class="nav-link-text">Order</span>
                </a>
            </li>

                </ul>
                <!--//app-menu-->
            </nav>
            <!--//app-nav-->
            <div class="app-sidepanel-footer">
                <nav class="app-nav app-nav-footer">
                    <ul class="app-menu footer-menu list-unstyled">
                        <li class="nav-item hide">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="#">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                        <path fill-rule="evenodd"
                                            d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Settings</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                        <li class="nav-item hide">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link"
                                href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                        <path fill-rule="evenodd"
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Download</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="<?= base_url('admin/logout'); ?>">
                                <span class="nav-icon">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </span>
                                <span class="nav-link-text">Log Out</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                    </ul>
                    <!--//footer-menu-->
                </nav>
            </div>
            <!--//app-sidepanel-footer-->

        </div>
        <!--//sidepanel-inner-->
    </div>
    <!--//app-sidepanel-->
</header>
<!--//app-header-->
