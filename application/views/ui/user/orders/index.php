<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<div id="main">
    <div class="row section-padding">
        <div class="container margin-t-15 container-padding">
            <div class="col-md-12 col-xs-12 padding-0 margin-b-mines-75">
                <?php echo $sidebar; ?>
                <div class="col-md-9 col-xs-12 rightFloat profile-public-desc-left-div">
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="fit">شماره سفارش</th>
                                <th>تاریخ ثبت</th>
                                <th class="fit">وضعیت</th>
                                <th class="fit">مبلغ کل</th>
                                <th class="fit">هزینه ارسال</th>
                                <th class="fit">مشاهده وصعیت</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order) { ?>
                                <tr>
                                    <td class="fit"><?php echo $order['OrderId']; ?></td>
                                    <td><?php echo $order['OrderDateTime']; ?></td>
                                    <td class="fit"><?php echo orderStatusPipe($order['OrderStatus']); ?></td>
                                    <td class="fit"><?php echo number_format($order['OrderTotalPrice']); ?></td>
                                    <td class="fit"><?php echo number_format($order['OrderSendMethodPrice']); ?></td>
                                    <td class="fit">
                                        <a href="<?php echo base_url('User/Home/orderDetail/').$order['OrderId']; ?>">
                                            مشاهده جزئیات
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

