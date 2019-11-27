<?php
$_DIR = base_url('assets/empanel/');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="fit">#</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th class="fit">تلفن</th>
                                    <th class="fit">ایمیل</th>
                                    <th class="fit">تاریخ ثبت</th>
                                    <th class="fit">ویرایش</th>

                                </tr>
                                </thead>
                                <tbody class="table-rows">
                                <?php echo $data; ?>
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
