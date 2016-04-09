<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Breadcrumb -->
    <ol class="breadcrumb push-15">
        <li><a class="text-muted" href="base_pages_forum_categories.php">Forums</a></li>
    </ol>
    <!-- END Breadcrumb -->

    <!-- Categories Block -->
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
            <h3 class="block-title">Welcome to our forums</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- Intro Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead>
                    <tr>
                        <th colspan="2">Introduction</th>
                        <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
                        <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
                        <th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 75px;">
                            <i class="si si-check fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">Welcome</a>
                            </h4>
                            <div class="font-s13 text-muted">Feel free to introduce yourself</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">195</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">756</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 23, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-bell fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">Announcements</a>
                            </h4>
                            <div class="font-s13 text-muted">For the latest news, this is the place</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">150</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">1300</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 15, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-badge fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">Terms &amp; Conditions</a>
                            </h4>
                            <div class="font-s13 text-muted">Please read the our forum’s rules</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">15</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">250</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 21, 2015</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Intro Category -->

            <!-- Web Application Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead>
                    <tr>
                        <th colspan="2">Web Application</th>
                        <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
                        <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
                        <th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 75px;">
                            <i class="si si-check fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">Getting Started</a>
                            </h4>
                            <div class="font-s13 text-muted">New user? Don't worry, you will find everything you need</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">210</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">980</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 17, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-badge fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">Tutorials</a>
                            </h4>
                            <div class="font-s13 text-muted">The best place for learning</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">350</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">1680</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 23, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-settings fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">Plugins</a>
                            </h4>
                            <div class="font-s13 text-muted">The best of the best out there</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">960</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">3500</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 22, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-wrench fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">API</a>
                            </h4>
                            <div class="font-s13 text-muted">API related discussions</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">480</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">1020</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 17, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-chemistry fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">Extentions</a>
                            </h4>
                            <div class="font-s13 text-muted">Extend our web application’s features</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">350</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">1980</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 13, 2015</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Web Application Category -->

            <!-- Support Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead>
                    <tr>
                        <th colspan="2">Support</th>
                        <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
                        <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
                        <th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 75px;">
                            <i class="si si-info fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">How To Guides</a>
                            </h4>
                            <div class="font-s13 text-muted">The best hand crafted guides just for you</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">980</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">2156</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 10, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-question fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">Questions</a>
                            </h4>
                            <div class="font-s13 text-muted">Need assistance? Don’t worry, we are here to help</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">350</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">580</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 20, 2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-users fa-2x"></i>
                        </td>
                        <td>
                            <h4 class="h5 font-w600 push-5">
                                <a href="base_pages_forum_topics.php">User Sandbox</a>
                            </h4>
                            <div class="font-s13 text-muted">Discuss with other users</div>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">580</a>
                        </td>
                        <td class="text-center hidden-xs hidden-sm">
                            <a class="font-w600" href="javascript:void(0)">980</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="font-s13">by <a href="base_pages_profile.php"><?php $one->get_name(); ?></a><br>July 24, 2015</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Support Category -->
        </div>
    </div>
    <!-- END Categories Block -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>