$(document).ready(function () {
    function toggleLoader() {}

    $isOnMenu = false;
    $mainMenu = $(".main-menu");
    $mainMenuLi = $(".main-menu li");
    $mainMenu.hover(
        function () {
            $isOnMenu = true;
        },
        function () {
            $isOnMenu = false;
        }
    );
    $mainMenuLi.hover(
        function () {
            if($isOnMenu){
                $(this).find('.mega-menu').stop().show();
            }
            else{
                $(this).find('.mega-menu').stop().slideDown(300);
            }
        },
        function () {
            if($isOnMenu){
                $(this).find('.mega-menu').stop().hide();
            }
            else{
                $(this).find('.mega-menu').stop().slideUp(300);
            }
        }
    );
    $(".main-slider").owlCarousel({
        autoplay:3000,
        items: 1,
        nav: true,
        dots: true,
        loop: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: true
    });

    $bulletLength = $(".main-slider .owl-dot").length;
    /*$(".main-slider .owl-dot").css('width', (100/$bulletLength-1)+'%');
    $(".main-slider .owl-dot").css('border', '%');*/

    $(".product-slider.large .owl-carousel").owlCarousel({
        items: 3,
        dots: false,
        rtl:false,
        loop:true,
        margin:0,
        nav:true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: true,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items: 2,
                dots: false,
                rtl:false,
                loop:true,
                margin:10,
                nav:false,
            },
            // breakpoint from 480 up
            480 : {
                items: 2,
                dots: false,
                rtl:false,
                loop:true,
                margin:10,
                nav:false,
            },
            // breakpoint from 768 up
            768 : {
                items: 3,
                dots: false,
                rtl:false,
                loop:true,
                margin:10,
                nav:true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                mouseDrag: true,
                touchDrag: true,
            }
        }
    });
    $(".product-slider.min .owl-carousel").owlCarousel({
        items: 6,
        dots: false,
        rtl:false,
        loop:true,
        margin:10,
        nav:true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: true,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items: 2,
                dots: false,
                rtl:false,
                loop:true,
                margin:10,
                nav:true,
            },
            // breakpoint from 480 up
            480 : {
                items: 2,
                dots: false,
                rtl:false,
                loop:true,
                margin:10,
                nav:true,
            },
            // breakpoint from 768 up
            768 : {
                items: 6,
                dots: false,
                rtl:false,
                loop:true,
                margin:10,
                nav:true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                mouseDrag: true,
                touchDrag: true,
            }
        }
    });
    $(".blog-slider .owl-carousel").owlCarousel({
        items: 5,
        dots: false,
        rtl:false,
        loop:true,
        margin:10,
        nav:true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: true
    });

    $(".search-result").hide();
    $(".search-product-input").on("change keyup paste click", function(){
        $inputSearch = $.trim($(this).val());
        if($inputSearch != ""){
            $sendData = { 'inputSearch': $inputSearch }
            $.ajax({
                type: 'post',
                url: base_url + 'Utility/autoSuggestProduct',
                data: $sendData,
                success: function (data) {
                    $(".search-result").show().html(data);

                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        }
        else{
            $(".search-result").hide().html('');
        }
    });
    $(".back-to-top").click(function(){
        $("html , body").animate({ 'scrollTop': 0 });
    });

    $("#menu-toggle").click(function(){
        $(".mobile-menu-ul").slideToggle();
        if($(this).find('i').hasClass('fa-bars')) {
            $("#menu-toggle i.fa").removeClass('fa-bars').addClass('fa-times');
        } else{
            $("#menu-toggle i.fa").removeClass('fa-times').addClass('fa-bars');
        }
    });


});