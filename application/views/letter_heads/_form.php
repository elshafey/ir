<li>
    <label>Template Name:</label>
    <input name="template_name" id="template_name" class="txtbox" value="<?php echo set_value('template_name') ?>" />
    <span class="star">*</span>
    <?php echo form_error('template_name') ?>
</li>
<li>
    <label>Language</label>
    <?php
    $languages = array('' => "--Select--");
    foreach ($this->languages->get_all() as $key => $value) {
        $languages[$value->id] = $value->name;
    }
    ?>
    <?php echo form_dropdown('language_id', $languages, set_value('language_id')) ?>
    <span class="star">*</span>
    <?php echo form_error('language_id') ?>
</li>
<?php if (is_super_admin()) { ?>
    <li>
        <label>Branch</label>
        <?php
        $branches = array('' => "--Select--");
        foreach ($this->branches->get_all() as $key => $value) {
            $branches[$value->id] = $value->name;
        }
        ?>
        <?php echo form_dropdown('branch_id', $branches, set_value('branch_id')) ?>
        <span class="star">*</span>
        <?php echo form_error('branch_id') ?>
    </li>
<?php } ?>
<li>
    <label>Address:</label>
    <input name="address" id="address" class="txtbox" value="<?php echo set_value('address') ?>" />
    <span class="star">*</span>
    <?php echo form_error('address') ?>
</li>
<li>
    <label>City:</label>
    <input name="city" id="city" class="txtbox" value="<?php echo set_value('city') ?>" />
    <span class="star">*</span>
    <?php echo form_error('city') ?>
</li>
<li>
    <label>Country:</label>
    <input name="country" id="country" class="txtbox" value="<?php echo set_value('country') ?>" />
    <span class="star">*</span>
    <?php echo form_error('country') ?>
</li>
<li>
    <?php echo lang('accounts_create_tel', 'tel') ?>
    <input name="tel" id="tel" class="txtbox" value="<?php echo set_value('tel') ?>" />
    <span class="star">*</span>
    <?php echo form_error('tel') ?>
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
