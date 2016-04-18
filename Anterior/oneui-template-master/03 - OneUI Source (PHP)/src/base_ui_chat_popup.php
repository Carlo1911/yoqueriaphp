<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Chat <small>Facebook like chat window.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li>Chat</li>
                <li><a class="link-effect" href="">Popup</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<!-- Demo Content -->
<div class="content content-boxed">
    <div class="block block-rounded">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Demo Content</h3>
        </div>
        <div class="block-content block-content-full block-content-narrow">
            <div class="push-30 push-30-t">
                <?php $one->get_text('large', 5); ?>
            </div>
        </div>
    </div>
</div>
<!-- END Demo Content -->

<!-- Chat layout and demo functionality is initialized in js/pages/base_ui_chat.js -->
<!--
    You can use the following JS function to add a message to a chat window:

    BaseUIChat.addMessage($chatId, $chatMsg, $chatMsgLevel)

    $chatId         : the data-chat-id attribute of your chat window
    $chatMsg        : the message you would like to add
    $chatMsgLevel   : 'self' the user sends the message, '' empty if the user receives the message (changes its style)
-->
<div class="js-chat-container" data-chat-mode="popup" data-chat-height="360">
    <!-- Chat Window -->
    <div class="block block-bordered remove-margin-b" id="chat-block">
        <div class="block-header bg-gray-lighter">
            <ul class="block-options">
                <li>
                    <button type="button" onclick="App.blocks('#chat-block', 'content_toggle');">
                        <i class="fa fa-arrows-v"></i>
                    </button>
                </li>
            </ul>
            <h3 class="block-title">
                <?php $one->get_avatar('', 'male', 16); ?> <span class="push-5-l"><?php echo $one->get_name('male'); ?></span>
            </h3>
        </div>
        <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="7">
            <!-- Messages -->
            <div class="font-s12 text-muted text-center push-20-t push-15"><em>Yesterday</em></div>
            <div class="block block-rounded block-transparent push-15 push-50-l">
                <div class="block-content block-content-full block-content-mini bg-gray-lighter">Hi there!</div>
            </div>
            <div class="font-s12 text-muted text-center push-20-t push-10"><em>Today</em></div>
            <div class="block block-rounded block-transparent push-15 push-50-r">
                <div class="block-content block-content-full block-content-mini bg-gray-light">Hi!!!</div>
            </div>
            <!-- END Messages -->
        </div>
        <div class="js-chat-form block-content block-content-full block-content-mini border-t">
            <form action="base_ui_chat.php" method="post">
                <input class="js-chat-input form-control" type="text" data-target-chat-id="7" placeholder="Type a message and hit enter..">
            </form>
        </div>
    </div>
    <!-- END Chat Window -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_ui_chat.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>