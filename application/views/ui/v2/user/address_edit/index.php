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
                        <div class="col-xs-12 rightFloat profile-public-desc-right-div">
                            <div class="col-md-12 col-xs-12 profile-form-div">
                                <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                                    <input
                                            value="<?php echo $userAddress['AddressId']; ?>"
                                            type="hidden"
                                            name="inputAddressId" id="inputAddressId">
                                    <label>نام و نام خانوادگی :</label>
                                    <input
                                            value="<?php echo $userAddress['AddressFullName']; ?>"
                                            class="form-control"
                                            type="text"
                                            name="inputAddressFullName" id="inputAddressFullName"
                                            required="" placeholder="نادری">
                                </div>
                                <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                                    <label>پست الکترونیک :</label>
                                    <input
                                            value="<?php echo $userAddress['AddressEmail']; ?>"
                                            class="form-control" type="text"
                                            name="inputAddressEmail" id="inputAddressEmail"
                                            required="" placeholder="info@gmail.com">
                                </div>
                                <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                                    <label> شماره تلفن همراه :</label>
                                    <input
                                            value="<?php echo $userAddress['AddressPhone']; ?>"
                                            class="form-control" type="number"
                                            name="inputAddressPhone" id="inputAddressPhone"
                                            required="" placeholder="">
                                </div>
                                <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                                    <label>شماره تلفن ثابت</label>
                                    <input
                                            value="<?php echo $userAddress['AddressHomePhone']; ?>"
                                            class="form-control" type="number"
                                            name="inputAddressHomePhone" id="inputAddressHomePhone"
                                            required="" placeholder="">
                                </div>
                                <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                                    <label> کد پستی :</label>
                                    <input
                                            value="<?php echo $userAddress['AddressPostalCode']; ?>"
                                            class="form-control" type="number"
                                            name="inputAddressPostalCode" id="inputAddressPostalCode"
                                            required="" placeholder=" ">
                                </div>
                                <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                                    <label> استان :</label>
                                    <input
                                            value="<?php echo $userAddress['AddressStateId']; ?>"
                                            class="form-control" type="text"
                                            name="inputAddressStateId" id="inputAddressStateId"
                                            required="" placeholder=" ">
                                </div>
                                <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                                    <label> شهر :</label>
                                    <input
                                            value="<?php echo $userAddress['AddressCityId']; ?>"
                                            class="form-control" type="text"
                                            name="inputAddressCityId" id="inputAddressCityId"
                                            required="" placeholder=" ">
                                </div>
                                <div class="form-group pull-right col-xs-12" style="padding-right: 0">
                                    <label> آدرس :</label>
                                    <input class="form-control"
                                           type="text"
                                           name="inputAddress"
                                           value="<?php echo $userAddress['Address']; ?>"
                                           id="inputAddress">
                                </div>
                            </div>
                        </div>

                        <div id="editAddressButton" class="col-xs-12 profile-button-edit profile-rightPanel-save-ChangeBtn">
                            <button class="btn pull-left">ویرایش آدرس</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

