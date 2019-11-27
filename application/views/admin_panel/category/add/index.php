<?php $_DIR = base_url('assets/empanel/'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="email_address">نام دسته</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
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
                                        $options = getCategoryTreeOptions($data['data']);
                                        foreach($options as $key => $val) {
                                            echo "<option value='".substr($key,1)."'>".$val."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <label class="required" for="inputCategoryImage">تصویر دسته بندی</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
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