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
                <div style="float: left;width: 100%;margin-bottom: 0px;">
                    <img  src="<?php echo site_url('banners/IRW-Banner-Wide-temp.jpg') ?>" style="width: 100%;float: left">
                    <div class="main-title" style="font-family: DINNextLTPro-Regular;"><?php echo $_REQUEST['main_title'] ?></div>
                    <div class="sub-title" style="font-family:DINNextLTPro-Bold!important;"><?php echo $_REQUEST['sub_title'] ?></div>
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
                    .sub-title{
                        text-align: left;
                        color: black;
                        font-size: 197pt;
                        position: absolute;
                        z-index: 1000;
                        left: 400px;
                        top: 4350px;
                        width: 3000px;
                    }
                    .main-title{
                        font-family:DINNextLTPro-Bold !important;
                        color: white;
                        font-size: 330pt;
                        position: absolute;
                        z-index: 1000;
                        left: 400px;
                        top: 2850px;
                        width: 3000px;
                    }
                </style>
            <?php } elseif ($_REQUEST['type'] == BANNERS_TYPE_PULLUP) { ?>
                <div style="float: left;width: 100%;margin-bottom: 0px;">
                    <img  src="<?php echo site_url('banners/IRW-Pullup-Banners-sample-temp.jpg') ?>" style="width: 100%;float: left">
                    <div class="main-title" style="font-family: DINNextLTPro-Regular;"><?php echo $_REQUEST['main_title'] ?></div>
                    <div class="sub-title" style="font-family:DINNextLTPro-Bold!important;"><?php echo $_REQUEST['sub_title'] ?></div>
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
                        font-size: 270pt;
                        position: absolute;
                        z-index: 1000;
                        left: 300px;
                        top: 5900px;
                        width: 2500px;
                    }
                    .sub-title{
                        text-align: left;
                        color: black;
                        font-size: 140pt;
                        position: absolute;
                        z-index: 1000;
                        left: 300px;
                        top: 7200px;
                        width: 2500px;
                    }
                    
                </style>
            <?php } ?>
        </body>
    </html>
<?php } ?>
