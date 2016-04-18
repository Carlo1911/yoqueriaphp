<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/highlightjs/github-gist.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/various/promo-code.png');">
    <div class="bg-primary-dark-op">
        <section class="content content-full content-boxed">
            <!-- Section Content -->
            <div class="push-100-t push-50 text-center">
                <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Learn HTML5 in 10 simple and easy to follow steps</h1>
                <h2 class="h4 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">10 Lessons &bull; 3 hours</h2>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END Hero Content -->

<!-- Navigation -->
<div class="bg-white">
    <section class="content content-mini content-mini-full content-boxed overflow-hidden">
        <ol class="breadcrumb">
            <li><a class="text-primary-dark" href="frontend_elearning_courses.php">Courses</a></li>
            <li><a class="text-primary-dark" href="frontend_elearning_course.php">Learn HTML5</a></li>
            <li><a href="">1.1 HTML5 Intro</a></li>
        </ol>
    </section>
</div>
<!-- END Navigation -->

<!-- Lessons -->
<section class="content content-boxed overflow-hidden">
    <!-- Section Content -->
    <p class="alert alert-success font-w600 text-center">
        <i class="fa fa-gift push-5-r"></i> This is a free preview! If you like it, you can subscribe or purchase this course for only $4!
    </p>
    <div class="row">
        <div class="col-md-8">
            <!-- Lesson -->
            <div class="block block-rounded">
                <div class="block-content">
                    <h3 class="push">1.1 HTML5 Intro (free preview)</h3>
                    <?php echo $one->get_text('medium', 1); ?>
                    <pre class="pre-sh push"><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                    <?php echo $one->get_text('medium', 1); ?>
                    <div class="alert alert-warning font-w600 text-center">
                        <i class="fa fa-warning"></i> This is an attention message.
                    </div>
                    <?php echo $one->get_text('medium', 1); ?>
                    <pre class="pre-sh push"><code class="html">&lt;div id=&quot;id-name&quot; class=&quot;class-name&quot;&gt;
    &lt;!-- This is a comment --&gt;
&lt;/div&gt;</code></pre>
                    <p class="font-w600">Things to do:</p>
                    <ul class="fa-ul list-simple-mini push">
                        <li>
                            <i class="fa fa-check fa-li text-success"></i>
                            Make sure you are always closing your tags.
                        </li>
                        <li>
                            <i class="fa fa-check fa-li text-success"></i>
                            Keep writing markup to become more familiar.
                        </li>
                        <li>
                            <i class="fa fa-check fa-li text-success"></i>
                            Create your own projects.
                        </li>
                    </ul>
                    <p class="alert alert-success font-w600 text-center">
                        <i class="fa fa-thumbs-up"></i> Congrats! Let's head up to the next lesson.
                    </p>
                </div>
            </div>
            <!-- END Lesson -->
        </div>
        <div class="col-md-4">
            <!-- Subscribe -->
            <div class="block block-rounded">
                <div class="block-content">
                    <a class="btn btn-block btn-rounded btn-noborder btn-success push-10" href="javascript:void(0)">Subscribe from $9/month</a>
                    <p class="text-center">or <a class="link-effect" href="javascript:void(0)">buy this course for $4</a></p>
                    <a class="btn btn-block btn-primary disabled push" href="javascript:void(0)">
                        <i class="fa fa-download push-5-r"></i> Download
                    </a>
                </div>
            </div>
            <!-- END Subscribe -->

            <!-- Course Info -->
            <div class="block block-rounded">
                <div class="block-header bg-gray-lighter text-center">
                    <h3 class="block-title">About This Course</h3>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-condensed">
                        <tbody>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-book push-10-r"></i> 10 Lessons
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-clock-o push-10-r"></i> 3 hours
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-heart push-10-r"></i> 16850 Favorites
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-calendar push-10-r"></i> 3 weeks ago
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-tags push-10-r"></i>
                                    <a class="label label-primary" href="javascript:void(0)">HTML</a>
                                    <a class="label label-primary" href="javascript:void(0)">CSS</a>
                                    <a class="label label-primary" href="javascript:void(0)">JavaScript</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Course Info -->

            <!-- About Instructor -->
            <a class="block block-rounded block-link-hover3" href="javascript:void(0)">
                <div class="block-header bg-gray-lighter text-center">
                    <h3 class="block-title">About The Instructor</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="push">
                        <?php $one->get_avatar('', 'male'); ?>
                    </div>
                    <div class="font-w600 push-5"><?php $one->get_name('male'); ?></div>
                    <div class="text-muted">Front-end Developer</div>
                </div>
            </a>
            <!-- END About Instructor -->
        </div>
    </div>
    <!-- END Section Content -->
</section>
<!-- END Lessons -->

<!-- Get Started -->
<div class="bg-gray-lighter">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Subscribe today to unlock all lessons and learn HTML5 in under 3 hours.</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="javascript:void(0)">Subscribe from $9/month</a>
        </div>
        <!-- Section Content END -->
    </section>
</div>
<!-- END Get Started -->

<?php require 'inc/views/frontend_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/highlightjs/highlight.pack.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Appear + Highlight.js plugins)
        App.initHelpers(['appear', 'highlightjs']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>