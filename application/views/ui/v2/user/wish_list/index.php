<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<div id="main">
    <div class="row section-padding">
        <div class="container margin-t-15 container-padding">
            <div class="col-md-12 col-xs-12 padding-0 margin-b-mines-75">
                <?php echo $sidebar; ?>
                <div class="col-md-9 col-xs-12 main-form">
                    <div class="col-md-12 col-xs-12">

                        <div class="col-xs-12">
                            <h3 class="text-center form-title">محصولات مورد علاقه</h3>
                        </div>

                        <?php if (empty($userWishList)) { ?>
                            <div class="alert alert-warning">
                                موردی یافت نشد.
                            </div>
                        <?php } ?>
                        <?php foreach ($userWishList as $item) {
                            if (!empty($item)) {
                                $item = $item[0]; ?>
                                <div class="col-md-6 col-xs-12 profile-login-image-div4 pull-right">
<!--                                    <div class="col-md-12 col-xs-12 product-detail-social-div">-->
<!--                                        <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 rightFloat product-detail-social">-->
<!--                                            <h3 class="social-info">-->
<!--                                                <span>به دوستانتان اطلاع دهید</span>-->
<!--                                            </h3>-->
<!--                                            <ul>-->
<!--                                                <li class="telegram">-->
<!--                                                    <a aria-label="telegram" title="telegram" href=""-->
<!--                                                       target="_blank">-->
<!--                                                        <i class="fa fa-send"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li class="facebook">-->
<!--                                                    <a aria-label="facebook" title="facebook" href=""-->
<!--                                                       target="_blank">-->
<!--                                                        <i class="fa fa-facebook"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li class="linkedin"><a aria-label="linkedin" title="linkedin"-->
<!--                                                                        href=""-->
<!--                                                                        target="_blank">-->
<!--                                                        <i class="fa fa-linkedin-square"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li class="google-plus"><a aria-label="google-plus"-->
<!--                                                                           title="google-plus"-->
<!--                                                                           href=""-->
<!--                                                                           target="_blank">-->
<!--                                                        <i class="fa fa-google-plus"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li class="pinterest"><a aria-label="pinterest" title="pinterest"-->
<!--                                                                         href="">-->
<!--                                                        <i class="fa fa-pinterest-p"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                                <li class="canEmailToFriend"><a aria-label="canEmailToFriend"-->
<!--                                                                                title="canEmailToFriend"-->
<!--                                                                                href="">-->
<!--                                                        <i class="fa fa-envelope-o"></i>-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="col-md-12 col-xs-12 padding-0">
                                        <div class="col-md-4 col-xs-12 rightFloat padding-0 profile-detail-pic-div">
                                            <img src="<?php echo $item['ProductPrimaryImage']; ?>" width="100%" height="100%" style="object-fit: cover;height: 140px;">
                                        </div>
                                        <div class="col-md-8 col-xs-12">
                                            <div class="col-md-12 col-xs-12 padding-0 profile-product-detail-title">
                                                <p><?php echo $item['ProductTitle']; ?></p>
                                                <button class="btn remove-wish-list" data-product-id="<?php echo $item['ProductId']; ?>">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-12 col-xs-12 padding-0 profile-product-detail-text">
                                                <p><?php echo $item['ProductSubTitle']; ?></p>
                                            </div>
                                            <div class="col-md-12 col-xs-12 padding-0 profile-product-detail-price">
                                                <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                                    مشاهده محصول
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

