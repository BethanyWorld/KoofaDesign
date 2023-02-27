<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<div id="main">
    <div class="row section-padding">
        <div class="container margin-t-15 container-padding">
            <div class="col-md-12 col-xs-12 padding-0 margin-b-mines-75">
                <?php echo $sidebar; ?>
                <div class="col-md-9 col-xs-12 main-form">
                    <div class="col-xs-12">
                        <h3 class="text-center form-title">
                            نشانی های من
                        </h3>
                    </div>
                    <div class="col-md-12 col-xs-12 profile-form-div">
                        <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                            <label>نام و نام خانوادگی :</label>
                            <input class="form-control"
                                   type="text"
                                   name="inputAddressFullName" id="inputAddressFullName"
                                   required="">
                        </div>
                        <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                            <label>پست الکترونیک :</label>
                            <input class="form-control" type="text"
                                   name="inputAddressEmail" id="inputAddressEmail"
                                   required="">
                        </div>
                        <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                            <label> شماره تلفن همراه :</label>
                            <input class="form-control" type="number"
                                   name="inputAddressPhone" id="inputAddressPhone"
                                   required="" placeholder="">
                        </div>
                        <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                            <label>شماره تلفن ثابت</label>
                            <input class="form-control" type="number"
                                   name="inputAddressHomePhone" id="inputAddressHomePhone"
                                   required="" placeholder="">
                        </div>
                        <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                            <label> کد پستی :</label>
                            <input class="form-control" type="number"
                                   name="inputAddressPostalCode" id="inputAddressPostalCode"
                                   required="" placeholder=" ">
                        </div>
                        <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                            <label> استان :</label>
                            <input class="form-control" type="text"
                                   name="inputAddressStateId" id="inputAddressStateId"
                                   required="" placeholder=" ">
                        </div>
                        <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                            <label> شهر :</label>
                            <input class="form-control" type="text"
                                   name="inputAddressCityId" id="inputAddressCityId"
                                   required="" placeholder=" ">
                        </div>
                        <div class="form-group pull-right col-md-6 col-xs-12" style="padding-right: 0">
                            <label> آدرس :</label>
                            <input class="form-control" type="text"
                                   name="inputAddress" id="inputAddress"
                                   required="" placeholder=" ">
                        </div>
                    </div>
                    <div id="addAddressButton" class="col-xs-12 profile-button-edit profile-rightPanel-save-ChangeBtn">
                        <button class="btn pull-left">افزودن آدرس</button>
                    </div>

                    <div class="col-md-12 col-xs-12 profile-login-image-div3">
                        <?php if (empty($userAddress)) { ?>
                            <div class="alert alert-warning">
                                موردی یافت نشد.
                                لطفا یک آدرس اضافه کنید
                            </div>
                        <?php } ?>
                        <?php foreach ($userAddress as $item) { ?>
                            <div class="col-md-12 col-xs-12 profile-client-detail-div">
                                <div class="col-md-10 col-xs-12 padding-0 rightFloat">
                                    <div class="col-md-12 col-xs-12 profile-client-name padding-right">
                                        <p><?php echo $item['AddressFullName']; ?></p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 padding-0 profile-client-address">
                                        <p>
                                            <?php echo $item['AddressStateId']; ?>
                                            <?php echo $item['AddressCityId']; ?>
                                            <?php echo $item['Address']; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 profile-client-phone padding-right">
                                        <div class="col-md-4 col-xs-12 padding-right rightFloat">
                                            <p>کد پستی: <?php echo $item['AddressPostalCode']; ?></p>
                                        </div>
                                        <div class="col-md-4 col-xs-12 padding-right rightFloat">
                                            <p>شماره تلفن همراه: <?php echo $item['AddressPhone']; ?></p>
                                        </div>
                                        <div class="col-md-4 col-xs-12 padding-right rightFloat text-left">
                                            <p>شماره تلفن ثابت:<?php echo $item['AddressHomePhone']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12 profile-client-edit-button">
                                    <a href="<?php echo base_url('User/Home/addressEdit/' . $item['AddressId']) ?>">
                                        <button>ویرایش</button>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .profile-form-div label {
        width:  145px !important;
    }
    .profile-form-div input {
        width: calc(100% - 145px) !important;
    }

</style>

