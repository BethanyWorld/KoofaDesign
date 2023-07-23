<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <label for="inputSizeTitle">عنوان سایز</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden"
                                           value="<?php echo $data['SizeId']; ?>"
                                           id="inputSizeId" name="inputSizeId" />

                                    <input type="text" class="form-control"
                                           value="<?php echo $data['SizeTitle']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputSizeTitle" name="inputSizeTitle"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <label for="inputSizeUserTitle">عنوان کاربر</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control ltr"
                                           value="<?php echo $data['SizeUserTitle']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputSizeUserTitle" name="inputSizeUserTitle"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <label for="inputSizeTitle">عرض</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['SizeWidth']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputSizeWidth" name="inputSizeWidth"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <label for="inputSizeTitle">طول</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['SizeHeight']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputSizeHeight" name="inputSizeHeight"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <label for="inputSizeTitle">ارتفاع</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['SizeErtefa']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputSizeErtefa" name="inputSizeErtefa"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <label for="inputSizeTitle">وزن گرمی به ازای هر سانتی مترمربع</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['SizeWeight']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputSizeWeight" name="inputSizeWeight"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <label for="inputSizeTitle">ارسال</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control selectpicker" id="inputShipment" multiple>
                                        <?php foreach ($shipment as $key => $value) { ?>
                                            <option
                                                    <?php foreach ($sizeShipment as $sh) {
                                                        if($sh['Shipment'] == $key) { echo 'selected'; }
                                                    } ?>
                                                    value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="editSize" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
