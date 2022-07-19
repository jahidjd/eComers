
   <?php include('src/header.php') ?>
        <!-- mobile menu end -->
        
    <!-- breadcrumb start -->
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="about-p"><span>Registration</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="register-area">
                        <div class="register-box">
                            <h1>Create account</h1>
                            <p>Please register below account detail</p>
                            <form action="<?php echo base_url('FrontEnd/customerReg') ?>" method="post">
                                <input type="text" name="name" placeholder="Firts name">
                                <input type="text" name="l_name" placeholder="Last name">
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="phone" placeholder="Phone">
                                <input type="text" name="password" placeholder="Password">
                                <input type="submit" value="Create" class="btn-style1">
                                <!-- <a  class="btn-style1" type="submit">Create</a> -->
                            </form>
                        </div>
                        <div class="register-account">
                            <h4>Already an account holder?</h4>
                            <a href="login.html" class="ceate-a">Log in</a>
                            <div class="register-info">
                                <a href="terms-conditions.html" class="terms-link"><span>*</span> Terms & conditions.</a>
                                <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="privacy-policy.html">privacy policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
    <!-- footer start -->
   <?php include('src/footer.php') ?>