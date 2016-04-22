<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php
// Specific Page Options
$one->inc_side_overlay = 'frontend_ecom_side_overlay.php';
$one->inc_header       = false;
?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- e-Commerce Header -->
<div class="bg-white">
    <section class="content content-mini content-boxed">
        <div class="row items-push">
            <div class="col-xs-6 col-sm-3">
                <form action="frontend_ecom_search.php" method="post">
                    <div class="input-group">
                        <input type="text" id="ecom-search" name="ecom-search" class="form-control" placeholder="Search..">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-6 col-sm-9 text-right">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" type="button" data-toggle="layout" data-action="side_overlay_toggle">
                    <i class="fa fa-shopping-cart push-5-r"></i> <span class="hidden-xs">Cart</span> (3)
                </button>
                <button class="btn btn-default hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_open">
                    <i class="fa fa-navicon"></i>
                </button>
            </div>
        </div>
    </section>
</div>
<!-- END e-Commerce Header -->

<!-- Hero Content -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo3@2x.jpg');">
    <div class="bg-primary-dark-op">
        <section class="content content-full content-boxed overflow-hidden">
            <!-- Section Content -->
            <div class="push-30-t push-30 text-center">
                <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown"><i class="fa fa-shopping-cart text-white-op"></i> Checkout.</h1>
                <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">We are almost there!</h2>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END Hero Content -->

<!-- Checkout Content -->
<section class="content content-boxed">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <!-- Card plugin (.js-card-form and .js-card-container are initialized at the bottom of the page) -->
            <!-- For more info and examples you can check out https://github.com/jessepollak/card -->
            <form class="js-card-form form-horizontal" action="frontend_ecom_checkout.php" method="post" onsubmit="return false;">
                <!-- Products -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">1. Products</h3>
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless table-vcenter">
                            <tbody>
                                <tr>
                                    <td style="max-width: 55px;" class="text-center">
                                        <a class="text-danger" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td style="width: 55px;">
                                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product1.png" alt="">
                                    </td>
                                    <td>
                                        <a class="h5" href="frontend_ecom_product.php">Iconic</a>
                                        <div class="font-s12 text-muted hidden-xs">Beautifully crafted icon set</div>
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
                                        <div class="font-s12 text-muted hidden-xs">Pro email templates</div>
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
                                        <div class="font-s12 text-muted hidden-xs">The best productivity apps</div>
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
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Products -->

                <!-- Create Account -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">2. Create Account</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material floating">
                                            <input class="form-control" id="checkout-username" name="checkout-username" type="text">
                                            <label for="checkout-username">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material floating">
                                            <input class="form-control" id="checkout-email" name="checkout-email" type="email">
                                            <label for="checkout-email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material floating">
                                            <input class="form-control" id="checkout-password" name="checkout-password" type="password">
                                            <label for="checkout-password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material floating">
                                            <input class="form-control" id="checkout-password2" name="checkout-password2" type="password">
                                            <label for="checkout-password2">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material floating">
                                            <input class="form-control" id="checkout-firstname" name="checkout-firstname" type="text">
                                            <label for="checkout-firstname">Firstname</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material floating">
                                            <input class="form-control" id="checkout-lastname" name="checkout-lastname" type="text">
                                            <label for="checkout-lastname">Lastname</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material floating">
                                            <input class="form-control" id="checkout-country" name="checkout-country" type="text">
                                            <label for="checkout-country">Country</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material floating">
                                            <input class="form-control" id="checkout-city" name="checkout-city" type="text">
                                            <label for="checkout-city">City</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Create Account -->

                <!-- Credit Card -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">3. Credit Card</h3>
                    </div>
                    <div class="block-content">
                        <!-- Card Container -->
                        <div class="js-card-container hidden-xs push-50"></div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material">
                                            <input class="form-control" id="checkout-cc-number" name="checkout-cc-number" type="text" placeholder="**** **** **** ****">
                                            <label for="checkout-cc-number">Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material">
                                            <input class="form-control" id="checkout-cc-name" name="checkout-cc-name" type="text" placeholder="JOHN DOE">
                                            <label for="checkout-cc-name">Full Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class="form-material">
                                            <input class="form-control" id="checkout-cc-expiry" name="checkout-cc-expiry" type="text" placeholder="01/2019">
                                            <label for="checkout-cc-expiry">MM/YYYY</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-material">
                                            <input class="form-control" id="checkout-cc-cvc" name="checkout-cc-cvc" type="text" placeholder="***">
                                            <label for="checkout-cc-cvc">CVC</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-check push-5-r"></i> Complete Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Credit Card -->
            </form>
        </div>
    </div>
</section>
<!-- END Checkout Content -->

<?php require 'inc/views/frontend_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/card/jquery.card.min.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');

        // Init Card, for more info and examples you can check out https://github.com/jessepollak/card
        jQuery('.js-card-form').card({
            container: '.js-card-container',
            formSelectors: {
                numberInput: '#checkout-cc-number',
                expiryInput: '#checkout-cc-expiry',
                cvcInput: '#checkout-cc-cvc',
                nameInput: '#checkout-cc-name'
            }
        });
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>