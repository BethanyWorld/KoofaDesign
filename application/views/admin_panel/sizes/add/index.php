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
                                    <input type="text" class="form-control ltr"
                                           maxlength="30" minlength="1"
                                           id="inputSizeTitle" name="inputSizeTitle"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <label for="inputSizeTitle">عرض</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
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
                                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="addSize" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
