<form method="POST">
    <ul>
        <?php $this->load->view('letter_heads/_form') ?>
        <li class="btns">
            <input type="submit" value="<?php echo lang('global_btn_save')  ?>" class="" />
            <a href="<?php echo site_url('letter_head'); ?>"><?php echo lang('global_btn_cancel'); ?></a>
        </li>
    </ul>
</form>