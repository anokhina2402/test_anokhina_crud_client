<h1>&nbsp;
</h1>
<h2>
    <?php echo ((isset($data['data']['id']) && $data['data']['id'])?$arr_locale['edit_employee']:$arr_locale['new_employee']);?>
</h2><form id="addForm" role="form"  method="post" action="/add/save"  >
    <?php if (isset($data['errors']) && is_array($data['errors']) && isset($data['post_result']) &&  ($data['post_result']== 'error_edit' || $data['post_result']== 'error_add')) { ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $arr_locale['error'];?>!</strong> <?php echo $data['errors'][0];?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="fio"><?php echo $arr_locale['fio'];?>:</label>
        <input type="text" class="form-control" id="fio" name="fio" value="<?php echo ((isset($data['data']['fio']) && $data['data']['fio'])?$data['data']['fio']:'');?>">
    </div>
    <div class="form-group">
        <label for="phone"><?php echo $arr_locale['phone'];?>:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo ((isset($data['data']['phone']) && $data['data']['phone'])?$data['data']['phone']:'');?>">
    </div>
    <div class="form-group">
        <label for="email"><?php echo $arr_locale['email'];?>:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo ((isset($data['data']['email']) && $data['data']['email'])?$data['data']['email']:'');?>">
    </div>
    <div class="form-group">
        <label for="sex"><?php echo $arr_locale['sex'];?>:</label>
            <input type="radio" name="sex" id="sex" value="1" <?php echo ((isset($data['data']['sex']) && $data['data']['sex']=='1' || (!isset($data['data']['sex'])))?'checked':'');?>><?php echo $arr_locale['men'];?>
            <input type="radio" name="sex" id="sex" value="2" <?php echo ((isset($data['data']['sex']) && $data['data']['sex']=='2')?'checked':'');?>><?php echo $arr_locale['women'];?>
    </div>
    <div class="form-group">
        <label for="birthday"><?php echo $arr_locale['birthday'];?>:</label>
        <input type="text" class="form-control" id="birthday" name="birthday" value="<?php echo ((isset($data['data']['birthday']) && $data['data']['birthday'] && $data['data']['birthday']!='0000-00-00')?$data['data']['birthday']:'');?>">
    </div>
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo ((isset($data['data']['id']) && $data['data']['id'])?$data['data']['id']:'');?>">
    <div class="form-group">
            <button type="submit" class="btn btn-success"><?php echo $arr_locale['save'];?></button>
    </div>
</form>