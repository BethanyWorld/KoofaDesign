<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!-- All Price -->
                    <div class="card" id="AllPrice">
                        <div class="header">
                            <h2>تغییر قیمت تمامی محصولات</h2>
                        </div>
                        <div class="body">
                            <div class="col-sm-2 col-xs-12">
                                <div class="form-group form-float">
                                    <label>مقدار</label>
                                    <div class="form-line">
                                        <input type="text" name="cost" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>نوع</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-type" class="bootstrap-select form-control">
                                            <option value="price">تومان</option>
                                            <option value="percent">درصد</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>کم / زیاد</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-inc-dec" class="bootstrap-select form-control">
                                            <option value="DEC" selected>کم شود</option>
                                            <option value="INC">زیاد شود</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <br>
                                <button id="changeAllPrice" type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">تغییر</button>
                            </div>
                        </div>
                    </div>

                    <!-- All Price For Custom Category -->
                    <div class="card" id="CategoryPrice">
                        <div class="header">
                            <h2>تغییر قیمت تمامی محصولات بر اساس دسته بندی</h2>
                        </div>
                        <div class="body">
                            <div class="col-sm-2 col-xs-12">
                                <div class="form-group form-float">
                                    <label>مقدار</label>
                                    <div class="form-line">
                                        <input type="text" name="cost" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>نوع</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-type" class="bootstrap-select form-control">
                                            <option value="price">تومان</option>
                                            <option value="percent">درصد</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <label>دسته بندی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="category" class="bootstrap-select form-control">
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?php echo $category['CategoryId']; ?>">
                                                    <?php echo $category['CategoryTitle']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>کم / زیاد</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-inc-dec" class="bootstrap-select form-control">
                                            <option value="DEC" selected>کم شود</option>
                                            <option value="INC">زیاد شود</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <br>
                                <button id="changeCategoryPrice" type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">تغییر</button>
                            </div>
                        </div>
                    </div>

                    <!-- All Price For Custom Size -->
                    <div class="card" id="SizePrice">
                        <div class="header">
                            <h2>تغییر قیمت تمامی محصولات بر اساس سایز</h2>
                        </div>
                        <div class="body">
                            <div class="col-sm-2 col-xs-12">
                                <div class="form-group form-float">
                                    <label>مقدار</label>
                                    <div class="form-line">
                                        <input type="text" name="cost" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>نوع</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-type" class="bootstrap-select form-control">
                                            <option value="price">تومان</option>
                                            <option value="percent">درصد</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <label for="inputDiscountType">سایز</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="size" class="bootstrap-select form-control">
                                            <?php foreach ($sizes as $size) { ?>
                                                <option value="<?php echo $size['SizeId']; ?>">
                                                    <?php echo $size['SizeTitle']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>کم / زیاد</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-inc-dec" class="bootstrap-select form-control">
                                            <option value="DEC" selected>کم شود</option>
                                            <option value="INC">زیاد شود</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <br>
                                <button id="changeSizePrice" type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">تغییر</button>
                            </div>
                        </div>
                    </div>

                    <!-- All Price For Custom Material -->
                    <div class="card" id="MaterialPrice">
                        <div class="header">
                            <h2>تغییر قیمت تمامی محصولات بر اساس جنس</h2>
                        </div>
                        <div class="body">
                            <div class="col-sm-2 col-xs-12">
                                <div class="form-group form-float">
                                    <label>مقدار</label>
                                    <div class="form-line">
                                        <input type="text" name="cost" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>نوع</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-type" class="bootstrap-select form-control">
                                            <option value="price">تومان</option>
                                            <option value="percent">درصد</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <label>جنس</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="material" class="bootstrap-select form-control">
                                            <?php foreach ($materials as $material) { ?>
                                                <option value="<?php echo $material['MaterialId']; ?>">
                                                    <?php echo $material['MaterialTitle']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>کم / زیاد</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-inc-dec" class="bootstrap-select form-control">
                                            <option value="DEC" selected>کم شود</option>
                                            <option value="INC">زیاد شود</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <br>
                                <button id="changeMaterialPrice" type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">تغییر</button>
                            </div>
                        </div>
                    </div>

                    <!-- All Price For Custom Category & Material -->
                    <div class="card" id="CategoryMaterialPrice">
                        <div class="header">
                            <h2>تغییر قیمت تمامی محصولات بر اساس دسته بندی و جنس</h2>
                        </div>
                        <div class="body">
                            <div class="col-sm-2 col-xs-12">
                                <div class="form-group form-float">
                                    <label>مقدار</label>
                                    <div class="form-line">
                                        <input type="text" name="cost" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>نوع</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-type" class="bootstrap-select form-control">
                                            <option value="price">تومان</option>
                                            <option value="percent">درصد</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <label>دسته بندی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="category" class="bootstrap-select form-control">
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?php echo $category['CategoryId']; ?>">
                                                    <?php echo $category['CategoryTitle']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <label>جنس</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="material" class="bootstrap-select form-control">
                                            <?php foreach ($materials as $material) { ?>
                                                <option value="<?php echo $material['MaterialId']; ?>">
                                                    <?php echo $material['MaterialTitle']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>کم / زیاد</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-inc-dec" class="bootstrap-select form-control">
                                            <option value="DEC" selected>کم شود</option>
                                            <option value="INC">زیاد شود</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <br>
                                <button id="changeCategoryMaterialPrice" type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">تغییر</button>
                            </div>
                        </div>
                    </div>

                    <!-- All Price For Custom Category & Size -->
                    <div class="card" id="CategorySizePrice">
                        <div class="header">
                            <h2>تغییر قیمت تمامی محصولات بر اساس دسته بندی و سایز</h2>
                        </div>
                        <div class="body">
                            <div class="col-sm-2 col-xs-12">
                                <div class="form-group form-float">
                                    <label>مقدار</label>
                                    <div class="form-line">
                                        <input type="text" name="cost" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>نوع</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-type" class="bootstrap-select form-control">
                                            <option value="price">تومان</option>
                                            <option value="percent">درصد</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <label>دسته بندی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="category" class="bootstrap-select form-control">
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?php echo $category['CategoryId']; ?>">
                                                    <?php echo $category['CategoryTitle']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <label for="inputDiscountType">سایز</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="size" class="bootstrap-select form-control">
                                            <?php foreach ($sizes as $size) { ?>
                                                <option value="<?php echo $size['SizeId']; ?>">
                                                    <?php echo $size['SizeTitle']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>کم / زیاد</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="cost-inc-dec" class="bootstrap-select form-control">
                                            <option value="DEC" selected>کم شود</option>
                                            <option value="INC">زیاد شود</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <br>
                                <button id="changeCategorySizePrice" type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">تغییر</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
