<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<div id="main">
    <div class="row section-padding">
        <div class="container margin-t-15 container-padding">
            <div class="col-md-12 col-xs-12 padding-0 margin-b-mines-75">
                <?php echo $sidebar; ?>
                <div class="col-md-9 col-xs-12 main-form">
                    <div class="col-md-12 col-xs-12">

                        <div class="col-xs-12">
                            <h3 class="text-center form-title">
                                مشخصات عمومی
                            </h3>
                        </div>

                        <div class="col-md-6 col-xs-12  profile-form-div">
                            <label>نام</label>
                            <input
                                    value="<?php echo $userInfo['UserFirstName']; ?>"
                                    type="text"
                                    id="inputUserFirstName"
                                    name=""
                                    placeholder="نام خود را وارد کنید">
                            <label>نام خانوادگی</label>
                            <input
                                    value="<?php echo $userInfo['UserLastName']; ?>"
                                    type="text"
                                    id="inputUserLastName"
                                    name=""
                                    placeholder="نام خانوادگی خود را وارد کنید">
                            <label>تلفن همراه</label>
                            <input
                                    value="<?php echo $userInfo['UserPhone']; ?>"
                                    type="number"
                                    id="inputUserPhone"
                                    name=""
                                    placeholder="09121234567">
                        </div>
                        <div class="col-md-6 col-xs-12 rightFloat profile-form-div">
                            <label>ایمیل</label>
                            <input
                                    value="<?php echo $userInfo['UserEmail']; ?>"
                                    type="text"
                                    id="inputUserEmail"
                                    name=""
                                    placeholder="info@mail.ir">
                            <label>تلفن ثابت</label>
                            <input
                                    value="<?php echo $userInfo['UserHomePhone']; ?>"
                                    type="number"
                                    id="inputUserHomePhone"
                                    name=""
                                    placeholder="021123456789">
                        </div>
                    </div>
                    <div class="col-md-11 col-xs-12">
                        <div class="col-md-2 col-md-offset-0 col-xs-12 profile-button-edit">
                            <button class="btn pull-left">ویرایش اطلاعات</button>
                        </div>
                    </div>
                    <div class="row alert"></div>


                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-4 col-xs-12 rightFloat profile-form-div">
                            <label>رمز عبور فعلی</label>
                            <input
                                    autocomplete="false"
                                    id="inputCurrentPassword"
                                    type="password">
                        </div>
                        <div class="col-md-4 col-xs-12 rightFloat profile-form-div">
                            <label>رمز عبور جدید</label>
                            <input
                                    id="inputNewPassword"
                                    type="password">
                        </div>
                        <div class="col-md-4 col-xs-12 rightFloat profile-form-div">
                            <label>تکرار رمز عبور</label>
                            <input
                                    id="inputNewConfirmPassword"
                                    type="password">
                        </div>
                    </div>
                    <div class="col-md-11 col-xs-12">
                        <div class="col-md-2 col-md-offset-0 col-xs-12 profile-button-edit-password">
                            <button class="btn pull-left">تغییر رمز عبور</button>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

