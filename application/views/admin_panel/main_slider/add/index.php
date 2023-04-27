<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <label class="required" for="inputSlideTitle">عنوان slide</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control ltr"
                                           id="inputSlideTitle" name="inputSlideTitle"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <label class="required" for="inputSlideImage">تصویر اسلاید</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           id="inputSlideImage" name="inputSlideImage"/>
                                </div>
                                <a data-target-id="inputSlideImage"
                                   data-toggle="modal"
                                   href="#"
                                   data-target="#myModal"
                                   class="btn fileManagerHandler"
                                   type="button">
                                    <span>انتخاب تصویر</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <label class="required" for="inputSlideUrl">لینک slide</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control ltr"
                                           id="inputSlideUrl" name="inputSlideUrl"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <label class="required" for="inputSlideButtonTitle">عنوان لینک</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control ltr"
                                           id="inputSlideButtonTitle" name="inputSlideButtonTitle"/>
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