<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right p-0" role="tablist">
                            <li role="presentation" class="active"><a href="#brandBasicInfo" data-toggle="tab">اطلاعات
                                    کد تخفیف</a></li>
                            <li role="presentation"><a href="#brandCategories" data-toggle="tab">دسته بندی های مرتبط</a>
                            </li>
                            <li role="presentation"><a href="#productFinalizeOperation" data-toggle="tab">ثبت و
                                    ذخیره</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="brandBasicInfo">
                                <div class="col-xs-12 col-sm-3">
                                    <label for="inputDiscountCode">کد تخفیف  (غیر قابل تغییر)</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $data[0]['DiscountCode']; ?>"
                                                   maxlength="15" minlength="1"
                                                   id="inputDiscountCode" name="inputDiscountCode"
                                                   readonly
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="inputDiscountPercent">درصد تحفیف</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control"
                                                   value="<?php echo $data[0]['DiscountPercent']; ?>"
                                                   min="1" minlength="1"
                                                   id="inputDiscountPercent" name="inputDiscountPercent"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="inputDiscountPrice">مبلغ تخفیف</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control"
                                                   value="<?php echo $data[0]['DiscountPrice']; ?>"
                                                   min="1" minlength="1"
                                                   id="inputDiscountPrice" name="inputDiscountPrice"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="inputDiscountType">نوع کد تخفیف</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select id="inputDiscountType" name="inputDiscountType"
                                                    class="btn-group bootstrap-select form-control show-tick">
                                                <option value="0">-- انتخاب کنید --</option>
                                                <!--  در این بخش فقط کد های تخفیف از نوع عادی و دسته بندی قابل انتخاب می باشد.سایر نوع کد ها در محصولات و کاربر ها قابل انتخاب است  -->
                                                <?php foreach ($discountEnums as $key => $value) {
                                                    if ($key != 'UserBase' && $key != 'ProductBase') {
                                                        ?>
                                                        <option value="<?php echo $key; ?>" <?php if ($key == $data[0]['DiscountType']) echo "selected"; ?>>
                                                            <?php echo $value; ?>
                                                        </option>
                                                    <?php }
                                                } ?>
                                            </select>
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
                                    <button type="button" id="editDiscountCode" class="btn btn-primary waves-effect">
                                        ذخیره
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