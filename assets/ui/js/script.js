$(document).ready(function () {
    $(".search-toggle").click(function () {
        $(".mobile-col-search").fadeToggle();
    });
    $isLoginMenuVisible = false;
    $(".login-div").mouseover(function () {
        $isLoginMenuVisible = true;
        $(".additional-login-div").stop().slideDown(200);
    });
    $(".login-div").mouseout(function () {
        $isLoginMenuVisible = false;
        setTimeout(function () {
            if (!$isLoginMenuVisible) {
                $(".additional-login-div").stop().slideUp(200);
            }
        }, 1000);
    });
    $(".additional-login-div").mouseover(function () {
        $isLoginMenuVisible = true;
        $(this).stop().slideDown(200);
    });
    $(".additional-login-div").mouseout(function () {
        $isLoginMenuVisible = false;
        setTimeout(function () {
            if (!$isLoginMenuVisible) {
                $(".additional-login-div").stop().slideUp(200);
            }
        }, 1000);
    });

    $(".mobile-bars").click(function(){
        if($(".mobile-menu-container").hasClass('active')){
            $('.mobile-bars-toggle').removeClass('fa-times');
            $('.mobile-bars-toggle').addClass('fa-bars');
            $(".mobile-menu-container").removeClass('active');
            $("body").css('overflow','');
        }
        else{
            $('.mobile-bars-toggle').addClass('fa-times').removeClass('fa-bars');
            $(".mobile-menu-container").addClass('active');
            $("body").css('overflow','hidden');
        }
    });

    $(".mobile-menu-container .fa").click(function(){
        if($(this).next('ul').is(':visible')){
            $(this).addClass('fa-plus');
            $(this).removeClass('fa-minus');
            $(this).next('ul').slideToggle();
        }
        else{
            $(this).removeClass('fa-plus');
            $(this).addClass('fa-minus');
            $(this).next('ul').slideToggle();
        }
    });


});