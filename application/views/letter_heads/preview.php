<div style="float: left;width:450px">
    <form method="POST" id="form">
        <ul>
            <?php $this->load->view('letter_heads/_form') ?>
        </ul>
        <div>
            <input type="hidden" name="action_type" id="action_type" value="save" />
            <input type="button" id="preview" value="Preview Only" >
            <input type="button" id="save" value="Save&Finish" >
            <input type="button" id="convert" value="Export PDF" >
            <a class="cncl-btn" href="<?php echo site_url('letter_head'); ?>"><?php echo lang('global_btn_cancel'); ?></a>
        </div>
    </form>
</div>
<script>
    $('#preview,#save,#convert').click(function(){
       $('#action_type').val($(this).attr('id')); 
       $('#form').submit();
    });
</script>
<div style="float: right;margin-right: 80px">
    <iframe src="<?php echo site_url('letter_head/pdf/preview').'?'.  http_build_query($_POST) ?>" width="500" height="700" scrolling="no" />
</div>
