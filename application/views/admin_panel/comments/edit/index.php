<?php $_DIR = base_url('assets/admin/'); ?>
<input type="hidden"  value="<?php echo $data['CommentId']; ?>"  id="inputCommentId" name="inputCommentId" />
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">

                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputCommentId">نام و نام خانوادگی</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"
                                           class="form-control"
                                           value="<?php echo $data['CommentUserFullName']; ?>"
                                           id="inputCommentUserFullName" name="inputCommentUserFullName" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputCommentEmail">ایمیل</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"
                                           class="form-control"
                                           value="<?php echo $data['CommentEmail']; ?>"
                                           id="inputCommentEmail" name="inputCommentEmail" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <label for="inputMaterialTitle">وضعیت</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select id="inputStatus" class="form-control">
                                        <option value="Pend" <?php if($data['CommentStatus'] == 'Pend'){ echo 'selected'; }; ?>><?php echo orderCommentStatusPipe('Pend'); ?></option>
                                        <option value="Accept" <?php if($data['CommentStatus'] == 'Accept'){ echo 'selected'; }; ?>><?php echo orderCommentStatusPipe('Accept'); ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <label for="inputMaterialTitle">متن</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea style="height: 200px;" class="form-control" id="inputCommentContent" name="inputCommentContent"><?php echo ($data['CommentContent']); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="edit" class="btn btn-primary waves-effect">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
