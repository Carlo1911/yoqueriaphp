<?php require 'inc/config.php'; ?>
<?php
// Specific Page Options
$one->l_sidebar_mini = true;
?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Google Map Container is initialized in js/pages/base_comp_maps_full.js, for more examples you can check out https://hpneo.github.io/gmaps/ -->
<div id="js-map-full"></div>

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="//maps.google.com/maps/api/js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/gmapsjs/gmaps.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_comp_maps_full.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>