<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>پیشخوان</h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">سفارش ناموفق</div>
                        <div class="number count-to">
                            <?php echo $orderTypeCount[1][0]['FailedOrderCount']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <div class="text">سفارش در انتظار</div>
                        <div class="number count-to">
                            <?php echo $orderTypeCount[0][0]['PendOrderCount']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">سفارش موفق</div>
                        <div class="number count-to">
                            <?php echo $orderTypeCount[2][0]['SuccessOrderCount']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">تعدا کاربران</div>
                        <div class="number count-to">
                            <?php echo $usersCount; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix rtl">
            <!-- Task Info -->
            <div class="col-xs-12">
                <div class="card">
                    <table class="table table-hover dashboard-task-infos">
                        <thead>
                        <tr>
                            <th class="fit">#</th>
                            <th class="fit">شناسه سفارش</th>
                            <th class="fit">وضعیت</th>
                            <th class="fit">مبلغ کل</th>
                            <th class="fit">تاریخ ثبت</th>
                            <th>سفارش دهنده</th>
                            <th class="fit">تلفن</th>
                            <th class="fit">جزئیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(empty($latestOrders)){ ?>
                            <tr>
                                <td colspan="8">
                                    موردی یافت نشد
                                </td>
                            </tr>
                        <?php } ?>
                        <?php
                        $count = 0;
                        foreach ($latestOrders as $latestOrder) { $count +=1; ?>
                            <tr>
                                <td class="fit"><?php echo $count; ?></td>
                                <td class="fit"><?php echo $latestOrder['OrderId']; ?></td>
                                <td class="fit"><?php echo orderStatusPipe($latestOrder['OrderStatus']); ?></td>
                                <td class="fit"><?php echo number_format($latestOrder['OrderTotalPrice']); ?></td>
                                <td class="fit"><?php echo $latestOrder['OrderDateTime']; ?></td>
                                <td><?php echo $latestOrder['UserFirstName']." ".$latestOrder['UserLastName']; ?></td>
                                <td class="fit"><?php echo $latestOrder['UserPhone']; ?></td>
                                <td class="fit">
                                    <a href="<?php echo base_url('Admin/Dashboard/Orders/detail/') . $latestOrder['OrderId']; ?>">
                                        <button type="button"
                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">edit</i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>
    </div>
</section>
