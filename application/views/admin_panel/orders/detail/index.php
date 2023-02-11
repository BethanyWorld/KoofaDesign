<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="fit">نام و نام خانوداگی</th>
                                <th class="fit">تلفن</th>
                                <th class="fit">تلفن ثابت</th>
                                <th class="fit">ایمیل</th>
                                <th class="fit">کد تخفیف</th>
                                <th class="fit">تاریخ سفارش</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($orderInfo as $order) { ?>
                                <tr>
                                    <td class="fit"><?php echo $order['UserFirstName']." ".$order['UserLastName']; ?></td>
                                    <td class="fit"><?php echo $order['UserPhone']; ?></td>
                                    <td class="fit"><?php echo $order['UserHomePhone']; ?></td>
                                    <td class="fit"><?php echo $order['UserEmail']; ?></td>
                                    <td class="fit"><?php echo $order['OrderDiscountCode']; ?></td>
                                    <td class="fit"><?php echo $order['OrderDateTime']; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
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
                            <?php
                            foreach ($orderItems as $item) { ?>
                                <div class="col-md-12 col-md-offset-0 col-xs-8 col-xs-offset-2 padding-0 cart-product-main-div">
                                    <div class="col-md-6 col-xs-12 cart-product-detail">
                                        <div class="col-md-4 col-xs-12 cart-product-image RightFloat height100 padding-0">
                                            <a href="" target="_blank">
                                                <img src="<?php echo $item['ProductPrimaryImage']; ?>" height="100%"
                                                     width="100%"/>
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-xs-12 padding-0 cart-product-title-div">
                                            <div class="col-md-12 col-xs-12 cart-product-title">
                                                <a href="<?php echo productUrl($item['ProductId'] , $item['ProductTitle']); ?>" target="_blank">
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
                                                        disabled="disabled"
                                                        readonly
                                                        value="<?php echo $item['ProductCount']; ?>"
                                                        type="number" class="text-center cart-product-buy-number"/>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 cart-product-detail">
                                        <div class="col-md-12 col-xs-12 cart-product-number-detail">
                                            <div class="col-lg-11 col-lg-offset-2 col-md-11 col-md-offset-0 col-xs-12  cart-product-main-div-IncrAndDecr">
                                                <?php if ($item['ProductUploadImage'] != '') { ?>
                                                    <a class="btn btn-default" target="_blank"
                                                       href="<?php echo $item['ProductUploadImage']; ?>">
                                                        مشاهده طرح دلخواه
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-hover table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>عنوان خدمات</th>
                                            <th class="fit">قیمت</th>
                                            <th class="fit">نوع خدمت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($item['OrderedServices'] as $si) { ?>
                                            <tr>
                                                <td><?php echo $si['ServiceTitle']; ?></td>
                                                <td class="fit"><?php echo number_format($si['ServiceItemPrice']); ?></td>
                                                <td class="fit"><?php echo $si['ServiceItemTitle']; ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
