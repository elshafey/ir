<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php
            if (isset($page_header)) {
                echo strip_tags($page_header);
            } elseif (isset($page_title)) {
                echo strip_tags($page_title);
            } else {
                echo 'IR';
            }
            ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>layout/css/main.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>layout/css/admin/form.css"/>
        <?php echo $_styles ?>

        <script src="<?php echo base_url(); ?>layout/js/jquery/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>layout/js/drop-menu.js" type="text/javascript"></script>
        <?php echo $_scripts ?>
        <script>
            $(document).ready(
                    function() {
                        $('#menu').find('> li').hover(function() {
                            $(this).find('ul')
                                    .removeClass('noJS')
                                    .stop(true, true).slideToggle('fast');
                        });
                    });
        </script>
    </head>

    <body id="inside-body">
        <div class="header-red-line"></div>
        <div class="inside-header">
            <a href="" class="logo-inside"></a>
            <?php $this->load->view('menu'); ?>
            <div id="top-menu">
                <ul id="menu" class="menu" style="float: left;width:100%">
                    <li>
                        <a href="<?php echo site_url('/') ?>">Dashboard</a><span>|</span>
                    </li>
                    <li>
                        <a href="<?php echo site_url('business_cards/choose_template') ?>">Business Card</a><span>|</span>
                    </li>
                    <li>
                        <a href="<?php echo site_url('accounts') ?>">Accounts Management</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="container">
            <div class="left">
                <?php echo $side_menu; ?>
            </div>
            <div class="right">
                <div class="shadow"></div>
                <div class="title-section">
                    <span>
                        <?php echo isset($page_title) ? $page_title : '' ?>
                    </span>
                </div>
                <div style="margin-top: 10px">
                    <?php if (isset($msg_type) && $msg_type != '' && isset($msg_text) && $msg_text != '') { ?>    
                        <div id="identity-message" class="cls-message-<?php echo $msg_type ?>">
                            <span class="cls-txt-normal"><?php echo $msg_text ?></span>
                        </div>
                    <div style="clear: both"></div>
                    <?php } ?>
                    <div style="margin: 10px;">
                    <?php echo $content ?>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>