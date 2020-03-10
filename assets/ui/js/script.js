$(document).ready(function () {

    // for back to top button
    /*var btn = $('#button');
    $(document).scroll(function() {
        console.log($("body").scrollTop());
        if ($("body").scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });*/
    // for back to top button

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

    $(".ruby-wrapper .sub-menu").each(function () {
        if($(this).find('li').length <= 0){
            $(this).remove();
        }
    });
    $(".mobile-menu-container .sub-menu").each(function () {
        if($(this).find('li').length > 0){
            $(this).before('<span class="fa fa-plus"></span>');
        }
    });



    $(document).on('click' , '.mobile-menu-container .fa',function(){
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