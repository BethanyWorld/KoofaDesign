<script type="text/javascript">

    // for owl product detail
    var bigimage = $("#big");
    var bigimage2 = $("#big2");
    var thumbs = $("#thumbs");
    var thumbs2 = $("#thumbs2");
    //var totalslides = 10;
    var syncedSecondary = true;

    bigimage.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: true,
        autoplay: true,
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    }).on("changed.owl.carousel", syncPosition);

    bigimage2.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: true,
        autoplay: true,
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    }).on("changed.owl.carousel", syncPosition);


    thumbs.on("initialized.owl.carousel", function () {
        thumbs
            .find(".owl-item")
            .eq(0)
            .addClass("current");
    })
        .owlCarousel({
            items: 4,
            dots: true,
            nav: true,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: 4,
            responsiveRefreshRate: 100
        })
        .on("changed.owl.carousel", syncPosition2);

    thumbs2.on("initialized.owl.carousel", function () {
        thumbs2
            .find(".owl-item")
            .eq(0)
            .addClass("current");
    })
        .owlCarousel({
            items: 5,
            dots: true,
            nav: true,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: 4,
            responsiveRefreshRate: 100
        })
        .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
        //if loop is set to false, then you have to uncomment the next line
        //var current = el.item.index;

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
        thumbs2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = thumbs.find(".owl-item.active").length - 1;
        var onscreen2 = thumbs2.find(".owl-item.active").length - 1;
        var start = thumbs
            .find(".owl-item.active")
            .first()
            .index();

        var start2 = thumbs2
            .find(".owl-item.active")
            .first()
            .index();
        var end = thumbs
            .find(".owl-item.active")
            .last()
            .index();

        var end2 = thumbs2
            .find(".owl-item.active")
            .last()
            .index();
        if (current > end) {
            thumbs.data("owl.carousel").to(current, 100, true);
        }
        if (current < start) {
            thumbs.data("owl.carousel").to(current - onscreen, 100, true);
        }

        if (current > end2) {
            thumbs.data("owl.carousel").to(current, 100, true);
        }
        if (current < start2) {
            thumbs.data("owl.carousel").to(current - onscreen2, 100, true);
        }
    }
    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            bigimage.data("owl.carousel").to(number, 100, true);
            bigimage2.data("owl.carousel").to(number, 100, true);
        }
    }
    thumbs.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        bigimage.data("owl.carousel").to(number, 300, true);
        bigimage2.data("owl.carousel").to(number, 300, true);
    });
    thumbs2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        bigimage.data("owl.carousel").to(number, 300, true);
        bigimage2.data("owl.carousel").to(number, 300, true);
    });
    $(document).ready(function () {
        var clickEvent = false;
        $('#myCarousel').carousel({
            interval: 4000
        }).on('click', '.list-group li', function () {
            clickEvent = true;
            $('.list-group li').removeClass('active');
            $(this).addClass('active');
        }).on('slid.bs.carousel', function (e) {
            if (!clickEvent) {
                var count = $('.list-group').children().length - 1;
                var current = $('.list-group li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.list-group li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
    $(window).load(function () {
        var boxheight = $('#myCarousel .carousel-inner').innerHeight();
        var itemlength = $('#myCarousel .item').length;
        var triggerheight = Math.round(boxheight / itemlength + 1);
        $('#myCarousel .list-group-item').outerHeight(triggerheight);
    });
</script>