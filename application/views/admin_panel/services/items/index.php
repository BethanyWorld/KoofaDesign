<?php $_DIR = base_url('assets/admin/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputServiceTitle">عنوان خدمت: <?php echo $data['ServiceTitle']; ?></label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden" value="<?php echo $data['RowId']; ?>" id="inputServiceId" name="inputServiceId" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputServiceItemTitle">عنوان آیتم</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control ltr"
                                           maxlength="30" minlength="1"
                                           id="inputServiceItemTitle" name="inputServiceItemTitle"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputServiceItemPrice">قیمت آیتم (تومان)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control ltr"
                                           maxlength="30" minlength="1"
                                           id="inputServiceItemPrice" name="inputServiceItemPrice"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="addServiceItem" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">

                        <table class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th class="fit">عنوان آیتم</th>
                                    <th class="fit">قیمت</th>
                                    <th class="fit">حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $serviceItems['data'] as $service_item ) { ?>
                                    <tr>
                                        <td class="fit">
                                            <input
                                                    class="item-edit"
                                                    data-service-item-id="<?php echo $service_item['ServiceItemId']; ?>"
                                                    data-service-item-type="Title"
                                                    value="<?php echo $service_item['ServiceItemTitle']; ?>"
                                                    type="text" />
                                        </td>
                                        <td class="fit">
                                            <input class="item-edit"
                                                   data-service-item-id="<?php echo $service_item['ServiceItemId']; ?>"
                                                   data-service-item-type="Price"
                                                   value="<?php echo $service_item['ServiceItemPrice']; ?>"
                                                   type="text" />
                                        </td>
                                        <td class="fit">
                                            <button type="button"
                                                    data-title="<?php echo $service_item['ServiceItemTitle']; ?>"
                                                    data-service-item-id="<?php echo $service_item['ServiceItemId']; ?>"
                                                    class="btn btn-danger waves-effect remove">حذف</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
