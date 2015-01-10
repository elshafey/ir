<div class="choose-template">
    <span>Manage Templates</span>
</div>
<ul>
    <?php foreach (get_templates_list() as $key => $value) {?>
    <li><a href="<?php echo site_url($value['link']) ?>"><?php echo $value['title'] ?></a></li>    
    <?php } ?>
</ul>