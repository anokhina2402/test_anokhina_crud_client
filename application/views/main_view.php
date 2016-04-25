<h1>&nbsp;
</h1>
    <h1><?php echo $arr_locale['employees'];?></h1>
<?php if (isset($data['data']) && is_array($data['data'])){ ?>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td><?php echo $arr_locale['fio'];?></td>
        <td><?php echo $arr_locale['phone'];?></td>
        <td><?php echo $arr_locale['email'];?></td>
        <td><?php echo $arr_locale['sex'];?></td>
        <td><?php echo $arr_locale['birthday'];?></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($data['data'] as $key => $value) { ?>
    <tr>
        <td><?php echo $value['fio'];?></td>
        <td><?php echo $value['phone'];?></td>
        <td><?php echo $value['email'];?></td>
        <td><?php echo ($value['sex']==1?$arr_locale['men']:$arr_locale['women']);?></td>
        <td><?php echo ($value['birthday'] && $value['birthday']!='0000-00-00' ? $value['birthday'] : '');?></td>

        <!-- we will also add show, edit, and delete buttons -->
        <td>

            <form id="adminForm" role="form"  method="post" action="/">
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $value['id'];?>">
                <div><button id="button" name="button" type="submit" class="btn btn-small btn-success width_50" value="show"><?php echo $arr_locale['show'];?></div>
                <div><button  id="button" name="button" type="submit" class="btn btn-small btn-info width_50" value="edit"><?php echo $arr_locale['edit'];?></div>
                <div><button  id="button" name="button" type="submit" class="btn btn-small btn-danger width_50" value="delete"><?php echo $arr_locale['delete'];?></div>
            </form>

        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
<?php if (isset($data['post_result']) &&  ($data['post_result']== 'success_edit' || $data['post_result']== 'success_add')) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><?php echo $arr_locale['success'];?>!</strong> <?php echo ($data['post_result']== 'success_edit'?$arr_locale['success_edit']:$arr_locale['success_add']);?>
    </div>
<?php } else if (isset($data['add_status']) &&  ($data['add_status']== 'error_add' || $data['add_status']== 'error_edit')) { ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><?php echo $arr_locale['error'];?>!</strong> <?php echo ($data['post_result']== 'error_edit'?$arr_locale['error_edit']:$arr_locale['error_add']);?>
    </div>
<?php }
}
else echo $arr_locale['no_employee']?>
