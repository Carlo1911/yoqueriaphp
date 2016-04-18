<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/magnific-popup/magnific-popup.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo23@2x.jpg');">
    <div class="bg-primary-op">
        <section class="content content-full content-boxed overflow-hidden">
            <!-- Section Content -->
            <div class="push-150-t push-150 text-center">
                <h1 class="text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Travel the world and feel alive.</h1>
                <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Experience life like never before.</h2>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END Hero Content -->

<!-- Story Content -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="text-center">
            <a class="link-effect font-s13 font-w600" href="javascript:void(0)">John Doe</a> on July 16, 2015 &bull; <em>5 min</em>
        </div>
        <div class="row push-50-t push-50 nice-copy-story">
            <div class="col-sm-8 col-sm-offset-2">
                <?php $one->get_text('medium', 1); ?>

                <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                <div class="content-grid">
                    <div class="row js-gallery">
                        <div class="col-xs-6 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo21@2x.jpg">
                                <?php $one->get_photo(21, false, 'img-responsive'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo22@2x.jpg">
                                <?php $one->get_photo(22, false, 'img-responsive'); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Gallery -->

                <?php $one->get_text('medium'); ?>

                <h3 class="font-w400 text-black push-50-t push-20">Experiences</h3>
                <?php $one->get_text('large'); ?>

                <h3 class="font-w400 text-black push-50-t push-20">Exploring</h3>
                <?php $one->get_text('medium'); ?>

                <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                <div class="content-grid">
                    <div class="row js-gallery">
                        <div class="col-xs-12 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo23@2x.jpg">
                                <?php $one->get_photo(23, true, 'img-responsive'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo24@2x.jpg">
                                <?php $one->get_photo(24, false, 'img-responsive'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo14@2x.jpg">
                                <?php $one->get_photo(14, false, 'img-responsive'); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Gallery -->

                <?php $one->get_text('medium'); ?>

                <h3 class="font-w400 text-black push-50-t push-20">Memories</h3>
                <?php $one->get_text('medium'); ?>

                <!-- Actions -->
                <div class="push-50-t clearfix">
                    <div class="btn-toolbar pull-right">
                        <a class="btn btn-default" data-toggle="tooltip" title="Like Story" href="javascript:void(0)"><i class="fa fa-thumbs-o-up"></i></a>
                        <div class="btn-group dropup">
                            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"  href="javascript:void(0)"><i class="fa fa-share-alt"></i> Share</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)"><i class="fa fa-fw fa-facebook pull-right"></i> Facebook</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)"><i class="fa fa-fw fa-twitter pull-right"></i> Twitter</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)"><i class="fa fa-fw fa-google-plus pull-right"></i> Google+</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)"><i class="fa fa-fw fa-linkedin pull-right"></i> LinkedIn</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="btn btn-success" href="javascript:void(0)"><i class="fa fa-heart push-5-r"></i> Recommend</a>
                </div>
                <!-- END Actions -->
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Story Content -->

<!-- More Stories -->
<section class="content content-boxed">
    <!-- Section Content -->
    <div class="row push-30-t push-30">
        <div class="col-sm-4">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo2.jpg');">
                    <h4 class="text-white push-50-t push">10 Productivity Tips</h4>
                </div>
                <div class="block-content block-content-full font-s12">
                    <em class="pull-right">12 min</em>
                    <span class="text-primary"><?php $one->get_name(); ?></span> on July 2, 2015
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo10.jpg');">
                    <h4 class="text-white push-50-t push">Travel &amp; Work</h4>
                </div>
                <div class="block-content block-content-full font-s12">
                    <em class="pull-right">15 min</em>
                    <span class="text-primary"><?php $one->get_name(); ?></span> on July 6, 2015
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo3.jpg');">
                    <h4 class="text-white push-50-t push">New Image Gallery</h4>
                </div>
                <div class="block-content block-content-full font-s13">
                    <em class="pull-right">10 min</em>
                    <span class="text-primary"><?php $one->get_name(); ?></span> on June 29, 2015
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo23.jpg');">
                    <h4 class="text-white push-50-t push">Explore the World</h4>
                </div>
                <div class="block-content block-content-full font-s12">
                    <em class="pull-right">13 min</em>
                    <span class="text-primary"><?php $one->get_name(); ?></span> on June 16, 2015
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo22.jpg');">
                    <h4 class="text-white push-50-t push">Follow Your Dreams</h4>
                </div>
                <div class="block-content block-content-full font-s12">
                    <em class="pull-right">10 min</em>
                    <span class="text-primary"><?php $one->get_name(); ?></span> on May 23, 2015
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo24.jpg');">
                    <h4 class="text-white push-50-t push">Top 10 Destinations</h4>
                </div>
                <div class="block-content block-content-full font-s12">
                    <em class="pull-right">7 min</em>
                    <span class="text-primary"><?php $one->get_name(); ?></span> on May 15, 2015
                </div>
            </a>
        </div>
    </div>
    <!-- END Section Content -->
</section>
<!-- END More Stories -->

<?php require 'inc/views/frontend_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/magnific-popup/magnific-popup.min.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Appear + Magnific Popup plugin)
        App.initHelpers(['appear', 'magnific-popup']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>