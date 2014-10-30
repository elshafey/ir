<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="<?php echo get_dir(); ?>">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type"/>
        <script>
            var selecValue = "<?php echo lang('global_select_text') ?>";
            var delete_confirm_msg = "<?php echo lang('global_confirm_msg') ?>";
        </script>
        <title><?php
            if (isset($page_header)) {
                echo strip_tags($page_header);
            } elseif (isset($page_title)) {
                echo strip_tags($page_title);
            } else {
                echo lang("page_title");
            }
            ?></title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>layout/favicon.ico" type="image/x-icon" />
        <link href="<?php echo base_url(); ?>layout/css/admin/admin.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>layout/css/admin/form.css" rel="stylesheet" type="text/css" />
        <?php echo $_styles ?>

        <script src="<?php echo base_url(); ?>layout/js/jquery/jquery-1.11.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>layout/js/content.js" type="text/javascript"></script>

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
    <?php
    $body_classes = '';
    $body_classes .= get_locale() . ' ';
    $body_classes .= str_replace(' ', '-', strtolower(lang("page_title"))) . ' ';
    ?>
    <body class="<?php echo $body_classes; ?>">

        <div id="header">
            <!--<a href="<?php echo site_url('admin') ?>" class="logo"></a>-->
            <div class="page-title"><?php echo isset($page_title) ? $page_title : '' ?></div>
        </div>
        <div class="clear"></div>
        <div id="wrapper">
            <?php if(is_logged_in()){ ?>
                <div id="top-menu">
                    <ul id="menu" class="menu" style="float: left;width:100%">
                        <li>
                            <a href="<?php echo site_url('/') ?>">Dashboard</a><span>|</span>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo site_url('home/busines_card/') ?>">Business Card</a><span>|</span>
                        </li>
                        <li>
                            <a href="javascript:;">Profile</a>
                            <ul class="sub-menu" class="noJS" >
                                <?php if(get_user_type()==1){ ?>
                                <li>
                                    <a href="<?php echo site_url('accounts') ?>">Profiles List</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('accounts/create') ?>">Create Profile</a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="<?php echo site_url('accounts/edit') ?>">Edit My Profile</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('accounts/password') ?>">Change Password</a>
                                </li>

                            </ul>
                            <span>|</span>
                        </li>
<!--                        <li>
                            <a href="<?php echo site_url('admin/affiliated_companies') ?>"> Affiliated Companies </a><span>|</span>
                        </li>

                        <li>
                            <a href="javascript:;">Media Center</a>
                            <ul class="sub-menu" class="noJS" >
                                <li>
                                    <a href="<?php echo site_url('admin/news') ?>">News</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/events') ?>">Events</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/pressreleases') ?>">Press releases</a>
                                </li>
                            </ul>
                            <span>|</span>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/book') ?>">Books</a><span>|</span>
                        </li>
                        <li>
                            <a href="javascript:;">Side Menu</a>
                            <ul class="sub-menu" class="noJS" >
                                <li>
                                    <a href="<?php echo site_url('admin/publishing_solutions') ?>">Publishing Solutions</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/educational_solutions') ?>">Educational Solutions</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/digital_solutions') ?>">Digital Solutions</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/custom_solutions') ?>">Custom Solutions</a>
                                </li>
                            </ul>
                            <span>|</span>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/portfolio') ?>">Portfolios</a><span>|</span>
                        </li>

                        <li>
                            <a href="javascript:;">Attachments</a>
                            <ul class="sub-menu" class="noJS" >
                                <li>
                                    <a href="<?php echo site_url('admin/partener') ?>">Partners</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/download') ?>">Downloads</a>
                                </li>

                            </ul>
                            <span>|</span>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/career') ?>">Careers</a><span>|</span>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/faq') ?>">Faqs</a><span>|</span>
                        </li>
                        <li>
                            <a href="javascript:;">Achievements</a>
                            <ul class="sub-menu" class="noJS" >
                                <li>
                                    <a href="<?php echo site_url('admin/achievement') ?>">Awards & Achievements Main</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/project') ?>">Projects</a>
                                </li>
                            </ul>
                            <span>|</span>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/contactus') ?>">Contact Us</a>
                        </li>-->

                        <!--                                <li  style="float: right;font-size: 10px;">
                                                            <a href="<?php echo site_url('admin/login/logout') ?>" >Logout</a>
                                                        </li>-->
                    </ul>
                </div>
            <?php } ?>
            <?php if (isset($msg_type) && $msg_type != '' && isset($msg_text) && $msg_text != '') { ?>    
                <div id="identity-message" class="cls-message-<?php echo $msg_type ?>">
                    <span class="cls-txt-normal"><?php echo $msg_text ?></span>
                </div>
            <?php } ?>
            <div id="content">
                <?php
                echo $content;
                ?>
            </div>

            <div class="clear"></div>

            <div id="footer">
                &copy;  - All Rights Reserved. Privacy Statement
            </div>
        </div>
        <script>
//            $(document).ready(function() {
//                $('.delete_lnk').live('click', function(e) {
//                    e.preventDefault();
//                    if (confirm('<?php echo lang('global_delete_confirm') ?>')) {
//                        location.href = $(this).attr('href');
//                    }
//                })
//            });
        </script>
    </body>
</html>
