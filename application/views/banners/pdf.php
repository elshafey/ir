<?php if ($type == 'preview') { ?>
    <html>
        <body style="width: 360px;margin: auto">
            <div style="float: left;width: 100%;margin-top: 5px;">
                <img  src="<?php echo site_url('banners/IRW-Banner-Wide-temp.jpg') ?>"  style="float: left;width: 100%;">
            </div>
            <div class="container">
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
            </style>
        </body>
    </html>
<?php } else { ?>
    <html>
        <body style="width: 100%;background-color: white;float: left">
            <?php if ($_REQUEST['type'] == BANNERS_TYPE_WIDE) { ?>
                <style>
                    @font-face {
                        font-family: DINNextLTPro-Bold;
                        src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Bold_0.otf') ?>');
                    }
                    @font-face {
                        font-family: DINNextLTPro-Regular;
                        src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Regular_1.otf') ?>');
                    }
                    *{
                        margin: 0px;
                        padding: 0px;
                        font-family: DINNextLTPro-Bold;

                    }
                    .main-title{
                        color: white;
                        font-size: 285pt;
                        font-weight: bold;
                        position: absolute;
                        z-index: 1000;
                        left: 190px;
                        top: 2125px;
                        width: 2700px;
                    }
                    .sub-title{
                        text-align: left;
                        color: black;
                        font-size: 160pt;
                        position: absolute;
                        z-index: 1000;
                        left: 190px;
                        top: 3280px;
                        width: 2700px;
                    }
                </style>
                <div style="float: left;width: 100%;margin-bottom: 0px;">
                    <img  src="<?php echo site_url('banners/IRW-Banner-Wide-temp.jpg') ?>" style="width: 100%;float: left">
                    <div class="main-title" style="font-family: DINNextLTPro-Bold;"><?php echo $_REQUEST['main_title'] ?></div>
                    <div class="sub-title" style="font-family: DINNextLTPro-Regular!important;"><?php echo $_REQUEST['sub_title'] ?></div>
                </div>
            <?php } elseif ($_REQUEST['type'] == BANNERS_TYPE_PULLUP) { ?>
                <div style="float: left;width: 100%;margin-bottom: 0px;">
                    <img  src="<?php echo site_url('banners/IRW-Pullup-Banners-sample-temp.jpg') ?>" style="width: 100%;float: left">
                    <div class="main-title" style="font-family: DINNextLTPro-Bold;"><?php echo $_REQUEST['main_title'] ?></div>
                    <div class="sub-title" style="font-family:DINNextLTPro-Regular!important;"><?php echo $_REQUEST['sub_title'] ?></div>
                </div>
                <style>
                    @font-face {
                        font-family: DINNextLTPro-Bold;
                        src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Bold_0.otf') ?>');
                    }
                    @font-face {
                        font-family: DINNextLTPro-Regular;
                        src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Regular_1.otf') ?>');
                    }
                    *{
                        margin: 0px;
                        padding: 0px;

                    }
                    .main-title{
                        font-family:DINNextLTPro-Bold !important;
                        color: white;
                        font-size: 210pt;
                        font-weight: bold;
                        position: absolute;
                        z-index: 1000;
                        left: 190px;
                        top: 4400px;
                        width: 2100px;
                    }
                    .sub-title{
                        text-align: left;
                        color: black;
                        font-size: 120pt;
                        position: absolute;
                        z-index: 1000;
                        left: 190px;
                        top: 5400px;
                        width: 2100px;
                    }
                    
                </style>
            <?php } ?>
        </body>
    </html>
<?php } ?>
