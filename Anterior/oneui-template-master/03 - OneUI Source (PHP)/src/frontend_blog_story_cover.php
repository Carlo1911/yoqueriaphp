<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/magnific-popup/magnific-popup.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Cover (You can add the class 'bg-image-parallax' for a parallax effect) -->
<div class="bg-image bg-image-cover" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo23@2x.jpg');"></div>
<!-- END Cover -->

<!-- Story Content -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <h1 class="text-black text-center push-30-t push-10 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">Travel the world and feel alive.</h1>
        <div class="text-center visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
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
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo2@2x.jpg">
                                <?php $one->get_photo(2, false, 'img-responsive'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo10@2x.jpg">
                                <?php $one->get_photo(10, false, 'img-responsive'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo15@2x.jpg">
                                <?php $one->get_photo(15, false, 'img-responsive'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo13@2x.jpg">
                                <?php $one->get_photo(13, false, 'img-responsive'); ?>
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
                        <div class="col-xs-6 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo6@2x.jpg">
                                <?php $one->get_photo(6, false, 'img-responsive'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 animated fadeIn">
                            <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo8@2x.jpg">
                                <?php $one->get_photo(8, false, 'img-responsive'); ?>
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

<!-- Get Started -->
<div class="bg-gray-lighter">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Do you like our stories? Sign up today and get access to over <strong>10.000</strong> travel stories!</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_pricing.php">Get Started Today</a>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Get Started -->

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