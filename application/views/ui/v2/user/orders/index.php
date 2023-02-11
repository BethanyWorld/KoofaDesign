<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<div id="main">
    <div class="row section-padding">
        <div class="container margin-t-15 container-padding">
            <div class="col-md-12 col-xs-12 padding-0 margin-b-mines-75">
                <?php echo $sidebar; ?>
                <div class="col-md-9 col-xs-12" style="direction: rtl">
                    <style>
                        .table td,
                        .table th{
                            text-align: center;
                            vertical-align: middle !important;
                        }
                        .table th{
                            padding: 15px 4px !important;
                            background: #fd4a1a;
                            color: #fff;
                            border: 0 !important;
                        }
                        .table label{
                            width: 100%;
                            display: inline-block;
                            padding: 12px 5px;
                        }
                    </style>
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
                        <?php if(empty($orders)){ ?>
                            <tr>
                                <td colspan="7">
                                    موردی یافت نشد.
                                </td>
                            </tr>
                        <?php } ?>
                            <?php foreach ($orders as $order) { ?>
                                <tr>
                                    <td class="fit"><?php echo $order['OrderId']; ?></td>
                                    <td><?php echo $order['OrderDateTime']; ?></td>
                                    <td class="fit"><?php echo orderStatusPipe($order['OrderStatus']); ?></td>
                                    <td class="fit"><?php echo number_format($order['OrderTotalPrice']); ?></td>
                                    <td class="fit"><?php echo number_format($order['OrderSendMethodPrice']); ?></td>
                                    <td class="fit">
                                        <a class="btn btn-default" href="<?php echo base_url('User/Home/orderDetail/').$order['OrderId']; ?>">
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

