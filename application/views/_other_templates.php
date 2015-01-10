
<div class="choose-template">
    <span>Other Templates</span>
</div>
<ul>
    <?php $templates =get_templates_list() ?>
    <?php unset($templates[$current]) ?>
    <?php foreach ($templates as $key => $value) {?>
    <li><a href="<?php echo site_url($value['link']) ?>"><?php echo $value['title'] ?></a></li>    
    <?php } ?>
</ul>