<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<div id="main" style="min-height: 50vh;">
    <div class="row">
        <div class="container margin-t-15">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 text-center" style="padding-top:150px;padding-bottom:150px;">
                        <img src="<?php echo base_url('assets/ui/v2/assets/img/check_loading.gif'); ?>"/>
                        <p></p>
                        <p>لطفا شکیبا باشید ، در حال انتقال به درگاه بانک</p>
                    </div>
                </div>
                <form id="pay_form" action="<?php echo config_item('pay_submit_url'); ?>" method="post">
                    <input type="hidden" name="token" value="<?php echo $Token; ?>"/>
                    <input type="hidden" id="language" name="language" value="fa" size="5px"/>
                </form>
                <script>
                    document.getElementById('pay_form').submit();
                </script>

            </div>
        </div>
    </div>
</div>