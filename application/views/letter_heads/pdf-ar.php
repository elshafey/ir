<?php if ($type == 'preview') { ?>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        </head>
        <body style="width: 500px;margin: auto">
            <div style="float: left;width: 100%;margin-top: 5px;">
                <img  src="<?php echo site_url('letter_heads/IRW_LETTERHEAD_AR_2014-sample_1_temp2.jpg') ?>"  style="float: left;width: 100%;">
            </div>
            <div class="top-details details">
                <span class="left-details"><?php echo $_REQUEST['address'] ?></span>
                <span class="right-details"><?php echo $_REQUEST['tel'] ?></span>
            </div>
            <div class="middle-details details">
                <span class="left-details"><?php echo $_REQUEST['city'] ?></span>
                <span class="right-details"><?php echo $_REQUEST['fax'] ?></span>
            </div>
            <div class="bottom-details details">
                <span class="left-details"><?php echo $_REQUEST['country'] ?></span>
                <span class="right-details"><?php echo $_REQUEST['email'] ?></span>
            </div>
            <style>
                @font-face {
                    font-family: DINNextLTPro-Regular;
                    src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Regular_1.otf') ?>');
                }
                @font-face {
                    font-family: DINNextLTPro-Medium;
                    src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Medium_1.otf') ?>');
                }
                *{
                    font-family: DINNextLTPro-Regular;
                    font-size: 3.8pt;
                    color: #435257;
                }
                .bottom{
                    position: absolute;
                    z-index: 1000;
                    right: 38px;
                    top: 665px;
                    width: 127px;
                }
                .left-details{float: left;}
                .right-details{float: right;}
                .left-details,.right-details{
                    width: 70px;
                }
                .details{
                    position: absolute;
                    z-index: 1000;
                    left: 181px;
                    width:160px;
                }
                .bottom-details{
                    top: 665px;
                }
                .middle-details{
                    top: 656px;
                }
                .top-details{
                    top: 647px;
                }
            </style>
        </body>
    </html>
<?php } else { ?>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        </head>
        <body style="width: 100%;background-color: white;float: left">
            <?php if (isset($_REQUEST['action_type']) && $_REQUEST['action_type'] == 'convert') { ?>
                <div style="float: left;width: 100%;margin-bottom: 0px;">
                    <img  src="<?php echo site_url('letter_heads/IRW_LETTERHEAD_AR_2014-sample_1_temp2.jpg') ?>" style="width: 100%;float: left">
                </div>
                <div class="top-details details">
                    <span class="left-details"><?php echo $_REQUEST['address'] ?></span>
                    <span class="right-details"><?php echo $_REQUEST['tel'] ?></span>
                </div>
                <div class="middle-details details">
                    <span class="left-details"><?php echo $_REQUEST['city'] ?></span>
                    <span class="right-details"><?php echo $_REQUEST['fax'] ?></span>
                </div>
                <div class="bottom-details details">
                    <span class="left-details"><?php echo $_REQUEST['country'] ?></span>
                    <span class="right-details"><?php echo $_REQUEST['email'] ?></span>
                </div>
                <style>
                    @font-face {
                        font-family: DINNextLTPro-Regular;
                        src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Regular_1.otf') ?>');
                    }
                    @font-face {
                        font-family: DINNextLTPro-Medium;
                        src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Medium_1.otf') ?>');
                    }
                    *{
                        font-family: DINNextLTPro-Regular;
                        font-size: 6pt;
                        color: #435257;
                        margin: 0;
                        padding: 0;
                    }
                    .bottom{
                        position: absolute;
                        z-index: 1000;
                        right: 60px;
                        top: 1020px;
                        width: 200px;
                    }
                    .left-details{float: left;}
                    .right-details{float: right;}
                    .left-details,.right-details{
                        width: 120px;
                    }
                    .details{
                        position: absolute;
                        z-index: 1000;
                        left: 280px;
                        width:260px;
                    }
                    .bottom-details{
                        top: 1018px;
                    }
                    .middle-details{
                        top: 1004px;
                    }
                    .top-details{
                        top: 990px;
                    }
                </style>
            <?php } else { ?>
                <div style="float: left;width: 100%;margin-bottom: 0px;">
                    <img  src="<?php echo site_url('letter_heads/IRW_LETTERHEAD_AR_2014-sample_1_temp2.jpg') ?>" style="width: 100%;float: left">
                </div>
                <div class="top-details details">
                    <span class="left-details"><?php echo $_REQUEST['address'] ?></span>
                    <span class="right-details"><?php echo $_REQUEST['tel'] ?></span>
                </div>
                <div class="middle-details details">
                    <span class="left-details"><?php echo $_REQUEST['city'] ?></span>
                    <span class="right-details"><?php echo $_REQUEST['fax'] ?></span>
                </div>
                <div class="bottom-details details">
                    <span class="left-details"><?php echo $_REQUEST['country'] ?></span>
                    <span class="right-details"><?php echo $_REQUEST['email'] ?></span>
                </div>
                <style>
                    @font-face {
                        font-family: DINNextLTPro-Regular;
                        src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Regular_1.otf') ?>');
                    }
                    @font-face {
                        font-family: DINNextLTPro-Medium;
                        src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Medium_1.otf') ?>');
                    }
                    *{
                        font-family: DINNextLTPro-Regular;
                        font-size: 19pt;
                        color: #435257;
                        margin: 0;
                        padding: 0;
                    }
                    .bottom{
                        position: absolute;
                        z-index: 1000;
                        right: 205px;
                        top: 3380px;
                        width: 650px;
                    }
                    .left-details{float: left;}
                    .right-details{float: right;}
                    .left-details,.right-details{
                        width: 350px;
                    }
                    .details{
                        position: absolute;
                        z-index: 1000;
                        left: 930px;
                        width:800px;
                    }
                    .bottom-details{
                        top: 3380px;
                    }
                    .middle-details{
                        top: 3330px;
                    }
                    .top-details{
                        top: 3280px;
                    }
                </style>
            <?php } ?>
        </body>
    </html>
<?php } ?>
