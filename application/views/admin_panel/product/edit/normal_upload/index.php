<?php
$_DIR = base_url('assets/admin/');
?>
<input type="hidden" class="form-control"
       value="<?php echo $data['ProductId']; ?>"
       id="inputProductId" name="inputProductId"/>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right p-0" role="tablist">
                            <li role="presentation" class="active"><a href="#productBasicInfo" data-toggle="tab">اطلاعات ثابت محصول</a></li>
                            <li role="presentation"><a href="#productImages" data-toggle="tab">تصاویر محصول</a></li>
                            <li role="presentation"><a href="#productPrice" data-toggle="tab">قیمت محصول</a></li>
                            <li role="presentation"><a href="#productCategory" data-toggle="tab">دسته بندی محصول</a>
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
                                                   value="<?php echo $data['ProductTitle']; ?>"
                                                   maxlength="150" minlength="1"
                                                   id="inputProductTitle" name="inputProductTitle"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="inputProductSubTitle">زیر عنوان محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $data['ProductSubTitle']; ?>"
                                                   maxlength="150" minlength="1"
                                                   id="inputProductSubTitle" name="inputProductSubTitle"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label class="required" for="inputProductTitle">نوع محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control"
                                                    id="inputProductType" name="inputProductType">
                                                <?php foreach ($productType as $key => $value) { ?>
                                                    <option
                                                        <?php if($key == "NormalUpload") echo "selected"; else echo "disabled"; ?>
                                                            value="<?php echo $key; ?>">
                                                        <?php echo $value; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label class="required" for="inputProductQuantity">تعداد موجود</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control"
                                                   value="<?php echo $data['ProductQuantity']; ?>"
                                                   id="inputProductQuantity" name="inputProductQuantity"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label for="inputProductCatalogUrl">آدرس فایل کاتالوگ</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $data['ProductCatalogUrl']; ?>"
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
                                    <label for="inputProductBrief">خلاصه ای از محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $data['ProductBrief']; ?>"
                                                   id="inputProductBrief" name="inputProductBrief"/>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input
                                                <?php if ($data['ProductIsSpecial']) echo "checked"; ?>
                                                    type="checkbox"
                                                    name="inputProductIsSpecial" class="filled-in"
                                                    id="cat-10000" value="1"/>
                                            <label for="cat-10000">آیا فروش ویژه است؟</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <label for="inputProductSpecialEndDate">تاریخ اتمام - مثلا 1398/01/21</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"
                                                       class="form-control"
                                                       value="<?php echo $data['ProductSpecialEndDate']; ?>"
                                                       id="inputProductSpecialEndDate"
                                                       name="inputProductSpecialEndDate"
                                                       style="font-family: tahoma; "/>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-xs-12">
                                    <label class="required" for="inputProductDescription">شرح محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea
                                                    type="text"
                                                    class="form-control ckeditor"
                                                    id="inputProductDescription"
                                                    name="inputProductDescription"><?php echo $data['ProductDescription']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productImages">
                                <div class="col-xs-12">
                                    <label class="required" for="inputProductPrimaryImage">تصویر اصلی محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $data['ProductPrimaryImage']; ?>"
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
                                <div class="col-xs-12">
                                    <button type="button" id="addMoreProductImage"
                                            class="btn btn-primary waves-effect waves-float">
                                        <i class="material-icons">add</i>
                                    </button>
                                </div>
                                <?php foreach ($productSecondaryImages as $item) { ?>
                                    <div  id="parent-<?php echo $item['MediaId'] ?>" class="col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input
                                                        value="<?php echo $item['MediaUrl'] ?>"
                                                        type="text"
                                                       class="form-control"
                                                       id="<?php echo $item['MediaId'] ?>"
                                                       name="inputProductSecondaryImage" />
                                            </div>
                                            <a data-target-id="<?php echo $item['MediaId'] ?>" data-toggle="modal" href="#" data-target="#myModal" class="btn fileManagerHandler" type="button"> <span>انتخاب تصویر</span>
                                            </a>
                                            <button type="button" data-remove-id="<?php echo $item['MediaId'] ?>" class="btn btn-xs btn-danger waves-effect waves-float remove-secondary-image"> <i class="material-icons">clear</i> </button>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productPrice">
                                <div class="col-xs-12 col-sm-6">
                                    <label class="required" for="inputProductPrice">قیمت محصول</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control"
                                                   value="<?php echo $productPrice[0]['PriceValue']; ?>"
                                                   id="inputProductPrice" name="inputProductPrice"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productCategory">
                                <div class="col-xs-12">
                                    <label class="required" for="email_address">انتخاب کنید</label>
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
                                    <?php foreach ($productRootCategoryProperties as $item) { ?>

                                        <div class="col-xs-12 col-sm-6 col-xs-12">
                                            <label for="<?php echo $item['PropertyId']; ?>"><?php echo $item['PropertyTitle']; ?></label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select class="form-control" id="<?php echo $item['PropertyId']; ?>"
                                                            name="inputProductCategoryProperty"
                                                            data-id="<?php echo $item['PropertyId']; ?>">
                                                        <?php
                                                        foreach ($item['properties'] as $propertyOption) {
                                                            $isSelected = false;
                                                                foreach ($productSelectedProperties as $productSelectedProperty) {
                                                                    if($productSelectedProperty['PropertyId'] == $item['PropertyId'] && $productSelectedProperty['PropertyOptionId'] == $propertyOption['CategoryPropertyOptionId']){
                                                                        $isSelected = true;
                                                                    }
                                                                }
                                                            ?>
                                                            <option
                                                                    <?php if($isSelected) echo "selected"; ?>
                                                                    value="<?php echo $propertyOption['CategoryPropertyOptionId'] ?>">
                                                                <?php echo $propertyOption['CategoryPropertyOptionTitle'] ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productTags">
                                <div class="col-xs-12">
                                    <button type="button" id="addMoreProductTag" class="btn btn-primary waves-effect waves-float">
                                        <i class="material-icons">add</i>
                                    </button>
                                </div>
                                <?php foreach ($productTags as $item) { ?>
                                    <div  id="parent-<?php echo $item['TagId'] ?>" class="col-xs-12 col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input
                                                        value="<?php echo $item['TagTitle'] ?>"
                                                        type="text"
                                                        class="form-control"
                                                        id="<?php echo $item['TagId'] ?>"
                                                        name="inputProductTag" />
                                            </div>
                                            <button type="button" data-remove-id="<?php echo $item['TagId'] ?>" class="btn btn-xs btn-danger waves-effect waves-float remove-tag"> <i class="material-icons">clear</i> </button>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="productFinalizeOperation">
                                <div class="col-xs-12">
                                    <div class="alert alert-info">
                                        لطفا بعد از بررسی دقیق اطلاعات دکمه ذخیره را بزنید
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" id="editNormalProduct" class="btn btn-primary waves-effect">ذخیره
                                    </button>
                                    <button type="button" id="CopyNormalProduct" class="btn btn-success waves-effect pull-left">کپی محصول
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