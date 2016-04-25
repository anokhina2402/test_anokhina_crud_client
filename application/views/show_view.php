<h1>&nbsp;
</h1>
<h2>
    <?php echo $arr_locale['show_employee'];?>
</h2><div class="jumbotron text-center">
    <h2><?php echo ((isset($data['data']['fio']) && $data['data']['fio'])?$data['data']['fio']:'');?></h2>
    <p>
        <strong><?php echo $arr_locale['phone'];?>:</strong> <?php echo ((isset($data['data']['phone']) && $data['data']['phone'])?$data['data']['phone']:'');?><br>
        <strong><?php echo $arr_locale['email'];?>:</strong> <?php echo ((isset($data['data']['email']) && $data['data']['email'])?$data['data']['email']:'');?><br>
        <strong><?php echo $arr_locale['sex'];?>:</strong> <?php echo ((isset($data['data']['sex']) && $data['data']['sex']=='2')?$arr_locale['women']:$arr_locale['men']);?><br>
        <strong><?php echo $arr_locale['birthday'];?>:</strong> <?php echo ((isset($data['data']['birthday']) && $data['data']['birthday'] && $data['data']['birthday']!='0000-00-00')?$data['data']['birthday']:'');?><br>
    </p>
</div>