<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-treeview/bootstrap-treeview.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Tree View <small>A simple and elegant solution to displaying hierarchical tree structures.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Tree View</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Tree Views functionality is initialized in js/pages/base_comp_treeview.js, for more examples you can check out https://github.com/jonmiles/bootstrap-treeview -->
    <!-- Tree View Row #1 -->
    <div class="row">
        <div class="col-lg-4">
            <!-- Simple Tree -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Simple Tree</h3>
                </div>
                <div class="block-content">
                    <!-- Tree View Container -->
                    <div class="js-tree-simple"></div>
                </div>
            </div>
            <!-- END Simple Tree -->
        </div>
        <div class="col-lg-4">
            <!-- Icons Tree -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Icons Tree</h3>
                </div>
                <div class="block-content">
                    <!-- Tree View Container -->
                    <div class="js-tree-icons"></div>
                </div>
            </div>
            <!-- END Icons Tree -->
        </div>
        <div class="col-lg-4">
            <!-- Alternative Icons Tree -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Alternative Icons Tree</h3>
                </div>
                <div class="block-content">
                    <!-- Tree View Container -->
                    <div class="js-tree-icons-alt"></div>
                </div>
            </div>
            <!-- END Alternative Icons Tree -->
        </div>
    </div>
    <!-- END Tree View Row #1 -->

    <!-- Tree View Row #2 -->
    <div class="row">
        <div class="col-lg-4">
            <!-- Badges Tree -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Badges Tree</h3>
                </div>
                <div class="block-content">
                    <!-- Tree View Container -->
                    <div class="js-tree-badges"></div>
                </div>
            </div>
            <!-- END Badges Tree -->
        </div>
        <div class="col-lg-4">
            <!-- Collapsed Tree -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Collapsed Tree</h3>
                </div>
                <div class="block-content">
                    <!-- Tree View Container -->
                    <div class="js-tree-collapsed"></div>
                </div>
            </div>
            <!-- END Collapsed Tree -->
        </div>
        <div class="col-lg-4">
            <!-- JSON Data Tree -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">JSON Tree</h3>
                </div>
                <div class="block-content">
                    <!-- Tree View Container -->
                    <div class="js-tree-json"></div>
                </div>
            </div>
            <!-- END JSON Tree -->
        </div>
    </div>
    <!-- END Tree View Row #2 -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-treeview/bootstrap-treeview.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_comp_treeview.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>