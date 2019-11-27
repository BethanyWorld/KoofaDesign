<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card info-box">
                    <div class="body">
                        <input type="hidden" id="inputCategoryId" name="inputCategoryId"
                               value="<?php echo $data['CategoryId']; ?>"/>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="email_address">نام دسته:</label>
                            <?php echo $data['CategoryTitle']; ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="email_address">دسته مادر: </label>
                            <?php foreach ($allCategories as $item) {
                                if ($item['CategoryId'] == $data['CategoryParentId']) {
                                    echo $item['CategoryTitle'];
                                }
                            } ?>
                        </div>
                    </div>
                </div>
                <!-- Example Tab -->
                <div class="row col-xs-12 card rtl">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right p-0" role="tablist">
                            <li role="presentation" class="active"><a href="#editPropertyTitleTab" data-toggle="tab">ویرایش نام ویژگی</a></li>
                            <li role="presentation"><a href="#addPropertyTab" data-toggle="tab">افزودن مقادیر ویژگی</a></li>
                            <li role="presentation"><a href="#editpropertyTab" data-toggle="tab">ویرایش مقادیر</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Tab  -->
                            <div role="tabpanel" class="tab-pane fade in active" id="editPropertyTitleTab">
                                <div class="col-xs-12">
                                    <label for="email_address">نام ویژگی</label>
                                    <input type="hidden" class="form-control"
                                        value="<?php echo $properties['PropertyId']; ?>"
                                           id="inputPropertyId" name="inputPropertyId"/>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $properties['PropertyTitle']; ?>"
                                                   maxlength="30" minlength="1"
                                                   id="inputPropertyTitle" name="inputPropertyTitle"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" id="editPropertyTitle" class="btn btn-primary waves-effect">ذخیره
                                    </button>
                                </div>
                            </div>
                            <!-- End Tab  -->
                            <!-- Tab  -->
                            <div role="tabpanel" class="tab-pane fade in" id="addPropertyTab">
                                <div class="col-xs-12">
                                    <label for="email_address">مقادیر ویژگی</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select multiple
                                                    id="inputPropertyOptions" name="inputPropertyOptions"
                                                    data-role="tagsinput"
                                                    class="btn-group bootstrap-select form-control show-tick"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" id="editPropertyOptions" class="btn btn-primary waves-effect">ذخیره
                                    </button>
                                </div>
                            </div>
                            <!-- End Tab  -->
                            <!-- Tab  -->
                            <div role="tabpanel" class="tab-pane fade" id="editpropertyTab">
                                <div class="col-xs-12 table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="fit">#</th>
                                            <th>مقدار ویژگی</th>
                                            <th class="fit">ذخیره</th>
                                            <th class="fit">حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-rows">
                                        <?php
                                        $counter = 1;
                                        foreach ($properties['properties'] as $item) { ?>
                                            <tr>
                                                <td class="fit"><?php echo $counter++; ?></td>
                                                <td contenteditable><?php echo $item['CategoryPropertyOptionTitle']; ?></td>
                                                <td class="fit">
                                                    <button
                                                            data-title="<?php echo $item['CategoryPropertyOptionTitle']; ?>"
                                                            data-category-property-option-id="<?php echo $item['CategoryPropertyOptionId']; ?>"
                                                            type="button"
                                                            class="edit-category-property-option btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">save</i>
                                                    </button>
                                                </td>
                                                <td class="fit">
                                                    <button
                                                            data-title="<?php echo $item['CategoryPropertyOptionTitle']; ?>"
                                                            data-category-property-option-id="<?php echo $item['CategoryPropertyOptionId']; ?>"
                                                            type="button"
                                                            class="remove-category-property-option btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12">
                                    <div class="pagination-holder clearfix">
                                        <div id="light-pagination" class="pagination light-theme simple-pagination">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab  -->
                        </div>
                    </div>
                </div>
                <!-- #END# Example Tab -->

            </div>
        </div>
    </div>
</section>
