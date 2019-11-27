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
                            <li role="presentation" class="active"><a href="#home" data-toggle="tab">ویرایش نام ویژگی</a></li>
                            <li role="presentation"><a href="#profile" data-toggle="tab">فهرست مقادیر ویژگی</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="col-xs-12">
                                    <label for="email_address">نام ویژگی</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   maxlength="30" minlength="1"
                                                   id="inputPropertyTitle" name="inputPropertyTitle"/>
                                        </div>
                                    </div>
                                </div>
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
                                    <button type="button" id="addCategory" class="btn btn-primary waves-effect">ذخیره
                                    </button>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="row col-xs-12 table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="fit">#</th>
                                            <th>نام ویژگی</th>
                                            <th class="fit">تاریخ ثبت</th>
                                            <th class="fit">ویرایش</th>
                                            <th class="fit">حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-rows">
                                        <?php
                                        $counter = 1;
                                        foreach ($properties as $item) { ?>
                                            <tr>
                                                <td class="fit"><?php echo $counter++; ?></td>
                                                <td><?php echo $item['PropertyTitle']; ?></td>
                                                <td class="fit"><?php echo $item['CreateDateTime']; ?></td>
                                                <td class="fit">
                                                    <a href="<?php echo base_url('Admin/Dashboard/Category/editProperty/').$data['CategoryId'].'/'.$item['PropertyId']; ?>">
                                                        <button type="button"
                                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                    </a>
                                                </td>
                                                <td>

                                                    <button
                                                            data-title="<?php echo $item['PropertyTitle']; ?>"
                                                            data-category-property-id="<?php echo $item['PropertyId']; ?>"
                                                            type="button"
                                                            class="remove-category-property btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
                        </div>
                    </div>
                </div>
                <!-- #END# Example Tab -->

            </div>
        </div>
    </div>
</section>
