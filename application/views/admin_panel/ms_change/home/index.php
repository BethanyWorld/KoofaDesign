<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!-- All Price For Custom Category & Material -->
                    <div class="card" id="CategoryMaterialPrice">
                        <div class="header">
                            <h2>افزودن جنس تمامی محصولات بر اساس دسته بندی و جنس</h2>
                        </div>
                        <div class="body">
                            <div class="col-xs-12 col-sm-3">
                                <label>دسته بندی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select data-live-search="true"  data-size="5" name="category" class="bootstrap-select form-control">
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
                                        <select data-live-search="true"  data-size="5" name="material" class="bootstrap-select form-control">
                                            <?php foreach ($materials as $material) { ?>
                                                <option value="<?php echo $material['MaterialId']; ?>">
                                                    <?php echo $material['MaterialTitle']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <br>
                                <button id="changeCategoryMaterial" type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">افزودن</button>
                                <button id="deleteCategoryMaterial" type="button" class="btn btn-danger btn-lg m-l-15 waves-effect">حذف</button>
                            </div>
                        </div>
                    </div>

                    <!-- All Price For Custom Category & Size -->
                    <div class="card" id="CategorySizePrice">
                        <div class="header">
                            <h2>افزودن سایز تمامی محصولات بر اساس دسته بندی و سایز</h2>
                        </div>
                        <div class="body">
                            <div class="col-xs-12 col-sm-2">
                                <label>دسته بندی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select data-live-search="true"  data-size="5" name="category" class="bootstrap-select form-control">
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
                                <label for="inputDiscountType">سایز</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select data-live-search="true"  data-size="5" name="size" class="bootstrap-select form-control">
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
                                <label class="required" for="inputProductShape">شکل محصول</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control"
                                                id="inputProductShape" name="inputProductShape">
                                            <option value="">همه</option>
                                            <?php foreach ($productShape as $key => $value) { ?>
                                                <option
                                                        value="<?php echo $key; ?>">
                                                    <?php echo $value; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <br>
                                <button id="changeCategorySize" type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">افزودن</button>
                                <button id="deleteCategorySize" type="button" class="btn btn-danger btn-lg m-l-15 waves-effect">حذف</button>
                            </div>
                        </div>
                    </div>


                    <!-- All Price For Custom Category & Size -->
                    <div class="card" id="CategoryMaterialSizePrice">
                        <div class="header">
                            <h2>افزودن جنس و سایز تمامی محصولات بر اساس دسته بندی و سایز و جنس</h2>
                        </div>
                        <div class="body">
                            <div class="col-xs-12 col-sm-2">
                                <label>دسته بندی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select data-live-search="true"  data-size="5" name="category" class="bootstrap-select form-control">
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
                                <label for="inputDiscountType">سایز</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select data-live-search="true"  data-size="5" name="size" class="bootstrap-select form-control">
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
                                <label class="required" for="inputProductShape">شکل محصول</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control" id="inputProductShape" name="inputProductShape">
                                            <option value="">همه</option>
                                            <?php foreach ($productShape as $key => $value) { ?>
                                                <option
                                                        value="<?php echo $key; ?>">
                                                    <?php echo $value; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <label>جنس</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select data-live-search="true"  data-size="5" name="material" class="bootstrap-select form-control">
					                        <?php foreach ($materials as $material) { ?>
                                                <option value="<?php echo $material['MaterialId']; ?>">
							                        <?php echo $material['MaterialTitle']; ?>
                                                </option>
					                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <br>
                                <button id="changeCategoryMaterialSize" type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">افزودن</button>
                                <button id="deleteCategoryMaterialSize" type="button" class="btn btn-danger btn-lg m-l-15 waves-effect">حذف</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
