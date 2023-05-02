<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right p-0" role="tablist">
                            <li role="presentation"  class="active"><a href="#productBasicInfo" data-toggle="tab">اطلاعات ثابت محصول</a></li>
                            <li role="presentation"><a href="#productImages" data-toggle="tab">تصاویر محصول</a></li>
                            <li role="presentation"><a href="#productPrice" data-toggle="tab">قیمت محصول</a></li>
                            <li role="presentation"><a href="#productCategory" data-toggle="tab">دسته بندی محصول</a>
                            <li role="presentation"><a href="#productCategoryProperty" data-toggle="tab">ویژگی های محصول</a>
                             <li role="presentation"><a href="#productTags" data-toggle="tab">برچسب محصول</a></li>
                            <li role="presentation"><a href="#productFinalizeOperation" data-toggle="tab">ثبت و ذخیره</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="productBasicInfo">
                                <div class="col-xs-12 col-sm-6">
                                    <label class="required" for="inputProductTitle">نام محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   maxlength="150" minlength="1"
                                                   id="inputProductTitle" name="inputProductTitle"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="inputProductSubTitle">کد محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   maxlength="150" minlength="1"
                                                   id="inputProductSubTitle" name="inputProductSubTitle"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label  class="required" for="inputProductTitle">نوع محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select
                                                    readonly="readonly"
                                                    class="form-control"
                                                    id="inputProductType" name="inputProductType">
                                                <?php foreach ($productType as $key => $value) { ?>
                                                    <option
                                                            <?php if($key == "Normal") echo "selected"; else echo "disabled"; ?>
                                                            value="<?php echo $key; ?>">
                                                        <?php echo $value; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label  class="required" for="inputProductQuantity">تعداد موجود</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number"
                                                   value="0"
                                                   class="form-control"
                                                   id="inputProductQuantity" name="inputProductQuantity"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label for="inputProductCatalogUrl">آدرس فایل کاتالوگ</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   id="inputProductCatalogUrl" name="inputProductCatalogUrl"/>
                                        </div>
                                        <a data-target-id="inputProductCatalogUrl"
                                           class="btn fileManagerHandler"
                                           type="button">
                                            <span>انتخاب آدرس فایل کاتالوگ</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <label for="inputProductBrief">زیرعنوان محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   id="inputProductBrief" name="inputProductBrief"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input
                                                    type="checkbox"
                                                    name="inputProductIsSpecial" class="filled-in"
                                                    id="cat-10000" value="1"/>
                                            <label for="cat-10000">آیا فروش ویژه است؟</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <label for="inputProductSpecialVirtualMaxPrice">قیمت قبل از تخفیف (تومان)</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"
                                                       class="form-control"
                                                       value="0"
                                                       id="inputProductSpecialVirtualMaxPrice"
                                                       name="inputProductSpecialVirtualMaxPrice"
                                                       style="font-family: tahoma; "/>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12">
                                    <label  class="required" for="inputProductDescription">شرح محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea
                                                    type="text"
                                                    class="form-control ckeditor"
                                                    id="inputProductDescription"
                                                    name="inputProductDescription"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <label for="inputProductDescription">توضیحات محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea
                                                    type="text"
                                                    class="form-control ckeditor"
                                                    id="inputProductDescriptionTable"
                                                    name="inputProductDescriptionTable"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productImages">
                                <div class="col-md-6 col-xs-12">
                                    <label  class="required" for="inputProductPrimaryImage">تصویر اصلی محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   id="inputProductPrimaryImage" name="inputProductPrimaryImage"/>
                                        </div>
                                        <a data-target-id="inputProductPrimaryImage"
                                           data-toggle="modal"
                                           href="#"
                                           data-target="#myModal"
                                           class="btn fileManagerHandler"
                                           type="button">
                                            <span>انتخاب تصویر</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label  class="required" for="inputProductMockUpImage">تصویر موکاپ محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   id="inputProductMockUpImage" name="inputProductMockUpImage"/>
                                        </div>
                                        <a data-target-id="inputProductMockUpImage"
                                           data-toggle="modal"
                                           href="#"
                                           data-target="#myModal"
                                           class="btn fileManagerHandler"
                                           type="button">
                                            <span>انتخاب تصویر</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" id="addMoreProductImage" class="btn btn-primary waves-effect waves-float">
                                        <i class="material-icons">add</i>
                                    </button>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productPrice">
                                <div class="col-xs-12 col-sm-6">
                                    <label  class="required" for="inputProductPrice">قیمت محصول (تومان)</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control"
                                                   value="0"
                                                   id="inputProductPrice" name="inputProductPrice"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productCategory">
                                <div class="col-xs-12">
                                    <label  class="required" for="email_address">انتخاب کنید</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <?php echo $categoryCheckBoxTree; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productCategoryProperty">
                                <div class="col-xs-12">
                                    <label for="email_address">انتخاب کنید</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <?php echo $categoryTree; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 category-property-container">
                                    <!-- Category Properties Goes Here -->
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productTags">
                                <div class="col-xs-12">
                                    <button type="button" id="addMoreProductTag" class="btn btn-primary waves-effect waves-float">
                                        <i class="material-icons">add</i>
                                    </button>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productFinalizeOperation">
                                <div class="col-xs-12">
                                    <div class="alert alert-info">
                                        لطفا بعد از بررسی دقیق اطلاعات دکمه ذخیره را بزنید
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" id="addNormalProduct" class="btn btn-primary waves-effect">ذخیره
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
<div class="modal fade bs-example-modal-lg" id="myModal" style="width: 100%; display: none;">
    <div class="modal-dialog" style="width: 90%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
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