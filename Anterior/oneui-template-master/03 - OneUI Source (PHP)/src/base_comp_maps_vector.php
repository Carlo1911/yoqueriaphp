<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/jquery-jvectormap.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Vector Maps <small>Interactive and responsive vector maps for your new awesome project.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li>Maps</li>
                <li><a class="link-effect" href="">Vector</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Vector Maps are initialized in js/pages/base_comp_maps_vector.js, for more examples you can check out http://jvectormap.com/documentation/ -->
    <!-- Maps Row -->
    <div class="row">
        <div class="col-lg-12">
            <!-- World Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">World</h3>
                </div>
                <!-- World Map Container -->
                <div class="js-vector-map-world" style="height: 500px;"></div>
            </div>
            <!-- END World Map -->
        </div>
        <div class="col-lg-6">
            <!-- Europe Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Europe</h3>
                </div>
                <!-- Europe Map Container -->
                <div class="js-vector-map-europe" style="height: 350px;"></div>
            </div>
            <!-- END Europe Map -->
        </div>
        <div class="col-lg-6">
            <!-- USA Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">USA</h3>
                </div>
                <!-- USA Map Container -->
                <div class="js-vector-map-usa" style="height: 350px;"></div>
            </div>
            <!-- END USA Map -->
        </div>
        <div class="col-lg-6">
            <!-- India Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">India</h3>
                </div>
                <!-- India Map Container -->
                <div class="js-vector-map-india" style="height: 350px;"></div>
            </div>
            <!-- END India Map -->
        </div>
        <div class="col-lg-6">
            <!-- China Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">China</h3>
                </div>
                <!-- China Map Container -->
                <div class="js-vector-map-china" style="height: 350px;"></div>
            </div>
            <!-- END China Map -->
        </div>
        <div class="col-lg-6">
            <!-- Australia Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Australia</h3>
                </div>
                <!-- Australia Map Container -->
                <div class="js-vector-map-australia" style="height: 350px;"></div>
            </div>
            <!-- END Australia Map -->
        </div>
        <div class="col-lg-6">
            <!-- South Africa Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">South Africa</h3>
                </div>
                <!-- South Africa Map Container -->
                <div class="js-vector-map-south-africa" style="height: 350px;"></div>
            </div>
            <!-- END South Africa Map -->
        </div>
        <div class="col-lg-6">
            <!-- France Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">France</h3>
                </div>
                <!-- France Map Container -->
                <div class="js-vector-map-france" style="height: 350px;"></div>
            </div>
            <!-- END France Map -->
        </div>
        <div class="col-lg-6">
            <!-- Germany Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Germany</h3>
                </div>
                <!-- Germany Map Container -->
                <div class="js-vector-map-germany" style="height: 350px;"></div>
            </div>
            <!-- END Germany Map -->
        </div>
    </div>
    <!-- END Vector Maps Row -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/maps/jquery-jvectormap-cn-mill-en.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/maps/jquery-jvectormap-de-mill-en.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/maps/jquery-jvectormap-europe-mill-en.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/maps/jquery-jvectormap-fr-mill-en.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/maps/jquery-jvectormap-in-mill-en.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/maps/jquery-jvectormap-us-aea-en.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-jvectormap/maps/jquery-jvectormap-za-mill-en.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_comp_maps_vector.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>