<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Header Tiles -->
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="base_pages_ecom_orders.php">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700 text-primary" data-toggle="countTo" data-to="35"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Pending Orders</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700 text-success" data-toggle="countTo" data-to="28" data-after="%"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Profit</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="base_pages_ecom_orders.php">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700" data-toggle="countTo" data-to="109"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Orders Today</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700">$<span data-toggle="countTo" data-to="8970"></span></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Earnings Today</div>
            </a>
        </div>
    </div>
    <!-- END Header Tiles -->

    <!-- Overview -->
    <div class="block block-opt-refresh-icon4">
        <div class="block-header bg-gray-lighter">
            <ul class="block-options">
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Orders Overview</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- Chart.js Charts (initialized in js/pages/base_pages_ecom_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
            <div style="height: 400px;"><canvas class="js-chartjs-overview"></canvas></div>
        </div>
    </div>
    <!-- END Overview -->

    <!-- Top Products and Latest Orders -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Top Products -->
            <div class="block block-opt-refresh-icon4">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Top Products</h3>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 100px;"><a href="base_pages_ecom_product_edit.php"><strong>PID.965</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">Destiny: The Taken King</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.154</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">Call of Duty: Black Ops III</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.523</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">Minecraft: Story Mode</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.423</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">Super Mario Maker</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.391</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">Fallout 4</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.218</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">NBA 2K16</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.995</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">Forza Motorsport 6</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.761</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">Minecraft</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.860</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">Super Smash Bros</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.952</strong></a></td>
                                <td><a href="base_pages_ecom_product_edit.php">Halo 5: Guardians</a></td>
                                <td class="hidden-xs text-center">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Top Products -->
        </div>
        <div class="col-lg-6">
            <!-- Latest Orders -->
            <div class="block block-opt-refresh-icon4">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Latest Orders</h3>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 100px;"><a href="base_pages_ecom_order.php"><strong>ORD.7116</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7115</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-danger">Canceled</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7114</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7113</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-warning">Processing</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7112</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7111</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-warning">Processing</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7110</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7109</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-warning">Processing</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7108</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7107</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-danger">Canceled</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Latest Orders -->
        </div>
    </div>
    <!-- END Top Products and Latest Orders -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/chartjs/Chart.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_ecom_dashboard.js"></script>
<script>
    jQuery(function(){
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>