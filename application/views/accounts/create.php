<form method="POST">
    <ul>
        <li>
            <?php echo lang('accounts_create_name', 'name') ?>
            <input name="name" id="name" class="txtbox" value="<?php echo set_value('name') ?>" />
            <span class="star">*</span>
            <?php echo form_error('name') ?>
        </li>
        <li>
            <?php echo lang('accounts_create_title', 'title') ?>
            <input name="title" id="title" class="txtbox" value="<?php echo set_value('title') ?>" />
            <span class="star">*</span>
            <?php echo form_error('title') ?>
        </li>
        <li>
            <?php echo lang('accounts_create_email', 'email') ?>
            <input name="email" id="email" class="txtbox" value="<?php echo set_value('email') ?>" />
            <span class="star">*</span>
            <?php echo form_error('email') ?>
        </li>
        <?php if(is_super_admin()){ ?>
        <li>
            <label>Branch</label>
            <?php
            $branches=array(''=>"--Select--");
            foreach ($this->branches->get_all() as $key => $value) {
                $branches[$value->id]=$value->name;
            }
            ?>
            <?php echo  form_dropdown('branch_id', $branches,  set_value('branch_id')) ?>
            <span class="star">*</span>
            <?php echo form_error('branch_id') ?>
        </li>
        <?php } ?>
        <li class="btns">
            <input type="submit" value="<?php echo lang('global_btn_save')  ?>" class="" />
            <a class="cncl-btn" href="<?php echo site_url('accounts'); ?>"><?php echo lang('global_btn_cancel'); ?></a>
        </li>
    </ul>
</form>