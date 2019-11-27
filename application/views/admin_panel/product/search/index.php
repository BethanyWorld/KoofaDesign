<?php
$_DIR = base_url('assets/admin/');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card search-container">
                    <div class="body">
                        <div class="col-xs-12">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="inputProductTitle">عنوان محصول</label>
                                        <input type="text" id="inputProductTitle" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="inputProductCategoryDropDown">دسته بندی محصول</label>
                                        <?php echo $categoryTree; ?>
                                    </div>
                                </div>
                            </div>
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
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="fit">#</th>
                                    <th>نام محصول</th>
                                    <th class="fit">تاریخ ثبت</th>
                                    <th class="fit">قیمت (تومان)</th>
                                    <th class="fit">ویرایش</th>
                                    <th class="fit">حذف</th>
                                </tr>
                                </thead>
                                <tbody class="table-rows">
                                    <!-- Content Goes Here -->
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
    </div>
</section>
