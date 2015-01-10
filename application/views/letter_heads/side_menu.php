<div class="choose-template">
    <span>Letter Heads</span>
</div>
<ul>
    <li><a href="<?php echo site_url('letter_head') ?>">List Templates</a></li>
    <li><a href="<?php echo site_url('letter_head/create') ?>">Add Template</a></li>
</ul>
<?php $this->load->view('_other_templates',array('current'=>'letter_heads')) ?>