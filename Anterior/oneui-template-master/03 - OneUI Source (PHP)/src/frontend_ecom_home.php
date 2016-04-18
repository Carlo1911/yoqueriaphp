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
                <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Welcome to our Digital Store!</h1>
                <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Feel free to explore.</h2>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END Hero Content -->

<!-- Products -->
<div class="bg-gray-lighter">
    <section class="content content-boxed">
        <!-- New Arrivals -->
        <h3 class="font-w400 text-black push-30-t push-20">New Arrivals</h3>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product1.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                    <span class="text-white">(35)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$9</div>
                            <a class="h4" href="frontend_ecom_product.php">Iconic</a>
                        </div>
                        <p class="text-muted">Beautifully crafted icon set</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product2.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(48)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$16</div>
                            <a class="h4" href="frontend_ecom_product.php">Mailday</a>
                        </div>
                        <p class="text-muted">Pro email templates</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product3.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                    <span class="text-white">(19)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$75</div>
                            <a class="h4" href="frontend_ecom_product.php">Office Suite</a>
                        </div>
                        <p class="text-muted">The best productivity apps</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product4.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(69)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$15</div>
                            <a class="h4" href="frontend_ecom_product.php">Steam Games</a>
                        </div>
                        <p class="text-muted">3-in-1 Adventure Pack</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-right push">
                <a class="font-w600 link-effect" href="frontend_ecom_products.php">View More New Arrivals <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- END New Arrivals -->

        <!-- Best Sellers -->
        <h3 class="font-w400 text-black push-20">Best Sellers</h3>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product5.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(690)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$44</div>
                            <a class="h4" href="frontend_ecom_product.php">Video UI Kit</a>
                        </div>
                        <p class="text-muted">Media components that work</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product6.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(480)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$58</div>
                            <a class="h4" href="frontend_ecom_product.php">Super Badges Pack</a>
                        </div>
                        <p class="text-muted">1000s of high quality badges</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product7.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(520)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$65</div>
                            <a class="h4" href="frontend_ecom_product.php">RPG Game Pack</a>
                        </div>
                        <p class="text-muted">10-in-1 Anniversary Pack</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product8.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(490)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$17</div>
                            <a class="h4" href="frontend_ecom_product.php">Antivir</a>
                        </div>
                        <p class="text-muted">Antivirus protection for all</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-right push">
                <a class="font-w600 link-effect" href="frontend_ecom_products.php">View More Best Sellers <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- END Best Sellers -->

        <!-- Best Rated -->
        <h3 class="font-w400 text-black push-20">Best Rated</h3>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product9.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(1050)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$18</div>
                            <a class="h4" href="frontend_ecom_product.php">MapNow</a>
                        </div>
                        <p class="text-muted">Map service for your app</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product10.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(998)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$44</div>
                            <a class="h4" href="frontend_ecom_product.php">Calendious</a>
                        </div>
                        <p class="text-muted">Management for freelancers</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product11.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(870)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$35</div>
                            <a class="h4" href="frontend_ecom_product.php">Todo App</a>
                        </div>
                        <p class="text-muted">All your tasks in one place</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="block">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product12.png" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <div class="push-20">
                                    <a class="btn btn-sm btn-default" href="frontend_ecom_product.php">View</a>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                        <i class="fa fa-plus"></i> Add to cart
                                    </a>
                                </div>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="text-white">(745)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="push-10">
                            <div class="h4 font-w600 text-success pull-right push-10-l">$22</div>
                            <a class="h4" href="frontend_ecom_product.php">e-Music</a>
                        </div>
                        <p class="text-muted">Music streaming service</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-right push">
                <a class="font-w600 link-effect" href="frontend_ecom_products.php">View More Best Rated <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- END Best Rated -->
    </section>
</div>
<!-- END Products -->

<!-- Explore Store -->
<section class="content content-full content-boxed">
    <!-- Section Content -->
    <div class="push-20-t push-20 text-center">
        <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Over <strong>50.000</strong> digital products!</h3>
        <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_ecom_products.php">Explore Store <i class="fa fa-arrow-right"></i></a>
    </div>
    <!-- END Section Content -->
</section>
<!-- END Explore Store -->

<?php require 'inc/views/frontend_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>