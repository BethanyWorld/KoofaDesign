<?php
$_DIR = base_url('assets/empanel/');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card info-box">
                    <div class="body">
                        <div class="row col-xs-12 clearfix">
                            <label for="inputCategoryTitle">عنوان دسته بندی</label>
                            <input type="text" id="inputCategoryTitle" name="inputCategoryTitle" />
                            <button type="button"
                                    id="searchButton"
                                    class="btn btn-info btn-circle waves-effect waves-circle waves-float pull-left btn-search">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation"  class="active"><a href="#home" data-toggle="tab" aria-expanded="true">نمایش صفحه ای</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab" aria-expanded="false">نمایش درختی</a></li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="home">
                                    <div class="col-xs-12 table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th class="fit">#</th>
                                                <th>نام دسته</th>
                                                <th class="fit">ویژه</th>
                                                <th class="fit">تاریخ ثبت</th>
                                                <th class="fit">ویژگی ها</th>
                                                <th class="fit">کپی لینک</th>
                                                <th class="fit">ویرایش</th>
                                                <th class="fit">حذف</th>
                                            </tr>
                                            </thead>
                                            <tbody class="table-rows"></tbody>
                                        </table>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="pagination-holder clearfix">
                                            <div id="light-pagination" class="pagination light-theme simple-pagination">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <?php echo $categoryTree; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
