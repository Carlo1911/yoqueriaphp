<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Breadcrumb -->
    <ol class="breadcrumb push-15">
        <li><a class="text-muted" href="base_pages_forum_categories.php">Forums</a></li>
        <li><a class="link-effect" href="base_pages_forum_topics.php">Introduction</a></li>
        <li><a class="link-effect" href="base_pages_forum_discussion.php">New Member!</a></li>
    </ol>
    <!-- END Breadcrumb -->

    <!-- Discussion Block -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <ul class="block-options">
                <li>
                    <button data-toggle="scroll-to" data-target="#forum-reply-form" type="button"><i class="fa fa-reply"></i> Reply</button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
            </ul>
            <h3 class="block-title">New Member!</h3>
        </div>
        <div class="block-content">
            <!-- Discussion -->
            <table class="table table-striped table-borderless">
                <tbody>
                    <tr>
                        <td class="hidden-xs"></td>
                        <td class="font-s13 text-muted">
                            <a href="base_pages_profile.php"><?php $one->get_name('female'); ?></a> on May 1, 2015 - 16:15
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center hidden-xs" style="width: 140px;">
                            <div class="push-10">
                                <a href="base_pages_profile.php">
                                    <?php $one->get_avatar('', 'female'); ?>
                                </a>
                            </div>
                            <small>2 Posts</small>
                        </td>
                        <td>
                            <?php $one->get_text('medium', 2); ?>
                            <hr>
                            <p class="font-s13 text-muted">There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="hidden-xs"></td>
                        <td class="font-s13 text-muted">
                            <a href="base_pages_profile.php"><?php $one->get_name('male'); ?></a> on May 10, 2015 - 10:09
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center hidden-xs" style="width: 140px;">
                            <div class="push-10">
                                <a href="base_pages_profile.php">
                                    <?php $one->get_avatar('', 'male'); ?>
                                </a>
                            </div>
                            <small>15 Posts</small>
                        </td>
                        <td>
                            <?php $one->get_text('large'); ?>
                            <hr>
                            <p class="font-s13 text-muted">Be yourself; everyone else is already taken.</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="hidden-xs"></td>
                        <td class="font-s13 text-muted">
                            <a href="base_pages_profile.php"><?php $one->get_name('male'); ?></a> on May 15, 2015 - 20:17
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center hidden-xs" style="width: 140px;">
                            <div class="push-10">
                                <a href="base_pages_profile.php">
                                    <?php $one->get_avatar('', 'male'); ?>
                                </a>
                            </div>
                            <small>1490 Posts</small>
                        </td>
                        <td>
                            <?php $one->get_text('medium', 3); ?>
                            <hr>
                            <p class="font-s13 text-muted">Don't cry because it's over, smile because it happened.</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="hidden-xs"></td>
                        <td class="font-s13 text-muted">
                            <a href="base_pages_profile.php"><?php $one->get_name('female'); ?></a> on May 20, 2015 - 20:29
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center hidden-xs" style="width: 140px;">
                            <div class="push-10">
                                <a href="base_pages_profile.php">
                                    <?php $one->get_avatar('', 'female'); ?>
                                </a>
                            </div>
                            <small>1902 Posts</small>
                        </td>
                        <td>
                            <?php $one->get_text('medium', 3); ?>
                            <hr>
                            <p class="font-s13 text-muted">Strive not to be a success, but rather to be of value.</p>
                        </td>
                    </tr>
                    <tr id="forum-reply-form">
                        <td class="hidden-xs"></td>
                        <td class="font-s13 text-muted">
                            <a href="base_pages_profile.php"><?php $one->get_name('male'); ?></a> Just now
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center hidden-xs">
                            <div class="push-10">
                                <a href="base_pages_profile.php">
                                    <?php $one->get_avatar('', 'male'); ?>
                                </a>
                            </div>
                            <small>850 Posts</small>
                        </td>
                        <td>
                            <form class="form-horizontal" action="base_pages_forum_discussion.php" method="post" onsubmit="return false;">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <!-- CKEditor (js-ckeditor id is initialized in App() -> uiHelperCkeditor()) -->
                                        <!-- For more info and examples you can check out http://ckeditor.com -->
                                        <textarea id="js-ckeditor" name="ckeditor"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-reply"></i> Reply</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Discussion -->
        </div>
    </div>
    <!-- END Discussion Block -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/ckeditor/ckeditor.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (CKEditor plugin)
        App.initHelpers('ckeditor');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>