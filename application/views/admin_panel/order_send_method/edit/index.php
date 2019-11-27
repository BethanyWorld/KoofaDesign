<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <input type="hidden" name="inputOrderSendMethodId" id="inputOrderSendMethodId"
                               value="<?php echo $data['OrderSendMethodId']; ?>"/>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="email_address">نام روش ارسال</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           maxlength="30" minlength="1"
                                           value="<?php echo $data['OrderSendMethodTitle']; ?>"
                                           id="inputOrderSendMethodTitle" name="inputOrderSendMethodTitle"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="email_address">قیمت روش ارسال</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           maxlength="30" minlength="1"
                                           value="<?php echo $data['OrderSendMethodPrice']; ?>"
                                           id="inputOrderSendMethodPrice" name="inputOrderSendMethodPrice"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="email_address">وضعیت</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select id="inputOrderSendMethodActive" name="inputOrderSendMethodActive" class="btn-group bootstrap-select form-control show-tick">
                                       <option
                                           <?php if($data['OrderSendMethodActive'] == "Active") echo "selected"; ?>
                                               value="Active">فعال</option>
                                        <option
                                            <?php if($data['OrderSendMethodActive'] == "InActive") echo "selected"; ?>
                                                value="InActive">غیرفعال</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="updateSendMethod" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
