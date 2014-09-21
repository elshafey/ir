<form method="POST">
    <ul>
        <li class="section_title"><?php echo lang('accounts_create_info_en') ?></li>
        <li>
            <?php echo lang('accounts_create_name', 'name_en') ?>
            <input name="name_en" id="name_en" class="txtbox" value="<?php echo set_value('name_en') ?>" />
            <span class="star">*</span>
            <?php echo form_error('name_en') ?>
        </li>
        <li>
            <?php echo lang('accounts_create_title', 'title_en') ?>
            <input name="title_en" id="title_en" class="txtbox" value="<?php echo set_value('title_en') ?>" />
            <span class="star">*</span>
            <?php echo form_error('title_en') ?>
        </li>
        <li class="section_title"><?php echo lang('accounts_create_info_ar') ?></li>
        <li>
            <?php echo lang('accounts_create_name', 'name_ar') ?>
            <input name="name_ar" id="name_ar" class="txtbox" value="<?php echo set_value('name_ar') ?>" />
            <span class="star">*</span>
            <?php echo form_error('name_ar') ?>
        </li>
        <li>
            <?php echo lang('accounts_create_title', 'title_ar') ?>
            <input name="title_ar" id="title_ar" class="txtbox" value="<?php echo set_value('title_ar') ?>" />
            <span class="star">*</span>
            <?php echo form_error('title_ar') ?>
        </li>
        <li class="section_title"><?php echo lang('accounts_create_info_general') ?></li>
        <li>
            <?php echo lang('accounts_create_tel', 'tel') ?>
            <input name="tel" id="tel" class="txtbox" value="<?php echo set_value('tel') ?>" />
            <span class="star">*</span>
            <?php echo form_error('tel') ?>
        </li>
        <li>
            <?php echo lang('accounts_create_direct', 'direct') ?>
            <input name="direct" id="direct" class="txtbox" value="<?php echo set_value('direct') ?>" />
            <span class="star">*</span>
            <?php echo form_error('direct') ?>
        </li>
        <li>
            <?php echo lang('accounts_create_fax', 'fax') ?>
            <input name="fax" id="fax" class="txtbox" value="<?php echo set_value('fax') ?>" />
            <span class="star">*</span>
            <?php echo form_error('fax') ?>
        </li>
        <li>
            <?php echo lang('accounts_create_email', 'email') ?>
            <input name="email" id="email" class="txtbox" value="<?php echo set_value('email') ?>" />
            <span class="star">*</span>
            <?php echo form_error('email') ?>
        </li>
        <li>
            <?php echo lang('accounts_create_web', 'web') ?>
            <input name="web" id="web" class="txtbox" value="<?php echo set_value('web') ?>" />
            <span class="star">*</span>
            <?php echo form_error('web') ?>
        </li>
        <li>
            <?php echo lang('accounts_create_charity', 'charity') ?>
            <input name="charity" id="charity" class="txtbox" value="<?php echo set_value('charity') ?>" />
            <span class="star">*</span>
            <?php echo form_error('charity') ?>
        </li>
        <li class="btns">
            <input type="submit" value="<?php echo lang('global_btn_save')  ?>" class="" />
            <a href="<?php echo site_url('accounts'); ?>"><?php echo lang('global_btn_cancel'); ?></a>
        </li>
    </ul>
</form>