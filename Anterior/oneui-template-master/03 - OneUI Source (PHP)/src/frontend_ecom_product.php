<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php
// Specific Page Options
$one->inc_side_overlay = 'frontend_ecom_side_overlay.php';
$one->inc_header       = false;
?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/magnific-popup/magnific-popup.min.css">

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
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/various/ecom_product6.png');">
    <div class="bg-primary-dark-op">
        <section class="content content-full content-boxed overflow-hidden">
            <!-- Section Content -->
            <div class="push-30-t push-30 text-center">
                <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Super Badges Pack.</h1>
                <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">1000s of high quality badges.</h2>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END Hero Content -->

<!-- Side Content and Product -->
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
                                <li class="active">
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
                <!-- Product -->
                <div class="block">
                    <div class="block-content">
                        <div class="row items-push">
                            <div class="col-sm-6">
                                <!-- Images -->
                                <div class="row js-gallery">
                                    <div class="col-xs-12 push-10">
                                        <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/various/ecom_product6.png">
                                            <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/various/ecom_product6_a.png">
                                            <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product6_a.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/various/ecom_product6_b.png">
                                            <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product6_b.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/various/ecom_product6_c.png">
                                            <img class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/ecom_product6_c.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END Images -->
                            </div>
                            <div class="col-sm-6">
                                <!-- Vital Info -->
                                <div class="clearfix">
                                    <div class="pull-right">
                                        <span class="h2 font-w700 text-success">$58</span>
                                    </div>
                                    <span class="h5">
                                        <span class="font-w600 text-success">IN STOCK</span><br><small>200 Available</small>
                                    </span>
                                </div>
                                <hr>
                                <form class="form-inline" action="frontend_ecom_product.php" method="post" onsubmit="return false;">
                                    <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus push-5-r"></i> Add to Cart</button>
                                    <select class="form-control input-sm" id="ecom-license" name="ecom-license" size="1">
                                        <option value="0" disabled selected>LICENSE</option>
                                        <option value="simple">Simple</option>
                                        <option value="multiple">Multiple</option>
                                    </select>
                                </form>
                                <hr>
                                <?php echo $one->get_text(); ?>
                                <!-- END Vital Info -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Author -->
                                <div class="block block-rounded remove-margin-b">
                                    <div class="block-content block-content-full bg-gray-lighter clearfix">
                                        <div class="pull-right">
                                            <?php $one->get_avatar(2); ?>
                                        </div>
                                        <div class="pull-left push-5-t">
                                            <div class="push-10">
                                                By <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                            </div>
                                            <div>
                                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-plus push-5-r"></i> Follow</a>
                                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Author -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Extra Info -->
                                <div class="block">
                                    <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                                        <li class="active">
                                            <a href="#ecom-product-info">Info</a>
                                        </li>
                                        <li>
                                            <a href="#ecom-product-comments">Comments</a>
                                        </li>
                                        <li>
                                            <a href="#ecom-product-reviews">Reviews</a>
                                        </li>
                                    </ul>
                                    <div class="block-content tab-content">
                                        <!-- Info -->
                                        <div class="tab-pane pull-r-l active" id="ecom-product-info">
                                            <table class="table table-striped table-borderless remove-margin-b">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">File Formats</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 20%;">Sketch</td>
                                                        <td>
                                                            <i class="fa fa-check text-success"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PSD</td>
                                                        <td>
                                                            <i class="fa fa-check text-success"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PDF</td>
                                                        <td>
                                                            <i class="fa fa-times text-danger"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>AI</td>
                                                        <td>
                                                            <i class="fa fa-check text-success"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EPS</td>
                                                        <td>
                                                            <i class="fa fa-check text-success"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-striped table-borderless remove-margin-b">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">Extra</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 20%;"><i class="fa fa-calendar text-muted push-5-r"></i> Date</td>
                                                        <td>January 15, 2016</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-anchor text-muted push-5-r"></i> File Size</td>
                                                        <td>265.36 MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="si si-vector text-muted push-5-r"></i> Vector</td>
                                                        <td>
                                                            <i class="fa fa-check text-success"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-expand text-muted push-5-r"></i> Dimensions</td>
                                                        <td>
                                                            <div class="push-5">16 x 16 px</div>
                                                            <div class="push-5">32 x 32 px</div>
                                                            <div class="push-5">64 x 64 px</div>
                                                            <div class="push-5">128 x 128 px</div>
                                                            <div>256 x 256 px</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END Info -->

                                        <!-- Comments -->
                                        <div class="tab-pane pull-r-l" id="ecom-product-comments">
                                            <div class="media push-15">
                                                <div class="media-left">
                                                    <a href="javascript:void(0)">
                                                        <?php echo $one->get_avatar(3, '', 32); ?>
                                                    </a>
                                                </div>
                                                <div class="media-body font-s13">
                                                    <a class="font-w600" href="javascript:void(0)"><?php echo $one->get_name('female'); ?></a>
                                                    <mark class="font-w600 font-s13 text-danger">Purchased</mark>
                                                    <div class="push-5">High quality, thanks so much for sharing!</div>
                                                    <div class="font-s12">
                                                        <a href="javascript:void(0)">Like!</a> -
                                                        <a href="javascript:void(0)">Reply</a> -
                                                        <span class="text-muted"><em>12 min ago</em></span>
                                                    </div>
                                                    <div class="media push-10">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <?php echo $one->get_avatar(2, '', 32); ?>
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                            <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                                            <mark class="font-w600 font-s13 text-success">Author</mark>
                                                            <div class="push-5">Thanks so much!!</div>
                                                            <div class="font-s12">
                                                                <a href="javascript:void(0)">Like!</a> -
                                                                <a href="javascript:void(0)">Reply</a> -
                                                                <span class="text-muted"><em>20 min ago</em></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media push-15">
                                                <div class="media-left">
                                                    <a href="javascript:void(0)">
                                                        <?php echo $one->get_avatar(12, '', 32); ?>
                                                    </a>
                                                </div>
                                                <div class="media-body font-s13">
                                                    <a class="font-w600" href="javascript:void(0)"><?php echo $one->get_name('male'); ?></a>
                                                    <mark class="font-w600 font-s13 text-danger">Purchased</mark>
                                                    <div class="push-5">Great work, thank you!</div>
                                                    <div class="font-s12">
                                                        <a href="javascript:void(0)">Like!</a> -
                                                        <a href="javascript:void(0)">Reply</a> -
                                                        <span class="text-muted"><em>30 min ago</em></span>
                                                    </div>
                                                    <div class="media push-10">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <?php echo $one->get_avatar(2, '', 32); ?>
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                            <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                                            <mark class="font-w600 font-s13 text-success">Author</mark>
                                                            <div class="push-5">Thanks so much!!</div>
                                                            <div class="font-s12">
                                                                <a href="javascript:void(0)">Like!</a> -
                                                                <a href="javascript:void(0)">Reply</a> -
                                                                <span class="text-muted"><em>20 min ago</em></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media push-15">
                                                <div class="media-left">
                                                    <a href="javascript:void(0)">
                                                        <?php echo $one->get_avatar(14, '', 32); ?>
                                                    </a>
                                                </div>
                                                <div class="media-body font-s13">
                                                    <a class="font-w600" href="javascript:void(0)"><?php echo $one->get_name('male'); ?></a>
                                                    <div class="push-5">Really nice!</div>
                                                    <div class="font-s12">
                                                        <a href="javascript:void(0)">Like!</a> -
                                                        <a href="javascript:void(0)">Reply</a> -
                                                        <span class="text-muted"><em>42 min ago</em></span>
                                                    </div>
                                                    <div class="media push-10">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <?php echo $one->get_avatar(2, '', 32); ?>
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                            <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                                            <mark class="font-w600 font-s13 text-success">Author</mark>
                                                            <div class="push-5">Thanks so much!!</div>
                                                            <div class="font-s12">
                                                                <a href="javascript:void(0)">Like!</a> -
                                                                <a href="javascript:void(0)">Reply</a> -
                                                                <span class="text-muted"><em>20 min ago</em></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="form-horizontal remove-margin-b" action="base_ui_timeline_social.php" method="post" onsubmit="return false;">
                                                <input class="form-control" type="text" placeholder="Write a comment..">
                                            </form>
                                        </div>
                                        <!-- END Comments -->

                                        <!-- Reviews -->
                                        <div class="tab-pane pull-r-l" id="ecom-product-reviews">
                                            <!-- Average Rating -->
                                            <div class="block block-rounded">
                                                <div class="block-content bg-gray-lighter text-center">
                                                    <p class="h2 text-warning push-10">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </p>
                                                    <p>
                                                        <strong>5.0</strong>/5.0 out of <strong>5</strong> Ratings
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- END Average Rating -->

                                            <!-- Ratings -->
                                            <div class="media push-15">
                                                <div class="media-left">
                                                    <a href="javascript:void(0)">
                                                        <?php echo $one->get_avatar(0, 'male', 32); ?>
                                                    </a>
                                                </div>
                                                <div class="media-body font-s13">
                                                    <span class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <a class="font-w600" href="javascript:void(0)"><?php echo $one->get_name('male'); ?></a>
                                                    <div class="push-5">Awesome Quality!</div>
                                                    <div class="font-s12">
                                                        <span class="text-muted"><em>2 hours ago</em></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media push-15">
                                                <div class="media-left">
                                                    <a href="javascript:void(0)">
                                                        <?php echo $one->get_avatar(0, 'female', 32); ?>
                                                    </a>
                                                </div>
                                                <div class="media-body font-s13">
                                                    <span class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <a class="font-w600" href="javascript:void(0)"><?php echo $one->get_name('female'); ?></a>
                                                    <div class="push-5">So cool badges!</div>
                                                    <div class="font-s12">
                                                        <span class="text-muted"><em>5 hours ago</em></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media push-15">
                                                <div class="media-left">
                                                    <a href="javascript:void(0)">
                                                        <?php echo $one->get_avatar(0, 'male', 32); ?>
                                                    </a>
                                                </div>
                                                <div class="media-body font-s13">
                                                    <span class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <a class="font-w600" href="javascript:void(0)"><?php echo $one->get_name('male'); ?></a>
                                                    <div class="push-5">They look great, thank you!</div>
                                                    <div class="font-s12">
                                                        <span class="text-muted"><em>15 hours ago</em></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media push-15">
                                                <div class="media-left">
                                                    <a href="javascript:void(0)">
                                                        <?php echo $one->get_avatar(0, 'male', 32); ?>
                                                    </a>
                                                </div>
                                                <div class="media-body font-s13">
                                                    <span class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <a class="font-w600" href="javascript:void(0)"><?php echo $one->get_name('male'); ?></a>
                                                    <div class="push-5">Badges for life!</div>
                                                    <div class="font-s12">
                                                        <span class="text-muted"><em>20 hours ago</em></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media push-15">
                                                <div class="media-left">
                                                    <a href="javascript:void(0)">
                                                        <?php echo $one->get_avatar(0, 'female', 32); ?>
                                                    </a>
                                                </div>
                                                <div class="media-body font-s13">
                                                    <span class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <a class="font-w600" href="javascript:void(0)"><?php echo $one->get_name('female'); ?></a>
                                                    <div class="push-5">So good, keep it up!</div>
                                                    <div class="font-s12">
                                                        <span class="text-muted"><em>22 hours ago</em></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Ratings -->
                                        </div>
                                        <!-- END Reviews -->
                                    </div>
                                </div>
                                <!-- END Extra Info -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Product -->
            </div>
        </div>
    </section>
</div>
<!-- END Side Content and Product -->

<?php require 'inc/views/frontend_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/magnific-popup/magnific-popup.min.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Appear + Magnific Popup plugins)
        App.initHelpers(['appear', 'magnific-popup']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>