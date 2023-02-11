<?php
$_DIR = base_url('assets/empanel/');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <input type="hidden" class="form-control"
                               value="<?php echo $data['ManagerId']; ?>"
                               maxlength="150" minlength="1"
                               id="inputManagerId" name="inputManagerId"/>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="inputUserFirstName">نام</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['ManagerFullName']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputManagerFullName" name="inputManagerFullName"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="inputManagerPhone">تلفن همراه</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['ManagerPhone']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputManagerPhone" name="inputManagerPhone"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="inputManagerEmail">ایمیل</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['ManagerEmail']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputManagerEmail" name="inputManagerEmail"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <label for="inputManagerPassword">رمز عبور</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           maxlength="150" minlength="1"
                                           id="inputManagerPassword" name="inputManagerPassword"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <label for="inputRole">نقش</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select id="inputRole" name="inputRole"
                                            class="form-control">
                                        <option value="Manager">مدیر</option>
                                        <option value="Product">محصول گذار</option>
                                        <option value="Finance">مالی</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="editManager" class="btn btn-primary waves-effect">ذخیره
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>