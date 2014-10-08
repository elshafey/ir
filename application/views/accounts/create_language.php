<form method="POST">
    <ul>
        <li>
            <label>Name:</label>
            <input name="name" id="name" class="txtbox" value="<?php echo set_value('name') ?>" />
            <span class="star">*</span>
            <?php echo form_error('name') ?>
        </li>
        <li>
            <label>Direction:</label>
            <?php $directions=array(''=>'--Select--','rtl'=>'Right to Left','ltr'=>'Left to Right') ?>
            <!--<input name="direction" id="address" class="txtbox" 
            value="<?php echo set_value('address') ?>" />-->
            <?php echo form_dropdown('direction', $directions, set_value('direction')) ?>
            <span class="star">*</span>
            <?php echo form_error('address') ?>
        </li>
        <li class="btns">
            <input type="submit" value="<?php echo lang('global_btn_save')  ?>" class="" />
            <a class="cncl-btn" href="<?php echo site_url('accounts/languages'); ?>"><?php echo lang('global_btn_cancel'); ?></a>
        </li>
    </ul>
</form>