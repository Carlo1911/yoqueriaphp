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
    </ol>
    <!-- END Breadcrumb -->

    <!-- Topics Block -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <ul class="block-options">
                <li>
                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
            </ul>
            <ul class="block-options block-options-left">
                <li>
                    <a href="base_pages_forum_new_topic.php"><i class="fa fa-plus"></i> New Topic</a>
                </li>
            </ul>
        </div>
        <div class="block-content">
            <!-- Topics -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead>
                    <tr>
                        <th colspan="2">Welcome</th>
                        <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Replies</th>
                        <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Views</th>
                        <th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 75px;">
                            <i class="si si-pin fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Welcome to our forums!</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>June 20, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">136</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">650</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 21, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 75px;">
                            <i class="si si-pin fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Big upgrades are coming soon!</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>June 25, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">96</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">500</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 18, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 75px;">
                            <i class="si si-pin fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Tips &amp; tricks for staying motivated</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>July 15, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">95</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">750</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 13, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">2015, all the new features!</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>July 21, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">85</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">632</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 13, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Issue when saving a file, can you help me?</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>May 26, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">15</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">698</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 2, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">New Features!</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>June 29, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">652</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">350</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 2, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Question about the new features!</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>June 28, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">158</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">1685</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 1, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Which plan to choose?</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>March 12, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">351</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">795</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 1, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Your web app saved me tons of time</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>July 23, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">900</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">1500</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 12, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Is it easy to upgrade my plan?</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>May 10, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">490</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">3500</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 6, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Check out all those tips &amp; tricks!</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>May 5, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">369</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">1820</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 5, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Review needed</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>May 3, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">32</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">405</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 4, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_discussion.php">Testing out the API</a>
                            </h4>
                            <div class="font-s13 text-muted">
                                <a href="base_pages_profile.php"><?php $one->get_name(); ?></a> on <em>April 25, 2015</em>
                            </div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">350</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">1586</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 4, 2015</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Topics -->

            <!-- Pagination -->
            <nav class="text-right">
                <ul class="pagination">
                    <li class="active">
                        <a href="javascript:void(0)">1</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">2</a>
                    </li>
                    <li class="disabled">
                        <span>...</span>
                    </li>
                    <li>
                        <a href="javascript:void(0)">11</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">12</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- END Pagination -->
        </div>
    </div>
    <!-- END Topics Block -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>