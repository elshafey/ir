<?php if ($type == 'preview') { ?>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        </head>
        <body style="width: 500px;margin: auto">
            <div style="float: left;width: 100%;margin-top: 5px;">
                <img  src="<?php echo site_url('compliments/template1.jpg') ?>"  style="float: left;width: 100%;">
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
            <div class="bottom">
                <span style="text-align: left;float: left">Registered Charity No. 328158</span>
                <span style="text-align: right;float: right">Company No. 23665572</span>
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
                    top: 204px;
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
                    left: 160px;
                    width:160px;
                }
                .bottom-details{
                    top: 203px;
                }
                .middle-details{
                    top: 194px;
                }
                .top-details{
                    top: 185px;
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
                <img  src="<?php echo site_url('compliments/template1.jpg') ?>" style="width: 100%;float: left">
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
            <div class="bottom">
                <span style="text-align: left;float: left">Registered Charity No. 328158</span>
                <span style="text-align: right;float: right">Company No. 23665572</span>
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
                    top: 305px;
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
                    left: 250px;
                    width:260px;
                }
                .bottom-details{
                    top: 305px;
                }
                .middle-details{
                    top: 291px;
                }
                .top-details{
                    top: 277px;
                }
            </style>
            <?php }else{ ?>
            <div style="float: left;width: 100%;margin-bottom: 0px;">
                <img  src="<?php echo site_url('compliments/template1.jpg') ?>" style="width: 100%;float: left">
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
            <div class="bottom">
                <span style="text-align: left;float: left">Registered Charity No. 328158</span>
                <span style="text-align: right;float: right">Company No. 23665572</span>
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
                    font-size: 18pt;
                    color: #435257;
                    margin: 0;
                    padding: 0;
                }
                .bottom{
                    position: absolute;
                    z-index: 1000;
                    right: 200px;
                    top: 1005px;
                    width: 650px;
                }
                .left-details{float: left;}
                .right-details{float: right;}
                .left-details,.right-details{
                    width: 400px;
                }
                .details{
                    position: absolute;
                    z-index: 1000;
                    left: 830px;
                    width:850px;
                }
                .bottom-details{
                    top: 1005px;
                }
                .middle-details{
                    top: 960px;
                }
                .top-details{
                    top: 915px;
                }
            </style>
            <?php } ?>
        </body>
    </html>
<?php } ?>
