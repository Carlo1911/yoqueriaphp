<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/select2/select2-bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/dropzonejs/dropzone.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Header Tiles -->
    <div class="row">
        <div class="col-xs-6 col-sm-4">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700" data-toggle="countTo" data-to="250"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">In Orders</div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700" data-toggle="countTo" data-to="29"></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Available</div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700 text-danger"><i class="fa fa-times"></i></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-danger font-w600">Delete Product</div>
            </a>
        </div>
    </div>
    <!-- END Header Tiles -->

    <!-- Info -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Info</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                    <form class="form-horizontal push-30-t push-30" action="base_pages_ecom_product_edit.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary">
                                    <input class="form-control" type="text" id="product-id" name="product-id" value="789">
                                    <label for="product-id">PID</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary">
                                    <input class="form-control" type="text" id="product-name" name="product-name" value="The Elder Scrolls V: Skyrim">
                                    <label for="product-name">Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 push-10">
                                <div class="form-material form-material-primary">
                                    <label>Description</label>
                                </div>
                            </div>
                            <div class="col-xs-12 push-10">
                                <!-- CKEditor Container -->
                                <textarea id="js-ckeditor" name="ckeditor"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary">
                                    <textarea class="form-control" id="product-short-description" name="product-short-description" rows="3"></textarea>
                                    <label for="product-short-description">Short Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <!-- Select2 (.js-select2 class is initialized in App() -> uiHelperSelect2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <div class="form-material">
                                    <select class="js-select2 form-control" id="product-category" name="product-category" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1">Cables</option>
                                        <option value="2" selected>Video Games</option>
                                        <option value="3">Tablets</option>
                                        <option value="4">Laptops</option>
                                        <option value="5">PC</option>
                                        <option value="6">Home Cinema</option>
                                        <option value="7">Sound</option>
                                        <option value="8">Office</option>
                                        <option value="9">Adapters</option>
                                    </select>
                                    <label for="example2-select2">Category</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary">
                                    <input class="form-control" type="text" id="product-price" name="product-price" value="59,00">
                                    <label for="product-price">Price in USD ($)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Condition</label>
                            <div class="col-xs-12">
                                <label class="css-input css-radio css-radio-primary push-10-r">
                                    <input type="radio" id="product-condition-new" name="product-condition" value="new" checked><span></span> New
                                </label>
                                <label class="css-input css-radio css-radio-primary">
                                    <input type="radio" id="product-condition-old" name="product-condition" value="old"><span></span> Old
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Published?</label>
                            <div class="col-xs-12">
                                <label class="css-input switch switch-sm switch-primary">
                                    <input type="checkbox" id="product-published" name="product-published" checked><span></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-sm btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Info -->

    <!-- Meta Data -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Meta Data</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                    <!-- Bootstrap Maxlength (.js-maxlength class is initialized in App() -> uiHelperMaxlength()) -->
                    <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                    <form class="form-horizontal push-30-t push-30" action="base_pages_ecom_product_edit.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary">
                                    <input class="js-maxlength form-control" type="text" id="product-meta-title" name="product-meta-title" maxlength="55" data-always-show="true" value="The Elder Scrolls V: Skyrim">
                                    <label for="product-meta-title">Title</label>
                                    <div class="help-block text-right">55 Character Max</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary">
                                    <!-- jQuery Tags Input (.js-tags-input class is initialized in App() -> uiHelperTagsInput()) -->
                                    <!-- For more info and examples you can check out https://github.com/xoxco/jQuery-Tags-Input -->
                                    <input class="js-tags-input form-control" type="text" id="product-meta-keywords" name="product-meta-keywords" value="action, rpg">
                                    <label for="product-meta-keywords">Keywords</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary">
                                    <textarea class="js-maxlength form-control" id="product-meta-description" name="product-meta-description" rows="5" maxlength="115" data-always-show="true">The Elder Scrolls V: Skyrim is an action role-playing open world video game developed by Bethesda Game Studios.</textarea>
                                    <label for="product-meta-description">Description</label>
                                    <div class="help-block text-right">115 Character Max</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-sm btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Meta Data -->

    <!-- Images -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Images</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                    <!-- DropzoneJS  -->
                    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                    <form class="dropzone push-30-t push-30" action="base_pages_ecom_product_edit.php"></form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Images -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/dropzonejs/dropzone.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/ckeditor/ckeditor.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (BS Maxlength + Select2 + Tags Inputs + CKEditor + Appear + CountTo plugins)
        App.initHelpers(['maxlength', 'select2', 'tags-inputs', 'ckeditor', 'appear', 'appear-countTo']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>