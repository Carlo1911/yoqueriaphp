<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo18@2x.jpg');">
    <div class="bg-primary-dark-op">
        <section class="content content-full content-boxed overflow-hidden">
            <!-- Section Content -->
            <div class="push-100-t push-50 text-center">
                <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">The latest stories only for you.</h1>
                <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Feel free to explore and read.</h2>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END Hero Content -->

<!-- List Content -->
<section class="content content-boxed">
    <!-- Section Content -->
    <div class="push-50-t push-50">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!-- Story -->
                <div class="push visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-link-hover2" href="frontend_blog_story.php">
                        <?php $one->get_photo(21, false, 'img-responsive hidden-xs'); ?>
                        <div class="block-content">
                            <div class="font-s12 push">
                                <em class="pull-right">10 min</em>
                                <span class="text-primary"><?php $one->get_name(); ?></span> on July 16, 2015
                            </div>
                            <h4 class="push-10">Top 10 Destinations</h4>
                            <?php $one->get_text('small'); ?>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

                <!-- Story -->
                <div class="push visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-link-hover2" href="frontend_blog_story.php">
                        <?php $one->get_photo(22, false, 'img-responsive hidden-xs'); ?>
                        <div class="block-content">
                            <div class="font-s12 push">
                                <em class="pull-right">15 min</em>
                                <span class="text-primary"><?php $one->get_name(); ?></span> on July 13, 2015
                            </div>
                            <h4 class="push-10">Follow Your Dreams</h4>
                            <?php $one->get_text('small'); ?>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

                <!-- Story -->
                <div class="push visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-link-hover2" href="frontend_blog_story.php">
                        <?php $one->get_photo(23, false, 'img-responsive hidden-xs'); ?>
                        <div class="block-content">
                            <div class="font-s12 push">
                                <em class="pull-right">12 min</em>
                                <span class="text-primary"><?php $one->get_name(); ?></span> on July 6, 2015
                            </div>
                            <h4 class="push-10">Travel &amp; Work</h4>
                            <?php $one->get_text('small'); ?>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

                <!-- Story -->
                <div class="push visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-link-hover2" href="frontend_blog_story.php">
                        <?php $one->get_photo(24, false, 'img-responsive hidden-xs'); ?>
                        <div class="block-content">
                            <div class="font-s12 push">
                                <em class="pull-right">9 min</em>
                                <span class="text-primary"><?php $one->get_name(); ?></span> on June 21, 2015
                            </div>
                            <h4 class="push-10">Sleep Better</h4>
                            <?php $one->get_text('small'); ?>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

                <!-- Story -->
                <div class="push visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-link-hover2" href="frontend_blog_story.php">
                        <?php $one->get_photo(4, false, 'img-responsive hidden-xs'); ?>
                        <div class="block-content">
                            <div class="font-s12 push">
                                <em class="pull-right">5 min</em>
                                <span class="text-primary"><?php $one->get_name(); ?></span> on June 16, 2015
                            </div>
                            <h4 class="push-10">Black &amp; White</h4>
                            <?php $one->get_text('small'); ?>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

                <!-- Story -->
                <div class="push visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-link-hover2" href="frontend_blog_story.php">
                        <?php $one->get_photo(6, false, 'img-responsive hidden-xs'); ?>
                        <div class="block-content">
                            <div class="font-s12 push">
                                <em class="pull-right">3 min</em>
                                <span class="text-primary"><?php $one->get_name(); ?></span> on June 1, 2015
                            </div>
                            <h4 class="push-10">Exploring the Alps</h4>
                            <?php $one->get_text('small'); ?>
                        </div>
                    </a>
                </div>
                <!-- END Story -->
            </div>
        </div>

        <!-- Pagination -->
        <nav class="text-center">
            <ul class="pagination">
                <li class="active">
                    <a href="javascript:void(0)">1</a>
                </li>
                <li>
                    <a href="javascript:void(0)">2</a>
                </li>
                <li>
                    <a href="javascript:void(0)">3</a>
                </li>
                <li>
                    <a href="javascript:void(0)">4</a>
                </li>
                <li>
                    <a href="javascript:void(0)">5</a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
                </li>
            </ul>
        </nav>
        <!-- END Pagination -->
    </div>
    <!-- END Section Content -->
</section>
<!-- END List Content -->

<!-- Get Started -->
<div class="bg-primary-dark">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 text-white-op push-20 visibility-hidden" data-toggle="appear">Do you like our stories? Sign up today and get access to over <strong>10.000</strong> travel stories!</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_pricing.php">Get Started Today</a>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Get Started -->

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