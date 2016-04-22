<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Ribbons <small>Easily add cool ribbons to your blocks.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Ribbons</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Simple Ribbon -->
    <h2 class="content-heading">Simple Ribbon</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <!-- Default Position -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-primary">
                    <div class="ribbon-box font-w600">$28</div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-html5 fa-3x text-gray push"></i>
                        <h3 class="h4">Learn HTML5</h3>
                    </div>
                </div>
            </div>
            <!-- END Default Position -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Bottom Right -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-primary ribbon-bottom">
                    <div class="ribbon-box font-w600">$28</div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-html5 fa-3x text-gray push"></i>
                        <h3 class="h4">Learn HTML5</h3>
                    </div>
                </div>
            </div>
            <!-- END Bottom Right -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Bottom Left -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-primary ribbon-left ribbon-bottom">
                    <div class="ribbon-box font-w600">$28</div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-html5 fa-3x text-gray push"></i>
                        <h3 class="h4">Learn HTML5</h3>
                    </div>
                </div>
            </div>
            <!-- END Bottom Left -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Top Left -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-primary ribbon-left">
                    <div class="ribbon-box font-w600">$28</div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-html5 fa-3x text-gray push"></i>
                        <h3 class="h4">Learn HTML5</h3>
                    </div>
                </div>
            </div>
            <!-- END Top Left -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Success Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-success">
                    <div class="ribbon-box font-w600">$32</div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-css3 fa-3x text-gray push"></i>
                        <h3 class="h4">Discover CSS3</h3>
                    </div>
                </div>
            </div>
            <!-- END Success Color -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Info Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-info">
                    <div class="ribbon-box font-w600">$32</div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-css3 fa-3x text-gray push"></i>
                        <h3 class="h4">Discover CSS3</h3>
                    </div>
                </div>
            </div>
            <!-- END Info Color -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Warning Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-warning">
                    <div class="ribbon-box font-w600">$32</div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-css3 fa-3x text-gray push"></i>
                        <h3 class="h4">Discover CSS3</h3>
                    </div>
                </div>
            </div>
            <!-- END Warning Color -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Danger Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-danger">
                    <div class="ribbon-box font-w600">$32</div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-css3 fa-3x text-gray push"></i>
                        <h3 class="h4">Discover CSS3</h3>
                    </div>
                </div>
            </div>
            <!-- END Danger Color -->
        </div>
        <div class="col-sm-6">
            <!-- Crystal on Background Color -->
            <div class="block">
                <div class="block-content block-content-full bg-primary ribbon ribbon-crystal">
                    <div class="ribbon-box font-w600"><i class="fa fa-check"></i> Crystal</div>
                    <div class="text-center push-50-t push-50">
                        <h3 class="text-white-op">Awesome Color</h3>
                    </div>
                </div>
            </div>
            <!-- END Crystal on Background Color -->
        </div>
        <div class="col-sm-6">
            <!-- Crystal on Background Color -->
            <div class="block">
                <div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo25.jpg');">
                    <div class="block-content block-content-full bg-black-op ribbon ribbon-crystal">
                        <div class="ribbon-box font-w600"><i class="fa fa-check"></i> Crystal</div>
                        <div class="text-center push-50-t push-50">
                            <h3 class="text-white-op">Awesome Image</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Crystal on Background Color -->
        </div>
    </div>
    <!-- END Simple Ribbon -->

    <!-- Bookmark Ribbon -->
    <h2 class="content-heading">Bookmark Ribbon</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <!-- Default Position -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-primary">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart-o"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-cog fa-3x text-gray push"></i>
                        <h3 class="h4">Settings</h3>
                    </div>
                </div>
            </div>
            <!-- END Default Position -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Bottom Right -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-primary ribbon-bottom">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart-o"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-cog fa-3x text-gray push"></i>
                        <h3 class="h4">Settings</h3>
                    </div>
                </div>
            </div>
            <!-- END Bottom Right -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Bottom Left -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-primary ribbon-left ribbon-bottom">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart-o"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-cog fa-3x text-gray push"></i>
                        <h3 class="h4">Settings</h3>
                    </div>
                </div>
            </div>
            <!-- END Bottom Left -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Top Left -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-primary ribbon-left">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart-o"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-cog fa-3x text-gray push"></i>
                        <h3 class="h4">Settings</h3>
                    </div>
                </div>
            </div>
            <!-- END Top Left -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Success Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-success">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-wrench fa-3x text-gray push"></i>
                        <h3 class="h4">Options</h3>
                    </div>
                </div>
            </div>
            <!-- END Success Color -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Info Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-info">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-wrench fa-3x text-gray push"></i>
                        <h3 class="h4">Options</h3>
                    </div>
                </div>
            </div>
            <!-- END Info Color -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Warning Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-warning">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-wrench fa-3x text-gray push"></i>
                        <h3 class="h4">Options</h3>
                    </div>
                </div>
            </div>
            <!-- END Warning Color -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Danger Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-bookmark ribbon-danger">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-wrench fa-3x text-gray push"></i>
                        <h3 class="h4">Options</h3>
                    </div>
                </div>
            </div>
            <!-- END Danger Color -->
        </div>
        <div class="col-sm-6">
            <!-- Crystal on Background Color -->
            <div class="block">
                <div class="block-content block-content-full bg-primary ribbon ribbon-bookmark ribbon-crystal">
                    <div class="ribbon-box font-w600"><i class="fa fa-check"></i> Crystal</div>
                    <div class="text-center push-50-t push-50">
                        <h3 class="text-white-op">Awesome Color</h3>
                    </div>
                </div>
            </div>
            <!-- END Crystal on Background Color -->
        </div>
        <div class="col-sm-6">
            <!-- Crystal on Background Color -->
            <div class="block">
                <div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo25.jpg');">
                    <div class="block-content block-content-full bg-black-op ribbon ribbon-bookmark ribbon-crystal">
                        <div class="ribbon-box font-w600"><i class="fa fa-check"></i></div>
                        <div class="text-center push-50-t push-50">
                            <h3 class="text-white-op">Awesome Image</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Crystal on Background Color -->
        </div>
    </div>
    <!-- END Bookmark Ribbon -->

    <!-- Modern Ribbon -->
    <h2 class="content-heading">Modern Ribbon</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <!-- Default Position -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart-o"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-files-o fa-3x text-gray push"></i>
                        <h3 class="h4">Files</h3>
                    </div>
                </div>
            </div>
            <!-- END Default Position -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Bottom Right -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary ribbon-bottom">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart-o"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-files-o fa-3x text-gray push"></i>
                        <h3 class="h4">Files</h3>
                    </div>
                </div>
            </div>
            <!-- END Bottom Right -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Bottom Left -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary ribbon-left ribbon-bottom">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart-o"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-files-o fa-3x text-gray push"></i>
                        <h3 class="h4">Files</h3>
                    </div>
                </div>
            </div>
            <!-- END Bottom Left -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Top Left -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-modern ribbon-primary ribbon-left">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart-o"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-files-o fa-3x text-gray push"></i>
                        <h3 class="h4">Files</h3>
                    </div>
                </div>
            </div>
            <!-- END Top Left -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Success Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-modern ribbon-success">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-picture-o fa-3x text-gray push"></i>
                        <h3 class="h4">Photos</h3>
                    </div>
                </div>
            </div>
            <!-- END Success Color -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Info Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-modern ribbon-info">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-picture-o fa-3x text-gray push"></i>
                        <h3 class="h4">Photos</h3>
                    </div>
                </div>
            </div>
            <!-- END Info Color -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Warning Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-modern ribbon-warning">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-picture-o fa-3x text-gray push"></i>
                        <h3 class="h4">Photos</h3>
                    </div>
                </div>
            </div>
            <!-- END Warning Color -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Danger Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-modern ribbon-danger">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-fw fa-heart"></i>
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-picture-o fa-3x text-gray push"></i>
                        <h3 class="h4">Photos</h3>
                    </div>
                </div>
            </div>
            <!-- END Danger Color -->
        </div>
        <div class="col-sm-6">
            <!-- Crystal on Background Color -->
            <div class="block">
                <div class="block-content block-content-full bg-primary ribbon ribbon-modern ribbon-crystal">
                    <div class="ribbon-box font-w600 text-uppercase">Modern</div>
                    <div class="text-center push-50-t push-50">
                        <h3 class="text-white-op">Awesome Color</h3>
                    </div>
                </div>
            </div>
            <!-- END Crystal on Background Color -->
        </div>
        <div class="col-sm-6">
            <!-- Crystal on Background Color -->
            <div class="block">
                <div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo25.jpg');">
                    <div class="block-content block-content-full bg-black-op ribbon ribbon-modern ribbon-crystal ribbon-bottom">
                        <div class="ribbon-box font-w600 text-uppercase">Modern</div>
                        <div class="text-center push-50-t push-50">
                            <h3 class="text-white-op">Awesome Image</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Crystal on Background Color -->
        </div>
    </div>
    <!-- END Modern Ribbon -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>