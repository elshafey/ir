<div class="choose-template">
    <span>Banners</span>
</div>
<ul>
    <li><a href="<?php echo site_url('banner') ?>">List Templates</a></li>
    <li><a href="<?php echo site_url('banner/create') ?>">Add Template</a></li>
</ul>
<?php $this->load->view('_other_templates',array('current'=>'banners')) ?>