<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="email_address">نام روش ارسال</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           maxlength="30" minlength="1"
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
                                           id="inputOrderSendMethodPrice" name="inputOrderSendMethodPrice"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="addSendMethod" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
