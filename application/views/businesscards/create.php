<form method="POST">
    <ul>
        <?php $this->load->view('businesscards/_form') ?>
        <li class="btns">
            <input type="submit" value="<?php echo lang('global_btn_save')  ?>" class="" />
            <a href="<?php echo site_url('business_cards'); ?>"><?php echo lang('global_btn_cancel'); ?></a>
        </li>
    </ul>
</form>