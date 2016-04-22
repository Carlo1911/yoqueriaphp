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

<!-- Side Content and Products -->
<div class="bg-gray-lighter">
    <section class="content content-boxed">
        <div class="row">
            <div class="col-lg-3">
                <!-- Buttons which toggles side nav content content in smaller screens -->
                <!-- Toggle class helper (for .js-nav-content below), functionality initialized in App() -> uiToggleClass() -->
                <div class="block hidden-lg">
                    <div class="block-content">
                        <button class="btn btn-sm btn-block btn-default push" type="button" data-toggle="class-toggle" data-target=".js-nav-content" data-class="visible-lg">
                            <i class="fa fa-list-ul push-5-r"></i> Navigation
                        </button>
                    </div>
                </div>

                <!-- Side Content -->
                <div class="js-nav-content visible-lg">
                    <!-- Categories -->
                    <div class="block">
                        <div class="block-content">
                            <ul class="nav nav-pills nav-stacked push">
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">7k</span> Icons</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">2k</span> Apps</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">3k</span> Games</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">18k</span> Graphics</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">2k</span> Services</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">12k</span> UI Kits</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">6k</span> Themes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Categories -->

                    <!-- Best Authors -->
                    <div class="block">
                        <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="pull-right">
                                    <?php $one->get_avatar('', 'female'); ?>
                                </div>
                                <div class="pull-left push-10-t">
                                    <div class="font-w600 push-5"><?php $one->get_name('female'); ?></div>
                                    <div class="text-muted">50k Sales</div>
                                </div>
                            </div>
                        </a>
                        <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="pull-right">
                                    <?php $one->get_avatar('', 'male'); ?>
                                </div>
                                <div class="pull-left push-10-t">
                                    <div class="font-w600 push-5"><?php $one->get_name('male'); ?></div>
                                    <div class="text-muted">48k Sales</div>
                                </div>
                            </div>
                        </a>
                        <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="pull-right">
                                    <?php $one->get_avatar('', 'female'); ?>
                                </div>
                                <div class="pull-left push-10-t">
                                    <div class="font-w600 push-5"><?php $one->get_name('female'); ?></div>
                                    <div class="text-muted">35k Sales</div>
                                </div>
                            </div>
                        </a>
                        <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="pull-right">
                                    <?php $one->get_avatar('', 'male'); ?>
                                </div>
                                <div class="pull-left push-10-t">
                                    <div class="font-w600 push-5"><?php $one->get_name('male'); ?></div>
                                    <div class="text-muted">31k Sales</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- END Best Authors -->
                </div>
                <!-- END Side Content -->
            </div>
            <div class="col-lg-9">
                <!-- Sort and Show Filters -->
                <div class="form-inline clearfix">
                    <select id="ecom-results-show" name="ecom-results-show" class="form-control push pull-right" size="1">
                        <option value="0" disabled selected>SHOW</option>
                        <option value="9">9</option>
                        <option value="18">18</option>
                        <option value="36">36</option>
                        <option value="72">72</option>
                    </select>
                    <select id="ecom-results-sort" name="ecom-results-sort" class="form-control push" size="1">
                        <option value="0" disabled selected>SORT BY</option>
                        <option value="1">Popularity</option>
                        <option value="2">Name (A to Z)</option>
                        <option value="3">Name (Z to A)</option>
                        <option value="4">Price (Lowest to Highest)</option>
                        <option value="5">Price (Highest to Lowest)</option>
                        <option value="6">Sales (Lowest to Highest)</option>
                        <option value="7">Sales (Highest to Lowest)</option>
                    </select>
                </div>
                <!-- END Sort and Show Filters -->

                <!-- Products -->
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
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
                    <div class="col-sm-6 col-lg-4">
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
                    <div class="col-sm-6 col-lg-4">
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
                    <div class="col-sm-6 col-lg-4">
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
                    <div class="col-sm-6 col-lg-4">
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
                    <div class="col-sm-6 col-lg-4">
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
                    <div class="col-sm-6 col-lg-4">
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
                    <div class="col-sm-6 col-lg-4">
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
                    <div class="col-sm-6 col-lg-4">
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
                    <div class="col-xs-12 push">
                        <ul class="pager">
                            <li class="next">
                                <a href="javascript:void(0)">Next <i class="fa fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Products -->
            </div>
        </div>
    </section>
</div>
<!-- END Side Content and Products -->

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