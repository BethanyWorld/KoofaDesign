<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputMaterialTitle">عنوان جنس</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden"
                                           value="<?php echo $data['MaterialId']; ?>"
                                           id="inputMaterialId" name="inputMaterialId" />

                                    <input type="text" class="form-control"
                                           value="<?php echo $data['MaterialTitle']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputMaterialTitle" name="inputMaterialTitle"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <label for="inputSizeTitle">وزن گرمی به ازای هر سانتی مترمربع</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['MaterialWeight']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputMaterialWeight" name="inputMaterialWeight"/>
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
                                                <?php foreach ($materialShipment as $sh) {
                                                    if($sh['Shipment'] == $key) { echo 'selected'; }
                                                } ?>
                                                    value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="editMaterial" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
