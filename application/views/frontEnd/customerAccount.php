
<?php include('src/header.php') ?>
        <!-- mobile menu end -->
        
        <!-- breadcrumb start -->
        <section class="about-breadcrumb">
            <div class="about-back section-tb-padding" style="background-image: url(<?php echo base_url('FrontAssets/') ?>image/about-image.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="about-l">
                                <ul class="about-link">
                                    <li class="go-home"><a href="index1.html">Home</a></li>
                                    <li class="about-p"><span>Account</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- faq's collapse start -->
        <section class="shipping-area section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="account-title">
                            <h1>Welcome Vegist</h1>
                        </div>
                        <div class="account-area">
                            <div class="account">
                                <h4>My account</h4>
                                <ul class="page-name">
                                    
                                    <li class="register-id"><a href="<?php echo base_url('FrontEnd/customerLogout') ?>">Logout</a></li>
                                </ul>
                            </div>
                            <div class="account-detail">
                                <h4>Account details</h4>
                                <ul class="a-details">
                                    <li><?php $userdata['user'] = $this->session->userdata('status'); echo $userdata['user']->name ?></li>
                                    <li class="mail-register"><?php echo $userdata['user']->email ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="order-details">
                            <h4>Order history</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Order ID</th>
                                        <!-- <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th> -->
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl=0; foreach($list as $l){ ?>
                                            <tr>
                                                <td><?php echo ++$sl ?></td>
                                                <td><?php echo $l->order_id ?></td>
                                                <!-- <td><?php //echo $l->productName ?></td> -->
                                                <!-- <td><?php //echo $l->productPrice ?></td> -->
                                                <!-- <td><?php //echo $l->product_qty ?></td> -->
                                                <td><?php echo $l->total_amount ?></td>
                                                <td><?php echo $l->status ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('FrontEnd/get_orderDetails/') ?><?php echo $l->order_id ?>" class="btn btn-primary">View</a>
                                                    
                                                </td>
                                            </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq's collapse end -->
        <!-- footer start -->
        <?php include('src/footer.php') ?>