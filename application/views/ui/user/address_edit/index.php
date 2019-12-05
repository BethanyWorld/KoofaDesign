<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<div id="main">
    <div class="row section-padding">
        <div class="container margin-t-15 container-padding">
            <div class="col-md-12 col-xs-12 padding-0 margin-b-mines-75">
                <?php echo $sidebar; ?>
                <div class="col-md-9 col-xs-12 rightFloat profile-public-desc-left-div">
                    <div class="col-md-12 col-xs-12 margin-t-25">
                        <div class="col-xs-12 rightFloat profile-public-desc-right-div padding-b-30">
                            <div class="col-md-12 col-xs-12 profile-login-image-div">
                                <div class="z-p col-md-10 col-xs-12 profile-public-desc-left-text">
                                    <p>دفرچه آدرس</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 profile-add-address-title">
                                <a href="" target="_blank">
                                    <p>افزودن آدرس جدید</p>
                                </a>
                            </div>
                            <div class="col-md-12 col-xs-12 profile-desc-ul-div profile-desc-ul-div2 profile-desc-ul-div3">
                                <div class="form-group">
                                    <input
                                            value="<?php echo $userAddress['AddressId']; ?>"
                                            type="hidden"
                                            name="inputAddressId"  id="inputAddressId">
                                    <label>نام و نام خانوادگی :</label>
                                    <input
                                            value="<?php echo $userAddress['AddressFullName']; ?>"
                                            class="form-control"
                                           type="text"
                                           name="inputAddressFullName"  id="inputAddressFullName"
                                           required="" placeholder="نادری">
                                </div>
                                <div class="form-group">
                                    <label>پست الکترونیک :</label>
                                    <input
                                        value="<?php echo $userAddress['AddressEmail']; ?>"
                                            class="form-control" type="text"
                                           name="inputAddressEmail"  id="inputAddressEmail"
                                           required="" placeholder="info@gmail.com">
                                </div>
                                <div class="form-group ">
                                    <label> شماره تلفن همراه :</label>
                                    <input
                                        value="<?php echo $userAddress['AddressPhone']; ?>"
                                            class="form-control" type="number"
                                           name="inputAddressPhone" id="inputAddressPhone"
                                           required="" placeholder="">
                                </div>
                                <div class="form-group ">
                                    <label>شماره تلفن ثابت</label>
                                    <input
                                        value="<?php echo $userAddress['AddressHomePhone']; ?>"
                                            class="form-control" type="number"
                                           name="inputAddressHomePhone" id="inputAddressHomePhone"
                                           required="" placeholder="">
                                </div>
                                <div class="form-group ">
                                    <label> کد پستی :</label>
                                    <input
                                        value="<?php echo $userAddress['AddressPostalCode']; ?>"
                                            class="form-control" type="number"
                                           name="inputAddressPostalCode" id="inputAddressPostalCode"
                                           required="" placeholder=" ">
                                </div>
                                <div class="form-group ">
                                    <label> استان :</label>
                                    <input
                                        value="<?php echo $userAddress['AddressStateId']; ?>"
                                            class="form-control" type="text"
                                           name="inputAddressStateId" id="inputAddressStateId"
                                           required="" placeholder=" ">
                                </div>
                                <div class="form-group ">
                                    <label> شهر :</label>
                                    <input
                                        value="<?php echo $userAddress['AddressCityId']; ?>"
                                            class="form-control" type="text"
                                           name="inputAddressCityId" id="inputAddressCityId"
                                           required="" placeholder=" ">
                                </div>
                                <div class="form-group ">
                                    <label> آدرس :</label>
                                    <textarea class="form-control"
                                            rows="6"
                                            style="resize: none;height: 100px;"
                                            name="inputAddress" id="inputAddress"><?php echo $userAddress['Address']; ?></textarea>
                                </div>
                            </div>
                            <div id="editAddressButton"
                                 class="col-md-12 col-xs-11 profile-rightPanel-save-ChangeBtn">
                                <button class="btn pull-left">ویرایش آدرس</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

