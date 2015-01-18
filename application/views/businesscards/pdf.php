<?php if ($type == 'preview') { ?>
    <html>
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
    <!--                <div class="card-info" style=""><?php echo $_REQUEST['web'] ?></div>
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
        <body style="width: 100%;background-color: white;float: left">
            <div style="float: left;width: 100%;margin-bottom: 0px;">
                <img  src="<?php echo site_url('business-cards/IRW_BUSCARD_EN_2014-sample_1.jpg') ?>" style="width: 100%;float: left">
            </div>
            <div style="float: left;width: 100%;margin-top: 0px">
                <img  src="<?php echo site_url('business-cards/IRW_BUSCARD_EN_2014-sample_2_temp_white.jpg') ?>"  style="width: 100%;float: left">
                <div class="container">
                    <div class="card-info"   style="font-family: DINNextLTPro-Medium;font-size: 12pt;color:#329fff;padding-top: 0;"><?php echo $_REQUEST['name'] ?></div>
                    <div class="card-info"  style="font-family: DINNextLTPro-Medium;padding-top: 0"><?php echo $_REQUEST['title'] ?></div>
                    <div class="card-info" style="font-family: DINNextLTPro-Medium;font-size: 7pt;color:#329fff;padding-top: 25px;">Islamic Relief Worldwide</div>
                    <div class="card-info" style="font-family: DINNextLTPro-Medium;padding-top: 0;"><?php echo $_REQUEST['address'] ?></div>
                    <div style="margin-top: 14px;float: left">
                        <div class="card-info" style="padding-top: 0;">
                            <span><?php echo $_REQUEST['tel'] ?></span>
                        </div>
                        <div class="card-info" style="">
                            <span></span>
                            <span><?php echo $_REQUEST['direct'] ?></span></div>
                        <div class="card-info" style="">
                            <span></span>
                            <span><?php echo $_REQUEST['fax'] ?></span>
                        </div>
                        <div class="card-info" style="">
                            <span></span>
                            <span><?php echo $_REQUEST['email'] ?></span>
                        </div>
                        <div class="card-info" style="">
                            <span></span>
                            <span><?php echo $_REQUEST['web'] ?></span>
                        </div>
                        <div class="card-info" style="">
                            <span></span>
                            <span><?php echo $_REQUEST['charity'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="titles">
                    <div  class="card-info">tel</div>
                    <div  class="card-info">direct</div>
                    <div  class="card-info">fax</div>
                    <div  class="card-info">email</div>
                    <div  class="card-info">web</div>
                    <div  class="card-info">charity reg.</div>
                </div>
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
                    margin: 0px;
                    margin-right: 0px!important;
                    padding: 0px;
                    font-family: DINNextLTPro-Regular;
                    font-size: 7pt;
                    color: #435257;
                    text-align: left;
                }
                .container{
                    left: 120px;
                    position: absolute;
                    z-index: 1000;
                    top: 260px;
                    /*width: 100%;*/
                }
                .card-info{
                    padding-top: 2px;
                    width: 100%;
                    float: left;
                    clear: both;
                }
                .titles{
                    left: 0px;
                    position: absolute;
                    z-index: 1000;
                    top: 349px;
                    width: 115px;
                }
                .titles *{
                    color: #329fff!important;
                    font-family: DINNextLTPro-Medium !important;
                    text-align: right;
                }
            </style>
        </body>
    </html>
<?php } ?>
