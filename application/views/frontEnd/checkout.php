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
                            <li class="about-p"><span>Your checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<!-- checkout page start -->
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="checkout-area">
                    <div class="billing-area">
                        <form action="<?php echo base_url('FrontEnd/loginValidation') ?>" method="post">
                            <h2>Billing details</h2>
                            <div class="billing-form">
                                <ul class="billing-ul input-2">
                                    <li class="billing-li">
                                        <label>First name</label>
                                        <input type="text" name="f_name" placeholder="First name">
                                    </li>
                                    <li class="billing-li">
                                        <label>Last name</label>
                                        <input type="text" name="l_name" placeholder="Last name">
                                    </li>
                                </ul>

                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <label>Address</label>
                                        <input type="text" name="address" placeholder="Street address">
                                    </li>
                                </ul>

                                <ul class="billing-ul input-2">
                                    <li class="billing-li">
                                        <label>Email address</label>
                                        <input type="text" name="mail" placeholder="Email address">
                                    </li>
                                    <li class="billing-li">
                                        <label>Phone</label>
                                        <input type="text" name="phone" placeholder="Phone">
                                    </li>
                                </ul>
                            </div>

                            <div class="billing-details">

                                <h2>Shipping details</h2>
                                <ul class="shipping-form">
                                    <li class="check-box">
                                        <input type="checkbox" name="--">
                                        <label>Ship to a different address?</label>
                                    </li>
                                    <li class="comment-area">
                                        <label>Order notes(Optional)</label>
                                        <textarea name="comments" rows="4" cols="80"></textarea>
                                    </li>
                                </ul>


                            </div>
                    </div>
                    <div class="order-area">
                        <div class="check-pro">
                            <h2>In your cart (2)</h2>
                            <ul class="check-ul">
                                <?php foreach($data as $d){ ?>
                                <li>
                                    <div class="check-pro-img">
                                        <a href="product.html"><img
                                                src="<?php echo base_url('product/product/') ?><?php echo $d['photo'] ?>"
                                                class="img-fluid" alt="image" style="width:75%"></a>
                                    </div>
                                    <div class="check-content">
                                        <a href="product.html"><?php echo $d['name'] ?></a>

                                        <span class="check-price"><?php echo $d['price'] ?> TK</span>
                                    </div>
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                        <h2>Your order</h2>
                        <ul class="order-history">
                            <li class="order-details">
                                <span>Product:</span>
                                <span>Quantity:</span>
                                <span>Total</span>
                            </li>
                            <?php foreach($data as $d){ ?>
                            <li class="order-details">
                                <span><?php echo $d['name'] ?></span>
                                <span><?php echo $d['qty'] ?></span>
                                <span><?php echo $d['price']*$d['qty'] ?></span>
                                <input type="hidden" name="total" value="<?php echo @$total['total'] ?>">
                                
                            </li>
                            <?php } ?>


                            <li class="order-details">
                                <span>Total:</span>
                                <span><?php echo @$total['total'] ?></span>
                            </li>
                        </ul>

                        <ul class="order-form">
                            <li>
                                <input type="checkbox" name="paymentMethod" value="Bank">
                                <label>Direct bank transfer</label>
                            </li>
                            <li>
                                <input type="checkbox" name="paymentMethod" value="nagad">
                                <label>Nagad payment</label>
                            </li>
                            <li>
                                <input type="checkbox" name="paymentMethod" value="Cash On delevery">
                                <label>Cash On Delevery</label>
                            </li>
                            <li class="pay-icon">
                                <a href="javascript:void(0)"><i class="fa fa-credit-card"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-cc-paypal"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-cc-mastercard"></i></a>
                            </li>
                        </ul>

                        <div class="checkout-btn">
                            <input type="submit" value="Place Order" class="btn-style1 form-control">
                            <!-- <a href="javascript:void(0)" class="btn-style1">Place order</a> -->
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout page end -->
<!-- footer start -->
<?php include('src/footer.php') ?>