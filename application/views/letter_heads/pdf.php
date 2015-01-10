<?php if ($type == 'preview') { ?>
    <html>
        <body style="width: 500px;margin: auto">
            <div style="float: left;width: 100%;margin-top: 5px;">
                <img  src="<?php echo site_url('letter_heads/IRW_LETTERHEAD_2014-sample_1_temp2_White.jpg') ?>"  style="float: left;width: 100%;">
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
                    left: 160px;
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
        <body style="width: 100%;background-color: white;float: left">
            <div style="float: left;width: 100%;margin-bottom: 0px;">
                <img  src="<?php echo site_url('letter_heads/IRW_LETTERHEAD_2014-sample_1_temp2_White.jpg') ?>" style="width: 100%;float: left">
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
                    font-size: 8pt;
                    color: #435257;
                    margin: 0;
                    padding: 0;
                }
                .bottom{
                    position: absolute;
                    z-index: 1000;
                    right: 80px;
                    top: 1363px;
                    width: 268px;
                }
                .left-details{float: left;}
                .right-details{float: right;}
                .left-details,.right-details{
                    width: 150px;
                }
                .details{
                    position: absolute;
                    z-index: 1000;
                    left: 324px;
                    width:340px;
                }
                .bottom-details{
                    top: 1363px;
                }
                .middle-details{
                    top: 1343px;
                }
                .top-details{
                    top: 1324px;
                }
            </style>
        </body>
    </html>
<?php } ?>
