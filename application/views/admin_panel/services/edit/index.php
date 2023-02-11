<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputServiceTitle">عنوان خدمت</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden"
                                           value="<?php echo $data['RowId']; ?>"
                                           id="inputRowId" name="inputRowId" />

                                    <input type="text" class="form-control"
                                           value="<?php echo $data['ServiceTitle']; ?>"
                                           maxlength="30" minlength="1"
                                           id="inputServiceTitle" name="inputServiceTitle"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <label  class="required" for="email_address">انتخاب کنید</label>
                            <div class="form-group">
                                <div class="form-line">
				                    <?php echo $categoryCheckBoxTree; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="edit" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
