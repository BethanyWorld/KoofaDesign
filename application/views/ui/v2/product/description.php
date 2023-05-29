<div class="col-md-12 col-xs-12 product-tabs">
    <ul>
        <li class="active" data-class="product-description-content">توضیحات</li>
        <li data-class="product-description-table">مشخصات</li>
        <li data-class="product-description-comment">نظرات</li>
    </ul>
</div>


<div class="col-md-12 col-xs-12 tab-content product-description product-description-content">
    <?php echo $productCategories[sizeof($productCategories) - 1]['CategoryProductDescription']; ?>
    <?php echo $data['ProductDescription']; ?>
</div>
<div class="col-md-12 col-xs-12 tab-content product-description product-description-table">
    <?php echo $productCategories[sizeof($productCategories) - 1]['CategoryProductDescriptionTable']; ?>
    <?php echo $data['ProductDescriptionTable']; ?>
</div>
<div class="col-md-12 col-xs-12 tab-content product-description product-description-comment">
    <ul class="comment-list">
        <?php foreach ($productComment as $item) { ?>
            <li>
                <span class="name"><?php echo $item['CommentUserFullName'] ?></span>
                <span class="rate">
                    <div data-rating="<?php echo $item['CommentRate'] ?>" class="comment-rating"></div>
                </span>
                <span class="time"><?php echo convertDate($item['CreateDateTime']) . "-" . convertTime($item['CreateDateTime']); ?></span>
                <div class="content">
                    <?php echo nl2br($item['CommentContent']); ?>
                </div>
            </li>
        <?php } ?>
    </ul>
    <div class="comment-form">
        <div class="form-group col-md-6 col-xs-12 pull-right">
            <div class="form-group col-xs-12">
                <label for="inputFullName">نام و نام خانوادگی</label>
                <input type="text" id="inputFullName" class="form-control"/>
            </div>
            <div class="form-group col-xs-12">
                <label for="inputFullName">ایمیل</label>
                <input type="text" id="inputEmail" class="form-control"/>
            </div>
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <div class="form-group col-xs-12">
                <label for="inputFullName">نظر</label>
                <textarea id="inputComment" class="form-control"></textarea>
                <div class="my-rating" style="direction: ltr;text-align: center;"></div>
            </div>
            <div class="form-group col-xs-12">
                <button data-product-id="<?php echo $data['ProductId']; ?>" id="doSubmitComment"
                        class="btn btn-primary">ثبت نظر
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $rate = 0;
        $(".product-tabs li").click(function () {
            $(".product-tabs li").removeClass('active');
            $(this).addClass('active');
            $class = $(this).data('class');
            $(".tab-content").hide();
            $("." + $class).show();
        });
        $(".product-tabs li").eq(0).click();
        $(".my-rating").starRating({
            totalStars: 5,
            useFullStars: true,
            starShape: 'rounded',
            starSize: 40,
            emptyColor: 'lightgray',
            hoverColor: '#ff3500',
            activeColor: '#ff3500',
            useGradient: false,
            callback: function (currentRating, $el) {
                $rate = currentRating;
            }
        });

        $(".comment-rating").starRating({
            totalStars: 5,
            readOnly: true,
            starShape: 'rounded',
            starSize: 15,
            emptyColor: 'lightgray',
            hoverColor: '#ff3500',
            activeColor: '#ff3500',
        });


        $("#doSubmitComment").click(function () {
            toggleLoader();
            $sendData = {
                'inputProductId': $(this).data('product-id'),
                'inputFullName': $("#inputFullName").val(),
                'inputEmail': $("#inputEmail").val(),
                'inputComment': $("#inputComment").val(),
                'inputRate': $rate,
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Product/doSubmitComment',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        location.reload();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        });


    });
</script>
<style>
    .comment-list {
        padding: 0;
        margin-bottom: 30px;
        display: inline-block;
        width: 100%;
    }

    .comment-list li {
        display: inline-block;
        width: 100%;
        direction: rtl;
        text-align: justify;
        border: 1px solid #ececec;
        padding: 10px;
        margin-bottom: 10px;
    }

    .comment-list span.name {
        float: right;
        color: #757575;
        font-size: 12px;
    }

    .comment-list span.rate {
        float: right;
        color: #757575;
        font-size: 12px;
        margin: 4px 6px;
    }

    .comment-list span.time {
        color: #757575;
        float: left;
        font-size: 12px;
    }

    .comment-list div.content {
        display: inline-block;
        width: 100%;
        padding: 6px;
    }

    .comment-form {

    }

    .comment-form label {
        font-size: 12px;
        font-weight: 900;
    }

    .comment-form input {
        border-radius: 0;
        height: 45px;
        font-size: 12px;
    }

    .comment-form textarea {
        height: 150px;
        border-radius: 0;
        resize: none;
    }

    .comment-form .btn {
        display: inline-block;
        float: right;
        padding: 15px 25px;
        min-width: 150px;
        text-align: center;
        cursor: pointer;
        background: #ff3500;
        border-radius: 0;
        border: 0;
        float: left;
    }
</style>