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
                            <li class="go-home"><a href="index1.html">Home</a></li>
                            <li class="about-p"><span>Your shopping cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<!-- cart start -->
<section class="cart-page section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-xs-12 col-sm-12 col-md-12 col-lg-8">
                
                    <div class="cart-area">
                        <div class="cart-details">
                            <div class="cart-item">
                                <span class="cart-head">My cart:</span>
                                <span class="c-items"> item</span>
                            </div>

                            <?php $sl=0; foreach($cartP as $data){ 
                                    

                                 $sl++?>
                                 
                            <form action="<?php echo base_url('FrontEnd/UpdateCart') ?>" method="post">
                                <div class="cart-all-pro">
                                    <div class="cart-pro">
                                        <div class="cart-pro-image">
                                            <a href="<?php echo base_url('shop') ?>"><img
                                                    src="<?php echo base_url('product/product/') ?><?php echo $data['photo']?>"
                                                    class="img-fluid" alt="image" style='width:25%'></a>
                                        </div>
                                        <div class="pro-details">
                                            <h4><a href="<?php echo base_url('shop') ?>"><?php echo $data['name'] ?></a>
                                            </h4>
                                            <span class="pro-size"><span class="size">Size:</span>
                                                <?php echo $data['qty'] ?> kg</span>

                                            <span class="cart-pro-price">Price:<?php echo $data['price'] ?>TK</span>
                                        </div>
                                    </div>
                                    <div class="qty-item">
                                        <div class="center">
                                            <div class="plus-minus">
                                                <span>
                                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                                    <input type="text" name="qty[]" value="<?php echo $data['qty'] ?>">
                                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                                </span>
                                            </div>
                                            <a href="<?php echo base_url('FrontEnd/RemoveCart/') ?><?php echo $data['rowid'] ?>"
                                                class="pro-remove">Remove</a>
                                        </div>
                                    </div>
                                    <div class="all-pro-price">
                                        <span><?php echo $data['price']*$data['qty'] ?>TK</span>
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $data['rowid'] ?>" name="rowid[]">

                                <?php } ?>
                        </div>
                    </div>


            </div>
            <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="cart-total">
                    <div class="cart-price">
                        <span>Subtotal</span>
                        <span class="total"><?php echo $this->cart->total() ?>TK</span>
                    </div>
                    
                    <div class="cart-info">
                        <h4>Shipping info</h4>
                        <input type="radio" id="age1" name="shipment" value="50" checked  class="shipping">
                        <label for="shipment1">Inside Dhaka (50 TK)</label><br>
                        <input type="radio" id="age2" name="shipment" value="150" class="shipping1">
                        <label for="shipment2">Outside of Dhaka (150 TK)</label><br>
                        <input type="hidden" value='<?php echo $this->cart->total(); ?>' name="subtotal" id="subtotal">
                        <br>
                        <input type="submit" value='Update Cart' class="cart-calculate btn btn-primary " id="update">
                        <!-- <a href="javascript:void(0)" class="cart-calculate">Calculate</a> -->
                        </form>
                    </div>

                    <div class="shop-total">
                        <span>Total</span>
                        
                        <span class="total-amount "> <span class="totalJQ"></span> TK</span>
                    </div>
                    <form action=" <?php echo base_url('FrontEnd/checkout') ?> " method="post">
                    <input type="hidden" name="total" id="input">

                    <input type="submit" value="Checkout" class="btn btn-primary">
                    </form>
                   
                    

                </div>
            </div>
        </div>
    </div>
</section>
<!-- cart end -->
<!-- footer start -->
<?php include('src/footer.php') ?>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
<script>
    $(document).ready(function(){
    //     $('.shipping').on('change',function(){
    //         $vali = $('#subtotal').val();
    //         $shipping = $('.shipping').val();
        

    //    $sum = parseInt($vali)+parseInt($shipping);
    //    alert($sum);
    //     });
      $subtotal = $('#subtotal').val()
       $shipment = $('.shipping').val();
       $valu = parseInt($subtotal)+parseInt($shipment);
       $( ".totalJQ" ).text($valu);
       $('#input').val($valu);
    $('input:radio').click(function() {
    if($('.shipping').is(':checked')) 
    { 
        $subtotal = $('#subtotal').val()
       $shipment = $('.shipping').val();
       $valu = parseInt($subtotal)+parseInt($shipment);
       $( ".totalJQ" ).text($valu);
       $('#input').val($valu);
    } else{
        $subtotal = $('#subtotal').val()
       $shipment = $('.shipping1').val();
       $valu = parseInt($subtotal)+parseInt($shipment);
       $( ".totalJQ" ).text($valu);
       $('#input').val($valu);
    }                     
});
       
    })
</script>