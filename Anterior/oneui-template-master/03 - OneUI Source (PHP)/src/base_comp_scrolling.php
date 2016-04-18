<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Scrolling <small>Super easy scrollable areas.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Scrolling</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<!-- SlimScroll ([data-toggle="slimscroll"] is initialized in App() -> uiHelperSlimscroll()) -->
<!-- For more info and examples you can check out http://rocha.la/jQuery-slimScroll -->
<div class="content content-narrow">
    <h2 class="content-heading">Default height</h2>
    <div class="row">
        <div class="col-md-4">
            <!-- Autohide Scrollbar -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Autohide Scrollbar</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- SlimScroll Container -->
                    <div data-toggle="slimscroll">
                        <?php $one->get_text('medium', 3); ?>
                    </div>
                    <!-- END SlimScroll Container -->
                </div>
            </div>
            <!-- END Autohide Scrollbar -->
        </div>
        <div class="col-md-4">
            <!-- Always Visible Scrollbar -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Visible Scrollbar</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- SlimScroll Container -->
                    <div data-toggle="slimscroll" data-always-visible="true">
                        <?php $one->get_text('small', 4); ?>
                    </div>
                    <!-- END SlimScroll Container -->
                </div>
            </div>
            <!-- END Always Visible Scrollbar -->
        </div>
        <div class="col-md-4">
            <!-- Colorful Scrollbar -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Colorful Scrollbar</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- SlimScroll Container -->
                    <div data-toggle="slimscroll" data-color="#568bce" data-always-visible="true">
                        <?php $one->get_text('small', 4); ?>
                    </div>
                    <!-- END SlimScroll Container -->
                </div>
            </div>
            <!-- END Colorful Scrollbar -->
        </div>
        <div class="col-md-4">
            <!-- Scrollbar Size -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Scrollbar Size</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- SlimScroll Container -->
                    <div data-toggle="slimscroll" data-always-visible="true" data-size="10px">
                        <?php $one->get_text('small', 4); ?>
                    </div>
                    <!-- END SlimScroll Container -->
                </div>
            </div>
            <!-- END Scrollbar Size -->
        </div>
        <div class="col-md-4">
            <!-- Scrollbar Rail -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Scrollbar Rail</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- SlimScroll Container -->
                    <div data-toggle="slimscroll" data-always-visible="true" data-rail-visible="true" data-rail-color="#777" data-rail-opacity=".15">
                        <?php $one->get_text('small', 4); ?>
                    </div>
                    <!-- END SlimScroll Container -->
                </div>
            </div>
            <!-- END Scrollbar Rail -->
        </div>
        <div class="col-md-4">
            <!-- Scrollbar Position -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Scrollbar Position</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- SlimScroll Container -->
                    <div data-toggle="slimscroll" data-position="left" data-always-visible="true">
                        <?php $one->get_text('small', 4); ?>
                    </div>
                    <!-- END SlimScroll Container -->
                </div>
            </div>
            <!-- END Scrollbar Position -->
        </div>
    </div>
    <h2 class="content-heading">Specific height</h2>
    <div class="row">
        <div class="col-md-4">
            <!-- Scroll Height 300px -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">300px</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- SlimScroll Container -->
                    <div data-toggle="slimscroll" data-height="300px" data-color="#46c37b" data-always-visible="true">
                        <?php $one->get_text('small', 4); ?>
                    </div>
                    <!-- END SlimScroll Container -->
                </div>
            </div>
            <!-- END Scroll Height 300px -->
        </div>
        <div class="col-md-4">
            <!-- Scroll Height 200px -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">200px</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- SlimScroll Container -->
                    <div data-toggle="slimscroll" data-height="200px" data-color="#f3b760" data-always-visible="true">
                        <?php $one->get_text('small', 4); ?>
                    </div>
                    <!-- END SlimScroll Container -->
                </div>
            </div>
            <!-- END Scroll Height 200px -->
        </div>
        <div class="col-md-4">
            <!-- Scroll Height 100px -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">100px</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- SlimScroll Container -->
                    <div data-toggle="slimscroll" data-height="100px" data-color="#d26a5c" data-always-visible="true">
                        <?php $one->get_text('small', 4); ?>
                    </div>
                    <!-- END SlimScroll Container -->
                </div>
            </div>
            <!-- END Scroll Height 100px -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (SlimScroll plugin)
        App.initHelpers('slimscroll');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>