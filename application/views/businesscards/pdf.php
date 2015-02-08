<?php if ($type == 'preview') { ?>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        </head>
        <body style="width: 360px;margin: auto">
            <div style="float: left;width: 100%;">
                <img  src="<?php echo site_url('business-cards/IRW_BUSCARD_EN_2014-sample_1.jpg') ?>" style="float: left;width: 100%;">
            </div>
            <div style="float: left;width: 100%;margin-top: 5px;">
                <img  src="<?php echo site_url('business-cards/IRW_BUSCARD_EN_2014-sample_2_temp.jpg') ?>"  style="float: left;width: 100%;">
            </div>
            <div class="container">
                <div  style="font-size: 12px;font-family:DINNextLTPro-Medium ;color:rgb(39,155,212)"><?php echo $_REQUEST['name'] ?></div>
                <div style="font-family:DINNextLTPro-Medium ;"><?php echo $_REQUEST['title'] ?></div>
                <div style="font-family:DINNextLTPro-Medium ;margin-top: 39px"><?php echo $_REQUEST['address'] ?></div>
                <div style="margin-top: 19px"><?php echo $_REQUEST['tel'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['direct'] ?></div>
                <div class="card-info" style="margin-top: 2px"><?php echo $_REQUEST['fax'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['email'] ?></div>
    <!--                 <div class="card-info" style=""><?php echo $_REQUEST['web'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['charity'] ?></div>-->
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
                    font-size: 7px;
                    color: #435257;
                }
                .container{
                    float: left;
                    left: 135px;
                    position: relative;
                    top: -196px;
                    width: 180px;
                }
                .card-info{
                    padding-top: 4.5px;
                }
                .container > div {
                    float: left;
                    width: 100%;
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
            <?php if (isset($_REQUEST['action_type']) && $_REQUEST['action_type'] == 'covert') { ?>
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
                        margin: 0;
                        padding: 0;
                        font-family: DINNextLTPro-Regular;
                        font-size: 7pt;
                        color: #435257;
                    }
                    .container{
                        float: left;
                        position: absolute;
                        z-index: 1000;
                        top: 250px;
                        width: 100%;
                        margin: 0;
                        padding: 0;
                    }
                    .container > div >div {
                        margin-top: 4px;
                    }
                    .container > div,.container > div >div {
                        float: left;
                        width: 100%;
                    }
                    .title{
                        float: left;
                        text-align: right;
                        margin-right: 10px;
                        width:35%;
                        ;color:#299FD5
                    }
                    .details{
                        float: left;
                        text-align: left;
                        width:55%;
                    }
                </style>
                <div style="float: left;width: 100%;margin-bottom: 0px;">
                    <img  src="<?php echo site_url('business-cards/IRW_BUSCARD_EN_2014-sample_1.jpg') ?>" style="width: 100%;float: left">
                </div>
                <div style="float: left;width: 100%;margin-top: 0px">
                    <img  src="<?php echo site_url('business-cards/IRW_BUSCARD_EN_2014-sample_2_temp_white.jpg') ?>"  style="width: 100%;float: left">
                    <div class="container">
                        <div >
                            <span class="title">&nbsp;</span>
                            <span class="details" style="font-family: DINNextLTPro-Medium;font-size: 12pt ;color:#299FD5"><?php echo $_REQUEST['name'] ?></span>
                        </div>
                        <div >
                            <span class="title">&nbsp;</span>
                            <span class="details" ><?php echo $_REQUEST['title'] ?></span>
                        </div>
                        <div  style="margin-top: 32px;">
                            <span class="title">&nbsp;</span>
                            <span class="details" style="color:#299FD5 ;font-family:DINNextLTPro-Medium ;">Islamic Relief Worldwide</span>
                        </div>
                        <div style="">
                            <span class="title">&nbsp;</span>
                            <span class="details"><?php echo $_REQUEST['address'] ?></span>

                        </div>
                        <div style="margin-top: 19px">
                            <div >
                                <span class="title">tel</span>
                                <span class="details"><?php echo $_REQUEST['tel'] ?></span>

                            </div>
                            <div class="card-info" style="">
                                <span class="title">direct</span>
                                <span class="details"><?php echo $_REQUEST['direct'] ?></span>

                            </div>
                            <div class="card-info" style="">
                                <span class="title">fax</span>
                                <span class="details"><?php echo $_REQUEST['fax'] ?></span>

                            </div>
                            <div class="card-info" style="margin-top: 2px">
                                <span class="title">email</span>
                                <span class="details"><?php echo $_REQUEST['email'] ?></span>

                            </div>
                            <div class="card-info" style="">
                                <span class="title">web</span>
                                <span class="details"><?php echo $_REQUEST['web'] ?></span>

                            </div>
                            <div class="card-info" style="">
                                <span class="title">charity reg.</span>
                                <span class="details"><?php echo $_REQUEST['charity'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
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
                        margin: 0;
                        padding: 0;
                        font-family: DINNextLTPro-Regular;
                        font-size: 21pt;
                        color: #435257;
                    }
                    .container{
                        float: left;
                        position: absolute;
                        z-index: 1000;
                        top: 110px;
                        width: 100%;
                        margin: 0;
                        padding: 0;
                    }
                    .container > div >div {
                        margin-top: 15px;
                    }
                    .container > div,.container > div >div {
                        float: left;
                        width: 100%;
                    }
                    .title{
                        float: left;
                        text-align: right;
                        margin-right: 20px;
                        width:38%;
                        ;color:#299FD5
                    }
                    .details{
                        float: left;
                        text-align: left;
                        width:55%;
                    }
                </style>
                <div style="float: left;width: 100%;margin-top: 0px">
                    <img  src="<?php echo site_url('business-cards/IRW_BUSCARD_EN_2014-sample_2_temp_white.jpg') ?>"  style="width: 100%;float: left">
                    <div class="container">
                        <div >
                            <span class="title">&nbsp;</span>
                            <span class="details" style="font-family: DINNextLTPro-Medium;font-size: 36pt ;color:#299FD5"><?php echo $_REQUEST['name'] ?></span>
                        </div>
                        <div >
                            <span class="title">&nbsp;</span>
                            <span class="details" ><?php echo $_REQUEST['title'] ?></span>
                        </div>
                        <div  style="margin-top: 70px;">
                            <span class="title">&nbsp;</span>
                            <span class="details" style="color:#299FD5 ;font-family:DINNextLTPro-Medium ;">Islamic Relief Worldwide</span>
                        </div>
                        <div style="">
                            <span class="title">&nbsp;</span>
                            <span class="details"><?php echo $_REQUEST['address'] ?></span>

                        </div>
                        <div style="margin-top: 50px">
                            <div >
                                <span class="title">tel</span>
                                <span class="details"><?php echo $_REQUEST['tel'] ?></span>

                            </div>
                            <div class="card-info" style="">
                                <span class="title">direct</span>
                                <span class="details"><?php echo $_REQUEST['direct'] ?></span>

                            </div>
                            <div class="card-info" style="">
                                <span class="title">fax</span>
                                <span class="details"><?php echo $_REQUEST['fax'] ?></span>

                            </div>
                            <div class="card-info" style="margin-top: 2px">
                                <span class="title">email</span>
                                <span class="details"><?php echo $_REQUEST['email'] ?></span>

                            </div>
                            <div class="card-info" style="">
                                <span class="title">web</span>
                                <span class="details"><?php echo $_REQUEST['web'] ?></span>

                            </div>
                            <div class="card-info" style="">
                                <span class="title">charity reg.</span>
                                <span class="details"><?php echo $_REQUEST['charity'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </body>
    </html>
<?php } ?>
