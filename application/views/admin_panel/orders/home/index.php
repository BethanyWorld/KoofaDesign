<?php
$_DIR = base_url('assets/admin/');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">


            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card info-box">
                    <div class="body">
                        <div class="row col-xs-12 clearfix">
                            <label for="inputOrderId">شماره سفارش</label>
                            <input type="text" id="inputOrderId" name="inputOrderId" />
                            <label for="inputPhone">تلفن</label>
                            <input type="text" id="inputPhone" name="inputPhone" />
                            <label for="inputLastName">نام خانوداگی</label>
                            <input type="text" id="inputLastName" name="inputLastName" />
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
                                    <th>نام و نام خانوداگی</th>
                                    <th class="fit">شماره سفارش</th>
                                    <th class="fit">تلفن</th>
                                    <th class="fit">هزینه کل (تومان)</th>
                                    <th class="fit">وضعیت</th>
                                    <th class="fit">جزئیات</th>
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
                </div>
            </div>
        </div>
    </div>
</section>
