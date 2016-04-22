<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<!-- Chat layout and demo functionality is initialized in js/pages/base_ui_chat.js -->
<!--
    You can use the following JS function to add a message to a chat window:

    BaseUIChat.addMessage($chatId, $chatMsg, $chatMsgLevel)

    $chatId         : the data-chat-id attribute of your chat window
    $chatMsg        : the message you would like to add
    $chatMsgLevel   : 'self' the user sends the message, '' empty if the user receives the message (changes its style)
-->
<div class="js-chat-container content content-full" data-chat-mode="full">
    <!-- Full Chat -->
    <div class="block remove-margin-b">
        <ul class="js-chat-head nav nav-tabs" data-toggle="tabs">
            <li class="active">
                <a href="#chat-window1">
                    <?php $one->get_avatar('', 'female', 16); ?> <span class="push-5-l">Evelyn</span>
                </a>
            </li>
            <li>
                <a href="#chat-window2">
                    <?php $one->get_avatar('', 'male', 16); ?> <span class="push-5-l">John</span>
                </a>
            </li>
            <li class="pull-right">
                <a href="#chat-people">
                    <i class="si si-users"></i>
                </a>
            </li>
        </ul>
        <div class="tab-content overflow-hidden">
            <!-- Chat Window 1 -->
            <div class="tab-pane fade in active" id="chat-window1">
                <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="1">
                    <!-- Messages -->
                    <div class="font-s12 text-muted text-center push-20-t push-15"><em>Yesterday</em></div>
                    <div class="block block-rounded block-transparent push-15 push-50-l">
                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">Hi there!</div>
                    </div>
                    <div class="block block-rounded block-transparent push-15 push-50-l">
                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">How are you?</div>
                    </div>
                    <div class="font-s12 text-muted text-center push-20-t push-10"><em>Today</em></div>
                    <div class="block block-rounded block-transparent push-15 push-50-r">
                        <div class="block-content block-content-full block-content-mini bg-gray-light">I'm fine, thanks! I hope you are doing great, too!</div>
                    </div>
                    <!-- END Messages -->
                </div>
                <div class="js-chat-form block-content block-content-full block-content-mini">
                    <form action="base_ui_chat.php" method="post">
                        <input class="js-chat-input form-control" type="text" data-target-chat-id="1" placeholder="Type a message and hit enter..">
                    </form>
                </div>
            </div>
            <!-- END Chat Window 1 -->

            <!-- Chat Window 2 -->
            <div class="tab-pane fade" id="chat-window2">
                <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="2">
                    <!-- Messages -->
                    <div class="font-s12 text-muted text-center push-20-t push-15"><em>3 hours ago</em></div>
                    <div class="block block-rounded block-transparent push-15 push-50-l">
                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">Hi Admin!</div>
                    </div>
                    <div class="block block-rounded block-transparent push-15 push-50-l">
                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">Can you help me out?</div>
                    </div>
                    <div class="block block-rounded block-transparent push-15 push-50-l">
                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">I'm building a new app and I would like your opinion!</div>
                    </div>
                    <div class="font-s12 text-muted text-center push-20-t push-10"><em>1 hour ago</em></div>
                    <div class="block block-rounded block-transparent push-15 push-50-r">
                        <div class="block-content block-content-full block-content-mini bg-gray-light">Hey John, sure thing, feel free to let me know!</div>
                    </div>
                    <!-- END Messages -->
                </div>
                <div class="js-chat-form block-content block-content-full block-content-mini">
                    <form action="base_ui_chat.php" method="post">
                        <input class="js-chat-input form-control" type="text" data-target-chat-id="2" placeholder="Type a message and hit enter..">
                    </form>
                </div>
            </div>
            <!-- END Chat Window 2 -->

            <!-- People -->
            <div class="tab-pane fade fade-up" id="chat-people">
                <div class="js-chat-people overflow-y-auto block-content block-content-full">
                    <div class="row remove-margin">
                        <div class="col-sm-4">
                            <h3 class="text-success push-20-t push">Online</h3>
                            <ul class="nav-users push-10-t push">
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="text-warning push-20-t push">Away</h3>
                            <ul class="nav-users push-10-t push">
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-warning"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-warning"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-warning"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-warning"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-warning"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="text-muted push-20-t push">Offline</h3>
                            <ul class="nav-users push-10-t push">
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-muted"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END People -->
        </div>
    </div>
    <!-- END Full Chat -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_ui_chat.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>