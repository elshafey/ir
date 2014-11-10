<?php if ($type == 'preview') { ?>
    <html>
        <body style="width: 360px;margin: auto">
            <div style="float: left;width: 100%;">
                <img  src="<?php echo site_url('business-cards/back.jpg') ?>" style="float: left;width: 100%;">
            </div>
            <div style="float: left;width: 100%;margin-top: 5px;">
                <img  src="<?php echo site_url('business-cards/face.jpg') ?>"  style="float: left;width: 100%;">
            </div>
            <div class="container">
                <div  style="font-size: 12px;color:rgb(39,155,212)"><?php echo $_REQUEST['name'] ?></div>
                <div style=""><?php echo $_REQUEST['title'] ?></div>
                <div style="margin-top: 39px"><?php echo $_REQUEST['address'] ?></div>
                <div style="margin-top: 17px"><?php echo $_REQUEST['tel'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['direct'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['fax'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['email'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['web'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['charity'] ?></div>
            </div>
            <style>
                @font-face {
                    font-family: DINNextLTPro-Regular;
                    src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Regular_1.otf') ?>');
                }
                *{
                    font-family: DINNextLTPro-Regular;
                    font-size: 7px;
                }
                .container{
                    float: left;
                    left: 143px;
                    position: relative;
                    top: -171px;
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
                <img  src="<?php echo site_url('business-cards/back.jpg') ?>" style="width: 100%;float: left">
            </div>
            <div style="float: left;width: 100%;margin-top: 0px">
                <img  src="<?php echo site_url('business-cards/face.jpg') ?>"  style="width: 100%;float: left">
                <div class="container">
                    <div class="card-info"   style="font-family: DINNextLTPro-Bold!important;font-size: 13px;;font-weight: bold;color:rgb(39,155,212);padding-top: 0;"><?php echo $_REQUEST['name'] ?></div>
                    <div class="card-info"  style="padding-top: 0;"><?php echo $_REQUEST['title'] ?></div>
                    <div class="card-info" style="margin-top: 50px;padding-top: 0;"><?php echo $_REQUEST['address'] ?></div>
                    <div class="card-info" style="margin-top: 26px;padding-top: 0;"><?php echo $_REQUEST['tel'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['direct'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['fax'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['email'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['web'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['charity'] ?></div>
                </div>
            </div>
            <style>
                @font-face {
                    font-family: DINNextLTPro-Regular;
                    src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Regular_1.otf') ?>');
                }
                @font-face {
                    font-family: DINNextLTPro-Bold;
                    src: url('<?php echo base_url('layout/fonts/DINNextLTPro-Bold_0.otf') ?>');
                }
                *{
                    margin: 0px;
                    margin-right: 0px!important;
                    padding: 0px;
                    font-family: DINNextLTPro-Regular;
                    font-size: 7px;
                }
                .container{
                    left: 187px;
                    position: absolute;
                    z-index: 1000;
                    top: 320px;
                }
                .card-info{
                    padding-top: 9px;
                    width: 100%;
                    float: left;
                    clear: both;
                }
            </style>
        </body>
    </html>
<?php } ?>
