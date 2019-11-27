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
                               value="<?php echo $data['UserId']; ?>"
                               maxlength="150" minlength="1"
                               id="inputUserId" name="inputUserId"/>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="inputUserFirstName">نام</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['UserFirstName']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputUserFirstName" name="inputUserFirstName"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="inputUserLastName">نام خانوادگی</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['UserLastName']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputUserLastName" name="inputUserLastName"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="inputUserPhone">تلفن همراه</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['UserPhone']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputUserPhone" name="inputUserPhone"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="inputUserHomePhone">تلفن منزل</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['UserHomePhone']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputUserHomePhone" name="inputUserHomePhone"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="inputUserEmail">ایمیل</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['UserEmail']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputUserEmail" name="inputUserEmail"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <label for="inputUserBirthDate">تاریخ تولد</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['UserBirthDate']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputUserBirthDate" name="inputUserBirthDate"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 pull-right">
                            <label>استان</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="inputUserStateId" id="inputUserStateId">
                                        <option value="0">-- انتخاب کنید --</option>
                                        <?php foreach ($states as $state) { ?>
                                            <option <?php if($data['UserAddressStateId'] == $state['StateId']) echo "selected"; ?>
                                                    value="<?php echo $state['StateId']; ?>">
                                                <?php echo $state['StateName']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 pull-right">
                            <label>شهر</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control"  name="inputUserCityId" id="inputUserCityId">
                                        <option value="0">-- انتخاب کنید --</option>
                                        <?php
                                        if(isset($data['UserAddressStateId']) && $data['UserAddressStateId']!=""){ ?>
                                            <?php foreach ($cities as $city) { ?>
                                                <option <?php if($data['UserAddressCityId'] == $city['CityId']) echo "selected"; ?> value="<?php echo $city['CityId'];  ?>">
                                                    <?php echo $city['CityName'];  ?>
                                                </option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <label for="inputUserPostalCode">کد پستی</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['UserPostalCode']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputUserPostalCode" name="inputUserPostalCode"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <label for="inputUserSecondPhone">تلفن همراه دوم</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['UserSecondPhone']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputUserSecondPhone" name="inputUserSecondPhone"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <label for="inputUserAddress">آدرس پستی</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           value="<?php echo $data['UserAddress']; ?>"
                                           maxlength="150" minlength="1"
                                           id="inputUserAddress" name="inputUserAddress"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <label for="inputUserPassword">رمز عبور</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"
                                           maxlength="150" minlength="1"
                                           id="inputUserPassword" name="inputUserPassword"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="editUser" class="btn btn-primary waves-effect">ذخیره
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>