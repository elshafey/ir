<div style="float: left;width:580px">
    <form method="POST" id="form">
        <ul>
            <?php $this->load->view('compliments/_form') ?>
        </ul>
        <div>
            <input type="hidden" name="action_type" id="action_type" value="save" />
            <input type="button" id="preview" value="Preview Only" >
            <input type="button" id="save" value="Save&Finish" >
            <input type="button" id="convert" value="Export PDF" >
            <input type="button" id="convert_img" value="Export Img" >
            <a class="cncl-btn" href="<?php echo site_url('compliment'); ?>"><?php echo lang('global_btn_cancel'); ?></a>
        </div>
    </form>
</div>
<script>
    $('#preview,#save,#convert,#convert_img').click(function(){
       $('#action_type').val($(this).attr('id')); 
       $('#form').submit();
    });
</script>
<div style="float: right;margin-right: 80px">
    <iframe src="<?php echo site_url('compliment/pdf/preview').'?'.  http_build_query($_POST) ?>" width="500" height="500" scrolling="no" />
</div>
