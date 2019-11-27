<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right p-0" role="tablist">
                            <li role="presentation"  class="active"><a href="#brandBasicInfo" data-toggle="tab">اطلاعات برند</a></li>
                            <li role="presentation"><a href="#brandCategories" data-toggle="tab">دسته بندی های مرتبط</a></li>
                            <li role="presentation"><a href="#productFinalizeOperation" data-toggle="tab">ثبت و
                                    ذخیره</a></li>
                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="brandBasicInfo">
                                <input type="hidden" name="inputBrandId" id="inputBrandId"
                                value="<?php echo $data['BrandId']; ?>"/>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="inputBrandTitle">نام برند</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $data['BrandTitle']; ?>"
                                                   maxlength="150" minlength="1"
                                                   id="inputBrandTitle" name="inputBrandTitle"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="inputBrandLogo">لوگو برند</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $data['BrandLogo']; ?>"
                                                   id="inputBrandLogo" name="inputBrandLogo"/>
                                        </div>
                                        <a data-target-id="inputBrandLogo"
                                           class="btn fileManagerHandler"
                                           type="button">
                                            <span>انتخاب آدرس فایل لوگو</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <label for="inputBrandDescription">شرح برند</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea
                                                    type="text"
                                                    class="form-control"
                                                    id="inputBrandDescription"
                                                    name="inputBrandDescription"><?php echo $data['BrandDescription']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="brandCategories">
                                <div class="col-xs-12">
                                    <label for="email_address">انتخاب کنید</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <?php echo $categoryCheckBoxTree; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productFinalizeOperation">
                                <div class="col-xs-12">
                                    <div class="alert alert-info">
                                        لطفا بعد از بررسی دقیق اطلاعات دکمه ذخیره را بزنید
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" id="updateBrand" class="btn btn-primary waves-effect">ذخیره
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bs-example-modal-lg" id="myModal" style="width: 100%; display: none;" aria-hidden="true">
    <div class="modal-dialog" style="width: 90%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"> مدیریت رسانه</h4>
            </div>
            <div class="modal-body" style="padding:0px; margin:0px; width: 100%;">
                <iframe width="100%"
                        height="500"
                        class="fileManagerFrame"
                        src=""
                        frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>