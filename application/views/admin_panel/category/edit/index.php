<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <input type="hidden" id="inputCategoryId" name="inputCategoryId" value="<?php echo $data['CategoryId']; ?>" />
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="email_address">نام دسته</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['CategoryTitle']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputCategoryTitle" name="inputCategoryTitle"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="email_address">دسته مادر</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select id="inputCategoryParentId" name="inputCategoryParentId" class="btn-group bootstrap-select form-control show-tick">
                                        <option value="0">-- انتخاب کنید --</option>
                                        <?php
                                        $options = getCategoryTreeOptions($allCategories);
                                        foreach($options as $key => $val) { ?>
                                            <option value="<?php echo substr($key,1); ?>"><?php echo $val; ?></option>
                                        <?php } ?>
                                        <option value="-1">مخفی و غیرفعال سازی</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <label class="required" for="inputCategoryImage">آیکن دسته بندی</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['CategoryImage']; ?>"
                                           id="inputCategoryImage" name="inputCategoryImage"/>
                                </div>
                                <a data-target-id="inputCategoryImage"
                                   data-toggle="modal"
                                   href="#"
                                   data-target="#myModal"
                                   class="btn fileManagerHandler"
                                   type="button">
                                    <span>انتخاب تصویر</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <label class="required" for="inputCategoryPoster">پوستر دسته بندی</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['CategoryPoster']; ?>"
                                           id="inputCategoryPoster" name="inputCategoryPoster"/>
                                </div>
                                <a data-target-id="inputCategoryPoster"
                                   data-toggle="modal"
                                   href="#"
                                   data-target="#myModal"
                                   class="btn fileManagerHandler"
                                   type="button">
                                    <span>انتخاب تصویر</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <label class="required" for="inputCategorySpecialPoster">پوستر ویژه دسته بندی</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['CategorySpecialPoster']; ?>"
                                           id="inputCategorySpecialPoster" name="inputCategorySpecialPoster"/>
                                </div>
                                <a data-target-id="inputCategorySpecialPoster"
                                   data-toggle="modal"
                                   href="#"
                                   data-target="#myModal"
                                   class="btn fileManagerHandler"
                                   type="button">
                                    <span>انتخاب تصویر</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputCategoryIsActive">نمایش در منو / عدم نمایش</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select id="inputCategoryIsActive" name="inputCategoryIsActive" class="btn-group bootstrap-select form-control show-tick">
                                        <option <?php if($data['CategoryIsActive'] == 0) echo "selected"; ?> value="0">عدم نمایش در منو</option>
                                        <option <?php if($data['CategoryIsActive'] == 1) echo "selected"; ?> value="1">نمایش در منو</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <label for="inputCategoryDeliveryTime">زمان تحویل</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input
                                             value="<?php echo $data['CategoryDeliveryTime']; ?>"
                                            type="text"
                                            class="form-control"
                                            id="inputCategoryDeliveryTime"
                                            name="inputCategoryDeliveryTime" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <label for="inputCategoryInstallPrice">هزینه نصب</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input
                                             value="<?php echo $data['CategoryInstallPrice']; ?>"
                                            type="text"
                                            class="form-control"
                                            id="inputCategoryInstallPrice"
                                            name="inputCategoryInstallPrice" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <label for="inputCategoryDescription">توضیحات دسته</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea
                                            class="form-control"
                                            id="inputCategoryDescription"
                                            name="inputCategoryDescription"><?php echo $data['CategoryDescription']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <label for="inputCategoryProductDescription">توضیحات دسته در محصول</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea
                                            class="form-control"
                                            id="inputCategoryProductDescription"
                                            name="inputCategoryProductDescription"><?php echo $data['CategoryProductDescription']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="addCategory" class="btn btn-primary waves-effect">ذخیره</button>
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
