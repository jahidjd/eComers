<nav class="sidebar dark_sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="<?php echo base_url('admin/Admin/dashboard') ?>"><img src="<?php echo base_url() ?>adminAssets/img/logo_white.png" alt=""></a>
            <a class="small_logo" href="<?php echo base_url('admin/Admin/dashboard') ?>"><img src="<?php echo base_url() ?>adminAssets/img/mini_logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="">
                <a href="<?php echo base_url('admin/Admin/dashboard') ?>" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?php echo base_url() ?>adminAssets/img/menu-icon/1.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?php echo base_url() ?>adminAssets/img/menu-icon/1.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Products From </span>
                    </div>
                </a>
                <ul>
                    <li><a href="<?php echo base_url('admin/Admin/category') ?>">Add Product Category</a></li>
                    <li><a href="<?php echo base_url('admin/Admin/product_purchase') ?>">Add Product Purchase</a></li>
                    <li><a href="<?php echo base_url('admin/Admin/addProduct') ?>">Add Products</a></li>
                    <li><a href="<?php echo base_url('admin/Admin/productList') ?>">Product List </a></li>
                    <li><a href="<?php echo base_url('admin/Admin/purchaseList') ?>">Purchase List </a></li>
                    
                </ul>
            </li>
            <li class="">
                <a href="<?php echo base_url('admin/Admin/customer') ?>" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?php echo base_url() ?>adminAssets/img/menu-icon/2.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Customer</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="<?php echo base_url('admin/Admin/orderList') ?>" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?php echo base_url() ?>adminAssets/img/menu-icon/3.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Order List</span>
                    </div>
                </a>
            </li>
            
        </ul>
    </nav>