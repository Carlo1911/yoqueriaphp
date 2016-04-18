<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Header Tiles -->
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="base_pages_ecom_product_edit.php">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700 text-success"><i class="fa fa-plus"></i></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-success font-w600">Add New Product</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700 text-danger" data-toggle="countTo" data-to="15"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-danger font-w600">Out of Stock</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700" data-toggle="countTo" data-to="100"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Top Sellers</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700" data-toggle="countTo" data-to="8750"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">All Products</div>
            </a>
        </div>
    </div>
    <!-- END Header Tiles -->

    <!-- All Products -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <ul class="block-options">
                <li class="dropdown">
                    <button type="button" data-toggle="dropdown">Filter <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">90</span>New</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">15</span>Out of Stock</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">8750</span>All</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <h3 class="block-title">All Products</h3>
        </div>
        <div class="block-content">
            <table class="table table-borderless table-striped table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;">ID</th>
                        <th class="visible-lg">Product</th>
                        <th class="hidden-xs text-center">Added</th>
                        <th>Status</th>
                        <th class="hidden-xs text-right">Value</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $labels['0']['class']   = "label-success";
                    $labels['0']['text']    = "Available";
                    $labels['1']['class']   = "label-danger";
                    $labels['1']['text']    = "Out of Stock";
                    ?>
                    <?php for($i=35; $i>15; $i--) { ?>
                    <tr>
                        <td class="text-center">
                            <a class="font-" href="base_pages_ecom_product_edit.php">
                                <strong>PID.015<?php echo $i; ?></strong>
                            </a>
                        </td>
                        <td class="visible-lg">
                            <a href="base_pages_ecom_product_edit.php">Product #<?php echo $i; ?></a>
                        </td>
                        <td class="hidden-xs text-center"><?php echo sprintf('%02d', rand(1, 28)) . '/' . sprintf('%02d', rand(1, 12)); ?>/2015</td>
                        <td>
                            <span class="label<?php $rand = rand(0, 1); echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text']; ?></span>
                        </td>
                        <td class="text-right hidden-xs">
                            <strong>$<?php echo rand(10, 99); ?>,00</strong>
                        </td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="base_pages_ecom_product_edit.php" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times text-danger"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <nav class="text-right">
                <ul class="pagination pagination-sm">
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
        </div>
    </div>
    <!-- END All Products -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>