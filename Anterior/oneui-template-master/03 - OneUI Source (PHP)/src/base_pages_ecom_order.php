<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Header Tiles -->
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <span class="item item-circle bg-success-light"><i class="fa fa-check text-success"></i></span>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-success font-w600">ORD.00965</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <span class="item item-circle bg-success-light"><i class="fa fa-check text-success"></i></span>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-success font-w600">Payment</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <span class="item item-circle bg-warning-light"><i class="si si-settings fa-spin text-warning"></i></span>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-warning font-w600">Packaging</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <span class="item item-circle bg-gray-lighter"><i class="fa fa-times text-muted"></i></span>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Delivery</div>
            </a>
        </div>
    </div>
    <!-- END Header Tiles -->

    <!-- Products -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Products</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>Product Name</th>
                            <th class="text-center">Stock</th>
                            <th class="text-center">QTY</th>
                            <th class="text-right" style="width: 10%;">UNIT COST</th>
                            <th class="text-right" style="width: 10%;">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.965</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Fallout 4</a></td>
                            <td class="text-center">50</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.755</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Call of Duty: Black Ops III</a></td>
                            <td class="text-center">68</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.235</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Forza Motorsport 6</a></td>
                            <td class="text-center">23</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right"><strong>Total Price:</strong></td>
                            <td class="text-right">$177,00</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right"><strong>Total Paid:</strong></td>
                            <td class="text-right">$177,00</td>
                        </tr>
                        <tr class="success">
                            <td colspan="5" class="text-right text-uppercase"><strong>Total Due:</strong></td>
                            <td class="text-right"><strong>$0,00</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Products -->

    <!-- Customer -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Billing Address -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <h3 class="block-title">Billing Address</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="h4 push-5"><?php $one->get_name(); ?></div>
                    <address>
                        Sunset Str 598<br>
                        Melbourne<br>
                        Australia, 11-671<br><br>
                        <i class="fa fa-phone"></i> (999) 888-77777<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
            <!-- END Billing Address -->
        </div>
        <div class="col-lg-6">
            <!-- Shipping Address -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <h3 class="block-title">Shipping Address</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="h4 push-5"><?php $one->get_name(); ?></div>
                    <address>
                        Sunrise Str 620<br>
                        Melbourne<br>
                        Australia, 11-587<br><br>
                        <i class="fa fa-phone"></i> (999) 888-55555<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
            <!-- END Shipping Address -->
        </div>
    </div>
    <!-- END Customer -->

    <!-- Log Messages -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Log Messages</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td style="width: 80px;">
                                <span class="label label-primary">Order</span>
                            </td>
                            <td style="width: 220px;">
                                <span class="font-w600">November 17, 2015 - 18:00</span>
                            </td>
                            <td>
                                <a href="javascript:void(0)">Support</a>
                            </td>
                            <td class="text-success">Order Completed</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary">Order</span>
                            </td>
                            <td>
                                <span class="font-w600">November 17, 2015 - 17:36</span>
                            </td>
                            <td>
                                <a href="javascript:void(0)">Support</a>
                            </td>
                            <td class="text-info">Preparing Order</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-success">Payment</span>
                            </td>
                            <td>
                                <span class="font-w600">November 16, 2015 - 18:10</span>
                            </td>
                            <td>
                                <a href="javascript:void(0)">John Doe</a>
                            </td>
                            <td class="text-success">Payment Completed</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-danger">Email</span>
                            </td>
                            <td>
                                <span class="font-w600">November 16, 2015 - 10:35</span>
                            </td>
                            <td>
                                <a href="javascript:void(0)">Support</a>
                            </td>
                            <td class="text-danger">Missing payment details. Email was sent and awaiting for payment before processing</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary">Order</span>
                            </td>
                            <td>
                                <span class="font-w600">November 15, 2015 - 14:59</span>
                            </td>
                            <td>
                                <a href="javascript:void(0)">Support</a>
                            </td>
                            <td>All products are available</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-primary">Order</span>
                            </td>
                            <td>
                                <span class="font-w600">November 15, 2015 - 14:29</span>
                            </td>
                            <td>
                                <a href="javascript:void(0)">John Doe</a>
                            </td>
                            <td>Order Submitted</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Log Messages -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>