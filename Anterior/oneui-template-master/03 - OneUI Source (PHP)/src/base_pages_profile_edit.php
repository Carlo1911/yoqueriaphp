<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<div class="content content-boxed">
    <!-- User Header -->
    <div class="block">
        <!-- Basic Info -->
        <div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo3@2x.jpg');">
            <div class="block-content bg-primary-op text-center overflow-hidden">
                <div class="push-30-t push animated fadeInDown">
                    <?php $one->get_avatar(10, '', 96, true); ?>
                </div>
                <div class="push-30 animated fadeInUp">
                    <h2 class="h4 font-w600 text-white push-5"><?php $one->get_name('male'); ?></h2>
                    <h3 class="h5 text-white-op">Web Designer</h3>
                </div>
            </div>
        </div>
        <!-- END Basic Info -->

        <!-- Stats -->
        <div class="block-content text-center">
            <div class="row items-push text-uppercase">
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Sales</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">22000</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Products</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">16</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Followers</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">2600</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">3603 Ratings</div>
                    <div class="text-warning push-10-t animated flipInX">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Stats -->
    </div>
    <!-- END User Header -->

    <!-- Main Content -->
    <form action="pages_profile_edit.php" method="post" onsubmit="return false;">
        <div class="block">
            <ul class="nav nav-tabs nav-justified push-20" data-toggle="tabs">
                <li class="active">
                    <a href="#tab-profile-personal"><i class="fa fa-fw fa-pencil"></i> Personal</a>
                </li>
                <li>
                    <a href="#tab-profile-password"><i class="fa fa-fw fa-asterisk"></i> Password</a>
                </li>
                <li>
                    <a href="#tab-profile-privacy"><i class="fa fa-fw fa-lock"></i> Privacy</a>
                </li>
            </ul>
            <div class="block-content tab-content">
                <!-- Personal Tab -->
                <div class="tab-pane fade in active" id="tab-profile-personal">
                    <div class="row items-push">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label>Username</label>
                                    <div class="form-control-static font-w700">Admin</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-email">Email Address</label>
                                    <input class="form-control input-lg" type="email" id="profile-email" name="profile-email" placeholder="Enter your email.." value="admin@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="profile-firstname">Firstname</label>
                                    <input class="form-control input-lg" type="text" id="profile-firstname" name="profile-firstname" placeholder="Enter your firstname.." value="John">
                                </div>
                                <div class="col-xs-6">
                                    <label for="profile-lastname">Lastname</label>
                                    <input class="form-control input-lg" type="text" id="profile-lastname" name="profile-lastname" placeholder="Enter your lastname.." value="Doe">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-bio">Bio</label>
                                    <textarea class="form-control input-lg" id="profile-bio" name="profile-bio" rows="15" placeholder="Enter a few details about yourself..">Hi there, welcome to my profile! I'm a web designer and I love creating stuff that solve problems and make your life easier. Feel free to follow me to know more about me and my projects. Thanks for stopping by, wish you a great day!</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-skills">Skills</label>
                                    <select class="form-control" id="profile-skills" name="profile-skills" size="8" multiple="">
                                        <option value="1" selected>HTML</option>
                                        <option value="2" selected>CSS</option>
                                        <option value="3" selected>JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">Ruby</option>
                                        <option value="6" selected>Photoshop</option>
                                        <option value="6" selected>Sketch</option>
                                        <option value="7">Illustrator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="profile-city">Where do you live?</label>
                                    <input class="form-control input-lg" type="text" id="profile-city" name="profile-city" placeholder="Enter your location..">
                                </div>
                                <div class="col-sm-6">
                                    <label for="profile-age">Age</label>
                                    <input class="form-control input-lg" type="text" id="profile-age" name="profile-age" placeholder="Enter your age..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12">Gender</label>
                                <div class="col-xs-12">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="profile-gender-group"><span></span> Female
                                    </label>
                                    <label class="css-input css-radio css-radio-primary">
                                        <input type="radio" name="profile-gender-group" checked><span></span> Male
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Personal Tab -->

                <!-- Password Tab -->
                <div class="tab-pane fade" id="tab-profile-password">
                    <div class="row items-push">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-password">Current Password</label>
                                    <input class="form-control input-lg" type="password" id="profile-password" name="profile-password">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-password-new">New Password</label>
                                    <input class="form-control input-lg" type="password" id="profile-password-new" name="profile-password-new">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-password-new-confirm">Confirm New Password</label>
                                    <input class="form-control input-lg" type="password" id="profile-password-new-confirm" name="profile-password-new-confirm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Password Tab -->

                <!-- Privacy Tab -->
                <div class="tab-pane fade" id="tab-profile-privacy">
                    <div class="row items-push">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-8">
                                    <div class="font-s13 font-w600">Online Status</div>
                                    <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-8">
                                    <div class="font-s13 font-w600">Auto Updates</div>
                                    <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-8">
                                    <div class="font-s13 font-w600">Notifications</div>
                                    <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                        <input type="checkbox" checked><span></span>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <div class="font-s13 font-w600">API Access</div>
                                    <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                        <input type="checkbox" checked><span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Privacy Tab -->
            </div>
            <div class="block-content block-content-full bg-gray-lighter text-center">
                <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-check push-5-r"></i> Save Changes</button>
                <button class="btn btn-sm btn-warning" type="reset"><i class="fa fa-refresh push-5-r"></i> Reset</button>
            </div>
        </div>
    </form>
    <!-- END Main Content -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>