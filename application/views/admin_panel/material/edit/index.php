<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputMaterialTitle">عنوان سایز</label>
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
                        <div class="col-xs-12">
                            <button type="button" id="editMaterial" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
