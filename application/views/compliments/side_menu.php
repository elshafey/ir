<div class="choose-template">
    <span>Compliments</span>
</div>
<ul>
    <li><a href="<?php echo site_url('compliment') ?>">List Templates</a></li>
    <li><a href="<?php echo site_url('compliment/create') ?>">Add Template</a></li>
</ul>
<?php $this->load->view('_other_templates',array('current'=>'compliments')) ?>