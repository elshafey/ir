<li>
    <label>Template Name:</label>
    <input name="template_name" id="template_name" class="txtbox" value="<?php echo set_value('template_name') ?>" />
    <span class="star">*</span>
    <?php echo form_error('template_name') ?>
</li>
<li>
    <label>Language:</label>
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
        <label>Branch:</label>
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
    <label>Main Title:</label>
    <input name="main_title" id="main_title" class="txtbox" value="<?php echo set_value('main_title') ?>" />
    <span class="star">*</span>
    <?php echo form_error('main_title') ?>
</li>
<li>
    <label>Sub-title:</label>
    <input name="sub_title" id="sub_title" class="txtbox" value="<?php echo set_value('sub_title') ?>" />
    <span class="star">*</span>
    <?php echo form_error('sub_title') ?>
</li>
<li>
    <label>Type:</label>
    <?php
    $types = array('' => "--Select--");
    foreach (banners_types() as $key => $value) {
        $types[$key] = $value;
    }
    ?>
    <?php echo form_dropdown('type', $types, set_value('type')) ?>
    <span class="star">*</span>
    <?php echo form_error('type') ?>
</li>