<form method="POST">
    <ul>
        <?php $this->load->view('banners/_form') ?>
        <li class="btns">
            <input type="submit" value="<?php echo lang('global_btn_save')  ?>" class="" />
            <a href="<?php echo site_url('banner'); ?>"><?php echo lang('global_btn_cancel'); ?></a>
        </li>
    </ul>
</form>