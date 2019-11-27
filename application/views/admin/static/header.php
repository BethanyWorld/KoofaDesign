<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?></title>
    <base href="<?php echo base_url(); ?>"/>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="کارنوما"/>
    <link href="<?php echo base_url('assets/ui/css/bootstrap.min.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/ui/css/iziToast.min.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/ui/css/custom.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/ui/css/responsive.css'); ?>" rel="stylesheet"/>
    <script type="text/javascript" src="<?php echo base_url('assets/ui/js/jquery-2.1.4.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/ui/js/iziToast.min.js'); ?>"></script>
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>Admin/";
        function toggleLoader() {
            $(".preloader").fadeToggle();
        }
        function reCaptcha() {
            $(".recaptcha").addClass('fa-spin');
            $src = $(".captcha_img").attr('src');
            $(".captcha_img").attr('src' , '').css({
                width: '100px',
                height: '50px',
                display: 'inline-block',
                opacity: '0'
            });
            setTimeout(function(){
                $(".captcha_img").attr('src' , $src).css({
                    width: '100px',
                    height: '50px',
                    display: 'inline-block',
                    opacity: '1'
                });
                $(".recaptcha").removeClass('fa-spin');
            } , 400);
        }
        $(document).ready(function(){
            $.ajaxSetup({
                beforeSend: function (xhr)
                {
                    xhr.setRequestHeader("SecretKey","HFJ-5GRUhPHKhKALnRMvPGcwPEUWT3fDdFQ9");
                }
            });

        });
    </script>
</head>
<body>
<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/');
?>
<!-- container-fluid -->
<div class="container-fluid">
    <div class="preloader">
        <div class="sk-fading-circle">
            <div class="sk-circle1 sk-circle"></div>
            <div class="sk-circle2 sk-circle"></div>
            <div class="sk-circle3 sk-circle"></div>
            <div class="sk-circle4 sk-circle"></div>
            <div class="sk-circle5 sk-circle"></div>
            <div class="sk-circle6 sk-circle"></div>
            <div class="sk-circle7 sk-circle"></div>
            <div class="sk-circle8 sk-circle"></div>
            <div class="sk-circle9 sk-circle"></div>
            <div class="sk-circle10 sk-circle"></div>
            <div class="sk-circle11 sk-circle"></div>
            <div class="sk-circle12 sk-circle"></div>
        </div>
    </div>