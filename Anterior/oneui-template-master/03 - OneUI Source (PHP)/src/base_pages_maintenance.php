<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>

<!-- Maintenance Content -->
<div class="content bg-white text-center pulldown overflow-hidden">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="font-s64 text-gray push-30-t push-50">
                <i class="fa fa-cog fa-spin"></i>
            </div>
            <h1 class="h2 font-w400 push-15 animated fadeInLeftBig">Sorry, we’re down for maintenance.</h1>
            <h2 class="h3 font-w300 text-dark-op push-50 animated fadeInRightBig">We’ll be back shortly!</h2>
        </div>
    </div>
</div>
<!-- END Maintenance Content -->

<!-- Maintenance Footer -->
<div class="pulldown push-10-t text-center animated fadeInUp">
    <small class="text-muted font-w600"><span class="js-year-copy"></span> &copy; <?php echo $one->name . ' ' . $one->version; ?></small>
</div>
<!-- END Maintenance Footer -->

<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>