<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Header Tiles -->
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700 text-primary" data-toggle="countTo" data-to="35"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Pending</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700" data-toggle="countTo" data-to="120"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Today</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700" data-toggle="countTo" data-to="260"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Yesterday</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700" data-toggle="countTo" data-to="57890"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">This Month</div>
            </a>
        </div>
    </div>
    <!-- END Header Tiles -->

    <!-- All Orders -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <ul class="block-options">
                <li class="dropdown">
                    <button type="button" data-toggle="dropdown">Filter <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">35</span>Pending</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">15</span>Processing</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">20</span>For delivery</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">72</span>Canceled</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">890</span>Delivered</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">997</span>All</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <h3 class="block-title">All Orders</h3>
        </div>
        <div class="block-content">
            <table class="table table-borderless table-striped table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;">ID</th>
                        <th class="hidden-xs text-center">Submitted</th>
                        <th>Status</th>
                        <th class="visible-lg">Customer</th>
                        <th class="visible-lg text-center">Products</th>
                        <th class="hidden-xs text-right">Value</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $labels['0']['class']   = "label-success";
                    $labels['0']['text']    = "Delivered";
                    $labels['1']['class']   = "label-info";
                    $labels['1']['text']    = "For delivery";
                    $labels['2']['class']   = "label-danger";
                    $labels['2']['text']    = "Canceled";
                    $labels['3']['class']   = "label-warning";
                    $labels['3']['text']    = "Processing";
                    ?>
                    <?php for($i=65; $i>45; $i--) { ?>
                    <tr>
                        <td class="text-center">
                            <a class="font-" href="base_pages_ecom_order.php">
                                <strong>ORD.009<?php echo $i; ?></strong>
                            </a>
                        </td>
                        <td class="hidden-xs text-center"><?php echo sprintf('%02d', rand(1, 28)) . '/' . sprintf('%02d', rand(1, 12)); ?>/2015</td>
                        <td>
                            <span class="label<?php $rand = rand(0, 3); echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text']; ?></span>
                        </td>
                        <td class="visible-lg">
                            <a href="base_pages_ecom_customer.php"><?php $one->get_name(); ?></a>
                        </td>
                        <td class="text-center visible-lg">
                            <a href="javascript:void(0)"><?php echo rand(1, 9); ?></a>
                        </td>
                        <td class="text-right hidden-xs">
                            <strong>$<?php echo rand(25, 2500) . ',' . rand(10, 99); ?></strong>
                        </td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="base_pages_ecom_order.php" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
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
    <!-- END All Orders -->
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