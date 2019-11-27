<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-4">
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
                        <div class="col-xs-12">
                            <button type="button" id="editSize" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
