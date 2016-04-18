<?php
/**
 * frontend_ecom_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of e-Commerce pages (Frontend)
 *
 */
?>
<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Overlay Scroll Container -->
    <div id="side-overlay-scroll">
        <!-- Side Header -->
        <div class="side-header side-content">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times"></i>
            </button>
            <span>
                <?php $one->get_avatar('10', '', 32); ?>
                <span class="font-w600 push-10-l"><?php $one->get_name('male'); ?></span>
            </span>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="side-content remove-padding-t">
            <!-- Shopping Cart -->
            <div class="block pull-r-l">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Shopping Cart (3)</h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l">
                        <table class="table table-borderless table-vcenter">
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <a class="text-danger" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td style="width: 55px;">
                                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product1.png" alt="">
                                    </td>
                                    <td>
                                        <a class="h5" href="frontend_ecom_product.php">Iconic</a>
                                        <div class="font-s12 text-muted">Beautifully crafted icon set</div>
                                    </td>
                                    <td class="text-right">
                                        <div class="font-w600 text-success">$9</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <a class="text-danger" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td style="width: 55px;">
                                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product2.png" alt="">
                                    </td>
                                    <td>
                                        <a class="h5" href="frontend_ecom_product.php">Mailday</a>
                                        <div class="font-s12 text-muted">Pro email templates</div>
                                    </td>
                                    <td class="text-right">
                                        <div class="font-w600 text-success">$16</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <a class="text-danger" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td style="width: 55px;">
                                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product3.png" alt="">
                                    </td>
                                    <td>
                                        <a class="h5" href="frontend_ecom_product.php">Office Suite</a>
                                        <div class="font-s12 text-muted">The best productivity apps</div>
                                    </td>
                                    <td class="text-right">
                                        <div class="font-w600 text-success">$75</div>
                                    </td>
                                </tr>
                                <tr class="success">
                                    <td class="text-right" colspan="3">
                                        <span class="h4 font-w600">Total</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="h4 font-w600 text-success">$100</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="4">
                                        <a class="btn btn-sm btn-warning" href="frontend_ecom_checkout.php">
                                            <i class="fa fa-refresh push-5-r"></i> Reset
                                        </a>
                                        <a class="btn btn-sm btn-success" href="frontend_ecom_checkout.php">
                                            <i class="fa fa-check push-5-r"></i> Checkout
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Shopping Cart -->
        </div>
        <!-- END Side Content -->
    </div>
    <!-- END Side Overlay Scroll Container -->
</aside>
<!-- END Side Overlay -->
