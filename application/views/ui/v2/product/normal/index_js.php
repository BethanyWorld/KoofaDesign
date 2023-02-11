<script type="text/javascript">
    $(document).ready(function () {


        setTimeout(function(){
            $('#product-slider img')
                .wrap('<span style="display:inline-block"></span>')
                .css('display', 'block')
                .parent()
                .zoom({magnify:2});
        } , 3000);
        $(".slider-active-buttons span").click(function(){
            $(".slider-active-buttons span").removeClass('active');
            $(this).addClass('active');
        });

        $mainPrice = 0;
        var bigimage = $("#big");
        var thumbs = $("#thumbs");
        var related = $("#related .owl-carousel");
        var syncedSecondary = true;
        bigimage.owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            animateOut: 'fadeOut',
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ]
        }).on("changed.owl.carousel", syncPosition);
        thumbs.on("initialized.owl.carousel", function () { thumbs.find(".owl-item").eq(0).addClass("current");}).owlCarousel({
            items: 4,
            dots: true,
            mouseDrag: false,
            nav: true,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: 4,
            responsiveRefreshRate: 100
        }).on("changed.owl.carousel", syncPosition2);
        function syncPosition(el) {
            //if loop is set to false, then you have to uncomment the next line
            var current = el.item.index;
            //to disable loop, comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
            //to this
            thumbs
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = thumbs.find(".owl-item.active").length - 1;
            var start = thumbs
                .find(".owl-item.active")
                .first()
                .index();
            var end = thumbs
                .find(".owl-item.active")
                .last()
                .index();

            if (current > end) {
                thumbs.data("owl.carousel").to(current, 100, true);
            }
            if (current < start) {
                thumbs.data("owl.carousel").to(current - onscreen, 100, true);
            }
        }
        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                bigimage.data("owl.carousel").to(number, 100, true);
            }
        }
        related.owlCarousel({
            items: 4,
            slideSpeed: 4000,
            nav: true,
            autoplay: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ]
        });
        thumbs.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            bigimage.data("owl.carousel").to(number, 300, true);
        });

        $("#addToCart").click(function () {
            toggleLoader();
            $id = $(this).data('product-id');
            $src = $("#upload-image").attr('src');
            $.ajax({
                type: 'post',
                url: base_url + 'Cart/addNormalUpload',
                data: {
                    'inputProductId': $id,
                    'inputProductUploadImage': $src
                },
                success: function () {
                    location.href = base_url + 'Cart'
                },
                error: function () {

                }

            });
        });
        $(".add-like-div").click(function () {
            //toggleLoader();
            $id = $(this).data('product-id');
            $.ajax({
                type: 'post',
                url: base_url + 'Product/doAddWishList',
                data: {
                    'inputProductId': $id
                },
                success: function (data) {
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                },
                error: function () {
                }
            });
        });
    });
</script>