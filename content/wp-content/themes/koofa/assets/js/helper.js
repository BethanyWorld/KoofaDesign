// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}
function toEnglishNumbers(inputNumber2) {
    if (inputNumber2 == undefined) return '';
    var str = $.trim(inputNumber2.toString());
    if (str == "") return "";
    str = str.replace(/۰/g, '0');
    str = str.replace(/۱/g, '1');
    str = str.replace(/۲/g, '2');
    str = str.replace(/۳/g, '3');
    str = str.replace(/۴/g, '4');
    str = str.replace(/۵/g, '5');
    str = str.replace(/۶/g, '6');
    str = str.replace(/۷/g, '7');
    str = str.replace(/۸/g, '8');
    str = str.replace(/۹/g, '9');
    return str;
}
function toggleLoader(){
    $(".preloader").fadeToggle();
}
function notify($content , $type ){
    iziToast.show({
        title: $content,
        color: $type, // blue, red, green, yellow
        zindex: 906000000000000000,
        timeout:6000 ,
        position: 'topCenter'
    });
}
$(document).ready(function () {
    $('body').tooltip({
        selector: '[data-toggle=tooltip]'
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });
    $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });
    $("table").wrap('<div class="table-responsive"></div>').addClass('table table-hover table-condensed table-bordered');
    function GenerateCaptcha() {
        $url = base_url+"GetCaptcha/index";
        $(".captcha-img").attr('src', $url);
    }
    $(".reCaptcha").on('click', function () {
        $this = $(this);
        $this.addClass('fa-spin');
        GenerateCaptcha();
        setTimeout(function () {
            $this.removeClass('fa-spin');
        }, 1000);
    });
    $("#buttonHeaderLogin").click(function () {
        toggleLoader();
        $inputPhone = $("#loginModal #inputHeaderLoginPhone").val();
        $inputPassword = $("#loginModal #inputHeaderLoginPassword").val();
        $inputCaptcha = $("#loginModal #inputHeaderLoginCaptcha").val();
        if ($inputPassword != "" && $inputPhone != "" && $inputCaptcha != "") {
            $sendData = {
                'inputPhone': $inputPhone,
                'inputPassword': $inputPassword,
                'inputCaptcha': $inputCaptcha
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Login/doLogin',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    iziToast.show({
                        title: $result['content'],
                        color: $result['type'],
                        zindex: 2030,
                        position: 'topLeft'
                    });
                    if($result['redirect'] != undefined){
                        if($result['success']){
                            setTimeout(function(){
                                window.location = $result['redirect'];
                            } , 2000);
                        }
                    }
                    else{
                        if($result['success']){
                            setTimeout(function(){
                                window.location.href = base_url+"User/index";
                            } , 2000);
                        }
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        }
        else {
            toggleLoader();
            iziToast.show({
                title: 'لطفا تمامی مقادیر را کامل کنید',
                color: 'yellow', // blue, red, green, yellow
                zindex: 2030000,
                position: 'topLeft'
            });
        }
    });
});
