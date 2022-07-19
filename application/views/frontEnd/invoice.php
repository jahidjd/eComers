<?php include('src/header.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/favicon.png" rel="icon" />
    <title>General Invoice - Koice</title>
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts
======================= -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900'
        type='text/css'>

    <!-- Stylesheet
======================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/vendor/') ?>bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/vendor/') ?>all.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('FrontAssets/vendor/') ?>stylesheet.css" />
</head>

<body>
    <!-- Container -->
    <div class="container-fluid invoice-container">
        <a href="<?php echo base_url('FrontEnd/clear') ?>" class="btn btn-primary">Continue Shopping</a>
        <!-- Header -->
        <header>
            <div class="row align-items-center">
                <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0">
                    <img src="<?php echo base_url('FrontAssets/') ?>image/logo1.png" alt="logo-image" class="img-fluid">
                </div>
                <div class="col-sm-5 text-center text-sm-end">
                    <h4 class="text-7 mb-0">Invoice</h4>
                </div>
            </div>
            <hr>
        </header>

        <!-- Main Content -->
        <main>
            <div class="row">
                <div class="col-sm-6"><strong>Date:</strong>  <?php echo $list[0]->date ?></div>
                <div class="col-sm-6 text-sm-end"> <strong>Invoice No:</strong> <?php echo $list[0]->order_id ?></div>

            </div>
            <hr>
            <div class="row">

                <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
                    <address>
                    <?php echo $list[0]->name ?><br />
                    <?php echo $list[0]->address ?>
                    </address>
                </div>
            </div>

            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="card-header">
                                <tr>
                                    <td class="col-3"><strong>Product</strong></td>
                                    <td></td>
                                    <td class="col-2 text-center"><strong>Rate</strong></td>
                                    <td class="col-1 text-center"><strong>QTY</strong></td>
                                    <td class="col-2 text-end"><strong>Amount</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                               
                                 <?php $subtotal =0; ; foreach($list as $order){ 
                                  
                                   ?>
                                    <tr>
                                      <td colspan="2"><?php echo $order->productName ?></td>
                                      <td class="col-2 text-center"><?php echo $order->productPrice; $subtotal+= $order->productPrice ; ?></td>
                                      <td class="col-2 text-center"><?php echo $order->product_qty ?></td>
                                      <td class="col-2 text-end"><?php echo $order->product_qty * $order->productPrice ?></td>
                                    </tr>

                                  <?php } ?>
 
                            </tbody>
                            <tfoot class="card-footer">
                                <tr>
                                    <td colspan="4" class="text-end"><strong>Sub Total:</strong></td>

                                    <td class="text-end"><?php echo $subtotal ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end"><strong>Delevery Charge:</strong></td>
                                    <td class="text-end">50</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end border-bottom-0"><strong>Total:</strong></td>
                                    <td class="text-end border-bottom-0"> <?php echo $list[0]->	total_amount ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->

        <footer class="text-center mt-4">
            <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical
                signature.</p>
            <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()"
                    class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a
                    href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i>
                    Download</a> </div>
        </footer>
    </div>
</body>

</html>