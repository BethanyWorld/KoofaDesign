<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="header">
                        <h2>پروفایل مدیر</h2>
                    </div>
                    <div class="body">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="email_address">نام و نام خانوداگی</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $adminInfo['ManagerFullName']; ?>"
                                           maxlength="80" minlength="1"
                                           id="inputFullName" name="inputFullName"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="email_address">شماره همراه</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $adminInfo['ManagerPhone']; ?>"
                                           maxlength="11" minlength="3"
                                           id="inputPhone" name="inputPhone"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="email_address">آدرس ایمیل</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="email form-control"
                                           value="<?php echo $adminInfo['ManagerEmail']; ?>"
                                           maxlength="80" minlength="3"
                                           id="inputEmail" name="inputEmail"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="email_address">رمز عبور</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control"
                                           id="inputPassword" name="inputPassword"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="email_address">تکرار رمز عبور</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control"
                                           id="inputConfirmPassword" name="inputConfirmPassword"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="updateProfile" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
