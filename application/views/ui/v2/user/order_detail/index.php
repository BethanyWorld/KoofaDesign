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
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orderInfo as $order) { ?>
                                <tr>
                                    <td class="fit"><?php echo $order['OrderId']; ?></td>
                                    <td><?php echo $order['OrderDateTime']; ?></td>
                                    <td class="fit"><?php echo orderStatusPipe($order['OrderStatus']); ?></td>
                                    <td class="fit"><?php echo number_format($order['OrderTotalPrice']); ?></td>
                                    <td class="fit"><?php echo number_format($order['OrderSendMethodPrice']); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="col-xs-12 RightFloat padding-0">
                        <?php foreach ($orderItems as $item) {?>
                            <div class="col-md-12 col-md-offset-0 col-xs-8 col-xs-offset-2 padding-0 cart-product-main-div">
                                <div class="col-md-6 col-xs-12 cart-product-detail">
                                    <div class="col-md-4 col-xs-12 cart-product-image RightFloat height100 padding-0">
                                        <a href="" target="_blank">
                                            <img src="<?php echo $item['ProductPrimaryImage']; ?>" height="100%" width="100%"/>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-xs-12 padding-0 cart-product-title-div">
                                        <div class="col-md-12 col-xs-12 cart-product-title">
                                            <a href="" target="_blank">
                                                <p><?php echo $item['ProductTitle']; ?></p>
                                            </a>
                                        </div>
                                        <div class="col-md-12 col-xs-12 cart-product-desc">
                                            <p>محصول <?php echo productTypePipe($item['ProductType']); ?></p>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-12 col-xs-12 cart-product-price">
                                            <div>قیمت :
                                                <span class="cart-discount-price">
                                            <span class="cart-toman-price pull-left">تومان</span>
                                            <span class="pull-left"><?php echo number_format($item['ProductPrice']); ?></span>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12 cart-product-detail">
                                    <div class="col-md-12 col-xs-12 cart-product-number-detail">
                                        <p class="cart-product-number-text">
                                            تعداد :
                                        </p>
                                        <div class="col-lg-11 col-lg-offset-2 col-md-11 col-md-offset-0 col-xs-12  cart-product-main-div-IncrAndDecr">

                                            <input
                                                    readonly
                                                    value="<?php echo $item['ProductCount']; ?>"
                                                   type="number" class="text-center cart-product-buy-number"/>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12 cart-product-detail">
                                    <div class="col-md-12 col-xs-12 cart-product-number-detail">
                                        <div class="col-lg-11 col-lg-offset-2 col-md-11 col-md-offset-0 col-xs-12  cart-product-main-div-IncrAndDecr">
                                            <?php if($item['ProductUploadImage'] != ''){ ?>
                                                <a class="btn btn-default" target="_blank"
                                                   href="<?php echo $item['ProductUploadImage']; ?>">
                                                    مشاهده طرح دلخواه
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

